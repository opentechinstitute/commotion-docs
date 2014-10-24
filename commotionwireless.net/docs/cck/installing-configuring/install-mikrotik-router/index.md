---
layout: cck
title: Install on a MikroTik Router
site_section: docs
sub_section: [cck,cck-installing]
pdf: 
pdf-all:
categories: 
created: 2014-10-21
changed: 2014-10-22
post_author: andygunn
lang: en
---

<p><img alt="Install on a router graphic" src="/files/Install_MikroTik_intro_graphic.png" style="max-width:600px;" /></p>

<section id="section-introduction">
<h2>Introduction</h2>

<p>This document contains a step-by-step process for installing the Commotion software on MikroTik routers. If you have a new, in-the-box MikroTik device, this guide is for you.</p>

<p>We have written this guide because the Open Technology Institute is expanding Commotion router software support for MikroTik routers. The software is an alternative operating system, similar to Linux for +your home or office computer. MikroTik hardware comes from the factory installed with their custom software, called RouterOS - just like a new computer usually comes with Microsoft Windows or Mac OSX installed. Installing Commotion on your router instead will add new features to your router, including the ability to mesh with other routers that use Commotion.</p>

<p>The instructions for installing Commotion on MikroTik devices are much more complicated than those for Ubiquiti or TP-Link hardware. The guide assumes you are familiar with Linux and working on the command line. The installation process should take about an hour, or longer. If these steps do not work for you, or if you have a router that failed to properly flash Commotion or will not respond in any way, then please see the <a href="#external-resources">External Resources</a> section.</p>

<p><strong>Time required: 1 hour or more.</strong></p>
</section>

<section id="section-materials-and-supplies-needed">
<h2>Materials + Supplies Needed</h2>

<p>To install Commotion, you will need the following items on-hand:</p>

<ol class="rteindent1">
    <li>A computer with an Ethernet port.</li>
    <li>The MikroTik router and its power supply (or a 24V PoE supply).</li>
    <li>Access to a power outlet.</li>
    <li>One Ethernet switch with two open ports.</li>
    <li>Two Ethernet cables.</li>
    <li>A computer with a serial port, or a USB-to-Serial adapter.</li>
    <li>A serial cable to connect to a DB-9 male serial console</li>
    <li>An Internet connection or the appropriate Commotion software image.</li>
</ol>

<p>&nbsp;</p>

<p class="tip">If your computer doesn’t have a serial port, you will need a USB to serial adapter. Some examples of these can be found in the <strong>External Resources</strong> section.
</p>

</section>

<section id="section-download-commotion">
<h2>Download Commotion</h2>

<p>Download the MikroTik Commotion images for your hardware:<br />
<a href="/download/routers">https://commotionwireless.net/download/routers</a></p>

<p><img src="/files/CCK-Install_TP-Link_download_screenshot.png" style="max-width:700px;" /></p>

<p>You will need three files to fully install Commotion on your MikroTik routerboard device:</p>
<ul class="rteindent1">
    <li><strong>openwrt-ar71xx-nand-vmlinux-initramfs-lzma.elf</strong></li>
    <li><strong>openwrt-ar71xx-nand-rootfs.tar.gz</strong></li>
    <li><strong>openwrt-ar71xx-nand-vmlinux-lzma.elf</strong></li>
</ul>

<p>&nbsp;</p>

<p class="tip">Save the file somewhere you can access easily later. A good place to save the file is on your Desktop, or in your Downloads directory.</p>
</section>

<section id="configure-your-computer">
<h2>Configure your computer</h2>

<p>The Commotion software cannot be written directly to the router’s storage via the update system in Mikrotik's RouterOS. So installing Commotion is a two step process:</p>

<ul class="rteindent1">
    <li>First, boot the router from a DHCP server on the local area network. A TFTP server  then provides an .ELF firmware file that is loaded into the router's memory.</li>
    <li>Second, a Web server provides a separate firmware file on the local area network for permanent installation.</li>
</ul>

<p>These server packages must be installed on whatever computer you are installing the Commotion software from. For a guide on installing and running these servers, please see the <a href="/docs/guides-howtos/installation-server-setup/">MikroTik Installation Server Setup</a>. Read through and perform the necessary steps in those instructions before coming back to this document and proceeding with the installation.</p>

