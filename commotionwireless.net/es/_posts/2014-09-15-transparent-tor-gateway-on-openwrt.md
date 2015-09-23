---
layout: blog
title: Puerta de Entrada Transparente con Tor en OpenWRT 
categories: [es]
tags: [Tor, OpenWRT]
created: 2014-09-15
changed: 2014-09-15
teaser_image: posts/torlogo.png
post_author: Dan Staples
lang: es
---

*Este post originalmente apareció en <a href="https://disman.tl/2014/09/13/transparent-tor-gateway-on-openwrt.html" target="_blank">disman.tl</a>.*

Cuando me estaba preparando para ir a [DEF CON] [] 22 este año en Las Vegas, sabía que tendría que llevar un portátil de repuesto para un sistema operativo que pudiera borrar cuando llegara a casa (y cruzar los dedos para que no hubiera adquirido ningún BIOS o malware a nivel firmware cuando estaba allá). En lugar de sólo instalar un sistema operativo Linux vainilla como [Linux Mint] [] (mi distro favorito) como lo hice la última vez que fui a DEF CON, pensé que intentaría instalar algo un poco más fortalecido y enfocado a la seguridad.<!--more--> Estaría jugando con [Qubes OS][] un poco en una nueva computadora de escritorio que tenía, y pensé que ese sería un buen candidato. Qubes OS es un sistema operativo construido sobre el principio de "seguridad por aislamiento". Está construido sobre [Xen hypervisor][xen] con dominios several Linux VM. Lo bueno de Qubes es que, no solo hace tanto como sea posible para reducir la superficie de ataque de sus muchos componentes Vms, alienta al usuario por necesidad a considerar la compartimentación de sus actividades digitales y ajusta su comportamiento con un esquema de múltiples "dominios de seguridad". Ciertamente hay compensaciones, como siempre hay, en términos de conveniencia, pero es un sistema operativo remarcablemente bien diseñado e implementado para aquellos que esperan incrementar su postura de seguridad digital. 

Uno de mis aspectos favoritos del Sistema Operativo Qubes es la habilidad para [transparentemente "Tor-ificar" cualquier máquina virtual][torVM]. Puedes efectivamente forzar todas las comunicaciones de la red de un VM para ser enrutado sobre Tor (el tráfico que no es TCP o DNS se tira, por supuesto), sin riesgo de accidentalmente revelar tu verdadera dirección IP excepto en el evento de un ataque nivel-kernel sofisticado. No se necesitan aplicaciones para que sean "concientes de Tor", incluso tiene [aislamiento stream][]. Como con muchas discusiones Tor, no obstante, ten en cuenta que torificar tu tráfico no es una bala de plata de anonimato; esto no hace nada para prevenir [dejar huellas en el browser][] o prevenir un error de usuario. 

Ya que recientemente [instalé Kali linux][kali] en mi laptop extra, pensé que sería bueno tener un mecanismo similar para usar tor forzosamente todo mi tráfico en la máquina. Una de las pláticas que vi en DEF CON fue sobre un sistema llamado el Router Cebolla Personal para Asegurar Libertad [PORTAL][]), que hace exactamente eso. Basicamente usa un router inalámbrico dedicado que transparentemente enrutará todo tu tráfico sobre Tor. Como un hacker de routers, tengo muchos routers extras que podía dedicar solo para este propósito, pero pensé que sería muy genial en su lugar tener el Punto de Acceso de 5GHz en mi principal router de casa que fuera una puerta de acceso Tor mientras dejaba el otro Punto de Acceso de 2.4GHz a que enrutara el tráfico normalmente. De ese modo, podría tener un router con opciones para proveer ambos acceso 'anónimo' y acceso normal al Internet.

