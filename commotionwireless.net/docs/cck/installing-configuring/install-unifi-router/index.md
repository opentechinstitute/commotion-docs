---
layout: cck
title: Install on a Ubiquiti UniFi Router
site_section: docs
sub_section: [cck,cck-installing]
pdf: 
pdf-all: true
categories: 
created: 2013-10-31
changed: 2014-10-31
post_author: andygunn
lang: en
---

<p><img src="/files/CCK-Install_on_UniFi_Router_intro_graphic.png" style="max-width:600px; "/></p>

<section id="section-introduction">
<h2>Introduction</h2>

<p>This document contains a step-by-step process for installing the Commotion software on Ubiquiti UniFi routers. If you have a new, in-the-box Ubiquiti UniFi device, this guide is for you.</p>

<p>We have written this guide because the Open Technology Institute uses Ubiquiti Networks hardware as the main development and testing hardware for the Commotion router software. The software is an alternative operating system, similar to Linux for your home or office computer. Ubiquiti UniFi hardware comes from the factory installed with their custom software - just like a new computer usually comes with Microsoft Windows or Mac OSX installed. Installing Commotion on your router instead will add new features to your router, including the ability to mesh with other routers that use Commotion.</p>

<p>The installation process should take about 45 minutes to an hour. If these steps do not work for you, or if you have a router that failed to properly flash Commotion or will not respond in any way, you will need to consult <a href="http://community.ubnt.com/t5/UniFi-Wireless/HOWTO-Unbrick-your-UniFi-AP/td-p/338684">this Ubiquiti forum guide</a>.</p>

<p><strong>Time required: 45 minutes - 1 hour.</strong></p>
</section>

<section id="section-materials-and-supplies-needed">
<h2>Materials + Supplies Needed</h2>

<p>To install Commotion, you will need the following items on-hand:</p>

<p>1. A computer with an Ethernet port.<br />
2. The UniFi router and its Power over Ethernet (PoE) adapter and power cable.<br />
3. Access to a power outlet.<br />
4. Two Ethernet cables.<br />
5. An Internet connection or the appropriate Commotion software image.</p>
</section>

<section id="section-download-commotion">
<h2>Download Commotion</h2>

<p>Download “Factory” Commotion image for your hardware (either UniFi AP, or UniFi AP Outdoors):<br />
<a href="/download/routers">https://commotionwireless.net/download/routers</a></p>

<p><img src="/files/styles/large/public/downloadsR1.png" style="max-width:510px;" /></p>

<p class="tip">Save the file somewhere you can access easily later. A good place to save the file is on your Desktop, or in your Downloads directory.</p>
</section>

<section id="prepare-the-hardware">
<h2>Setup the Hardware</h2>

<p><img src="/files/CCK-Install_on_UniFi_router_prepare_hardware.png" style="max-width: 510px;" /></p>

<p><strong>Warning! It is very important that you do not port labeled POE into your computer! You could damage your computer.</strong></p>

<p>1. Remove the back or bottom plate of the Ubiquiti router. This back plate has some important information about the hardware on it, so do not lose it or mix it up with the plate from another device!</p>

<p>2. Plug the first Ethernet cable into the PoE port, then plug the other end of the cable into the port on&nbsp;the router that you see after removing the bottom plate.</p>

<p>3. Plug the second Ethernet cable into the port labeled LAN, then plug the other end of the cable into your computer’s Ethernet port.</p>

<p>4. Plug the PoE adapter into an easily accessible wall outlet or power strip. The green “Power Active” light should turn on. This provides power to the router, so after a second or two it should turn on.</p>
</section>

<section id="change-ip-address">
<h3>Set Your Computer's IP Address</h3>

<table>
	<tr>
		<td>
		<p><img src="/files/styles/large/public/install_on_ubiquiti_changeip_0.png" style="float:left; width:250px;" /></p>
		</td>
		<td>
		<p>1. Turn off your computer’s WIFI.</p>
		<p>2. Change your computer’s network settings:<br />
<code>Static IP address:<br />192.168.1.254<br />
Subnet mask:<br />255.255.255.0<br />
Gateway:<br />192.168.1.1 <br />
DNS:</br />(blank)</code></p>
		</td>
	</tr>
</table>

<p class="tip">If you need help to change your computer’s IP address, there are links to guides in the <a href="#section-external-resources">External Resources</a> section below.</p>
</section>

<section id="load-software">
<h2>Load the Software</h2>

