---
layout: blog
title: New Commotion Release (DR1) Ready for Testing
categories: {categories}
created: 2013-03-13
changed: 2013-07-26
post_author: OTI
lang: en
---
 <p>Commotion's first developer release (DR1) is now available for testing. This version replaces our September 2012 pre-release (PR3) and adds several new features. Though Commotion developers tested each component feature, we will begin extensive pre-release testing of the entire DR1 suite in the coming weeks. We hope you will join us in testing the new components.</p>

<p>Pre-built Commotion packages for Ubiquiti routers and Android devices can be found at <a href="https://commotionwireless.net/download">https://commotionwireless.net/download</a>, with DR1 listed under Nightly Builds and PR3 listed as Stable. The download page also provides links to the Commotion source code for those who wish to build their own packages. We have pre-built images for testing on Ubiquiti wireless hardware. The source code includes instructions for building Commotion’s test release on other hardware for those that wish to test on their own devices.</p>

<p>The DR1 release brings a complete overhaul to the Commotion system while still ensuring compatibility with PR3 release Commotion nodes. Forward-facing features include a new theme, easy "quickstart" node configuration, application announcement and discovery, and a one-click troubleshooting tool. Behind the scenes, DR1 contains a core Commotion daemon and new cryptographic system.</p>

<p>The quickstart tool provides an easy interface for node configuration. The Commotion daemon provides a common mesh network management interface through an embedded library, and forms the core of future Commotion platform development. Commotion's new application suite uses mDNS to announce local applications across the network. Users can find local applications using the router’s web-based application portal. Node owners can easily manage and customize application portals for better community application support. The application portal integrates the <a href="http://servalproject.org">Serval Project's</a> key management daemon, which provides transparent message encryption and authentication. Finally, the debugging helper creates custom, downloadable documents for offline debugging by network administrators.</p>

<p>Each of these tools still requires thorough testing to ensure they are both stable and well documented. If you are an interested user, developer, hacker, or are just plain interested, we would love to hear your feedback. Following initial internal testing, DR1 will undergo lab testing on an eight-node physical test environment. Then we will install on the Open Technology Institute’s (OTI's) 18-node testbed community network. Once the software is deemed stable, we will deploy it on an active six-node community wireless network for user testing. </p>

<p>We will update the documentation to incorporate user feedback once testing is completed. After the build has been thoroughly tested and DR1 has become stable, we will update the warning label on the downloads page to reflect the capabilities and limitations of this release. We will then bring the other Commotion platforms up to feature parity with the DR1 Commotion OpenWRT release.</p>


