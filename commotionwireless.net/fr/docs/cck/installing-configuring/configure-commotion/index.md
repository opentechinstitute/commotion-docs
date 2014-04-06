---
layout: cck
title: Configurer Commotion
site_section: help
sub_section:  cck,cck-installing 
pdf: cck/installing-configuring/2-Configure_Commotion.pdf
pdf-all: true
categories: fr
created: 2013-11-05
changed: 2014-01-13
post_author: critzo
lang: fr
---
  <p><img alt="Configure Commotion graphic" src="/files/styles/large/public/CCK_Configure_intro_graphic_0.png" /></p>

<section id="introduction">
<h2>Introduction</h2>

<p>Dans ce manuel, vous trouverez des instructions sur la façon de configurer un nœud sans fil de Commotion via QuickStart et l'interface d'administration. Cette étape est essentielle au déploiement et à l'ajout de nœuds à un réseau sans fil communautaire  utilisant Commotion, comme moyen de garantir la compatibilité de ces nouveaux nœuds avec le réseau. Si vous n'avez pas encore installé Commotion sur un routeur, veuillez consulter le manuel <a href="/fr/docs/cck/install-ubiquiti-router">Installer sur un routeur Ubiquiti</a> avant d'utiliser ce guide. </p>

<ol class="rteindent1">
<li><a href="#Get-Ready-to-Run-Quickstart">Recueillir des informations nécessaires pour configurer votre nœud</a></li>
	<li><a href="#Run-Quickstart">Exécuter Commotion QuickStart</a></li>
	<li><a href="#Access-Administration-interface">Accéder à l'interface administrateur de Commotion</a></li>
	<li><a href="#Configure-common-options-through-the-Administrator-interface">Définir les options de configuration générales dans l'interface d'administration de Commotion</a></li>
	<li><a href="#Advanced-Commotion-mesh-settings">Paramètres de configuration avancés de Commotion</a></li>
	<li><a href="#Finish-Configuring">Une feuille de travail pour vous aider à enregistrer les informations importantes concernant vos nœuds et votre réseau, ainsi qu'un test pratique conçu pour vous familiariser davantage avec les paramètres de configuration importants</a></li>
</ol>
<p>La configuration des routeurs ne devrait pas prendre plus de 30 minutes.</p>
</section>
<section id="materials-and-supplies-needed">
<h3>Matériel et équipement nécessaires</h3>

<p>1. Un routeur avec Commotion installée, connecté au port Ethernet de votre ordinateur.</p>

<p>2. Une copie de <a href="/files/CCK_ConfigureRouters_worksheet_0.pdf">la feuille de travail</a> à la fin du présent document pour garder une trace des paramètres.</p>

<p>3. (Facultatif) Une version imprimée ou une copie hors-ligne <a href="/files/CCK_ConfigureRouters_Hands-on_0.pdf">du test pratique</a> figurant à la fin du présent document.</p>
</section>
<section id="Get-Ready-to-Run-Quickstart">
<h2>Se préparer à exécuter QuickStart</h2>

<p>Si le nouveau nœud s'ajoute à un réseau existant, il est conseillé de vous renseigner sur les paramètres du réseau avant d'exécuter QuickStart sur le routeur. Si le maillage est chiffré, vous aurez besoin de connaître le mot de passe de la liaison maillée. Commencez ensuite par la première section « Réseau existant ».  </p>

<p>Si vous créez un nouveau réseau, il vous faut consulter votre communauté avant d'exécuter QuickStart. Passez donc à la section « Nouveau réseau ».</p>

<h3>Réseau existant</h3>

<p>Obtenez les informations suivantes auprès d'un organisateur de réseau :</p>

<p>1. Nom du reseau (SSID), BSSID, Canal Wi-Fi et le mot de passe de la laison maillée (si utilisé).</p>

<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_ssid.png" /></p>

<p>2. Paramètres de point d'accès :</p>

<ul>
<li>Les points d'accès utilisent-ils un mot de passe ?</li>
	<li>Si oui, y a-t-il un mot de passe unique à chaque nœud ou y a-t-il un mot de passe commun ?</li>
	<li>Existe-t-il un système de générer ou partager les mots de passe ? </li>
