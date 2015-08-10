---
layout: blog
title: Actualizando un paquete Commotion
categories: [chat,applications,routers,messaging]
created: 2012-11-01
changed: 2012-11-06
post_author: The Work Department
lang: es
---
En nuestro blog post previo, recorrimos el proceso de la creación de un paquete OpenWRT para proveer un ws-routing server. Desde entonces hemos continuado el desarrollo, y nos gustaría compartir el proceso para actualizar el paquete OpenWRT y realizar ajustes a errores. También nos gustaría introducir el paquete de commotion-chat que pone el servidor ws-routing en uso.
Antes de arreglar el bug en el servidor del código ws-routing, fue necesario actualizar el paquete OpenWRT para referenciar la más reciente revision GIT. Más abajo, encontrarás una guía rápida de cómo actualizar el paquete OpenWRT.
Primero, necesitarás una actualización de la revisión Git. Hazlo al editar el Makefile del paquete y cambiando la variable:

	cd commotion-examples/ws-routing # entra en el paquete
	vim Makefile # edita el makefile, incrementa PKG_RELEASE, y actualiza el PKG_REV al más reciente commit&#39;s hash
	# e.g.
	#PKG_RELEASE:=2
	#PKG_REV:=7942da7b7ed4afc4c42b28553b0baf3a47060917
	cd ..
	# vuelve a correr la instalación para este paquete
	./setup.sh
	cd ../commotion-openwrt/openwrt
	# si no has contruido el sistema base OpenWRT aún, puedes correr &quot;make&quot; para construirlo todo
	make package/ws-routing/install
	cd bin/ar71xx/packages
	python -m SimpleHTTPServer 8080 # inicia un servidor web para que tu router openwrt pueda descargar del nuevo paquete
	# si no tienes python instalado, puedes usar otros medios para instalar el paquete :)

Después de completar los pasos arriba, abre tu explorador web y navega a **http://&lt;your_ip&gt;:8080/**, substituyendo la dirección IP de tu computadora. Copia esta URL para el paquete ws-routing.
Ahora, abre otra ventana en el navegador y contéctate a la interfaz administrativa de tu router OpenWRT. Ve a &quot;**Administración**,&quot; mueve tu cursor sobre &quot;**Sistema**,&quot; da clic en &quot;**Software**,&quot; y copia en la URL del paquete ws-routing en la forma de &quot;**Paquete para instalar y descargar**&quot; (**TIP**: Si ya está instalada una versión del paquete, tal vez quieras removerla antes de instalarla.) Antes de que se instale, necesitarás dar clic en &quot;**OK**.&quot; Verás un mensaje que el paquete se ha descargado &amp; actualizado.
 <img alt="" src="/files/update%20commotion%20package.png" />
 <h3>La parte divertida</h3>Ahora que hemos actualizado e instalado este misterioso paquete, pongámoslo en uso. El paquete commotion-chat instala algunos HTML y Javascript que están disponibles a través de la nueva ruta del menú en la interfaz LuCI. La aplicación del chat misma es un bosquejo y únicamente para experimentar y divertirse &mdash; por favor no la utilices en la producción de un ambiente inalámbrico comunitario.
Sólo utilízala para divertirte y experimentar.
Descarga e instala el paquete commotion-chat junto con tu commotion-openwrt:

	# si ya estás en commotion-openwrt/openwrt...
	cd ../../
	# clona commotion-chat feed
	git clone https://github.com/bnchdrff/commotion-chat.git
	cd commotion-chat
	./setup.sh
	cd ../commotion-openwrt/openwrt
	make menuconfig
	# selecciona el paquete commotion-chat bajo las apps commotion para su instalación
	# si no has construido el sistema base OpenWRT aún, puedes correr &quot;make&quot; para construirlo todo
	make package/commotionchat/install
	cd bin/ar71xx/packages
	# inicia un servidor web para que tu router openwrt pueda descargar el nuevo paquete
	python -m SimpleHTTPServer 8080
	# si no tienes python instalado, puedes usar otros medios para instalar el paquete :)

Depués, sigue el mismo flujo de trabajo descrito arriba para el paquete ws-routing para instalar commotion-chat en tu router.
Después de instalar estos paquetes, es probable que necesites reiniciar el router. Mueve tu cursor sobre &quot;**Sistema**,&quot; y da clic en &quot;**Reiniciar**.&quot; Confirma, espera unos minutos y luego intenta visitar la página splash de tu router. Si instalaste/actualizaste commotion-ws-routing y commotion-chat exitosamente, ahora puedes dar clic en la sección del menú &quot;**Chat**&quot; bajo &quot;**Aplicaciones**&quot;, ¡y prueba la app del chat!
