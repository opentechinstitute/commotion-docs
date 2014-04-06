---
layout: blog
title: Case Study - Red Hook Initiative WiFi and Tidepools
categories:  red hook hardware cost community wireless applications Research mesh 
created: 2013-02-02
changed: 2013-07-26
post_author: Georgia Bullen
lang: en
---
 
<em>This Case Study will be published in the forthcoming edition of <a href="http://wndw.net/">Wireless Networking in the Developing World</a> and is cross-posted at <a href="http://oti.newamerica.net/blogposts/2013/case_study_red_hook_initiative_wifi_tidepools-78575">oti.newamerica.net</a>.</em>

<img src="http://oti.newamerica.net/sites/newamerica.net/files/imagecache/standard_node_image/articles/images/redhook_sign2.jpg" height="300">

Red Hook Initiative WiFi is a collaboratively designed mesh network. It provides Internet access to the Red Hook section of Brooklyn, NY, and serves as a platform for developing local applications and services. Red Hook Initiative has built the network in partnership with the Open Technology Institute, putting human-centered design and community engagement at the core of the project. The community expanded the network significantly following a natural disaster in Fall 2012.

<h2>Key Aspects</h2>
<ol><li>Main network anchors are trusted community organizations.</li>
<li>Solid relationship with technical support provider from outside of the community.</li>
<li>Community-led design process emphasizes local needs and enhances engagement.</li>
<li>Rapid prototyping of applications designed for the local area network.</li></ol>

<h2>History of the Network</h2>

Beginning in Fall 2011, the <a href="http://rhicenter.org">Red Hook Initiative</a> (RHI), a Brooklyn non-profit focused on creating social change through youth engagement, approached the Open Technology Institute about collaborating on a community wireless network. RHI wanted a way to communicate with the residents immediately around its community center. OTI was initially unable to support the effort directly, but introduced Anthony Schloss, RHI Media Programs Coordinator, to Jonathan Baldwin, a Parsons School of Design graduate student who had been experimenting with wireless mesh as a local digital platform.

Red Hook is the northwestern corner of Brooklyn, jutting out into the Hudson Bay. It is cut off from the rest of the borough by the Gowanus Expressway, which carries traffic from points south into lower Manhattan. The neighborhood is home to approximately 5000 residents of Red Hook Houses public housing and other low income areas near an expressway, as well as a gentrifying section with many small businesses closer to the water. Many industrial sites, an Ikea and a number of public parks fill out the area.

RHI WiFi’s initial plan was to provide wireless access to the Internet in and around RHI’s building, which is near the expressway and the Red Hook Houses. Schloss and Baldwin installed a Ubiquiti Nanostation on the roof and a Linksys router inside the building, connected via ethernet. They connected the Linksys router to the center’s modem. This installation provided an opportunity to prototype early versions of RHI WiFi local applications. When residents or visitors to RHI connected to the wireless access point named “Red Hook Initiative WiFi,” they were directed to a website on a local server. On this website was a “Shout Box,” a local digital message board allowing everyone to leave a comment or a note behind and participate in the project.

In March of  2012, Baldwin and Schloss installed an additional Ubiquiti Nanostation on the roof of an apartment building overlooking Coffey Park and much of the rest of the neighborhood. A resident of the building with social ties to RHI donated the electricity and rooftop access. With this vantage point on the neighborhood, the possibility of a wireless network connecting public spaces began to take shape. Initially, the Coffey Park wireless access point  was not connected to the Internet, but was connected to a <a href="http://www.globalscaletechnologies.com/t-guruplugdetails.aspx">GuruPlug Server</a>. The basic, low power server hosted a local web page on the network and a “Shout Box” similar to the one running in RHI.

<img src="http://oti.newamerica.net/sites/newamerica.net/files/articles/harbortech_6.jpg" height="400">