</ul>
<p>3. Système de nommage de nœuds : y a-t-il une façon particulière de nommer les nœuds ou peuvent-ils être nommés de n'importe quelle façon ?</p>

<p>4. Le mot de passe administrateur est-il partagé au sein du réseau ou est-il possible de choisir son propre mot de passe ? Passez à la section «  Exécuter QuickStart ». </p>

<h3>Nouveau réseau </h3>

<p>Il faut d'abord s'entendre sur les informations de base du réseau. Discutez-en avec votre communauté.</p>

<ul>
<li>Comment nommer le réseau et les nœuds ?</li>
	<li>Comment nommer les points d'accès ? Seront-ils sécurisés ou ouverts ?</li>
	<li>Comment créer et stocker les mots de passe (administrateur, liaison maillée, et peut-être AP) ?</li>
</ul>
<p>Passez à « Exécuter QuickStart » lorsque vous avez décidé comment les mots de passe seront définis et comment les nœuds seront nommés.  </p>
</section>
<section id="Run-Quickstart">
<h2>Exécuter QuickStart</h2>

<p>Avant de commencer, il vous faut attribuer l'adresse IP statique <strong>192.168.1.254</strong> à la connexion Ethernet de votre ordinateur et désactiver sa liaison sans fil. Ensuite, dans votre navigateur, accédez à l'URL <strong>192.168.1.20</strong> si vous n'y êtes pas déjà. </p>

<p>Assurez-vous d'enregistrer toutes les informations que vous saisissez lors du processus QuickStart :</p>

<ul>
<li>Nom du nœud ou nom d'hôte</li>
	<li>Mot de passe administrateur </li>
	<li>Mot de passe de la liaison maillée</li>
	<li>Mot de passe du point d'accès (si vous en avez défini un).</li>
</ul>
<p>Ne révélez vos mots de passe ou d'autres informations à personne, sauf si vous lui faites confiance sur le réseau !</p>

<p>1. Lancez QuickStart en cliquant sur le lien dans la barre jaune ou bien à la fin de la page : </p>

<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_welcome-page.png" /></p>

<p>2. Remplissez les champs dans QuickStart en utilisant les informations que vous avez obtenues ou que vous avez déterminées précédemment. </p>

<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
<tr>
<td><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_settings-page.png" /></td>
<td>
	<p>a. Mot de passe de la liaison maillée : Partagé entre les nœuds afin de sécuriser les liaisons entre les nœuds. </p>
	<p>b. Nom du nœud : L'identifiant pour le nœud actuel. C'est aussi le nom donné au point d'accès. </p>
	<p>c. Mot de passe Wi-Fi : Si vous souhaitez que le point d'accès soit protégé, cliquez sur le bouton et entrez un mot de passe. </p>
	<p>d. Mot de passe administrateur : Un mot de passe fort pour verrouiller l'interface de configuration du nœud.</p>
</td>
</tr>
</table>
<p>3. Quand vous finissez le processus QuickStart, le nœud sera réinitialisé. Cela va prendre quelques minutes - soyez patient. Quand le nœud redémarre, il se connecte automatiquement à d'autres nœuds dans la région possédant la même information concernant la liaison maillée que le nœud lui-même.</p>

<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_finish-page.png" /></p>
</section>
<section id="Access-Administration-interface">
<h2>Accéder à l'interface d'administration</h2>

<p>Maintenant, accédez à l'interface de configuration administrateur. Après QuickStart, votre navigateur web vous emmènera à la page d'administration automatiquement. Sinon, tapez <strong>192.168.1.20</strong> ou <strong>thisnode/</strong> dans la barre d'adresse de votre navigateur web et cliquez sur « Entrée » .</p>

<p class="tip">Vous verrez un avertissement ici. Acceptez-le et procédez. <br><img alt="" src="/files/CCK_ConfigureRouters_CertError.png" /></p>

<p>Cliquez sur « Administration » et saisissez « root » pour le nom d'utilisateur et le mot de passe du nœud (tels que vous les avez définis en utilisant QuickStart).</p>

<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_login.png" /></p>
</section>
<section id="Configure-common-options-through-the-Administrator-interface">
<h2>Configurer les options communes via l'interface administrateur</h2>

