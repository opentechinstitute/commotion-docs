---
layout: blog
title: Commotion DR2 Release Notes
tags: [release]
created: 2013-09-19
changed: 2013-09-19
post_author: Josh King
lang: en
---
  Developer Release 2 is the latest stable release of the Commotion platform. It features a focus on improved features around network management, including initial compatibility with external visualization tools and internationalization support.
<h2>What is a Commotion release?</h2>
Commotion release versions represent a target set of features for the entire project. Software packages for individual platforms (Linux, Windows, etc.) may be in different stages of development, and are labeled according to their supported features.
<h2>Platform Availability</h2>
Currently, only the OpenWRT-based router firmware is DR2 compatible. Other platforms are under active development and are being brought up to feature parity. Current platform revisions can be found on the <a href="https://code.commotionwireless.net/projects/commotion/wiki/Official_Version_Feature_Targets">Official Version Feature Targets</a> page. Pre-compiled software images are available on the <a href="https://commotionwireless.net/download">Commotion Download</a> page.
<h2>New Features</h2>
<ul>
	<li>**Dashboard support: **We've added initial support for Commotion nodes to voluntarily opt-in to reporting basic analytics information to external, web-based dashboards for visualizing the network. The first such dashboard we're supporting is based on the network map for the <a href="http://freifunk.net">Freifunk project.</a></li>
	<li>**Internationalization support:** All web-based Commotion interfaces have had support added for translation into multiple languages, building off of the support included with <a href="http://openwrt.org">OpenWRT's</a> <a href="http://luci.subsignal.org">LuCI</a> platform. We've included a French translation of the interface, and will be continuing to add other translations.</li>
	<li>**Secure administration interface: **Previously, the web-based admin interface for the nodes was only available via an unencrypted connection. We've now integrated a tutorial into the Quickstart process that introduces users to setting up and manually verifying their SSL connection to the node after setup.</li>
</ul>
<h2>Fixes</h2>
As always, a large number of fixes and changes went into this release since DR1.1, the previous stable branch. We're currently in the process of overhauling our issue tracking system to use Github, so expect an updated list of fixes soon.
<h2>Upcoming changes</h2>
We were planning on rolling out new default IP addressing ranges and dynamic BSSID selection with this release, but we decided it needed more testing and thought given to a smooth rollout. Look for that in a point release coming soon! Also, within the next couple of weeks we'll be rolling out new testing releases of our Linux and Android versions compatible with DR1 and above.
<h2>Included Components</h2>
<ul>
	<li><a href="https://github.com/opentechinstitute/avahi-client">avahi-client v0.1</a>: Provides automatic network service discovery</li>
	<li><a href="https://github.com/opentechinstitute/commotion-apps/">commotion-apps v1.2</a>: Web-based local application portal for Commotion-OpenWRT</li>
	<li><a href="https://github.com/opentechinstitute/commotion-apps/">commotion-bigboard-send v0.1.1</a>: A script for sending analytics information to a dashboard</li>
	<li><a href="https://github.com/opentechinstitute/commotion-bug-info">commotion-debug-helper v0.1</a>: A LuCI-based reporting tool to simplify the process of router troubleshooting</li>
	<li><a href="https://github.com/opentechinstitute/commotion-luci-i18n">commotion-luci-i18n v0.1</a>: GUI translation support</li>
	<li><a href="https://github.com/opentechinstitute/commotion-quick-start">commotion-quick-start v0.2.1</a>: A one-click tool to simplify router configuration on first boot</li>
	<li><a href="https://github.com/opentechinstitute/commotion-splash">commotion-splash v1.1</a>: A LuCI interface for configuring nodogsplash captive portal</li>
	<li><a href="https://github.com/opentechinstitute/commotiond">commotiond v0.1.1</a>: An extensible daemon and library bundle that will form Commotion’s core administrative API and simplify the process of porting to new platforms</li>
	<li><a href="https://github.com/opentechinstitute/commotion-openwrt-theme">luci-theme-commotion v1.2</a>: HIG-compliant Commotion theme for OpenWRT routers</li>
	<li><a href="https://github.com/opentechinstitute/luci-commotion">luci-commotion v0.1.1</a>: Commotion configuration pages for the LuCI web interface</li>
	<li><a href="https://github.com/opentechinstitute/luci-commotion-dash">luci-commotion-dash v0.1</a>: Configuration for dashboard reporting.</li>
	<li><a href="https://github.com/opentechinstitute/olsrd/tree/release-0.6.5.4/lib/dnssd">olsrd-dnssd v0.2</a>: Propagates multicast DNS (mDNS) service discovery advertisements (DNSSD) over an OLSR mesh network</li>
	<li><a href="https://github.com/opentechinstitute/olsrd/tree/release-0.6.5.4/lib/mdp">olsrd-mdp v0.2</a>: Plugin for signing OLSR mesh traffic</li>
	<li><a href="https://github.com/opentechinstitute/serval-crypto">serval-crypto v2.1</a>: Cryptographic libraries and API for signing mDNS service advertisements</li>
</ul>
 
