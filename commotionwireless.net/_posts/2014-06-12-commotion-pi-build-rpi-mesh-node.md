---
layout: blog
title: "Commotion Pi: Build an RPi MESH Node"
tags: [Raspberry Pi, mesh, developement, guest post]
created: 2014-06-12
changed: 2014-06-12
post_author: Joshua Besneatte
teaser_image: posts/rpi.png
lang: en
---

**Editors note: This is a community post which originally appeared [here](http://besneatte.blogspot.com/2014/05/commotion-pi-build-rpi-mesh-node.html). If you are writing about working with Commotion [let us know](http://lists.chambana.net/mailman/listinfo/commotion-dev), we are happy to repost and share what folks are doing with Commotion!!**

We'll begin with assuming you have a Raspberry Pi up and running with Raspbian installed, latest firmware (rpi-update), a working understanding of the command line and an internet connection. I am installing on a headless RPi Rev.A and all configuration will be done from the command line via a console cable. I also like to run all my processes using the application "screen" so I can (re)connect to it from elsewhere if needed. SSH will work until you mesh, then you can only ssh from within the mesh.<!--more-->

Also, you will need a compatible wifi interface. I used the panda usb dongle with antenna:

[Panda Mid-Range 150Mbps 802.11B/G/N 2.4GHz WiFi USB adapter](http://www.amazon.com/gp/product/B004AC0L4Y)

List of devices here:

[https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_compatibility_list](https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_compatibility_list)

Also might be a good idea to come hang out with us on freenode IRC, channel #commotion. I go by shamanon.

# Step 1: Update the RPi to Jessie

Per a post I found the Jessie distro is required to install commotion wireless. First we will make sure the existing install in updated then we will upgrade to Jessie. You can copy and paste, leave out the $ of course ;). 

```
$ sudo aptitude update && sudo aptitude dist-upgrade
```

 
This takes a bit.... 

```
$ sudo rpi-update
```

This too... do-do-dodo...&nbsp; 

Once that's done edit `/etc/apt/sources.list`

```
$ sudo nano /etc/apt/sources.list
```

To look like this:

```
deb http://mirrordirector.raspbian.org/raspbian/ jessie main contrib non-free rpi
deb http://archive.raspbian.org/raspbian jessie main contrib non-free rpi
deb-src http://archive.raspbian.org/raspbian jessie main contrib non-free rpi
```


Now update/upgrade again:

```
$ sudo aptitude update && sudo aptitude dist-upgrade
```

This time consuming process affords us some time to do some homework and review the posts that got me started:

[https://commotionwireless.net](https://commotionwireless.net)

[http://www.raspberrypi.org/forums/viewtopic.php?f=66&amp;t=47944](http://www.raspberrypi.org/forums/viewtopic.php?f=66&amp;t=47944)
[https://jumoke021.wordpress.com/category/commotion-on-raspberry-pi/](https://jumoke021.wordpress.com/category/commotion-on-raspberry-pi/)

# Step 2: Install Dependencies

A myriad of dependencies will need to be installed to get commotion to work. Here is a good starting list, hopefully this will enable you to compile commotiond in the next step.

```
$ sudo apt-get install git-buildpackage bison flex python-gtk2-dev liblua50-dev \
libldns-dev libavahi-core-dev libavahi-common-dev \
lua5.1 liblua5.1-0-dev subversion libsqlite3-dev \
python-all autoconf cmake
```

# Step 3: Install serval goodies

You will need to have serval-dna and serval-crypto installed for commotiond (next step)&nbsp; to compile. So let's download the package of deb files from my repo. Let's make a commotion folder and go there if we haven't already:

```
$ cd ~
$ mkdir Commotion
$ cd Commotion
```

You have a few options:

Get the files from my server and unzip:

```
$ wget http://artofconfusion.com/commotion-pi/commotion-pi.tar.bz2
$ tar -xvf commotion-pi.tar.bz2
$ cd commotion-pi 
```

Or you can checkout/download the files from google code

```
$ svn checkout http://commotion-wireless-raspberry-pi.googlecode.com/svn/ commotion-wireless-raspberry-pi-read-only
```

or

```
https://code.google.com/p/commotion-wireless-raspberry-pi/source/browse/
```

```
$ sudo dpkg -i serval*.deb
```

if this fails on dependencies, do this

```
$ sudo apt-get install -f
$ sudo dpkg -i serval*.deb
```

# Step 4: Install commotiond

The package commotiond needs to be installed from source manually.

```
$ unzip commotiond-master.zip
$ cd commotiond-master 
$ mkdir build
$ cd build
$ cmake ..
$ make
$ sudo make install
```

# Step 5: Install Rest of Packages

```
$ cd ../../
$ sudo dpkg -i *.deb
```

This will probably fail but setup a list of dependencies for apt-get so: 

```
$ sudo apt-get install -f
```

All dependencies will be installed. On a fresh Pi, this is a lot. Pi goes will with coffee. When it's done, do the install again:

```
$ sudo dpkg -i *.deb
```

# Step 6: Configure Node

You will need to make sure network manager can control your wifi for it to work. Edit /etc/network/interfaces and comment out (add a # at the beginning of the line) all the lines pertaining to any wlan device.

```
$ sudo nano /etc/network/interfaces
```

It should look something like this:

Save and shutdown. If you already have unencyrpted mesh nodes set up with default settings it might just connect on reboot, not sure yet.

This is the kind of bummer part, you will need to hook up a monitor and keyboard as I have not figure out how to do everything from the command line yet. ( good news is that once you are done, the Pi can be booted headless and it will auto connect to your mesh )

Once your stuff is connected, boot the pi and log in. I got things to work by starting up to the command line, and executing this command ( I know you shouldn't run X as root, but just this once, K? )


```
$ sudo startx
```

You should now have a mesh applet running in your toolbar next to your network manager applet.

Right click on the network manager icon and select edit connections. If it's just going to be a mesh node delete all connections except the commotionwireless.net and then edit the connection, making sure that encryption is set to none in the security tab. Save and close.

Click the commotion applet and a menu will appear, select commotionwireless.net, and if all went well you should connect to the mesh.

I have found that I can now shutdown the pi and remove all peripherals save for the wifi adapter and when I boot up it connects to the mesh automatically. I am able to ssh in over the mesh from my laptop so I am indeed connected!

Next step, I will set up a RPi B to be a web access point.
