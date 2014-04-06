---
layout: cck
title: Installer sur un routeur Ubiquiti
site_section: help
sub_section:  cck,cck-installing 
pdf: cck/installing-configuring/1-Install_on_a_Ubiquiti_Router.pdf
pdf-all: true
categories: fr
created: 2013-09-27
changed: 2014-01-13
post_author: critzo
lang: fr
---
<p><img alt="" src="/files/styles/large/public/install_on_ubiquiti_title.png" /></p>

<h2 id="section-introduction">Introduction</h2>

<p>Ce document explique étape par étape le processus d'installation du logiciel Commotion sur des routeurs Ubiquiti airMax. Si vous disposez d'un appareil Ubiquiti nouveau et inutilisé, ce guide vous est destiné. </p>

<p>Ce guide a été conçu parce que l'Open Technology Institute utilise le matériel d'Ubiquiti Networks aux fins de développer et de tester le logiciel de routage Commotion. Le logiciel est un système d'exploitation alternatif semblable à Linux. Le matériel Ubiquiti provient de l'usine, installé avec le logiciel personnalisé, AirOS, comme vient souvent un nouvel ordinateur avec Microsoft Windows ou Mac OSX déjà installé. L'installation de Commotion sur votre routeur au lieu d'AirOS ajoutera de nouvelles fonctionnalités à votre routeur, y compris la capacité de mailler avec d'autres routeurs qui utilisent Commotion.</p>

<p>Le processus d'installation devrait durer entre 45 minutes et une heure. Si vous rencontrez des difficultés avec ces étapes ou si vous avez un routeur qui n'a pas flashé Commotion correctement ou qui ne réagit pas, veuillez consulter la page « Installer et récupérer avec TFTP ».</p>

<p><strong>Durée estimée : 45 minutes à 1 heure.</strong></p>

<h2 id="section-materials-and-supplies-needed">Matériel et équipement nécessaires</h2>

<p>Pour installer Commotion, vous aurez besoin des éléments suivants : </p>

<p>1. Un ordinateur doté d'un port Ethernet.<br>2. Un routeur Ubiquiti, son adaptateur Power over Ethernet (PoE) et un câble d'alimentation.<br>3. Accès à une prise d'alimentation.<br>4. Deux câbles Ethernet. <br>5. Une connexion Internet ou l'image logicielle de Commotion appropriée. </p>

<h2 id="section-download-commotion">Télécharger Commotion</h2>

<p>Téléchargez l'image « Factory » de Commotion correspondant à votre matériel :<br><a href="/download/openwrt">https://commotionwireless.net/download/openwrt</a></p>

<p><a href="/download/openwrt"><img alt="" src="/files/styles/large/public/install_on_ubiquiti_download_0.png" /></a></p>

<p class="tip">Sauvegardez le fichier dans un endroit facilement accessible, par exemple le bureau ou le dossier Téléchargements. </p>

<h2 id="prepare-the-hardware">Installer le matériel</h2>

<p><img alt="" src="/files/styles/large/public/install_on_ubiquiti_equipment_setup_1.png" /></p>

<p><strong>Attention: Ne branchez pas le port étiqueté comme PoE à votre ordinateur ! Cela peut endommager votre ordinateur.</strong></p>

<p>1. Enlevez la plaque de couche du routeur Ubiquiti. On y trouve des renseignements très importants concernant le matériel. Ne le perdez pas ni le mélangez avec la plaque de couche d'un autre dispositif !</p>

<p>2. Branchez le premier câble Ethernet au port PoE et puis branchez l'autre extrémité du câble au port que vous voyez après avoir enlevé la plaque de couche du routeur.</p>

<p>3. Branchez le deuxième câble Ethernet au port marqué comme LAN, et puis branchez l'autre extrémité du câble au port Ethernet de votre ordinateur. </p>

<p>4. Branchez l'adaptateur PoE à une prise murale ou à une prise électrique. Le témoin lumineux vert indiquant « Power Active » doit s'allumer. Le routeur est alimenté et s'allume après une ou deux secondes.</p>

<h2 id="change-ip-address">Configurer l'adresse IP de votre ordinateur</h2>

<table>
<tr>
<td>
<p><img alt="" src="/files/styles/large/public/install_on_ubiquiti_changeip_0.png" /></p>
</td>
<td>
	<p>1. Déconnectez le Wi-Fi de votre ordinateur.</p>
	<p>2. Modifiez les paramètres réseau de votre ordinateur :<br><code>Adresse IP statique :<br>192.168.1.254<br>Masque de sous-réseau : <br>255.255.255.0<br>Passerelle :<br>192.168.1.1<br>DNS : (vide)</code></p>		</td>
</tr>
</table>
<p class="tip">Dans la section « Ressources extérieures » en bas de cette page, vous trouverez des liens aux guides pour vous aider à changer l'adresse IP de votre ordinateur. </p>

<h2 id="load-software">Charger le logiciel</h2>

