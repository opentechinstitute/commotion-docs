---
layout: default
title: Commotion R1 Breaking Changes
categories: [R1,upgrade]
created: 2014-01-10
changed: 2014-01-10
post_author: danstaples
lang: en
---
 <div class="meta">
  <span class="author">{{page.created}} - {{ page.post_author }}</span>
</div>
 <p>The latest Commotion release, <a href="https://commotionwireless.net/download/routers">R1 “Grumpy Cat”</a>, builds upon and enhances features from previous Commotion releases. Although we strived to keep Commotion familiar and compatible with previous revisions wherever possible, R1 introduced significant changes that both users and developers should know about. These changes affect the basic networking components of Commotion, and have been longstanding development priorities. First, we will discuss the technical details of the changes and the reasoning behind them, and at the end we'll talk about the compatibility issues this brings up for those running pre-R1 Commotion networks.</p>

<p>&nbsp;</p>

<p><strong>IP Addressing</strong></p>

<p>The first change is the IP addressing schema we use. If you've used previous releases of Commotion, you might have noticed that devices on the mesh network assign themselves IP addresses somewhere in the 5.0.0.0/8 range. Additionally, if you've connected to a Commotion router running a previous release, your client device would have gotten a 101.x.x.x, 102.x.x.x, or 103.x.x.x IP address. Readers experienced in computer networking will realize that all of these IP address ranges are technically public space, and using them for Commotion could potentially break routing to devices assigned these IP addresses on the public internet.</p>

<p>These address ranges were originally selected to maintain compatibility with one of Commotion's predecessors. Before Commotion existed in its current form, the Open Technology Institute was working on a project to supplement an existing community wireless network with new mesh routers. The custom software that was written for those devices was created to be backward-compatible with the routers already in place, which were running a version of the <a href="http://robin.forumup.it" target="_blank">R.O.B.I.N. firmware</a>. The default IP address ranges of the R.O.B.I.N. firmware were adopted for our custom software, and that project eventually became the seed of what would become Commotion.</p>

<p>For R1, we have moved away from publicly allocatable IP addresses and are now using private ranges. But this introduces another problem: most residential and commercial IPv4 networks use the same handful of private address ranges due to the shortage of public IPv4 addresses. If we use one of these common private address ranges for Commotion, we run the risk of interfering with upstream gateway networks and thus causing routing problems.</p>

<p>To solve this problem, we have chosen to use the Carrier-Grade NAT shared address space (<a href="http://tools.ietf.org/search/rfc6598" target="_blank">RFC6598</a>) for all mesh devices. This allows us to use IP addresses in the range 100.64.0.0/10. In addition, all client networks are now bridged and use the <a href="http://tools.ietf.org/html/rfc1918" target="_blank">RFC1918</a> private address range 10.0.0.0/8.</p>

<p>Another approach to the problem of IPv4 address collision would be to move to a fully IPv6 address space. However, in order to better support the largest variety of hardware possible, we decided to stay with a default IPv4 network for now, while looking into supporting IPv6 in future releases.</p>

<p>&nbsp;</p>

<p><strong>Adhoc Wireless Settings</strong></p>

<p>Previous versions of Commotion came preconfigured with default values for the adhoc/mesh wireless network settings. We chose “commotionwireless.net” as the SSID, “02:CA:FF:EE:BA:BE” as the BSSID (a BSSID commonly used in wireless mesh networks), and a default channel of 5. In the R1 version of Commotion, users are asked to choose a channel and SSID during setup, so the old defaults are no longer relevant.</p>

<p>The more significant change concerns the adhoc BSSID, a value that, like the adhoc SSID, must be shared by all devices in a particular mesh network. Instead of asking the user to choose a BSSID, which is a string of six bytes represented as twelve hexadecimal characters, we opted to use deterministic BSSID generation. This means that the BSSID is now generated as a hash of the adhoc SSID and channel, an idea originally suggested by frequent Commotion contributors Hans-Christoph Steiner and Sean McIntyre.</p>

<p>This change will help to prevent certain wireless drivers from ignoring the requested BSSID and roaming to a matching SSID. In R1, Commotion nodes with the same BSSID always have the same SSID and channel, and vice versa. This also has the added benefit of not bothering the user with an unnecessary technical detail.</p>

<p>&nbsp;</p>

<p><strong>Backward Compatibility</strong></p>

<p>The unfortunate side effect of these changes is that Commotion R1 is not backward compatible with previous releases. In order to upgrade your pre-R1 Commotion network, we recommend flashing all the nodes on your network to R1 via <a href="https://commotionwireless.net/docs/cck/installing-configuring/install-and-recover-tftp">factory reset</a> or the sysupgrade method (<strong>be sure to *uncheck* “Save settings” when sysupgrading to R1</strong>). After flashing the nodes, follow the Setup Wizard to set the relevant settings for the node. Once that is finished, you should be all set!</p>

<p>After upgrading to R1, your nodes now have the ability to save their settings during future upgrades. To do this, you can keep the “Save settings” option checked when using the sysupgrade method.</p>

<p>Have you given R1 a try? <a href="https://commotionwireless.net/contact">Let us know what you think</a> in our feedback form.</p>
 <div class="tags">Tags: {{ page.categories }}</div>