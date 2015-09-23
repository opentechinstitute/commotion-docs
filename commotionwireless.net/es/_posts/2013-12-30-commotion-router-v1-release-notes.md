---
layout: blog
title: Notas de lanzamiento de la versión Router Commotion v1 
categories: [es]
tags: [release]
created: 2013-12-30
changed: 2013-12-31
post_author: Josh King
lang: es
---
  Estas son las notas de lanzamiento del Router Commotion v1 "Grumpy Cat", **<a href="/download/routers">disponible para descargas ahora</a>**.<!--miniteaser--> Esta es la primer versión completa de descargas del <a href="http://openwrt.org">OpenWRT</a>- firmware basado para el proyecto Commotion, que tiene la intención de hacer más fácil para las comunidades construir su propia tecnología de comunicaciones y servir como una plataforma para el dessarollo de nuevas y seguras herramientas de comunicaciones.<!--more--> Para aclarar, a la distribución firmware Commotion para routers inalámbricos se le mencionará ahora como Commotion Router, en lugar de Commotion-OpenWRT o CommotionWRT.
<h3>Una nota sobre los lanzamientos</h3>
Para la versión 1, estamos cambiando nuestro esquema, y 
evitando todas las designaciones del estilo de “Lanzamiento anticipado,” “Versión para desarrolladores”. De la versión 1 en adelante, estamos usando números completos para cada versión, de forma similar a proyectos como Firefox y Chrome. Así que, en este caso, esta sería la versión 1, y la próxima será la versión 2, y así sucesivamente. Si se requieren bugfixes críticos, podríamos poner puntos a las versiones como 1.1, 1.2, 2.1, etc. Estas versiones son para cada plataforma y así sucesivamente. Estos números de versiones no necesariamente se sincronizarán entre plataformas. También, para algunas plataformas, como el Router Commotion, podríamos tener nombres de versiones basados en memes de Internet. Los componentes de software individual continuarán siendo versiones de acuerdo con <a href="http://semver.org">versionado semántico</a>.
<h3>Nuevas Aplicaciones</h3>
<ul>
	<li>**Nueva interfaz de usuario:** Hemos llevado a cabo una extensa revisión de usabilidad que ha contribuido a una revisión completa de la interfaz de usuario Commotion. El resultado es que nuestras interfaces de usuario son más fáciles de usar, más potentes y están más integradas con el resto del software. Tenemos la intención de volver a examinar el proceso de revisión de usabilidad de forma regular con el fin de mantener nuestras interfaces amigables y actualizadas.</li>
	<li>**Apoyo multi-interfaz:** Ahora utlizamos configuraciones más flexibles de dispositivos que incluyen múltiples interfaces conectadas e inalámbricas. Esto nos permite soportar más routers, y permite el despliegue de redes más complejas.</li>
	<li>**Gran estabilidad, menos recursos:** El trabajo en reducir nuestro tiempo de proceso y almacenamiento por encima de plataformas embebidas ha resultado en una mayor estabilidad e imágenes de software más pequeñas.</li>
	<li>**Mejor apoyo Serval mesh:** La sobrecapa del mesh <a href="http://servalproject.org">Serval</a> codificado está ahora integrado más cuidadosamente a través de nuestro software, y provee una API para desarrolladores para crear aplicaciones verdaderamente de fin-a-fin sobre una red mesh. Los documentos para desarrolladores y un ejemplo de aplicaciones de mensajes están en camino.</li>
	<li>**Actualizaciones más fáciles:** Commotion ahora permite retener la configuración entre actualizaciones, para que no tengas que reconfigurar tu dispositivo cada vez que actualizas el sistema. Nuestra intención es retener la compatibilidad de actualización tanto como sea posible de ahora en adelante.</li>
</ul>
<h3>Errores corregidos</h3>
Innumerables correcciones y mejoras se han hecho en esta versión. En particular, hemos pasado de nuestras subredes IP de legado no estándar que retuvimos para la compatibilidad con otro proyecto a nuevas subredes privadas con el fin de aliviar los problemas de enrutamiento cuando se conecta a Internet.
<h3>Componentes incluidos</h3>
<ul>
	<li><a href="https://github.com/opentechinstitute/commotion-service-manager">commotion-service-manager v0.3</a>: Provee búsqueda automática de servicio de red</li>
	<li><a href="https://github.com/opentechinstitute/luci-commotion-apps/">luci-commotion-apps v2.0</a>: Portal de aplicaciones locales basadas en la web de Commotion-OpenWRT</li>
	<li><a href="https://github.com/opentechinstitute/commotion-dashboard-helper/">commotion-dashboard-helper v0.2</a>: Un script para enviar análisis de información a un panel de instrumentos</li>
	<li><a href="https://github.com/opentechinstitute/commotion-debug-helper">commotion-debug-helper v1.0</a>: Una herramienta basada en LuCI-para simplificar el proceso de solución de problemas del router</li A>
	<li><a href="https://github.com/opentechinstitute/commotion-lua-helpers">commotion-lua-helpers v1.0</a>: Un set de ayudantes lua y extensiones mantenidas por el proyecto Commotion.</li>
	<li><a href="https://github.com/opentechinstitute/luci-i18n-commotion">luci-i18n-commotion v0.2.1</a>: Apoyo de traducción GUI</li>
	<li><a href="https://github.com/opentechinstitute/luci-commotion-splash">luci-commotion-splash v1.2</a>: Una interfaz LuCI para configurar el portal captivo nodogsplash</li>
	<li><a href="https://github.com/opentechinstitute/commotiond">commotiond v0.2</a>: Un daemon extensible y un paquete de biblioteca que formará el API administrativo y principal de Commotion y simplificará el proceso de portar a nuevas plataformas</li>
	<li><a href="https://github.com/opentechinstitute/luci-theme-commotion">luci-theme-commotion v2.0</a>: Tema HIG-compliant Commotion para routers OpenWRT</li>
	<li><a href="https://github.com/opentechinstitute/luci-commotion">luci-commotion v1.0</a>: Interfaz completa Commotion construida sobre un marco de trabajo LuCI.</li>
	<li><a href="https://olsr.org">OLSRd v0.6.5.4</a>: Enrutador mesh daemon de código abierto implementando el protocolo Open Link State Routing.</li>
	<li><a href="https://github.com/opentechinstitute/olsrd/tree/release-0.6.5.4/lib/dnssd">olsrd-dnssd v0.3</a>: Propaga descubrimiento de servicio (DNSSD) multicast DNS (mDNS) sobre una red mesh OLSR</li>
	<li><a href="https://github.com/opentechinstitute/olsrd/tree/release-0.6.5.4/lib/mdp">olsrd-mdp v0.3</a>: Plugin para conectarse al tráfico mesh OLSR</li>
	<li><a href="https://github.com/opentechinstitute/serval-dna">serval-dna v0.91</a>: Bibliotecas de códigos y API para comunicación segura y tolerante a los retrasos</li>
	<li><a href="http://openwrt.org">OpenWRT Linux 12.09.1 "Attitude Adjustment"</a>: Distribución extensible de Linux para dispositivos embebidos.</li>
	<li><a href="http://luci.subsignal.org">LuCI v0.11</a>: Framework de modelo, vista y controlador web basado en Lua para dispositivos embebidos.</li>
</ul>
 

