---
layout: cck
title: Learn Wireless Basics
site_section: help
sub_section: [cck,cck-networking]
pdf: cck/networking/1-Learn_Wireless_Basics.pdf
pdf-all: false
categories: Networking, Wireless, CCK
created: 2014-06-13
changed: 2014-06-13
post_author: Andy Gunn
lang: en
---
<section id="introduction">
<p><img alt="Learn Wireless Basics graphic" src="/files/CCK_WirelessBasics_intro_graphic.png" /></p>

<h2>Introduction</h2>

<p>This document covers the basics of how wireless technology works, and how it is used to create networks. Wireless technology is used in many types of communication. We use it for networking because it is cheaper and more flexible than running cables. While wireless networks can be just as fast and powerful as wired networks, they do have some drawbacks.
</p>
<p>
Reading and working through <a href="/docs/cck/learn-networking-basics/">Learn Networking Basics</a> before this document will help you with some of the concepts used in wireless networks.
</p>

<p>In addition to some background information, this document covers six basic concepts:</p>

<ol class="rteindent1">
	<li>Wireless signals - what they are and how signals can differ.</li>
	<li>Wireless devices - the differences and uses for receivers and transmitters.</li>
	<li>Wi-Fi Modes - how networks are made up of clients, access points, or ad-hoc devices.</li>
	<li>Wi-Fi Signals - the unique characteristics of Wi-Fi, and how signals are organized.</li>
	<li>Power and Receiver sensitivity - how far each wireless device can go, and how well a router can listen and filter out interference and noise.</li>
	<li>Antennas - how the type of antenna changes the way the router broadcasts.</li>
</ol>

<p>Reading through this material should take about an hour. Working through the activities, or diving deeper into the subject with a group may take longer.</p>
</section>

<section id="what-is-a-wireless-signal">
<h2>What is a wireless signal?</h2>

<p>
<img alt="Signals" src="/files/CCK_WirelessBasics_Signals.png" width="510" />
</p>
<p>
Wireless signals are important because they can transfer information -- audio, video, our voices, data -- without the use of wires, and that makes them very useful.
</p>
<p>
Wireless signals are <strong>electromagnetic waves</strong> travelling through the air. These are formed when electric energy travels through a piece of metal -- for example a wire or antenna -- and waves are formed around that piece of metal. These waves can travel some distance depending on the strength of that energy.
</p>
<p>
For more on how electromagnetic signals work, check the #External Resources section at the end of this document.
</p>
</section>

<section id="types-of-wireless-signals">
<h2>Types of Wireless Signals</h2>
<p>
There are many, many types of wireless technologies. You may be familiar with AM and FM radio, Television, Cellular phones, Wi-Fi, Satellite signals such as GPS and television, two-way radio, and Bluetooth. These are some of the most common signals, but what makes them different?
</p>

<table style="width:510px">
<tr>
<td><img alt="Radio" src="/files/CCK_WirelessBasics_wireless_icon_radio.png" width="100" /></td>
<td><img alt="TV" src="/files/CCK_WirelessBasics_wireless_icon_tv.png" width="100" /></td>
<td><img alt="Phone" src="/files/CCK_WirelessBasics_wireless_icon_cell.png" width="100" /></td>
<td><img alt="Satellite" src="/files/CCK_WirelessBasics_wireless_icon_satellite.png" width="100" /></td>
<td><img alt="Laptop" src="/files/CCK_WirelessBasics_wireless_icon_WiFi.png" width="100" /></td>
</tr>
</table>

</section>

<section id="types-of-wireless-signals">
<h2>Types of Wireless Signals</h2>

</section>

<section id="ip-addresses">
<h2>IP Addresses</h2>

<p>In order to send and direct data across a network, computers need to be able to identify destinations and origins. This identification is an IP—Internet Protocol—address. An <strong>IP address</strong> is just a set of four numbers between 1 and 254, separated by dots. An example of an IP address is <strong>173.194.43.7</strong>.</p>

<p>An IP address is similar to a street address. Parts of the address describe where in the world the building is located, another part narrows it down to a state or city, then the area within that state or city, then the location on the street.</p>

<p>Below we can see <strong>192.168.1 Street</strong>. On it are three houses:</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__627 img__view_mode__media_original attr__format__media_original" height="189" src="/files/CCK_Networking_Basics_IP_address_street.png" typeof="foaf:Image" width="510" /></p>

