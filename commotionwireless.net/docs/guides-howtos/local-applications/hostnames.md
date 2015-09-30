---
layout: default
title: Hostnames for Local Application Servers
site_section: docs
sub_section: [guides]
categories: 
created: 2015-02-25
changed: 2015-02-25
post_author: Dan Staples
lang: en
---

<img style="float:right;height:150px;width:150px;margin:0 0 10px 10px" src="/files/commotion-logo-.png" class="img-responsive">

Sometimes, instead of using the application portal, you may want to just connect to a local application using a well-known name. Just as you would type the name of your favorite website (for example "democracynow.org") into the address bar of your browser in order to visit that website, you can assign easy-to-remember names (called "hostnames") to local application servers on your mesh network.

In order to connect hostnames to local applications, nodes in your network need to be able to translate a hostname into an IP address, which nodes use to connect to each other (See the [Learn Networking Basics](/docs/cck/networking/learn-networking-basics/) CCK module to learn about IP addresses). Looking up the IP address that corresponds to a hostname is called "resolving." There are currently three different ways for nodes in your network to resolve hostnames, each with advantages and disadvantages:

## 1. Manually editing the "hosts" file
Each node has a file called "hosts", that lists hostnames and the corresponding IP addresses. When a user connected to a node tries to access an application using a hostname, the node first checks its hosts file to see whether the requested hostname is listed. If the hostname is listed, it returns the corresponding IP address in the file, which the user will then use to connect to the application; if it's not listed, the node uses another method to attempt to resolve the hostname, which we'll describe in the next method below.

**Advantages:**

* Simplicity. There's no need to set up any additional mechanisms for hostname resolution; you simply need to add the hostname and IP address of your application server to a built-in file on each node.
* Redundancy/Resilience. Since the settings are contained on each node, there is no one point of failure in the network, as each node will offer this information to its connected clients.

**Disadvantages:**

* Time consuming to set up. When you have a large number of nodes in your network, manually editing a file on each device can take a long time. If you want to add more hostnames or edit the current hostnames, you have to make the changes to every node in the network individually.

If your network doesn't change often and has a small number of nodes, this may be a good solution for you.

### Configuration Instructions
You will first need to SSH in to the node, from the terminal on your computer. If you are connected to the node via WiFi or Ethernet, the node you are connected to should respond to the name "thisnode," which is the hostname we will use in all of the examples.

For this example, we create a hostname for a chat server on the network. Let's call it "chat.mesh".

From your Terminal program (for example: the Terminal app in Mac OSX, PuTTY in Windows, or whatever the default is in your distribution of Linux), SSH into the node using the `ssh root@thisnode` command from a Terminal emulator, or set up the Host as "thisnode" and user to "root" in the PuTTY settings. The terminal output should look something like:

    user@terminal:~$ ssh root@thisnode
    The authenticity of host 'thisnode (169.254.6.53)' can't be established.
    RSA key fingerprint is 00:a3:58:57:6a:9b:d5:7a:43:05:43:d8:8e:03:55:f3.
    Are you sure you want to continue connecting (yes/no)? yes
    Warning: Permanently added 'thisnode,169.254.6.53' (RSA) to the list of known hosts.
    root@thisnode's password: 

You will then see a text banner about Commotion, followed by a command prompt:

    root@testbed-1-3684304437:~# 

<div class="sidebar">
The RSA key fingerprint will be different on every node, so you may be presented with an error message. There is a good reason for this, but the explanation it is a bit outside this topic, so just follow the instructions to fix the error. The second thing to note is that the cursor will not move as you type the password for the node. The Commotion banner is your sign that you're logged in.
</div>

Now that we are logged into the node, we want to edit the hosts file. On a Commotion node (as well as most Linux and Mac computers) the hosts file is located at `/etc/hosts`. The only editor available on a Commotion node by default is vi (pronounced vee-eye), so that is what we will use. If you're unfamiliar with vi, you may want to [read a book](https://en.wikibooks.org/wiki/Learning_the_vi_Editor), or just [glance at a cheat sheet](http://www.lagmonster.org/docs/vi.html). From the command prompt on the node, type `vi /etc/hosts` which should look like this:

    root@testbed-1-3684304437:~# vi /etc/hosts

