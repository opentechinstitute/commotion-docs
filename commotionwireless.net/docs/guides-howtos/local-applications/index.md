---
layout: default
title: Local Applications in Commotion
site_section: docs
sub_section: [guides]
categories: 
created: 2014-10-03
changed: 2014-10-03
post_author: Dan Staples
lang: en
---

What is a local application?
============================
Applications are a great way to provide tools that address community-specific needs. An application is a program or piece of software designed and written to fulfill a particular purpose, such as a word processor, image editor, navigation system, or messaging application.

Applications can come in many forms. Sometimes applications are installed on a device, such as a smartphone app or a desktop program. Examples of this would be a calendar app on your Android phone, or a solitaire card game on your computer. Many times, however, applications are accessed in a web browser instead of being installed. An example of this would be Etherpad, a collaborative document editor ([https://pad.riseup.net/](https://pad.riseup.net/)). Local networks, like Commotion, make it possible to provide applications that are available only when you are connected to the local network.

Network applications
--------------------
Many of the applications we use today are “network applications”, which get and send information on behalf of the application to another computer on a network. For example, 
if you check your email using a web browser, that “webmail” application is a network application since it retrieves information about the emails in your inbox from another computer. That computer is called a server, and is responsible for "serving" information to your personal device or computer. A web server is simply a server that provides information needed to display a website, while an email server is a server that sends and receives email information. A network application that requests information from a server is also referred to as a “client”.

<img src="/files/CCK_Networking_Basics_Client_server_diagram.png" class="img-responsive" alt="Application server and client model">

Network applications communicate with a server, but that server does not have to be physically connected to the Internet. Sometimes the server is just connected to a local network, such as a mesh network. Running applications on a local server within your network—such as on a spare computer—allows you and your community to have tools and services just for you. Many applications do not need access to the Internet to work, which means that the applications running on a local server would be useable whether your network has Internet access or not!

<img title="Using an application on a local server" src="/files/GuidesHowtos_LocalApps_local.png" class="img-responsive" />
*Using an application on a local server*

<img title="Using an application on the internet" src="/files/GuidesHowtos_LocalApps_internet.png" class="img-responsive" />
*Using an application on the internet*

<img title="Traffic for internet applications can traverse unnecessarily large geographic distances" src="/files/GuidesHowtos_LocalApps_geo.png" class="img-responsive" />
*Traffic for internet applications can traverse unnecessarily large geographic distances*

In the same way that the mesh network allows multiple people to share network resources, running a local application server makes it possible to share information without going out to the Internet—keeping local communications local and more efficient.

Using local applications on your network
========================================
You can browse the local applications that are available on your network using the application portal. To access the application portal:

1. Connect to the access point of your Commotion node.
2. In your web browser, go to `http://thisnode/`
3. Click on the **“Applications”** icon.

<img src="/files/GuidesHowtos_LocalApps_AppsPortal.png" class="img-responsive" alt="Commotion Local Applications Portal">

Each application listed in the portal provides a name, description, icon, and an automatically generated plaid swatch representing the cryptographic identity of that application. This plaid swatch should be the same every time you visit the application portal; if it has changed, you might want to notify the administrator of the application.

<div class="sidebar">
When you install Commotion on a router, that router generates two small bits of information unique to that node, called <strong>cryptographic keys</strong>. Nodes can then use these keys to generate a <strong>“digital signature”</strong> that can be appended to the end of messages they send. These digital signatures look like long strings of numbers and letters, but there is actually important information contained in these signatures. Because a node’s cryptographic keys have special mathematical properties, the signatures they generate can actually guarantee that the message the signature is attached to was created by no one other than the holder of those cryptographic keys. This is a very useful way to prove that messages sent by a node were not forged or tampered with in transit.
<br /><br />
Every application announcement sent on the mesh actually has a digital signature attached to it, which allows users to make sure the application announcement has authentic information provided by the administrator of that application.
<br /><br />
Users can verify the authenticity of application announcements by taking note of the unique pattern next to each announcement. These patterns are a visual representation of the unique cryptographic keys used to sign the application announcement. If the next time you visit the application portal and see that your favorite application has a different patterns, you can be sure that either the administrator of the application changed its cryptographic keys, or someone else is trying to impersonate the application.
</div>

Welcome Page
------------
You can also access the apps portal through the welcome page, if it is turned on. When you connect to the access point of a node on the mesh network which has the welcome page turned on, you can open your web browser and go to any non-HTTPS website (for example “[http://www.democracynow.org](http://www.democracynow.org)”). You will then be automatically redirected to the splash page:

<img src="/files/GuidesHowtos_LocalApps_WelcomePage.png" class="img-responsive" alt="Commotion Welcome Page">

By clicking on the **“Local Applications”** icon, you will be redirected to the apps portal.

Adding applications to your network
===================================
There are two steps to put a local application on your network. The first is installing that application on a computer, which will be connected somewhere on the network. The second step is to add the information for the local application to the Commotion node it is connected to. This announces the presence of that application to the rest of the network, and allows users to find it.

Installing and configuring local applications
---------------------------------------------
The process for installing and configuring a local application will be different for each application. Check the documentation for instructions for the apps you want to set up.

It is advisable to use a dedicated computer or server for hosting the application(s), and connecting that computer to the mesh network as a client, either via Ethernet or a nearby node’s access point. This should give the server an IP address in the range of `10.x.x.x`. Linux is generally the recommended operating system for an application server since it is free, open source, and can run easily on older computers. Once you have your application server connected to the mesh network and setup with the applications you want to run, make a note of the server’s `10.x.x.x` IP address and any URLs for the applications, as you will need them to announce your apps to the rest of the network.

Announcing local applications to the network
--------------------------------------------
Once you have an application server setup and want to let the rest of the network start using it, you’ll need to announce the applications to the network. To do that, connect your computer to the access point of the node connected to the application server, then open your web browser and go to `http://thisnode`.

1. Click on the Administration button at the bottom of the page, and log in.
2. Go to **Applications->Add**.
3. Fill out the name and description of the application you would like to announce to the network.
4. In the “IP Address or URL of Service” field, you’ll need to enter the IP address or URL where others on the mesh network can reach the application. Make sure this IP address/URL is reachable from other nodes!
5. Optionally, you can check one or more categories describing your app.
6. You can pick from one of the default application icons, or enter a URL for a custom icon to use (again, make sure the URL is reachable from other nodes on the mesh).
7. Finally, click **“Submit”**.

<img src="/files/GuidesHowtos_LocalApps_AddApp1.png" class="img-responsive" alt="Adding a local application">

<img src="/files/GuidesHowtos_LocalApps_AddApp2.png" class="img-responsive" alt="Adding a local application">

The application is now registered with the local node’s application portal, and the announcement should begin spreading automatically to other nodes on the network. Depending on link quality between nodes on your network, the announcement may take some time to spread. Once the announcement has spread to other nodes, clients on those nodes will see your application in the apps portal and be able to connect to the app.

As a node administrator, you can also edit or delete applications that are announced from your node by going to **Applications->List**. You will not be able to edit or delete applications that are announced from other nodes, however you can mark applications as “banned” so they will not show up on the applications portal on your particular node.

<img src="/files/GuidesHowtos_LocalApps_AdminPortal.png" class="img-responsive" alt="Commotion administrator application portal">

Local application list
======================
Below you will find some suggestions for local applications you can try installing on your network. The list is by no means exhaustive, but it should help you get an idea of what’s available.

* Social networks:
    * Buddycloud: [http://buddycloud.com/](http://buddycloud.com/)
    * diaspora*: [https://diasporafoundation.org/](https://diasporafoundation.org/ ) 
* File storage and sync:
    * OwnCloud: [http://owncloud.org/](http://owncloud.org/)
    * Pydio: [https://pyd.io/](https://pyd.io/)
* Collaboration:
    * Etherpad: [http://etherpad.org/](http://etherpad.org/)
    * Ethersheet: [https://ethersheet.org/](https://ethersheet.org/)
    * EtherCalc: [https://ethercalc.net/](https://ethercalc.net/)
    * MediaGrid: [https://mediagrid.disman.tl](https://mediagrid.disman.tl)
    * MoinMoin: [http://moinmo.in/](http://moinmo.in/)
    * Kolab: [https://kolab.org/](https://kolab.org/)
    * dudle: [https://dudle.inf.tu-dresden.de/](https://dudle.inf.tu-dresden.de/)
* Publishing:
    * Wordpress: [http://wordpress.org/](http://wordpress.org/)
    * Ghost: [https://ghost.org/about/](https://ghost.org/about/)
* Multimedia:
    * MediaGoblin: [http://mediagoblin.org/](http://mediagoblin.org/)
    * icecast: [http://icecast.org/](http://icecast.org/)
    * GNU FM: [https://www.gnu.org/software/gnufm/](https://www.gnu.org/software/gnufm/)
    * img.bi: [https://img.bi/](https://img.bi/)
    * MediaCrush: [https://mediacru.sh/](https://mediacru.sh/)
    * Piwigo: [http://piwigo.org/](http://piwigo.org/)
    * Zenphoto: [http://www.zenphoto.org/](http://www.zenphoto.org/)
* Miscellaneous:
    * Tidepools: [http://tidepools.co/](http://tidepools.co/)
    * kiwix: [http://www.kiwix.org/wiki/Main_Page](http://www.kiwix.org/wiki/Main_Page)
    * Coder: [https://github.com/googlecreativelab/coder/](https://github.com/googlecreativelab/coder/)
* Other: [https://prism-break.org/en/categories/servers/](https://prism-break.org/en/categories/servers/)

You can also check out what applications other communities have used on their [Commotion networks](https://commotionwireless.net/about/where-its-used/):

* Civic technologists and community members in [Sayada, Tunisia](https://commotionwireless.net/files/posts/041814-Case-Study-Sayada.pdf) installed a local [mirror of Wikipedia](http://www.kiwix.org/wiki/Main_Page) in both French and Arabic, [Open Street Maps](http://www.openstreetmap.org/) of Tunisia, a collection of 2,500 free ebooks, an [etherpad](http://etherpad.org/) for collaborative document editing, and a [MediaGrid](https://mediagrid.disman.tl) application for file sharing and chat.
* A network set up in [rural Somaliland](https://commotionwireless.net/blog/2013/12/12/building-mesh-network-rural-somaliland/) installed an instance of ownCloud for students and teachers to share files.
* In Red Hook, New York, community members worked with a web developer to [determine local needs](https://commotionwireless.net/blog/2013/02/02/case-study-red-hook-initiative-wifi-tidepools/) and gather design ideas for [Tidepools](http://tidepools.co/), an open-source customizable local mapping platform for local communication, placemaking, and organizing around events, issues, and community assets. They also developed a [bus tracking application](http://rhiwifi.co/bus), a [stop-and-frisk survey](http://rhiwifi.co/stopfrisk), and an online radio station.
* At the last two [Allied Media Conferences](https://commotionwireless.net/blog/2014/08/06/amc-magicnet-2014/), the Detroit [Digital Stewards](https://commotionwireless.net/blog/2014/04/18/digital-stewardship-and-your-community/) worked with OTI to set up a mesh network running MediaGrid, Etherpad, and streaming radio for conference participants.