Tengo un [TP-Link TL-WDR4300][wdr4300], un gran MIMO-capaz y router de doble-banda que está corriendo actualmente un reciente tronco construido de [OpenWRT][] Barrier Breaker. Tor puede ser un proceso  muy intensivo de CPU si estás generando mucho tráfico, y tiene una memoria considerable y espacio para footprint en un router, así que recomendaría obtener algo con por lo menos 8MB de almacenamiento y 64MB de RAM. El TL-WDR4300 tiene mucho de ambos, además usa el nunca-hackeable Atheros ath9k driver inalámbrico. Por suerte, tengo mucha familiaridad con la plataforma que estaremos hackeando, ya que ayudé a construir [el firmware del router enmallado personalizado][commotion] basado en OpenWRT para mi día de trabajo. ¡Así que empecemos!

Construyendo el software
=====================

Recomendaría construir OpenWRT de la [más reciente fuente Barrier Breaker] [obtén la fuente] (14.07) debido a estas mejoras desde la versión previa de OpenWRT, pero con Attitude Adjustment (12.09) servirá también. PORTAL usa Attitude Adjustment, pero ya que mi router ya estaba usando Barrier Breaker decidí ir con esa. Aunque OpenWRT ya viene con un Makefile para Tor, vamos a jalar el Makefile y un conjunto adicional de parches de PORTAL para reemplazarlo. Primero asegúrate de [instalar las dependencias construidas][dependencias], después comienza en proceso de construcción:

    $ git clone git://github.com/grugq/portal.git
    $ git clone git://git.openwrt.org/14.07/openwrt.git barrier-breaker
    $ cd barrier-breaker
    $ scripts/feeds update -a
    $ scripts/feeds install -a
    $ cp -r ../portal/feeds/packages/net/tor-alpha/ package/feeds/packages/
    $ rm -r package/feeds/oldpackages/tor-alpha
    $ make menuconfig

Ahora, serás capaz de elegir el sistema meta y perfil meta para tu router (en mi caso, `Atheros AR7xxx/AR9xxx` para el sistema y `TP-LINK TL-WDR3500/3600/4300/4310/MW4350R` para el perfil), y selecciona cualquier paquete que quieras incluir. Asegurante de seleccionar `Network->tor-alpha`, `Network->tor-alpha-fw-helper`, y `Network->tor-alpha-geoip`. También incluyó otras utilidades y características que quería tener en mi router como un soporte de almacenamiento USB block. Cuando termines de selccionar paquetes, guarda y sal de la pantalla menuconfig. Ahora puedes compartir tu firmware:

    $ make V=s

Esto se llevará algo de tiempo, así que sé paciente.

Instalando y configurando
==========================

Ahora tienes la opción de o bien [instalar el firmware tu router][flash] con tus imágenes recién construidas, o copiar e instalar los paquetes específicos para Tor y sus dependencias a un router que ya está corriendo (la misma versión de) OpenWRT. Si optas por lo segundo, necesitarás copiar los siguientes paquetes de `bin/<target profile>/packages/` e instalarlos con `opkg install <lista de paquetes de archivos>`:

    libevent2-openssl libevent2 libminiupnpc libnatpmp tor-alpha tor-alpha-fw-helper tor-alpha-geoip

De cualquier modo, una vez que tengas un router arriba y corriendo con Tor, necesitarás configurar las interfaces de red. Mi configuración es tener un punto de acceso sin-Tor en la radio de 2.4GHz  TL-WDR4300, un punto de acceso con Tor en la radio de 5GHz, y después cortar el switch Ethernet en dos LANs virtuales (uno para el puerto WAN y el otro para los cuatro puertos LAN). Aquí está mi configuración de red final de `/etc/config/network`:

    config interface 'loopback'
	    option ifname 'lo'
	    option proto 'static'
	    option ipaddr '127.0.0.1'
	    option netmask '255.0.0.0'

    config interface 'lan'
	    option ifname 'eth0.1'
	    option type 'bridge'
	    option proto 'static'
	    option netmask '255.255.255.0'
	    option ip6assign '60'
	    option ipaddr '192.168.5.1'

    config interface 'wan'
	    option ifname 'eth0.2'
	    option proto 'dhcp'

    config switch
	    option name 'switch0'
	    option reset '1'
	    option enable_vlan '1'

    config switch_vlan
	    option device 'switch0'
	    option vlan '1'
	    option vid '1'
	    option ports '0t 2 3 4 5'

    config switch_vlan
	    option device 'switch0'
	    option vlan '2'
	    option vid '2'
	    option ports '0t 1'

    config interface 'tor'
	    option proto 'static'
	    option ipaddr '172.16.1.1'
	    option netmask '255.255.255.0'

