---
layout: collection
title: Configurations communes
site_section: docs
sub_section: [cck,cck-installing]
pdf: cck/installing-configuring/3-Common_Configurations.pdf
pdf-all: true
categories: fr
created: 2013-11-06
changed: 2014-01-12
post_author: critzo
lang: fr
---
  <p><img alt="" src="/files/CCK_Common_Configs_Intro_0_0.png" /></p>

<section id="introduction">
<h2>Introduction</h2>

<p>Lors de la mise en place de votre réseau, vous devriez peut-être mettre en œuvre différentes topologies des routeurs. Les instructions au dessous ont pour objet de vous aider à installer le matériel de diverses façons, tout en assurant le bon fonctionnement de votre réseau. Accordez attention aux paramètres de chaque configuration puisque la modification d'une partie du réseau ou du nœud peut influencer la façon dont une autre partie fonctionne. Les configurations ci-dessous décrivent les paramètres qu'il faut changer pour vous assurer que votre réseau fonctionne comme envisagé. </p>
</section>
<section id="materials-and-supplies-needed">
<h3>Matériel et équipement nécessaires</h3>

<ol class="rteindent1">
<li>Une version papier de la configuration désirée, y compris les informations spécifiques au nœud sur lequel vous travaillez. </li>
	<li>Des informations concernant la configuration d'autres nœuds dans le réseau.</li>
</ol>
</section>
<section id="two-nodes-meshed-wirelessly">
<h2>Deux nœuds maillés sans fil. </h2>

<p>Ceci est une configuration commune. Il s'agit de deux nœuds sans fil - unités PicoStation M2 dans cet exemple - installés avec le firmware routeur de Commotion Wireless. Les nœuds pourraient être installés à l'intérieur, sur les fenêtres ou sur les toits. Tant qu'ils sont dans le champ de portée (environ 1000 pieds à l'extérieur ou dans le même bâtiment à l'intérieur), ils devraient mailler. </p>

<p>Plusieurs types de dispositifs peuvent être utilisés dans ce scénario. L'une des possibilités consiste à utiliser des nœuds sans fil omnidirectionnels, comme : unités Ubiquiti PicoStation M2, unités Ubiquiti Rocket équipées des antennes omnidirectionnelles, dispositifs Ubiquiti UniFi, routeurs domestiques comme Linksys ou dispositifs Buffalo, ou autres. Il est également possible d'utiliser des unités directionnelles équipées d'antennes sectorielles ou paraboliques, comme : dispositifs Ubiquiti NanoStation M-series, dispositifs Rocket équipées d'antennes sectorielles ou paraboliques, ou d'autres équipements point à point ou ceux destinés à être utilisés dans le secteur extérieur.   </p>

<p>Dans le schéma suivant :</p>

<ul>
<li><strong>(1)</strong> représente un nœud sans fil omnidirectionnel.</li>
</ul>
<p><img alt="" src="/files/CCK_CommonConfigs_OmniWireless_0_0.png" /></p>

<p><strong>Étapes de configuration :</strong></p>

<p>Les deux nœuds Commotion devraient mailler sans fil après le lancement de QuickStart. S'ils ne le font pas, assurez-vous que les paramètres sont identiques :</p>

<ul>
<li>Sous-réseau IP</li>
	<li>BSSID</li>
	<li>Canal</li>
	<li>Mot de passe de la liaison maillée (IBSS-RSN) ou mot de passe désactivé</li>
</ul>
<p>Ces paramètres sont tous visibles et modifiables dans le menu <strong>Commotion -&gt; Configuration manuelle du maillage</strong> dans le Panneau d'administration de votre nœud sans fil. </p>
</section>
<section id="two-wireless-nodes-meshed-over-an-ethernet-connection">
<h2>Deux nœuds sans fil maillés par l'intermédiaire d'une connexion Ethernet </h2>

<p>Dans certains cas, une section du maillage peut être plus éloignée que les autres. Un nœud sans fil doté d'une antenne directionnelle (comme un dispositif Ubiquiti NanoStation M-series) pourrait donc être necessaire pour assurer la liaison avec d'autres parties du maillage au voisinage à une distance d'un demi-mille à un mille. Si vous désirez étendre ce maillage à l'intérieur d'un bâtiment ou avoir une couverture omnidirectionnelle autour du bâtiment, il faudra ajouter au maillage un nœud omnidirectionnel, comme une Ubiquiti PicoStation M2. </p>

<p>Le maillage de ces dispositifs à l'aide d'Ethernet permet de rendre la connexion entre eux plus efficace. Les équipements que nous voulons mailler se situent dans le même bâtiment et sont maillés par l'intermédiaire d'un câble Ethernet. Cela permet d'augmenter la vitesse de la connexion entre ces dispositifs ainsi que la disponibilité de la bande passante sur le maillage. </p>

