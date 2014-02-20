---
layout: default
title: Understanding Commotion's Warning Label
categories: {categories}
created: 2013-02-14
changed: 2013-02-21
post_author: s2e
lang: en
---
 <p>Commotion's Warning Label is clear about what we don't do, but not very helpful if you need the functionality that Commotion does not offer. Below we have a short explanation of each warning and some possible alternatives to help you attain the level of security that you require. </p>
 <h2> Can not hide your identity </h2>
 <p><strong>Why Commotion Can't </strong><br />
Commotion does not anonymize your identity. While Commotion aims to further enhance anonymizing tools in the future, the current stable release does not include any anonymizing tools. If you need anonymity, we suggest you read the links below and use one of the below tools in addition to Commotion.</p>
 <p><strong>Tor</strong></p>
 <ul>
 <li><a href="http://cypherpunks.io/Tor">http://cypherpunks.io/Tor</a></li>
 <li><a href="https://www.torproject.org/">https://www.torproject.org/</a></li>
 <li><a href="https://securityinabox.org/en/tor_main">https://securityinabox.org/en/tor_main</a></li>
 <li><a href="http://www.i2p2.de/how_networkcomparisons">http://www.i2p2.de/how_networkcomparisons</a> </li>
 </ul>
 <p><strong>Liberté</strong></p>
 <ul>
 <li><a href="http://dee.su/liberte-install">http://dee.su/liberte-install</a></li>
 <li><a href="https://github.com/mkdesu/liberte">https://github.com/mkdesu/liberte</a></li>
 </ul>
 <p><strong>Tails</strong></p>
 <ul>
 <li><a href="https://tails.boum.org/about/index.en.html">https://tails.boum.org/about/index.en.html</a></li>
 </ul>
 <p><strong> Freenet </strong></p>
 <ul>
 <li><a href="https://freenetproject.org/">https://freenetproject.org/</a></li>
 </ul>
 <h2>Does not prevent monitoring of internet traffic</h2>
 <p><strong> Why Commotion Can't </strong><br />
Commotion does not protect a user's communications from being monitored once it reaches the internet. While monitoring communications over a Commotion network requires physical proximity to a user, communications that are sent to the internet are not necessarily secure. Below are a few tools to help you secure your internet communications once it leaves a Commotion network.</p>
 <p><strong> HTTPS Everywhere</strong></p>
 <ul>
 <li><a href="https://www.eff.org/https-everywhere">https://www.eff.org/https-everywhere</a></li>
 </ul>
 <p><strong> VPN's</strong></p>
 <ul>
 <li><a href="http://booki.cc/cryptoparty-handbook/vpn/">http://booki.cc/cryptoparty-handbook/vpn/</a></li>
 <li><a href="https://en.wikipedia.org/wiki/Virtual_private_network">https://en.wikipedia.org/wiki/Virtual_private_network</a></li>
 <li><a href="http://lifehacker.com/5759186/five-best-vpn-service-providers">http://lifehacker.com/5759186/five-best-vpn-service-providers</a></li>
 <li><a href="https://help.riseup.net/en/riseup-vpn">https://help.riseup.net/en/riseup-vpn</a></li>
 </ul>
 <p><strong> OpenVPN</strong></p>
 <ul> 
 <li><a href="http://openvpn.net/index.php/access-server/download-openvpn-as-sw.html">http://openvpn.net/index.php/access-server/download-openvpn-as-sw.html</a></li>
 </ul>
 <p><strong> OTR</strong></p>
 <ul>
 <li><a href="http://cypherpunks.io/otr">http://cypherpunks.io/otr</a></li>
 <li><a href="https://securityinabox.org/en/pidgin_main">https://securityinabox.org/en/pidgin_main</a></li>
 </ul>
 <p><strong>CryptoCat</strong></p>
 <ul>
 <li><a href="https://crypto.cat/">https://crypto.cat/</a></li>
 <li><a href="https://github.com/cryptocat/cryptocat/wiki/Threat-Model">https://github.com/cryptocat/cryptocat/wiki/Threat-Model</a></li>
 </ul>
 <h2> Does not provide strong security against monitoring over the mesh</h2>
 <p><strong>Why Commotion Can't</strong><br />
The current stable release of Commotion has its mesh traffic encrypted (WPA-None) with a generic password. Because of this, any Commotion router can join any other Commotion mesh. This means that anyone with a Commotion router or access to our completely open source code can monitor the traffic over a Commotion mesh. You can prevent this casual snooping by getting together with those you will be meshing with and setting your own secret password for mesh encryption. You can also use the tools that were linked above to secure your communications over the mesh so that there are multiple levels of encryption preventing someone from snooping.</p>
 <h2>Can be jammed with radio/data-interference </h2>
 <p><strong>Why Commotion Can't</strong><br />
Wireless connections use radio waves broadcast across the air to communicate with each other. Each country determines which types of radio waves can be used for free in their country. This usually means that the most weak and easily disrupted radio waves are given to the public. Radio jamming over a small range is a cheap and simple process that can be done in a variety of ways. If you experience radio jamming, the best option is simply to move in order to connect to another part of the mesh that is not being jammed and transmit your data there. Below is a short overview of radio jamming. </p>
 <ul>
 <li><a href="https://en.wikipedia.org/wiki/Wireless_signal_jammer">https://en.wikipedia.org/wiki/Wireless_signal_jammer</a> </li>
 </ul>
