---
layout: default
title: Developer Resources
site_section: developers
categories: 
created: 2013-06-28
changed: 2013-12-31
post_author: critzo
lang: en
---
  <h2>Platforms</h2>

<p>Commotion runs on multiple software and hardware platforms: Embedded routers, smart phones, desktops and laptops, and open source GSM basestations. Development on each of these platforms occurs in parallel. Where possible, a common set of tools are used to develop Commotion, no matter the platform. However, there are certain platforms where unique tools are required.</p>

<ul>
	<li><a href="#">Embedded router developer tools</a></li>
	<li><a href="#">Android developer tools</a></li>
	<li>Desktop/laptop developer tools: <a href="https://code.commotionwireless.net/projects/commotion/wiki/Linux_client_dev_notes">Linux</a> - <a href="https://code.commotionwireless.net/projects/commotion/wiki/MacClient_">Mac</a></li>
	<li><a href="https://wiki.commotionwireless.net/doku.php?id=general_openbts_notes">GSM developer tools</a></li>
</ul>

<h2>Architectures</h2>

<p>All Commotion platforms share a common core: a shared network medium (usually ad-hoc Wifi, known as <a href="http://en.wikipedia.org/wiki/Independent_Basic_Service_Set">IBSS</a>) and an IP routing protocol (<a href="http://www.olsr.org">OLSRd</a>). Read more about the <a href="https://wiki.commotionwireless.net/doku.php?id=commotion_architecture">Commotion architecture</a> and how it varies across platforms on the Developer Wiki.</p>

<h2>Code</h2>

<p>Commotion is written in a combination of C, Lua, Javascript, Python, Java, shell, Objective-C, PHP. All of our source code is hosted on <a href="http://github.org/opentechinstitute">Github</a>. To see the relationship between code repositories and the Commotion architecture, read the architecture documents above.</p>

<h2>Debugging Tools</h2>

<p>Commotion developers rely on a combination of tools and intuition to debug. We use gdb, ddms and unit testing. Read more about our <a href="https://wiki.commotionwireless.net/doku.php?id=testing_procedures_and_methodologies">testing procedures and methodologies</a> and procedures for <a href="https://wiki.commotionwireless.net/doku.php?id=lab_environment_testing">lab testing</a> on the Developer Wiki.</p>

<p>Read more about <a href="https://wiki.commotionwireless.net/doku.php?id=debugging_resources">common debugging procedures</a> we use on the Developer Wiki. To report bugs and submit fixes, use our <a href="https://github.com/opentechinstitute">issue tracker</a>.</p>
 
