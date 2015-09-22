---
layout: blog
title: MeshTether test release
tags: []
created: 2012-08-23
changed: 2013-07-26
post_author: Hans-Christoph Steiner
lang: en
---
  Commotion MeshTether is an Android app that aims to make it possible to connect to OLSR meshes with a single click of a button. It comes configured for the Commotion mesh by default, but can be entirely configured, and can have multiple mesh &quot;profiles&quot; to choose from.
There are two information tabs: Links and Info. Links shows all of the first-hop links and Info shows the entire wifi config and olsrd.conf settings. Additionally, you can share/email debug information from the app&#39;s menu.
Its working pretty well on the Nexus One I&#39;m using for testing. I&#39;ve also tried the HTC Wildfire, Motorola Droid, and HTC myTouch 3G.
The mesh profiles are implemented like this:
<ul><li>(default) uses the wifi/ip settings from the preferences and the olsrd.conf that is included in the app</li><li>the rest are scanned from the file system in two places:<ul><li>in the app&#39;s app_bin/ folder</li><li>/mnt/sdcard/MeshTether (i.e. the MeshTether folder on the SD card)</li></ul></li><li>the scanner looks in those folders for *.properties files and takes the filename as the profile name (i.e. myprofile.properties will be linked to the &quot;myprofile&quot; item in the profiles menu)</li><li>if there is also a myprofile.conf next to the myprofile.properties then it will use that as the olsrd.conf. otherwise, it&#39;ll use the included olsrd.conf</li><li>the properties options are:<br />ssid=commotionwireless.net<br />bssid=02:CA:FF:EE:BA:BE<br />channel=5<br />ip=172.29.0.0<br />ipgenerate=true<br />netmask=255.255.0.0<br />dns=8.8.8.8</li><li>all are required, except &#39;ipgenerate&#39;, which marks the &#39;ip&#39; as the root for the IP generation algorithm. If &#39;ipgenerate&#39; is unset or not &#39;true&#39;, then the &#39;ip&#39; is used as is.</li></ul>Here&#39;s a test apk:
<a href="https://guardianproject.info/builds/CommotionMeshTether/2012-08-22/" target="_blank">https://guardianproject.info/builds/CommotionMeshTether/2012-08-22/</a><br />md5: 176008560f00d8cef65f0e3e781884e1<br />sha1: b9151fb635185880007411fd49e8ab5b254ad750
Give it a whirl and let us know how it works for you!
 