<table>
<tr>
<td>
<p><img alt="" src="/files/styles/large/public/install_on_ubiquiti_admin.png" /></p>
</td>
<td>
<p>1. Ouvrez votre navigateur web et tapez http://192.168.1.20 dans la barre d'adresse. Ceci est l'adresse IP du routeur. L'interface web d'Ubiquiti AirOS doit se charger. </p>
</td>
</tr>
</table>
<table>
<tr>
<td>
<p><img alt="" src="/files/styles/large/public/install_on_ubiquiti_login_1.png" /></p>
</td>
<td>
<p>2. Accédez à l'interface :<br>Nom d'utilisateur : ubnt<br>Mot de passe : ubnt</p>
</td>
</tr>
</table>
<table>
<tr>
<td>
<p><img alt="" src="/files/styles/large/public/install_on_ubiquiti_browse_0.png" /></p>
<p>3. Allez dans l'onglet « System ». Dans la section « Firmware Update », cliquez sur « Browse » et sélectionnez le fichier Commotion que vous avez téléchargé pour votre routeur. </p>
</td>
</tr>
</table>
<table>
<tr>
<td>
<p><img alt="" src="/files/styles/large/public/install_on_ubiquiti_upload_0.png" /></p>
<p>4. Cliquez sur « Upload » et attendez la prochaine invite.</p>
</td>
</tr>
</table>
<table>
<tr>
<td>
<p><img alt="" src="/files/styles/large/public/install_on_ubiquiti_update.png" /></p>
<p>5. Cliquez sur « Update ». L'appareil va installer le logiciel. À ce stade, le premier et le dernier témoin lumineux sous le triangle s'allumeront, et puis tous les témoins lumineux, sauf le témoin d'alimentation, s'éteindront. </p>
</td>
</tr>
</table>
<table>
<tr>
<td>
<p><img alt="" src="/files/styles/large/public/install_on_ubiquiti_reboot_4.png" /></p>
</td>
<td>
<p>6. Quand les témoins lumineux s'éteignent, l'appareil redémarre. Attendez quelques minutes jusqu'à ce que le témoin d'alimentation et le voyant sous le triangle tiennent une lumière verte ferme.</p>
</td>
</tr>
</table>
<table>
<tr>
<td>
<p><img alt="" src="/files/styles/large/public/install_on_ubiquiti_commotion_0.png" /></p>
</td>
<td>
<p>7. Saisissez http://192.168.1.20 encore une fois dans votre navigateur web. Si vous voyez l’écran de Commotion, cela signifie que vous avez réussi à installer votre routeur sans fil de Commotion. Félicitations ! </p>
</td>
</tr>
</table>
<p>D'ici, vous pouvez aller au module « Configurer routeurs ». Vous y trouverez des instructions sur la façon de configurer le logiciel Commotion pour la première fois. </p>

<h2 id="section-definitions">Définitions</h2>
<dl>
<dt>Système d'exploitation</dt>
	<dd>un ensemble de logiciels qui gère les ressources matérielles d'un ordinateur et fournit des services communs aux programmes d'ordinateur. Le système d'exploitation est un élément essentiel du logiciel système dans un système informatique.</dd>
	<dt>Firmware</dt>
	<dd>une combinaison de la mémoire persistante dans un dispositif, et le code et les données qui sont stockées dedans. Autrement dit, c'est un petit système d'exploitation basique intégré dans du matériel informatique : ordinateurs, appareils photo numériques, montres numériques, téléphones portables, etc.</dd>
</dl>

<h2 id="section-related-information">Informations connexes</h2>
<p>Pour plus d'assistance, ou si ce guide ne marche pas pour vous, veuillez consulter le module <a href="/fr/docs/cck/installing-configuring/install-and-recover-tftp">Installer et récupérer avec TFTP </a>. Une fois le logiciel installé, vous pouvez procéder au module <a href="/fr/docs/cck/installing-configuring/configure-commotion">Configurer routeurs</a>.</p>

<h2 id="section-external-resources">Ressources extérieures</h2>
<p>Guides pour la configuration d'adresses IP statiques : </p>
<ul>
<li><strong>Windows - <a href="http://www.howtogeek.com/howto/19249/how-to-assign-a-static-ip-address-in-xp-vista-or-windows-7/" target="_blank">http://www.howtogeek.com/howto/19249/how-to-assign-a-static-ip-address-in-xp-vista-or-windows-7/</a></strong></li>
	<li><strong>Mac - <a href="http://osxdaily.com/2010/12/17/set-static-ip-address-mac/" target="_blank">http://osxdaily.com/2010/12/17/set-static-ip-address-mac/</a></strong></li>
	<li><strong>Linux - <a href="http://www.sudo-juice.com/how-to-a-set-static-ip-in-ubuntu/" target="_blank">http://www.sudo-juice.com/how-to-a-set-static-ip-in-ubuntu/</a></strong></li>
	<li>Vous pouvez aussi faire une recherche sur Internet pour obtenir plus d'informations ou pour trouver d'autres guides concernant votre système d'exploitation spécifique. </li>
</ul>
