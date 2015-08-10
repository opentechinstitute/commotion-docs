---
layout: collection
title: Intervenir pour régler un problème dans votre noeud sans-fil
site_section: docs
sub_section: [cck,cck-installing]
pdf: cck/installing-configuring/4-Troubleshoot_Your_Wireless_Node.pdf
pdf-all: true
categories: fr
created: 2013-11-04
changed: 2013-12-23
post_author: critzo
lang: fr
---
  <p><img alt="" src="/files/troubleshooting_node_hosts_top.png" /></p>
<section id="introduction">
<h2>Introduction</h2>

<p>Ce document inclut des étapes pour identifier et résoudre les problèmes les plus communs qui peuvent surgir avec votre routeur Commotion ou le réseau sans fil. Il inclut :</p>

<ul>
<li>Quelques exemples des problèmes de réseau les plus communs.</li>
	<li>Un guide pas à pas pour évaluer et résoudre ces questions.</li>
	<li>Quelques provisions dont vous pourriez avoir besoin pour résoudre des problèmes.</li>
	<li>Des liens vers des ressources qui peuvent être nécessaires lorsqu'on est hors connexion.</li>
</ul>
<p>Selon la sévérité du problème, cela peut emmener n'importe où de <strong>cinq minutes à plusieurs heures</strong> pour résoudre avec succès des problèmes de noeud ou de réseau.</p>
</section>
<section id="materials-and-supplies-needed">
<h3>MATÉRIELS + FOURNITURES NÉCESSAIRES</h3>

<p>Pour intervenir pour régler un problème avec votre noeud, vous aurez besoin d'avoir en main les articles suivant :</p>

<ul>
<li>Une sortie impression de, ou un accès hors ligne, ce document (vous pouvez imprimer cette page Web)</li>
	<li>Un câble Ethernet supplémentaire</li>
	<li>Un ordinateur ayant un port Ethernet</li>
	<li>Une image du logiciel Commotion, si vous devez recommencer</li>
	<li>(Facultatif) Une impression de, ou accès hors ligne à,  <a href="/fr/docs/cck/installing-configuring/common-configuration/">Configurations Common</a> et <a href="/fr/docs/cck/installing-configuring/configure-commotion">Configurer Routers</a>
</li>
	<li>(Facultatif) un routeur de secours</li>
</ul>
</section>
<section id="troubleshooting-overview">
<h3>Vue d'ensemble des problèmes communs</h3>

<p>Le problème le plus commun qu'un utilisateur de réseau sans fil éprouvera est l'incapacité de se connecter au réseau, ou à Internet. Il pourrait y avoir beaucoup de causes pour des problèmes communs avec le réseau. Les questions avec le matériel de routeur, un câble d'Ethernet, un chargeur électrique, l'électricité, la passerelle Internet, ou le logiciel Commotion pourraient être une partie du problème. Le processus de diagnostic des pannes est de marcher par options, et exclure des points en voyant ce qui se passe à chaque partie de la connexion de réseau.</p>

<p><b>Commencer à intervenir pour régler des problème en posant ces questions puis en allant à la première section où votre réponse est "non" :</b></p>

<table>
<tr>
<td><img alt="" src="/files/Troubleshooting_power_question.png" /></td>
<td>
<p><a href="#no-power">Est-ce que le router est allumé ?</a></p>
</td>
</tr>
<tr>
<td><img alt="" src="/files/Troubleshooting_visibleap_question.png" /></td>
<td>
<p><a href="#no-visible-ap">Pouvez vous voir le point d'accès depuis votre dispositif de client ?</a></p>
</td>
</tr>
<tr>
<td><img alt="" src="/files/Troubleshooting_associateap_question.png" /></td>
<td><a href="#cant-connect-ap">Pouvez-vous vous connecter au point d'accès avec votre dispositif de client ?</a></td>
</tr>
<tr>
<td><img alt="" src="/files/Troubleshooting_splashed_question.png" /></td>
<td>
<p><a href="#no-splash-page">Est-ce que vous ne voyez pas la page d'éclaboussement après l'association au point d'accès ?</a></p>
</td>
</tr>
<tr>
<td><img alt="" src="/files/Troubleshooting_internet_question.png" /></td>
<td>
<p><a href="#no-internet">Obtenez-vous la page d'éclaboussement, mais ne pouvez toujours pas vous connecter à Internet ?</a></p>
</td>
</tr>
</table>
</section>
<section id="no-power">
<h2>Questions d'alimentation : si le routeur n'est pas branché</h2>
<img alt="" src="/files/Troubleshooting_power_no_0.png" style="width: 100px; height: 90px; float: right;" />
<p> </p>

