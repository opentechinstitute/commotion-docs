---
layout: blog
title: Commotion Router v1 Release Notes
categories: [release]
created: 2013-12-30
changed: 2013-12-31
post_author: Josh King
lang: en
---
  These are the release notes for Commotion Router v1 "Grumpy Cat", **<a href="/download/routers">available for download now</a>**.<!--miniteaser--> This is the first full version of the <a href="http://openwrt.org">OpenWRT</a>-based firmware for the Commotion project, which is intended to make it easy for communities to build their own communications technology and to serve as a platform for the development of novel and secure communication tools.<!--more--> For clarity, the Commotion firmware distribution for wireless routers will now be referred to as Commotion Router, rather than Commotion-OpenWRT or CommotionWRT.
<h3>A Note About Releases</h3>
For version 1, we are changing our versioning scheme, and deprecating all "Preview Release," "Developer Release" style designations. From version 1 forward, we are using whole number versions for each release, analagous to projects such as Firefox and Chrome. So, for instance, this will be release 1, and the next will be release 2, and so on. If critical bugfixes are required, we may put out point releases such as 1.1, 1.2, 2.1, etc. These versions are for each platform; there will be a Commotion Router v1, a Commotion Android v1, and so on. These version numbers will not necessarily be synchronized between platforms. Also, for some platforms, like Commotion Router, we may have release names based on internet memes. Individual software components will continue to be versions according to <a href="http://semver.org">Semantic Versioning</a>.
<h3>New Features</h3>
<ul>
	<li>**New user interface:** We have conducted an extensive usability review that has contributed to a complete overhaul of the Commotion user interface. The result is that our user interfaces are easier to use, more powerful, and more closely integrated with the rest of the software. We plan on revisiting the usability review process on a regular basis in order to keep our interfaces friendly and current.</li>
	<li>**Multi-interface support:** We now support more flexible configurations of devices that include multiple wired and wireless interfaces. This allows us to support more routers, and allows for the deployment of more complex networks.</li>
	<li>**Greater stability, fewer resources:** Work on reducing our processing and storage overhead on embedded platforms has resulted in greater stability and smaller software images.</li>
	<li>**Better Serval mesh support:** The <a href="http://servalproject.org">Serval</a> encrypted overlay mesh is now more closely integrated throughout our software, and provides an API for developers to create truly end-to-end encrypted applications on top of a mesh network. Developer docs and an example messaging application forthcoming.</li>
	<li>**Easier upgrades:** Commotion now supports retaining configuration between upgrades, so that you do not have to reconfigure your device each time. We intend to retain upgrade compatibility as much as possible from this point forward.</li>
</ul>
<h3>Bug Fixes</h3>
Countless fixes and improvements have gone into this release. Most notably, we have moved from our legacy non-standard IP subnets that we retained for compatibility with another project to new private subnets in order to alleviate routing issues when connected to the internet.
<h3>Included Components</h3>
<ul>
	<li><a href="https://github.com/opentechinstitute/commotion-service-manager">commotion-service-manager v0.3</a>: Provides automatic network service discovery</li>
	<li><a href="https://github.com/opentechinstitute/luci-commotion-apps/">luci-commotion-apps v2.0</a>: Web-based local application portal for Commotion-OpenWRT</li>
	<li><a href="https://github.com/opentechinstitute/commotion-dashboard-helper/">commotion-dashboard-helper v0.2</a>: A script for sending analytics information to a dashboard</li>
	<li><a href="https://github.com/opentechinstitute/commotion-debug-helper">commotion-debug-helper v1.0</a>: A LuCI-based reporting tool to simplify the process of router troubleshooting</li>
	<li><a href="https://github.com/opentechinstitute/commotion-lua-helpers">commotion-lua-helpers v1.0</a>: A set of lua helpers and extensions maintained by the Commotion project.</li>
	<li><a href="https://github.com/opentechinstitute/luci-i18n-commotion">luci-i18n-commotion v0.2.1</a>: GUI translation support</li>
	<li><a href="https://github.com/opentechinstitute/luci-commotion-splash">luci-commotion-splash v1.2</a>: A LuCI interface for configuring nodogsplash captive portal</li>
	<li><a href="https://github.com/opentechinstitute/commotiond">commotiond v0.2</a>: An extensible daemon and library bundle that will form Commotion’s core administrative API and simplify the process of porting to new platforms</li>
	<li><a href="https://github.com/opentechinstitute/luci-theme-commotion">luci-theme-commotion v2.0</a>: HIG-compliant Commotion theme for OpenWRT routers</li>
	<li><a href="https://github.com/opentechinstitute/luci-commotion">luci-commotion v1.0</a>: Complete Commotion web interface built on the LuCI framework.</li>
	<li><a href="https://olsr.org">OLSRd v0.6.5.4</a>: Open-source mesh routing daemon implementing the Open Link State Routing protocol.</li>
	<li><a href="https://github.com/opentechinstitute/olsrd/tree/release-0.6.5.4/lib/dnssd">olsrd-dnssd v0.3</a>: Propagates multicast DNS (mDNS) service discovery advertisements (DNSSD) over an OLSR mesh network</li>
	<li><a href="https://github.com/opentechinstitute/olsrd/tree/release-0.6.5.4/lib/mdp">olsrd-mdp v0.3</a>: Plugin for signing OLSR mesh traffic</li>
	<li><a href="https://github.com/opentechinstitute/serval-dna">serval-dna v0.91</a>: Cryptographic libraries and API for secure and delay-tolerant communication</li>
	<li><a href="http://openwrt.org">OpenWRT Linux 12.09.1 "Attitude Adjustment"</a>: Extensible Linux distribution for embedded devices.</li>
	<li><a href="http://luci.subsignal.org">LuCI v0.11</a>: Lua-based model-view-controller web framework for embedded devices.</li>
</ul>
 