<p>Bien que vous ayez défini les paramètres de base pendant QuickStart, il y a encore quelques paramètres qui doivent être modifiés. Suivez les instructions suivantes pour en savoir plus. Cliquez ci-dessous ou défilez vers le bas.  </p>

<ul>
<li><a href="#admin-password">Changer le mot de passse administrateur</a></li>
	<li><a href="#change-hostname">Changer le nom d'hôte</a></li>
	<li><a href="#ap-information">Changer les informations du point d'accès</a></li>
	<li><a href="#splash-page">Changer les informations affichées sur le splash screen</a></li>
	<li><a href="#bandwidth-qos">Configurer les limites de bande passante et les paramètres de qualité de service</a></li>
	<li><a href="#get-mesh-ip">Comment obtenir l'adresse IP de votre nœud sur le réseau maillé</a></li>
	<li><a href="#see-mesh-connections">Voir les connexions sur le réseau maillé</a></li>
	<li><a href="#set-gateway-node">Créer un nœud de passerelle</a></li>
	<li><a href="#upgrading-commotion">Mettre à jour vers la nouvelle version du logiciel Commotion</a></li>
</ul>
<p class="tip">Si, à un moment quelconque, l'interface affiche le message suivant : « L'interface CGI n'a produit aucune réponse », attendez une minute et essayez de recharger la page. Quand vous vous reconnectez, vérifiez que toute modification apportée est enregistrée. <br><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_CGIinterface.png" /></p>

<h3 id="admin-password">Changer le mot de passse administrateur</h3>

<p>Ce mot de passe est pour l'administrateur « root » du système. Ceci est nécessaire pour modifier d'autres paramètres. Vous l'avez défini pendant QuickStart.  </p>

<ol class="rteindent1">
<li>Naviguez à <strong>Système</strong> -&gt; <strong>Administration</strong>.</li>
	<li>Dans la section « Mot de passe routeur », saisissez un nouveau mot de passe dans les champs « Mot de passe » et « Confirmation ».</li>
	<li>Allez à la fin de la page et cliquez sur « Enregistrer et appliquer ».</li>
	<li>Patientez jusqu'à ce que le système soit mis à jour. Cela peut prendre jusqu'à deux minutes !</li>
</ol>
<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_systemadmin.png" /></p>

<h3 id="change-hostname">Changer le nom d'hôte</h3>

<p>Ceci change l'identification système du nœud sur le réseau et non le nom du point d'accès. </p>

<p class="tip">Assurez-vous de ne pas réutiliser ou dupliquer les noms d'hôte. Cela va créer des problèmes !</p>

<ol class="rteindent1">
<li>Naviguez à <strong>Système</strong> -&gt; <strong>Système</strong>.</li>
	<li>Dans la section « Propriétés système », saisissez un nouveau nom pour le nœud dans le champ « Nom d'hôte ».</li>
	<li>Allez à la fin de la page et cliquez sur « Enregistrer et appliquer ».</li>
	<li>Patientez jusqu'à ce que le système soit mis à jour. </li>
</ol>
<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_systemsys.png" /></p>

<h3 id="ap-information">Changer les informations du point d'accès</h3>

<p>Trois paramètres sont communs aux points d'accès (AP) sur un nœud Commotion : si le point d'accès est activé ou désactivé, le SSID (le nom de l'AP), et la sécurité (si l'AP est protégé par un mot de passe et, si oui, le mot de passe).</p>

<p class="tip">Assurez-vous d'enregistrer ces paramètres. Vous pourriez en avoir besoin plus tard.</p>

<p>Pour toutes ces étapes, d'abord : </p>