<table>
<tr>
<td>
<p><img alt="" src="/files/troubleshooting_checkPOE.png" /></p>
</td>
<td>
<p><strong>Est-ce que l'adaptateur d'alimentation via Ethernet (PoE) a l'alimentation ?</strong></p>
<p>Assurez-vous que l'adaptateur PoE est entièrement branché dans à la prise électrique et que la lumière d'alimentation sur l'adaptateur PoE est allumée.</p>
</td>
</tr>
<tr>
<td>
<p><img alt="" src="/files/troubleshoot_checkoutlet.png" /></p>
</td>
<td>
<p><strong>La sortie marche-t-elle ?</strong></p>
<p>Si le PoE ne s'allume pas, vérifiez la prise électrique avec un autre dispositif électrique dont vous savez qu'il fonctionne. Si ce dispositif n'obtient pas non plus d'alimentation, essayez une prise différente.</p>
<p>Si la prise électrique fonctionne, l'adaptateur PoE pourrait être mauvais. Essayez de remplacer l'adaptateur PoE.</p>
</td>
</tr>
<tr>
<td colspan="2">
<p><strong>Vérifiez les câbles.</strong><br><img alt="" src="/files/troubleshoot_checkcables.png" /><br>Si l'adaptateur PoE est alimenté mais que le routeur ne l'est pas, cela peut être un problème avec le câble Ethernet entre le PoE et le routeur. Essayez un câble Ethernet différent.</p>
<p>Assurez-vous que tous les câbles sont branchés avec soin, entre l'adaptateur PoE et le routeur, entre le port de réseau local de l'adaptateur PoE et le commutateur ou la passerelle modem (si cas échéant) et entre l'adaptateur PoE et la prise électrique.</p>
</td>
</tr>
<tr>
<td>
<p><img alt="" src="/files/troubleshoot_routerpower.png" /></p>
</td>
<td>
<p><strong>Si le router n'a toujours pas d'alimentation électrique…</strong></p>
<p>Si les étapes ci-dessus ne résolvent pas le problème d'alimentation, déconnectez et re-branchez l'adaptateur PoE pour redémarrer l'adaptateur et le routeur. Attendez une minute ou deux pour laisser le routeur réamorcer avant de tenter de vous y connecter. Si ceci ne marche pas, alors il y a un problème avec le routeur et vous devriez le remplacer.</p>
</td>
</tr>
</table>
<h3>Alimentation : vérifiée</h3>
<p><img alt="" src="/files/Troubleshooting_power_yes_0.png" style="width: 100px; heigh: 90px;" /><br>
<strong>À ce point, vous savez que l'approvisionnement en électricité pour le routeur est bon. Avancez à la prochaine section de diagnostic de pannes.</strong></p>
</section>
<section id="no-visible-ap">
<h2>Pas de point d'accès visible : si vous ne pouvez pas voir l'AP</h2>
<img alt="" src="/files/Troubleshooting_visibleap_no_0.png" style="float: right; width: 100px; height: 88px;" />

