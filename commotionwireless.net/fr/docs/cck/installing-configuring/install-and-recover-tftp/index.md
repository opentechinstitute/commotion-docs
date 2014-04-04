---
layout: cck
title: Installation et récupération avec TFTP
site_section: help
sub_section: [cck,cck-installing]
pdf: cck/installing-configuring/5-Install_and_Recover_with_TFTP.pdf
pdf-all: true
categories: fr
created: 2013-09-27
changed: 2014-01-13
post_author: critzo
lang: fr
---
<p><img alt="" src="/files/install_with_TFTP_support003_0.png" ></p>

<h2 id="section-introduction">Introduction</h2>

<p>Ce document est conçu pour vous aider à installer le logiciel Commotion si les instructions d'installation sur un périphérique Ubiquiti ne fonctionnent pas, ou si votre routeur dispose d'un logiciel défectueux et doit être ré-installé/mis à jour. Il contient des instructions sur l'utilisation d'un protocole de transfert de fichiers  appelé TFTP (Trivial File Transfer Protocol) pour installer le logiciel.</p>

<p>Commencez ces instructions après avoir préparer votre ordinateur et rassembler les éléments nécessaires, mais avant l'installation du logiciel proprement dite. Vous trouverez des instructions spécifiques pour le système d'exploitation que vous utilisez sur votre ordinateur - soit Windows, Mac OSX, ou Linux. Merci d'aller à la section ci-dessous qui correspond à votre système d'exploitation. </p>

<p><strong>Ce processus prend plus de temps que les instructions de base. Prévoir une  demi-heure à une heure pour les étapes de configuration supplémentaires sur ces pages.</strong></p>

<h3>MATERIELS + FOURBITURES NECESSAIRES</h3>

<p>Mêmes matériaux et blocs de fournitures indiqués que pour  <a href="/fr/docs/cck/installing-configuring/install-ubiquiti-router"> L'installation sur un périphérique Ubiquiti</a>.</p>

<h2>Instructions pour Windows</h2>

<h3>MISE EN ROUTE</h3>

<p>Ce guide devrait fonctionner avec n'importe quelle version de Microsoft Windows à partir de Windows XP. Si vous n'êtes pas sûr de la version de Windows que vous avez, cliquez sur le menu Démarrer et tapez ``` winver ``` dans le menu Exécuter ou dans la boîte de recherche. Les réponses les plus probables sont Windows XP, Windows Vista ou Windows 7</p>

<p><img alt="" src="/files/install_with_TFTP_support001.png" /></p>

<h3>PREPARER VOTRE ORDINATEUR POUR TFTP</h3>

<p>Le routeur Ubiquiti doit être mis dans un mode spécial pour charger les fichiers à l'aide de TFTP. Pour configurer le routeur en mode de récupération, il doit être mis sous tension avec le bouton de réinitialisation enfoncé, jusqu'à ce que les voyants d'état clignotent dans un ordre particulier. Pour mettre votre routeur en mode de récupération:</p>

<p>1. Si votre routeur est déjà mis sous tension, retirez le câble Ethernet à partir du bas du routeur. Les lumières du routeur vont s'éteidre.</p>

<p>2. Prenez un trombone avec une extrémité courbée vers l'extérieur, et appuyez doucement sur le bouton de réinitialisation sur la face inférieure du routeur sans fil, à côté de l'endroit où le câble Ethernet<br>se branche.</p>

<p>3. En maintenant enfoncé le bouton de réinitialisation,  branchez le câble Ethernet  qui permet d'alimenter le routeur.</p>

<p>4. En maintenant le bouton de réinitialisation enfoncé, regarder les lumières sur le devant de l'appareil. Les lumières sous le triangle feront une danse spéciale:</p>

<p><img alt="" src="/files/router_dance01.png" /></p>

<p>1. Les deux led au milieu, une orange et une verte, vont s'allumer en continu, puis s'éteidre</p>

<p><img alt="" src="/files/router_dance02.png" /></p>

