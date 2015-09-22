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
2. [Router using NAT - with Commotion](#router-using-nat-with-commotion-firmware)
3. [Router as a pass-through - with default firmware](#router-as-pass-through-with-default-firmware)
4. [Router as a pass-through - with Commotion](#router-as-pass-through-with-commotion-firmware)

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

Below there are four options for setting up your access points. The first two options use NAT, and have the option of using the default firmware or Commotion on a router. The second options use the router as a pass-through, and can either use the default firmware or Commotion.

### Router using NAT

Both configurations described below use the hardware setup shown here:

![AP using NAT diagram](/files/AP-diagram-using-NAT.png)

* The Commotion router is configured to always provide DHCP on the WAN port, and has the AP disabled or removed.
* The Access Point router is configured with default settings, and has the cable from the Commotion router plugged into the blue WAN port.

#### Router using NAT with default firmware

There are many, many options for Access Points out there. This guide cannot cover them all, so instead it will just show the options for configuring TP-Link routers and Access Points. Other router manufacturer's menus will look similar.

To setup the router with NAT, using a default firmware, just plug in the cable from the Commotion router to the **blue WAN port**. If there is only one port (regardless of what it is named), plug it in there. The WAN port may be another color, such as yellow or red.

First, **Set the Admin password** - Default passwords are easy to guess, and can lead to security issues. Set the administrator password to something strong, but easy for your maintainers to remember.

![Default firmware set password](/files/TP-Link-firmware-set-password.png)

Second, **Name the Access Point SSID** - This is what people see on their Wi-Fi devices when they want to connect. Make it something recognizable so everyone knows it is an AP for the community network.
![Default firmware name AP](/files/TP-Link-firmware-name-AP.png)

The rest of the settings on the AP you can leave as default. It should now be ready to use as an Access Point.

#### Router using NAT with Commotion firmware

If you have any router with the Commotion firmware installed, you can set it up as a simple AP. It requires a number of configuration changes, since Commotion is setup to do many different things by default. Plug in the cable from the meshing Commotion router into the **blue WAN port**. If there is only one port, (regardless of what it is named), plug it in there. The WAN port may be another color, such as yellow or red.

First, **Configure Commotion with the Setup Wizard** - You must first run through the Commotion setup wizard, as though you were using the router as a mesh neighbor. Name the Access Point something recognizable so everyone knows it is an AP for the community network.

Second, **Remove the Wireless Mesh connection** - Go to **Basic Configuration -> Network Settings -> Mesh Network**. Hit the "Delete" button on the right side of the screen, then "Save and Apply". Confirm the changes.
![Delete the mesh interface](/files/Commotion-delete-mesh-interface.png)

Third, **Remove the Gateway test script** - Go to **Advanced -> System -> Scheduled Tasks**.
![Scheduled tasks menu](/files/Scheduled-tasks-menu.png)
Remove the line in the text box that looks like:

```
 * * * * *              /usr/sbin/ff_olsr_test_gw.sh
```

Hit "Submit". The page should now look like this:
![Scheduled tasks GW check removed](/files/Scheduled-tasks-menu-GW-check-removed.png)

Reboot the Commotion router. It should now be ready to use as an Access Point.

### Router as a pass-through

Both configurations described below use the hardware setup shown here:

![AP without NAT diagram](/files/AP-diagram-without-NAT.png)

* The Commotion router is configured to always provide DHCP on the WAN port, and has the AP disabled or removed.
* The Access Point router is configured to have DHCP off, and has the cable from the Commotion router plugged in the **yellow LAN port**. The blue WAN port is not used.

#### Router as pass-through with default firmware

To setup the router with as a pass-through (also known as an AP bridge), using a default firmware, just plug in the cable from the Commotion router to the **yellow LAN port**. If there is only one port (regardless of what it is named), plug it in there. The LAN ports may be another color, such as white or black.

First, **Set a Static IP on the LAN port** - Since the AP router won't give out IP addresses after you disable DHCP, set this IP so the router's Administrator interface will be accessible in the future. It is recommended to label the AP with this static IP so you don't forget it.
![Static IP on LAN](/files/TP-Link-firmware-static-IP.png)

Second, **Disable DHCP on the LAN** - Since the Commotion router will be handing out IP addresses with DHCP, you don't need a second DHCP server on the router. Having two DHCP servers can lead to unexpected results, and often things will not work correctly.
![Disable DHCP on the LAN](/files/TP-Link-firmware-disable-DHCP.png)

Third, **Set the Admin password** - Default passwords are easy to guess, and can lead to security issues. Set the administrator password to something strong, but easy for your maintainers to remember.
![Default firmware set password](/files/TP-Link-firmware-set-password.png)

Fourth, **Name the Access Point SSID** - This is what people see on their Wi-Fi devices when they want to connect. Make it something recognizable so everyone knows it is an AP for the community network.
![Default firmware name AP](/files/TP-Link-firmware-name-AP.png)

The rest of the settings on the AP you can leave as default. It should now be ready to use as an Access Point.

#### Router as pass-through with Commotion firmware

If you have any router with the Commotion firmware installed, you can set it up as a simple AP without NAT. It requires a number of configuration changes, since Commotion is setup to do many different things by default. Plug in the cable from the meshing Commotion router into the **yellow LAN port**. If there is only one port, (regardless of what it is named), plug it in there. The LAN port(s) may be another color, such as black or white.

First, **Configure Commotion with the Setup Wizard** - You must first run through the Commotion setup wizard, as though you were using the router as a mesh neighbor. Name the Access Point something recognizable so everyone knows it is an AP for the community network.

Second, **Remove the Wireless Mesh connection** - Go to **Basic Configuration -> Network Settings -> Mesh Network**. Hit the "Delete" button on the right side of the screen, then "Save and Apply". Confirm the changes.
![Delete the mesh interface](/files/Commotion-delete-mesh-interface.png)

Third, **Set a Static IP on the LAN port** - Since the meshing Commotion router will be handing out IP addresses with DHCP, you don't need a second DHCP server on the router. Having two DHCP servers can lead to unexpected results, and often things will not work correctly. Go to **Advanced -> Network -> Interfaces** and click "Edit" in the row next to "LAN".
![Network Interfaces - edit LAN](/files/Network-Interfaces-edit-LAN.png)

Under "Protocol", select "Static Address" in the pull down menu, then click "Switch Protocol". Confirm that you really want to switch the protocol.
![Interfaces - edit LAN switch protocol](/files/Interface-edit-LAN-switch-protocol.png)

Enter the static IP you want to use in the future to access the LAN on the Access Point.
![Interfaces - edit LAN add Static IP](/files/Interface-edit-LAN-static-IP.png)
This will be important if you need to do any maintenance or change settings on the AP. It is recommended to label the AP with the static IP address so you don't forget it in the future.

Next, **Disable DHCP on the LAN port(s)** - Go to **Advanced -> System -> Startup**.
![Advanced Startup menu](/files/Advanced-Startup-menu.png)

Scroll down until you see "dnsmasq", then click the button labeled "Enabled". This will toggle it to "Disabled".
![Advanced Startup disable dnsmasq](/files/Advanced-disable-dnsmasq.png)

## Dual-radio or Dual-band routers

Blah blah dual band
