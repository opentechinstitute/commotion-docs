---
layout: default
title: Instalando en un Router Ubiquiti AirMax
site_section: docs
sub_section: [cck,cck-installing]
pdf: cck/installing-configuring/CCK-Install_on_Ubiquiti_Router.pdf
pdf-all: true
categories:
created: 2013-09-27
changed: 2014-09-04
post_author: critzo
lang: es
---

<p><img alt="Install on a router graphic" src="/files/styles/large/public/install_on_ubiquiti_title.png" class="img-responsive" /></p>

<section id="section-introduction">
<h2>Introducción</h2>

<p>Este documento contiene paso-a-paso el proceso para instalar el software Commotion en un router Ubiquiti airMax. Si tienes un dispositivo Ubiquiti airMax de-la-caja, esta guía es para ti.</p>

<p>Hemos escrito esta guía debido a que el Instituto de Tecnología Abierta usa hardware de redes Ubiquiti como su principal hardware de desarrollo y prueba para el software del router Commotion. El software es un sistema operativo alterno, similar a Linux para tu computadora de casa u oficina. El hardware Ubiquiti viene de instala de fábrica con su software personalizado, AirOs – justo como una nueva computadora usualmente viene con Microsoft Windows or Mac OSX instalada. Instalar Commotion en tu router en lugar de AirOS agregará nuevas aplicaciones a tu router, incluyendo la habilidad de enmallarse con otros routers que usen Commotion.</p>

<p>El proceso de instalación debería tomar en entre 45 minutos y una hora. Si estos pasos no funcionan para ti, o si tienes un router que ha fallado en instalar apropiadamente el flash Commotion, o no responde de ninguna manera, entonces lee Instala y Recupera con TFTP.</p>

<p><strong>Tiempo requerido: 45 minutos - 1 hora.</strong></p>
</section>

<section id="section-materials-and-supplies-needed">
<h2>Materiales + Suministros Necesarios</h2>

<p>Para instalar Commotion, necesitarás los siguientes artículos a la mano:</p>

<p>1. Una computadora con puerto Ethernet.<br />
2. Un Ubiquiti router y su adaptador Power over Ethernet (PoE) y cable de poder.<br />
3. Acceso a una toma de corriente.<br />
4. Dos cables Ethernet.<br />
5. Una conexión a Internet o la imagen apropiada de software Commotion.</p>
</section>

<section id="section-download-commotion">
<h2>Descarga Commotion</h2>

<p>Descarga la imagen Commotion para tu hardware:<br />
<a href="/download/routers">https://commotionwireless.net/download/routers</a></p>

<p><img alt="" class="img-responsive" src="/files/styles/large/public/downloadsR1.png?itok=Ik_ZrDzo" typeof="foaf:Image" /></p>

<p class="tip">Guarda el archivo en algún lugar al que puedas acceder fácilmente. Un buen lugar para guardar el archivo es en tu Escritorio, o en tu directorio de Descargas.</p>
</section>

<section id="prepare-the-hardware">
<h2>Configura el Hardware</h2>

<p><img alt="" class="img-responsive" src="/files/styles/large/public/install_on_ubiquiti_equipment_setup_1.png?itok=KfxWqJwJ" typeof="foaf:Image" /></p>

<p><strong>¡Advertencia! ¡Es muy importante que no portes el POE etiquetado en tu computadora! Podrías dañar tu computadora ********************
Warning! It is very important that you do not port labeled POE into your computer! You could damage your computer.</strong></p>

<p>1. Remueve la parte trasera o placa del fondo de tu router Ubiquiti. Esta placa trasera tiene información importante acerca del hardware en ella, ¡así que no la pierdas o la mezcles con la placa de otro dispositivo!</p>

<p>2. Conecta el primer cable Ethernet en tu puerto PoE, luego conecta la otra punta del cable hacia el puerto en&nbsp;el router que veas después de remover la placa del fondo.******************** Plug the first Ethernet cable into the PoE port, then plug the other end of the cable into the port on&nbsp;the router that you see after removing the bottom plate.</p>

<p>3. Conecta el segundo cable Ethernet en el puerto etiquetado LAN, luego conecta la otra punta del cable en ************* Plug the second Ethernet cable into the port labeled LAN, then plug the other end of the cable into your computerPower Actives WIFI.</p>

			<p>2. Cambia la dirección IP de tu computadora, hay links a guías en la sección de abajo.</p>
</section>

<section id="load-software">
<h3>Carga el Software</h3>

<table class="table table-responsive">
	<tbody>
		<tr>
			<td>
			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__439 img__view_mode__media_large attr__format__media_large" height="212" src="/files/styles/large/public/install_on_ubiquiti_admin.png?itok=PJ3QRDwr" typeof="foaf:Image" width="228" /></p>
			</td>
			<td>
			<p>1. Abre tu navegador e ingresa http://192.168.1.20 en la barra de direcciones. Esta es la dirección IP de tu router. El AirOS Ubiquiti de la interfaz web debería cargarse.</p>
			</td>
		</tr>
	</tbody>
</table>

<table>
	<tbody>
		<tr>
			<td>
			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__467 img__view_mode__media_large attr__format__media_large" height="175" src="/files/styles/large/public/install_on_ubiquiti_login_1.png?itok=qEdPSgHq" typeof="foaf:Image" width="246" /></p>
			</td>
			<td>
			<p>2. Ingresa sesión en la interfaz:<br />
			Nombre de Usuario: ubnt<br />
			Contraseña: ubnt</p>
			</td>
		</tr>
	</tbody>