RHI WiFi uses OTI’s Commotion Wireless firmware running on Ubiquiti routers. Commotion is a free and open-source communication tool that uses mobile phones, computers, and other wireless devices to create decentralized mesh networks. Most importantly, Commotion allows network development to occur dynamically and organically - so the community can decide where and how the network should grow. Commotion networks are sustainable without a connection to the Internet, which makes them resilient to outages; they can distribute access to applications hosted on local servers or on the routers themselves.

<h2>Social Software and Growth of the Network</h2>

Based on research into community wireless networks around the world, Baldwin had identified a need for social software that would add value and a distinct identity to the community wireless network, specifically to:
<ul><li>Spark civic and community engagement by addressing local needs, interests and culture.</li>
<li>Foster trust, interdependence, and reciprocity throughout the community.</li>
<li>Merge digital and physical community spaces.</li>
<li>Ensure that people know about mesh / have software installed before a communication outage occurs.</li></ul>

Schloss and Baldwin began working with participants in RHI’s established media programs on a collaborative, human-centered design process that called upon the knowledge and interests of local residents. Throughout the first year, Baldwin and Schloss held workshops with community members to determine local needs and gather design ideas for <a href="http://tidepools.co/">Tidepools</a>, developed by Baldwin for piloting on the RHI network. <a href="http://tidepools.co/">Tidepools</a> is an open-source customizable local mapping platform built using Javascript, <a href="http://leafletjs.com/">LeafletJS</a>, PHP and <a href="http://www.mongodb.org/">MongoDB</a>. Baldwin designed it for local communication, placemaking, and organizing around events, issues, and community assets.

<img src="http://oti.newamerica.net/sites/newamerica.net/files/articles/mapping_out_the_community_FAQ3_becky%20kazansky.png" width="500">
<em>Source: Becky Kazansky</em>

The community workshops produced ideas for local applications that would address specific needs identified by the community. The needs identified in the community workshops were:
<ul><li>Access to the Internet (at home, via mobile, and at neighborhood kiosks).</li>
<li>Accountable community participation (FAQs, electronic bulletin boards, SMS enabled features).</li>
<li>Access to resources (employment and skills sharing).</li>
<li>Local Information System (historical archive, landmarks).</li>
<li>Multilingual (Spanish, Arabic and Tagalog).</li>
<li>Playful interface to promote exploration.</li></ul>

In the summer of 2012, Baldwin joined OTI’s staff, and OTI brought additional tech expertise to the collaboration along with experience closing digital divides and developing community-controlled infrastructure. The organization’s experience in Detroit and Philadelphia provided guidance on how to collaborate with communities that have been socially, geographically and technologically isolated within cities.

During the months following the initial tests of the local network, OTI and RHI focused on realizing three initial applications that would use the Tidepools platform and run over the local wireless network:
<ul><li><a href="http://rhiwifi.co/bus">Where’s the B61 Bus?</a> - An application for accessing real-time bus locations and arrival times using data from the Metropolitan Transit Authority’s BusTime API (launched October 9, 2012).</li>
<li><a href="https://rhiwifi.co/stopfrisk">Stop &amp; Frisk Survey</a> - A survey application that residents can use to document police interactions in Red Hook and improve public safety (launched October 17, 2012).</li>
<li><a href="http://rhicenter.org/category/rhi/rhi_radio/">RHI Radio</a> - An online radio station, streaming content produced by the Youth Radio Group at RHI (under development).</li></ul>

<img src="http://oti.newamerica.net/sites/newamerica.net/files/articles/RHIWifi_Apps.png" height="400">

<h2>Expansion after Superstorm Sandy</h2>

On October 29, 2012, Superstorm Sandy devastated low-lying Red Hook along with much of the surrounding region. Amid power outages and flooding, the need for access to communications systems for information about what was happening and where help was needed became crucial. The RHI building was one of the few locations that had managed to keep power and, as a result, RHI WiFi had stayed up through the storm. In the days immediately following the storm, up to  300 people per day were accessing the network to communicate with loved ones, learn what was happening in the rest of the city, and seek recovery assistance.

