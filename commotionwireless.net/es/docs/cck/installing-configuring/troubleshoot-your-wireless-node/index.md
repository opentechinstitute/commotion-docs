---
layout: default
title: Solución de Problemas de tu Nodo Inalámbrico
site_section: docs
sub_section: [cck,cck-installing]
pdf: cck/installing-configuring/4-Troubleshoot_Your_Wireless_Node.pdf
pdf-all: true
categories:
created: 2013-11-04
changed: 2013-12-23
post_author: critzo
lang: es
---
 <p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__648 img__view_mode__media_large attr__format__media_large" src="/files/troubleshooting_node_hosts_top.png" style="width: 510px; height: 325px;" typeof="foaf:Image" /></p>

<section id="introduction">
<h2>Introducción</h2>

<p>Este documento incluye&nbsp;pasos para identificar y &nbsp;resolver los problemas más comunes que pueda surgir con tu router Commotion o red inalámbrica. Incluye:</p>

<ul>
	<li>Algunos ejemplos de los problemas más comunes de redes.</li>
	<li>Una guía paso a paso para evaluar y solucionar los problemas.</li>
	<li>Algunos suministros que podrías necesitar para solucionar los problemass.</li>
	<li>Ligas a los recursos que puedas necesitar mientras trabajas fuera de línea.</li>
</ul>

<p>Dependiendo de la severidad del problema, puede tomarte desde <strong>cinco minutos hasta varias horas</strong> para exitosamente solucionar problemas de un nodo o red.</p>
</section>

<section id="materials-and-supplies-needed">
<h3>MATERIALES + SUMINISTROS NECESARIOS</h3>

<p>Para solucionar problemas de tu nodo, necesitarás los siguientes artículos a la mano:</p>

<ul>
	<li>Una impresión, o acceso fuera de línea a, este documento (puedes imprimir esta página web)</li>
	<li>Un cable Ethernet extra</li>
	<li>Una computadora con un puerto Ethernet</li>
	<li>La imagen de software Commotion, si necesitas iniciar de nuevo</li>
	<li>(Optional) Una impresión de, o acceso fuera de linea a, <a href="https://commotionwireless.net/docs/cck/installing-configuring/common-configuration">Configuraciones Comunes</a> y <a href="https://commotionwireless.net/docs/cck/installing-configuring/configure-commotion">Configura Commotion</a></li>
	<li>(Opcional) Un router de soporte</li>
</ul>
</section>

<section id="troubleshooting-overview">
<h3>Información general sobre problemas comunes</h3>

<p>El problema más común que un usuario de una red inalámbrica experimentará será no poder conectarse a la red o al Internet. No puede haber muchas causas para los problemas comunes con la red. Problemas con el hardware del router, un cable Ethernet, un adaptador de corriente, la electricidad, la puerta de enlace de Internet, o el software Commotion podrían ser una parte del problema. El proceso de solución de problemas es trabajar a través de opciones y descartar problemas al ver lo que está sucediendo en cada parte de la conexión de red.</p>

<p><b>Comienza la solución de problemas al hacerte estas preguntas&nbsp;y al ir&nbsp;a la primera sección donde tu respuesta sea "no":</b></p>

