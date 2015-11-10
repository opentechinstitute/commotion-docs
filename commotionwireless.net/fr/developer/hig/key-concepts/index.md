---
layout: default
title: Key Concepts
site_section: developers
sub_section: hig
categories: 
created: 2012-06-25
changed: 2013-12-25
post_author: michael@theworkdept.com
lang: fr
---
  <h2>Common language</h2>

<p>A successful UI running on multiple devices must share appropriate, accessible and common language. The following list of terms should be used throughout Commotion apps. Some of them include descriptions that can be included in optional tooltips for the user who needs more information. Advanced terminology that requires significant prior knowledge to understand should be reserved for the advanced area of your software.</p>

<ul>
	<li>This language should be used when including a short description of the project:<br />
	<em>Commotion is an open-source communication tool that uses mobile phones, computers, and other wireless devices to create decentralized mesh networks. More at www.commotionwireless.net.</em><br />
	&nbsp;</li>
	<li>This language should be added when you have more space or on “about” pages:<br />
	<em>The project is collaboratively developed by The Open Technology Initiative, The Work Department, The Guardian Project, The Serval Project, and volunteers within the community.</em></li>
</ul>

<h2>Common UI Terms</h2>

<p>Many terms below reference a definition. A term’s definition should be included in the UI either inline or as a pop-up tooltip in order to help beginning users understand basic concepts.</p>

<ol>
	<li><strong>Mesh Network Name</strong> (SSID)<br />
	(<em>Inline definition:</em> Choose a name that is 5-12 characters. The name can include numbers, letters &amp; special characters. Must be the same among multiple nodes.)<br />
	(<em>Pop-up tooltip:</em> The public name of a wireless network. SSID is an acronym for Service Set Identifier.)<br />
	<img alt="SSID / mesh network name " src="/files/mesh_network_name.png" class="img-responsive" style="border-style:solid; border-width:1px; margin-bottom:15px; margin-top:15px;" /></li>
	<li><strong>Node Name</strong><br />
	(<em>Inline definition:</em> Unique name that is 5-12 characters. You can use numbers, letters &amp; special characters.)<br />
	(<em>Pop-up tooltip:</em> Each device connected to the mesh network has a unique name. This name helps you identify your device.)<br />
	<img alt="node name" src="/files/node_name.png" class="img-responsive" style="border-style:solid; border-width:1px; margin-bottom:15px; margin-top:15px;" /></li>
	<li><strong>Channel</strong><br />
	(<em>Inline definition:</em> Every node on the network must have the same channel.)<br />
	(<em>Pop-up tooltip:</em> The 2.4 GHz Wi-Fi signal range is divided into 11 smaller channels in the U.S. You can choose different channels to avoid wireless interference.)</li>
	<li><strong>Node</strong><br />
	(<em>Pop-up tooltip: </em>An individual device on a mesh network.)</li>
	<li><strong>Client</strong><br />
	(<em>Pop-up tooltip:</em><em> </em>A Wi-Fi device that temporarily connects to the mesh network without using Commotion software.)<br />
	<img alt="" src="/files/client.png" class="img-responsive" style="border-style:solid; border-width:1px; margin-bottom:15px; margin-top:15px;" /></li>
	<li><strong>Join a mesh network</strong></li>
	<li><strong>Create a mesh network</strong></li>
	<li><strong>Looking for networks...</strong></li>
	<li><strong>Joining...</strong></li>
	<li><strong>IP Address</strong></li>
	<li><strong>Current speed</strong></li>
	<li><strong>Average speed</strong></li>
	<li><strong>Advanced</strong></li>
	<li><strong>Help</strong></li>
	<li><strong>Log</strong></li>
	<li><strong>Quit</strong></li>
</ol>

<h2 id="security">Security, privacy and anonymity</h2>

<p>A significant challenge in developing Commotion is balancing ease-of-use and control over functionality. Different users will want Commotion to serve different purposes, and our choices in features and design will make some things easier and some things harder. Unfortunately, we cannot make a perfect package for all situations: we need to be clear about the limitations inherent in Commotion, especially regarding matters of security, privacy and anonymity. These three concepts are related through their importance to communities and people with “real life” concerns of oppression, surveillance, and other attacks.</p>

<p><strong>Warnings</strong></p>

<p>While Commotion software can’t be solely responsible for providing a definitive education on these topics, the software should make clear any risks or benefits of features that deal with security, privacy, or anonymity.</p>

<p>When a user takes an action that could affect their security, privacy or anonymity, they should see a simple warning message that invites them to learn more by linking to external documentation. Here's an example warning that could pop-up after a user changes the node name. It should include a "Don't warn me again" checkbox to disable this warning for the future. The Commotion website should offer details about potential risks and vulnerabilities related to using the tools in common scenarios.</p>

<p><img alt="" src="/files/security_0.png" class="img-responsive" style="margin-bottom:0px; margin-top:0px;" /></p>

<p><strong>Security</strong></p>

<p>Within the context of Commotion, you should consider the information security of data on a network as well as the physical security of people using the network. Data security involves trust, fault tolerance, and integrity of connections between mesh nodes. Physical security overlaps with privacy in many ways: can the people who have created the network be identified based on visible hardware or detectable radio signals? We have the responsibility and ability to inform users of information security concerns, but how do we introduce the topic of physical security?</p>

<p>Commotion’s documentation should explain wireless network security concepts and how mesh networks and traditionally-routed networks differ with regards to security. This documentation should be referenced during the initial configuration of a network.</p>

<p><strong>Privacy and Anonymity</strong><br />
<br />
Commotion documentation should clearly discuss any issues of privacy and data retention. When Commotion generates and retains logs, it should provide options to anonymize the data, clear logs periodically, and disable logging. If the software collects metadata from the device, it should prompt the user to allow for this information to be spread across the network. If the platform allows it, Commotion software should allow for changing MAC addresses through the advanced settings.</p>

<p>In addition to abilities that Commotion can offer at the network level, the documentation should point to privacy and anonymity resources above the mesh network layer. While software can prevent some attacks against privacy and anonymity, the documentation should outline any vulnerabilities associated with traffic analysis and radio monitoring.</p>

<p><a href="https://wiki.commotionwireless.net/doku.php?id=commotion_architecture" target="_blank">Read more about Commotion Security Architecture.</a></p>

<h2>Common footer</h2>

<p>A common footer menu should be available throughout the UI. This ensures that users have consistent access to standard functions of the software at all times. For web-based and desktop applications, create a common green footer in the UI.</p>

<p>In Android, use the native menu. The menu items can also be collapsed to the Android "action overflow" button in the navigation bar if needed.</p>

<p>The menu items are:</p>

<ol>
	<li><strong>Advanced</strong> (Goes to a menu of advanced settings)</li>
	<li><strong>Help</strong> (Goes to a menu of help options)</li>
	<li><strong>Log</strong> (Goes to an activity log)</li>
	<li><strong>Quit</strong> (Ends all mesh networking processes and closes the application)</li>
</ol>

<p><img alt="" src="/files/HIG_24.png" class="img-responsive" style="border-style:solid; border-width:1px; margin-bottom:15px; margin-top:15px;" /><br />
<img alt="" src="/files/HIG_25b.png" class="img-responsive" style="border-style:solid; border-width:1px; margin-bottom:5px; margin-top:5px;" /></p>

<p>&nbsp;</p>
 
