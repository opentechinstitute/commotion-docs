---
layout: default
title: FAQ
site_section: about
categories: 
created: 2013-07-14
changed: 2014-04-14
post_author: Chris Ritzo
lang: en
---
<div class="faq-content">
<h2>General</h2>

<h3>What is Commotion?</h3>
<p>Commotion is a suite of open-source communications tools that use mobile phones, computers, and other wireless devices to create decentralized mesh networks and share local services. Read more about the <a href="/docs/supported-devices">devices Commotion supports</a> and more about how it works below.</p>

<h3>Does commotion provide internet access? Is it possible to share internet access with Commotion?</h3>
<p>Commotion does not provide Internet access.</p>
<p>You can certainly share Internet access using Commotion, though we recommend that you consult the Terms of Service from your ISP. All that is required is to connect a router with Commotion installed to an existing Internet connection to provide an Internet gateway. The Commotion router will share bandwidth with other devices on the mesh network from that connection. Multiple routers can be used to do this on a mesh network to provide multiple gateways and additional bandwidth. See the section "Commotion Node Connected to a Home or Business Router" on the <a href="/docs/cck/installing-configuring/common-configurations">Common Configurations page</a></p> 

<h3>How does Commotion work?</h3>
<p>Commotion is software that is installed on existing feature phones, smartphones, Wi-Fi enabled computers, wireless routers and other wireless-capable personal devices. It enables the creation of peer-to-peer (mesh) communications networks. The Commotion Project's goal is to provide an easy-to-assemble package of software and documentation that makes building mesh networks accessible for a wide audience.</p>

<h3>What is mesh? What is a mesh network? How does it work?</h3>
<p>There are many different types of networks. Most networks that we interact with everyday are based on a hub and spoke model. Mesh networks are based on the idea that any point in the network, or node, can talk to any other point in the network, similar to how human networks work. You can read more about mesh networks in the Commotion Construction Kit: <a href="http://commotionwireless.net/docs/cck/networking/intro-to-mesh/">http://commotionwireless.net/docs/cck/networking/intro-to-mesh/</a> </p>

<h3>What are the core components of Commotion?</h3>
<p>Commotion integrates and extends several open source software projects. Among its core components are OLSRd (the mesh routing protocol upon which Commotion is built), OpenWRT (the embedded Linux distribution used to install Commotion on routers), OpenBTS (the software that enables Commotion’s GSM cell phone functionality), and Serval (which enables secure and distributed mesh applications and routing).</p>

<h3>Will using Commotion allow access to services and websites blocked by our local ISP?</h3>
<p>While Commotion does not attempt to block websites or Internet services by default, Commotion networks may be subject to whatever restrictions are in place on that Internet connection. However, it will allow users with an uncensored Internet connection to share that connection with other network users. Users may also share information directly with each other and store that data until such time as an uncensored Internet connection is available.</p>

<h3>Is there any difference between your technology and other low cost mesh vendors or firmwares like open-mesh, ddwrt, Freifunk, etc.</h3>
<p>The short answer is yes, there are many differences, but there is also a significant amount of overlap. For example, both Commotion and Freifunk use OpenWRT as a base but have different feature sets due to their different use cases.</p>
    
<p>Each of these projects has goals and priorities that are reflected in their design choices. Commotion is primarily designed to package well-supported, free, open source firmware with default configurations and administrative tools that make it possible for new users to build and maintain a network with minimal outside support.</p>

<h3>How can I hear about the latest Commotion developments?</h3>
<p>In addition to the project website, there are three Commotion mailing lists designed for varying levels of interest:</p>

<ul>
	<li><a href="https://lists.chambana.net/mailman/listinfo/commotion-announce">commotion-announce</a>: only official announcements with minimal discussion</li>
	<li><a href="https://lists.chambana.net/mailman/listinfo/commotion-discuss">commotion-discuss</a>: for those who want to use Commotion without getting too technical</li>
	<li><a href="https://lists.chambana.net/mailman/listinfo/commotion-dev">commotion-dev</a>: for those who want to discuss improvements the Commotion software</li>
</ul>

<p>You can also join us on irc in #commotion on the freenode.net server</p>

<h2>Access &amp; Installation</h2>

