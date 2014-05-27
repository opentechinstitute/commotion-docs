---
layout: blog
title: Open Wifi and Copyright - A Primer for Network Operators
categories: [copyright, legal, community engagement, guest post, privacy]
created: 2014-05-27
changed: 2014-05-27
teaser_image: posts/051327-open-wireless-eff.jpg
post_author: Electronic Frontier Foundation
lang: en
---
Every day cafes, airports, libraries, laundromats, schools and individuals operate “open” Wi-Fi routers, sharing their connection with neighbors and passers-by at no charge. The City of San Francisco recently deployed a free, public Wi-Fi network along a three-mile stretch of Market Street. Sometimes people use those connections for unauthorized activities. Most of the time they don’t, and the world gets a valuable public service of simple, ubiquitous Internet access.<!--more-->

<img src="/files/posts/051327-open-wireless-eff.jpg" />

At EFF, we are <a href="https://openwireless.org/">big fans of open wireless</a>. But we also know that operators of open networks sometimes worry that they could be legally responsible if people use their networks to engage in copyright infringement. We've put together a <a href="https://www.eff.org/files/2014/05/23/copyright.wifi_.primer.pdf">short white paper</a> that generally explains the scope and limits of operator liability for the acts of users, and additional steps network operators may choose to take to further limit their legal risk. As we explain in the paper, copyright liability for the acts of your users is less likely than you might think, as long as you (1) simply provide a means of transmission; and (2) act reasonably and responsibly.

To be clear, this paper does not offer legal advice specific to the situation of any operator.  If you want such advice, we urge you to consult an attorney. But we hope it does help dispel some of the myths about copyright and open wifi. 

## 1. What is Copyright Infringement ##

Let's begin with some basics. First, you can only be held liable for the acts of your users if they have themselves violated copyright law. To have a "secondary" violation, there must first be a "primary" or "direct" violation.

### A. Direct Infringement ###

Copyright infringement occurs when somebody violates one of the exclusive rights of the copyright holder. For instance, if a user downloads a copy of a movie without permission from the copyright holder, she may be liable for copyright infringement. Copyright is a "strict liability" rule, which means that it doesn't much matter whether or not the user *thought* she was breaking the law.

To be liable for direct infringement, a person must have committed some voluntary act that caused the infringement to occur. This is called the "volitional conduct" doctrine, and it's an important one for network operators because it cleanly distinguishes between service providers that act as passive *conduits* for network trac, on the one hand, and providers that actively control the information users post and access on their networks.7 If you are nothing more than a conduit for information packets, you shouldn't be legal responsible if those packets happen to containing infringing material.8 As a federal district court in California explained back in 1995: 

> Where the infringing subscriber is clearly directly liable for the same act, it does not make sense to adopt a rule that could lead to the liability of countless parties whose role in the infringement is nothing more than setting up and operating a system that is necessary for the functioning of the Internet. Such a result is unnecessary as there is already a party directly liable for causing the copies to be made.

Several federal appellate courts have followed the district court's ruling.

### B. Secondary Liability ###

So, odds are that a court would not hold a network operator directly liable for copyright infringement based on the acts of users. But that doesn't end the analysis, because a copyright holder might try to claim that a service provider is indirectly responsible for the infringing acts of its users. This is called "secondary" liability.

Copyright law recognizes two types of secondary liability: "contributory" infringement and "vicarious" infringement.

*Contributory* infringement occurs when the second party (1) knows of the infringement and (2) "induces, causes, or materially contributes to the infringing conduct of another." For instance, a record store that sold blank tapes and encouraged customers to use its coin-operated "Make-a-Tape" machine to copy prerecorded tapes was held liable for contributory infringement. An ISP that actively and knowingly encouraged its users to use its service to download popular movies, without authorization, might be found liable on this theory.

Liability for contributory infringement depends largely on the ISP's degree of control over the information its users transmit. In one leading case, an ISP hosted its users' Usenet messages and distributed them to other Usenet servers around the world. The court held that the ISP could be liable only if the copyright holder could prove (1) that the ISP was aware of the infringing material *and* (2) that the ISP nonetheless continued to store and distribute the material.

A network operator could be *vicariously* liable for the acts of its users if it "(2) has the right and ability to control the infringer's acts and (2) receives a direct financial benefit from the infringement." For instance, the owner of a dance hall was vicariously liable for copyright infringement where it hired an orchestra to play at the hall, and profited from the performance, even though it did not know the orchestra didn't have permission to play some of the music it chose.

