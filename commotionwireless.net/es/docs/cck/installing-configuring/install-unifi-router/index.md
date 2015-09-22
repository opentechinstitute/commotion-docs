---
layout: cck
title: Instala en un Router Ubiquiti UniFi
site_section: docs
sub_section: [cck,cck-installing]
pdf:
pdf-all: true
categories:
created: 2013-10-31
changed: 2014-10-31
post_author: andygunn
lang: es
---

<p><img src="/files/CCK-Install_on_UniFi_Router_intro_graphic.png" style="max-width:600px; "/></p>

<section id="section-introduction">
<h2>Introducción</h2>

<p>Este documento contiene un proceso paso-a-paso para instalar el software Commotion en routers Ubiquiti Unifi. Si tienes un dispositivo Ubiquiti Unifi de-la-caja, esta guía es para ti.</p>

<p>Hemos escrito esta guía porque el Instituto de Tecnología Abierta usa hardware de redes Ubiquiti como su principal hardware de desarrollo y prueba para el software del router Commotion. El software es un sistema operativo alterno, similar a Linux para tu computadora de casa u oficina. El hardware Ubiquiti viene de instala de fábrica con su software personalizado – justo como una nueva computadora usualmente viene con Microsoft Windows or Mac OSX instalada. Instalar Commotion en tu router agregará nuevas aplicaciones a tu router, incluyendo la habilidad de enmallarse con otros routers que usen Commotion.</p>

<p>Este proceso de instalación debería tomar entre 45 minutos y una hora. Si estos pasos no funcionan para ti, ********o si tienes un router que falló para flashear apropiadamente Commotion o no responde de algún modo, necesitarás consultar ***********or if you have a router that failed to properly flash Commotion or will not respond in any way, you will need to consult****** <a href="http://community.ubnt.com/t5/UniFi-Wireless/HOWTO-Unbrick-your-UniFi-AP/td-p/338684">este foro de guía Ubiquiti</a>.</p>

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

<p>Descarga la imagen Commotion para tu hardware (ya sea UniFi AP, o UniFi AP Outdoors):<br />
<a href="/download/routers">https://commotionwireless.net/download/routers</a></p>

<p><img src="/files/styles/large/public/downloadsR1.png" style="max-width:510px;" /></p>

<p class="tip">Guarda el archivo en algún lugar al que puedas acceder fácilmente. Un buen lugar para guardar el archivo es en tu Escritorio, o en tu directorio de Descargas .</p>
</section>

<section id="prepare-the-hardware">
<h2>Configura el Hardware</h2>

<p><img src="/files/CCK-Install_on_UniFi_router_prepare_hardware.png" style="max-width: 510px;" /></p>

<p><strong>¡Advertencia! ¡Es muy importante que no portes el POE etiquetado en tu computadora! Podrías dañar tu computadora ******************** Warning! It is very important that you do not port labeled POE into your computer! You could damage your computer.</strong></p>

<p>1. Remueve la parte trasera o placa del fondo de tu router Ubiquiti. Esta placa trasera tiene información importante acerca del hardware en ella, ¡así que no la pierdas o la mezcles con la placa de otro dispositivo!</p>

<p>2. Conecta el primer cable Ethernet en tu puerto PoE, luego conecta la otra punta del cable hacia el puerto en&nbsp;el router que veas después de remover la placa del fondo.******************** Plug the first Ethernet cable into the PoE port, then plug the other end of the cable into the port on&nbsp;the router that you see after removing the bottom plate.</p>

<p>3. Conecta el segundo cable Ethernet en el puerto etiquetado LAN, luego conecta la otra punta del cable en ************* Plug the second Ethernet cable into the port labeled LAN, then plug the other end of the cable into your computerPower Actives WIFI.</p>
		<p>2. Cambia la dirección IP de tu computadora, hay links a guías en la sección de <a href="#section-external-resources">External Resources</a> section below.</p>
</section>

<section id="load-software">
<h2>Carga el Software</h2>

<p>Cargar el software requiere que copies en un archivo al router Ubiquiti, luego SSH y correr algunos comandos en el. Si el router no está conectado ******************Loading the software requires you to copy a file to the UniFi router, then SSH and run some commands on it. If the router isn't plugged in per the instructions above in <strong>Configura el Hardware</strong>, conectalo ahora y espera que inicie (normalmente tarda entre uno y dos minutos). Mientras esto ocurre abre tu terminal y la línea de comando y cambia al directorio donde reside la imagen. Si estas en un sistema operativo Windows, necesitarás descargar un paquete SCP / SSH package, como <a href="http://www.putty.org/">PuTTY</a>.

<p>Dependiendo del modelo de dispositivo UniFi que tengas, las instrucciones son un poco distintas. Lee abajo.</p>

