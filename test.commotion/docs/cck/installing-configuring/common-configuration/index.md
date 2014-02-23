---
layout: default
title: Common Configurations
site_section: help
sub_section: [cck,cck-installing]
categories: {categories}
created: 2013-11-06
changed: 2014-01-12
post_author: critzo
lang: en
---
  <p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__610 img__view_mode__media_original attr__format__media_original" height="299" src="/files/CCK_Common_Configs_Intro_0_0.png" typeof="foaf:Image" width="510" /></p>

<h2>Common Configurations</h2>

<section id="introduction">
<h3>Introduction</h3>

<p>When you set up your network, you will likely need to implement different arrangements of routers. The instructions below are designed to show you how to set up the hardware in different ways to that will help your network operate correctly. Pay attention to the settings in each configuration, since changing the behavior of one part of the network or node can affect the way another part will function. Each configuration listed below describes the settings you should change to keep the network working according to your plans.</p>
</section>

<section id="materials-and-supplies-needed">
<h4>MATERIALS + SUPPLIES NEEDED</h4>

<ol class="rteindent1">
	<li>A printout of the configuration you need, including specific information for the node you are working on.</li>
	<li>Information about the configuration for other nodes in the network.</li>
</ol>
</section>

<section id="two-nodes-meshed-wirelessly">
<h3>Two nodes meshed wirelessly</h3>

<p>This is a common configuration. It involves two wireless nodes, in this example PicoStation M2 units, installed with the Commotion Wireless router firmware. The nodes can be installed indoors, in windows, or on rooftops. As long as they are within range (around 1000 feet outdoors, or within the same building indoors), they should mesh.</p>

<p>Many types of devices could be used in this scenario. Omnidirectional wireless nodes are one possibility, such as Ubiquiti PicoStation M2 units, Ubiquiti Rocket units with omnidirectional antennas, Ubiquiti UniFi devices, home routers such as Linksys or Buffalo devices, or others. Directional units with sector or dish antennas could also be used, such as Ubiquiti NanoStation M-series devices, Rocket devices with sector or dish antennas, or other outdoor sector or point-to-point equipment.</p>

<p>In the diagram below:</p>

<ul>
	<li><strong>(1)</strong> Represents an omnidirectional wireless node.</li>
</ul>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__618 img__view_mode__media_original attr__format__media_original" src="/files/CCK_CommonConfigs_OmniWireless_0_0.png" style="width: 471px; height: 430px;" typeof="foaf:Image" /></p>

<p><strong>Steps to Configure:</strong></p>

<p>The two Commotion nodes should mesh wirelessly after running Setup Wizard. If they do not, check to make sure that these settings are the same:</p>

<ul>
	<li>IP subnet</li>
	<li>BSSID</li>
	<li>Channel</li>
	<li>Mesh link (IBSS-RSN) password, or password disabled</li>
</ul>

<p>These settings are all visible and editable in the <strong>Basic Configuration -&gt; Network Settings -&gt; Mesh Network</strong> menu in the Administration panel of your wireless node.</p>
</section>

<section id="two-wireless-nodes-meshed-over-an-ethernet-connection">
<h3>Two wireless nodes meshed over an Ethernet connection</h3>

<p>In some cases, a section of the mesh may be more distant than others. It may require a wireless node with a directional antenna (such as a Ubiquiti NanoStation M-series device) to connect to the parts of the neighborhood mesh within a half mile to a mile away. You may want to have an indoor extension of that mesh, or have omnidirectional coverage around the building—hence adding an omnidirectional node, such as a Ubiquiti PicoStation M2 to the mesh.</p>

<p>The reason for using Ethernet to mesh these devices together is to increase the efficiency of the connection between them. We want to be able to mesh equipment that is co-located in one building via Ethernet cabling. It increases the speed of the connection between those devices, and increases the bandwidth available on the mesh.</p>

<p>In the diagrams below:</p>

<ul>
	<li><strong>(1)</strong> Represents the first wireless node.</li>
	<li><strong>(2)</strong> Represents the second wireless node.</li>
	<li><strong>(3)</strong> Represents the Ethernet cable connecting the two devices together.</li>
