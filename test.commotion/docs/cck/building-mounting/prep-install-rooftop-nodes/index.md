---
layout: default
title: Prep and Install Rooftop Nodes
site_section: help
sub_section: [cck,cck-building]
pdf: cck/building-mounting/4-Prep_and_Install_Rooftop_Nodes.pdf
pdf-all: true
categories: 
created: 2013-09-27
changed: 2013-10-01
post_author: critzo
lang: en
---
  <p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__338 img__view_mode__media_original attr__format__media_original" height="388" src="/files/prep_install_finish_support001.png" typeof="foaf:Image" width="510" /></p>

<section id="introduction">
<h2>Prep and Install Rooftop Nodes</h2>

<h3>Introduction</h3>

<p>This guide is intended to provide some easy to follow steps for your wireless equipment installation. Read it over to prepare, and use it to keep track of tasks on installation day.</p>

<p>Following you will find sections on:</p>

<p>Wireless node preparation</p>

<p>Site preparation</p>

<p>Wireless node installation</p>

<p>Clean-up, testing and post-installation tasks</p>

<p>Review of these materials should only take about an hour, though if you are using it in a classroom or instructional setting, it may take longer. Keep in mind this is a broad overview of all the steps required to install rooftop equipment. Each step along the way will take time - in fact, rooftop installations may take anywhere between two and six hours, depending on site conditions and equipment.</p>

<p><strong>Time required: 1-6 hours.</strong></p>

<h4>MATERIALS + SUPPLIES NEEDED</h4>

<p>Router</p>

<p>Mounting equipment &amp; hardware</p>

<p>Site plan</p>

<p>Ethernet cable</p>

<p>Power over Ethernet (PoE) adapter</p>

<p>Tool bag</p>
</section>

<section id="wireless-node-preparation">
<h3>Wireless Node Preparation</h3>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__339 img__view_mode__media_original attr__format__media_original" height="256" src="/files/prep_install_finish_support002_003.png" typeof="foaf:Image" width="510" /></p>

<p>This guide is intended to provide some easy-to-follow steps for your wireless equipment installation. It is especially helpful to keep track of tasks the day you are planning on working, but we recommend you read it over beforehand in order to best prepare.</p>

<p>The first step is to get the wireless hardware and install the custom mesh software. You can do this on the day of the install, or in the days leading up to it. If your neighborhood network has particular settings for the network, make sure to get those as well before installing the software.</p>

<p>1. Acquire a Commotion Wireless compatible router that is appropriate for the location.</p>

<p>2. Download the appropriate version of software at the Commotion website (commotionwireless.net). You can find instructions in the module <a href="/docs/cck/installing-configuring/install-ubiquiti-router">Install on a Router.</a></p>

<p>3. Record the wireless node's MAC address - a unique ID that you can use to keep track of the hardware, in case you need service from the manufacturer.</p>

<p>To find the MAC address: look on the bottom label or inside the bottom cover of the router for a code that looks like aa:bb:cc:dd:ee:ff - that is the MAC address of your router. It is a unique combination of numbers and letters that identifies the specific device.</p>

<p>To find the Mesh IP address: in the Commotion administrator interface, navigate to Status&gt;OLSR, then click on "Interfaces" and record the number that starts with 5. It looks like 5.x.y.z, where x, y, and z are numbers.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__340 img__view_mode__media_original attr__format__media_original" height="332" src="/files/prep_install_finish_nodetag.png" typeof="foaf:Image" width="510" /></p>

<p class="tip">You can write the node's name on the case with a permanent marker, or a printed label if you have a label maker.</p>
</section>

<section id="site-preparation">
<h3>Site Preparation</h3>

<p>It is a good idea to visit the site where you plan on installing a new wireless node a few days or a week before the actual installation. This allows more time to prepare and acquire any missing equipment or hardware.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__341 img__view_mode__media_original attr__format__media_original" height="365" src="/files/prep_install_finish_support004.png" typeof="foaf:Image" width="510" /></p>

