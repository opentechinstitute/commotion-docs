---
layout: blog
title: Updating a Commotion package
categories: chat,applications,routers,messaging
created: 2012-11-01
changed: 2012-11-06
post_author: The Work Department
lang: en
---
  In our previous blog post, we walked through the process of creating an OpenWRT package to provide a ws-routing server. We&#39;ve since continued development on this, and would like to share our process for updating the OpenWRT package after making bugfixes. We&#39;d also like to introduce the commotion-chat package that puts the ws-routing server to use.
After we fixed the bug in the ws-routing server code, we needed to update the OpenWRT package to reference the most recent Git revision. Below, you can find a quick guide on how to update an OpenWRT package.
First, you need to update the Git revision. Do this by editing the package&#39;s Makefile and changing a variable:

	cd commotion-examples/ws-routing # get in the package
	vim Makefile # edit the makefile, increment PKG_RELEASE, and update the PKG_REV to the latest commit&#39;s hash
	# e.g.
	#PKG_RELEASE:=2
	#PKG_REV:=7942da7b7ed4afc4c42b28553b0baf3a47060917
	cd ..
	# rerun the setup for this package
	./setup.sh
	cd ../commotion-openwrt/openwrt
	# if you haven&#39;t built the OpenWRT base system yet, you can run &quot;make&quot; to build everything
	make package/ws-routing/install
	cd bin/ar71xx/packages
	python -m SimpleHTTPServer 8080 # start a webserver so your openwrt router can download the new package
	# if you don&#39;t have python installed, you can pursue other means of installing the package :)

After completing the steps above, open your web browser and navigate to **http://&lt;your_ip&gt;:8080/**, substituting your computer&#39;s IP address. Copy this URL for the ws-routing package.
Now, open another browser tab and connect to your OpenWRT router&#39;s administrative interface. Go to &quot;**Administration**,&quot; hover over &quot;**System**,&quot; click &quot;**Software**,&quot; and paste in the URL of the ws-routing package in the &quot;**Download and install package**&quot; form. (**TIP**: If an older version of the package is already installed, you may want to remove it before reinstalling.) Before it installs, you&#39;ll need to click &quot;**OK**.&quot; You&#39;ll see a message that the package was downloaded &amp; upgraded.
 <img alt="" src="/files/update%20commotion%20package.png" />
 <h3>The Fun Part</h3>Now that we&#39;ve updated and installed this mysterious package, let&#39;s put it to use. The commotion-chat package installs some HTML and Javascript that is made available through a new menu route in the LuCI interface. The chat app itself is rough and purely for experimentation and fun &mdash; please don&#39;t use this in a production community wireless environment. Only use it for fun, and experimentation.
Download and install the commotion-chat package alongside your commotion-openwrt tree:

	# if you&#39;re currently in commotion-openwrt/openwrt...
	cd ../../ 
	# clone commotion-chat feed 
	git clone https://github.com/bnchdrff/commotion-chat.git 
	cd commotion-chat 
	./setup.sh 
	cd ../commotion-openwrt/openwrt 
	make menuconfig 
	# select the commotion-chat package under commotion apps for installation 
	# if you haven&#39;t built the OpenWRT base system yet, you can run &quot;make&quot; to build everything 
	make package/commotionchat/install 
	cd bin/ar71xx/packages 
	# start a webserver so your openwrt router can download the new package 
	python -m SimpleHTTPServer 8080 
	# if you don&#39;t have python installed, you can pursue other means of installing the package :)

Then, follow the same workflow described above for the ws-routing package to install commotion-chat on your router.
After installing these packages, you may need to reboot the router. Hover over &quot;**System**,&quot; and click &quot;**Reboot**.&quot; Confirm, wait a few minutes, and then try visiting your router&#39;s splash page. If you installed/updated commotion-ws-routing and commotion-chat successfully, you can now click on the &quot;**Chat**&quot; menu item under &quot;**Applications**&quot; and try out the chat app!
 
