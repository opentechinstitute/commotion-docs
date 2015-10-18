---
layout: blog
title: Commotion Router v1.1 "Grumpy Cat" Released!
tags: [release]
created: 2014-10-15
changed: 2014-10-15
teaser_image: commotion_logo_100x100.png
post_author: Josh King
lang: en
---
We are very pleased to announce the [v1.1 release for our Commotion Router firmware!](/download/routers) This release finalizes many bugfixes and stability enhancements in our stable v1.x "Grumpy Cat" branch.<!--more-->

### Changes since v1.1rc2:
* Fixed a memory leak in the Commotion client API.
* Improved handling of bridge interfaces.
* Numerous fixes to input validation in the web interface.
* Upgrade to OLSRd v0.6.6.
* More reliable handling of app announcements.
* Updated user documentation.
* Official support for TP-Link WDR3600, TP-Link WDR4300, and Mikrotik RB411AH

### Components
Commotion Router v1.1 is built on [OpenWRT Attitude Adjustment trunk](http://openwrt.org), [OLSRd v0.6.6](http://olsr.org), [libserval](http://servalproject.org), and other software. It also includes the Commotion-specific components listed below (with links to their release notes):

* [commotiond v0.2.4](https://github.com/opentechinstitute/commotiond/releases/tag/0.2.4)
* [commotion-service-manager v0.4.1](https://github.com/opentechinstitute/commotion-service-manager/releases/tag/0.4.1)
* [luci-commotion v1.1.4](https://github.com/opentechinstitute/luci-commotion/releases/tag/1.1.4)
* [luci-i18n-commotion v0.2.3](https://github.com/opentechinstitute/luci-i18n-commotion/releases/tag/0.2.3)
* [olsrd-dnssd v0.5](https://github.com/opentechinstitute/olsrd/releases/tag/commotion-0.5)
* [olsrd-mdp v0.5](https://github.com/opentechinstitute/olsrd/releases/tag/commotion-0.5)

### Contributors
A huge thank you to the development team, our implementors, and our community that contributed to the v1.1 release series. Just a few of the people to recognize:

* [Andrew Reynolds](https://github.com/areynold)
* [Andy Gunn](https://github.com/andygunn)
* [Ben West](https://github.com/westbywest)
* [Chris Ritzo](https://github.com/critzo)
* [Dan Staples](https://github.com/dismantl)
* [Georgia Bullen](https://github.com/georgiamoon)
* [Grady Johnson](https://github.com/gradyoti)
* [Griffin Boyce](https://github.com/glamrock)
* [Jordan McCarthy](https://github.com/technosopher)
* [Nat Meysenburg](https://github.com/natmey)
* Ryan Gerety
* [Seamus Tuohy](https://github.com/elationfoundation)
* [Will Hawkins](https://github.com/hawkinswnaf)
* Our [Code for Progress](http://codeforprogress.org) fellows.
* Our [GNOME OPW](https://wiki.gnome.org/OutreachProgramForWomen) interns.
* All of our other contributors, community members, and users of our software.

This release is backwards-compatible with v1.1rc2, and we encourage all our users to upgrade. You can find images available for download on [our downloads page](/download/routers). For more information about fixes and improvements since v1.0, please see the release notes for [v1.1rc1]({% post_url 2014-04-11-commotion-router-1.1rc1-release-notes %}) and [v1.1rc2]({% post_url 2014-06-13-commotion-router-1.1rc2-release-notes %}). Source code for the project is available via [Github](https://github.com/opentechinstitute).

