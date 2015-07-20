---
layout: default
title: Developer Resources
site_section: developers
categories: 
created: 2013-06-28
changed: 2014-02-27
post_author: areynold
lang: en
---
If you are interested in helping develop the Commotion Wireless software, or want to create your own software images for specific routers or other devices, please see the sections below for the platform you are interest in.

<h2>Platforms</h2>

<p>Commotion runs on multiple software and hardware platforms: Some wireless routers, smart phones, and desktops and laptops. Software development on each platform moves at a different pace, but we are working towards unifying the code across all of the platforms. Where possible, a common set of tools are used to develop Commotion, no matter the platform. However, there are certain platforms where unique tools are required.</p>

<ul>
	<li><a href="commotion-router/">Commotion-Router development guide</a></li>
	<li><a href="commotion-android/">Commotion-Android app development guide</a></li>
	<li><a href="https://wiki.commotionwireless.net/doku.php?id=commotion_architecture:commotion_client_architecture">Linux app development guide</a></li>
	<li><a href="https://wiki.commotionwireless.net/doku.php?id=commotion_architecture:commotion_client_architecture">Windows app development guide</a></li>
	<li><a href="commotion-mac/">Mac OS X and iOS app development guide</a></li>
<!-- 	<li><a href="https://wiki.commotionwireless.net/doku.php?id=general_openbts_notes">Open GSM development guide</a></li> -->
</ul>

<h2>Architectures</h2>

<p>All Commotion platforms share a common core: a shared network medium (usually ad-hoc Wifi, known as <a href="http://en.wikipedia.org/wiki/Independent_Basic_Service_Set">IBSS</a>) and an IP routing protocol (<a href="http://www.olsr.org">OLSRd</a>). Read more about the <a href="https://wiki.commotionwireless.net/doku.php?id=commotion_architecture:start">Commotion architecture</a> and how it varies across platforms on the Developer Wiki.</p>

<h2>Code</h2>

<p>Commotion is written in a combination of C, Lua, Javascript, Python, Java, shell, Objective-C, PHP. All of our source code is hosted on <a href="http://github.org/opentechinstitute">Github</a>. To see the relationship between code repositories and the Commotion architecture, read the architecture documents above.</p>

<p>See the <a href="https://wiki.commotionwireless.net/doku.php/development_resources/github_workflow">GitHub Workflow</a> page on the <a href="https://wiki.commotionwireless.net">Commotion Wiki</a> for information on the Commotion team's GitHub workflow.</p>

<h2>Debugging Tools</h2>

<p>Commotion developers rely on a combination of tools, experience, and intuition to debug. We use gdb, ddms and unit testing. Read more about our <a href="https://wiki.commotionwireless.net/doku.php/development_resources/testing/testing_procedures_and_methodologies">testing procedures and methodologies</a> and procedures for <a href="https://wiki.commotionwireless.net/doku.php/development_resources/testing/lab_environment_testing">lab testing</a> on the Developer Wiki.</p>

<p>Read more about <a href="https://wiki.commotionwireless.net/doku.php/development_resources/router/debugging_resources">common debugging procedures</a> we use on the Developer Wiki. To report bugs and submit fixes, use our <a href="https://github.com/opentechinstitute">issue tracker</a>.</p>
 
