---
layout: blog
title: Router Commotion v1.1 "Grumpy Cat" ¡Lanzamiento público!
categories: [release]
created: 2014-10-15
changed: 2014-10-15
teaser_image: commotion_logo_100x100.png
post_author: Josh King
lang: es
---
Estamos muy complacidos en anunciar el [lanzamiento v1.1 para nuestro Router Commotion firmware](/download/routers) Esta versión resuelve muchos fallos y mejoras de estabilidad en nuestra rama v1.x "Grumpy Cat" estable.<!--more-->

### Cambios desde v1.1rc2:
* Se arregló una fuga de memoria en el cliente API de Commotion.
* Se mejoró el manejo de interfaces puente.
* Numerosos arreglos a la validación de input en la interfaz de la red.
* Se actualizó a OLSRd v0.6.6.
* Manejo más confiable de anuncios de la app.
* Se mejoró la documentación para usuarios.
* Soporte oficial para TP-Link WDR3600, TP-Link WDR4300, y Mikrotik RB411AH

### Componentes
Commotion Router v1.1 está construido en [OpenWRT Attitude Adjustment trunk](http://openwrt.org), [OLSRd v0.6.6](http://olsr.org), [libserval](http://servalproject.org), y otro software. También incluye los componentes específicos-Commotion listados abajo (con links a sus notas de lanzamiento):

* [commotiond v0.2.4](https://github.com/opentechinstitute/commotiond/releases/tag/0.2.4)
* [commotion-service-manager v0.4.1](https://github.com/opentechinstitute/commotion-service-manager/releases/tag/0.4.1)
* [luci-commotion v1.1.4](https://github.com/opentechinstitute/luci-commotion/releases/tag/1.1.4)
* [luci-i18n-commotion v0.2.3](https://github.com/opentechinstitute/luci-i18n-commotion/releases/tag/0.2.3)
* [olsrd-dnssd v0.5](https://github.com/opentechinstitute/olsrd/releases/tag/commotion-0.5)
* [olsrd-mdp v0.5](https://github.com/opentechinstitute/olsrd/releases/tag/commotion-0.5)

### Contribuidores
Muchas gracias al equipo de desarrollo, a nuestros implementadores, y nuestra comunidad que contribuyó a la serie de lanzamiento v1.1. Solo algunas personas que hay que agradecer:

* [Andrew Reynolds](https://github.com/areynold)
* [Andy Gunn](https://github.com/andygunn)
* [Ben West](https://github.com/westbywest)
* [Chris Ritzo](https://github.com/critzo)
* [Dan Staples](https://github.com/dismantl)
* [Georgia Bullen](https://github.com/georgiamoon)
* [Grady Johnson](https://github.com/gradyoti)
* [Griffin Boyce](https://github.com/glamrock)
* [Jordan McCarthy](https://github.com/technosopher)
* [Nat Meysenburg](https://github.com/natmey)
* Ryan Gerety
* [Seamus Tuohy](https://github.com/elationfoundation)
* [Will Hawkins](https://github.com/hawkinswnaf)
* Nuestros becarios [Code for Progress](http://codeforprogress.org).
* Nuestros voluntarios [GNOME OPW](https://wiki.gnome.org/OutreachProgramForWomen).
* Todos nuestros otros colaboradores, miembros de la comunidad y los usuarios de nuestro software.

Esta versión es compatible con v1.1rc2, y alentamos a nuestros usuarios a que actualicen. Puedes encontrar imágenes disponibles para bajar en [nuestra página de descargas](/download/routers). Para mayor información acerca de los arreglos y mejoras desde v1.0, por favor ve las notas de lanzamiento de [v1.1rc1]({% post_url 2014-04-11-commotion-router-1.1rc1-release-notes %}) y [v1.1rc2]({% post_url 2014-06-13-commotion-router-1.1rc2-release-notes %}). El código fuente del proyecto está disponible vía [Github](https://github.com/opentechinstitute).

