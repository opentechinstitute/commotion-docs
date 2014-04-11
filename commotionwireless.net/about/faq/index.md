---
layout: default
title: FAQ
site_section: about
categories: 
created: 2013-07-14
changed: 2014-04-10
post_author: Chris Ritzo
lang: en
---
<h2>General</h2>

<h3>What is Commotion?</h3>
<p>Commotion is a suite of open-source communications tools that use mobile phones, computers, and other wireless devices to create decentralized mesh networks and share local services. Read more about the <a href="/docs/supported-devices">devices Commotion supports</a> and more about how it works below.</p>

<h3>How does commotion provide internet access?</h3>
<p>Commotion does not provide Internet access. Commotion helps by sharing one or multiple internet connection(s) across any device on the mesh network.</p>

<h3>How does Commotion work?</h3>
<p>Commotion is software that is installed on existing feature phones, smartphones, Wi-Fi enabled computers, wireless routers and other wireless-capable personal devices. It enables the creation of peer-to-peer (mesh) communications networks. The Commotion Project's goal is to provide an easy-to-assemble package of software and documentation that makes building mesh networks accessible for a wide audience.</p>

<h3>What are the core components of Commotion?</h3>
<p>Commotion integrates and extends several open source software projects. Among its core components are OLSRd (the mesh routing protocol upon which Commotion is built), OpenWRT (the embedded Linux distribution used to install Commotion on routers), OpenBTS (the software that enables Commotion’s GSM cell phone functionality), and Serval (which enables secure and distributed mesh applications and routing).</p>

<h3>Will using Commotion allow access to services and websites blocked by our local ISP?</h3>
<p>While Commotion does not attempt to block websites or Internet services by default, Commotion networks may be subject to whatever restrictions are in place on that Internet connection. However, it will allow users with an uncensored Internet connection to share that connection with other network users. Users may also share information directly with each other and store that data until such time as an uncensored Internet connection is available.</p>

<h3>How can I hear about the latest Commotion developments?</h3>
<p>In addition to the project website, there are three Commotion mailing lists designed for varying levels of interest:</p>

<ul>
	<li><a href="https://lists.chambana.net/mailman/listinfo/commotion-announce">commotion-announce</a>: only official announcements with minimal discussion</li>
	<li><a href="https://lists.chambana.net/mailman/listinfo/commotion-discuss">commotion-discuss</a>: for those who want to use Commotion without getting too technical</li>
	<li><a href="https://lists.chambana.net/mailman/listinfo/commotion-dev">commotion-dev</a>: for those who want to discuss improvements the Commotion software</li>
</ul>

<p>You can also join us on irc in #commotion on the freenode.net server</p>

<h2>Access &amp; Installation</h2>

<h3>What equipment is necessary to use this technology?</h3>
<p>At minimum Commotion requires two or more Wi-Fi enabled devices, such as laptops, routers, or smartphones, to create a standalone network. New users may join an existing network using other Wi-Fi devices or standard GSM mobile phones.</p>

<h3>Who can download and use this software?</h3>
<p>Anyone. Commotion is an open source project and a central goal of the project team is to ensure that it is freely available to those who need it, that it works properly on available hardware, and that it can be extended to suit local needs. We strive to make it easily accessible and distributable.</p>

<h3>Is there a charge or cost to use Commotion?</h3>
<p>No. The software will always be available free of charge, and our documentation is available under a <a href="http://creativecommons.org/licenses/by-sa/2.5/">Creative Commons, Share-Alike license</a>. Communities or individuals using Commotion assume the cost of purchasing routers and other hardware used in building their networks. There may also be a cost for a connection to the public Internet from a local provider. The size, scope and operation of a Commotion network is largely up to the community that deploys it.</p>

<h3>Can I buy a Commotion Construction Kit?</h3>
<p>No. The Commotion Construction Kit is a set of documentation that can be downloaded from this website. It is not a kit of hardware, but a planning and implementation tool intended for communities interested in organizing and building community wireless networks.</p>

<h3>Is it possible to acquire parts locally, then download the needed software from somewhere?</h3>
<p>Yes. Commotion was designed to work using hardware commonly available in most areas.</p>

<h3>Is Commotion only usable in urban areas? What about rural or remote communities?</h3>
<p>Commotion is in use in a variety of communities, both urban and rural, and in all types of terrain. Note that in remote areas additional network planning and cost may be necessary to address the challenges of building infrastructure in remote regions, such as limited access to power sources, rough terrain, or large distances in between wireless links.</p>

<h3>Do you have suggestions for hardware to purchase? What vendors do you use for purchasing hardware?</h3>
<p>Our development has focused on supporting <a href="ubnt.com">Ubiquiti</a> devices, and we are testing other brands with similar hardware such as TP-Link, Mikrotik and others. Technically, any router that's ar71xx and capable of OpenWRT Attitude Adjustment should work. We maintain a list of <a href="https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_compatibility_list">potentially compatible routers</a> on our developer wiki.</p> 
<p>As new platforms are tested and confirmed working, we add them to our supported hardware lists and publish pre-compiled images for them. You can view a<a href="https://wiki.commotionwireless.net/doku.php?id=hardware_in_testing"> list of hardware currently in testing </a>on our developer wiki. If you have suggestions of hardware that we should look into, or that you'd like to experiment with, please <a href="https://commotionwireless.net/contact">contact us.</a></p>