<p>1. Do a site assessment. An example site assessment guide is available in the <a href="#">Determine Installation Needs</a> module. The guide includes a set of questions and things to look for, but cannot cover every possibility for installation sites.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__342 img__view_mode__media_original attr__format__media_original" height="313" src="/files/prep_install_finish_support005.png" typeof="foaf:Image" width="510" /></p>

<p>2. Pick the best mounting location on the roof based on visibility to other rooftops. Keep in mind wireless signals work best when there is a clear line of sight between the nodes. Also figure out what kind of mount you will use to install. The module <a href="/docs/cck/building-mounting/learn-about-rooftop-mounts">Learn about Rooftop Mounts</a> can help you decide.</p>

<p>3. Identify where the Ethernet cable will run along the roof and enter the building.</p>

<p>4. Identify where the Power over Ethernet (PoE) adapter will plug in.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__343 img__view_mode__media_original attr__format__media_original" height="168" src="/files/prep_install_finish_support005_a.png" typeof="foaf:Image" width="510" /></p>

<p>4a. If the node is mounted in an enclosure or indoors, try to find an accessible location that keeps it out of the way from everyday interaction.</p>

<p>4b. If the building owner or node host wants to donate bandwidth to make the node an Internet gateway, put the PoE adapter where it can plug into the host's router easily.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__344 img__view_mode__media_original attr__format__media_original" height="288" src="/files/prep_install_finish_support007.png" typeof="foaf:Image" width="510" /></p>

<p>5. Acquire the proper mounting hardware.</p>

<p>The module <a href="/docs/cck/building-mounting/learn-about-rooftop-mounts">Learn about Rooftop Mounts</a> can help you identify the right hardware. There are many places to find mounting hardware - your local hardware or electronics store may have some, but there are various vendors online as well.</p>

<p>Check that you have all the necessary hardware for mounting, such as concrete anchors, bolts, clamps, etc.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__345 img__view_mode__media_original attr__format__media_original" height="288" src="/files/prep_install_finish_support006.png" typeof="foaf:Image" width="510" /></p>

<p>6. Verify that the tool bag has everything you need for the mounting hardware and installation site.</p>
</section>

<section id="wireless-node-installation">
<h3>Wireless Node Installation</h3>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__346 img__view_mode__media_original attr__format__media_original" height="288" src="/files/prep_install_finish_support008.png" typeof="foaf:Image" width="510" /></p>

<p>Installation day! Now you get to go up on the roof and install new equipment for the community network - but make sure you are working in a safe and responsible way. We recommend going through <a href="/docs/cck/building-mounting/learn-rooftop-basics">Learn Rooftop Basics</a> module and reviewing some rooftop safety guidelines before you start your installation.</p>

<p>You can break the job into three parts: installing the mounting hardware; installing the node and power supply; and running the Ethernet cable between the node and power supply.</p>

<p>1. Install the mounting hardware. This will vary depending on the type of mount you are using. If it came as a kit, read and follow the installation instructions! For more information, refer to the <a href="/docs/cck/building-mounting/learn-about-rooftop-mounts">Learn about Rooftop Mounts</a> module.</p>

<p>For an eaves or anchor mount kit, drill the holes necessary for the anchors. Make sure to use outdoor rated anchors (plastic or metal).</p>

<p>For a chimney mount kit, make sure the strap is extremely tight!</p>

<p>For a non-penetrating roof mount, make sure to use at least a few concrete blocks (4" thick blocks are enough - you don't need full 8" thick blocks).</p>

<p>2. Attach the wireless node to the mounted mast. Use metal hose clamps or heavy-duty outdoor rated plastic zip-ties if possible. This will keep the wireless node from slipping or twisting off the mast.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__347 img__view_mode__media_original attr__format__media_original" height="359" src="/files/prep_install_finish_support009.png" typeof="foaf:Image" width="510" /></p>