<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
<tr>
<td colspan="2">
<p><strong>Êtes-vous assez près du point d'accès ?</strong></p>
<p><img alt="" src="/files/troubleshooting_ap_distance.png" /></p>
<p>Assurez-vous que vous êtes assez proches de l'AP afin qu'il puisse être visible à votre dispositif sans fil. D'autre part, cherchez si il y a de quelconques conditions environnementales qui bloquent le signal autour du noeud.</p>
</td>
</tr>
<tr>
<td><img alt="" src="/files/Troubleshooting_CCK_Hidden_AP.png" /></td>
<td>
<p><strong>Le point d'accès est-il caché ?</strong></p>
<p>Si vous savez qu'il y a un AP et vous êtes près du routeur, mais que vous ne pouvez pas toujours voir l'AP sur votre dispositif de client, l'administrateur de réseau peut avoir mis l'AP comme invisible. Essayez d'entrer manuellement le nom de l'AP dans le gestionnaire de réseau de votre dispositif de client.</p>
</td>
</tr>
<tr>
<td colspan="2">
<p><strong>Est-ce que l'AP est activé sur le noeud ?</strong></p>
<p><img alt="" src="/files/Troubleshoot_wifi_menu.png" /><img alt="" src="/files/Troubleshoot_enable_ap.png" /></p>
<p>Dans l'interface d'administration, allez à <strong>Réseau -&gt; WiFi</strong> et assurez-vous que le point d'accès "Maître" est activé. Si vous changez ce réglage, vous devrez redémarrer votre noeud.</p>
</td>
</tr>
</table>
<h3>Visibilité de l'AP : vérifiée</h3>

<p><img alt="" src="/files/Troubleshooting_power_yes_0.png" style="width:98px;height:98px;" /><img alt="" src="/files/Troubleshooting_visibleap_yes.png" style="width:98px;height:98px;" /><br>
<strong>L'AP est visible.</strong></p>
</section>
<section id="cant-connect-ap">
<h2>Ne peut pas connecter au point d'accès : votre dispositif ne tient pas de connexion</h2>
<img alt="" src="/files/Troubleshooting_associateap_no.png" style="float:right; width:100px;height:88px;" />

<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
<tr>
<td colspan="2">
<p><strong>Êtes-vous trop loin du point d'accès ?</strong></p>
<p><img alt="" src="/files/troubleshooting_ap_distance.png" /></p>
<p>Parce que les noeuds ont souvent davantage de force de signal que votre dispositif de client, vous pouvez voir un signal fort sur votre dispositif de client, mais votre dispositif de client peut ne pas être assez puissant pour communiquer avec le noeud à cette distance.</p>
</td>
</tr>
<tr>
<td><img alt="" src="/files/Troubleshoot_device_powercycle.png" /></td>
<td>
<p><strong>Redémarrez le sans-fil et/ou votre dispositif.</strong></p>
<p>Si vous ne pouvez toujours pas vous connecter, essayez d'éteindre puis rallumer la radio WiFi sur votre dispositif de client ou de redémarrer le dispositif.</p>
</td>
</tr>
<tr>
<td><img alt="" src="/files/Troubleshooting_CCK_Connect_AP.png" /></td>
<td>
<p><strong>Assurez-vous que vous essayez de vous connecter à l'AP, pas au signal ad-hoc (mesh).</strong></p>
<p>D'habitude la différence entre les deux sortes de signaux est indiquée par leur icône sur le gestionnaire de réseau de votre dispositif de client.</p>
</td>
</tr>
<tr>
<td><img alt="" src="/files/Troubleshooting_CCK_Secure_AP.png" /></td>
<td>
<p><strong>Si l'AP est sécurisé, assurez-vous que vous avez la bonne clé de réseau, ou le bon mot de passe, pour lui.</strong></p>
<p>Ceci diffère habituellement du mot de passe d'administrateur root.</p>
</td>
</tr>
<tr>
<td><img alt="" src="/files/Wireless_Interference_problem.png" /></td>
<td>
<p><strong>Est-ce qu'il trop de routeurs dans la pièce ?</strong></p>
<p>Il pourrait y avoir trop d'interférences sur le même canal WiFi. Pour réduire l'interférence, essayez d'enlever quelques routeurs, espacer les routeurs plus loin à part, ou couper l'alimentation de certains des routeurs.</p>
</td>
</tr>
</table>
<h3>AP associé avec client : vérifié</h3>

