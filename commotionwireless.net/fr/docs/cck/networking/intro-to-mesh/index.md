---
layout: collection
title: Introduction aux réseaux maillés
site_section: docs
sub_section: [cck,cck-networking]
pdf: cck/networking/2-Introduction_to_Mesh.pdf
pdf-all: true
categories: fr
created: 2013-11-11
changed: 2013-12-02
post_author: critzo
lang: fr
---
<section id="introduction">
<h2>Introduction</h2>

<p>Il existe de nombreuses façons de développer un réseau et les technologies auxquelles vous pouvez recourir sont multiples. Le présent module consiste en une introduction au mode de fonctionnement des réseaux maillés et à la manière dont ils se distinguent des autres types de réseaux. Il est important d'assimiler les réseaux maillés pour arriver à développer un vous-même un et pouvoir en parler aux gens de votre entourage qui désireraient vous soutenir ou s'impliquer à vos côtés dans votre projet. </p>

<p>Lisez et discutez les idées ci-dessous puis référez-vous au module <a href="/files/cck_name_that_network.pdf">Donnez un nom à ce réseau</a> pour explorer les propriétés des réseaux. Les questions et exercices contenus dans les diapos peuvent vous aider à réfléchir à différentes structures de réseaux. </p>

<p>En explorant les différentes structures de réseaux, vous arriverez à vous faire une idée plus claire sur la façon d'aborder la conception des réseaux et la manière dont différentes conceptions sont pertinentes à différentes situations. </p>

<p><strong>Temps requis : 30 minutes pour analyser le texte et le discuter. 45 minutes pour la présentation et les exercices. </strong></p>
</section>
<section id="materials-and-supplies-needed">
<h3>Matériel</h3>

<p><img alt="" src="/files/styles/large/public/intro_to_mesh_presentation.png" /></p>

<p>Version imprimée de <strong><a href="/files/cck_name_that_network.pdf">Name that Network</a> </strong>(facultatif)</p>
</section>
<section id="read-and-discuss">
<h2>Lecture et discussion </h2>

<p>Lisez et discutez les informations ci-dessous. Pour en savoir plus sur les caractéristiques des différents types de réseaux, consultez le module <a href="/files/cck_name_that_network.pdf"><strong>Donnez un nom à ce réseau</strong></a>.</p>

<h3>Les réseaux peuvent avoir une structure maillée ou hiérarchisée. </h3>

<table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
<tr style="border:hidden;">
<td>
<p class="rtecenter"><img alt="" src="/files/styles/large/public/learn_about_mesh_hier_dots.png" />La structure hiérarchisée /<br>
Le réseau en étoile</p>
<p class="rtecenter"><img alt="" src="/files/styles/large/public/learn_about_mesh_mesh_dots.png" />Le réseau maillé</p>
</td>
<td>
<p>Un réseau est un ensemble d'appareils connectés les uns aux autres, transférant des informations ou des messages d'un point à un autre. </p>
<p>Plusieurs réseaux (y compris ceux des téléphones portables) reposent sur une structure hiérarchique ou en étoile, où les utilisateurs sont connectés les uns aux autres va un appareil central qui contrôle les différentes connexions et le trafic sur le  réseau. </p>
<p>Cela signifie que chaque fois que vous  communiquez sur un réseau, les messages et données vont d'abord être transférés vers une plate-forme centrale puis acheminés vers leur destination.</p>
</td>
</tr>
</table>
<h3>Le mode de transfert des réseaux maillés diffère de celui des réseaux non maillés. </h3>

<table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
<tr style="border:hidden;">
<td>
<p><img alt="" src="/files/styles/large/public/learn_about_mesh_hier_route.png" /></p>
<p><img alt="" src="/files/styles/large/public/learn_about_mesh_mesh_route.png"></p>
</td>
<td>
<p>Ce qui distingue les réseaux maillés des autres types de réseaux est que les premiers utilisent un protocole particulier pour acheminer les informations d'un point vers un autre. </p>
</td>
</tr>
</table>
<h3>Les routeurs sont des appareils qui déterminent la manière dont l'information se déplace tout au long d'un réseau. </h3>

<table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
<tr style="border:hidden;">
<td>
<p><img alt="" src="/files/styles/large/public/learn_about_mesh_router_laptops.png" /></p>
</td>
<td>
<p>Les points d'accès standards, tels que ceux que avez chez vous, parlent aux ordinateurs ou aux smartphones mais ne peuvent pas parler facilement aux autres routeurs. </p>
</td>
</tr>
</table>
<h3>Les routeurs dédiés aux réseaux maillés peuvent parler les uns aux autres, de façon dynamique, ce qui leur permet d'orienter, fluidement, le trafic au niveau du réseau. </h3>