<p>If possible, face the indicator lights on the node towards the street or ground, so they are visible without climbing onto the roof. This can help with troubleshooting in the future.</p>

<p>If you are using a directional node, point it directly to where it should link to another node.</p>

<p>Plug in the Ethernet connector into the node and close the housing.</p>

<p>Plug in the Power over Ethernet (PoE) adapter and secure it in some way, so it isn't hanging by the power plug. Zip-ties or a wall-mounted enclosure may help with this.</p>

<p>4. Run the Ethernet cable between the wireless node and the Power over Ethernet adapter.</p>

<p>Follow the tips in the "Learn Rooftop Basics" module for how to run the Ethernet cable, and how to secure it to the mast, walls and on roof surfaces.</p>

<p>Make sure the Ethernet cable is secured in such a way that the cable cannot be stepped on, and will not whip around in the wind during a storm.</p>

<p>5. Install the RJ45 connectors on the Ethernet cable ends. Each end should be wired identically, using the proper color code for the wire order (known as T568B). Then plug the cable into the Node and PoE adapter, and you are finished with the installation steps</p>
</section>

<section id="clean-up">
<h3>Clean up, Testing and Post-Installation</h3>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__348 img__view_mode__media_original attr__format__media_original" height="428" src="/files/prep_install_finish_support010.png" typeof="foaf:Image" width="510" /></p>

<p>No installation is finished unless you leave the site looking better than when you arrived. Never leave a mess! Make sure you have not left any unsealed holes in the building exterior where water may enter.</p>

<h4>1. CLEAN UP THE ROOFTOP AND POE LOCATION.</h4>

<p>Cut off any loose or extending ends from zip-ties.</p>

<p>Clean up any wire or cable pieces.</p>

<p>Ensure service loops in the cable are secured in some way.</p>

<p>Sweep away mortar dust / wood dust if you did any drilling.</p>

<h4>2. CHECK CONNECTIVITY TO THE WIRELESS NODE.</h4>

<p>After a couple of minutes, associate with the Access Point (AP) on your phone or a laptop. Confirm that you can connect.</p>

<p>Bring up the wireless node's Administration page.</p>

<p>Navigate to the OLSR status page that shows you neighbor nodes on the mesh, if there are any. Confirm that this node is connected to others.</p>

<p>If there is an Internet Gateway on your network, check that you can get out to the Internet.</p>

<h4>3. RECORD ANY NECESSARY INFORMATION ABOUT THE INSTALLATION IN YOUR NETWORK'S DOCUMENTATION.</h4>

<p>For example, in addition to the node name, MAC address, and IP address, make a note of the location and what worked and did not work, as well as any follow-up or next steps.</p>
</section>

<section id="definitions">
<h3>Definitions</h3>

<dl>
	<dt>MAC Address</dt>
	<dd>a unique combination of numbers and letters that identifies a specific device.</dd>
	<dt>IP Address</dt>
	<dd>A unique string of numbers separated by periods that identifies each device attached to a network.</dd>
	<dt>Line of Sight</dt>
	<dd>An unobstructed path for wireless signals to travel between buildings or devices.</dd>
</dl>
</section>

<section class="related-information" id="related-information">
<h2>Related Information</h2>

<h3>MODULES</h3>

<p>Other modules referenced in this one:</p>

<p><a href="/docs/cck/installing-configuring/install-ubiquity-router">Install on a Ubiquiti Router</a></p>

<p><a href="#">Determine Installation Needs</a> (coming soon)</p>

<p><a href="/docs/cck/building-mounting/learn-rooftop-basics">Learn Rooftop Basics</a></p>

<p><a class="module">"Learn about Rooftop Mounts"</a></p>
</section>

<section class="external-resources" id="external-resources">
<h2>External Resources</h2>

<p>Consult the Commotion Wireless website commotionwireless.net for more information or documentation on installing the software on your devices.</p>
</section>
 