</ul>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__619 img__view_mode__media_original attr__format__media_original" src="/files/CCK_CommonConfigs_EthernetMesh1_0.png" style="width: 362px; height: 399px;" typeof="foaf:Image" /></p>

<p><strong>Steps to Configure:</strong></p>

<ol class="rteindent1">
	<li>On the first node, go to <strong>Advanced -&gt; Network -&gt; Interfaces</strong> and select “Edit” on the Wired interface.</li>
	<li>Change the "Protocol type" from "Commotion Interface" to "Static Address".</li>
	<li>Set a static IP on the interface in a private subnet not already in use in the network. For instance, you could set the IP address to 172.16.100.1 and the Netmask to 255.255.255.0.</li>
	<li>Save and apply those settings.</li>
	<li>On the <strong>Network -&gt; Firewall</strong> menu, set the "Wired" interface to the "Mesh" firewall zone.</li>
	<li>Save and apply those settings.</li>
	<li>Next, go to <strong>Services -&gt; OLSR</strong>. Go to the “HNA Announcements” tab. If there are any "HNA" configurations for the Wired interface, remove them.</li>
	<li>In <strong>Services -&gt; OLSR</strong>, on the <strong>General Settings</strong> tab, add an "Interface" section for the "Wired" interface. Set its mode to "Ether".</li>
	<li>Save and apply those settings.</li>
	<li>Follow the steps above on the second node as well. Make sure when you set the IP that you set it to a different address in the same subnet you configured above. In the example given, you could set the address to 172.16.100.2..</li>
</ol>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__620 img__view_mode__media_original attr__format__media_original" src="/files/CCK_CommonConfigs_EthernetMesh2_0.png" style="width: 370px; height: 420px;" typeof="foaf:Image" /></p>
</section>

<section id="”commotion-node-connected-to-a-home-or-business-router”">
<h3>Commotion node connected to a home or business router</h3>

<p>In this scenario, we want to set up an indoor router to provide access to the mesh or to the Internet inside a building. There is currently no Internet connection in this building, so we want to receive it from the mesh. If the Commotion node is plugged in to the router's WAN port (which is designed to receive an IP address from a DSL or Cable modem, most commonly), it will give the router an IP address. The router will then be able to access the Internet if there is a connection somewhere in the mesh.</p>

<p><strong>The way this works:</strong> Commotion nodes will automatically attempt to receive a DHCP lease (get an IP address) on their Ethernet port when plugged in on start-up. If they fail to receive one (such as in this scenario), they will hand out addresses to connected devices (such as the indoor router) instead. This makes it important to make sure that devices are plugged in to the correct ports.</p>

<p>In the diagram below:</p>

<ul>
	<li><strong>(1)</strong> Represents the outdoor mesh wireless node.</li>
	<li><strong>(2)</strong> Represents the indoor wireless device clients use to connect.</li>
</ul>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__621 img__view_mode__media_original attr__format__media_original" src="/files/CCK_CommonConfigs_CommotionToRouterWAN_0.png" style="width: 248px; height: 378px;" typeof="foaf:Image" /></p>

<p><strong>This scenario should work out of the box without further configuration.</strong></p>

<p>Make sure that the Commotion node is plugged into the WAN&nbsp;port of the router. The WAN port is the “incoming” connection port, where a home or business user would typically plug in a DSL or Cable modem. Most home routers have the plastic around this port in another color, such as blue or yellow. Otherwise, this will just be labeled "WAN".</p>
</section>

<section id="”commotion-node-connected-to-a-gateway”">
<h3>Commotion Node connected to a gateway</h3>

<p>Commotion nodes will automatically attempt to receive a DHCP lease on their wired port when it is plugged in. If they fail to receive one, they will attempt to hand out addresses to connected devices instead. This can make it important in certain cases to make sure that <strong>devices are activated in the correct order</strong>.</p>

<p>In the diagram below:</p>

<ul>
	<li><strong>(1)</strong> Represents the outdoor mesh wireless node.</li>
	<li><strong>(2)</strong> Represents the indoor home or office router.</li>
	<li><strong>(3)</strong> Represents the DSL or cable modem from the Internet Service Provider (ISP).</li>
	<li><strong>(4)</strong> Represents the connection to the Internet.</li>