“We immediately saw communications as one of the critical needs in the community,” says Tony Schloss. “We wanted it to be as easy as possible for people to contact their networks to find housing, gain access to information, and report their safety status.”

Text messaging was the most widely – and in some cases the only – means of communication for neighborhood residents after the storm, so in a matter of days, OTI developed <a href="http://rhiwifi.co/status">RHI Status - an SMS to Map plugin</a> for Tidepools using the <a href="https://www.tropo.com/">Tropo Application Programming Interface (API)</a> for handling SMS messages and the <a href="https://developers.google.com/maps/documentation/geocoding/">Google Geocoding API</a> for handling natural language addresses. RHI Status provided a means for residents to text their location and needs to a contact number, which automatically maps the information in Tidepools with threaded discussion so others in the community can respond.

<img src="http://oti.newamerica.net/sites/newamerica.net/files/articles/sms_rhistatus_map.png" width="500">

As recovery progressed, Frank Sanborn, a Federal Emergency Management Administration (FEMA) Innovation Fellow, reached out to RHI about expanding the network to further support recovery efforts in Red Hook. Sanborn recruited volunteers from <a href="https://wiki.projectmeshnet.org/New_York_City_Meshnet">NYC Mesh</a> and <a href="http://www.hacdc.org/">HacDC</a>, a Washington, DC based hackerspace, and coordinated with the International Technology Disaster Resource Center (<a href="http://www.itdrc.org/">ITDRC</a>). OTI already had a store of routers at RHI from before the storm. With technical direction from OTI and operating according to the goals established by RHI, the team set up a FEMA satellite link on the roof of RHI and installed a Commotion router on the roof of an auto body shop down the block from RHI. Previously, the owner of the shop had been reluctant to host a router, as he did not see a benefit in doing so. However, as the community rallied in response to the crisis, the auto body shop became a key link between the Internet gateway at RHI and the router overlooking Coffey Park, which had by then become an important aid distribution point for Red Hook. Although the satellite uplink was offered for only 30 days and provided modest bandwidth, the mesh network could distribute the Internet connection to key locations where residents, first responders, and recovery volunteers needed it most.

As the community came together to respond to the storm, the need to grow this resilient communications infrastructure became clear. With power and water still off in much of Red Hook in the following month, many local organizations and residents reached out to help. Brooklyn Fiber, a local Internet service provider (ISP), volunteered an additional gateway to RHI WiFi. To add the gateway into the mesh, OTI, RHI and Brooklyn Fiber installed a 5 GHz Ubiquiti Nanostation Loco router running AirOS (to receive the fiber signal), and a Ubiquiti Nanostation running Commotion (as a wireless access point), on the 3rd floor of the Visitation Church Rectory on the west side of Coffey Park. The church was also without power at the time, but the team installed an <a href="http://en.wikipedia.org/wiki/Uninterruptible_power_supply">uninterruptible power supply</a> that could run the routers for 12 hours at a time.

Since the storm, RHI WiFi has supported approximately 100 users per week even without promotion of the resource. Data collected by Commotion on current DHCP leases, as well as the Google Analytics on the landing webpage, show that residents appear to be primarily connecting using Android devices and Apple iPod Touches. In addition, many residents use the computer workstations in the RHI media lab as well as the wireless available in RHI. RHI is serving as both a physical and social anchor for the wireless network, driving digital adoption, educating the neighborhood, and coordinating relief efforts.

<img src="http://oti.newamerica.net/sites/newamerica.net/files/articles/Adding%20new%20nodes_repairing%20old%20ones%20-%20coffey%20park.jpg" height="400">

<h2>Sustainability &amp; Future Goals </h2>

