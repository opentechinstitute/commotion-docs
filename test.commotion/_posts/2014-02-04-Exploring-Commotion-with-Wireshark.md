---
title: "Exploring Commotion with Wireshark: a Tutorial"
layout: default
lang: en
categories: development wireshark debugging
post_author: Seamus Tuohy
---
{{ date }}, {{ page.post_author }}

Testing on routers is a different experience than testing a piece of software on a computer. On the worst problems, the instant you reproduce a bug your connection gets severed or the few megabytes of space fills up, crashing the router and destroying the shreds of data you are trying to squeeze out of the hateful little box.<!--more--> In the best cases, you are still working on a computer that has the introspective abilities of Dory from Finding Nemo. Because of this each member of the Commotion team has developed techniques for making the debugging experience just a little less painful. In this piece I am going to walk you through how to use one of my favorite tools for finding non-obvious wireless network problems.

The program Wireshark, a network analyzer for Windows and Linux,  allows you to monitor network traffic to see the actual packets of data being sent around you. This will allow us to look at the difference between encrypted and unencrypted traffic on a router running Commotion to see if encryption is working. This guide is written for Wireshark running on a Linux device, but can be applied to wireshark debugging on any compatible device.

Tags: {{ page.categories }} 
