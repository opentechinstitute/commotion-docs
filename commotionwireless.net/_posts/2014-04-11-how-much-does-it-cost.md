---
layout: blog
title:  How much does it cost to build a Commotion network?
categories: [planning,price,budgeting,installation]
created: 2014-04-11
changed: 2014-04-11
teaser_image: 
post_author: Andy Gunn
lang: en

---

If you are thinking of building a Commotion wireless network, no matter what the size, one of your first questions might be "how much does it cost?" When planning any project, the total cost (now and in the future) is often a big concern, and building a wireless network is no different. OTI has written about this before, but we want to add some detailed information to our colleague [Seamus’ earlier blog post on the subject](/blog/2012/11/14/cost-mesh-networks/).

The answer we at OTI often give is - "it varies!" The cost depends on the scale of the network you want to build, but there are three major factors:

<table>
 <tr>
 <td align="center"><b>Equipment</b>
  <img src="/files/posts/How-much-does-it-cost-icon-equipment.png" alt="Equipment icon" width="125"> 
 </td>
 <td align="center"><b>Labor</b>
  <img src="/files/posts/How-much-does-it-cost-icon-labor.png" alt="Labor icon" width="125"> 
</td>
 <td align="center"><b>Bandwidth</b>
  <img src="/files/posts/How-much-does-it-cost-icon-bandwidth.png" alt="Bandwidth icon" width="125"> 
</td>
 </tr>
</table>

Let’s look at each of these items, then give a few examples of some network types and the costs to build each.

### Equipment

The basic necessity for building a Commotion wireless network is two or more routers. For a large-scale neighborhood or town-wide network, it may take many dozens of routers! For such networks, outdoor grade equipment such as the Ubiquiti PicoStation M2, NanoStation M2 and Rocket M2 work well with Commotion. Most of the time, every building you want to connect to the network will need a rooftop router. That router needs a few other pieces of equipment (such as some permanent mounting hardware and outdoor Ethernet cable providing power and data connections) to work properly and provide connections to people inside the building. Indoor routers can extend the signal from the rooftop network to people’s personal devices - such as desktops, laptops and smartphones.

A diagram of all the pieces is below:

<table>
 <tr>
 <td><img src="/files/posts/How-much-does-it-cost-building-equipment.png" alt="Building equipment diagram" width="300">
 </td>
 <td>
<br>
An example of a single building’s necessary equipment and costs:
1. Commotion node (router)
Between $80 and $90

2. Mounting hardware
Between $25 and $125

3. Ethernet cabling
Between $20 and $50

4. Power supply
Included with outdoor router

5. Indoor router (optional)
Approximately $50
</td>
 </tr>
</table>


So, the total equipment cost per building can range from between $125 and $300 or more. More powerful routers or multiple routers per site can improve performance, but does increase the cost. You can estimate around $125 to $150 per building for most set-ups. In some cases the costs can be cut by improvising -- for example, placing routers inside windows instead of on rooftops can work in some cases; or you can cut costs by building your own mounts, re-using cables, or not using expensive outdoor cable. Keep in mind some of these cost-saving measures can lead to more maintenance later.