<p>2.  Les led de gauche à droite vont s'allumer dans l'ordre: rouge, orange, vert, et vert à nouveau.</p>

<p><img alt="" src="/files/router_dance03.png" /></p>

<p><img alt="" src="/files/router_dance04.png" /></p>

<p><img alt="" src="/files/router_dance05.png" /></p>

<p>3. les 1er et 3ème vont s'allumer, puis la 2ème et 4ème, encore et encore.</p>

<p><img alt="" src="/files/router_dance06.png" /></p>

<p><img alt="" src="/files/router_dance07.png" /></p>

<p>Lorsque cela se produit, l'appareil est en mode TFTP. Vous pouvez relâcher le bouton de réinitialisation à ce moment. Si 30 secondes à une minute passent et les lumières ne coopèrent pas, vous devrez peut-être essayer de nouveau. Débranchez le câble Ethernet et recommencer le processus.</p>

<p><img alt="" src="/files/router_dance08.png" /></p>

<p>A noter que le mode de récupération est activé uniquement pendant un court laps de temps. Si le routeur n'accepte pas le logiciel, vous devrez redémarrer le processus du bouton de réinitialisation. En général, vous devrez redémarrer si le périphérique a été en mode de récupération pendant plus de trois minutes.</p>

<h3>INSTALLATION DU LOGICIEL SUR LE ROUTEUR</h3>

<p>Vous pouvez installer le logiciel Commotion sur votre routeur en passant par  une interface utilisateur graphique (GUI) pour TFTP, ou en utilisant directement la ligne de commande. Nous recommandons  l'interface graphique si vous êtes nouveau à ce processus.</p>

<p><strong>Utilisation de l'interface graphique</strong></p>

<p>Il y a plusieurs  interfaces utilisateur graphiques (GUI)  pour faciliter le transfert TFTP sur Windows. Ce guide traite le programme TFTP2.</p>

<p><strong>TFTP2</strong></p>

<p>TFTP2 est un client TFTP très simple qui inclut uniquement les paramètres nécessaires pour installer le logiciel. Vous pouvez télécharger TFTP2 sur notre site pour développeurs et l'installer.</p>

<p><img alt="" src="/files/TFTP2_1_0.png" /></p>

<ol>
<li>Entrez 192.168.1.20, l'adresse IP du routeur, dans le champ "Serveur".</li>
	<li>Laisser le champs "Mot de passe" vide</li>
	<li>Ouvrez l'explorateur de fichiers, accédez à l'endroit où vous avez téléchargé le fichier du logiciel Commotion, et sélectionnez-le.</li>
	<li>Mettez le routeur en mode TFTP comme décrit ci-dessus, et cliquez immédiatement après sur "Mise à jour".</li>
	<li>Si votre routeur est prêt et les adresses IP sont correctement configurées, une barre de progression bleue apparaît. Quand c'est terminé, vous verrez cet écran (ignorer la ligne "Réessayer").</li>
</ol>
<p>Une fois que vous avez installé TFTP2, assurez-vous que l'adresse IP de votre ordinateur est configuré correctement, comme expliqué ci-dessus dans <a href="/fr/docs/cck/installing-configuring/install-ubiquiti-router"> Installer sur un périphérique Ubiquiti.</a> Ensuite, préparez votre routeur et ouvrir TFTP2.</p>

<h3>UTILISATION DE LA LIGNE DE COMMANDE</h3>

<p><strong>Windows XP</strong></p>

<p><img alt="" src="/files/WinXP-Run-CMD_0.png" /></p>

<p>Cette version de Windows possède un client TFTP intégré. Vous aurez juste besoin d'aller  à votre invite de commande en cliquant sur le menu Démarrer, sélectionner  Exécuter et taper  <code> cmd </code></p>

<p><img alt="" src="/files/16-XP_command_prompt_0.png" /></p>

<p>Vous devrez obtenir une fenêtre intitulée <code> "C: \ WINDOWS \ system32 \ cmd.exe" </code>, ou similaire.</p>

