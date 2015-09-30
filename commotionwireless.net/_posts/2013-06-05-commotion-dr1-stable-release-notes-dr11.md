---
layout: blog
title: Commotion DR1 Stable Release Notes (DR1.1)
categories: [release]
created: 2013-06-05
changed: 2013-07-26
post_author: Andrew Reynolds
lang: en
---
  Developer Release 1.1 is the first stable release of the DR1 series. This release is the beginning of our new stable branch, and represents a significant step forward from our previous stable release.
<h2>What is a Commotion release?</h2>
Commotion release versions represent a target set of features for the entire project. Software packages for individual platforms (Linux, Windows, etc.) may be in different stages of development, and are labeled according to their supported features.
<h2>Platform Availability</h2>
Currently, only the OpenWRT-based router firmware is DR1 compatible. Other platforms are under active development and are being brought up to feature parity. Current platform revisions can be found on the <a href="https://code.commotionwireless.net/projects/commotion/wiki/Official_Version_Feature_Targets">Official Version Feature Targets</a> page. Pre-compiled software images are available on the <a href="https://commotionwireless.net/download">Commotion Download</a> page.
<h2>Features:</h2>
<ul>
	<li>**Easy-to-use setup wizard:** The Commotion Quickstart wizard provides a simple, one-step interface for setting up a Commotion node.</li>
	<li>**Local applications:** The Commotion Apps Portal is an interface for creating and browsing for local network applications.</li>
	<li>**Common platform for managing settings:** The Commotion Daemon provides a common management interface for maintaining the configurations of different community networks.</li>
	<li>**Encryption tools:** Commotion configures industry-standard IBSS-RSN encryption by default, and provides the Serval crypto API to aid developers in creating secure applications.</li>
	<li>**Consistent visual style:** New Commotion releases are all styled in accordance with the Commotion Human Interface Guidelines (http://commotionwireless.net/docs/hig/introduction).</li>
	<li>**Simplified debugging:** A new Commotion Debugging Helper tool makes it easy to retrieve useful troubleshooting information from a node in the event of a network problem.</li>
</ul>
<h2>Fixes</h2>
Innumerable fixes and changes went into this release since <a href="https://code.commotionwireless.net/projects/commotion/wiki/Developer_Pre-Release_%28PR3%29_Feature_Targets">Preview Release 3 (PR3)</a>, the previous stable branch. A complete list can be found on the Commotion project site's <a href="https://code.commotionwireless.net/projects/commotion/issues?set_filter=1&amp;f\[\]=status_id&amp;op\[status_id\]=!&amp;v\[status_id\]\[\]=1&amp;f\[\]=fixed_version_id&amp;op\[fixed_version_id\]=%3D&amp;v\[fixed_version_id\]\[\]=2&amp;f\[\]=&amp;c\[\]=tracker&amp;c\[\]=status&amp;c\[\]=priority&amp;c\[\]=subject&amp;c\[\]=assigned_to&amp;c\[\]=updated_on&amp;group_by=">issue tracker</a>.
<h2>Included Components</h2>
<ul>
	<li><a href="https://github.com/opentechinstitute/avahi-client">avahi-client v0.1</a>: Provides automatic network service discovery</li>
	<li><a href="https://github.com/opentechinstitute/commotion-apps/">commotion-apps v1.1</a>: Web-based local application portal for Commotion-OpenWRT</li>
	<li><a href="https://github.com/opentechinstitute/commotion-bug-info">commotion-debug-helper v0.1</a>: A LuCI-based reporting tool to simplify the process of router troubleshooting</li>
	<li><a href="https://github.com/opentechinstitute/commotion-quick-start">commotion-quick-start v0.2</a>: A one-click tool to simplify router configuration on first boot</li>
	<li><a href="https://github.com/opentechinstitute/commotion-splash">commotion-splash v1.0</a>: A LuCI interface for configuring nodogsplash captive portal</li>
	<li><a href="https://github.com/opentechinstitute/commotiond">commotiond v0.1</a>: An extensible daemon and library bundle that will form Commotion’s core administrative API and simplify the process of porting to new platforms</li>
	<li><a href="https://github.com/opentechinstitute/commotion-openwrt-theme">luci-theme-commotion v1.1</a>: HIG-compliant Commotion theme for OpenWRT routers</li>
	<li><a href="https://github.com/opentechinstitute/luci-commotion">luci-commotion v0.1</a>: Commotion configuration pages for the LuCI web interface</li>
	<li><a href="https://github.com/opentechinstitute/olsrd/tree/release-0.6.5.4/lib/dnssd">olsrd-dnssd v0.1</a>: Propagates multicast DNS (mDNS) service discovery advertisements (DNSSD) over an OLSR mesh network</li>
	<li><a href="https://github.com/opentechinstitute/olsrd/tree/release-0.6.5.4/lib/mdp">olsrd-mdp v0.1</a>: Plugin for signing OLSR mesh traffic</li>
	<li><a href="https://github.com/opentechinstitute/serval-crypto">serval-crypto v2.0</a>: Cryptographic libraries and API for signing mDNS service advertisements</li>
</ul>
 