This kind of liability depends on whether the ISP has the right and ability to control its users' acts and whether the ISP received a direct financial benefit from a *specific* user's infringing activities. If the ISP provides equal service to all of its users, it will be dicult to establish that it is benefiting from a specific user's activities. If it is a noncommercial service, of course, the "direct financial benefit" prong will be even harder to prove.

In short, a network operator is unlikely to be held liable for the infringing activities of its users unless it knows about and assists those activities, or controls and financially benefits from them.

### C. DMCA Safe Harbors ###

As explained above, in general a network operator should not be liable for its users' activity as long as the operator merely acts as a passive conduit for Internet trac. However, network operators who remain worried about legal risk can consider another option: the safe harbors provided by the Digital Millennium Copyright Act ("DMCA"). 

In order to foster online expression and commerce, Congress crafted a set of safe harbors from copyright liability to “provide ‘greater certainty to service providers concerning their legal exposure for infringements that may occur in the course of their activities.’”

Under the DMCA, “service provider” includes “an entity . . . providing of connections for digital online communications.” The definition of a service provider is broad, and includes those who do not operate communications equipment themselves. In one case, for example, a federal appeals court held that a payment processor for online content was a DMCA “service provider” even though it didn’t operate the alleged infringer’s Internet connection or transmit any infringing material. Congress also intended that the term cover “subcontractors” of Internet service providers. Arguably, this definition covers the providers of open Wi-Fi, such as municipalities, cafes and libraries.

The statute also clarifies the outer limits of a service provider’s obligations by, for example, making it clear that a service provider need not monitor its service or affirmatively seek facts indicating infringing activity in order to enjoy the safe harbor. 

Under the DMCA, a network operator is sheltered from liability for “transmitting, routing, or providing transfers for” its users’ traffic if:

1. A “person other than the service provider” initiates the transmission.
2. The transmission is “carried out through an automatic technical process without selection of the material by the service provider . . . .”
3. The service provider does not choose the recipient of the transmission, other than to route the traffic automatically.
4. The service provider does not keep copies longer than necessary to transfer the traffic, and it cannot make copies available to anyone other than the recipient.
5. The service provider does not modify the content of the message.

In short, ISPs qualify for this safe harbor if they act as passive *conduits* for network traffic.

In addition, there are two threshold requirements that service providers must meet in order to qualify the DMCA safe harbors. First, the provider must adopt a policy to terminate service for “subscribers and account holders” who are repeat infringers. Second, the operator must "accommodate[] and not interfere with standard technical measures" that copyright owners employ to protect their works, such as a watermark in a copyrighted image.

A few final notes on the DMCA. First, falling outside the safe harbors does not make you liable for infringement. Compliance with the requirements of the safe harbors is *optional* for service providers, not mandatory. The increased certainty provided by the safe harbors, however, creates a strong incentive for service providers to take advantage of them, if it makes sense for their operation. Second, the DMCA safe harbors only apply to copyright infringement (not trademark or patent infringement, or other causes of action). Most service providers, however, also enjoy broad immunity from state law causes of action as well as most federal civil claims, thanks to Section 230 of the Communications Decency Act.

As a practical matter, this means that network operators have choices when, for example, they receive a complaint that someone is infringing using their network to engage in infringing activities. Usually such complaints will identify the alleged infringer via some form of IP address. If it is possible for the network operator to terminate a user associated with that address, and the operator has a repeat infringer policy, it can follow that policy. If the operator does not track users such that it is possible to terminate any particular user (e.g., a network that allows anonymous use, and/or assigns IP addresses in a highly dynamic fashion, such that it is not feasible to tie an IP address to any particular user), it can either ignore the notice or respond by explaining why it cannot comply with the request. Of course, either approach may invite further complaints but should not change the bottom line: a network operator is unlikely to be held liable for the infringing activities of its users unless it knows about and contributes to those activities, or controls and financially benefits from them. Operators must determine for themselves what legal risks they are prepared to incur.
<<<<<<< HEAD

*This article originally appeared on the <a target="_blank" href="https://www.eff.org/files/2014/05/23/copyright.wifi_.primer.pdf">EFF website</a>.*
=======
>>>>>>> origin/copyright
