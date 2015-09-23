---
layout: blog
title: Versión candidata 1 del Router Commotion v1.1 "Grumpy Cat" 
categories: [release]
created: 2014-02-04
changed: 2014-04-11
teaser_image: commotion_logo_100x100.png
post_author: Josh King
lang: es
---
Esta es la versión candidata para nuestra versión v1.1 con errores resueltos para nuestro firmware Router Commotion. Está construido en <a href="https://openwrt.org/">OpenWRT Attitude Adjustment</a>, <a href="http://olsr.org/">OLSRd v0.6.5</a>, <a href="http://www.servalproject.org/">libseval</a>, y otro software. También incluye los componentes específicos-Commotion listados abajo con las aplicaciones y mejoras incluidas en esta versión:<!--more-->

## commotiond v0.2.1
Esta versión principalmente arregla un gran número de errores y fugas de memoria.

### Principales problemas resueltos:
<ul>
<li><a href="https://github.com/opentechinstitute/commotiond/issues/83">Commotion ya no generará BSSIDs inválidos en algunas circunstancias.</a></li>
<li>Se agregaron funciones adicionales a la biblioteca estándar libcommotion para el mejor control de memoria. (<a href="https://github.com/opentechinstitute/commotiond/commit/b538c96">b538c96</a> y <a href="https://github.com/opentechinstitute/commotiond/commit/9dbb189">9dbb189</a>)</li>
<li>Se mejoró el manejo de las opciones DHCP en scripts OpenWRT. (<a href="https://github.com/opentechinstitute/commotiond/commit/bb49b46">bb49b46</a> y <a href="https://github.com/opentechinstitute/commotiond/commit/b563048">b56e048</a>)</li>
<li>Otros numerosos errores resueltos.</li>
</ul>

### Autores (por tarea):
<ul>
<li><a href="https://github.com/jheretic">Josh King</a></li>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
<li><a href="https://github.com/gradyoti">Grady Johnson</a></li>
<li><a href="https://github.com/hawkinsnaf">Will Hawkins</a></li>
<li><a href="https://github.com/technosopher">Jordan McCarthy</a></li>
</ul>

## commotion-dashboard-helper v0.2.1
Actualización con errores resueltos a 0.2.0

### Principal problema resuelto:
<ul>
<li>Arreglo de error de validación</li>
<li>Funciones de migración a los nuevos módulos de commotion-lua-helpers</li>
<li>Checa las entradas existentes antes de agregar al crontab</li>
</ul>

### Autores (por tarea):
<ul>
<li><a href="https://github.com/areynold">Andrew Reynolds</a></li>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
</ul>

## commotion-debug-helper v1.0
Esta es la versión 1.0 estable del asistente-debug-commotion

### Aplicaciones:
<ul>
<li>Validación de entrada</li>
<li>Reportes de debugging descargables</li>
<li>Campos de formulario</li>
<li>Selectores de formas de radio para dar clic</li>
</ul>

## commotion-lua-helpers v1.1

### Principales problemas resueltos:
<ul>
<li>Se agregó una biblioteca de validación y se integró con todos los paquetes Commotion.</li>
</ul>

### Autores (por tarea):
<ul>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
<li><a href="https://github.com/elationfoundation">Seamus Tuohy</a></li>
<li><a href="https://github.com/jheretic">Josh King</a></li>
<li><a href="https://github.com/areynold">Andrew Reynolds</a></li>
</ul>

## commotion-service-manager v0.4

### Principales problemas resueltos:
<ul>
<li>
Periódicamente se reinicia el servidor avahi para mostrar anuncios de servicio, ayuda con fiabilidad</li>
<li>Arreglos Misc</li>
</ul>

### Autores (por tarea):
<ul>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
</ul>

## luci-commotion v1.1

### Principales problemas resueltos:
<ul>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/148">La función para subir el Mesh Keychain compartido ahora funciona.</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/144">Se colocaron a la par todas las adverntencias de entradas de usuarios de navegadores con revisiones de la parte trasera para soportar la entrada correcta.</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/150">Ahora es posible el Mesh sobre ethernet en el asistente de configuración y el menú básico.</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/143">El asistente de configuración está ahora deshabilitado en cualquier uso del menú de administración.</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/170">Agregar claves SSH en el menú avanzado ahora requiere de que un usuario introduzca la contraseña de administrador.</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/187">Se removió el auto-espaciado en el visualizador mesh "olsr-viz."</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/180">Los hostnames ahora sólo se configuran después de aplicar todos los cambios durante el uso del asistente de configuración</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/172">Serval Mesh Keychains ahora limpian y recrean una nueva clave al ser agregadas</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/pull/195">Todas la lógica commotion splash se ha movido al repositorio luci-commotion-splash.</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/179">Se agregaron advertencias de entradas a navegadores de campos específicos para valores inválidos en las formas</a></li>
</ul>

