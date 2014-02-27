---
layout: default
title: Commotion-Router Developer Resources
site_section: developers
categories: 
created: 2014-02-26
changed: 2014-02-26
post_author: areynold
lang: en
---

<h2>Overview</h2>
<p>Commotion-Router is a highly customized version of the <a href="https://openwrt.org/">OpenWRT</a> embedded Linux distribution. The main project repository (commotion-router) contains only the scripts and default files needed to download OpenWRT and add Commotion's packages to the OpenWRT build system. Those Commotion packages are defined in the packages directory of the <a href="https://github.com/opentechinstitute/commotion-feed.git">Commotion Feed repo</a>. Source code for individual Commotion-Router packages can be found in the repositories (PKG_SOURCE_URL) and branches (PKG_VERSION) specified in their respective Commotion Feed Makefiles.</p>

<p>By default, Commotion-Router is configured to build images for Ubiquiti devices using the master branch of each project repo. New development takes place in feature branches, which are merged to master after function testing.</p> 

<p>Commotion-Router can theoretically be built for any <a href="http://wiki.openwrt.org/toh/start">OpenWRT-compatible device</a> with sufficient flash storage to install the 5.4MB Commotion image. However, at present, devices using the ar7xxx/ar9xxx have the best wireless driver compatibility.</p>

<h2>Build/Install</h2>
<p>See the <a 
href="https://github.com/opentechinstitute/commotion-router/blob/master/README.
md#build--install">Commotion Router Readme</a> on GitHub.</p>