<p>Dans les schémas suivants :</p>

<ul>
<li>
<strong>(1)</strong> représente le premier nœud sans fil.</li>
	<li>
<strong>(2)</strong> représente le deuxième nœud sans fil. </li>
	<li>
<strong>(3)</strong> représente le câble Ethernet reliant les deux appareils.</li>
</ul>
<p><img alt="" src="/files/CCK_CommonConfigs_EthernetMesh1_0.png" /></p>

<p><strong>Étapes de configuration :</strong></p>

<ol class="rteindent1">
<li>Pour le premier nœud, allez à <strong>Réseau-&gt;Interfaces</strong> et sélectionnez « Modifier » sur l'interface Plug.</li>
	<li>Changez le « Type de protocole » de « Commotion » à « Statique ».</li>
	<li>Etablissez un IP statique sur l'interface dans un sous-réseau privé qui n'est pas encore en usage dans le réseau. Par exemple, vous pourriez configurer l'adresse IP à  <strong>172.16.100.1</strong> et le masque réseau à <strong>255.255.255.0</strong>.</li>
	<li>Enregistrez et appliquez ces paramètres.</li>
	<li>Sous l'onglet « Paramètres de pare-feu », réglez l'interface « Plug » à la zone pare-feu « Réseau maillé ».  </li>
	<li>Enregistrez et appliquez ces paramètres.</li>
	<li>Ensuite, naviguez à <strong>Services-&gt;OLSR</strong>. Allez à l'onglet « Annonces HNA ». S'il existe des configurations « HNA » pour l'interface Plug, supprimez-les.</li>
	<li>Ajoutez une section « Interface » pour l'interface « Plug ». Mettez-le en mode « Ether ». </li>
	<li>Enregistrez et appliquez ces paramètres.</li>
	<li>Répétez ces étapes avec le deuxième nœud. Assurez-vous de configurer une adresse IP différente de celle configurée ci-dessus dans le même sous-réseau. Dans l'exemple donné, vous pourriez mettre l'adresse à <strong>172.16.100.2</strong>.</li>
</ol>
<p><img alt="" src="/files/CCK_CommonConfigs_EthernetMesh2_0.png" /></p>
</section>
<section id="commotion-node-connected-to-a-home-or-business-router">
<h2>Nœud Commotion relié à un routeur domestique ou professionnel</h2>

<p>Ce scénario consiste à configurer un routeur intérieur pour fournir l'accès au maillage ou à l'Internet à l'intérieur d'un bâtiment. Ce bâtiment n'a pas de connexion Internet actuellement et le recevra du maillage. Si le noeud Commotion est branché au port WAN du routeur (conçu pour recevoir une adresse IP de la part d'un modem DSL ou câble généralement), une adresse IP sera attribuée au routeur. Le routeur pourra alors se connecter à Internet s'il existe une connexion quelque part dans le maillage. </p>

<p><strong>Comment ça fonctionne :</strong> Les nœuds Commotion tentent de recevoir automatiquement un bail DHCP (obtenir une adresse IP) sur leur port Ethernet quand il est branché au démarrage. S'ils n'y parviennent pas (comme dans le scénario actuel), les nœuds distribuent les adresses aux appareils connectés (le routeur intérieur par exemple). Il est donc important de s'assurer que les appareils sont branchés aux ports appropriés.</p>

<p>Dans le schéma suivant :</p>

<ul>
<li>
<strong>(1)</strong> représente le nœud sans fil d'extérieur du maillage.</li>
	<li>
<strong>(2)</strong> représente le dispositif sans fil d'intérieur utilisé par les clients pour se connecter.</li>
</ul>
<p><img alt="" src="/files/CCK_CommonConfigs_CommotionToRouterWAN_0.png" /></p>

<p><strong>Ce scénario devrait fonctionner sans configuration supplémentaire.</strong></p>

<p>Assurez-vous que le nœud Commotion est branché au port WAN du routeur. Le port WAN est le port de connexion « entrante », où  un utilisateur à domicile ou un utilisateur professionnel branche typiquement un modem DSL ou câble. Pour la plupart des utilisateurs à domicile, ce port se trouve en plastique d'une autre couleur, comme le bleu ou le jaune. Sinon, il est tout simplement marqué comme « WAN ».</p>
</section>
<section id="commotion-node-connected-to-a-gateway">
<h2>Nœud Commotion relié à une passerelle</h2>

<p>Les nœuds Commotion tentent de recevoir automatiquement un bail DHCP sur leur port câblé lorsqu'il est branché. S'ils n'y parviennent pas, ils distribuent les adresses aux appareils connectés. Il est donc important de s'assurer que <strong>les appareils sont activés dans le bon ordre</strong>.</p>

<p>Dans le schéma suivant :</p>