<p>Ce programme vous donnera une interface texte à votre système Windows, où l'on peut exécuter le programme TFTP. Elle devrait ressembler à quelque chose comme :</p>

<p><code>C:\Documents and Settings\votre nom d'utilisateur</code></p>

<p>Tout d'abord, il faut aller dans le dossier où vous avez enregistré le fichier image de Commotion.</p>

<p>Pour ce faire, tapez:<code>  cd  "chemin vers le dossier où vous avez enregistré le fichier </code> et appuyez sur Entrée.</p>

<p>Cela peut ressembler à <strong> cd Bureau </strong> ou <strong> cd Téléchargements </strong> - ou quelque chose d'autre. Si vous n'êtes pas sûr, vous pouvez utiliser l'Explorateur de fichiers de Windows pour rechercher le fichier, puis cliquez dans la barre d'adresse en haut. Le chemin complet du répertoire devrait apparaître. Vous pouvez ensuite taper dans l'invite de commande après la <code>commande cd </code></p>

<p>Cela devrait ressembler à ceci: <code> C: \ votre \ chemin \ tftp -i 192.168.1.20 nom-exact-du-fichier.bin </code></p>

<p><strong> La commande se décompose en ces parties: </strong></p>

<p><code>tftp</code><br>Le nom du programme actuel que nous exécutons </p>

<p><code>-i</code><br>Choisit le  mode binaire, qui est nécessaire puisque nous envoyons un fichier et pas du texte.</p>

<p><code>192.168.1.20</code><br>L'adresse du routeur sur le quel on travaille.</p>

<p><code> mettre </code><br>
La commande du  programme TFTP pour envoyer un fichier à partir du PC à l'appareil.</p>

<p><code> nom-exact-du-fichier.bin </code><br>
L'image de Commotion pour notre matériel, tel que mentionné dans le document <a href="/fr/docs/cck/installing-configuring/install-ubiquiti-router"> Installer sur un périphérique Ubiquiti </a></p>

<p>Une fois que vous avez exécuté cette commande, il devrait y avoir un peu de texte ou un indicateur de progression qui vous permet de savoir si le fichier a été transféré sur l'appareil correctement. S'il y a un message d'erreur, revenir en arrière et assurez-vous que vous êtes dans le bon répertoire, et que vous avez tout tapé correctement. Vous pouvez ensuite revenir au document d'installation sur un  périphérique Ubiquiti et terminer l'installation de Commotion.</p>

<p><strong>Windows Vista et Windows 7</strong></p>

<p>Ces versions de Windows n'ont pas un client TFTP par défaut, mais il peut être installé assez facilement dans le menu «Ajouter des composants Windows". Afin de trouver ce menu:</p>

<p>Cliquez sur le menu Démarrer, puis Panneau de configuration.</p>

<p>Dans la fenêtre qui s'ouvre, sélectionnez l'option "Programmes".</p>

<p>Il devrait y avoir une option " activer ou désactiver des fonctionnalités Windows", sélectionnez cette option.</p>

<p>Un menu "Fonctionnalités de Windows" devrait apparaître - défiler jusqu'à ce que vous voyez l'option "Client TFTP ", puis sélectionnez-le et cliquez sur OK ou sur Appliquer.</p>

<p>Le client TFTP doit s'installer.</p>

<p>A partir de là, vous pouvez utiliser les instructions de Windows XP ci-dessus, puisque tout devrait fonctionner à l'identique une fois que le client est installé.</p>

<p><img alt="" src="/files/install_with_TFTP_support002.png" /></p>

<h2 id="instructions-for-mac-osx">Instructions pour Mac OSX</h2>

<p>Ce guide devrait fonctionner quelle que soit la  version de Mac OSX.</p>

<h3>PREPARER VOTRE ORDINATEUR POUR TFTP</h3>

<p>Le routeur  Ubiquiti est à l'écoute pour une connexion TFTP sur une adresse spécifique. Pour que votre ordinateur puisse  se connecter, il aura besoin d'une adresse IP avec les paramètres suivants:</p>