<ol class="rteindent1">
<li>Naviguez à <strong>Réseau -&gt; Wi-Fi</strong>.</li>
	<li>Sélectionnez « radio0: Master [nom de l'AP par défaut] ».</li>
</ol>
<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_APsettings.png" /></p>

<p><strong>Pour activer/désactiver le point d'accès :</strong></p>

<ol class="rteindent1" type="1|a|A|i|I">
<li>Consultez la section « Configuration d'appareil » : <ul>
<li>Si l'AP est activé, il est actif. Pour le désactiver, cliquez sur « Désactiver ».</li>
		<li>Si l'AP est actuellement désactivé, il est inactif. Pour l'activer, cliquez sur « Activer ».</li>
	</ul>
</li>
</ol>
<p class="tip">Cela pourrait rendre le nœud instable. Pour éviter les problèmes, redémarrez l'appareil après avoir modifié cette fonction.  </p>
 

<p><strong>Afin de changer le nom du point d'accès :</strong></p>

<ol class="rteindent1">
<li>Dans la section « Configuration interface », entrez un nouveau nom dans le champ « ESSID ». </li>
	<li>Allez à la fin de la page et cliquez sur « Enregistrer et appliquer ».</li>
	<li>Patientez jusqu'à ce que le système soit mis à jour. (Si vous êtes connecté au nœud sans fil, vous devriez vous reconnecter au nouveau nom SSID).</li>
</ol>
 

<p><strong>Pour activer un mot de passe pour l'AP:</strong></p>

<ol class="rteindent1">
<li>Dans la section « Configuration interface », cliquez sur l'onglet « Sécurité sans fil ».</li>
	<li>Dans le menu déroulant « Chiffrement », sélectionnez « WPA2-PSK ».</li>
	<li>Dans le menu déroulant « Code secret », sélectionnez « Automatique » s'il n'est pas encore sélectionné.</li>
	<li>Dans le champ « Clé », saisissez le mot de passe pour cet AP. </li>
	<li>Allez à la fin de la page et cliquez sur « Enregistrer et appliquer ».</li>
	<li>Patientez jusqu'à ce que le système soit mis à jour. </li>
</ol>
<p><strong>Pour désactiver le mot de passe pour l'AP :</strong></p>

<ol class="rteindent1">
<li>Dans la section « Configuration interface », cliquez sur l'onglet « Sécurité sans fil ».</li>
	<li>Dans le menu déroulant « Chiffrement », sélectionnez « Pas de chiffrement ». </li>
	<li>Allez à la fin de la page et cliquez sur « Enregistrer et appliquer ».</li>
	<li>Patientez jusqu'à ce que le système soit mis à jour. </li>
</ol>
<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_APsettings2.png" /></p>

<h3 id="splash-page">Changer les informations affichées sur le splash screen</h3>

<p>Lorsque les utilisateurs se connectent au point d'accès, il se peut qu'ils soient redirigés vers un splash screen (également appelé portail captif). Vous avez le choix de l'activer ou de le désactiver, de personnaliser le texte sur cet écran et de déterminer le nombre d'heures qui doivent s'écouler avant qu'un utilisateur soit tenu d'accepter de nouveau les conditions du splash screen.</p>

<p class="tip">En cas d'absence d'une passerelle (seule une connexion intranet et pas d'Internet) sur le réseau, aucun splash screen ne s'affichera. </p>

<p>D'abord, naviguez à <strong>Services -&gt; Portail captif</strong>.</p>

<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_Captive.png" /></p>

<p><strong>Afin de changer le texte affiché sur le splash screen :</strong></p>

<ol class="rteindent1">
<li>Sélectionnez « Splashtext » en haut de la page.</li>
	<li>Modifiez le code HTML dans le grand champ de texte pour afficher les informations que vous voulez, comme le nom du réseau et les contacts. </li>
	<li>Allez à la fin de la page et cliquez sur « Soumettre ».</li>
	<li>Patientez jusqu'à ce que le système soit mis à jour. </li>
</ol>
 

<p><strong>Pour changer le nombre d'heures qui doivent s'écouler avant qu'un utilisateur se reconnecte via le splash screen :</strong></p>

<ol class="rteindent1">
<li>Dans la la section « Généralités », définissez le nombre d'heures pour le « Temps de validation », par exemple 12 ou 24 heures.  </li>
	<li>Allez à la fin de la page et cliquez sur « Enregistrer et appliquer ».</li>
	<li>Patientez jusqu'à ce que le système soit mis à jour. </li>
</ol>
 

<p><strong>Pour activer/désactiver le splash screen :</strong></p>

<ol class="rteindent1" type="1|a|A|i|I">
<li>Dans la section « Interfaces », utilisez le menu déroulant <strong> soit</strong> pour :<ul>
<li>Sélectionnez la ligne vide en haut du menu déroulant si vous souhaitez désactiver le splash screen.</li>
		<li>Sélectionnez « secAp » ou « ap » si vous souhaitez que les utilisateurs soivent dirigés vers le splash screen lors de la connexion au point d'accès sécurisé, ou au point d'accès non sécurisé, respectivement.</li>
	</ul>
</li>
	<li>Allez à la fin de la page et cliquez sur « Enregistrer et appliquer ».</li>
	<li>Patientez jusqu'à ce que le système soit mis à jour. </li>
</ol>
<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_splashenable.png" /></p>

<h3 id="bandwidth-qos">Configurer les limites de bande passante et les paramètres de qualité de service</h3>

<p>Si vous hébergez un nœud passerelle (partage d'Internet avec le reste du réseau), vous pouvez limiter la bande passante permise au reste du réseau en utilisant le concept de Qualité de Service (QdS). </p>

<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_networkqos.png" /></p>

<ol class="rteindent1">
<li>Naviguez à <strong>Réseau -&gt; QdS</strong>.</li>
	<li>Cochez les cases « Activer » et « Calculer les coûts ».</li>
	<li>Dans le champ « Vitesse de téléchargement », définissez la totalité de la bande passante descendante à fournir au maillage (en kilobits par seconde - tapez 5000 pour environ 5 Mbps). </li>
	<li>Dans le champ «Vitesse d'upload », définissez la totalité de la bande passante ascendante à fournir au maillage (en kilobits par seconde - tapez 1000 pour environ 1 Mbps). </li>
	<li>Allez à la fin de la page et cliquez sur « Enregistrer et appliquer ».</li>
	<li>Patientez jusqu'à ce que le système soit mis à jour. </li>
</ol>
<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_networkqos2.png" /></p>

<h3 id="get-mesh-ip">Comment obtenir l'adresse IP de votre nœud dans le maillage</h3>

<p>Il convient de noter l'adresse IP de votre nœud dans le maillage.</p>

<ol class="rteindent1">
<li>Naviguez à <strong>Statut -&gt; OLSR</strong>.</li>
	<li>Cliquez sur « Interfaces » sous « Vue d'ensemble des interfaces ».</li>
	<li>Trouvez l'adresse source commençant par le chiffre 5. Ceci est l'adresse IP de votre nœud dans le maillage.</li>
</ol>
<h3 id="see-mesh-connections">Voir les connexions sur le réseau maillé</h3>

<p>Il y a deux façons de voir si le nœud est connecté avec succès à d'autres nœuds du maillage. </p>

<ol class="rteindent1">
<li>Si vous n'êtes pas connecté, passez votre souris sur « Vue d'ensemble » au-dessus du logo Commotion sur la première page du site et cliquez sur « OSLR-Viz ».</li>
</ol>
<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_oslrviz.png" /></p>

<p><strong>ou </strong></p>

<ol class="rteindent1">
<li>Naviguez à <strong>Statut -&gt; OSLR</strong>.</li>
	<li>Clicquez sur « OSLR-Viz ».</li>
</ol>
<p><img alt="" src="/files/styles/large/public/CCK_COnfigureRouters_oslrviz2.png" /></p>

<h3 id="set-gateway-node">Créer un nœud de passerelle</h3>

<p>Si vous souhaitez partager votre bande passante avec le réseau, désignez votre nœud comme une passerelle. Avant de procéder, ce serait peut-être bon de configurer d'autres paramètres, par exemple ceux relatifs à la qualité de service, indiqués ci-dessus.</p>

<ol class="rteindent1">
<li>Branchez le port LAN de l'adaptateur Power over Ethernet à votre routeur/modem connecté à l'Internet.</li>
	<li>Naviguez à <strong>Système -&gt; Redémarrer</strong> pour redémarrer le nœud.</li>
	<li>Cliquez sur « Redémarrer » et attendez le redémarrage du nœud.</li>
	<li>Le nœud se configure automatiquement comme une passerelle et fournit la bande passante au réseau au redémarrage. </li>
	<li>Confirmez que le nœud est une passerelle en naviguant à <strong>Statut -&gt; OLSR</strong>.<ul>
<li>Cliquez sur « HNA ».</li>
		<li>Si vous voyez 0.0.0.0/0 dans le tableau à côté de l'adresse IP de votre nœud dans le maillage, vous savez alors que le nœud a été configuré comme une passerelle. </li>
	</ul>
</li>
</ol>
<h3 id="upgrading-commotion">Mettre à jour vers la nouvelle version du logiciel Commotion</h3>

<p>De temps en temps, des nouvelles versions du logiciel Commotion sont mises à la disposition des usagers à l'adresse <strong>commotionwireless.net</strong>. Veuillez télécharger la version « sysupgrade » et suivez ces instructions.</p>

<p class="tip">Vous trouverez des informations importantes sur la procédure de vérification de vos téléchargements à <strong>https://commotionwireless.net/download/verify-signatures</strong>.</p>N'oubliez pas d'enregistrer vos paramètres du nœud et du réseau pour pouvoir les utiliser lorsque vous exécutez QuickStart avec la prochaine version du logiciel. 
<ol class="rteindent1">
<li>Naviguez à <strong>Système -&gt; Sauvegarder / Flasher le firmware</strong>.</li>
	<li>Dans la section « Flasher la nouvelle image de firmware », décochez l'option « Conserver les paramètres ». </li>
	<li>Pour passer à une nouvelle version du logiciel, cliquez dans le champ rectangulaire au-dessous et sélectionnez le fichier que vous avez téléchargé. Cliquez sur « Flasher l'image... ».</li>
	<li>A la page suivante, attendez jusqu'à ce que le fichier soit uploadé. Puis, cliquez sur « Procéder ».</li>
	<li>Patientez jusqu'à ce que le système soit mis à jour. </li>
</ol>
<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_systembackup.png" /></p>
</section>
<section id="Advanced-Commotion-mesh-settings">
<h2>Paramètres de maillage avancés de Commotion</h2>

<p>Vous pouvez modifier la configuration d'un routeur sur le réseau maillé que vous avez définie lors du processus QuickStart. Cela peut être utile pour le séparer du réseau maillé ou pour changer l'identité du réseau.</p>

<ol class="rteindent1">
<li>Naviguez à <strong>Commotion -&gt; Configuration manuelle du maillage</strong>.</li>
	<li>Sélectionnez le canal Wi-Fi pour votre réseau : soit « canal 2 GHz », soit « canal 5 GHz » selon les capacités de votre nœud sans fil. Ce canal devrait être uniforme dans l'ensemble du réseau. </li>
	<li>Dans le champ « Mesh SSID », entrez le nom de votre réseau. Ce nom devrait être identitique pour chaque nœud sur le réseau. </li>
	<li>Si vous souhaitez définir une nouvelle adresse BSSID pour le réseau maillé, entrez-le dans le champ « Mesh BSSID ». Cette adresse devrait être une adresse MAC valide et devrait également être identique pour chaque nœud sur le réseau. Veuillez consulter le site web de Commotion pour trouver des exemples. </li>
</ol>
<p><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_meshconfig.png" /></p>
</section>
<section id="Finish-Configuring">
<h2>Pour terminer</h2>

<p>Lorsque vous avez terminé la configuration, débranchez le câble Ethernet de l'ordinateur. Si vous désirez héberger une passerelle (partage d'Internet avec le reste du réseau), branchez-le à votre routeur/modem passerelle. Sinon, sauvegardez-le aux fins de configuration et de dépannage plus tard.  </p>

<p>Pour les informations plus détaillées concernant les nœuds, le maillage et la sécurité AP, consultez le module Sécuriser le réseau (Matériel et Logiciel). En cas de problèmes avec un nœud ou le réseau, consultez le module <a href="/fr/docs/cck/installing-configuring/troubleshoot-your-wireless-node">Dépanner des nœuds hôtes</a>.</p>
</section>
<section id="Check-your-understanding">
<h2>Vérifier votre compréhension</h2>

<p>Donné ci-dessous est un test pratique pour vous aider à explorer l'interface administrateur de tout nœud Commotion. Vous n'êtes pas obligé de prendre ce test pour mettre en place un nœud sur un réseau. Il peut toutefois vous aider à comprendre comment trouver des informations importantes dont les administrateurs réseau ont besoin afin d'assurer que le réseau continue à fonctionner normalement. Si d'autres personnes participent avec vous dans la configuration de plusieurs nœuds, vous pouvez tous explorer ces détails en passant par ce test et en répondant aux questions.    </p>

<p><a href="/files/CCK_ConfigureRouters_Hands-on_0.pdf"><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_handson.png" /></a></p>
</section>
<section id="Record-important-information">
<h2>Enregistrer les informations importantes</h2>

<p>N'oubliez pas d'enregistrer toutes les données pendant que vous vérifiez et modifiez ces paramètres. Servez-vous de cette feuille de travail si vous la trouvez utile. </p>

<p><a href="/files/CCK_ConfigureRouters_worksheet_0.pdf"><img alt="" src="/files/styles/large/public/CCK_ConfigureRouters_Installworksheet.png" ></a></p>
</section>
<section id="section-definitions">
<h2>Définitions</h2>

<dl>
<dt>Point d'accès (AP) :</dt>
	<dd>Un appareil qui permet aux clients sans fil (ordinateurs portables, smartphones, etc.) de se connecter à un réseau en utilisant Wi-Fi.</dd>
	<dt>BSSID (Basic Service Set Identifier) :</dt>
	<dd>L'adresse servant à l'identification d'un réseau maillé spécifique. Elle est utilisée par l'appareil de liaison maillée sans fil.</dd>
	<dt>Passerelle :</dt>
	<dd>Une connexion à un autre réseau, généralement l'Internet. Un ou plusieurs nœuds d'un réseau peuvent servir de passerelles. </dd>
	<dt>Nom d'hôte :</dt>
	<dd>Le nom d'un nœud; un surnom correspondant à l'adresse d'un dispositif connecté à un réseau. Le nom d'hôte et le SSID d'un point d'accès peuvent être identiques, similaires ou différents. </dd>
	<dt>Adresse IP :</dt>
	<dd>Une étiquette numérique attribuée à chaque dispositif (ordinateurs, imprimantes, routeurs, etc.) d'un réseau qui utilise le protocole Internet pour la communication.</dd>
	<dt>Adresse MAC :</dt>
	<dd>Un identifiant physique unique attribué aux interfaces réseaux.</dd>
	<dt>Réseau maillé :</dt>
	<dd>Un type de réseau dans lequel chaque nœud peut servir d'un routeur autonome et peut se connecter à plusieurs nœuds en même temps. </dd>
	<dt>Nœud :</dt>
	<dd>Un routeur connecté à un réseau maillé.</dd>
	<dt>OLSR (Optimized Link State Routing Protocol) :</dt>
	<dd>un protocole de routage IP optimisé pour les réseaux mobiles ad hoc.</dd>
	<dt>Root :</dt>
	<dd>Un compte utilisateur utilisé pour l'administration des systèmes.</dd>
	<dt>Splash screen ou portail captif : </dt>
	<dd>Une page web qui s'affiche la première fois que les utilisateurs se connectent au réseau via un point d'accès. Celle-ci nécessite l'acceptation des conditions de service avant de permettre un accès à Internet.</dd>
	<dt>SSID (Service Set Identifier) :</dt>
	<dd>Un nom identifiant de façon unique un réseau local sans fil. Le plus souvent, c'est le nom d'un point d'accès. Le nom est lisible par l'homme et peut comporter jusqu'à 32 caractères. </dd>
</dl>
</section>
<section id="section-related-information">
<h2>Informations connexes</h2>

<p>Modules à finir avant de commencer le module actuel</p>

<ul>
<li><a href="/fr/docs/cck/installing-configuring/install-ubiquiti-router">Installer sur un routeur Ubiquiti</a></li>
	<li><a href="/fr/docs/cck/install-and-recover-tftp">Installer et récupérer avec TFTP</a></li>
</ul>
<p>D'autres modules cités dans ce module</p>

<ul>
<li>Sécuriser le réseau (matériel et logiciel) </li>
	<li>Dépanner des nœuds hôtes</li>
</ul>
<p>Modules susceptibles de suivre le module actuel</p>

<ul>
<li>Dépanner des nœuds hôtes</li>
</ul>
<p>Modules connexes dans d'autres unités </p>

<ul>
<li>Gestion de réseaux : Apprendre les bases</li>
</ul>
</section> 