</ul>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__622 img__view_mode__media_original attr__format__media_original" src="/files/CCK_CommonConfigs_CommotionGateway_0.png" style="width: 404px; height: 380px;" typeof="foaf:Image" /></p>

<p><strong>This scenario should work out of the box without further configuration.</strong></p>

<p>Make sure that the Commotion node is plugged into the "LAN" port of the router. It is important to make sure that the router is fully up and functional before plugging the Commotion node into it. In the event of a power loss or other interruption of connectivity, make sure the router is turned on first.</p>

<p>If the Commotion node comes up before the router, it may not receive an IP address from the router. This will put it in a “receiving” mode on the network, and it won’t be able to share the Internet connection from the router. In this case, reset just the Commotion node after the router is running.</p>
</section>

<section id="”several-commotion-nodes-connected-through-a-switch-or-router”">
<h3>Commotion nodes connected through a switch or router</h3>

<p>Commotion can be used in tandem with other equipment for more complex installation and set-ups. These directions will assume the simplest case for the diagram below:</p>

<ul>
	<li><strong>(1)</strong> and <strong>(2)</strong> Represent the Commotion wireless nodes. These could be omnidirectional or directional devices.</li>
	<li><strong>(3)</strong> Represents an unmanaged switch. This connects all of the devices in this example together with Ethernet connections.</li>
	<li><strong>(4)</strong> Represents the connection to the Internet or another network. This could be a DSL or Cable modem, a router with access to another network, a Point-to-Point bridge, or another type of connection. This is not a Commotion device. We are assuming it is the only DHCP server (IP address provider) connected to the switch.</li>
	<li><strong>(5)</strong> Represents an optional indoor Access Point for users to connect laptops, phones or other devices.</li>
</ul>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__623 img__view_mode__media_original attr__format__media_original" height="488" src="/files/CCK_CommonConfigs_CommotionManyNodes.png" typeof="foaf:Image" width="519" /></p>

<p><strong>This should work automatically without further configuration.</strong></p>

<p>Make sure that the DHCP server (the router) boots up first, otherwise you may get unexpected results. If you are concerned about power outages or boot order, you may want to follow the directions below:</p>

<ol class="rteindent1">
	<li>From the <strong>Administration</strong> web interface, go to the <strong>Advanced</strong> menu and click <strong>Services-&gt;OLSR</strong>.</li>
	<li>At the bottom of the page, under the interfaces section, click on the "Add" button.</li>
	<li>On the next page, select the "Wired" interface under "Network", then select "Ether" for the Mode.</li>
	<li>Save &amp; Apply.</li>
</ol>
</section>

<section id="”commotion-nodes-and-a-client-access-point-connected-through-a-switch”">
<h3>Commotion nodes and a client Access Point connected through a switch</h3>

<p>In this example, we have several (two or more) Commotion nodes on the roof of a building, connecting to the mesh. We also have a client router inside the network. There is no other router or device on the network that would generate IP addresses with DHCP.</p>

<p>The problem here is that the home (non-Commotion) router expects to get a DHCP lease. The Commotion nodes need to be configured with static IP addresses, so they won't give out addresses. We need to set up the home router with a static IP address as well, so that it gets an Internet connection from one of the Commotion nodes.</p>

<p>In the diagram below:</p>

<ul>
	<li><strong>(1)</strong> and <strong>(2)</strong> Represent the Commotion nodes. These are NanoStation M2 units in this example.</li>
	<li><strong>(3)</strong> Represents an unmanaged switch. This connects all of the devices together with Ethernet connections.</li>
	<li><strong>(4)</strong> Represents an indoor Access Point for users to connect laptops, phones or other devices.</li>
</ul>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__624 img__view_mode__media_original attr__format__media_original" height="487" src="/files/CCK_CommonConfigs_CommotionClientAP.png" typeof="foaf:Image" width="480" /></p>

<p><strong>Steps to Configure for Commotion Devices:</strong></p>