<table border="0" cellpadding="1" cellspacing="1" style="width: 510px;">
	<tbody>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__637 img__view_mode__media_original attr__format__media_original" src="/files/Troubleshooting_power_question.png" style="width: 100px; height: 95px; margin: 15px 10px;" typeof="foaf:Image" /></td>
			<td>
			<p><a href="#no-power">¿Está prendido el router?</a></p>
			</td>
		</tr>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__638 img__view_mode__media_original attr__format__media_original" src="/files/Troubleshooting_visibleap_question.png" style="width: 100px; height: 89px; margin: 21px 10px;" typeof="foaf:Image" /></td>
			<td>
			<p><a href="#no-visible-ap">¿Puedes ver el punto de acceso en tu dispositivo de cliente?</a></p>
			</td>
		</tr>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__639 img__view_mode__media_original attr__format__media_original" src="/files/Troubleshooting_associateap_question.png" style="width: 100px; height: 89px; margin: 21px 10px;" typeof="foaf:Image" /></td>
			<td><a href="#cant-connect-ap">¿Puedes conectarte al punto de acceso con tu dispositivo cliente?</a></td>
		</tr>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__640 img__view_mode__media_original attr__format__media_original" src="/files/Troubleshooting_splashed_question.png" style="width: 100px; height: 95px; margin: 15px 10px;" typeof="foaf:Image" /></td>
			<td>
			<p><a href="#no-splash-page">¿No estás viendo la página splash después de asociarte con el punto de acceso?</a></p>
			</td>
		</tr>
		<!--<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__641 img__view_mode__media_original attr__format__media_original" src="/files/Troubleshooting_internet_question.png" style="width: 100px; height: 94px; margin: 16px 10px;" typeof="foaf:Image" /></td>
			<td>
			<p><a href="#no-internet">¿Estás obteniendo la página splash, pero simplemente no puedes conectarte a Internet?</a></p>
			</td>
		</tr>-->
	</tbody>
</table>
</section>

<section id="no-power">
<h2>Problemas de poder: Si el router no está prendido</h2>
<img alt="" class="media-image attr__typeof__foaf:Image img__fid__512 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_power_no_0.png" style="width: 100px; height: 90px; float: right; margin: 20px 10px;" typeof="foaf:Image" />

<p>&nbsp;</p>

<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
	<tbody>
		<tr>
			<td>
			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__714 img__view_mode__media_large attr__format__media_large" src="/files/styles/large/public/troubleshooting_checkPOE.png?itok=XFS1ormf" style="width: 240px; height: 185px;" typeof="foaf:Image" /></p>
			</td>
			<td>
			<p><strong>¿Tiene el adaptador PoE poder?</strong></p>

			<p>Asegurate que el adaptador PoE esté completamente conectado a una conexión eléctrica y que la luz de poder en el adaptador PoE este prendida.</p>
			</td>
		</tr>
		<tr>
			<td>
			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__524 img__view_mode__media_large attr__format__media_large" height="262" src="/files/troubleshoot_checkoutlet.png" typeof="foaf:Image" width="237" /></p>
			</td>
			<td>
			<p><strong>¿Sirve la toma de corriente?</strong></p>

			<p>Si el PoE no está prendido, revisa la toma de corriente con otro aparato eléctrico que sepas que funciona. Si ese dispositivo tampoco se alimenta, usa otra toma.</p>

			<p>Si la toma funciona, el adaptador PoE puede estar dañado. Intenta reemplazado el adaptador PoE.</p>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<p><strong>Checa los cables.</strong><br />
			<img alt="" class="media-image attr__typeof__foaf:Image img__fid__525 img__view_mode__media_large attr__format__media_large" height="290" src="/files/troubleshoot_checkcables.png" typeof="foaf:Image" width="480" /><br />
			Si el adaptador PoE tiene poder pero el router no, puede ser un problema con el cable Ethernet entre el PoE y el router. Intenta con un cable Ethernet diferente.</p>

			<p>Revisa para asegurarte que todos los cables estén firmemente conectados, entre el adaptador PoE y el router, entre el adaptador PoE.******************Check to be sure all cables are securely plugged-in, between the PoE adapter and router, between the PoE adapter</strong></p>

			<p>Si los pasos de arriba no resuelven el problema de poder, desconecta y reconecta el adaptador PoE para reinicar el adaptador y el router. Espera un minuto o dos para dejar que el router reinicie antes de intentar iniciar sesión. Si esto no funciona, entonces hay un problema con el router y deberías reemplazarlo.</p>
			</td>
		</tr>
	</tbody>
</table>

<h3>Power: Checked</h3>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__513 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_power_yes_0.png" style="width: 97px; height: 94px; margin: 16px 13px;" typeof="foaf:Image" /><br />
<strong>En este punto, sabes que el suministro de energía para el router está bien. Muévete a la siguiente sección de solución de problemas.</strong></p>
</section>