El bloque importante aquí es la interfaz `tor`, que está colocado en la dirección IPv4 estática de `172.16.1.1`. Ahora echemos un vistazo a `/etc/config/wireless` para ver como los puntos de acceso se configuran:

    config wifi-device 'radio0'
	    option channel '11'
	    option disabled '0'
	    [...]

    config wifi-iface
	    option device 'radio0'
	    option network 'lan'
	    option mode 'ap'
	    option ssid 'The Internet!'
	    option encryption 'psk2'
	    option key 'zomgsupersecret'

    config wifi-device 'radio1'
	    option channel '161'
	    option disabled '0'
	    [...]

    config wifi-iface
	    option device 'radio1'
	    option mode 'ap'
	    option ssid 'The Dark Web!'
	    option encryption 'none'
	    option network 'tor'

Nota aquí que `radio0`, la radio de 2.4GHz, tiene un punto de acceso llamado `¡El Internet!` con una contraseña (falsa) password que se conecta en un puento con la red `lan` (como lo vimos `/etc/config/network` arriba), ya que permite accesos sin alterar al Internet así como a la red de mi casa. Luego está `radio1`, la radio de 5GHz, que tiene un punto de acceso llamado `¡La Web Obscura!` y sin contraseña, ya que estoy menos preocupado acerca de personas aleatorias usándolo. Es también parte de la red `tor`, que vimos antes. Ahora nos adentraremos a la configuración del firewall, que colocará restricciones en lo que pueden hacer los clientes de TOR AP:

    config defaults
	    option syn_flood '1'
	    option input 'ACCEPT'
	    option output 'ACCEPT'
	    option forward 'REJECT'

    config zone
	    option name 'lan'
	    option input 'ACCEPT'
	    option output 'ACCEPT'
	    option forward 'ACCEPT'
	    option network 'lan'

    config zone
	    option name 'wan'
	    option input 'REJECT'
	    option output 'ACCEPT'
	    option forward 'REJECT'
	    option masq '1'
	    option mtu_fix '1'
	    option network 'wan'

    config zone
	    option name 'tor'
	    option network 'tor'
	    option input 'REJECT'
	    option output 'ACCEPT'
	    option forward 'REJECT'
	    option conntrack '1'

    config rule
	    option name 'Allow-Tor-DHCP'
	    option src 'tor'
	    option proto 'udp'
	    option dest_port '67'
	    option target 'ACCEPT'
	    option family 'ipv4'

    config rule
	    option name 'Allow-Tor-DNS'
	    option src 'tor'
	    option proto 'udp'
	    option dest_port '9053'
	    option target 'ACCEPT'
	    option family 'ipv4'

    config rule
	    option name 'Allow-Tor-Transparent'
	    option src 'tor'
	    option proto 'tcp'
	    option dest_port '9040'
	    option target 'ACCEPT'
	    option family 'ipv4'

    config rule
	    option name 'Allow-Tor-SOCKS'
	    option src 'tor'
	    option proto 'tcp'
	    option dest_port '9050'
	    option target 'ACCEPT'
	    option family 'ipv4'

    config rule
	    option name 'Allow-DHCP-Renew'
	    option src 'wan'
	    option proto 'udp'
	    option dest_port '68'
	    option target 'ACCEPT'
	    option family 'ipv4'

    config rule
	    option name 'Allow-Ping'
	    option src 'wan'
	    option proto 'icmp'
	    option icmp_type 'echo-request'
	    option family 'ipv4'
	    option target 'ACCEPT'

    config forwarding
	    option dest 'wan'
	    option src 'lan'

    config include
	    option path '/etc/firewall.user'