</section>

<section id="setup-the-hardware">
<h2>Setup the Hardware</h2>

<p><img src="/files/Install_MikroTik_prepare_hardware.png" style="max-width:600px;" /></p>

<ol class="rteindent1">
    <li>Unpack the MikroTik router and install the external antennas (if the unit has them).</li>
    <li>Turn off your computer’s Wi-Fi, if it is on.</li>
    <li>Plug in one Ethernet cable to the Switch, then plug that cable into your computer’s Ethernet port.</li>
    <li>Plug in a second Ethernet cable between the Switch and the Ethernet port on the MikroTik router.</li>
    <li>Plug in the USB-to-Serial adapter to your computer, and connect the DB-9 connector to the Serial Console port on the MikroTik router.</li>
</ol>

<p>Don’t plug in the router yet - there are a few more setup steps.</p>

</section>

<section id="setup-the-serial-console">
<h2>Setup the Serial Console</h2>

<p>If you don’t have a terminal program that can access serial port consoles installed, you can use <strong>minicom</strong> or something similar. Open a terminal and install the package by typing the following:</p>
<p><pre>sudo apt-get install minicom</pre></p>

<p>You will need to configure minicom to the proper port and data-rate for your MikroTik router. Run the following command in the terminal:</p>
<p><pre>sudo minicom -s</pre></p>

<p>You will be presented with a setup menu:</p>
<p><img src="/files/Install_MikroTik-minicom_menu.png" style="max-width:510px" /></p>

<p>Use the arrow keys to move down to the “Serial Port Setup” menu and hit enter. Here you can change the serial port to the address the USB-to-Serial adapter uses. Type “a” and change /dev/xxx to <strong>/dev/ttyUSB0</strong> (for most USB-to-Serial adapters). Hit enter and then “e” to change the bit rate. Type “E” again to select the 115,200 bps rate, and leave the flow control to 8 bits, no parity, 1 stop bit (8N1). Hit enter to exit back to the previous menu. Hit enter again to return to the previous menu.</p>
<p><img src="/files/Install_MikroTik-minicom_serial_port_menu.png" style="max-width:510px" /></p>

<p>At this point we can save the settings. Scroll down to “Save setup as dfl” and hit enter. This will save your changes as the default settings for the program.</p>
<p><img src="/files/Install_MikroTik-minicom_save_as_default.png" style="max-width:510px" /></p>

<p>Scroll down to “Exit” and hit enter. You will be moved to the minicom program, which will be waiting for input from the serial port. <strong>Leave this terminal window open</strong> to be ready for the next set of steps.</p>
<p><img src="/files/Install_MikroTik-minicom_running.png" style="max-width:510px" /></p>

</section>

<section id="load-software">
<h2>Load the software to memory</h2>

<p>If you haven’t started the Netboot and Web server packages on your computer, do that now. Also make sure your Ethernet interface has the static IP address 192.168.10.254. If you used the configuration file provided and steps shown in <a href="/docs/guides-howtos/installation-server-setup/">MikroTik Installation Server Setup</a> you should be ready to go.</p>

<p>Once you have the servers installed and running, plug the power adapter into an easily accessible wall outlet or power strip, then the DC power jack (or PoE Ethernet cable) on the router. If there is a power button, depress it to turn the router on.</p>

<p>You should begin to see text in the terminal window running minicom, showing the MikroTik router’s boot process.</p>
<p><img src="/files/Install_MikroTik-minicom_RouterBoot_init.png" style="max-width:510px;" /></p>

<p>Quickly hit any key on your keyboard to enter the router’s boot menu (you only have a few seconds). If you miss it, disconnect and reconnect the power to the router and start over. If you hit a key in time, you will see the menu:</p>
<p><img src="/files/Install_MikroTik-minicom_RouterBoot_menu.png" style="max-width:510px;" /></p>
<p>This is a special menu that is only accessible over the Serial Console - which is why you need the extra cable.</p>

<p>Next, select <strong>o - boot device</strong> and then select <strong>1</strong> to boot once from the network (the computer you set up with the DHCP, TFTP and Web server), and then boot from the nand after that.</p>

<p>Select x to exit setup.</p>

