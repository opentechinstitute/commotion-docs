---
layout: default
title: Recommended Routers for Commotion
site_section: docs
sub_section: [guides]
categories: 
created: 2014-11-24
changed: 2014-11-24
post_author: Andy Gunn
lang: en
---

![Routers Intro Graphic](/files/Recommended_Hardware_Intro.png)

When choosing the appropriate hardware for your network, there are a few different roles the routers can play in the network. Work through [Every Network Tells a Story](/docs/cck/planning/design-your-network-every-network-tells-story/) and <strong>Types of Wireless Networks</strong> (coming soon!).

<strong>Indoor and Window Networks</strong><br />
For general use, indoor networks, or window-to-window networks, you can use an indoor consumer router. A good example of this is the TP-Link [WDR3600](http://www.tp-link.us/products/details/?categoryid=2268&model=TL-WDR3600) or [WDR4300](http://www.tp-link.us/products/details/?categoryid=2166&model=TL-WDR4300). These are available in many locations, support dual-band (2.4GHz and 5GHz) Wi-Fi use, and have switched Ethernet ports.

<strong>Outdoor Networks - All-direction antennas</strong><br />
For outdoor or rooftop networks where there are nearby connections in several directions, you can use an outdoor omnidirectional router. A good example of this is the Ubiquiti [Rocket M](http://www.ubnt.com/airmax/rocketm/) series routers. These are single band, but available in 2.4GHz and 5GHz models. They also come with various types of antennas for customization. The least expensive antenna option is to use generic dual-band RP-SMA antennas, such as those used with indoor routers, and weatherproof them with caulk and tape. The higher-performance but more expensive option is to use Ubiquiti [AirMax Omni](http://www.ubnt.com/airmax/airmax-omni-antenna/) antennas. These offer high gain (which can extend the range of the router), and can sometimes reduce interference.

<strong>Outdoor Networks - Single-direction antennas</strong><br />
For outdoor or rooftop networks where there are connections a bit further away, or concentrated in one direction, you can use an outdoor directional router. A good example of this is the Ubiquiti [NanoStation M](http://www.ubnt.com/airmax/nanostationm/) series routers. These are single band, but available in 2.4GHz and 5GHz models. They come with a built-in antenna, with a wedge-shaped signal. The range will be good in the direction the router is pointing, but poor or nonexistent in most other directions.

<strong>Advanced or Custom Use</strong><br />
For completely custom mesh nodes, where you want to mix-and-match antennas, or may have a large number of users or connections, the MikroTik [RouterBoards](http://routerboard.com/) are excellent. These units require enclosures, and external antennas, so they are only recommended for more experienced network builders. Currently, Commotion has been tested on the RB411/AH and RB433 and RB433/AH models.