<p>&nbsp;</p>

<h4>UniFi AP o AP-LR</h4>
<p><strong>1.</strong> Ejecuta el siguiente comando en tu terminal para copiar el software Commotion al nodo:</p>
<pre>scp openwrt-ar71xx-generic-ubnt-unifi-squashfs-factory.bin ubnt@192.168.1.20</pre>
<p>Se te solicitará poner una contraseña, ingresa <strong>ubnt</strong>.

<p><strong>2.</strong>SSH al nodo con el siguiente comando **********SSH into the node with the following command:</p>
<pre>ssh ubnt@192.168.1.20</pre>
<p>Se te solicitará poner una contraseña, ingresa <strong>ubnt</strong>.

<p><strong>3.</strong>Ejecuta el siguiente comando en tu terminal para instalar el software Commotion en tu dispositivo:</p>
<pre>fwupdate.real -m openwrt-ar71xx-generic-ubnt-unifi-squashfs-factory.bin -d</pre>

<p>&nbsp;</p>

<h4>UniFi AP-Outdoors</h4>
<p><strong>1.</strong>Ejecuta lo siguiente en tu terminal para copiar el software Commotion al nodo:</p>
<pre>scp openwrt-ar71xx-generic-ubnt-unifi-outdoor-squashfs-factory.bin ubnt@192.168.1.20</pre>
<p>Se te solicitará poner una contraseña, ingresa<strong>ubnt</strong>.

<p><strong>2.</strong>SSH into the node with the following command:</p>
<pre>ssh ubnt@192.168.1.20</pre>
<p> Se te solicitará poner una contraseña de nuevo, ingresa <strong>ubnt</strong>.

<p><strong>3.</strong>Ejecuta el siguiente comando en tu terminal para instalar el software Commotion a tu dispositivo:</p>
<pre>fwupdate.real -m openwrt-ar71xx-generic-ubnt-unifi-outdoor-squashfs-factory.bin -d</pre>

<p>&nbsp;</p>

<p>El nodo reportará entonces que está flasheando el nuevo software, y luego reiniciará. Después de que el nodo inicie completamente, será accesible en  <a href="http://thisnode">http://thisnode</a>.</p>

<p>Puedes continuar al módulo <a href="/docs/cck/installing-configuring/configure-commotion">Configuración Commotion</a>. Esas instrucciones proporcionan guías de como configurar el software Commotion por primera vez.</p>
</section>

<section id="section-definitions">
<h2>Definiciones</h2>

<dl>
	<dt>Sistema Operativo</dt>
	<dd>una colección de software que maneja recursos hardware de la computadora y proporciona servicios comunes para programas de computadora. El sistema operativo es un componente vital del software del sistema en un sistema de computadora.</dd>
	<dt>Firmware</dt>
	<dd> la combinación de memoria persistente y código y datos de programa guardados en él. En otras palabras, un sistema operativo muy pequeño y básico para dispositivos como electrodomésticos, computadoras, relojes digitales, cámaras digitales, teléfonos móviles, y más.</dd>
</dl>
</section>

<section class="related-information" id="section-related-information">
<h2>Información Relacionada</h2>

<p>Para más ayuda, o si esta guía no funcionó para ti, échale un vistazo al foro <a href="http://community.ubnt.com/t5/UniFi-Wireless/HOWTO-Unbrick-your-UniFi-AP/td-p/338684">Ubiquiti sobre UniFi recovery***********</a>.
Después de que el software se haya instalado, puedes proceder al módulo <a href="/docs/cck/installing-configuring/configure-commotion">Configura Commotion</a>.</p>
</section>

<section class="external-resources" id="section-external-resources">
<h2>Recursos Externos</h2>

<p>Guías para establecer direcciones IP:</p>

<ul>
	<li><strong>Windows - <a href="http://www.howtogeek.com/howto/19249/how-to-assign-a-static-ip-address-in-xp-vista-or-windows-7/" target="_blank">http://www.howtogeek.com/howto/19249/how-to-assign-a-static-ip-address-in-xp-vista-or-windows-7/</a></strong></li>
	<li><strong>Mac - <a href="http://osxdaily.com/2010/12/17/set-static-ip-address-mac/" target="_blank">http://osxdaily.com/2010/12/17/set-static-ip-address-mac/</a></strong></li>
	<li><strong>Linux - <a href="http://www.sudo-juice.com/how-to-a-set-static-ip-in-ubuntu/" target="_blank">http://www.sudo-juice.com/how-to-a-set-static-ip-in-ubuntu/</a></strong></li>
	<li>También puedes hacer una búsqueda en Internet por tu sistema operativo específico para encontrar más información, u otras guías.</li>
</ul>
</section>