<h3>What kind of equipment do I need to use Commotion? I have a specific router- Is it compatible with Commotion? Do you have images for it?</h3>
<p>At minimum Commotion requires two or more Wi-Fi enabled devices, such as laptops, routers, or smartphones, to create a standalone network. New users may join an existing network using other Wi-Fi devices or standard GSM mobile phones.</p>

<p>Our development has focused on supporting <a href="ubnt.com">Ubiquiti</a> devices, and we are testing other brands with similar hardware such as TP-Link, Mikrotik and others. Technically, any router that's ar71xx and capable of OpenWRT Attitude Adjustment should work. See our list of <a href="https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_compatibility_list">potentially compatible routers</a> on our developer wiki for more information.</p>

<p>As new platforms are tested and confirmed working, we add them to our supported hardware lists and publish pre-compiled images for them. You can view a<a href="https://wiki.commotionwireless.net/doku.php?id=hardware_in_testing"> list of hardware currently in testing </a>on our developer wiki. If you have suggestions of hardware that we should look into, or that you'd like to experiment with, please <a href="https://commotionwireless.net/contact">contact us.</a></p>

<p>If you don’t find your router on the <a href="http://commotionwireless.net/download/routers/">Commotion Router downloads page</a>, check our <a href="https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_in_testing">Developer Hardware in testing wiki page</a> which lists devices being tested with Commotion Router by the development team and other project contributors. We also maintain a list of potentially compatible routers on our developer wiki (https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_compatibility_list). If you have a router on the list and would like to help test new devices, contact us and we might be able to build a custom image for you to test!</p>

<h3>Does Commotion support routers with multiple radios (5Ghz and 2.4Ghz)?</h3>
<p>Since version 1.0 of Commotion-Router, support is available for dual radio devices. We test and release images for new supported routers as we have available devices.  Check our <a href="https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_in_testing">Developer Hardware in testing wiki page</a> for devices being tested with Commotion Router by the development team and project other contributors. We also maintain a list of <a href="https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_compatibility_list">potentially compatible routers</a> on our developer wiki.</p>
 
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

<h2>Security</h2>

<h3>Is Commotion Secure?</h3>
<p>Commotion's security features are constantly evolving. For up-to-date information on Commotion's security model and features, please see: <a href="/understanding-commotions-warning-label">https://commotionwireless.net/understanding-commotions-warning-label</a></p>

<h3>How can users differentiate fake Commotion networks from legitimate mesh networks?</h3>
<p>Individuals should treat new networks, based on Commotion or otherwise, with the degree of trust that they deserve. They should only use networks that they trust and, if they doubt the trustworthiness of the network, use standard end-to-end encryption technology like HTTPS to secure their data as it passes over that network.</p>

<h3>Is Commotion susceptible to the Heartbleed OpenSSL bug?</h3>
<p>No, Commotion's wireless router implementations use CyaSSL, which is a separate implementation of SSL. A developer of CyaSSL posted a <a href="http://community.arm.com/groups/embedded/blog/2014/04/10/wolfssl-and-cyassl-users-safe-from-heartbleed-bug">note</a> about this. We also tested it ourselves using the nmap scripting engine’s <a href="http://nmap.org/nsedoc/scripts/ssl-heartbleed.html">heartbleed vulnerability detector</a>, and determined Commotion is not vulnerable.</p>

<h2>Features &amp; Capabilities</h2>

<h3>What connection speed will this service provide?</h3>
<p>Connection speed is determined by the capabilities of the devices comprising the network and the bandwidth available. At this point, Commotion far outperforms the capabilities of wireless data delivery.</p>

<h3>Does this service have the capacity to support high traffic?</h3>
<p>The overall capacity is dictated by the number, distribution, and type of devices used and, in the case of Internet access, the amount of bandwidth available to the network. However, the software is efficient at distributing load throughout the network.</p>

<h3>Is it possible for Wi-Fi enabled mobile phones to access this service? If so, will they have any way to block the service?</h3>
<p>A Commotion network is just like any other Wi-Fi network. It is necessary for a Wi-Fi enabled mobile device of any kind to choose to join the network.<br />
Users with compatible Android phones may choose to download and install the <a href="/download/android">Commotion client for Android</a> as well.</p>