<ul>
<li>
<strong>(1)</strong> représente le nœud sans fil d'extérieur du maillage.</li>
	<li>
<strong>(2)</strong> représente le routeur intérieur domestique ou professionnel.</li>
	<li>
<strong>(3)</strong> représente le modem DSL ou câble du fournisseur d'accès à Internet (FAI).</li>
	<li>
<strong>(4)</strong> représente la connexion à Internet.</li>
</ul>
<p><img alt="" src="/files/CCK_CommonConfigs_CommotionGateway_0.png" /></p>

<p><strong>Ce scénario devrait fonctionner sans configuration supplémentaire.</strong></p>

<p>Vérifiez que le nœud Commotion est branché au port « LAN » du routeur. Mais avant cela, assurez-vous que le routeur est pleinement fonctionnel. En cas de perte d'alimentation électrique ou d'une interruption de connectivité, le routeur doit être allumé avant tout.</p>

<p>Si le nœud Commotion démarre avant le routeur, il n'obtiendra peut-être pas d'adresse IP auprès du routeur. Il passera en mode de réception sur le réseau et ne pourra pas partager la connexion Internet depuis le routeur. Réinitialisez alors le nœud une fois que le routeur est opérationnel.  </p>
</section>
<section id="several-commotion-nodes-connected-through-a-switch-or-router">
<h2>Nœuds Commotion reliés par le biais d'un switch ou d'un routeur</h2>

<p>Commotion peut être utilisée conjointement avec différents équipements pour des installations plus complexes. Les instructions suivantes s'adressent au cas le plus simple tel qu'illustré dans le schéma ci-dessous :</p>

<ul>
<li>
<strong>(1)</strong> and <strong>(2)</strong> représente les nœuds sans fil Commotion. Ils pourraient être des appareils omnidirectionnels ou directionnels.</li>
	<li>
<strong>(3)</strong> représente un switch non administré. Ceci relie tous les dispositifs de cet exemple aux connexions Ethernet.</li>
	<li>
<strong>(4)</strong> représente la connexion à Internet ou un autre réseau. Cela pourrait être un modem DSL ou câble, un routeur ayant accès à un autre réseau, un pont point à point ou bien une connexion d'un autre type. Ce n'est pas un dispositif Commotion. Nous supposons que c'est le seul serveur DHCP (fournisseur d'accès à Internet) connecté au switch.</li>
	<li>
<strong>(5)</strong> représente un point d'accès intérieur (facultatif) permettant aux utilisateurs de relier les ordinateurs portables, les téléphones ou d'autres appareils.</li>
</ul>
<p><img alt="" src="/files/CCK_CommonConfigs_CommotionManyNodes.png" /></p>

<p><strong>Cela devrait fonctionner automatiquement sans configuration supplémentaire.</strong></p>

<p>Vérifiez que le serveur DHCP (le routeur) initialise avant tout. Sinon, des résultats inattendus pourraient s'ensuivre. Si vous vous inquiétez d'une panne d'électricité ou de l'ordre de démarrage, songez à suivre les instructions ci-dessous :
 </p>

<ol class="rteindent1">
<li>A partir de l'interface web d'administration, naviguez à <strong>Services-&gt;OLSR</strong>.</li>
	<li>Au bas de la page, dans la section « Interfaces », cliquez sur le bouton « Ajouter ».</li>
	<li>A la page suivante, sélectionnez l'interface « Plug » sous « Réseau ». Ensuite, mettez-le en mode « Ether ». </li>
	<li>Enregistrez et appliquez.</li>
</ol>
</section>
<section id="commotion-nodes-and-a-client-access-point-connected-through-a-switch">
<h2>Nœuds Commotion et un point d'accès client reliés par le biais d'un switch</h2>

<p>Cet exemple concerne plusieurs nœuds Commotion (deux nœuds ou plus) sur le toit d'un bâtiment connectés au maillage. Il y a aussi un routuer client à l'intérieur du réseau. Aucun autre routeur ou dispositif ne se trouve sur le réseau pour générer les adresses IP  à partir du serveur DHCP.  </p>

<p>Ici, le problème est que le routeur domestique (non Commotion) s'attend à obtenir un bail DHCP. Afin de garantir que les nœuds Commotion ne distribuent pas d'adresses IP, il est important de leur attribuer des adresses IP statiques. Il est également nécessaire d'attribuer une adresse IP statique au routeur domestique pour s'assurer qu'il obtient une connexion Internet depuis l'un des nœuds Commotion.</p>

<p>Dans le schéma suivant :</p>

<ul>
<li>
<strong>(1)</strong> and <strong>(2)</strong> représente les nœuds Commotion - des unités NanoStation M2 dans cet exemple.</li>
	<li>