<p>Adresse IP statique: <code> 192.168.1.254 </code><br>
Masque de sous-réseau:<code> 255.255.255.0  </code><br>
Passerelle: <code>192.168.1.1 </code></p>

<p>Si vous avez besoin d'aide pour attribuer une adresse IP statique à votre ordinateur Mac, consultez <a target="_blank" href="http://www.dummies.com/how-to/content/how-to-set-your-ip-address-range-on-mac-os-x-snow-.html">ce guide</a></p>

<p>l existe deux options pour effectuer l'installation du logiciel Commotion sur votre routeur : utiliser la ligne de commande ou une interface utilisateur graphique (GUI). Toutes les deux sont détaillées ci-après, mais nous vous recommandons de suivre la méthode GUI. Vous pouvez télécharger MacTFTP Client  et l'installer sur votre ordinateur. Vous pouvez le télécharger sur le site <a href="http://mactechnologies.com" target="_blank">mactechnologies.com</a>.</p>

<h3>PREPARER LE ROUTEUR POUR LE MODE DE RECUPERATION</h3>

<p>Le routeur Ubiquiti doit être mis dans un mode spécial pour charger les fichiers à l'aide de TFTP. Pour configurer le routeur en mode de récupération, il doit être mis sous tension avec le bouton de réinitialisation enfoncé, jusqu'à ce que les voyants d'état clignotent dans un ordre particulier. Pour mettre votre routeur en mode de récupération:</p>

<p>1. Si votre routeur est déjà mis sous tension, retirez le câble Ethernet à partir du bas du routeur. Les lumières du routeur vont s'éteidre.</p>

<p>2. Prenez un trombone avec une extrémité courbée vers l'extérieur, et appuyez doucement sur le bouton de réinitialisation sur la face inférieure du routeur sans fil, à côté de l'endroit où le câble Ethernet se branche.</p>

<p>3. En maintenant enfoncé le bouton de réinitialisation,  branchez le câble Ethernet  qui permet d'alimenter le routeur.</p>

<p>4. En maintenant le bouton de réinitialisation enfoncé, regarder les lumières sur le devant de l'appareil. Les lumières sous le triangle feront une danse spéciale:</p>

<p><img alt="" src="/files/install_with_TFTP_support001.png" /></p>

<p>1. Les deux led au milieu, une orange et une verte, vont s'allumer en continu, puis s'éteidre</p>

<p><img alt="" src="/files/router_dance02.png" /></p>

<p>2.  Les led de gauche à droite vont s'allumer dans l'ordre: rouge, orange, vert, et vert à nouveau.</p>

<p><img alt="" src="/files/router_dance03.png" /></p>

<p><img alt="" src="/files/router_dance04.png" /></p>

<p><img alt="" src="/files/router_dance05.png" /></p>

<p>3. les 1er et 3ème vont s'allumer, puis la 2ème et 4ème, encore et encore.</p>

<p><img alt="" src="/files/router_dance06.png" /></p>

<p><img alt="" src="/files/router_dance07.png" /></p>

<p>Lorsque cela se produit, l'appareil est en mode TFTP. Vous pouvez relâcher le bouton de réinitialisation à ce moment. Si 30 secondes à une minute passent et les lumières ne coopèrent pas, vous devrez peut-être essayer de nouveau. Débranchez le câble Ethernet et recommencer le processus.</p>

<p><img alt="" src="/files/router_dance08.png" /></p>

<p>A noter que le mode de récupération est activé uniquement pendant un court laps de temps. Si le routeur n'accepte pas le logiciel, vous devrez redémarrer le processus du bouton de réinitialisation. En général, vous devrez redémarrer si le périphérique a été en mode de récupération pendant plus de trois minutes.</p>

<h3>INSTALLATION DU LOGICIEL SUR LE ROUTEUR</h3>

