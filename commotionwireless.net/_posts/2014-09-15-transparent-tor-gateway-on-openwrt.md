---
layout: blog
title: Transparent Tor Gateway on OpenWRT
categories: [Tor, OpenWRT]
created: 2014-09-15
changed: 2014-09-15
teaser_image: posts/torlogo.png
post_author: Dan Staples
lang: en
---

*This post originally appeared on <a href="https://disman.tl/2014/09/13/transparent-tor-gateway-on-openwrt.html" target="_blank">disman.tl</a>.*

When I was getting ready to go to [DEF CON][] 22 this year in Las Vegas, I knew I would have to bring a spare laptop with an OS I could wipe when I got home (and cross my fingers that I didn't get any BIOS or firmware-level malware while I was there). Instead of just installing a vanilla Linux OS like [Linux Mint][] (my favorite distro) like I did last time I went to DEF CON, I thought I'd try installing something a bit more hardened and security focused.<!--more--> I'd been playing around with [Qubes OS][] for a while on a new desktop machine I had, and thought that would be a good candidate.

Qubes OS is an operating system built around the principle of "security by isolation". It is built on top of the [Xen hypervisor][xen] with several Linux VM domains. The nice thing about Qubes is that, not only does it do as much as possible to reduce the attack surface of its various component VMs, it encourages the user by necessity to consider the compartmentalization of their digital activities and adjust their behavior to comply with a scheme of multiple "security domains". There are certainly tradeoffs, as there always are, in terms of convenience, but it is a remarkably well-designed and implemented OS for those who hope to increase their digital security posture.

One of my favorite aspects of Qubes OS is the ability to [transparently "Tor-ify" any virtual machine][torVM]. You can effectively force all network communications of a VM to be routed over Tor (traffic that isn't TCP or DNS is dropped, of course), with no risk of accidentally leaking your real IP address except in the event of a sophisticated kernel-level attack. No need for applications to be "Tor aware", and it even has [stream isolation][]. As with most Tor discussions, however, be aware that torifying your traffic isn't an anonymity silver bullet; this does nothing to prevent [browser fingerprinting][] or prevent user error.

Since I recently [installed Kali linux][kali] on my spare laptop, I thought it would be nice to have a similar mechanism for forcibly torifying all my traffic from that machine. One of the talks I saw at DEF CON was about a system called the Personal Onion Router To Assure Liberty ([PORTAL][]), which does exactly that. Basically it uses a dedicated wireless router that will transparently route all your traffic over Tor. As a router hacker, I have plenty of spare routers I could dedicate solely to this purpose, but I thought it would be pretty nifty to instead have the 5GHz access point on my main home router be a Tor gateway, while leaving the other 2.4GHz access point to route traffic normally. That way, I could have a router with options to provide both 'anonymous' access and normal access to the Internet.

I have a [TP-Link TL-WDR4300][wdr4300], a great MIMO-capable and dual-band router that is currently running a recent trunk build of [OpenWRT][] Barrier Breaker. Tor can be a pretty CPU intensive process if you're generating a lot of traffic, and it has a hefty memory and space footprint on a router, so I would recommend getting something with at the very least 8MB storage and 64MB RAM. The TL-WDR4300 has plenty of both, plus it uses the ever-hackable Atheros ath9k wireless driver. Fortunately, I'm pretty familiar with the platform we'll be hacking on, since I help build [custom mesh router firmware][commotion] based on OpenWRT for my day job. So let's get started!

Building the software
=====================

I'd recommend building OpenWRT from the [latest Barrier Breaker source][getsource] (14.07) due to its many improvements since the previous version of OpenWRT, but Attitude Adjustment (12.09) will do fine as well. PORTAL uses Attitude Adjustment, but since my router was already using Barrier Breaker I decided to go with that. Although OpenWRT comes with a Makefile for Tor, we're going to pull in the Makefile and additional patchset from PORTAL to replace it. First make sure to [install the build dependencies][dependencies], then start the build process:

    $ git clone git://github.com/grugq/portal.git
    $ git clone git://git.openwrt.org/14.07/openwrt.git barrier-breaker
    $ cd barrier-breaker
    $ scripts/feeds update -a
    $ scripts/feeds install -a
    $ cp -r ../portal/feeds/packages/net/tor-alpha/ package/feeds/packages/
    $ rm -r package/feeds/oldpackages/tor-alpha
    $ make menuconfig

Now you'll be able to choose the target system and target profile for your router (in my case, `Atheros AR7xxx/AR9xxx` for the system and `TP-LINK TL-WDR3500/3600/4300/4310/MW4350R` for profile), and select any packages you want to include. Be sure to select `Network->tor-alpha`, `Network->tor-alpha-fw-helper`, and `Network->tor-alpha-geoip`. I also included other utilities and features that I wanted to have on my router such as USB block storage support. When you're finished selecting your packages, save and exit the menuconfig screen. Now you can build your firmware:

    $ make V=s

This will take quite a while, so be patient.

Installing and configuring
==========================

Now you have the option of either [flashing your router][flash] with your newly built images, or copying and installing the specific packages for Tor and its dependencies onto a router already running (the same version of) OpenWRT. If you opt for the latter, you'll need to copy the following packages from `bin/<target profile>/packages/` and install them with `opkg install <list of package files>`:

    libevent2-openssl libevent2 libminiupnpc libnatpmp tor-alpha tor-alpha-fw-helper tor-alpha-geoip

Either way, once you have a router up and running with Tor, you'll need to configure the network interfaces. My setup is to have a non-Tor access point on the TL-WDR4300's 2.4GHz radio, a Torified access point on the 5GHz radio, and then split the Ethernet switch into two virtual LANs (one for the WAN port and the other for the four LAN ports). Here's my final network configuration from `/etc/config/network`:

    config interface 'loopback'
	    option ifname 'lo'
	    option proto 'static'
	    option ipaddr '127.0.0.1'
	    option netmask '255.0.0.0'

    config interface 'lan'
	    option ifname 'eth0.1'
	    option type 'bridge'
	    option proto 'static'
	    option netmask '255.255.255.0'
	    option ip6assign '60'
	    option ipaddr '192.168.5.1'

    config interface 'wan'
	    option ifname 'eth0.2'
	    option proto 'dhcp'

    config switch
	    option name 'switch0'
	    option reset '1'
	    option enable_vlan '1'

    config switch_vlan
	    option device 'switch0'
	    option vlan '1'
	    option vid '1'
	    option ports '0t 2 3 4 5'

    config switch_vlan
	    option device 'switch0'
	    option vlan '2'
	    option vid '2'
	    option ports '0t 1'

    config interface 'tor'
	    option proto 'static'
	    option ipaddr '172.16.1.1'
	    option netmask '255.255.255.0'

The important block here is the `tor` interface, which is set to a static IPv4 address of `172.16.1.1`. Now let's take a look at `/etc/config/wireless` to see how the access points are setup:

    config wifi-device 'radio0'
	    option channel '11'
	    option disabled '0'
	    [...]

    config wifi-iface
	    option device 'radio0'
	    option network 'lan'
	    option mode 'ap'
	    option ssid 'The Internet!'
	    option encryption 'psk2'
	    option key 'zomgsupersecret'

    config wifi-device 'radio1'
	    option channel '161'
	    option disabled '0'
	    [...]

    config wifi-iface
	    option device 'radio1'
	    option mode 'ap'
	    option ssid 'The Dark Web!'
	    option encryption 'none'
	    option network 'tor'

Note here that `radio0`, the 2.4GHz radio, has one access point called `The Internet!` with a (fake) password that is bridged with the `lan` network (as we saw in `/etc/config/network` above), since it allows unadulterated access to the internet as well as my home network. Then there's `radio1`, the 5GHz radio, which has an access point called `The Dark Web!` and no password, since I'm less concerned about random folks using it. It is also part of the `tor` network, which we saw before. Now we'll get into the firewall configuration, which will place restrictions on what clients to the Tor AP can do:

    config defaults
	    option syn_flood '1'
	    option input 'ACCEPT'
	    option output 'ACCEPT'
	    option forward 'REJECT'

    config zone
	    option name 'lan'
	    option input 'ACCEPT'
	    option output 'ACCEPT'
	    option forward 'ACCEPT'
	    option network 'lan'

    config zone
	    option name 'wan'
	    option input 'REJECT'
	    option output 'ACCEPT'
	    option forward 'REJECT'
	    option masq '1'
	    option mtu_fix '1'
	    option network 'wan'

    config zone
	    option name 'tor'
	    option network 'tor'
	    option input 'REJECT'
	    option output 'ACCEPT'
	    option forward 'REJECT'
	    option conntrack '1'

    config rule
	    option name 'Allow-Tor-DHCP'
	    option src 'tor'
	    option proto 'udp'
	    option dest_port '67'
	    option target 'ACCEPT'
	    option family 'ipv4'

    config rule
	    option name 'Allow-Tor-DNS'
	    option src 'tor'
	    option proto 'udp'
	    option dest_port '9053'
	    option target 'ACCEPT'
	    option family 'ipv4'

    config rule
	    option name 'Allow-Tor-Transparent'
	    option src 'tor'
	    option proto 'tcp'
	    option dest_port '9040'
	    option target 'ACCEPT'
	    option family 'ipv4'

    config rule
	    option name 'Allow-Tor-SOCKS'
	    option src 'tor'
	    option proto 'tcp'
	    option dest_port '9050'
	    option target 'ACCEPT'
	    option family 'ipv4'

    config rule
	    option name 'Allow-DHCP-Renew'
	    option src 'wan'
	    option proto 'udp'
	    option dest_port '68'
	    option target 'ACCEPT'
	    option family 'ipv4'

    config rule
	    option name 'Allow-Ping'
	    option src 'wan'
	    option proto 'icmp'
	    option icmp_type 'echo-request'
	    option family 'ipv4'
	    option target 'ACCEPT'

    config forwarding
	    option dest 'wan'
	    option src 'lan'

    config include
	    option path '/etc/firewall.user'

Some things to note here:

* The `tor` zone rejects input and forwarding, and also has connection tracking turned on for additional iptables rules
* Several types of traffic are specifically allowed from clients on the Tor access point, including DHCP, DNS, SOCKS, and the transparent proxy on port 9040 (which we'll get to soon)
* There is no forwarding between the `tor` and `wan` zones (or `lan` for that matter), ensuring no traffic gets leaked to the internet<a href="#note1">[1]</a>
* The file `/etc/firewall.user` is run whenever the firewall is turned on

We can see how connection tracking turned on for traffic in the `tor` zone is used when we look at `/etc/firewall.user`:

    root@OpenWRT:~# cat /etc/firewall.user
    [...]
    enable_transparent_tor() {
      iptables -t nat -A PREROUTING -i wlan1 -p udp --dport 53 -j REDIRECT --to-ports 9053
      iptables -t nat -A PREROUTING -i wlan1 -p tcp --syn -j REDIRECT --to-ports 9040 
    }
    enable_transparent_tor

This shows that any DNS traffic from the `wlan1` interface (our Tor access point) is redirected to port 9053, so the DNS query is done through Tor, and that TCP traffic is redirected to port 9040. As we saw above, port 9040 is Tor's transparent proxy service. This is the magic that allows us to transparently route all (TCP) traffic on the access point through the Tor network. Cool, right?

The only remaining item is to configure the Tor access point to hand out IP addresses to clients with DHCP. All we need to do is add the following block to the end of `/etc/config/dhcp`:

    config dhcp tor
	    option interface    tor
	    option start        100
	    option limit        150
	    option leasetime    1h

Conclusion
==========

With all those configurations in place, reboot your router and connect to your new Torified access point. Open [https://check.torproject.org/][check] in your browser, and if everything went correctly, it should indicate you are connected to the Tor network (but not using the Tor Browser Bundle obviously).

Notes
=====

<span id="note1"></span>[1] PORTAL takes this one step further by disabling IP forwarding in the kernel, which is essentially the feature that makes a router a router. Granted, leaving IP forwarding turned on for my router could theoretically be more risky for transparently torifying traffic, but I'm not sure that's actually a significant risk.

[dependencies]: http://wiki.openwrt.org/doc/howto/buildroot.exigence
[flash]: http://wiki.openwrt.org/doc/howto/generic.flashing
[stream isolation]: https://gitweb.torproject.org/torspec.git/blob/HEAD:/proposals/171-separate-streams.txt
[torVM]: https://wiki.qubes-os.org/wiki/UserDoc/TorVM
[xen]: http://www.xenproject.org/developers/teams/hypervisor.html
[Qubes OS]: https://wiki.qubes-os.org/
[browser fingerprinting]: https://panopticlick.eff.org/
[kali]: /2014/09/12/installing-kali-linux-from-scratch.html
[PORTAL]: https://github.com/grugq/portal/
[wdr4300]: http://wiki.openwrt.org/toh/tp-link/tl-wdr4300
[commotion]: https://commotionwireless.net
[getsource]: https://dev.openwrt.org/wiki/GetSource
[Linux Mint]: http://www.linuxmint.com/
[DEF CON]: https://www.defcon.org/
[OpenWRT]: https://openwrt.org/
[check]: https://check.torproject.org/