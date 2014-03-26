---
layout: blog
title:  Exploring Commotion with Wireshark - a Tutorial
categories: [development,wireshark,debugging]
created: 2014-02-04
changed: 2014-02-04
teaser_image: styles/large/public/ws_olsr_traffic.png
post_author: Seamus Tuohy
lang: en
---
<p>The program Wireshark, a network analyzer for Windows and Linux, allows you to monitor network traffic to see the actual packets of data being sent around you. This will allow us to look at the difference between encrypted and unencrypted traffic on a router running Commotion to see if encryption is working. This guide is written for Wireshark running on a Linux device, but can be applied to wireshark debugging on any compatible device.<!--more--></p>

<h2>Setting up your Devices</h2>

<p>Before you start you should follow one of the Commotion <a href="/docs/cck/installing-configuring"> Installing &amp; Configuring</a> guides to set up the device you will monitor. If you want to follow along make sure that you DON'T set a mesh encryption password just yet. We will need an unencrypted packet to help us find the encrypted packets that we create later.</p>

<p>NOTE: If you will be examining a linux computer running the commotion client these instructions should be run from a DIFFERENT COMPUTER. You can use wireshark to monitor your own device as well, but these instructions are about passively monitoring the airwaves. Following these instructions WILL interfere with your devices ability to mesh if used on the device running Commotion.</p>

<p>Before you get started monitoring wireless traffic you must prepare the radio on the computer running wireshark. These Debian based instructions should work on most Linux systems with only minor modification. If you want to copy and paste the following commands in your device copy the lines without the dollar sign. Replace &lt;CHANNEL&gt; with the channel the wireless device you will be monitoring is using for its mesh.</p>

	$ sudo service network-manager stop 
	$ sudo iwconfig wlan0 channel &lt;CHANNEL&gt; 
	$ sudo ifconfig wlan0 down 
	$ sudo iwconfig wlan0 mode Monitor 
	$ sudo wireshark

<p>Now that our radio is ready and wireshark is opened we need to configure it. To set your wireless interface to listen to all traffic, and not just traffic between it and devices it is talking to we need to set it to “monitor” the airwaves. Double click on wlan0 and check the "use monitor mode" box.</p>

<p><img alt="" src="/files/styles/large/public/ws_mon_mode.png" /></p>

<p>Click "OK" and then click on the start button in the main window to begin monitoring the wifi around you.</p>

<p><img alt="" src="/files/styles/large/public/ws_traffic.png" /></p>

<h2>Monitoring Commotion Mesh Traffic</h2>

<p>Commotion currently uses the mesh networking protocol <a href="https://en.wikipedia.org/wiki/Optimized_Link_State_Routing_Protocol">OLSR</a>&nbsp;to mesh. One of the many reasons I love Wireshark is because they have created a series of filters for various types of traffic. We will be using the <a href="https://www.wireshark.org/docs/dfref/o/olsr.html">OLSR filters</a> to make sure we only see Commotion mesh traffic. To filter the packets you are seeing on the airwaves to only show OLSR Traffic you type&nbsp;<em>olsr </em> in the filter section. This will slow down the number of packets you see significantly. You will only see traffic that contains olsr packets sent by devices around you. This will look something like this...</p>

<p><img alt="" src="/files/styles/large/public/ws_olsr_traffic.png" /></p>

<p>Clicking on a line in this list will select a single packet of information. Once you click on one of these packets it will fill the bottom frame with information about that packet.</p>

<p><img alt="" src="/files/styles/large/public/ws_olsr_packet.png" /></p>

<p>Each packet will be broken up into a series of expandable sections. There is a lot of data under these sections. For this post we will only be looking at the few important pieces of data we need to prove that encryption works. First, we need to make sure we are looking at our device, and not the dozens, if not hundreds, of other Commotion devices that are being put up in your neighborhood every day. The "IEEE 802.11 Data" section will hold information about the device that sent the message.</p>