<p><img alt="" src="/files/Troubleshooting_power_yes_0.png" style="width:97px; height:94px;" /><img alt="" src="/files/Troubleshooting_visibleap_yes.png"  style="width:97px; height:94px;" /><img alt="" src="/files/Troubleshooting_associateap_yes.png"  style="width:97px; height:94px;" /><br><strong>Le dispositif de client est connecté à l'AP.</strong></p>
</section>
<section id="no-splash-page">
<h2>Pas de page d'éclaboussement : si vous êtes sur l'AP, mais que n'êtes pas dirigés à la page d'atterrissage</h2>
<img alt="" src="/files/Troubleshooting_splashed_no.png" style="float:right; width:97px; height:94px;" /><p><img alt="" src="/files/Troubleshoot_notsplashed.png" style="width:75%;" /></p>

<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
<tr>
<td colspan="2">
<p><strong>Vérifiez le statut du réseau.</strong></p>
<p><img alt="" src="/files/Troubleshooting_CCK_Broken_Mesh_Link.png" /></p>
<p>Si vous êtes associé avec une AP et que vous savez qu'il y a une passerelle internet en amont dans la maille (mesh), mais que vous ne pouvez pas aller en ligne, il peut y avoir un lien de maille cassé. Assurez-vous que tous les noeuds maillent correctement à la passerelle. Vous pouvez vérifier la liste de parcours du noeud pour voir si il se connecte aux autres noeuds.</p>
</td>
</tr>
<tr>
<td colspan="2">
<p><strong>Vérifier pour une passerelle.</strong></p>
<p><img alt="" src="/files/olsr_routes.png" /></p>
<p>Pour voir la liste de parcours dans l'interface d'administration de Commotion, allez à fort <strong>Statut -&gt; OLSR</strong>, cliquez ensuite "Parcours" (routes). Cela liste n'importe quel parcours que le noeud a dans sa table. Si le noeud a une entrée de réseau annoncée de 0.0.0.0 n'importe où dans cette table, alors il sait qu'il y a une passerelle vers Internet quelque part dans le réseau. Si le noeud n'a pas de parcours 0.0.0.0 dans la table, alors il ne voit pas de parcours vers Internet. Vérifiez les connexions de réseau de maille pour vous assurer que tous les routeurs sont maillés correctement et que les liens de signal entre des noeuds sont assez forts.</p>
</td>
</tr>
<tr>
<td><img alt="" src="/files/Troubleshooting_CCK_plug_Ethernet_modem.png" /></td>
<td>
<p><strong>Si vous ne pouvez pas toujours pas avoir accès à Internet, branchez un câble Ethernet directement dans la passerelle modem.</strong></p>
<p>Si vous pouvez accéder à Internet de cette façon, alors le problème est avec le noeud Commotion. Si vous ne pouvez pas avoir accès à Internet de cette façon, alors il y a un problème avec la connexion à Internet, ce qui est au-delà du périmètre de ce guide.</p>
</td>
</tr>
</table>
<h3>Page d'éclaboussement : vérifiée</h3>