<p>The complete addresses for each of these houses is: 192.168.1.<strong>20</strong>, 192.168.1.<strong>21</strong>, and 192.168.1.<strong>22</strong>.</p>

<p>There are different classifications, or types of IP addresses. A network can be public, or it can be private. Public IP addresses are accessible anywhere on the Internet. Private IP addresses are not, and most are typically hidden behind a device with a public IP address.</p>

<p>Here we can see an example—a street with two buildings with <strong>public IP addresses</strong>—representing computers with addresses that are visible to the entire Internet. These buildings might be anywhere in the world, but their addresses are complete, so we know exactly where they are and can send messages to them.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__628 img__view_mode__media_original attr__format__media_original" height="218" src="/files/CCK_Networking_Basics_IP_address_public.png" typeof="foaf:Image" width="510" /></p>

<p>To see an example of how public and private IP addresses are commonly used, let’s take another look at <strong>192.168.1 Street</strong>. We have a new building on the street. That building has a public IP address, and a private IP address. There is also a fence that blocks the rest of the Internet from seeing and passing messages to addresses on the street.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__629 img__view_mode__media_original attr__format__media_original" height="190" src="/files/CCK_Networking_Basics_IP_address_private.png" typeof="foaf:Image" width="510" /></p>

<p>The postal building controls messages that travel between the Internet and the street, keeping track of messages that leave the street, and directs return messages to the right house. On the street, it has the address <strong>192.168.1.1</strong>, and on the Internet it has the address <strong>74.10.10.50</strong>.</p>

<p><strong>Activity:</strong> Find the IP addresses assigned to your computer, and your network.</p>

<pre>


What is the IP address for your computer? ____________________


Browse to <a href="http://ip.mayfirst.org"><strong>http://ip.mayfirst.org/</strong></a> 
and write down the IP address it reports: ____________________
</pre>

<p>Are these numbers the same, or different? Why?</p>
</section>

<section id="network-hubs-and-switches">
<h2>Network Hubs and Switches</h2>

<p>Traditionally, computers are connected to each other using cables—creating a network. The cable used most often is Ethernet, which consists of four pairs of wires inside of a plastic jacket. It is physically similar to phone cables, but can transport much more data.</p>

<p>But cables and computers alone do not make a good network, so one early solution was to use a network <strong>hub</strong>. The Ethernet cables from the computer connect to the device similar to the hub of a bike wheel—where all of the spokes come together in the center.</p>

<p>An example of how a hub works is shown below. Computer <strong>A</strong> wants to send a message to computer <strong>B</strong>. It sends the message through the Ethernet cable to the hub, then the hub repeats the message to all of the connected computers.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__630 img__view_mode__media_original attr__format__media_original" height="344" src="/files/CCK_Networking_Basics_Network_hub.png" typeof="foaf:Image" width="510" /></p>

<p>A network using a hub can slow down if many computers are sending messages, since they may try and send messages at the same time and confuse the hub. To help with this problem, networks began to use another device called a <strong>switch</strong>. Instead of repeating all messages that come in, a switch only sends the message to the intended destination. This eliminates the unnecessary repetition of the hub.</p>

<p>Using a switch, computer <strong>A</strong> sends a message to computer <strong>B</strong>—the other computers do not see the message. Those computers can send other messages at the same time without interfering.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__631 img__view_mode__media_original attr__format__media_original" height="344" src="/files/CCK_Networking_Basics_Network_switch.png" typeof="foaf:Image" width="510" /></p>

<p>Switches do have a limitation though—they only know about the addresses of equipment that is plugged directly into them. So, you can only send messages to a small number of devices—however many ports the switch has! If you need to send a message to a computer on another network, it will need to be sent through a router, which we discuss next.</p>
</section>

<section id="routers-and-firewalls">
<h2>Routers and Firewalls</h2>

<p><strong>Routers</strong> do the majority of the hard work on a network - they make the decisions about all the messages that travel on the network, and whether to pass messages to and from outside networks. There are three main functions:</p>