RHI will continue to develop the project with the goal of supporting community-wide recovery from Superstorm Sandy. With support from New York City Workforce Development funding, RHI and OTI are launching a training program in January 2013 to engage neighborhood residents in maintaining and growing the wireless network. Modeled on the “Digital Stewards” curriculum developed by OTI and <a href="http://alliedmedia.org/">Allied Media Projects</a> in Detroit, Michigan, the curriculum will train young adults to install new routers, maintain existing ones, and promote adoption of the RHI WiFi network throughout Red Hook. The RHI Digital Stewards will prioritize additional public spaces for network expansion and work with other residents to design new, local applications. OTI will continue to assist in the development of the applications and support the engineering of the network in close collaboration with the community.

<h2>Cost of the Network</h2>

<ul><li>Donated labor from local residents and technologist.</li>
<li>Institutional support from RHI and OTI.</li>
<li>Hardware (~$50 to ~$85 each router). </li>
<li>Installation (3-5 work hours for two people per site).</li>
<li>Bandwidth (donated by RHI, Brooklyn Fiber, and FEMA).</li>
<li>Training program for local residents to maintain and expand network as part of a municipal employment program.</li></ul>

<h2>Lessons Learned</h2>

<ul><li>Having relationships and anchor wireless nodes in place prior to a disaster facilitates rapid network deployment through: </li>
<ul><li>Already-established relationships with key community stakeholders.</li>
<li>A heightened level of technological literacy in the community.</li>
<li>Pre-positioned wireless network equipment in the neighborhood.</li></ul>
<li>The most challenging investment is in the initial organizing and design phase before any value is realized.</li>
<li>Community-designed applications add value to a local network, even at a small scale.</li></ul>

<img src="http://oti.newamerica.net/sites/newamerica.net/files/articles/coverage.png" height="400">

<h2>Related Articles &amp; Websites</h2>

<a href="http://oti.newamerica.net/pressroom/2012/release_new_community_tech_tool_to_help_in_sandys_aftermath ">RELEASE: New Community-Tech Tool to Help in Sandy's Aftermath</a>

<a href="http://www.forbes.com/sites/deannazandt/2012/11/10/what-sandy-has-taught-us-about-technology-relief-and-resilience/ ">What Sandy Has Taught Us About Technology, Relief and Resilience</a>

<a href="http://www.newamerica.net/node/34925 ">A Community Wireless Mesh Prototype in Detroit, MI</a>

<h3>Tidepools</h3>
<a href="http://tidepools.co">http://tidepools.co</a>
<a href="http://www.animalnewyork.com/2012/tidepools-a-social-networktool-in-the-service-of-the-community/">http://www.animalnewyork.com/2012/tidepools-a-social-networktool-in-the-service-of-the-community/</a>
<a href="http://wlan-si.net/en/blog/2012/05/26/introducing-tidepools-social-wifi/">http://wlan-si.net/en/blog/2012/05/26/introducing-tidepools-social-wifi/</a>
<a href="http://www.core77.com/blog/social_design/a_community-owned_map_accessed_via_mesh_networks_23319.asp">http://www.core77.com/blog/social_design/a_community-owned_map_accessed_via_mesh_networks_23319.asp</a>
<a href="http://www.jrbaldwin.com/tidepoolswifi/">http://www.jrbaldwin.com/tidepoolswifi/</a>

<h3>Stop &amp; Frisk App</h3>
<a href="http://animalnewyork.com/2012/stop-and-frisk-app-from-red-hook-initiative/">http://animalnewyork.com/2012/stop-and-frisk-app-from-red-hook-initiative/</a>
<a href="http://www.dnainfo.com/new-york/20121017/red-hook/stop-and-frisk-app-launched-by-red-hook-initiative">http://www.dnainfo.com/new-york/20121017/red-hook/stop-and-frisk-app-launched-by-red-hook-initiative</a>

<h3>Red Hook</h3>
<a href="http://www.nycgovparks.org/parks/redhookpark/history">http://www.nycgovparks.org/parks/redhookpark/history</a>

To download a PDF of this Case Study, <a href="/files/rhiwifi_tidepools_casestudy.pdf">click here</a>
