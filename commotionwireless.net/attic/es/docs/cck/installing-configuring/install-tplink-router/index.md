---
layout: cck
title: Instala en a TP-Link Router
site_section: docs
sub_section: [cck,cck-installing]
pdf: cck/installing-configuring/CCK-Install_on_TP-Link_Router.pdf
pdf-all:
categories:
created: 2014-09-08
changed: 2014-09-09
post_author: andygunn
lang: es
---

<p><img alt="Install on a router graphic" src="/files/CCK-Install_TP-Link_intro_graphic.png" style="max-width:600px;" /></p>

<section id="section-introduction">
<h2>Introducción</h2>

<p>Este documento contiene el proceso paso-a-paso para instalar el software Commotion en los routers TP-Link. Si tienes un nuevo dispositivo, TP-Link en-la-caja, esta guía es para ti.</p>

<p>Hemos escrito esta guía debido a que el Instituto de Tecnología Abierta está ampliando el soporte de software del router Commotion para los routers TP-Link. El software es un sistema operativo alternativo, similar a Linux para tu hogar u oficina. Hardware TP-Link viene de fábrica instalado con su software personalizado - al igual que un nuevo equipo por lo general viene con Microsoft Windows o Mac OSX instalado. Instalar Commotion en el router en su lugar añadirá nuevas funciones a su router, incluyendo la capacidad para enmallarse con otros routers que utilizan Commotion.</p>

<p>El proceso de instalación debería tomar entre <strong>15 y 30 minutos</strong>. Si estos pasos no funcionan para ti, o si tienes un router que ha fallado en flashear Commotion apropiadamente, o no responde de ninguna manera, por favor ve a la sección de *******************If these steps do not work for you, or if you have a router that failed to properly flash Commotion or will not respond in any way, then please see the <strong>Recursos Extra</strong>.</p>
</section>

<section id="section-materials-and-supplies-needed">
<h2>Materiales + Suministros Necesarios</h2>

<p>Para instalar Commotion, necesitarás los siguientes artículos a la mano:</p>

<ol class="rteindent1">
   <li>Una computadora con puerto Ethernet.</li>
   <li>Un router TP-Link router y su fuente de poder.</li>
   <li>Acceso a una toma de corriente.</li>
   <li>Un cable Ethernet.</li>
   <li>Una conexión a Internet o la imagen apropiada de software Commotion.</li>
</ol>

</section>

<section id="section-download-commotion">
<h2>Descarga Commotion</h2>

<p>Descarga la imagen
ownload Commotion image for your hardware:<br />
<a href="/download/routers">https://commotionwireless.net/download/routers</a></p>

<p>Asegúrate que el número del modelo router TP-Link y la versión coincidan exactamente. Por ejemplo, esta imagen Commotion para el WR842ND V1 no trabajará en el WR842ND <strong>V2</strong>!</p>

<p><img src="/files/CCK-Install_TP-Link_download_screenshot.png" style="max-width:700px;" /></p>

<p>&nbsp;</p>

<p class="tip">Guarda el archivo en algún lugar al que puedas acceder más fácil después. Un buen lugar para guardar el archivo es en tu Escritorio, o en tu directorio de Descargas.</p>
</section>

<section id="setup-the-hardware">
<h2>Configura Hardware</h2>

<p><img src="/files/CCK-Install_TP-Link_prepare_hardware.png" style="max-width:700px;" /></p>

<ol class="rteindent1">
   <li>Desempaca el router TP-Link y atornilla las antenas exteriores (si tu unidad las tiene).</li>
   <li>Apaga el puerto Ethernet de tu computadora.</li>
   <li>Conecta el adaptador de corriente a una toma de poder un un multicontacto, luego el alimentador de poder DC a la parte de atrás del router. Si hay un botón de  poder, presiónalo para prender el router.</li>
</ol>
</section>

<section id="load-software">
<h2>Carga el Software</h2>

<p>1. Abre tu navegador web y persiona <a href="http://192.168.0.1">http://192.168.0.1</a> en la barra de direcciones. Esto es la IP del router. Un promt para la contraseña del administrador debería aparecer. **************************A prompt for an administrator password should appear.</p>
<p><img src="/files/CCK-Install_TP-Link_admin_login1.png" style="max-width:400px;" /></p>

<p>2. Ingresa a la Interfaz:<br />
<strong>Nombre de usuario: admin<br />
Contraseña: admin</strong></p>

<p><img src="/files/CCK-Install_TP-Link_admin_login2.png" style="max-width:400px;" /></p>

<p>3. Navega al menú de Herramientas de Sistema y da clic en el submenú “Actualizar Firmware”.</p>
<p><img src="/files/CCK-Install_TP-Link_firmware_menu.png" style="max-width:700px;" /></p>

<p>4. Da clic en el botón y selecciona la imagen apropiada Commotion para tu router TP-Link. ¡Asegúrate que el número de modelo y la versión del router sean iguales!</p>
<p><img src="/files/CCK-Install_TP-Link_firmware_upload1.png" style="max-width:700px;" /></p>

<p>5. Haz clic en el botón, y selecciona confirmar cuando el router te lo pregunte.</p>
<p><img src="/files/CCK-Install_TP-Link_firmware_upload2.png" style="max-width:700px;" /></p>

<p>6. El router se reiniciará. Espera unos minutos, y luego ve a http://thisnode en tu navegador Web. Si ves la pantalla Commotion, ¡felicidades! ¡Ahora sabes que tienes un router Commotion Wireless!</p>
<p><img src="/files/CCK-Install_TP-Link_Commotion_thisnode.png" style="max-width:400px;" /></p>

<p>&nbsp;</p>

<p>Deberías continuar al siguiente documento <a href="/docs/cck/installing-configuring/configure-commotion">Configura Commotion</a>. Te proporciona las intrucciones sobre como configurar el software Commotion por primera vez.</p>
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

<p>Después de que el software se instaló, puedes proceder al módulo <a href="/docs/cck/installing-configuring/configure-commotion">Configura Commotion</a> disponible.</p>
</section>

<section class="external-resources" id="section-external-resources">
<h2>Recursos Externos</h2>

<p>Si estás teniendo problemas, o esta guía no funcionó para ti, necesitarás consultar las instrucciones de instalación específicas para tu router en el sitio web de OpenWRT. Por favor procede a <a href="http://wiki.openwrt.org/toh/start">http://wiki.openwrt.org/toh/start</a> y busca tu router en la lisa. Si no puedes encontrar el router en la lista, confirma que tienes la versión del modelo exacto de router TP-Link <strong>and</strong> para la imagen Commotion. Si no coincide, el firmware del router puede no instalarse o puede funcionar incorrectamente.</p>

</section>