<section id="no-visible-ap">
<h2>No hay Puntos de Acceso Visibles: Si no puedes ver el Punto de Acceso</h2>
<img alt="" class="media-image attr__typeof__foaf:Image img__fid__514 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_visibleap_no_0.png" style="width: 100px; height: 88px; float: right; margin: 12px 10px;" typeof="foaf:Image" />
<p>&nbsp;</p>

<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
	<tbody>
		<tr>
			<td colspan="2">
			<p><strong>¿Estás lo suficientemente cerca del punto de acceso?</strong></p>

			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__527 img__view_mode__media_large attr__format__media_large" height="110" src="/files/troubleshooting_ap_distance.png" typeof="foaf:Image" width="480" /></p>

			<p>Asegúrate de estar lo suficientemente cerca del Punto de Acceso para que sea visible en tu dispositivo inalámbrico. También, checa si hay condiciones del ambiente alrededor del nodo que estén bloqueando la señal.</p>
			</td>
		</tr>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__528 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_CCK_Hidden_AP.png" style="width: 250px; height: 91px;" typeof="foaf:Image" /></td>
			<td>
			<p><strong>Está escondido el punto de acceso?</strong></p>

			<p>Si sabes que hay un Punto de Acceso y estás cerca del router, pero aún así no puedes ver el punto de acceso en tu dispositivo de cliente, el administrador de red puede haber configurado el punto de acceso a invisible. Intenta ingresar el punto de acceso de forma manual en tu dispositivo y su administrador de red.</p>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<p><strong>¿Está el Punto de Acceso habilitado en el nodo?</strong></p>

			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__738 img__view_mode__media_large attr__format__media_large" height="213" src="/files/styles/large/public/adv_network_wifi.png?itok=fZX0pK5a" typeof="foaf:Image" width="480" /><img alt="" class="media-image attr__typeof__foaf:Image img__fid__530 img__view_mode__media_large attr__format__media_large" height="169" src="/files/Troubleshoot_enable_ap.png" typeof="foaf:Image" width="480" /></p>

			<p>En la interfaz del administrador, ve a <strong>Advanced -&gt; Network -&gt; WiFi</strong>&nbsp;y asegúrate de que el punto de acceso este habilitado. Si cambias esta configuración puede ser que necesites reiniciar el nodo.</p>
			</td>
		</tr>
	</tbody>
</table>

<h3>AP Visibilidad: Revisada</h3>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__513 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_power_yes_0.png" style="width: 97px; height: 94px; margin: 16px 13px;" typeof="foaf:Image" /><img alt="" class="media-image attr__typeof__foaf:Image img__fid__515 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_visibleap_yes.png" style="width: 98px; height: 98px; margin: 12px;" typeof="foaf:Image" /><br />
<strong>El punto de acceso es visible.</strong></p>
</section>

<section id="cant-connect-ap">
<h2>No puedes conectar el Punto de Acceso: Tu dispositivo no está sosteniendo una conexión</h2>
<img alt="" class="media-image attr__typeof__foaf:Image img__fid__516 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_associateap_no.png" style="width: 100px; height: 88px; float: right; margin: 5px;" typeof="foaf:Image" />
<p>&nbsp;</p>

