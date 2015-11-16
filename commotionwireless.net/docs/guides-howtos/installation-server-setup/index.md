---
layout: default
title: MikroTik Installation Server Setup
site_section: docs
sub_section: [guides]
pdf:
pdf-all:
categories:
created: 2014-10-21
changed: 2014-10-22
post_author: andygunn
lang: en
---

<section id="section-introduction">
<h2>Introduction</h2>

<p>MikroTik routers require a different installation process than most other routers: they pull software from servers on a network, rather than you uploading the software to the device. This requires you to set up the required servers up before you can install Commotion on your MikroTik device. The three servers you will need to set up are:</p>
<ol class="rteindent1">
    <li>A Netboot server that can assign an IP to the router with DHCP or BootP</li>
    <li>A TFTP server that provides the router the first set of firmware files</li>
    <li>A Web server that provides the router with the second set of firmware files</li>
</ol>

<p>This guide installs and configures the following two server packages:
<ol class="rteindent1">
    <li><strong>dnsmasq</strong> - a lightweight DNS and DHCP server. This provides the Netboot and TFTP functions into one package.</li>
    <li><strong>lighttpd</strong> - a lightweight web server. It will respond to requests just like a web server on the Internet, but is only configured here to provide firmware to your routers.</li>
</ol>

</section>

<section id="using-linux">
<h2>Using Linux</h2>

<p>This guide is written for computers running Debian Linux or a variant such as Ubuntu or Mint. It may be possible to set up the same server packages using Windows or Mac OSX, but those are not documented here.</p>

<p>If you do not have access to a Linux computer, you may be able to set up an instance of Linux using a virtual machine on another platform, but that is beyond the scope of this guide.</p>

</section>

<section id="install-configure-dnsmasq">
<h2>Install and Configure dnsmasq</h2>

<p>First, disconnect your computer from any network you are attached to. The dnsmasq server can assign IP addresses to any computer on your network once it is configured, which can cause strange behavior. For this reason, you should be very careful to turn the server on only when you are using it to install Commotion. All other times your computer is running, the dnsmasq service should be turned off. We will cover that below.</p>

<p>Next, open a terminal window and type:</p>
<pre>sudo apt-get install dnsmasq</pre>

<p>Wait for your system to install the package, then stop the service if it is running:</p>
<pre>sudo service dnsmasq stop</pre>

<p>You should see a message stating that the server has been shut off.</p>

<p>Also, you should disable dnsmasq from starting when you boot up your computer:</p>
<pre>sudo update-rc.d -f dnsmasq remove</pre>
<p><img src="/files/Install_MikroTik-dnsmasq_install_commands_combined.png" class="img-responsive" /></p>

<p>Next, configure dnsmaq to provide only the services needed to install Commotion. These are to provide a DHCP server on the wired Ethernet port, and to enable the TFTP/BootP service to serve files to the routers.</p>

<p>Dnsmasq is configured in the file <strong>/etc/dnsmasq.conf</strong>. There are many, many options for configuring dnsmasq, and below are only the lines needed for the installation server's configuration.</p>
<pre>
# Our server only has one ethernet port. Check yours to ensure
you're enabling the right port
interface=eth0
#bind-interfaces

# You can specify whatever dhcp-range you like, or per your
environment's specific requirements (for instance if this is a
production server)
dhcp-range=192.168.10.100,192.168.10.120,255.255.255.0,12h

dhcp-leasefile=/var/lib/misc/dnsmasq.lease

# For each device you want to TFTP boot, you need a dhcp-host
entry with the MAC address and the IP to give that client.
# You'll need to look up the MAC address of the device and
add a line here for it to be recognized.
dhcp-host=xx:xx:xx:xx:xx:xx,192.168.10.101

# The name of the boot file to be provided to dhcp-hosts. This
file should be saved in the 'tftp-root' folder (see below)
dhcp-boot=openwrt-ar71xx-nand-vmlinux-initramfs-lzma.elf

# Enable dnsmasq's built in tftp/bootp server
enable-tftp

# Designate where TFTP/BOOTP files will be served from on this
server
tftp-root=/var/lib/tftproot
log-queries
log-dhcp
</pre>

<p>You can download the file <a href="/files/Commotion_dnsmasq.conf">here</a> and use the following steps to move it into place. (Right click and select "Save link as...")</p>

