---
layout: default
title: Download Commotion for Desktop/Laptop Computers
categories: [{categories}]
created: 2013-07-06
changed: 2013-12-31
post_author: critzo
lang: en
---
  <h2>Linux</h2>

<p>Commotion Linux is an application bundle currently packaged for Debian, Ubuntu and other Debian based distros. Development of Commotion Linux is ongoing, but it is now near DR2 feature parity with Commotion OpenWRT.</p>

<p>We expect release of Commotion Linux v1.0 in early 2014, with an easier PPA-based installation process.</p>

<h3>Features</h3>

<ul>
	<li>Encrypted backhaul</li>
	<li>Service advertisement</li>
	<li>Network-manager and "fallback" connection paths.</li>
	<li>Auto-generation and retainment of IBSS cell parameters and IP addresses</li>
	<li>Extensive logging, dumped to various files in /tmp</li>
	<li>Various bugfixes and usability enhancements</li>
	<li>Tested, confirmed working with the following distros:
	<ul>
		<li>Ubuntu 12.04 or greater&nbsp;</li>
	</ul>
	</li>
</ul>

<p>A more extensive readme can be found in the <a href="http://downloads.commotionwireless.net/linux/commotion-linux-py_0.2-1_all.deb">commotion-linux-py.deb</a> package, which can be downloaded from<a href="https://downloads.commotionwireless.net/linux"> https://downloads.commotionwireless.net/linux</a></p>

<h3>Installation</h3>

<p>Currently you must install the Commotion Linux client packages with <em>dpkg</em>, and resolve dependencies that may not be installed on your system. We will soon be publishing Commotion Linux in a PPA, so installation of Commotion Linux can be down through your system's package manager.</p>

<ul>
	<li>Download all the packages available at <a href="https://downloads.commotionwireless.net/linux">https://downloads.commotionwireless.net/linux</a></li>
	<li>Install them with:</li>
</ul>

<pre>
cd $DOWNLOAD_DIRECTORY
sudo dpkg -i *.deb</pre>

<ul>
	<li>You will almost certainly see dependency errors during this process resolve them with:</li>
</ul>

<pre>
sudo apt-get install -f sudo dpkg -i *.debi</pre>

<h2>Mac</h2>

<p>Commotion MeshBook is an open-source OSX utility app that allows Mac computer to create and connect to mesh networks and meshed devices. A basic networking client and profile manager is available for OS X versions 10.7 and 10.8. Commotion MeshBook is currently in development and is unsupported.</p>

<p>Go to our <a href="https://github.com/opentechinstitute/commotion-meshbook" target="_blank">Github Project page</a> if you are interested in building, testing or contributing to the Commotion MeshBook app.<br />
<em>(external link: OTI Github Project page)</em></p>

<h2>Windows</h2>

<p>The Commotion client for Windows operating systems is currently in development and is unsupported. You can follow development and find instructions on compiling the Commotion Windows client on our <a href="https://github.com/opentechinstitute/commotion-winmesh">Github Project, commotion-winmesh</a>.</p>
 <div class="tags">Tags: {{ page.categories }}</div>