---
layout: blog
title: Commotion DR2 notas de lanzamiento
categories: [es]
tags: [release]
created: 2013-09-19
changed: 2013-09-19
post_author: Josh King
lang: es
---
  EL lanzamiento del Developer 2 es la última versión estable de la plataforma Commotion. Cuenta con un enfoque en la mejora de las características alrededor de la gestión de la red, incluyendo la compatibilidad inicial con herramientas de visualización y apoyo externos internacionalizados.
<h2>¿Qué es un lanzamiento Commotion?</h2>
Las versiones de lanzamiento Commotion representan un conjunto blanco de características para todo el proyecto. Los paquetes de software para plataformas individuales (Linux, Windows, etc.) pueden estar en diferentes etapas de desarrollo, y están etiquetados de acuerdo a sus características soportadas.
<h2>Disponibilidad de la plataforma</h2>
Actualmente, solo el router basado en OpenWRT firmware es compatible con DR2. Otras plataformas están bajo desarrollo activo y están siendo traidas a la paridad de características. Las revisiones de las plataformas actuales se pueden encontrar en la página <a href="https://code.commotionwireless.net/projects/commotion/wiki/Official_Version_Feature_Targets">Versión Oficial de los Objetivos Característicos</a>. Imágenes de software pre-compiladas están disponibles en la página de <a href="https://commotionwireless.net/download">Descargas Commotion</a>.
<h2>Nuevas Características</h2>
<ul>
	<li>**Panel de instrumentos de apoyo: **Hemos agregado apoyo adicional a los nodos Commotion para voluntariamente optar por reportar información analítica básica a paneles de instrumentos basados en la web externos para visualizar la red. El primer panel de instrumentos tal que estamos apoyando está basado en el mapa de la red para el proyecto <a href="http://freifunk.net">Freifunk.</a></li>
	<li>**Apoyo internacionalizado:** Todas las interfaces basadas en la web de Commotion han tenido apoyo agregado para traducción en múltiples idiomas, construyendo sobre el apoyo incluido con <a href="http://openwrt.org">la plataforma OpenWRT de</a> <a href="http://luci.subsignal.org">LuCI</a>. Hemos incluido una traducción al Francés de la interfaz y continuaremos agregando otras traducciones.</li>
	<li>**Interfaz de administración segura:** Previamente, la interfaz de administración basada en la red para los nodos sólo estaba disponible vía conexión sin cifrado. Ahora, hemos integrado un tutorial dentro del proceso Quickstart que introduce a los usuarios a configurar y manualmente verificar su conexión SSL al nodo después de la instalación.</li>
</ul>
<h2>Arreglos</h2>
Como siempre, un largo número de arreglos y cambios tomó lugar en esta versión desde la rama estable anterior DR1.1. Estamos actualmente en el proceso de reparar nuestro problema en la búsqueda de sistemas para usar Github, así que espera una lista actualizada de arreglos pronto.
<h2>Cambios que vienen</h2>
Estábamos planeando el despliegue de la nueva IP predeterminada abordando rangos y selección BSSID dinámica con esta versión, pero decidimos que necesitaba más pruebas y pensamiento dado a un despliegue suave. ¡Estará disponible pronto en la nueva versión! También, dentro de un par de semanas estaremos lanzando nuevas versiones de prueba de nuestras versiones de Linux y Android compatibles con DR1 y superiores. 
<h2>Componentes incluidos</h2>
<ul>
	<li><a href="https://github.com/opentechinstitute/avahi-client">avahi-client v0.1</a>: Provee descubrimiento automático de servicio de red</li>
	<li><a href="https://github.com/opentechinstitute/commotion-apps/">commotion-apps v1.2</a>: portal de aplicaciones locales basadas en la web de Commotion-OpenWRT</li>
	<li><a href="https://github.com/opentechinstitute/commotion-apps/">commotion-bigboard-send v0.1.1</a>: Un script para enviar análisis de información al panel</li>
	<li><a href="https://github.com/opentechinstitute/commotion-bug-info">commotion-debug-helper v0.1</a>: Una herramienta basada en LuCI para simplificar el proceso de solución de problemas del router</li>
	<li><a href="https://github.com/opentechinstitute/commotion-luci-i18n">commotion-luci-i18n v0.1</a>: apoyo de traducción GUI</li>
	<li><a href="https://github.com/opentechinstitute/commotion-quick-start">commotion-quick-start v0.2.1</a>: Una herramienta de un clic que simplifica la configuración router en el primer arranque</li>
	<li><a href="https://github.com/opentechinstitute/commotion-splash">commotion-splash v1.1</a>: Una interfaz LuCI para configurar el portal captive nodogsplash</li>
	<li><a href="https://github.com/opentechinstitute/commotiond">commotiond v0.1.1</a>: Un daemon extensible y un paquete de biblioteca que formará el centro administrativo API de Commotion y simplificará el proceso de aportar nuevas plataformas</li>
	<li><a href="https://github.com/opentechinstitute/commotion-openwrt-theme">luci-theme-commotion v1.2</a>: Tema HIG-compliant Commotion para routers OpenWRT</li>
	<li><a href="https://github.com/opentechinstitute/luci-commotion">luci-commotion v0.1.1</a>: páginas de configuración Commotion para la interfaz web LuCI</li>
	<li><a href="https://github.com/opentechinstitute/luci-commotion-dash">luci-commotion-dash v0.1</a>: Configuración para reporte del panel de instrumentos.</li>
	<li><a href="https://github.com/opentechinstitute/olsrd/tree/release-0.6.5.4/lib/dnssd">olsrd-dnssd v0.2</a>: Propaga descubrimiento de servicio (DNSSD) multicast DNS (mDNS) sobre una red mesh OLSR</li>
	<li><a href="https://github.com/opentechinstitute/olsrd/tree/release-0.6.5.4/lib/mdp">olsrd-mdp v0.2</a>: Plugin para conectarse al tráfico mesh OLSR</li>
	<li><a href="https://github.com/opentechinstitute/serval-crypto">serval-crypto v2.1</a>: Bibliotecas de códigos y API para conectarse a anuncios de servicios mDNS</li>
</ul>
 