<p><img alt="" src="/files/styles/large/public/ws_olsr_ieee.png" /></p>

<p>The "Source Address" value will be the MAC address of your router. If you connect to your router and run&nbsp;<em>$ ifconfig </em> on it you can compare the " HWaddr" of the mesh interfaces with this address. If they match, then the packet you are seeing was sent by your device. Make sure you write down the source information of your node here. We are going to need it later. You will also notice that the "Destination address" is set to "Broadcast (ff:ff:ff:ff:ff:ff)." OLSR messages are broadcast for any other mesh device to hear so they use a shared "Broadcast" address so they know where to look for OLSR messages.</p>

<p>Lastly, lets look at the actual data that is being sent. The "Optimized Link State Routing Protocol" section contains the data that your router is sending to the mesh network. In this example it is sending a HELLO message that lets other mesh devices know it exists.</p>

<p><img alt="" src="/files/styles/large/public/ws_OLSR_TC_message.png" /></p>

<p>Looking at these packets we can see all the nodes in the area that are running OLSR without encryption. To see encrypted packets we need to turn on mesh encryption on your device. You can add a mesh encryption password on your routers menu under <strong> Basic Config -&gt; Network Settings -&gt; Mesh Network </strong>. I would show you a photo of it on my router, but I am in the middle of testing translation so it is half in french.</p>

<p>If you are still looking at wireshark you will see that all of a sudden your device's OLSR traffic stopped dead. The data that makes an olsr packet easily sortable by wireshark is now encrypted. Remove your olsr filter and click the clear button. Take the source address you captured earlier and see if you can find your device broadcasting a packet. You can use&nbsp;<em>wlan.addr == SOURCE_ADDRESS </em> with the MAC address you captured earlier in the filter bar to only show your router's packets. The reason you are using your source address instead of the ip address that was listed under source earlier is that the ipaddress is now also encrypted.</p>

<p>If you are also running an Access Point on your device you will see packets coming from your source address broadcasting invitations to join that access point. Make sure you are looking at a broadcast packet with a "Data" section within it. This will differentiate the OLSR packet from advertisements for the routers access point, shown below. By the way if you are not having fun yet you don't know how to live.</p>

<p><img alt="" src="/files/styles/large/public/ws_broadcast_frame.png" /></p>

<p>If you saved your old packet, or took a picture, you will notice that in the <strong>IEEE 802.11 Data -&gt; Frame Control -&gt; Flags</strong> sub-section that on our encrypted packet shows as&nbsp;<em>.1.. .... = Protected flag: Data is protected.</em> An un-encrypted packet shows as <em> .0.. .... = Protected flag: Data is not protected. </em> This bit of "header" information lets other devices know that the data below is encrypted.</p>

<p>As stated by the "protected flag" the encrypted packet's "Data" section is simply a long encrypted string and a value specifying its length. This is where the un-encrypted "header" information stops and the encrypted packet begins. All the data in the packet is encrypted as the string of gibberish you see below. Seeing this lets us be sure that our mesh network is actually encrypting the data it sends.</p>

<p><img alt="" src="/files/styles/large/public/ws_enc_data.png" /></p>

<p>Wireshark can do much more than just show that you have encrypted your traffic. With wireshark and a few unencrypted mesh nodes you can watch the elaborate dance required to make mesh-networking work. If you add a gateway and a user to this you can even see what user data looks like over an encrypted vs. unencrypted mesh network. This is a journey for another day though. Before I leave you, lets get your wireless interface back to normal. First stop the scan and close wireshark down. Make sure you save your capture files if you want to look back at them later. Once it is closed down do the following.</p>

	$ sudo ifconfig wlan0 down 
	$ sudo iwconfig wlan0 mode Managed 
	$ sudo ifconfig wlan0 up 
	$ sudo service network-manager restart

<p>I hope you enjoyed this little detour into examining you mesh device from the data it sends to the world. Please let us know if you want us to show you other mesh-network debugging techniques or concepts in our comments section below or over e-mail.</p> 