<p>Vous pouvez installer le logiciel Commotion sur votre routeur à l'aide d'une interface utilisateur graphique (GUI) pour TFTP , ou en utilisant la ligne de commande. Nous recommandons l'option de l'interface graphique si vous êtes nouveau à ce processus.</p>

<p><strong>Utilisation de l'interface graphique</strong></p>

<p>Ce guide documente l'utilisation d'un logiciel appelé MacTFTP , client par MacTechnologies Consulting.</p>

<p><strong>MacTFTP Client (GUI)</strong></p>

<p>Le Client MacTFTP comprend uniquement les paramètres nécessaires pour installer le logiciel . Vous pouvez le télécharger à partir mactechnologies.com et l'installer.</p>

<p>Une fois que vous avez installé MacTFTP client, assurez-vous que l'adresse IP de votre ordinateur est configurée correctement, comme mentionné ci-dessus dans la section Préparer votre ordinateur pour TFTP. Ensuite, préparez votre routeur et ouvrez le client MacTFTP.</p>

<p><img alt="" src="/files/MacTFTP_1_0.png" /></p>

<ol>
<li>Assurez-vous que le bouton "Envoyer" est mis en évidence.</li>
	<li>Entrez 192.168.1.20, l'adresse IP du routeur dans le champ "Adresse".</li>
	<li>Laisser le champs "Mot de passe" vide.</li>
	<li>Ouvrez le navigateur de fichiers, accédez à l'endroit où vous avez téléchargé l'image pour le projet Commotion, et sélectionnez-le. Mettez le routeur en mode TFTP, immédiatement après.</li>
	<li>Cliquez sur "Démarrer"</li>
</ol>
<p>Si votre routeur est prêt en mode TFTP et les adresses IP sont correctement configurées, une barre de progression bleue apparaît. Quand c'est terminé, vous allez voir cet écran.</p>

<h3>UTILISATION DE LA LIGNE DE COMMANDE</h3>

<p>Toutes les versions de Macintosh OSX devraient avoir un client TFTP installé. Il est accessible depuis le programme Terminal, qui est une interface en mode texte pour le système OSX. Vous pouvez trouver ce programme en naviguant, depuis le dossier Applications, dans le dossier Utilitaires.</p>

<p><img alt="" src="/files/OSX_screengrab_2_0.png" /></p>

<p>Lancer alors le programme intitulé "Terminal", il devrait ouvrir une interface de ligne de commande intitulé "Terminal - bash", ou quelque chose similaire.</p>

<p><img alt="" src="/files/OSX_screengrab_3_1.png" /></p>

<p>La fenêtre peut être différente, en fonction de la version de Mac OS X que vous utilisez. Vous devriez voir une invite de commande qui ressemble à ceci:</p>

<p><code>nom_ordinateur:~ nom_utilisateur$</code></p>

<p>Tout d'abord, il faut aller dans le dossier où vous avez enregistré le fichier image de Commotion. Pour ce faire, tapez  <code> cd "chemin vers le dossier où vous avez enregistré le fichier" </code> et appuyez sur Entrée.</p>

<p>Cela peut ressembler à <strong> cd Bureau </strong> ou <strong> cd Téléchargements </strong> - ou quelque chose d'autre. Si vous n'êtes pas sûr, vous pouvez utiliser l'outil Recherche  pour accéder au fichier, puis frappez <code> commande I </code>. La boîte de dialogue "Get Info" devrait apparaître, où vous pouvez trouver le chemin d'accès complet dans l'onglet Général, intitulée "Où:". Vous pouvez ensuite taper ce chemin dans le terminal après la commande <code>cd  </code>. Pour vérifier que les fichiers sont dans le répertoire courant, vous pouvez taper ls, qui devrait afficher une liste des fichiers.</p>

<p><img alt="" src="/files/OSX_screengrab_4-1.png" /></p>

<p>Une fois que vous êtes dans le bon répertoire, vous pouvez exécuter le client TFTP. Pour ce faire, il suffit de taper <code> tftp </code> à l'invite et appuyez sur Entrée. Votre ligne de commande doit devenir comme suit:</p>

