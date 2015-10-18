---
layout: blog
title: Paso a paso - creando e instalando un paquete para Commotion
categories: [es]
tags: [chat,applications,routers,messaging]
created: 2012-10-08
changed: 2012-11-21
post_author: The Work Department
lang: es
---
  Aquí en el Departamente de Trabajo, hemos estado ocupados creando sistemas para experimentar con aplicaciones que utilizan conexiones mesh de nodo a nodo y estamos ansiosos por compartirlas contigo. Particularmente, algunas de las aplicaciones ejemplo que proponemos en nuestro post <a class="external" href="https://commotionwireless.net/blog/exploring-meshaging" target="_blank"> Explorando el chat en las redes en malla &quot;Meshaging&quot;</a> que están tomando forma. Queremos ofrecerte las herramientas para experimentar lo que es posible dada la estructura arquitectónica única de una red mesh. El software del router Commotion está construido sobre OpenWRT, una distribución Linux designada para routers y otros dispositivos pequeños. 
OpenWRT tiene un paquete de sistema de manejo, y el código de Commotion está guardado en un paquete y mecanismo de alimentación separado. Un desarrollador puede integrar funciones adicionales en una red Commotion al escribir y portar aplicaciones y empaquetarlos para OpenWRT. A continuación, se explica el proceso de portar y empaquetar una aplicación (en este caso, un pequeño servidor websockets, ws-routing y dependencias).
<h3>Ingredientes</h3>Necesitarás algunas cosas para continuar:
<ol><li>**¡Una computadora! **Asumiendo que estés usando una computadora en este momento, debería ser sencillo. Asegúrate de tener algo de espacio en tu disco duro para descargar los paquetes.</li><li>**Acceso a la terminal y algunos comandos.** Necesitarás estas herramientas, incluyendo <a class="external" href="http://git-scm.com/book/en/Getting-Started-Installing-Git" target="_blank">GIT</a> y <a href="http://www.gnu.org/software/make/manual/make.html#Top" target="_blank">Make</a>, para descargar y compilar el último código de los repositorios.</li><li>**Wireless Router(s).** Este hardware es necesario para servir a tu red mesh. Puedes leer más detalles sobre el hardware que utilizamos aquí: <a class="external" href="https://code.commotionwireless.net/projects/commotion-manual/wiki/Installing_Commotion_on_Wireless_Nodes#A-little-background" target="_blank">Instalando Commotion en Nodos Wireless</a>.</li><li>**Tiempo.** Como un buen platillo, algunos de estos scripts pueden tomar tiempo antes de estar listos. Se pueden anticipar, una o dos horas antes de que esté listo y en acción.</li><li>**Amigos.** No requeridos, pero aprender colaborativamente y trabajar juntos puede ser parte importante de la instalación de las redes mesh.</li></ol><h3>
Paso a paso para para tener una delicia de red mesh</h3>Una vez que tengas lo esencial enumerado arriba, puedes comenzar a mezclarlo todo junto. 
En primer lugar, ¡vamos a construir los paquetes! Puedes hacer esto abriendo tu terminal e introduciendo los comandos que aparecen a continuación en orden. Cualquier cosa después de un signo de número (#) está ahí para proporcionar instrucciones adicionales y no se debería introducir a la línea de comandos. Los scripts de configuración comandos de acciones pueden tomar tiempo para que corran, así que ese sería un buen momento para leer el <a class="external" href="https://commotionwireless.net/blog" target="_blank">blog</a> o el <a class="external" href="https://commotionwireless.net/wiki/mesh-resources" target="_blank">Wiki de recursos de Mesh</a>.

	# Clona el commotion-openwrt repo:
	git clone https://github.com/opentechinstitute/commotion-openwrt.git
	cd commotion-openwrt
	./setup.sh
	cd ..
	# Clona tu paquete repo:
	git clone https://github.com/bnchdrff/commotion-wsrouting-feed.git commotion-examples
	# Corre el paquete setup.sh script:
	cd commotion-examples
	./setup.sh # ignore package feed errors
	# Configura y construye:
	cd ../commotion-openwrt/openwrt
	make menuconfig # ignore package feed errors
	# A ncurses GUI will display:
	## Selecciona el submenu commotion-apps 
	## Selecciona ws-routing as * (static) al presionar Y
	## Selecciona salir
	## Cuando se solicite, elige guardar config
	make V=99 # build, verbosely
	cd bin/ar71xx/
	ls

Y, ¡voilá! Deberías ver una lista de archivos que se ven algo asi:
&quot;**openwrt-ar71xx-generic-ubnt-bullet-m-squashfs-factory.bin**&quot;. El archivo que necesitarás mostrarle a tu router dependerá del hardware del router. Usando ese archivo, sigue las instrucciones proporcionadas para <a class="external" href="https://code.commotionwireless.net/projects/commotion-manual/wiki/Installing_Commotion_on_Wireless_Nodes" target="_blank">Instalar Commotion en un nodo inalámbrico</a> para actualizar el router. Estas <a class="external" href="https://code.commotionwireless.net/projects/commotion-manual/wiki/Detailed_TFTP_Instructions" target="_blank">instrucciones detalladas TFTP</a> también incluyen pasos para transferir el archivo a tu router con **TFTP.**
<h3>Ahora puedes probar Commotion</h3>¡Bien hecho! Has instalado Commotion en tu router inalámbrico. Después que el router reinicie, puedes inhabilitar tu red conectada y brincar a la &ldquo;commotion_NNNNN_ap&rdquo; red que debería estar disponible. Abre un explorador web y navega a cualquier sitio, lo que debería llevarte a la página splash de Commotion. Por último, puedes comprobar que el paquete **ws-routing** se haya instalado siguiendo estos pasos:
<ol><li>Clic &quot;**Ve a la configuración de contraseña...**&quot;</li><li>Haz clic en &quot;**Iniciar sesión**&quot; y resetea la contraseña si es necesario.</li><li>El menú de administración deberá aparecer arriba. Mueve el cursor sobre &quot;**Sistema**&quot; y da clic en &quot;**Software**.&quot; **ws-routing** debería estar en la lista.</li></ol>Aquí una palmadita virtual en la espalda. Ahora estarás listo para instalar aplicaciones ejemplo y probarlas tú mismo. En nuestro siguiente post, te mostraremos cómo instalar y usar una aplicación que hemos desarrollado.