<strong>(3)</strong> représente un switch non administré. Ceci relie tous les dispositifs aux connexions Ethernet.</li>
	<li>
<strong>(4)</strong> représente un point d'accès intérieur permettant aux utilisateurs de relier les ordinateurs portables, les téléphones ou d'autres appareils.</li>
</ul>
<p><img alt="" src="/files/CCK_CommonConfigs_CommotionClientAP.png" /></p>

<p><strong>Étapes de configuration pour les dispositifs Commotion :</strong></p>

<ol class="rteindent1">
<li>Pour le premier nœud, allez à <strong>Réseau-&gt;Interfaces</strong> et sélectionnez l'interface « Plug ».</li>
	<li>Changez le « Type de protocole » de « Commotion » à « Statique ».</li>
	<li>Etablissez un IP statique sur l'interface dans un sous-réseau privé qui n'est pas encore en usage dans le réseau. Par exemple, vous pourriez configurer l'adresse IP à  <strong>172.16.100.1</strong> et le masque réseau à <strong>255.255.255.0</strong>.</li>
	<li>Enregistrez et appliquez ces paramètres.</li>
	<li>Sous l'onglet « Pare-feu », réglez l'interface « Plug » à la zone pare-feu « Réseau maillé ».  </li>
	<li>Enregistrez et appliquez ces paramètres.</li>
	<li>Ensuite, naviguez à <strong>Services-&gt;OLSR</strong>. S'il existe des configurations « HNA » pour l'interface Plug, supprimez-les.</li>
	<li>Ajoutez une section « Interface » pour l'interface « Plug ». Mettez-le en mode « Ether ». </li>
	<li>Enregistrez et appliquez ces paramètres.</li>
	<li>Répétez ces étapes avec le deuxième nœud. Assurez-vous de configurer une adresse IP différente de celle configurée ci-dessus dans le même sous-réseau. Dans l'exemple donné, vous pourriez mettre l'adresse à <strong>172.16.100.2</strong>.</li>
</ol>
<p><strong>Étapes de configuration pour le routeur domestique :</strong></p>

<ol class="rteindent1">
<li>A la page de configuration WAN du routeur, sélectionnez « Statique » pour le type de connexion.</li>
	<li>Configurez l'adresse IP à <strong>172.16.100.3</strong> et le masque réseau à <strong>255.255.255.0</strong>.</li>
	<li>Attribuez l'adresse de la passerelle, comme <strong>172.16.100.1</strong>, à l'un des nœuds Commotion. Attribuez la même adresse à l'entrée DNS.</li>
</ol>
</section>
<section id="wireless-gateway-connection">
<h2>Connexion passerelle sans fil</h2>

<p>Dans cet exemple, les nœuds Commotion tentent d'utiliser un point d'accès sans fil (non associé avec le maillage) en tant qu'un portail Internet. </p>

<p>Dans le schéma suivant :</p>

<ul>
<li>
<strong>(1)</strong> représente le nœud sans fil du maillage. </li>
	<li>
<strong>(2)</strong> représente un point d'accès domestique ou professionnel que vous essayez d'utiliser pour vous connecter.</li>
	<li>
<strong>(3)</strong> représente la connexion à Internet que vous voulez partager.</li>
</ul>
<p><img alt="" src="/files/CCK_CommonConfigs_WirelessGateway.png" /></p>

<p>Il n'existe actuellement aucune instruction pour cette configuration et <strong>il n'est pas certain qu'elle va fonctionner</strong>.</p>
</section>
<section id="meshing-laptops-smartphones-and-routers">
<h2>Mailler les ordinateurs portables, les smartphones et les routeurs </h2>

<p><img alt="" src="/files/CCK_Common_Configs_Laptop_Phone_Router.png" /></p>

<p><strong>Étapes de configuration :</strong></p>

<p>Commotion Linux et Android ne supportent actuellement pas les connexions maillées chiffrées. Il faut donc désactiver le chiffrement sur les routeurs au sein de la liaison maillée. </p>

<ol class="rteindent1">
<li>Naviguez à <strong>Réseau -&gt; Wi-Fi</strong>.</li>
	<li>Sélectionnez « radio0: Ad-Hoc [commotionwireless.net] ».</li>
	<li>Dans la section « Configuration interface », cliquez sur l'onglet « Sécurité sans fil ».</li>
	<li>Dans le menu déroulant « Chiffrement », sélectionnez « Pas de chiffrement ». </li>
	<li>Allez à la fin de la page et cliquez sur « Enregistrer et appliquer ».</li>
	<li>Patientez jusqu'à ce que le système soit mis à jour. </li>
</ol>
<p>Les appareils doivent également avoir le même : </p>

<ul>
<li>Sous-réseau IP</li>
	<li>BSSID</li>
	<li>Canal sans fil</li>
</ul>
</section> 