### Autores (por tarea):
<ul>
<li><a href="https://github.com/elationfoundation">Seamus Tuohy</a></li>
<li><a href="https://github.com/areynold">Andrew Reynolds</a></li>
<li><a href="https://github.com/jheretic">Josh King</a></li>
<li><a href="https://github.com/critzo">Chris Ritzo</a></li>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
<li>Agradecimientos especiales para <a href="https://wiki.gnome.org/OutreachProgramForWomen">OPW</a> becaria <a href="https://github.com/sheenaj">Sheena</a> por <a href="https://github.com/opentechinstitute/luci-commotion/issues/179">el asunto #179</a></li>
</ul>

## luci-commotion-apps v2.1

### Principales problemas resueltos:
<ul>
<li>campo avahi es sha1sum de UUID y hostname</li>
<li>actualizado para usar nuevos módulos validados de asistentes-commotion-lua</li>
<li>actualizado para usar nuevos programas de clientes-serval para firmar anuncios</li>
<li>aplicaciones blacklist apropiadas</li>
<li>se agregaron mensajes de confirmación cuando se están agregando aplicaciones</li>
<li>mejor integración con olsrd-dnssd</li>
<li>arreglos misc</li>
</ul>

### Autores (por tarea):
<ul>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
</ul>

## luci-commotion-splash v1.3

### Principales problemas resueltos:
<ul>
<li><a href="https://github.com/opentechinstitute/commotion-docs/issues/1">La página splash ahora captura tráfico https</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion-splash/pull/10">Commotion splash ahora puede correr sin ningún paquete Commotion</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion-splash/pull/26">Nodogsplash está ahora configurado usando UCI</a></li>
</ul>

### Autores (por tarea):
<ul>
<li><a href="https://github.com/jheretic">Josh King</a></li>
<li><a href="https://github.com/elationfoundation">Seamus Tuohy</a></li>
<li><a href="https://github.com/critzo">Chris Ritzo</a></li>
<li><a href="https://github.com/areynold">Andrew Reynolds</a></li>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
</ul>

## luci-i18n-commotion v0.2.2

### Principales problemas resueltos:
<ul>
<li><a href="https://github.com/opentechinstitute/luci-i18n-commotion/pull/6">Limpió la generación de scripts .po </a></li>
</ul>

### Autores (por tarea):
<ul>
<li><a href="https://github.com/areynold">Andrew Reynolds</a></li>
<li><a href="https://github.com/critzo">Chris Ritzo</a></li>
<li><a href="https://github.com/elationfoundation">Seamus Tuohy</a></li>
</ul>

## luci-theme-commotion v2.1

### Principales problemas resueltos:
<ul>
<li><a href="https://github.com/opentechinstitute/luci-theme-commotion/pull/34">Se enfocó en problemas de adaptación a tamaños horizontales</a></li>
<li><a href="https://github.com/opentechinstitute/luci-theme-commotion/pull/18">Se agregó un botón de cerrar sesión al menú básico.</a></li>
<li><a href="https://github.com/opentechinstitute/luci-theme-commotion/issues/16">Se arregló la interfaz que fallaba debido a los errores dnsmasq.</a></li>
</ul>

### Autores (por tarea):
<ul>
<li><a href="https://github.com/elationfoundation">Seamus Tuohy</a></li>
<li><a href="https://github.com/glamrock">Griffin Boyce</a></li>
<li><a href="https://github.com/areynold">Andrew Reynolds</a></li>
<li><a href="https://github.com/jheretic">Josh King</a></li>
<li>¡Un agradecimiento especial para <a href="http://wiki.reseaulibre.ca/">el equipo RéseauLibre</a> por su trabajo!</li>
</ul>

## olsrd-dnssd & olsrd-mdp v0.4

### Problemas resueltos:
<ul>
<li>Dnssd: Mejoras confiables para anuncios de servicio multi-hop</li>
<li>Arreglos misc para plugins dnssd y mdp</li>
</ul>

### Autores (por tarea):
<ul>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
</ul>
