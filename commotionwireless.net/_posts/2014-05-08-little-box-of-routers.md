---
layout: blog
title: Little Box of Routers - Expanding Commotion Support for More Router Models 
categories: [supported routers, testing]
created: 2014-05-01
changed: 2014-05-01
teaser_image: 
post_author: Chris Ritzo
lang: en
---
The Commotion team often gets email from people interested in trying out our router software on their devices, and inquiries about supporting more than just Ubiquity models. Since the Commotion Router 1.0 release, we've been working on expanding support for more routers and we'd love to get your help!<!--more-->

We're committed to supporting devices that are available through local supply chains, particularly in international settings. In our field work, local partners have helped us identify commonly used/available routers in their area. For example, Mikrotik router board models were identified by our partners in India and Nepal. Others have emailed us about support for various TP Link routers. We also have various routers from past projects that we're currently testing.

In our 1.1 release of Commotion Router, we'll be adding supported compiled images for theses routers:
  * TP Link WDR4300
  * Mikrotik RB411AH
  * Buffalo G300NH
  * Buffalo AG300N

## Help us test new routers!

The Commotion team is interested in connecting with you to help us expand support for new devices. Maybe you've emailed us about a specific router in the past. Perhaps you've read about Commotion and want to try it out. Do you have a box of tech stuff in the garage or under your desk and are thinking, "I wonder if that old router will run it..." Well we'd like to know too!

In general, Commotion Router has these system requirements:
  * Wireless chipset (target) is ar71xx or atheros
  * The router has greater than 4MB of flash
  * The router supports OpenWRT 10.x Attitude Adjustment or greater

We've compiled a <a href="https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_compatibility_list">list of potentially compatible routers</a> on our wiki and rated each device's potential compatibilty using the following:

  * Confirmed working/compatible with Commotion
  * Very likely to run Commotion out of the box
  * Will likely run Commotion, but may need special build or installation, for example requiring external root on a USB device
  * Will likely not run Commotion

If you are interested in helping out and have one or more of the routers on our list, <a href="/contact">contact us</a>! We'll even build a testing image for you!