<p><code>tftp</code></p>

<p>A partir de  là, entrer les commandes dans l'ordre:</p>

<p><code>connect 192.168.1.20</code>- Indique  au client de parler au routeur.</p>

<p><code>verbose</code>- Demande au client de fournir des rapports plus détaillés sur ce qu'il fait.</p>

<p><code>binary</code>- Nécessaire car il s'agit du transfert d'un fichier, et non du texte.</p>

<p><code>put nom-exact-fichier.bin</code></p>

<p>Vous devriez voir des chiffres clignotant, puis une ligne similaire à"<code>Sent ### bytes in ##.# seconds [### bits per second]</code>". Vous pouvez alors taper 'quit' à l'invite, et votre Terminal reviendra au mode normal.</p>

<p> S'il y a un message d'erreur, revenir en arrière et assurez-vous que vous êtes dans le bon répertoire, et que vous avez tout tapé correctement. Vous pouvez ensuite revenir à la section <a href="/fr/docs/cck/installing-configuring/install-ubiquiti-router">Installation sur un périphérique Ubiquiti </a>.</p>

<h2 id="instructions-for-linux">Instructions pour Linux</h2>

<p>En fonction de votre distribution Linux, vous pouvez avoir un client TFTP est installé par défaut . Vous pouvez vérifier dans Terminal, si ce n'est pas le cas, il sera possible d'installer un client sur ​​Terminal, puis l'utiliser.</p>

<p>Pour commencer, veuillez ouvrir l'application Terminal :</p>

<p>Si vous utilisez Gnome comme gestionnaire de fenêtre, vous devriez être capable de trouver un programme de terminal dans le menu principal, sous Accessoires&gt; Terminal.</p>

<p>Si vous utilisez KDE comme gestionnaire de fenêtres, vous devriez être en mesure d'accéder au programme de terminal dans le KMenu, sous Système&gt; Konsole.</p>

<p>Si vous utilisez un autre gestionnaire de fenêtres, il est fort probable que vous savez déjà comment accéder au programme terminal</p>

<p>Si vous n'êtes pas sûr, ou vous n'avez pas un gestionnaire de fenêtres, allez simplement  à un terminal en appuyant sur ALT, CTRL et le nombre 1 ou 2. Cela devrait faire apparaître un terminal en plein écran. Vous aurez probablement à vous connecter en utilisant les identifiants crées configurés sur l'ordinateur.</p>

<p>Vous verrez désormais  une invite similaire à:  <code>nom_ordinateur: ~ $ </code></p>

<p>Tapez <code> which TFTP </code> à cette invite et appuyez sur Entrée. Cela va retourner soit l'emplacement du programme TFTP si vous l'avez installé, ou  une erreur dans le cas contraire.</p>

<p>Si vous avez un client TFTP, le résultat devrait ressembler à <code>  /usr/bin/tftp</code></p>

<p>Si vous ne l'avez pas, le résultat devrait ressembler à <code> which: no tftp in (/path...</code></p>

<p>Si vous avez un client TFTP installé, vous pouvez sauter ces quelques étapes. Sinon il faut  installer un client avant de continuer. La procédure  dépend de la distribution utilisée. Nous allons détailler ci-dessous les commandes à taper pour  quelques distributions courantes. Les commandes qui sont affichées à l'invite normale que nous avons commencé ci-dessus. Vous aurez besoin de connaître le mot de passe administrateur (root) que vous avez défini à l'installation du système.</p>

<p>Ubuntu:
	$ sudo aptitude install tftp
</p>

<p>Debian:
	$ sudo apt-get install tftp
</p>

<p>Arch:
	$ sudo pacman -Ss tftp-hpa
</p>

<p>Fedora:
	$ sudo rpm -i tftp
</p>

<p>Il n'est pas possible de couvrir toutes les distributions Linux, si vous n'êtes pas sûr de la procédure pour votre OS, utilisez Google!</p>