Hit Enter, which will open an editor and show you the contents of the hosts file, which will look similar to this:

    127.0.0.1 localhost
    169.254.6.53 thisnode

These two lines show the definitions for two hostnames. The first, "localhost", has a special meaning on Linux devices, and always resolves to the device you are currently on. The second, "thisnode", is added by Commotion, and resolves to the specific node you are logged in to.

We will now add an entry to the hosts file for our chat server. Inside vi, use the arrows to move down to the bottom of the file then use the command `i` to insert text. Type in the IP address of your chat server (10.6.53.120 in our example) and the hostname:

    10.6.53.120 chat.mesh

Then hit the `Enter` key. After that, hit the `ESC` key, `w` to save the file, then the `q` key to exit the editor, followed by the `Enter` key. The updated hosts file should look something like this:

    127.0.0.1 localhost
    169.254.6.53 thisnode
    10.6.53.120 chat.mesh

Once you have saved the file, you will need to restart the dnsmasq tool, so that the addition can take effect. Run the command:

    root@testbed-1-3684304437:~# /etc/init.d/dnsmasq restart

That is it for one node. All you need to do is type `exit` in the terminal and hit `Enter` to log out of the node, and move on to the next one, until all of the nodes in the network have been modified.

## 2. Set up a central DNS server
When nodes try to resolve a hostname not listed in their hosts file, the node then attempts to resolve the hostname using DNS. The Domain Name System (DNS) allows computers and routers to resolve hostnames belonging to a computer somewhere on the Internet, using a series of "name servers". Name servers are just networked computers that keep databases correlating hostnames to IP addresses, similar to a hosts file. Each name server is in charge of a certain specific subset of hostnames, for example all the hostnames that end with `.democracynow.org`.

On a mesh network, you can set up a DNS server and tell all the nodes to use that computer as their name server. Then when the nodes want to resolve a hostname, they simply ask your DNS server.

If your network is connected to the Internet, it is recommended to place it as close to the Internet gateway as possible. That way, when a node is trying to resolve a hostname for a website on the Internet instead of a hostname on the local network, the DNS server has reliable access to the Internet to resolve the request.

**Advantages:**

* All names are in one place. When you want to add or update hostnames on the network, you only need to make the change on the name server instead of on every individual node.

**Disadvantages:**

* DNS servers can be complicated to install and set up.
* There is a single point of failure, meaning that if the DNS server, or the node that it is connected to, goes offline, the entire network will not be able to resolve your custom hostnames. 

If you have a very large network, or frequently need to add or change hostnames, setting up a central DNS server may be the best option.

### Configuration Instructions
To set up a custom DNS server on your network, you will need to do two things:

1. Install DNS software on a computer or one of the wireless nodes on the network.
2. Change the DNS server information on each node in the network.

How do you decide whether to run DNS on a computer or on one of the wireless nodes in your network?

* Does the node closest to the gateway have a reliable network connection? While DNS is one of the lower bandwidth Internet services, keep in mind that every client and node on the network will be going to this node for DNS lookups.
* Are all of your local applications running on the same server? If you already have a server on the network where most or all of your apps are, then it might make sense to put the DNS software there.

As a general guideline, if you have a computer running local applications on the network close to a connection to the Internet, install DNS on that. If you don't, but some of the wireless routers in your network have enough memory and a fast processor (such as a Ubiquiti Rocket or TP-Link  WDR4300), install it on that.

#### Setting up DNS on your application server:
`dnsmasq` is the program that allows a Commotion node to give out IP addresses with DHCP, and allows the node to act as a DNS server. It is pronounced "D-N-S mask". It is already installed on every Commotion node, but you can install it on any Linux computer that may be hosting your local applications already. On Debian, Ubuntu, or Mint, the command to install dnsmasq is:
    sudo apt-get install dnsmasq
