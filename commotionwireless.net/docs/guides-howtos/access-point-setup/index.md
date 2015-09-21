---
layout: cck
title: Access Point Setup Guide
site_section: docs
sub_section: [guides]
created: 2015-09-21
changed: 2015-09-21
post_author: andygunn
lang: en
---

![Mesh and APs in a network](/files/Mesh-and-APs.png)

## Introduction

When designing a community wireless network, it helps to separate your rooftop mesh routers from the Access Points (APs) people connect to. In the diagram above, the rooftop routers have antennas that are designed to connect long distances, from rooftop to rooftop. The Access Points are closer to the ground, and have antennas that only connect to people's Wi-Fi devices within a smaller area. This better matches the range of the mobile phones and laptops that people use most often.

You can read more about this type of network design in [Guidelines for Mesh Networks](/docs/cck/networking/guidelines-for-mesh/), in the section titled "Every router should do just one thing".

If you want to skip straight to the configurations, select here:

1. [Router using NAT - with default firmware](#router-using-nat-with-default-firmware)
2. [Router using NAT - with Commotion](#)
3. [Router as a pass-through - with default firmware](#)
4. [Router as a pass-through - with Commotion](#)

*Note: This guide is written for networks that are using single-radio or single-band Wi-Fi devices for the rooftop routers. If you are using dual-radio or dual-band Wi-Fi routers, you can skip to the end of the document and read the [Dual-radio or Dual-band routers](#dual-radio-or-dual-band-routers) section.*


## Access Point options

Once your long-distance rooftop routers are setup and working well, you can add Access Points indoors or outdoors where people want to use the network. You will need to make a decision before configuring your APs: Should users on the Access Points use a firewall, or should everyone connecting be a full member of the mesh?

### Access Points with NAT

If you want a bit of extra protection for the users on your network, you should set up your Access Points as basic routers. This would allow people on the network to connect to your local servers, or to the Internet. It would also prevent any other users on the network from being able to communicate directly with their devices.

![AP with NAT](/files/AP-with-NAT.png)

In some cases, you may want users to be able to share files across the network, or set up a temporary chat or web server. This is much more difficult in this setup.

When a router is set up this way, it has the following configuration:

1. **Provides IP addresses** - Using DHCP, the Access Point will provide an IP address to devices that connect, in a private range. This usually looks like 192.168.1.x, and won't be accessible from the rest of the mesh network.
2. **Network Address Translation (NAT)**- Since the IP addresses are private, the Access Point will have to "translate" between the IP all the people connecting are using, and the IP address it was given by the mesh router.
3. **Firewall** - The Access Point will prevent any connections from the rest of the network from connecting to the users behind the NAT. If a person connects to something on the network or the Internet, that data will be allowed through, but everything else will be blocked.

### Access Points as a pass-through

If you want everyone connecting to the network to have full access, with no firewalls, you should set up your access points to pass-through from the mesh router. This will allow people on the network to connect to any local servers, to the Internet, or provide local servers themselves.

![AP without NAT](/files/AP-with-no-NAT.png)

When a router is set up this way, it has the following configuration:

1. **Does not provide IP addresses** - DHCP should be turned off. Anyone connecting to the AP will get IP addresses from the mesh router. When using Commotion on the mesh router, this will provide people's devices with an IP in the range 10.x.y.z.
2. **No Network Address Translation (NAT)** - Everyone connecting to the AP has an IP from the mesh router, so there is no additional translation needed.
3. **Firewall** - The mesh router will have a firewall controlling connections on the mesh. It will still provide protection from any unwanted connections on the Internet from accessing people's devices on the network. It will allow all users on the network to access each other directly.

### Mix and match

Note that you don't have to use the same setup everywhere on the network. Some people or organizations on the network may want their users to be directly connected to the mesh, or they may want an additional firewall. You can use either configuration anywhere on the network.


## Access Point Configurations

Below there are four options for setting up your access points. The first two options use NAT, and have the option of using the default firmware on a router or Commotion. The second options use the router as a pass-through, and can either use the default firmware or Commotion.

### Router using NAT

Both configurations described below use the hardware setup shown here:

![AP using NAT diagram](/files/AP-diagram-using-NAT.png)

* The Commotion router is configured to always provide DHCP on the WAN port, and has the AP disabled.
* The Access Point router is configured with default settings, and has the cable from the Commotion router plugged into the blue WAN port.

#### Router using NAT with default firmware



#### Router using NAT with Commotion firmware



### Router as a pass-through

Both configurations described below use the hardware setup shown here:

![AP without NAT diagram](/files/AP-diagram-without-NAT.png)

* The Commotion router is configured to always provide DHCP on the WAN port, and has the AP disabled.
* The Access Point router is configured to have DHCP off, and has the cable from the Commotion router plugged in the **yellow LAN port**.




## Dual-radio or Dual-band routers

Blah blah dual band
