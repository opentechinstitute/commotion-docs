---
layout: default
title: Human Interface Guidelines
site_section: developers
sub_section: [hig]
categories: 
created: 2012-06-25
changed: 2013-12-25
post_author: critzo
lang: en
---
  <h2>Introduction</h2>

<p>Commotion is an open-source communication tool that uses mobile phones, computers, and other wireless devices to create decentralized mesh networks. It is currently being developed by multiple organizations around the globe, including the <a href="http://oti.newamerica.net/" target="_blank">Open Technology Institute</a>, <a href="http://theworkdept.com/" target="_blank">The Work Department</a>, <a href="https://guardianproject.info/" target="_blank">The Guardian Project</a>, and <a href="http://www.servalproject.org/" target="_blank">The Serval Project</a>.</p>

<p>These Human Interface Guidelines are intended to unite developers and designers in creating a consistent and accessible user experience across Commotion tools. People working on Commotion software should adhere to these guidelines and make suggestions for improving them as needed. We want Commotion to be accessible to a broad population of users around the world, and a coordinated design approach can facilitate widespread adoption.</p>

<p>The visual styles that you see throughout these guidelines are rooted in the Commotion Brand Identity, which was created in 2012 in collaboration with early Commotion developers. The Commotion brand is easy to use, versatile, and humanistic to complement the useful technology behind it that will ultimately help people connect with one another. It’s important to stick to the core principles -- but there’s also space to adapt the identity to various platforms and applications in a creative way.</p>

<p>Thanks for being a part of the Commotion project. Together, we’ll build software tools that offer an outstanding user interface, are credible, easy-to-use, and flexible enough to evolve around the world but maintain a core set of functions and standards.</p>

<p><img src="/files/browserscreen.png" /></p>

<p><img src="/files/introduction_androidintroscreens.png" /></p>

<p>Screenshots for Android 4.0 are used throughout this guide.</p>

<hr />
<h2>Platforms</h2>

<p>While Commotion began its life as a package for the OpenWRT router platform, it has grown into a multi-platform project. Its core technology, the OLSR routing daemon, can be compiled and run on many different devices. Commotion serves as a management and configuration layer atop OLSR, providing a reliable and flexible platform for people to set up small-to-medium sized wireless mesh networks.</p>

<p>Because of the project’s history and the nature of the platform, the OpenWRT router interface will tend to have the most robust set of features and serve as a benchmark for other platforms and their interfaces. The Commotion interface extends the default OpenWRT configuration system using LuCI.</p>

<p>To best understand the Commotion OpenWRT user experience, consider how an average small community wireless network would be set up.</p>

<p>Now, consider how this user experience might be different for someone joining an existing network with a mobile phone in order to access a service somewhere on the local network.</p>

<p>(See <strong><a href="https://wiki.commotionwireless.net/doku.php?id=use_case_development" target="_blank">Developing a use case</a></strong> for tips on brainstorming user scenarios.)</p>

<p>These different user experiences will, of course, require slightly different interfaces. The neighbor setting up four routers on rooftops will require different tools than a visiting friend who wants to log into the network and access a community file server, but both of these users should experience some shared elements. Both of these users will encounter the Commotion product name, and both will learn a few key terms. In the case of the neighbor who is setting up the network, much of this learning will happen while they read through documentation or use the OpenWRT configuration interface. They will spend quite a bit of time entering settings and becoming familiar with user interface look and feel.</p>

<p>In the case of a visitor signing on to the network, they might only come into contact with the Commotion software for a brief moment when they connect to an access point (named “commotion-something”) and click through a captive portal splash page with a Commotion logo and some descriptive information. These are very different uses of Commotion, but both situations should leave the user with a positive impression and some basic knowledge about the project: the name, the logo, and ways to find out more information and get help.</p>

<hr />
<h2>User interface mockups</h2>

<p>As part of the Commotion development process, UI mockups were created by designers at The Work Department to inspire the software's design. You can see those <a href="http://www.flickr.com/photos/24639042@N07/sets/72157629570342842/with/6986293486/" target="_blank">initial ideas on Flickr</a>. The early ideas were shared with the Commotion community to solicit feedback. The UI examples throughout these guidelines have since been refined and approved by the core Commotion team.</p>

<hr />
<h2>Building successful software</h2>

<p>Users expect long-term reliability, speed, and ease of use when using wireless devices. The Commotion user interface should:</p>

<ol>
	<li>
	<p>Walk a user through the setup process.</p>
	</li>
	<li>
	<p>Work well across platforms, browsers, and devices.</p>
	</li>
	<li>
	<p>Be as fast as using a non-mesh WiFi access point.</p>
	</li>
	<li>
	<p>Help users understand mesh network security.</p>
	</li>
	<li>
	<p>Allow for easy monitoring of network status in terms that users can understand.</p>
	</li>
	<li>
	<p>Offer troubleshooting suggestions when a network does not work correctly.</p>
	</li>
</ol>

<hr />
<h2>Building a successful neighborhood network</h2>

<p>Building a community, either online or offline, requires effective social and cultural organizing. Learning and trust play a key role in creating a neighborhood network that can benefit a wide array of individuals. Commotion software should facilitate positive human interactions that build a social network while building a mesh network.</p>

<p>If a Commotion application allows the user to build or maintain a network, it should reference relevant Commotion documentation regarding neighborhood network building and organizing. You might include some of this content inline in the software and some as links to online sources.</p>
 