<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
	<tbody>
		<tr>
			<td colspan="2">
			<p><strong>¿Estás muy lejos del punto de acceso?</strong></p>

			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__527 img__view_mode__media_large attr__format__media_large" height="110" src="/files/troubleshooting_ap_distance.png" typeof="foaf:Image" width="480" /></p>

			<p>Debido a que los nodos a menudo tienen una señal más fuerte que tu dispositivo cliente, podrías ser capaz de ver una señal fuerte en tu dispositivo cliente, pero tu dispositivo cliente puede no ser lo suficientemente poderoso para comunicarse con el nodo a distancia.</p>
			</td>
		</tr>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__531 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshoot_device_powercycle.png" style="width: 175px; height: 300px;" typeof="foaf:Image" /></td>
			<td>
			<p><strong>Reinicia lo inalámbrico y/o tu dispositivo.</strong></p>

			<p>Si aún no puedes conectarte, intenta apagando y prendiendo de nuevo la radio Wi-Fi en tu dispositivo cliente o reiniciando el dispositivo.</p>
			</td>
		</tr>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__532 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_CCK_Connect_AP.png" style="width: 240px; height: 65px;" typeof="foaf:Image" /></td>
			<td>
			<p><strong>Asegurate de intentar conectar el Punto de Acceso, no la señal (mesh) ad-hoc.</strong></p>

			<p>Usualmente la diferencia entre dos tipos de señal está indicada por su icono en tu administrador de redes de tu dispositivo cliente.</p>
			</td>
		</tr>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__533 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_CCK_Secure_AP.png" style="width: 240px; height: 122px;" typeof="foaf:Image" /></td>
			<td>
			<p><strong>Si el Punto de Acceso es seguro, asegúrate de que tengas la clave correcta o contraseña de red, para ello.</strong></p>

			<p>Esta es generalmente diferente de la contraseña de administración de raíz.</p>
			</td>
		</tr>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__534 img__view_mode__media_large attr__format__media_large" height="109" src="/files/Wireless_Interference_problem.png" typeof="foaf:Image" width="240" /></td>
			<td>
			<p><strong>¿Hay demasiados routers en el cuarto?</strong></p>

			<p>Puede haber mucha interferencia en el mismo canal Wi-Fi. Para reducir la interferencia, intenta remover algunos routers, espaciando los routers más separados, o apagando algunos routers.</p>
			</td>
		</tr>
	</tbody>
</table>

<h3>Punto de Acceso asociado con el Cliente: Revisado</h3>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__513 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_power_yes_0.png" style="width: 97px; height: 94px; margin: 16px 13px;" typeof="foaf:Image" /><img alt="" class="media-image attr__typeof__foaf:Image img__fid__713 img__view_mode__media_large attr__format__media_large" src="/files/styles/large/public/Troubleshooting_visibleap_yes_0.png?itok=Nir2QWp-" style="width: 98px; height: 98px; margin: 12px;" typeof="foaf:Image" /><img alt="" class="media-image attr__typeof__foaf:Image img__fid__517 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_associateap_yes.png" style="width: 97px; height: 92px; margin: 18px 13px;" typeof="foaf:Image" /><br />
<strong>El dispositivo cliente está conectado al Punto de Acceso.</strong></p>
</section>

<section id="no-splash-page">
<h2>No hay Página de Bienvenida: Si estás en en el Punto de Acceso pero no hay lista de anuncios host net (HNAs) para ver si hay nodos en la red proporcionando una puerta de entrada ******************No Welcome Page: If you are on the AP but arens host net announcements (HNAs) list to see if any nodes on the network are providing a gateway.</p>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<p><strong>Busca una Puerta de Entrada.</strong></p>

			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__538 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_CCK_HNAs.png" typeof="foaf:Image" width="480" /></p>

			<p>Para ver los anuncios host net en la interfaz de administración Commotion, ve a ************To see the list of host net announcements in the Commotion admin interface, go to******* <strong>Advanced -> Status -> OLSR</strong> y luego <strong>da clic en la tabla HNA</strong>. Esto lista cualquier subnet sin malla adjuntada a la red mesh, como redes de clientes y puertas de entrada de 0.0.0.0 en cualquier lugar de la lista, luego sabe que hay una Puerta de Entrada al Internet en algún lugar de la red. Si el nodo no tiene una entrada  0.0.0.0 en la lista, entonces no ve una ruta al Internet. Revisa las conexiones de red mesh para asegurarte que todos los routers estén enmallados correctamente, y que las señales de los enlaces sean lo suficientemente fuertes entre nodos.</p>
			</td>
		</tr>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__539 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_CCK_plug_Ethernet_modem.png" style="width: 210px; height: 109px;" typeof="foaf:Image" /></td>
			<td>
			<p><strong>Si aún no puedes acceder al Internet, conecta un cable Ethernet directamente al módem de la Puerta de Entrada.</strong></p>

			<p>Si puedes acceder de esta forma, entonces el problema es con el nodo Commotion. Si no puedes acceder de esta forma, entonces hay un problema con la conexión a Internet, que está fuera del alcance de esta guía.</p>
			</td>
		</tr>
	</tbody>