<p>The router will reboot. Don’t hit a key this time, let the bootloader menu time out. Your computer should give the device a DHCP lease, recognize its MAC address and the device will boot from the file hosted in:</p>
<p><pre>/var/lib/tftproot/</pre></p>
<p>This will happen very fast, then the Commotion router software will start to boot.</p>
<p><img src="/files/Install_MikroTik-minicom_RouterBoot_loading_image.png" style="max-width:510px;" /></p>

<p>A large number of messages will print to the screen as Commotion boots. When the screen stops updating for a while, or you see the message “Please press Enter to activate this console” on the serial terminal screen, Commotion has fully booted. Hit <strong>Enter</strong>.</p>
<p><img src="/files/Install_MikroTik-minicom_Commotion_booted.png" style="max-width:510px;" /></p>

<p>You will see the following Commotion banner, if all went well:</p>
<p><img src="/files/Install_MikroTik-minicom_Commotion_banner.png" style="max-width:510px;" /></p>

<p>If it does not boot from the network, re-check your configuration in:
<p><pre>/etc/dnsmasq.conf</pre></p>
<p>and look at the messages in</p>
<p><pre>/var/log/syslog</pre></p>
<p>to diagnose the issue Assuming the device booted from the network, you should see the Commotion text banner and command prompt.</p>

</section>

<section id="install-software-to-flash">
<h2>Install the software to flash</h2>

<p>At this point, your routerboard is running Commotion in memory. To permanently install Commotion to the device's NAND flash (similar to a computer hard drive), the files must be loaded from the web server running on your computer.</p>

<p>In the serial console, check if your Commotion router received an IP address from the dnsmasq instance on your computer. Run the command:</p>
<p><pre>ifconfig eth0</pre></p>

<p>If the router has an IP address, it should look something like:</p>
<p><pre>
eth0      Link encap:Ethernet  HWaddr aa:bb:cc:dd:ee:ff
          inet addr:192.168.10.101  Bcast:192.168.10.255
          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
          RX packets:1019 errors:0 dropped:0 overruns:0 frame:0
          TX packets:4400 errors:0 dropped:0 overruns:0 carrier:0
          collisions:0 txqueuelen:1000 
</pre></p>

<p>You can proceed to the next installation step, wget2nand. If your router doesn't receive an IP, set an IP address for the Ethernet interface on the node statically. Run this command:</p>
<p><pre>ifconfig eth0 inet 192.168.10.100 netmask 255.255.255.0</pre></p>

<p>After this, you can load the image files from the computer to the note. This command assumes that your computer's IP address is 192.168.10.254, as recommended in the guide above:</p>
<p><pre>wget2nand http://192.168.10.254/</pre></p>

<p>If successful, your serial console should display information indicating that the device is being flashed, and eventually it will reboot.</p>

<p>Once the device is rebooting, use the commands below on your computer to turn off dnsmasq and lighttpd:</p>
<p><pre>
sudo service dnsmasq stop
sudo service lighttpd stop
</pre></p>

<p>You should now set your computer’s Ethernet port to receive an IP address via DHCP. When the router has completely rebooted, it will provide your computer with a DHCP lease. Once this has happened, you can open a web browser, and in the URL bar enter <a href="http://thisnode">http://thisnode</a> - the address of the administration page on the Commotion node. Next, run the Commotion setup wizard and configure the settings for your network. If you want to read more about this process, see the document <a href="/docs/cck/installing-configuring/configure-commotion">Configure Commotion</a>.</p>

</section>

<section class="external-resources" id="section-external-resources">
<h2>External Resources</h2>

<p>If your computer doesn’t have a Serial port (most computers made in the past 5 years do not), you will need a USB to serial adapter, such as these models:</p>
<ul class="rteindent1">
    <li>Sabrent USB 2.0 TO Serial DB9 male - model # CB-RS232</li>
    <li>TRENDnet USB to Serial Converter - model # TU-S9</li>
    <li>StarTech USB to RS232 Serial DB9 Adapter - model # ICUSB232PRO</li>
</ul>

<p>In addition, you will likely need a DB-9 “turnaround” - also known as a gender changer, such as these:</p>
<ul class="rteindent">
    <li>Tripp Lite DB9 F/F Gender Changer - model # P150-000</li>
    <li>StarTech DB9 RS232 Serial Null Modem Adapter F/F - model # NM9FF</li>
</ul>

</section>
 