<ol class="rteindent1">
	<li>On the first node in the <strong>Advanced</strong> settings, go to <strong>Network-&gt;Interfaces</strong> and select the "Wired" interface.</li>
	<li>Change the "Protocol type" from "Commotion" to "Static".</li>
	<li>Set a static IP on the interface in a private subnet not already in use in the network. For instance, you could set the IP address to 172.16.100.1 and the Netmask to 255.255.255.0.</li>
	<li>Save and apply those settings.</li>
	<li>In <strong>Network-&gt;Firewall</strong>, on the <strong>Firewall</strong> tab, set the "Wired" interface to the "Mesh" firewall zone.</li>
	<li>Save and apply those settings.</li>
	<li>Next, go to <strong>Services-&gt;OLSR</strong> and click the <strong>HNA Announcements</strong> tab. If there are any "HNA" configurations for the Wired interface, remove them.</li>
	<li>On the <strong>General Settings</strong> tab of <strong>Services-&gt;OLSR</strong>, add an "Interface" section for the "Wired" interface. Set its mode to "Ether".</li>
	<li>Save and apply those settings.</li>
	<li>Follow the steps above on the second node as well. Make sure when you set the IP that you set it to a different address in the same subnet you configured above. In the example given, you could set the address to 172.16.100.2.</li>
</ol>

<p><strong>Steps to Configure Home Router:</strong></p>

<ol class="rteindent1">
	<li>On the router's WAN configuration page, set the connection type to "Static".</li>
	<li>Set the IP address to <strong>172.16.100.3</strong>, and set the Netmask to <strong>255.255.255.0</strong>.</li>
	<li>Set the Gateway address to one of the Commotion nodes, such as <strong>172.16.100.1</strong>. The DNS entry should be set to the same address.</li>
</ol>
</section>

<section id="”wireless-gateway-connection”">
<h3>Wireless gateway connection</h3>

<p>In this example the Commotion node attempts to use a wireless access point (not associated with the mesh) as an Internet gateway.</p>

<p>In the diagram below:</p>

<ul>
	<li><strong>(1)</strong> Represents the wireless mesh node.</li>
	<li><strong>(2)</strong> Represents a home or office Access Point you are trying to use to connect.</li>
	<li><strong>(3)</strong> Represents the connection to the Internet you want to share.</li>
</ul>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__625 img__view_mode__media_original attr__format__media_original" height="387" src="/files/CCK_CommonConfigs_WirelessGateway.png" typeof="foaf:Image" width="389" /></p>

<p><strong>Steps to Configure for Commotion Devices:</strong></p>

<ol>
	<li>Navigate to <strong>Advanced &gt; Network &gt; WiFi</strong></li>
	<li>The Wireless Overview section lists available wireless radios. Your device may only have one radio</li>
	<li>Click on the button labelled <strong>Scan</strong>. A list of available nearby wireless networks will be displayed.</li>
	<li>Choose the wireless network you wish to connect to and click <strong>Join Network.</strong></li>
	<li>Un-check the box labelled <strong>Replace Wireless Configuration</strong> and enter the connection details for the network you selected. If desired you can name the new network configuration, and assign the connection to a specific firewall zone.</li>
	<li>Click <strong>Submit </strong>at the bottom of the page. On the next page, scroll to the bottom of the page and click <strong>Save and Apply.</strong></li>
</ol>

<p>&nbsp;</p>
</section>

<section id="”meshing-laptops-smartphones-and-routers”">
<h3>Meshing Laptops, Smartphones, and Routers</h3>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__616 img__view_mode__media_original attr__format__media_original" height="349" src="/files/CCK_Common_Configs_Laptop_Phone_Router.png" typeof="foaf:Image" width="371" /></p>

<p><strong>Steps to Configure:</strong></p>

<p>Commotion Linux and Android currently do not support encrypted mesh connections. Therefore, encryption on the mesh link will need to be deactivated on the routers.</p>

<ol class="rteindent1">
	<li>Navigate to <strong>Advanced-&gt;Network-&gt;Wifi</strong>.</li>
	<li>Edit “radio0: Ad-Hoc [Commotion]”.</li>
	<li>In the “Interface Configuration” section, click the “Wireless Security” tab.</li>
	<li>In the “Encryption” pull-down menu, select “No Encryption”.</li>
	<li>Scroll down to the bottom of the page, click “Save &amp; Apply”.</li>
	<li>Wait for the system to update.</li>
</ol>

<p>Devices must also have the same:</p>

<ul>
	<li>IP subnet</li>
	<li>BSSID</li>
	<li>Wireless channel</li>
</ul>
</section>
 
