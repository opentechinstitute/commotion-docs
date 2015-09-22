---
layout: blog
title: Commotion DR1 notas de lanzamiento estable (DR1.1)
categories: [es]
tags: [release]
created: 2013-06-05
changed: 2013-07-26
post_author: Andrew Reynolds
lang: es
---
  El lanzamiento Developer 1.1 es el primer lanzamiento estable de la serie DR1. Este lanzamiento es el principio de nuestra nueva rama estable, y representa un paso significativo hacia delante de nuestro lanzamiento estable previo.
<h2>¿Qué es un lanzamiento Commotion?</h2>
Las versiones de lanzamiento Commotion representan una serie de características objetivo para el proyecto entero. Los paquetes software para plataformas individuales (Linux, Windows, etc.) pueden estar en diferentes etapas de desarrollo, y son etiquetados de acuerdo a las aplicaciones que soporta.
<h2>Disponibilidad de plataforma</h2>
Actualmente, solo el router firmware basado en OpenWRT es compatible con DR1. Otras plataformas están en desarrollo activo y están siendo traídas a la paridad de las características. Las revisiones de plataforma actuales pueden encontrarse en <a href="https://code.commotionwireless.net/projects/commotion/wiki/Official_Version_Feature_Targets">la página de la versión oficial</a> de los objetivos característicos. Las imágenes pre-compiladas están disponibles en <a href="https://commotionwireless.net/download">la página de descargas de</a> Commotion. 
<h2>Características:</h2>
<ul>
	<li>**Asistente de instalación fácil-de-usar:** El asistente de Inicio rápido de Commotion provee una interfaz simple, de un paso, para instalar el nodo Commotion.</li>
	<li>**Aplicaciones locales:** El portal de Apps de Commotion es una interfaz para crear y navegar en la red local de aplicaciones.</li>
	<li>**Plataforma común para el manejo de configuraciones:** El Daemon Commotion provee una interfaz común de manejo para mantener las configuraciones de distintas redes comunitarias.</li>
	<li>**Herramientas para cifrar:** Commotion configura codificación IBSS-RSH estándar de industra por default, y provee el Serval crypto API para ayudar a los desarrolladores a crear aplicaciones seguras.</li>
	<li>** Estilo visual consistente:** Todos los nuevos lanzamientos Commotion tienen estilos de acuerdo con las Guías de Interfaz Humana de Commotion (http://commotionwireless.net/docs/hig/introduction).</li>
	<li>**Depuración simplificada:** Una nueva herramienta de Ayuda de Depuración Commotion hace que sea sencillo recuperar información útil de solución de problemas desde un nodo en caso de tener un problema de red.</li>
</ul>
<h2>Arreglos</h2>
Innumerables correcciones y cambios entraron en este lanzamiento desde <a href="https://code.commotionwireless.net/projects/commotion/wiki/Developer_Pre-Release_%28PR3%29_Feature_Targets">el Release 3 (PR3)</a>, la rama estable previa. Una lista completa se puede encontrar el sitio del proyecto Commotion <a href="https://code.commotionwireless.net/projects/commotion/issues?set_filter=1&amp;f\[\]=status_id&amp;op\[status_id\]=!&amp;v\[status_id\]\[\]=1&amp;f\[\]=fixed_version_id&amp;op\[fixed_version_id\]=%3D&amp;v\[fixed_version_id\]\[\]=2&amp;f\[\]=&amp;c\[\]=tracker&amp;c\[\]=status&amp;c\[\]=priority&amp;c\[\]=subject&amp;c\[\]=assigned_to&amp;c\[\]=updated_on&amp;group_by=">registro de problemas</a>.
<h2>Componentes incluidos</h2>
<ul>
	<li><a href="https://github.com/opentechinstitute/avahi-client">avahi-client v0.1</a>: Provee servicio de descubrimiento de red automático</li>
	<li><a href="https://github.com/opentechinstitute/commotion-apps/">commotion-apps v1.1</a>: Portal de aplicaciones basadas en la web para Commotion-OpenWRT</li>
	<li><a href="https://github.com/opentechinstitute/commotion-bug-info">commotion-debug-helper v0.1</a>: Una herramienta de reportes LuCI-para simplificar los procesos de solución de problemas del router</li>
	<li><a href="https://github.com/opentechinstitute/commotion-quick-start">commotion-quick-start v0.2</a>: Una herramienta de un clic para simplificar la configuración del router en el primer boot</li>
	<li><a href="https://github.com/opentechinstitute/commotion-splash">commotion-splash v1.0</a>: Una interfaz LuCI para configurar el portal nodogsplash</li>
	<li><a href="https://github.com/opentechinstitute/commotiond">commotiond v0.1</a>: Un daemon extensible y un paquete de biblioteca que formará el centro administrativo API de Commotion y simplificará el proceso de portar nuevas plataformas</li>
	<li><a href="https://github.com/opentechinstitute/commotion-openwrt-theme">luci-theme-commotion v1.1</a>: Tema Commotion HIG-para routers OpenWRT</li>
	<li><a href="https://github.com/opentechinstitute/luci-commotion">luci-commotion v0.1</a>: Páginas de configuración Commotion para la interfaz web LuCI</li>
	<li><a href="https://github.com/opentechinstitute/olsrd/tree/release-0.6.5.4/lib/dnssd">olsrd-dnssd v0.1</a>: Propaga DNS (mDNS) de multidifusión y anuncios de descubrimiento de servicios (DNSSD) sobre una red mesh OLSR</li>
	<li><a href="https://github.com/opentechinstitute/olsrd/tree/release-0.6.5.4/lib/mdp">olsrd-mdp v0.1</a>: Plugin para darse de alta en el tráfico mesh OLSR</li>
	<li><a href="https://github.com/opentechinstitute/serval-crypto">serval-crypto v2.0</a>: Bibliotecas de codificación y servicios de anuncios API para firmar mDNS</li>
</ul>
 