<h2>Security</h2>

<h3>Is Commotion Secure?</h3>
<p>Commotion's security features are constantly evolving. For up-to-date information on Commotion's security model and features, please see: <a href="/understanding-commotions-warning-label">https://commotionwireless.net/understanding-commotions-warning-label</a></p>

<h3>How can users differentiate fake Commotion networks from legitimate mesh networks?</h3>
<p>Individuals should treat new networks, based on Commotion or otherwise, with the degree of trust that they deserve. They should only use networks that they trust and, if they doubt the trustworthiness of the network, use standard end-to-end encryption technology like HTTPS to secure their data as it passes over that network.</p>

<h2>Features &amp; Capabilities</h2>

<h3>What connection speed will this service provide?</h3>
<p>Connection speed is determined by the capabilities of the devices comprising the network and the bandwidth available. At this point, Commotion far outperforms the capabilities of wireless data delivery.</p>

<h3>Does this service have the capacity to support high traffic?</h3>
<p>The overall capacity is dictated by the number, distribution, and type of devices used and, in the case of Internet access, the amount of bandwidth available to the network. However, the software is efficient at distributing load throughout the network.</p>

<h3>Is it possible for Wi-Fi enabled mobile phones to access this service? If so, will they have any way to block the service?</h3>
<p>A Commotion network is just like any other Wi-Fi network. It is necessary for a Wi-Fi enabled mobile device of any kind to choose to join the network.<br />
Users with compatible Android phones may choose to download and install the <a href="/download/android">Commotion client for Android</a> as well.</p>

<h3>Using this kind of service how large an area can be covered?</h3>
<p>This type of service can scale quite well. However, sufficiently large networks do require care and planning for smooth operation. A mesh network’s scalability varies greatly depending on the hardware used, the design of the network, and the network’s physical environment. Though they do not use Commotion software, two examples of large scale mesh networks are the Athens Wireless Metropolitan Network (AWMN) with over 1100 backbone nodes and over 2400 client computers and Spain’s Guifi.net, which has over 19,000 nodes.</p>

<h3>How many users can use a single node?</h3>
<p>This depends on the capacity of each device, both in terms of simultaneous wireless connections and total bandwidth consumed by each user.</p>

<h3>Please explain about the telephone service of this project: does it use sim cards, Skype, or another technique?</h3>
<p>The network will interconnect via Wi-Fi with Wi-Fi-enabled smartphones, and via GSM with standard mobile phones. If VOIP services are available on the internet or locally, users may place calls using Skype, Jitsy, or local VoIP services. Otherwise, users may place calls to other phones on the Commotion network if there is a nearby Commotion enabled GSM device.</p>

<h2>Development</h2>

<h3>Has this project already been pilot tested or is it only at the level of hypothesis?</h3>
<p>Yes. Commotion has been tested and is in use in <a href="/about/where-its-used">multiple locations around the world.</a></p>

<h3>How will the software programming for this project be done?</h3>
<p>The project is structured as a traditional open-source project. We are working to coordinate and integrate many different open-source projects operating in this field.</p>

<h3>How is Commotion development funded?</h3>
<p>New America Foundation's Open Technolgy Institute receives funding for COmmotion development from a variety of sources, including the US Department of State Internet Freedom Program, USAID and Radio Free Asia.</p>

<h3>Which operating systems are supported by Commotion?</h3>
<p>The Commotion project is currently targeting reasonably current versions of Windows, Mac, GNU/Linux, Android, embedded routers, and OpenBTS platforms. In addition, any device may connect to a standard access point provided by the network as a client without having to run the software, thereby utilizing the network without being part of it.</p>

<p>Officially supported software images for Commotion Router can be found on the <a href="/download/routers">Commotion Router Download</a> page. Information about platforms under active development can be found in the <a href="/developer/resources">For Developers</a> section of this site.</p>

<h2>Similar Technologies</h2>

<h3>Assuming Commotion is implemented successfully, how can users be tracked? If users are untraceable, won't that make it a good tool for criminals?</h3>
<p>There is no such thing as perfect security and anonymity, but we strive to make the network as secure and anonymous as possible while clearly informing users of all of the strengths, weaknesses, and ramifications of the network. Such a tool is powerful in the hands of whatever individuals and communities use it. Software is not inherently good or evil and can be utilized by people with a variety of intents. Activists under an oppressive regime might be considered criminals by the government that they oppose.</p>

<h3>Will this project be accessible only during periods of unrest?</h3>
<p>This technology is permanent. In fact, many of the underlying components are currently in <a href="/about/where-its-used">use around the world</a> today as a means of connecting communities.</p>

<h3>What advantage does this method have over satellite internet?</h3>
<p>Commotion is a suite of tools designed to take advantage of any available satellite Internet service, and that connection may be shared with anyone on the network. If no Internet connection is available, network users may still communicate securely and anonymously with each other. Finally, the network is designed to be self-healing, allowing users to join and leave the network as needed.</p>
 
