---
layout: blog
title: Commotion Field Test - Pop-up mesh network, downtown Washington, DC
tags: []
created: 2013-09-29
changed: 2013-11-04
post_author: Georgia Bullen
lang: en
---
  <iframe allowfullscreen="" frameborder="0" height="315" src="//www.youtube.com/embed/gqOZBVtarMc" width="420"></iframe>
<h3><b>Introduction:</b></h3>
During a lunch hour in downtown Washington, DC, the Open Technology Institute set up a proof of concept network for distributing Internet service to a public space using a mesh network of multiple mobile routers. Such a network would be useful where there is a sudden need for Internet connectivity, such as a spontaneous event, or conditions that prevent permanent network installation for a planned event. The same network configuration would work for a mobile event, such as a march, although the deployment team did not test for that scenario in this instance.
The deployment team used the 25-Sep-2013 Nightly build of Commotion OpenWRT running on Ubiquiti’s omnidirectional Picostation router, with four routers powered by Energizer XP8000 battery packs. The team connected one router to the Internet in OTI’s office at 1899 L St NW and placed it in the south-facing 5th floor window. Team members took the battery-powered routers to nearby intersections to assess the functionality of the firmware, the link quality between the nodes, and the quality of the Internet service at the far point in the network, which was four hops from the gateway (see illustration below).
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/2013-09-25 Pico Popup.svg_.2013_09_26_14_46_00.0.png" style="height: 318px; width: 400px;" />
<i>Approximate location of nodes in the pop-up network. The ad hoc mesh network delivered Internet connectivity to Farragut Square Park from the Open Technology Institute’s 5th floor office several blocks away.</i>
<h3>**Results and Observations: **</h3>
<ul>
	<li>OTI staff was able to set up a successful pop-up network using “Commotion WRT Nightly Build 09.25.13” on omnidirectional Ubiquiti Picostation routers up to 4 hops/3 blocks/0.3 miles away from the gateway node in a crowded location in an urban setting.</li>
	<li>Routers in backpacks were able to maintain links roughly one block apart. This distance was impacted by the number of trees, people, and buildings in the area, as well as the height of the router.</li>
</ul>
<h3>**Equipment details: **</h3>
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/battpackrouter.png" style="width: 500px; height: 245px;" />
<ul>
	<li>4 Ubiquiti Picostations HP (6dBi) Omnidirectional routers (<a href="http://dl.ubnt.com/pico2hp_ds.pdf">spec</a>)</li>
	<li>4 Energizer XP8000 battery packs (<a href="http://www.energizerpowerpacks.com/il/products/xp8000/">spec</a>)</li>
	<li>Commotion Firmware: Commotion-OpenWRT 25-Sep-2013 DR2 Nightly build <a href="https://commotionwireless.net/download/routers">(https://commotionwireless.net/download/routers</a>)</li>
	<li>4 Ethernet Cables to connect Picostation to the battery pack</li>
	<li>4 Passive PoE Injector Cable Sets</li>
</ul>
<h3>**Location Details: **</h3>
<ul>
	<li>Moderately busy street during lunch hours with many people walking in the area</li>
	<li>Approximately 10-12 feet tall trees along K St NW</li>
	<li>Closely located 4-6 floor buildings in the area</li>
	<li>Gateway router on the 5th floor of 1899 L St NW</li>
	<li>Mesh network with moving access points within 3 blocks (0.3miles) of the gateway node located at the following intersections:
	<ul>
		<li>1828 L St NW: right across the street (33 feet) from the gateway node but at ground level with clear line of sight</li>
		<li>1875 K St NW: clear line of sight from first access point at ground level (500 feet)</li>
		<li>1801 K St NW: clear line of sight from second access point at ground level but with more trees, buildings, and people around (250 feet)</li>
		<li>Farragut Square at the junction of K St NW and Connecticut Avenue: satisfactory line of sight from third access point at the ground level with more trees, buildings, and people around. (0.1miles)</li>
	</ul>
	</li>
</ul>
<h3>**Steps followed in the Pop-up Test:**</h3>
OTI team installed a gateway node on the 5th floor glass window of the office building.
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/IMG_1152.JPG" style="height: 225px; width: 300px;" />
Then, four team members connected their four respective picostations to battery packs and carried them in backpacks and purses.
The team left the first member of the team with the first router, or node, 33 feet away from the gateway node at 1828 L St NW at ground level. They was able to access the Internet through the mesh network at this point.
The remaining team members then walked south towards K St NW along 19th St NW to leave the next team member with the second node 500 feet away from the first node. The team ran “<a href="http://www.overlooksoft.com/features">Fing</a>”, a network toolkit, on their phones/mobile devices to note if they were able to ping each other’s nodes. The team was also able to access the Internet on their phones through the mesh at this point.
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/Screenshot_2013-09-25-14-00-42.png" style="width: 300px; height: 500px;" />
<em>Splash page when the team accessed the Internet using the mesh network </em>
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/Screenshot_2013-09-25-14-20-56.png" style="width: 281px; height: 500px;" />
<em>Using Fing, the team can monitor details of the access point and users of the access point </em>
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/Screenshot_2013-09-25-14-09-56.png" style="width: 281px; height: 500px;" />
<em>Using Fing, the team can ping other users of the mesh network. </em>
The remaining team walked east on K St NW towards 18th St NW, and left the third member with the third node 250 feet away from the second node at 1801 K St NW. The team was still able to get to the Internet using the mesh network which was now three hops (nodes) away from the gateway node.
Finally, the team continued east towards Farragut Square on K St NW, with the fourth node in the team member’s purse, 0.1 miles away from the third node. The devices were still connected to each other via the mesh network but the signals were weaker, now that we were four hops and 0.3 miles away from the gateway node on a very busy street. When we raised the fourth access point to a higher level, the connection between nodes three and four improved.
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/Screenshot_2013-09-25-14-29-08.png" style="width: 281px; height: 500px;" />
<em>Using OLSR-Viz, we see that the connection between the access points is weaker when 4 hops and 0.3 miles away. </em>
 
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/IMG_1182.JPG" style="width: 400px; height: 533px;" />
<em>The fourth access point is now raised in position at Farragut Square park </em>
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/Screenshot_2013-09-25-14-28-42.png" style="width: 281px; height: 500px;" />
<em>OLSR-Viz shows that the connection gets better when the fourth Picostation is raised so there is better line of sight between the third access point and itself. </em>
At Farragut square park, getting to the Internet was more challenging and slower. At one point during the experiment, all the connections on the mesh network were captured on OLSR-Viz (image below).
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/13.png" style="height: 342px; width: 500px;" />
<em>OLSR-Viz shows the four access points in an “L” shape to the right side of the gateway node. The two other nodes forming a smaller mesh network to the left side of the gateway node are access points located in the OTI office on the same mesh network. </em>
 