<h3>How scalable are Commotion networks?</h3>
<p>Commotion is theoretically scalable to thousands of nodes across an urban area or multiple rural villages. In practice, however, network scalability is highly dependent on the specific situation: network design, physical environment, management strategies and hardware. The larger the network becomes, the more important it will be to minimize radio interference, balance load on individual nodes, manage node density, and decentralize troubleshooting. Most large scale mesh networks use other technologies, such as point-to-point backhaul links, to bridge clusters of mesh nodes to Internet gateways. Engineered solutions such as these help large networks maintain more consistent performance.</p>

<h3>Using this kind of service how large an area can be covered?</h3>
<p>This type of service can scale quite well. However, sufficiently large networks do require care and planning for smooth operation. A mesh network’s scalability varies greatly depending on the hardware used, the design of the network, and the network’s physical environment. Though they do not use Commotion software, two examples of large scale mesh networks are the Athens Wireless Metropolitan Network (AWMN) with over 1100 backbone nodes and over 2400 client computers and Spain’s Guifi.net, which has over 19,000 nodes.</p>

<h3>How many users can use a single node?</h3>
<p>This depends on the capacity of each device, both in terms of simultaneous wireless connections and total bandwidth consumed by each user.</p>

<h3>I want to run applications on a Commotion mesh network. How do you set up Application X on a Commotion mesh?</h3>
<p>Running network applications on a local mesh network is very similar to running applications on the Internet or any local area network (LAN), and requires at a minimum a local server hosting the app or service. That service can then be advertised between Commotion mesh routers so people connecting to the network can find that application or service. OTI is working on a guides on how to set up an application server for various applications and provide those services on a Commotion mesh network. Preliminary instructions for some applications is available on our <a href="https://wiki.commotionwireless.net/doku.php?id=development_resources:application_server:start">developer wiki</a>.</p>

<h3>Please explain the cell phone component of this project: does it use sim cards, Skype, or another technique?</h3>
<p>The network will interconnect via Wi-Fi with Wi-Fi-enabled smartphones, and via GSM with standard mobile phones. If VOIP services are available on the internet or locally, users may place calls using Skype, Jitsy, or local VoIP services. Otherwise, users may place calls to other phones on the Commotion network if there is a nearby Commotion enabled GSM device.</p>

<h2>Development</h2>

<h3>Has this project already been pilot tested or is it only at the level of hypothesis?</h3>
<p>Yes. Commotion has been tested and is in use in <a href="/about/where-its-used">multiple locations around the world.</a></p>

<h3>How will the software programming for this project be done?</h3>
<p>The project is structured as a traditional open-source project. We are working to coordinate and integrate many different open-source projects operating in this field.</p>

<h3>How is Commotion development funded?</h3>
<p>Commotion pre-dates any federal funding and as an open source project has an independent life regardless of any particular funding. Commotion has had and will have other funders. The active funding at any particular moment is a consequence of timing, not reflective of how we approach securing support for the work.</p>

<h3>Which operating systems are supported by Commotion?</h3>
<p>The Commotion project is currently targeting reasonably current versions of Windows, Mac, GNU/Linux, Android, embedded routers, and OpenBTS platforms. In addition, any device may connect to a standard access point provided by the network as a client without having to run the software, thereby utilizing the network without being part of it.</p>

<p>Officially supported software images for Commotion Router can be found on the <a href="/download/routers">Commotion Router Download</a> page. Information about platforms under active development can be found in the <a href="/developer/resources">For Developers</a> section of this site.</p>

<h3>I would like to contribute translations of the Commotion interface and documentation. How can I get involved?</h3>
<p>You can find out more about getting involved in translation of Commotion on our <a href="/docs/localization">Commotion Localization page.</a></p>

<h2>Building Networks</h2>
<h3>Does OTI build networks?</h3>
<p>No. OTI creates resources and tools for communities to design, build and govern their own communications tools and infrastructure, and conducts hands-on trainings with people and communities building their own networks.</p>