<p>Loading the software requires you to copy a file to the UniFi router, then SSH and run some commands on it. If the router isn't plugged in per the instructions above in <strong>Setup the Hardware</strong>, plug it in now and wait for it to boot up (normally takes about one or two minutes). While that is happening open up your terminal or command line and change into the directory where the image resides. If you are on the Windows operating system, you will need to download a SCP / SSH package, such as <a href="http://www.putty.org/">PuTTY</a>.

<p>Depending on the model of UniFi device you have, the instructions are slightly different. Read below.</p>

<p>&nbsp;</p>

<h4>UniFi AP or AP-LR</h4>
<p><strong>1.</strong> Run the following command in your terminal to copy the Commotion software to the node:</p>
<pre>scp openwrt-ar71xx-generic-ubnt-unifi-squashfs-factory.bin ubnt@192.168.1.20</pre>
<p>You will be prompted for a password, enter <strong>ubnt</strong>.

<p><strong>2.</strong>SSH into the node with the following command:</p>
<pre>ssh ubnt@192.168.1.20</pre>
<p>You will be prompted for a password, enter <strong>ubnt</strong>.

<p><strong>3.</strong>Run the following command in your terminal to install the Commotion software on the device:</p>
<pre>fwupdate.real -m openwrt-ar71xx-generic-ubnt-unifi-squashfs-factory.bin -d</pre>

<p>&nbsp;</p>

<h4>UniFi AP-Outdoors</h4>
<p><strong>1.</strong>Run the following in your terminal to copy the Commotion software to the node:</p>
<pre>scp openwrt-ar71xx-generic-ubnt-unifi-outdoor-squashfs-factory.bin ubnt@192.168.1.20</pre>
<p>You will be prompted for a password, enter <strong>ubnt</strong>.

<p><strong>2.</strong>SSH into the node with the following command:</p>
<pre>ssh ubnt@192.168.1.20</pre>
<p>You will be prompted for a password again, enter <strong>ubnt</strong>.

<p><strong>3.</strong>Run the following command in your terminal to install the Commotion software on the device:</p>
<pre>fwupdate.real -m openwrt-ar71xx-generic-ubnt-unifi-outdoor-squashfs-factory.bin -d</pre>

<p>&nbsp;</p>

<p>The node will then report it is flashing the new software, and then reboot. After the node fully boots, it will be accessible at <a href="http://thisnode">http://thisnode</a>.</p>

<p>You can continue to the <a href="/docs/cck/installing-configuring/configure-commotion">Configure Commotion</a> module. Those instructions provide guidance on how to configure the Commotion software for the first time.</p>
</section>

<section id="section-definitions">
<h2>Definitions</h2>

<dl>
	<dt>Operating System</dt>
	<dd>a collection of software that manages computer hardware resources and provides common services for computer programs. The operating system is a vital component of the system software in a computer system.</dd>
	<dt>Firmware</dt>
	<dd>the combination of persistent memory and program code and data stored in it. In other words, a very small and basic operating system for devices like appliances, computers, digital watches, digital cameras, mobile phones, and more.</dd>
</dl>
</section>

<section class="related-information" id="section-related-information">
<h2>Related Information</h2>

<p>For more help, or if this guide doesn't work for you, take a look at the <a href="http://community.ubnt.com/t5/UniFi-Wireless/HOWTO-Unbrick-your-UniFi-AP/td-p/338684">Ubiquiti forum on UniFi recovery</a>. After the software has been installed, you can proceed to the <a href="/docs/cck/installing-configuring/configure-commotion">Configure Commotion</a> module.</p>
</section>

<section class="external-resources" id="section-external-resources">
<h2>External Resources</h2>

<p>Guides for setting static IP addresses:</p>

<ul>
	<li><strong>Windows - <a href="http://www.howtogeek.com/howto/19249/how-to-assign-a-static-ip-address-in-xp-vista-or-windows-7/" target="_blank">http://www.howtogeek.com/howto/19249/how-to-assign-a-static-ip-address-in-xp-vista-or-windows-7/</a></strong></li>
	<li><strong>Mac - <a href="http://osxdaily.com/2010/12/17/set-static-ip-address-mac/" target="_blank">http://osxdaily.com/2010/12/17/set-static-ip-address-mac/</a></strong></li>
	<li><strong>Linux - <a href="http://www.sudo-juice.com/how-to-a-set-static-ip-in-ubuntu/" target="_blank">http://www.sudo-juice.com/how-to-a-set-static-ip-in-ubuntu/</a></strong></li>
	<li>You can also perform an Internet search for your specific operating system to find more information, or other guides.</li>
</ul>
</section>
 
