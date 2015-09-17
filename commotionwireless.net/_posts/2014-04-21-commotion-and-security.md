---
layout: blog
title: Commotion and Security
categories: [security]
created: 2014-04-21
changed: 2014-04-21
teaser_image: 
post_author: Josh King
lang: en

---
One of the major goals of the Commotion project has been to introduce security tools open-source wireless mesh networks, while  emphasizing ease-of-use and reusing existing technologies as much as possible. Now that our first stable releases are out, it's worthwhile to revisit that goal and see what the project has accomplished.<!--more-->

## Security Audits

As part of our development process, Commotion has benefited from two security audits by the professional security auditing companies iSEC and Cure53. These audits had a particular focus on the components of Commotion's <a href="https://github.com/opentechinstitute/commotion-router" target="_blank">router distribution</a>, and the vulnerabilities they found had some overlap. Given that commotion-router is essentially a full Linux distribution based on the excellent <a href="https://openwrt.org/" target="_blank">OpenWRT project</a>, this was a large and complex undertaking that  affects a large number of upstream projects. 

The scope of the audits would turn out to be a challenge for us, as many potential vulnerabilities discovered would pertain to components of the software developed by groups and individuals outside of the Open Technology Institute. Additionally, many of the items identified would involve ways in which we've utilized components like the OpenWRT web interface outside the scope of how they were originally intended to be used. However, we chose to view this as an opportunity to contribute work towards upstream projects, so that it would benefit others outside of the Commotion community.

### iSEC

The iSEC audit turned up 11 vulnerabilities. Of these, we have fixed 7 in version 1.x of Commotion. Of the remaining 4 issues, 3 are upstream issues that we are working on but are non-trivial for us to fix; at least one of them would require major changes to parts of OpenWRT's architecture. The 1 remaining issue involves an architectural design decision that we are still evaluating.

### Cure53

The Cure53 audit turned up 9 vulnerabilities. Of these, we have fixed 6 in version 1.x of Commotion. All of the remaining 3 are upstream issues. We have a fix and are submitting a patch for one of them, one has already been fixed upstream but the new version of the software has not yet been integrated into Commotion, and we're still evaluating the relevance and impact of the last issue.

## Security Architecture

The current security-related architecture for Commotion is largely based on bringing out-of-the-box wireless mesh networking up to the level of security expected of commonly available commercial Wi-Fi devices<sup><a href="#footnote1">1</a></sup>, without significantly impacting performance or usability. To that end, Commotion encrypts all of its individual wireless links between devices using IBSS-RSN—essentially standards-compliant WPA2-PSK with AES encryption, similar to encryption used on properly secured wireless access points. Thanks to hardware encryption support within the wireless devices themselves, encrypted links operate with a negligible performance impact. 

The main technology underpinning security on Commotion, however, is the encryption and network communication library from the <a href="http://servalproject.org/" target="_blank">Serval Project</a>. The Open Technology Institute sponsored development of key components of Serval's software, and Commotion 1.x currently provides Serval's crypto and network API's as a way for developers to create secure and delay tolerant applications on top of a Commotion network. 

Serval's software also incorporates the <a href="http://nacl.cr.yp.to/" target="_blank">NaCl cryptographic library</a> for the use of strong, non-NIST sponsored ECC ciphers. By default, Commotion uses Serval in order to provide cryptographic signatures of local application announcements, and allows the administrators of a network to create a shared key that is used to sign routing traffic on the mesh in order provide an additional method of restricting access to a set of trusted users.

## Security Challenges

Arguably one of the security advantages of technologies like Commotion is simply the fact that it creates an alternate infrastructure. The centralized infrastructure of the Internet makes it relatively easy and economical to conduct large-scale surveillance and exploitation, as demonstrated by the NSA and GCHQ. A local, alternate infrastructure based on Commotion, on the other hand, keeps local traffic within the mesh network and away from compromised Internet switching centers, potentially improving user privacy and security.  While this speaks to the ancillary security benefits of setting up an alternative network in the first place, it does not address the significant security challenges associated with the Wi-Fi based mesh network itself.