<table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
<tr style="border:hidden;">
<td>
<p><img alt="" src="/files/styles/large/public/learn_about_mesh_simple_routers.png"></p>
</td>
<td>
<p>Par défaut, la plupart des routeurs et autres appareils ne sont pas aptes à être intégrés dans un réseau maillé. Mais, avec un système d'exploitation adapté, certains routeurs, téléphones cellulaires et ordinateurs portables peuvent être intégrés à un réseau maillé.</p>
<p>Vous pouvez développer un réseau maillé en installant une suite de logiciels de maillage libres sur des appareils sans fil puis en les connectant à d'autres appareils environnants. </p>
</td>
</tr>
</table>
<h3>N'importe quel appareil du réseau maillé peut servir de plate-forme ou de point central dans le réseau - Le réseau peut également ne pas disposer de point central. </h3>

<table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
<tr style="border:hidden;">
<td>
<p><img alt="" src="/files/styles/large/public/learn_about_mesh_complex_routers.png" /></p>
<p>Plus il existe d'appareils dans le réseau maillé, plus ce dernier devient flexible. N'importe quel appareil du réseau maillé peut servir de plate-forme ou de point central dans le réseau - Le réseau peut également ne pas disposer de point central. </p>
</td>
</tr>
</table>
<h3>Tout appareil du réseau peut servir de marge pour le réseau, lui permettant d'étendre sa porte et de développer de nouvelles connexions.</h3>

<table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
<tr style="border:hidden;">
<td>
<p><img alt="" src="/files/styles/large/public/learn_about_mesh_complex_routers2.png" /></p>
<p>Un réseau maillé dynamique, contrairement à un réseau traditionnel ''statique'', s'adapte constamment aux nouvelles conditions. Il ajuste automatiquement ses trajectoires pour intégrer de nouveaux nœuds qui se joignent au réseau et dispose de la flexibilité nécessaire pour réorienter les informations lorsqu'un nœud quitte le réseau. </p>
</td>
</tr>
</table>
<h3>Les réseaux maillés sont être renforcés et élargis à mesure que la base des utilisateurs s'agrandit. </h3>

<table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
<tr style="border:hidden;">
<td>
<p><img alt="" src="/files/styles/large/public/learn_about_mesh_complex_routers3.png"/></p>
<p>Lorsque plusieurs nœuds maillés sont interconnectés, le réseau peut contourner les interférences, blocages et congestions. </p>
<p>Si vos amis vous envoient un message texte et que l'un des nœuds s'arrête de fonctionner, le réseau maillé va s'adapter en conséquence pour assurer l'acheminement du message jusqu'à vous.</p>
</td>
</tr>
</table>
<p>Pour en savoir plus sur les caractéristiques des différents types de réseaux, consultez le module <strong><a href="/files/cck_name_that_network.pdf">Donnez un nom à ce réseau</a></strong>.</p>

<p>Une fois que vous avez bien saisi les fondements du réseau maillé, essayez de mettre vos connaissances en pratique via le module <a href="/docs/cck/planning/design-your-network-every-network-tells-story"><strong>Chaque réseau raconte une histoire</strong></a>. Pour avoir des informations d'ordre technique sur le mode de fonctionnement de Commotion et le mode de développement d'un réseau maillé, consultez le module  <strong>Tout ce que vous devez savoir sur les réseaux maillés (disponible incessamment).</strong></p>
</section>
<section id="section-definitions">
<h3>Définitions</h3>

<dl>
<dt>Structure hiérarchique</dt>
	<dd>Ici, hiérarchique se réfère à la structure en arbre et aux relations entre appareils dans un réseau classique. </dd>
	<dt>Houblon</dt>
	<dd>Le nombre de liaisons nécessaires pour atteindre un nœud de destination au niveau du réseau.  </dd>
	<dt>Plusieurs-à-plusieurs</dt>
	<dd>Dans les réseaux maillés, plusieurs nœuds peuvent se connecter à plusieurs autres. Dans les conceptions classiques, un seul nœud peut se connecter soit à un autre nœud, soit à plusieurs autres.  </dd>
	<dt>Réseau maillé</dt>
	<dd>Un type de réseau où les nœuds se connectent à d'autres nœuds homologues et orientent le trafic au niveau du réseau. </dd>
	<dt>Routeur</dt>
	<dd>Un routeur est un appareil qui détermine la manière dont l'information se déplace tout au long d'un réseau.</dd>
</dl>
</section>
<section id="section-related-information">
<h2>Informations Connexes</h2>

<p>Pour vous familiariser davantage avec ces concepts, consultez le module : <strong> Tout ce que vous devez savoir sur les réseaux sans fil (Disponible incessamment).</strong></p>

<p>Une fois que vous avez bien saisi les fondements du réseau maillé, essayez de mettre vos connaissances en pratique via le module : <a href="/fr/docs/cck/planning/design-your-network-every-network-tells-story"><strong>Chaque réseau raconte une histoire</strong></a>.</p>
</section>