<p>Après avoir tapé la commande appropriée pour votre distribution, vous devriez voir une confirmation à l'écran que votre paquet a été installé. Pour vérifier, vous pouvez taper <code> which TFTP </code> à l'invite. Si vous recevez une réponse indiquant un chemin unique, comme illustré ci-dessus, alors vous êtes  prêt à continuer.</p>

<h3>PREPARER VOTRE ORDINATEUR POUR TFTP</h3>

<p>Le périphérique Ubiquiti est à l'écoute de connexion TFTP provenant d'une seule source, ou d'un ordinateur avec une adresse spécifique. Vous aurez besoin de définir l'adresse IP de votre ordinateur avec les paramètres suivants:</p>

<p>Adresse IP statique: <code> 192.168.1.254 </code><br>
Masque de sous-réseau:<code> 255.255.255.0  </code><br>
Passerelle: <code>192.168.1.1 </code></p>

<p>Si vous avez besoin d'aide pour assigner une adresse IP static à votre ordinateur Linux, consultez ce guide.</p>

<p><img alt="" src="/files/install_with_TFTP_support001.png" /></p>

<h3>PREPARER LE ROUTEUR POUR LE MODE DE RECUPERATION</h3>

<p>Le routeur Ubiquiti doit être mis dans un mode spécial pour charger les fichiers à l'aide de TFTP. Pour configurer le routeur en mode de récupération, il doit être mis sous tension avec le bouton de réinitialisation enfoncé, jusqu'à ce que les voyants d'état clignotent dans un ordre particulier. Pour mettre votre routeur en mode de récupération:</p>

<p>1. Si votre routeur est déjà mis sous tension, retirez le câble Ethernet à partir du bas du routeur. Les lumières du routeur vont s'éteidre.</p>

<p>2. Prenez un trombone avec une extrémité courbée vers l'extérieur, et appuyez doucement sur le bouton de réinitialisation sur la face inférieure du routeur sans fil, à côté de l'endroit où le câble Ethernet se branche.</p>

<p>3. En maintenant enfoncé le bouton de réinitialisation,  branchez le câble Ethernet  qui permet d'alimenter le routeur.</p>

<p>4. En maintenant le bouton de réinitialisation enfoncé, regarder les lumières sur le devant de l'appareil. Les lumières sous le triangle feront une danse spéciale:</p>

<p><img alt="" src="/files/router_dance01.png" /></p>

<p>1. Les deux led au milieu, une orange et une verte, vont s'allumer en continu, puis s'éteidre</p>

<p><img alt="" src="/files/router_dance02.png" /></p>

<p>2.  Les led de gauche à droite vont s'allumer dans l'ordre: rouge, orange, vert, et vert à nouveau.</p>

<p><img alt="" src="/files/router_dance03.png" /></p>

<p><img alt="" src="/files/router_dance04.png" /></p>

<p><img alt="" src="/files/router_dance05.png" /></p>

<p>3. les 1er et 3ème vont s'allumer, puis la 2ème et 4ème, encore et encore.</p>

<p><img alt="" src="/files/router_dance06.png" /></p>

<p><img alt="" src="/files/router_dance07.png" /></p>

<p>Lorsque cela se produit, l'appareil est en mode TFTP. Vous pouvez relâcher le bouton de réinitialisation à ce moment. Si 30 secondes à une minute passent et les lumières ne coopèrent pas, vous devrez peut-être essayer de nouveau. Débranchez le câble Ethernet et recommencer le processus.</p>

<p><img alt="" src="/files/router_dance08.png" /></p>

<p>A noter que le mode de récupération est activé uniquement pendant un court laps de temps. Si le routeur n'accepte pas le logiciel, vous devrez redémarrer le processus du bouton de réinitialisation. En général, vous devrez redémarrer si le périphérique a été en mode de récupération pendant plus de trois minutes.</p>

<h3>INSTALLATION DU LOGICIEL SUR LE ROUTEUR</h3>