<table border="0" cellpadding="1" cellspacing="1" style="width: 510px;">
	<tbody>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__632 img__view_mode__media_original attr__format__media_original" src="/files/CCK_Networking_Basics_router_icons_1.png" style="width: 200px; height: 189px;" typeof="foaf:Image" /></td>
			<td>
			<p><strong>Separate and Bridge</strong></p>

			<p>Routers separate networks into sections, or bridge different networks together, as we see in the example above—the private network of 192.168.1 Street is bridged to the Internet with a public IP address.</p>
			</td>
		</tr>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__633 img__view_mode__media_original attr__format__media_original" src="/files/CCK_Networking_Basics_router_icons_2.png" style="width: 200px; height: 189px;" typeof="foaf:Image" /></td>
			<td>
			<p><strong>Assign IPs</strong></p>

			<p>They can assign IP addresses. In the example of 192.168.1 Street, if a new house is built on the street, it would get whatever the next highest house number available. In the case of routers, they assign IP addresses using DHCP—Dynamic Host Configuration Protocol.</p>
			</td>
		</tr>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__634 img__view_mode__media_original attr__format__media_original" src="/files/CCK_Networking_Basics_router_icons_3.png" style="width: 200px; height: 189px;" typeof="foaf:Image" /></td>
			<td>
			<p><strong>Firewall and Protect</strong></p>

			<p>They can filter messages or keep users out of private networks. Most routers have a Firewall built in. This is a software function that keeps unwanted messages from reaching the computers on the inside, or private part, of the network.</p>
			</td>
		</tr>
	</tbody>
</table>

<p>Let us take another look at 192.168.1 Street, and the postal service building we included when it had a public address for the entire street. As it turns out, that postal service building is acting as a <strong>Router</strong>.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__629 img__view_mode__media_original attr__format__media_original" height="190" src="/files/CCK_Networking_Basics_IP_address_private.png" typeof="foaf:Image" width="510" /></p>

<p>In this case, the postal service building is routing messages between the rest of the Internet using its public address and the street with private addresses.</p>
</section>

<section id="section-definitions">
<h2>Definitions</h2>

<dl>
	<dt>DHCP—Dynamic Host Configuration Protocol</dt>
	<dd>It assigns IP addresses to client devices, such as desktop computers, laptops, and phones, when they are plugged into Ethernet or connect to Wireless networks.</dd>
	<dt>Ethernet</dt>
	<dd>A type of networking protocol—it defines the types of cables and connections that are used to wire computers, switches, and routers together. Most often Ethernet cabling is Category 5 or 6, made up of twisted pair wiring similar to phone cables.</dd>
	<dt>Hub</dt>
	<dd>A network device that repeats the traffic it receives to all connected devices.</dd>
	<dt>Switch</dt>
	<dd>A network device that sends traffic it receives to a specific connected device, such as a single desktop computer or laptop.</dd>
	<dt>Router</dt>
	<dd>A network device that can bridge between different networks, determine what traffic can pass between them, and perform other functions on a network, such as assigning IP addresses.</dd>
	<dt>Firewall</dt>
	<dd>A function typically performed by routers, this filters traffic between networks and can protect them from interference or attacks.</dd>
</dl>
</section>

<section class="related-information" id="section-related-information">
<h2>Related Information</h2>

<p>This module is intended to provide some helpful background on networking. We recommend reading the upcoming (but not finished!) Learn about Wireless after this guide.</p>
</section>

<section class="external-resources" id="section-external-resources">
<h2>External Resources</h2>

<p>
If you are interested in learning more about Wi-Fi and wireless technology, there is a lot of information out there. Good books to read for background and more information include How Radio Signals Work by Sinclair (ISBN 0070580588), and 802.11 Wireless Networks: The Definitive Guide by Gast (ISBN 0596100523).
</p>
<p>
There are also excellent documents on Wikipedia about <a href="http://en.wikipedia.org/wiki/Wi-Fi" target="_blank">Wi-Fi</a> and <a href="http://en.wikipedia.org/wiki/Wireless" target="_blank">wireless signals</a>. Similarly, an Internet search will most likely answer any questions you can think of, as wireless is a very popular technology.
</p>
<p>
For more information on what frequencies are available in your country or regulatory area, please see this article on Wikipedia on <a href="http://en.wikipedia.org/wiki/List_of_WLAN_channels" target="_blank">wireless channels</a>.
</p>
</section>
 