<p>You will first need to edit the dnsmasq.conf file to provide the Ethernet MAC address of your MikroTik device. In the file example above, the line reads:</p>
<p><pre>dhcp-host=xx:xx:xx:xx:xx:xx,192.168.10.101</pre></p>
<p>The section “xx.xx.xx.xx.xx.xx” signifies the MAC address of your router. You will need to change this to the proper MAC address for your MikroTik device. The number will look something more like <strong>a6:9b:45:23:ab:f2</strong>, and should have been provided in the box with the router, either on a sticker or slip of paper. Keep this attached to the router or saved in a file for later, in case you need to run this install process again.</p>

<p>You can use your favorite text editor to edit the file provided before you copy it with the command below. For example, to run the editor gedit on the configuration file, type:</p>
<p><pre>gedit ~/location_of_file/Commotion_dnsmasq.conf</pre></p>

<p>Make a backup of the existing dnsmasq.conf file before copying anything over it.</p>
<p><pre>sudo mv /etc/dnsmasq.conf /etc/dnsmasq.conf.bak</pre></p>
<p>Then copy the edited file into the proper directory:</p>
<p><pre>sudo cp ~/location_of_file/Commotion_dnsmasq.conf /etc/dnsmasq.conf</pre></p>
<p>(where location_of_file is where you saved the Commotion software files)</p>

<p>You will need to make a directory for the files to be loaded from via TFTP. To do this, type the following at the command prompt:</p>
<p><pre>
sudo mkdir /var/lib/tftproot
sudo cp ~/location_of_file/openwrt-ar71xx-nand-vmlinux-initramfs-lzma.elf /var/lib/tftproot/
</pre></p>
<p>(where location_of_file is where you saved the Commotion software files)</p>

<p>We won’t start dnsmasq in this guide until the end.</p>

</section>

<section id="install-configure-lighttpd">
<h2>Install and Configure lighttpd</h2>

<p>Open a terminal and type the following at the command line to install the web server package: </p>
<p><pre>sudo apt-get install lighttpd</pre></p>

<p>Wait for your system to install the package, then stop the service if it is running:</p>
<p><pre>sudo service lighttpd stop</pre></p>
<p>You should see a message stating that the server has been shut off.</p>

<p>Also, you should disable lighttpd from starting when you boot up your computer:</p>
<p><pre>sudo update-rc.d -f lighttpd remove</pre></p>
<p><img src="/files/Install_MikroTik-lighttpd_install_commands_combined.png" class="img-responsive" /></p>

<p>Lighttpd's default web pages and files are hosted at /var/www. You will copy the installation files into /var/www with the commands:</p>
<p><pre>
sudo cp ~/location_of_file/openwrt-ar71xx-nand-vmlinux-lzma.elf /var/www/
sudo cp ~/location_of_file/openwrt-ar71xx-nand-rootfs.tar.gz /var/www/
</pre></p>
<p>(where location_of_file is where you saved the Commotion software files)</p>
<p>After network booting, the device uses a special program called <strong>wget2nand</strong> on the router to install the kernel and filesystem onto the device. That is why files need to be hosted by your webserver.</p>

</section>

<section id="start-server-programs">
<h2>Start the server programs</h2>

<p>Now that you have installed both server packages and copied the files to the proper locations, we can start the server programs and proceed with the other installation steps required.</p>

<p>Before you do this, you will need to set your computer’s Ethernet port to the Static IP address information below:</p>
<ul class="rteindent1">
    <li>IP Address: 192.168.10.254</li>
    <li>Netmask: 255.255.255.0</li>
    <li>Gateway: nothing or blank</li>
</ul>

<p>In a terminal, type the following commands:</p>
<p><pre>
sudo service dnsmasq start
sudo service lighttpd start
</pre></p>

<p>Dnsmasq should now be providing DHCP leases to routers connected to your computer (whether directly or through an Ethernet switch) and for devices in the configuration file that are identified by the dhcp-host line you edited before (dhcp-host=xx:xx:xx:xx:xx:xx,192.168.10.101), dnsmasq will provide a Commotion firmware file for network boot. To confirm dnsmasq is running, you can connect the Ethernet port specified in your configuration to a switch, and then connect a PC or laptop to that same switch. The PC should get a DHCP lease from the server.</p>

<p>Lighttpd should also be running now at this point. It will be serving web pages to any computer that can connect to it, and will provide the Commotion software files to the routers attached to the switch mentioned above. To confirm lighttpd is running, open a web browser and type “http://localhost” in the URL bar. You should see the default web page - something similar to “Placeholder page”.</p>

<p>At this point, you can return to the <a href="/docs/cck/installing-configuring/install-mikrotik-router/">Install on a MikroTik Router</a> guide.</p>

</section>