One challenge we face is maintaining a balance between security and providing the features users expect. Since we are seeking to create a flexible technology that fits the needs of the communities in which it is deployed, those communities consequently influence the roadmap of the project. There has been a large demand for fast Internet access in many of the places that Commotion has been deployed, but this sometimes runs counter to the introduction of security features that have trade-offs in speed or usability.

Performance trade-offs are even more pronounced on wireless routers, which typically lack the resources necessary to efficiently perform strong cryptography. Most have low-power processors with only small amounts of memory and storage, and do not possess the keyboards, mice, touchscreens, and other input devices that are typically used by desktop and mobile devices to gather the entropy needed for cryptography. 

Therefore, we have to be careful which security tools we introduce onto the router platform, as they must be optimized for speed, size, and resource usage. It will likely be the case in the future that some security tools will only be available on non-router Commotion platforms, as some devices may simply lack the capability to adequately run the tools.

There is also the fact that Wi-Fi, though possessed of many advantages in cost, availability, and openness that for our project quite outweigh its downsides, is in many ways unsuited for some of the tasks to which we and other projects apply it. Thus we are also researching ways to make Commotion more opportunistic, so that it can tolerate longer connectivity delays due to disruption, and so that communications platforms that run on top of Commotion can use other means of communication when available.

## What's next?

The current security features in Commotion provide some degree of protection from snooping and attacks from outside of the network. But not only can those protections be made much stronger, but at the moment there's not much protection from surveillance from inside of the network. 

Consequently, the next stage of security development for Commotion will be the introduction of a generic proxy for Serval's encrypted overlay network, which will allow opportunistic end-to-end encryption of traffic within the network. This will help prevent even network operators from reading the contents of traffic within the network. This feature is currently in development and should be completed by Summer 2014. 

Due to the aforementioned issues of cryptographic performance, only testing will reveal whether it is practical to enable this proxy by default for all traffic, or whether it will only be enabled for certain use cases. Additionally, we will continue to expand our API in order to make it easier to develop secure applications on top of Commotion, and we will roll out new messaging application within the next few months to serve as a demonstration of what is possible.

Besides protecting the contents of the network from both internal and external surveillance, we must also look to protecting it from disruption. Accordingly, this past year we engaged with security researchers in a detailed threat-modeling process. The output from this was a detailed security architecture plan that laid out the components necessary to create a wireless mesh network that is as hardened as we can make it against surveillance and disruption, while still being being flexible enough to fit the needs of Commotion's many communities. This is a much longer research and development project that will be a major focus over the next couple of years. We will release new components of this security platform as they become available.

It's an exciting time for the project now that Commotion 1.x has been released, as our focus can now move from simply integrating existing technologies to researching and designing truly new and cutting edge software. The version 1.x series is not the end of development but rather the first step toward being able to take Commotion in new and interesting directions. Check back here or on our Github projects to keep abreast of new developments and exciting new features as we continue to push forward the development roadmap.

<hr>
<span id="footnote1">1 - Although security researchers have demonstrated <a href="http://www.infoworld.com/d/security/backdoor-found-in-d-link-router-firmware-code-228725" target="_blank">multiple</a> <a href="http://arstechnica.com/security/2014/01/backdoor-in-wireless-dsl-routers-lets-attacker-reset-router-get-admin/" target="_blank">backdoors</a> and <a href="http://www.pcworld.com/article/2057260/vulnerabilities-in-some-netgear-router-and-nas-products-open-door-to-remote-attacks.html" target="_blank">several</a> <a href="https://threatpost.com/serious-vulnerabilities-found-popular-home-wireless-routers-040813" target="_blank">security</a> <a href="http://securityevaluators.com/knowledge/case_studies/routers/soho_router_hacks.php" target="_blank">vulnerabilities</a> in consumer-grade routers, we hope to make a router firmware distribution that meets the security expectations of users.</span>