<p><img alt="" src="/files/Troubleshooting_power_yes_0.png"  style="width:97px; height:94px;" />
<img alt="" src="/files/Troubleshooting_visibleap_yes.png" style="width:97px; height:94px;" />
<img alt="" src="/files/Troubleshooting_associateap_yes.png" style="width:97px; height:94px;" />
<img alt="" src="/files/Troubleshooting_splashed_yes.png" style="width:97px; height:94px;" /><br>
<strong>La page d'éclaboussement se présente sur le dispositif client.</strong></p>
</section>
<section id="no-internet">
<h2>Éclaboussé, mais pas d'Internet : si la page portail se présente, mais vous ne pouvez pas arriver à Internet</h2>
<img alt="" src="/files/Troubleshooting_internet_no.png" style="width:97px; height:94px; float:right;" />
<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
<tr>
<td colspan="2">
<p><strong>Si vous êtes dirigés vers la page d'atterrissage, mais ne pouvez toujours pas aller vers l'Internet après avoir cliqué sur le lien, alors il y a vraisemblablement un problème avec la passerelle vers Internet.</strong></p>
<p><img alt="" src="/files/splash.png" /></p>
</td>
</tr>
<tr>
<td>
<p><strong><span style="font-size:72px;">?</span></strong></p>
</td>
<td>Veuillez lire le advanced network troubleshooting guide pour résoudre ces soucis.
</td>
</tr>
</table>
</section>
<section id="bug-report">
<h2>Rapportez un bog</h2>

<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
<tr>
<td>
<p><img alt="" src="/files/bug.png" /></p>
<p><a href="/report">https://commotionwireless.net/report</a></p>
</td>
<td>
<p>Si vous croyez qu'il y a un problème avec le logiciel Commotion, <a href="/report">rendez vous sur ce lien et déposez un rapport de bug</a>, décrivant votre configuration et le problème vous éprouvez.</p>
</td>
</tr>
</table>
</section>
<section id="section-definitions">
<h2>Définitions</h2>

<dl>
<dt>Réseau ad-hoc / Réseau de dispositifs</dt>
	<dd>Sur quelques dispositifs, comme des ordinateurs portables, certaines connexions sont montrées en tant que réseaux "ordinateur à ordinateur". Ceux-ci sont des réseaux qui peuvent être des réseaux maillés ou de connexion point à point indiquer entre des ordinateurs - comme pour le partage de fichiers. Le terme "ad-hoc" peut aussi se référer à des connexions réseau décentralisés, non planifiées.</dd>
	<dt>Dispositif client</dt>
	<dd>Le dispositif avec une radio WiFi que vous utilisez pour vous connecter à un point d'accès sans fil, par exemple un ordinateur, téléphone portable, ou un dispositif tablette.</dd>
	<dt>AP (Access Point - point d'accès)</dt>
	<dd>Un dispositif qui permet aux dispositifs sans fil de se connecter à un réseau câblé utilisant des normes WiFi ou liées.</dd>
	<dt>PoE (Power over Ethernet)</dt>
	<dd>Décrit les systèmes qui passent le la puissance électrique avec des données ensembles sur le câblage d'Ethernet.</dd>
	<dt>OLSR (Optimized Link State Routing - Acheminement par état de lien optimisé)</dt>
	<dd>Le protocole de routage - cheminement - utilisé par Commotion. Ce protocole détermine les parcours pour les noeuds dans le réseau.</dd>
	<dt>Routeur</dt>
	<dd>Un dispositif qui détermine comment les messages se déplacent dans un réseau informatique.</dd>
	<dt>Image</dt>
	<dd>Un autre nom pour le microprogramme ou le logiciel de système d'exploitation, comme Commotion, qui fait fonction de routeur.</dd>
</dl>
</section>
<section id="section-related-information">
<h2>Informations liées</h2>

<p>Il y a plusieurs autres documents dans le Kit de Construction de Commotion qui contiennent des informations liées à la configuration et la réalisation de changements à votre noeud :</p>

<ul>
<li><a href="/fr/docs/cck/installing-configuring/configure-commotion">Configurer routeurs</a></li>
<li><a href="/fr/docs/cck/installing-configuring/common-configuration">Configurations communes</a></li>
</ul>
</section>
<section id="section-external-resources">
<h2>Ressources externes</h2>
<p>Nous recommandons de lire le chapitre 15 de <a href="http://wndw.net/">Wireless Networking in the Developing World</a>, au sujet de la maintenance et du diagnostic de pannes.</p>
</section>