If you would like more detail on the costs for equipment and hardware, there are several [Commotion Construction Kit](http://commotionwireless.net/docs/cck/) (CCK) documents with related information:

* [Gather Tools and Wireless Equipment](/docs/cck/building-mounting/gather-tools-and-wireless-equipment)
* [Learn About Rooftop Mounts](/docs/cck/building-mounting/learn-about-rooftop-mounts)

### Labor

All projects take time, especially construction projects. Building a network is a small to medium scale construction project, and should be treated as such. It may involve purchasing hardware and tools to complete the installations. It will often involve working on rooftops, running outdoor Ethernet cables from those rooftops to the insides of buildings, and setting up community members’ computers to access the network -- and there’s all the planning that goes into setting up each of these steps. There are many small tasks, and installing a single site may take between one and four hours, depending on the complexity. Many of the steps are discussed in [Prep and Install Rooftop Nodes](http://commotionwireless.net/docs/cck/building-mounting/prep-install-rooftop-nodes) in the CCK.

<img src="/files/posts/How-much-does-it-cost-group-labor.png" alt="Installation group" width="500">

The good news is that most, if not all, of the work can be done by you and other volunteers. Your community is likely already home to many skilled individuals already. We recommend assessing who may be able to help with the project and reaching out to them early. For some guidance with this, please consult the [Identify Neighborhood Skills](http://commotionwireless.net/docs/cck/planning/identify-neighborhood-skills) section of the CCK.

It’s important to note that even if people are working on a volunteer basis, that doesn’t mean that their labor is "free." People who donate their time to planning and building a network are taking time away from other things (like paid work or spending time with their families). It’s important to account for this in your planning, since it may be hard for people to keep helping in the long run without some support, or without getting something back for their hard work. Also, plan for costs like booking meeting spaces, website hosting or other organizational expenses, as well as food, gas, etc. Finally, if you anticipate the network growing, you may need to plan to build in trainings so that there are enough people around to maintain and expand it.  

Of course, there may also be some cases where you cannot do all of the work yourself. Perhaps you or your project partners are not comfortable working on rooftops. Perhaps some interested neighbors would prefer the work is done by someone licensed and insured. Maybe some sites are too dangerous for volunteers to work on (such as very steep or difficult to access rooftops). OTI recommends consulting and hiring qualified professionals in these cases. Licensed electricians and contractors have the necessary tools and equipment to handle most installations, and should be willing to work with you on such projects. The costs can vary widely, but expect additional per-building costs between $100 and $250 or more, depending on the complexity.

### Bandwidth

Commotion networks do not require a connection to the Internet to run. With some additional configuration and a computer running some server applications, you can provide services across the network without the additional cost of bandwidth. However, we expect some networks may want to provide Internet access if it is possible. Commotion is designed to share connections to the Internet (gateways) across the entire network. It is as simple as plugging in a DSL, cable, or other gateway connection into the Commotion node.

<img src="/files/posts/How-much-does-it-cost-gateway-connection.png" alt="Gateway connection" width="500">

Keep in mind that sharing connections to the Internet may not be allowed - many Internet Service Providers (ISPs) don’t allow sharing (check your Terms of Service if you are curious). You may run the risk of having your service disconnected if you violate the contract. Some countries or states may have laws about sharing Internet connections as well.

There are other options for sharing connections: business-class or dedicated ISP connections have fewer or no restrictions on the number of users or sharing of the connection. These typically are more expensive to install and use, but can offer high-volume dedicated bandwidth, and provide contracts with service guarantees. OTI recommends researching these connections for use in your network if you are planning on distributing Internet access.

A network may also need multiple distributed ISP connections to provide enough bandwidth for all of the users. It’s also best to limit the number of "hops" (the number of devices the information has to pass through to get from the Internet to the end user) to about 2 or 3, so keep that in mind when designing the network. A rule of thumb is that for every three to five client Commotion routers (i.e. nodes that do not have gateways), there should be one Commotion router with a gateway connection.

So, if you want to offer Internet service on your network, and if every connection to the Internet costs between $50 and $250 (for very high capacity connections) per month, you should consider that in the budget.

### Example Networks and Budgets

Below are two different scenarios as examples of how much things might cost when you are building your network.

#### House to House Network

First, consider the following scenario: you and three neighbors want to share a connection to the Internet, or access to a local application server for chat and local games.

<img src="/files/posts/How-much-does-it-cost-small-Network.png" alt="Small scale network" width="500">

Looking at this network, there are four routers, and for the purposes of the example, a single connection to the Internet. For this example, we will use omnidirectional outdoor routers, such as the Ubiquiti PicoStation M2, and simple rooftop mounts. There is a single business-class Cable connection to the Internet shared on the network. Each network participant will also have a simple home router inside their house to connect their computers and smartphones. Two participants already own these routers.

**Equipment Costs**
<table>
 <tr>
 <td><b>Item</b></td>
 <td><b>Quantity</b></td>
 <td><b>Cost</b></td>
 <td><b>Subtotal</b></td>
 </tr>
 <tr>
 <td>Routers</td>
 <td>4</td>
 <td>$80</td>
 <td>$320</td>
 </tr>
 <tr>
 <td>Mounting hardware</td>
 <td>4</td>
 <td>$40</td>
 <td>$160</td>
 </tr>
 <tr>
 <td>Ethernet cables</td>
 <td>4</td>
 <td>$20</td>
 <td>$80</td>
 </tr>
 <tr>
 <td>Home routers</td>
 <td>2</td>
 <td>$50</td>
 <td>$100</td>
 </tr>
</table>
**Equipment total: $660**

For the installation, the network participants will do all of the work themselves. So, there aren’t any costs associated with installation, other than time. Of course - everyone’s time has value, so we will still calculate how many hours everyone worked on the project.

**Labor Costs**
<table>
 <tr>
 <td><b>Item</b></td>
 <td><b># of People</b></td>
 <td><b>Time Required</b></td>
 <td><b># of Sites</b></td>
 <td><b>Subtotal</b></td>
 </tr>
 <tr>
 <td>Installing Commotion</td>
 <td>1</td>
 <td>30 minutes per router</td>
 <td>4</td>
 <td>2 hours</td>
 </tr>
 <tr>
 <td>Installing Routers</td>
 <td>2 per site</td>
 <td>2 hours per site</td>
 <td>4</td>
 <td>16 hours</td>
 </tr>
 <tr>
 <td>Configuring applications</td>
 <td>2</td>
 <td>3 hours</td>
 <td>1</td>
 <td>6 hours</td>
 </tr>
</table>
**Time total: 24 people-hours**

The bandwidth must be considered as well. For this example, only one year of service is considered. These are recurring "operational" costs that every network must consider how to sustain. In this example, the network participants are splitting the cost of the business-class ISP connection evenly.

**Bandwidth Costs**

<table>
 <tr>
 <td><b>Connection</b></td>
 <td><b>Cost per month</b></td>
 <td><b># of months</b></td>
 <td><b>Subtotal</b></td>
 </tr>
 <tr>
 <td>Cable ISP</td>
 <td>$100</td>
 <td>12</td>
 <td>$1200</td>
 </tr>
</table>
**Cost per participant per year: $300**

The initial, first-year costs of the network are **$1860**, which includes all of the equipment and the cost of the bandwidth. Split four ways, this comes to $465 and 6 hours of effort for each participant. Subsequent years are only $300 per participant, as there are no additional hardware costs. There may be additional costs or hours spent working associated with maintenance and troubleshooting, if there are any problems.


#### Neighborhood or Small-town Network

Next, consider the following scenario: a neighborhood or small town wants to create a network that covers the entire area. There will be twelve initial participants in the network, but through outreach and word-of-mouth, the organizers anticipate the network will grow rapidly.

<img src="/files/posts/How-much-does-it-cost-neighborhood-network.png" alt="Medium scale network" width="500">

Looking at this network, there are two types of sites - two tower sites, and twelve neighborhood buildings. There will be two types of routers, and for the purposes of the example, two connections to the Internet. For the neighborhood buildings, omnidirectional outdoor routers, such as the Ubiquiti PicoStation M2, and simple rooftop mounts are used. The tower sites will have more powerful Ubiquiti Rocket M2 routers with sector antennas to provide wider coverage and many mesh connections to the ISP gateways. These gateways are dedicated, high-performance ISP connections to the Internet. Each network participant will also have a simple home router inside their house to connect their computers and smartphones. Six participants already own these routers.

**Equipment Costs**
<table>
 <tr>
 <td><b>Item</b></td>
 <td><b>Quantity</b></td>
 <td><b>Cost</b></td>
 <td><b>Subtotal</b></td>
 </tr>
 <tr>
 <td>Tower routers</td>
 <td>2</td>
 <td>$250</td>
 <td>$500</td>
 </tr>
 <tr>
 <td>Tower mounting</td>
 <td>2</td>
 <td>$100</td>
 <td>$200</td>
 </tr>
 <tr>
 <td>Participant Routers</td>
 <td>12</td>
 <td>$80</td>
 <td>$960</td>
 </tr>
 <tr>
 <td>Mounting hardware</td>
 <td>12</td>
 <td>$40</td>
 <td>$480</td>
 </tr>
 <tr>
 <td>Ethernet cables</td>
 <td>12</td>
 <td>$20</td>
 <td>$240</td>
 </tr>
 <tr>
 <td>Home routers</td>
 <td>6</td>
 <td>$50</td>
 <td>$300</td>
 </tr>
</table>
**Equipment total: $2680**

For the installation, the tower sites must be installed by professionals, but the network participants can install all of the small building equipment themselves. So there aren’t any costs associated with those installations, other than time. Of course - everyone’s time has value, so we will still calculate how many hours everyone worked on the project.

**Labor Costs**
<table>
 <tr>
 <td><b>Item</b></td>
 <td><b># of People</b></td>
 <td><b>Time Required</b></td>
 <td><b># of Sites</b></td>
 <td><b>Subtotal</b></td>
 </tr>
 <tr>
 <td>Tower installations</td>
 <td>3</td>
 <td>4 hours per site</td>
 <td>2</td>
 <td>$1000</td>
 </tr>
 <tr>
 <td>Installing Commotion</td>
 <td>1</td>
 <td>30 minutes per router</td>
 <td>14</td>
 <td>7 hours</td>
 </tr>
 <tr>
 <td>Installing Routers</td>
 <td>2 per site</td>
 <td>2 hours per site</td>
 <td>12</td>
 <td>48 hours</td>
 </tr>
 <tr>
 <td>Configuring gateway</td>
 <td>1</td>
 <td>1 hour per site</td>
 <td>2</td>
 <td>2 hours</td>
 </tr>
</table>
**Labor expense: $1000 **(estimated)
**Time total: 57 people-hours**

The bandwidth must be considered as well. For this example, only one year of service is considered. These are recurring "operational" costs that every network must consider how to sustain. In this example, the network participants are splitting the cost of the dedicated ISP connection evenly. There may be installation costs associated with the high-performance connection as well, as the tower sites may not have existing Ethernet or Fiber connections to the provider. This could be as much as $1000 per site.

This network may require additional work setting up participant’s devices - such as home routers, computers, or smartphones. "Help desk" activities such as this may be necessary for helping some people connect to the network. As networks grow in size, this will become a more and more important consideration.

**Bandwidth Costs**
<table>
 <tr>
 <td><b>Connection</b></td>
 <td><b>Cost per month</b></td>
 <td><b># of months</b></td>
 <td><b># of connections</b></td>
 <td><b>Subtotal</b></td>
 </tr>
 <tr>
 <td>Dedicated ISP</td>
 <td>$250</td>
 <td>12</td>
 <td>2</td>
 <td>$6000</td>
 </tr>
</table>
**Cost per participant per year: $500**

The initial, first-year costs of the network are **$9680**, which includes all of the equipment, the installation, and the cost of the bandwidth. Split twelve ways, this comes to $806 and 5 hours of effort for each participant. Subsequent years are only $500 per participant, as there are no additional hardware costs. The network organizers anticipate that these shared costs will decrease as time goes on and more people join the network. There may be additional costs or hours spent working associated with maintenance and troubleshooting, if there are any problems.

Keep in mind these budgets are just examples, and contain a number of variables that could change as the projects progress through planning and implementation. Equipment or bandwidth costs will vary, or you could decide to hire trainers to come in as an initial investment towards long-term network sustainability, or rooftops could be dangerous and require expert contractors for installation. Planning ahead and overestimating costs in advance will help keep you from straining your resources!

### Other Resources

OTI is always working on more information and planning documents for networks, as well as activities you can run through with your Community members in the [Commotion Construction Kit](http://commotionwireless.net/docs/cck/). OTI is working to provide some additional budgeting worksheets in the future, so check back here for updates!


<hr>
1. Ethernet icon designed by Lemon Liu from the [Noun Project](http://thenounproject.com/).
2. Building and equipment diagram by the [Work Department](http://www.theworkdept.com/).