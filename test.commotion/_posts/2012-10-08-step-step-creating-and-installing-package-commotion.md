---
layout: default
title: Step-by-step: creating and installing a package for Commotion
categories: [chat,applications,routers,,messaging]
created: 2012-10-08
changed: 2012-11-21
post_author: The Work Department
lang: en
---
 <div class="meta">
  <span class="author">{{page.created}} - {{ page.post_author }}</span>
</div>
 <p>Here at The Work Department, we&#39;ve been busy cooking up systems to experiment with applications that utilize node-to-node mesh connections and are eager to share them with you. In particular, some of the example applications that we proposed in our <a class="external" href="https://commotionwireless.net/blog/exploring-meshaging" target="_blank">Exploring &quot;Meshaging&quot;</a> post have been taking form. We want to offer you the tools to experiment with what is possible given the unique architecture of a mesh network.</p><p>The Commotion router software is built atop OpenWRT, a Linux distribution designed for routers and other small devices. OpenWRT has a package management system, and Commotion&rsquo;s code is kept in a separate feed and package. A developer can integrate additional features into a Commotion network by writing or porting applications and packaging them for OpenWRT. Below, we explain the process of porting and packaging an application (in this case, a small websockets server, ws-routing, and dependencies).</p><h3>Ingredients</h3><p>You&#39;ll need a few things to follow along:</p><ol><li><strong>A computer! </strong>Assuming you are currently using a computer, this should be easy. Make sure you have some space on your hard drive to download the packages.</li><li><strong>Terminal access and a few common commands.</strong> You&#39;ll need these tools, including <a class="external" href="http://git-scm.com/book/en/Getting-Started-Installing-Git" target="_blank">GIT</a> and <a href="http://www.gnu.org/software/make/manual/make.html#Top" target="_blank">Make</a>, to download and compile the latest code from the repositories.</li><li><strong>Wireless Router(s).</strong> This hardware is necessary to serve your mesh network. You can read more details on the hardware that we use here: <a class="external" href="https://code.commotionwireless.net/projects/commotion-manual/wiki/Installing_Commotion_on_Wireless_Nodes#A-little-background" target="_blank">Installing Commotion on Wireless Nodes</a>.</li><li><strong>Time. </strong>Like a good stew, some of these scripts can take time before they are complete. You might anticipate about one or two hours until you are up and running.</li><li><strong>Friends.</strong> Not required, but collaboratively learning and working together can be an important part of setting up mesh networks.</li></ol><h3>Step-by-step to mesh networking delight</h3><p>Once you have the essentials listed above you can start mixing it all together.</p><p>First, let&#39;s build the packages! You can do this by opening your terminal and entering the commands listed below in order. Anything after a number sign (#) is there to provide additional instruction and shouldn&#39;t be entered into the command line. The setup scripts and make commands can take time to run, so that would be a great time to read more of the <a class="external" href="https://commotionwireless.net/blog" target="_blank">blog</a> or the <a class="external" href="https://commotionwireless.net/wiki/mesh-resources" target="_blank">Mesh Resources wiki</a>.</p>
<pre linenumbers="off">
# Clone the commotion-openwrt repo: 
git clone https://github.com/opentechinstitute/commotion-openwrt.git 
cd commotion-openwrt 
./setup.sh 
cd ..
 # Clone your package repo: 
git clone https://github.com/bnchdrff/commotion-wsrouting-feed.git commotion-examples
 # Run the package setup.sh script: 
cd commotion-examples 
./setup.sh # ignore package feed errors
 # Configure and build: 
cd ../commotion-openwrt/openwrt
 make menuconfig # ignore package feed errors
 # A ncurses GUI will display: 
## Select the commotion-apps submenu
 ## Select ws-routing as * (static) by pressing Y 
## Select exit 
## When prompted, choose to save config 
make V=99 # build, verbosely 
cd bin/ar71xx/
 ls</pre>
<p>And, voilà! You should see a list of files that look something like this: &quot;<strong>openwrt-ar71xx-generic-ubnt-bullet-m-squashfs-factory.bin</strong>&quot;. The file you&#39;ll need to flash your wireless router will vary depending on the router hardware. Using that file, follow the instructions provided for <a class="external" href="https://code.commotionwireless.net/projects/commotion-manual/wiki/Installing_Commotion_on_Wireless_Nodes" target="_blank">Installing Commotion on Wireless Nodes</a> in order flash the router. These <a class="external" href="https://code.commotionwireless.net/projects/commotion-manual/wiki/Detailed_TFTP_Instructions" target="_blank">Detailed TFTP Instructions</a> also include detailed steps to transfer the file to your router with <strong>TFTP.</strong></p><h3>Get a taste of Commotion</h3><p>Well done! You have installed Commotion on a your wireless router. After the router restarts, you can disable your wired network and hop on the &ldquo;commotion_NNNNN_ap&rdquo; network that should become available. Open a web browser and navigate to any website, which should bring you to the Commotion splash page. Last, you can verify that the <strong>ws-routing</strong> package is installed by following these steps:</p><ol><li>Click &quot;<strong>Go to Password configuration...</strong>&quot;</li><li>Click &quot;<strong>Login</strong>&quot; and reset the password if necessary.</li><li>The administration menu should appear at the top. Hover over &quot;<strong>System</strong>&quot; and click &quot;<strong>Software</strong>.&quot; <strong>ws-routing</strong> should be in the list.</li></ol><p>Here&#39;s a virtual pat on the back. Now you&rsquo;ll be ready to install example applications and test them for yourself. In our next post, we&rsquo;ll show you how to install and use the chat application we developed.</p> <div class="tags">Tags: {{ page.categories }}</div>