<h3>I read about {Community Network X} - how can I do that in my community?</h3>
<p>OTI and partners have developed a set of learning tools - the <a href="/docs/cck">Commotion Construction Kit</a> - to help other communities in thinking about how to build sustainable community networks. The CCK is freely available on our website (http://commotionwireless.net/docs/cck) and is continually updated along with the Commotion software. To start, we recommend working with other individuals and groups in your community and starting with the Planning section. If there is a specific network or case study that you think is a model for your community, you should definitely join the <a href="https://lists.chambana.net/mailman/listinfo/commotion-discuss">Commotion discussion email list</a> to connect directly with the groups that have done those implementations.</p>

<h3>How much does it cost to build a Commotion network?</h3>
<p>Please refer to the <a href="/blog/2014/04/14/how-much-does-it-cost/">blog post</a> on this subject for more information on the various costs associated with building a Commotion network.</p>

<h3>Can I supply internet access to my whole community through my home router?</h3>
<p>You can certainly share Internet access using Commotion, although you will not be able to scale to your whole community with just your home internet connection. A Commotion router will share bandwidth with other meshed devices on a network if it is connected to the Internet (in that case it’s called a “gateway”). For a community network, you will most likely want to have multiple internet gateways. This can be accomplished using multiple routers on a mesh network to provide multiple gateways and additional bandwidth. See the section "Commotion Node Connected to a Home or Business Router" on the <a href="/docs/cck/installing-configuring/common-configurations">Common Configurations page</a>.</p>

<h3>How much will it cost to supply Internet access to my whole community?</h3>
<p>It depends. Determining the cost of a community wireless network is complicated as it involves many factors, such as the number of people you need to serve, how much area you want to cover in your community, and options in your community for how to connect your network to the Internet, as well as hardware, installation, and labor costs. For a few examples of these costs, please refer to the blog post <a href="/blog/2014/04/14/how-much-does-it-cost/">How much does it cost?</a> To begin thinking about what you want your community network to look like, we recommend bringing your community together to work through the <a href="/docs/cck/planning/design-your-network-every-network-tells-story">Every Network Tells a Story</a> module from the Commotion Construction Kit, which will help you in your initial planning exercises.</p>

<h2>Similar Technologies</h2>

<h3>Assuming Commotion is implemented successfully, how can users be tracked? If users are untraceable, won't that make it a good tool for criminals?</h3>
<p>There is no such thing as perfect security and anonymity, but we strive to make the network as secure and anonymous as possible while clearly informing users of all of the strengths, weaknesses, and ramifications of the network. Such a tool is powerful in the hands of whatever individuals and communities use it. Software is not inherently good or evil and can be utilized by people with a variety of intents. Activists under an oppressive regime might be considered criminals by the government that they oppose.</p>

<h3>Will this project be accessible only during periods of unrest?</h3>
<p>This technology is permanent. In fact, many of the underlying components are currently in <a href="/about/where-its-used">use around the world</a> today as a means of connecting communities.</p>

<h3>What advantage does this method have over satellite internet?</h3>
<p>Commotion is a suite of tools designed to take advantage of any available satellite Internet service, and that connection may be shared with anyone on the network. If no Internet connection is available, network users may still communicate securely and anonymously with each other. Finally, the network is designed to be self-healing, allowing users to join and leave the network as needed.</p>

<h2>Press, Research or Collaboration</h2>
<h3>I am a journalist and would like to interview someone about Commotion.</h3>
<p>Thank you for your interest in learning more about Commotion. Please feel free to reach out to Jenny Lu Mallamo, New America’s Media Relations Associate,at  mallamo@newamerica.org or (202) 596-3368. Jenny can help direct you to the right information and experts, and can help coordinate interviews</p>

<h3>I am a researcher, community group, non-profit, civic entity, etc. interested in collaborating with OTI/Commotion.</h3>
<p>Thanks for reaching out! Before getting started, we recommend that you explore our resources on the Commotion Website. If you are thinking about starting a network, the Commotion Construction Kit is designed to help you through the planning, building, installation, and networking basics needed for starting a wireless network using Commotion. </p>
<ul>
<li>Join the <a href="https://lists.chambana.net/mailman/listinfo/commotion-discuss">Commotion Discuss list</a></li> 
<li>Researchers might read background from our <a href="http://oti.newamerica.net/publications/policy/universities_as_hubs_for_next_generation_networks">Universities as Hubs</a> report.</li>
<li>Find out how to <a href="/docs/get-started">Get Started</a>.</li> 
<li>Read about potential <a href="/blog/2014/04/14/how-much-does-it-cost/">costs for building Commotion networks.</a></li>
</ul>

<h3>Can you tell me about/connect me with communities doing mesh networks?</h3>
<p>Yes. Nearly all Commotion users are on the <a href="https://lists.chambana.net/mailman/listinfo/commotion-discuss">Commotion discussion list</a> and we have compiled a set of <a href="/about/where-its-used">case studies on specific projects</a>.</p>

</div> 