</table>

<h3>Página de Bienvenida: Revisada</h3>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__513 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_power_yes_0.png" style="width: 97px; height: 94px; margin: 16px 13px;" typeof="foaf:Image" /><img alt="" class="media-image attr__typeof__foaf:Image img__fid__515 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_visibleap_yes.png" style="width: 98px; height: 98px; margin: 12px;" typeof="foaf:Image" /><img alt="" class="media-image attr__typeof__foaf:Image img__fid__517 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_associateap_yes.png" style="width: 97px; height: 92px; margin: 18px 13px;" typeof="foaf:Image" /><img alt="" class="media-image attr__typeof__foaf:Image img__fid__521 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_splashed_yes.png" style="width: 96px; height: 90px; margin: 20px 14px;" typeof="foaf:Image" /><br />
<strong>La página de bienvenida aparece en el dispositivo cliente.</strong></p>
</section>
<!--
<section id="no-internet">
<h2>Página de Bienvenida mostrada, pero no Internet: Si la página de bienvenida aparece, pero no puedes entrar a Internet</h2>
<img alt="" class="media-image attr__typeof__foaf:Image img__fid__522 img__view_mode__media_large attr__format__media_large" src="/files/Troubleshooting_internet_no.png" style="width: 100px; height: 93px; float: right; margin: 17px 10px;" typeof="foaf:Image" />
<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
	<tbody>
		<tr>
			<td colspan="2">
			<p><strong>Si estás siendo dirigido a la página de bienvenida, pero aún así ******************If you are being directed to the landing page, but still cancomputer to computersuch as for file sharing.*********** El término también puede referirse a conexiones de red sin planeación, descentralizadas.</dd>
	<dt>Dispositivo Cliente</dt>
	<dd>El dispositivo con radio WiFi que usas para conectarte a un punto de acceso inalámbrico, por ejemplo, una computadora, celular, o dispositivo de tableta.</dd>
	<dt>AP (Access Point)</dt>
	<dd>A device that allows wireless devices to connect to a wired network using WiFi or related standards.</dd>
	<dt>PoE (Power over Ethernet)</dt>
	<dd>Describes systems which pass electrical power along with data on Ethernet cabling.</dd>
	<dt>OLSR (Optimized Link State Routing)</dt>
	<dd>The routing protocol used by Commotion. This protocol determines the routes for the nodes in the network.</dd>
	<dt>Router</dt>
	<dd>A device that determines how messages move through a computer network.</dd>
	<dt>Image</dt>
	<dd>Another name for the firmware or operating system software, like Commotion, that makes a router function.</dd>
</dl>
</section>

<section class="related-information" id="section-related-information">
<h2>Información Relacionada</h2>

<p>Hay muchos otros documentos en el Kit de Construcción Commotion que tienen información relacionada sobre configurar y hacer cambios en tu nodo:</p>

<ul>
	<li><a href="https://commotionwireless.net/docs/cck/installing-configuring/configure-commotion">Configura Commotion</a></li>
	<li><a href="https://commotionwireless.net/docs/cck/installing-configuring/common-configuration">Configuraciones Comunes</a></li>
</ul>
</section>

<section class="related-information" id="section-external-resources">
<h2>Recursos Externos</h2>
Recomendamos leer el Capítulo 15 de <a href="http://wndw.net/">Redes Inalámbricas en el Mundo en Desarrollo</a>, sobre mantenimiento y solución de problemas.****************
Wireless Networking in the Developing World</a>, on maintenance and troubleshooting.</section>