<p>Maintenant il faut aller  vers le dossier où vous avez enregistré le fichier image de Commotion, comme mentionné dans le document <a href="/fr/docs/cck/installing-configuring/install-ubiquiti-router"> Installer sur un périphérique Ubiquiti </a></p>

<p>Pour ce faire, tapez:<code>  cd  "chemin vers le dossier où vous avez enregistré le fichier" </code> et appuyez sur Entrée.</p>

<p>Cela peut ressembler à <strong> cd ~/Desktop </strong> ou  <strong>cd  ~/Téléchargements</strong> - ou autre. Si vous n'êtes pas sûr, vous pouvez utiliser Nautilus dans Gnome pour rechercher le fichier, et frappez Control-L. Cela devrait afficher le chemin vers le répertoire que vous consultez. Sous KDE, utilisez  Konqueror  pour rechercher le fichier, puis lisez le chemin d'accès dans la barre d'état en haut.</p>

<p>Une fois dans le bon répertoire, vous pouvez exécuter le client TFTP. Pour ce faire, il suffit de taper <code> tftp </code> à l'invite et appuyez sur Entrée. Certains clients vous demander (to), il faut alors mettre l'adresse IP 192.168.1.20. Votre ligne de commande doit passer à la suivante:<br><code>tftp </code></p>

<p>A partir de  là, entrer les commandes dans l'ordre:</p>

<p><code>connect 192.168.1.20  </code>- Si vous ne l'avez pas mis à l'invite (to). Indiquez au client de parler au routeur.</p>

<p><code>verbose </code>- Indique au client de fournir un rapport détaillé sur son activité.</p>

<p><code>binary</code>- Nécessaire car il s'agit du transfert d'un fichier, et non du texte.</p>

<p><code>put nom-exact-fichier.bin</code>- L'image Commotion pour le matériel, tel que mentionné dans le document "installation de Commotion sur les nœuds sans fil".</p>

<p>Vous devriez voir des chiffres clignotant, puis une ligne similaire à"<code>Sent ### bytes in ##.# seconds [### bits per second]</code>". Vous pouvez alors taper 'quit' à l'invite, et votre Terminal reviendra au mode normal.</p>

<p>S'il y a un message d'erreur, revenir en arrière et assurez-vous que vous êtes dans le bon répertoire, et que vous avez tout tapé correctement. Vous pouvez ensuite revenir au document d'installation sur un  périphérique Ubiquiti et terminer l'installation de Commotion.</p>

<h2 id="section-definitions">Définitions</h2>

<dl>
<dt>TFTP</dt>
	<dd>un protocole de transfert de fichiers connu pour sa simplicité. Il est généralement utilisé pour le transfert automatisé des fichiers de configuration et d'amorçage entre les machines dans un environnement local.</dd>
	<dt>Firmware</dt>
	<dd>la combinaison de mémoire persistante ,de code du programme et des données stockées. En d'autres termes, un système d'exploitation très petit et simple  pour les appareils comme  les ordinateurs, les montres numériques, caméras numériques, téléphones mobiles, les appareils électroménagers et plus encore.</dd>
</dl>

<h2 id="section-related-information">Informations  connexes</h2>
<p>Ce module est un document d'accompagnement <a href="/fr/docs/cck/installing-configuring/install-ubiquiti-router">Install on a Ubiquiti Device</a>. Il doit être consulté pour un aperçu du processus!</p>

<h2 id="section-external-resources">Ressources externes</h2>
<p>Interfaces utilisateur graphiques (GUI) pour aider le processus de TFTP:</p>
<p>Windows: <a href="https://code.commotionwireless.net/attachments/download/272/tftp2.exe" target="_blank">https://code.commotionwireless.net/attachments/download/272/tftp2.exe</a></p>
<p>Mac OSX: <a href="http://www.mactechnologies.com/index.php?page=downloads#tftpclient" target="_blank">http://www.mactechnologies.com/index.php?page=downloads#tftpclient</a></p>