Algunas cosas que notar aquí:

* La zona`tor` rechaza entradas y reenvío y también tiene rastreo de conexión encendido para reglas iptables adicionales
* Muchos tipos de tráfico son específicamente permitidos de clientes en el punto de acceso Tor, incluyendo DHCP, DNS, SOCKS y la proxy transparente en el puerto 9040 (que obtendremos pronto)
* No hay reenvíos entre el `tor` y las zonas`wan` (o `lan` para tal efecto), asegurándose que ningún tráfico se fugue al internet<a href="#note1">[1]</a>
* El archivo `/etc/firewall.user` se ejecuta donde sea que el firewall esté prendido

Podemos ver como una conexión rastreando prendida para el tráfico en la zona `tor` se usa cuando vemos `/etc/firewall.user`:

    root@OpenWRT:~# cat /etc/firewall.user
    [...]
    enable_transparent_tor() {
      iptables -t nat -A PREROUTING -i wlan1 -p udp --dport 53 -j REDIRECT --to-ports 9053
      iptables -t nat -A PREROUTING -i wlan1 -p tcp --syn -j REDIRECT --to-ports 9040 
    }
    enable_transparent_tor

Esto muestra que cualquier tráfico DNS de la interfaz `wlan1` (nuestro punto de acceso Tor) es redireccionada al puerto 9053, para que el query DNS se haga a través de Tor, y que el tráfico TCP se redireccione al puerto 9040. Como vimos arriba, el puerto 9040 es el servicio proxy transparente de Tor. Esta es la magia que nos permite transparentemente enrutar todo el tráfico (TCP) en el punto de acceso a través de la red Tor. Cool, ¿verdad?

Lo único pendiente es configurar el punto de acceso Tor para que dé direcciones IP a los clientes con DHCP. Todo lo que tenemos que hacer es agregar el siguiente block al final de `/etc/config/dhcp`:

    config dhcp tor
	    option interface    tor
	    option start        100
	    option limit        150
	    option leasetime    1h

Conclusión
==========

Con todas estas configuraciones en su lugar, reinicia tu router y conéctalo a tu nuevo punto de acceso ya con Tor. Abre [https://check.torproject.org/][revisa] en tu navegador, y si todo salió buen, debería indicar que estás conectado a la red Tor (pero no usando el Tor Browser Bundle obviamente).

Notas
=====

<span id="note1"></span>[1] El PORTAL lleva este paso más allá al deshabilitar el reenvío IP en el kernel, que es esencialmente la característica que hace que un router sea un router. Asumiendo que, dejar el reenvío de IP prendido de mi router puede en teoría ser más riesgoso para torificar el tráfico transparentemente, pero no estoy seguro que ese de hecho sea un riesgo significativo.

[dependencies]: http://wiki.openwrt.org/doc/howto/buildroot.exigence
[flash]: http://wiki.openwrt.org/doc/howto/generic.flashing
[stream isolation]: https://gitweb.torproject.org/torspec.git/blob/HEAD:/proposals/171-separate-streams.txt
[torVM]: https://wiki.qubes-os.org/wiki/UserDoc/TorVM
[xen]: http://www.xenproject.org/developers/teams/hypervisor.html
[Qubes OS]: https://wiki.qubes-os.org/
[browser fingerprinting]: https://panopticlick.eff.org/
[kali]: /2014/09/12/installing-kali-linux-from-scratch.html
[PORTAL]: https://github.com/grugq/portal/
[wdr4300]: http://wiki.openwrt.org/toh/tp-link/tl-wdr4300
[commotion]: https://commotionwireless.net
[getsource]: https://dev.openwrt.org/wiki/GetSource
[Linux Mint]: http://www.linuxmint.com/
[DEF CON]: https://www.defcon.org/
[OpenWRT]: https://openwrt.org/
[check]: https://check.torproject.org/