This should install the program and set it up to run when the computer boots.

Next, we will edit the dnsmasq configuration file. Open up your favorite text editor on the server (vi will work fine), and edit the file /etc/dnsmasq.conf. For example:

    vi /etc/dnsmasq.conf

Remove all the text in the file (in vi this can be done by typing `dG` from the first line of the file), and then type or paste in the following configuration directives:

    domain-needed
    bogus-priv
    no-hosts
    expand-hosts
    domain=mesh.local

Finally, add in the hostname/IP address entries you want in the form `address=/<HOSTNAME>/<IP ADDRESS>`. Once you are done, your configuration file will look something like this:

    domain-needed
    bogus-priv
    no-hosts
    expand-hosts
    domain=mesh.local
    address=/chat.mesh/10.6.53.120

In the above example, we added a domain name called "chat.mesh", at the IP 10.6.53.120. When people enter "chat.mesh" in their web browsers, they will be taken to that IP address. You can add as many names to this file as you have servers or applications.

Save the configuration file and restart dnsmasq with the following command:

    sudo service dnsmasq restart

#### Setting up DNS on a node:

Once you are SSH'ed into the node that you are using as a DNS server, type:

    vi /etc/config/dhcp

into the terminal and hit `Enter`. This will open an editor. At the bottom of the file add something similar to this:

    config domain
	    option name 'chat.mesh'
	    option ip '10.6.53.12'

Make sure you change "chat.mesh" to whatever name you want to use, and change the IP (10.6.53.12) to the correct IP address of your application server.

You can assign as many names on the network as you want, both to unique IP addresses or to the same IP address - every local application that can have its own name. To make the changes take effect you will need to restart dnsmasq. To do this simply type:

    /etc/init.d/dnsmasq restart

Then press `Enter`. Your application server or Commotion node is now acting as a DNS server.

### Changing DNS server information on each node
Now that you have a DNS server setup and running on your network, you will need to have every other node point at your DNS server. Unless the IP address of your DNS server changes, you will only need to make this change once per node.

If the DNS system is similar to a phone book (where you look up a name and get a number), pointing a node to a DNS server is similar to telling someone which phone book to use. To prepare, make sure that you have the IP of DNS server handy. If you are using a node as your DNS server, it is probably better to use the mesh IP (which will start with `100.`).

To make this change, you will again have to SSH into a node. Once logged in to a node, you will have to edit two configuration files. First type:

    vi /etc/config/network

and in the editor find the stanza with a line that says `option class 'mesh'` and put your cursor at the bottom of that stanza. The entire stanza will look something like this:

    config interface 'Commotion'
	option class 'mesh'
	option proto 'commotion'
	option profile 'commotion'
	list dns '100.6.53.1'

The only line that should not already be there is the `list dns` line. All you should need to add is `list dns '100.6.53.1'` where the IP matches the IP of your DNS server.

In the next configuration file you will need to change one option for local DNS to work. Type:

    vi /etc/config/dhcp

and look for this line in the dnsmasq stanza:

	    option rebind_protection '1'

Change the `1` to a `0` and save the file. These changes will take effect after you reboot the node.

## 3. Using the Commotion applications portal
If you don’t need to use hostnames on your network, you can simply use the Commotion applications portal to allow users to connect to local applications. Using the local applications portal is described in the [Local Applications in Commotion](/docs/guides-howtos/local-applications/) guide. The advantage of the local applications portal is that you only need to enter the application’s information once, and it will be automatically announced to the rest of the network. The disadvantage to this approach is that instead of using an application-specific hostname, users will need to first connect to the applications portal via the captive portal (if your network uses one), or by going to `http://thisnode` in their browser. It should also be noted that the applications portal only supports web applications.

Before you decide to assign a hostname to an application server on your network, you will want to consult with anyone else running applications on the network to make sure no one else is using the same name; currently, there is no automated mechanism in Commotion for resolving conflicting hostnames.