</table>

<table>
	<tbody>
		<tr>
			<td>
			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__456 img__view_mode__media_large attr__format__media_large" height="181" src="/files/styles/large/public/install_on_ubiquiti_browse_0.png?itok=6PaxEOtU" typeof="foaf:Image" width="462" /></p>

			<p>3. Navega a la tabla del Sistema, bajo la sección “Actualizar Firmware”, da clic y elige el archivo Commotion que descargaste para tu router específico.</p>
			</td>
		</tr>
	</tbody>
</table>

<table>
	<tbody>
		<tr>
			<td>
			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__457 img__view_mode__media_large attr__format__media_large" height="187" src="/files/styles/large/public/install_on_ubiquiti_upload_0.png?itok=LRZib41x" typeof="foaf:Image" /></p>

			<p>4. Da clic y espera para el siguiente prompt ************Click and wait for the next prompt.</p>
			</td>
		</tr>
	</tbody>
</table>

<table>
	<tbody>
		<tr>
			<td>
			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__458 img__view_mode__media_large attr__format__media_large" height="126" src="/files/styles/large/public/install_on_ubiquiti_update.png?itok=CzDQypDR" typeof="foaf:Image" /></p>

			<p>5. Da click El dispositovo debería instalar el software.***********Click The device will install the software. Durante esta etapa, la primera y última luz bajo el triangulo se prenderán, y luego las otras luces se apagarán, excepto la luz de encendido.</p>
			</td>
		</tr>
	</tbody>
</table>

<table>
	<tbody>
		<tr>
			<td>
			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__455 img__view_mode__media_large attr__format__media_large" height="192" src="/files/styles/large/public/install_on_ubiquiti_reboot_4.png?itok=39PomuMO" typeof="foaf:Image" width="220" /></p>
			</td>
			<td>
			<p>6. Después que las luces se hayan apagado, el dispositivo se reiniciará. Espera unos minutos hasta que la luz de encendido y la que está debajo del triangulo se mantengan firmes en verde.<br />
			<br />
			<strong>Mientras que el nodo esta reiniciando, cambia la conexión cableada de la computadora para recibir lease DHCP del nodo. **********************While the node is restarting, change your computer's wired connection to receive a DHCP lease from the node.</strong><br />
			&nbsp;</p>
			</td>
		</tr>
	</tbody>
</table>

<table>
	<tbody>
		<tr>
			<td>
			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__737 img__view_mode__media_original attr__format__media_original" height="239" src="/files/thisnode.png" typeof="foaf:Image" width="268" /></p>
			</td>
			<td>
			<p>7. Ve a <strong>http://thisnode</strong> en tu navegador Web. Si ves la pantalla Commotion, ¡Felicidades! ¡Ahora tienes un router Commotion wireless router!</p>
			</td>
		</tr>
	</tbody>
</table>

<p>Puedes continuar con el módulo <a href="/docs/cck/installing-configuring/configure-commotion">Configura Commotion</a>. Dichas instrucciones te proporcionarán la guía de como configurar el software Commotion por primera vez.</p>
</section>

<section id="section-definitions">
<h2>Definiciones</h2>

<dl>
	<dt>Sistema Operativo</dt>
	<dd>una colección de software que maneja recursos hardware de la computadora y proporciona servicios comunes para programas de computadora. El sistema operativo es un componente vital del software del sistema en un sistema de computadora.</dd>
	<dt>Firmware</dt>
	<dd>la combinación de memoria persistente y código y datos de programa guardados en él. En otras palabras, un sistema operativo muy pequeño y básico para dispositivos como electrodomésticos, computadoras, relojes digitales, cámaras digitales, teléfonos móviles, y más.</dd>
</dl>
</section>

<section class="related-information" id="section-related-information">
<h2>Información Relacionada</h2>

<p>Para más ayuda, o si esta guía no funciona para ti, revisa el módulo de <a href="/docs/cck/installing-configuring/install-and-recover-tftp">Instala y Recupera TFTP</a> disponible. Después de que el software se haya instalado, puedes proceder al modulo de <a href="/docs/cck/installing-configuring/configure-commotion">Configura Commotion</a>.</p>
</section>

<section class="external-resources" id="section-external-resources">
<h2>Recursos Externos</h2>

<p>Guías para configurar direcciones IP estáticas:</p>

<ul>
	<li><strong>Windows - <a href="http://www.howtogeek.com/howto/19249/how-to-assign-a-static-ip-address-in-xp-vista-or-windows-7/" target="_blank">http://www.howtogeek.com/howto/19249/how-to-assign-a-static-ip-address-in-xp-vista-or-windows-7/</a></strong></li>
	<li><strong>Mac - <a href="http://osxdaily.com/2010/12/17/set-static-ip-address-mac/" target="_blank">http://osxdaily.com/2010/12/17/set-static-ip-address-mac/</a></strong></li>
	<li><strong>Linux - <a href="http://www.sudo-juice.com/how-to-a-set-static-ip-in-ubuntu/" target="_blank">http://www.sudo-juice.com/how-to-a-set-static-ip-in-ubuntu/</a></strong></li>
	<li>También puedes hacer una búsqueda en Internet por tu sistema operativo específico para encontrar más información, u otras guías.</li>
</ul>
</section>
