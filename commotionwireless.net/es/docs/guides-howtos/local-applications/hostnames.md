---
layout: default
title: Hostnames para Servidores de Aplicaciones Locales
site_section: docs
sub_section: [guides]
categories:
created: 2015-02-25
changed: 2015-02-25
post_author: Dan Staples
lang: es
---

<img class="img-responsive" src="/files/commotion-logo-.png" />

A veces, en lugar de usar un portal de aplicaciones locales, puede que quieras solo conectarte a una aplicación local usando un nombre bien conocido. Justo como escribirías el nombre de tu sitio web favorito (por ejemplo "democracynow.org") en la barra de direcciones de tu navegador para visitar ese sitio web, puedes asignar nombres fáciles-de-recordar (llamados "hostnames"**********) a servidores de aplicaciones locales en tu red mesh.

Para conectar hostnames a aplicaciones locales, los nodos en tu red deben de ser capaces de traducir un hostname a una dirección IP, que nodo usar para conectarse uno con el otro (Ve el módulo [Aprende lo Básico de las Redes](/docs/cck/networking/learn-networking-basics/) CCK para aprender acerca de las direcciones IP). Buscar las direcciones IP que correspondan a un hostname se se llama *******"resolver"**********"resolving."********** Actualmente hay tres diferentes formas para que los nodos en tu red resuelvan hostnames, cada uno con ventajas y desventajas:

## 1. Manualmente editar el archivo "hosts"*************
Cada nodo tiene un archivo llamado "hosts", que lista los hostnames y las direcciones IP correspondientes. Cuando un usuario conectado a un nodo intenta acceder una aplicación usando un hostname, el nodo primero checa su archivo host para ver si el hostname solicitado está listado. Si el hostname está listado, regresa la dirección IP correspondiente en el archivo, que el usuario luego usará para conectarse con la aplicación; si no está listado, el nodo usa otro método para intentar resolver el hostname, que describiremos en el siguiente método abajo.

**Ventajas:**

* Simplicidad. No hay necesidad para configurar ningún mecanismo adicional para la resolución del hostname; simplemente necesitas agregar el hostname y la dirección IP de tu servidor de aplicación a un archivo construido en cada nodo.************ you simply need to add the hostname and IP address of your application server to a built-in file on each node.********
* Redundancia / Resiliencia. Dado que los ajustes están contenidos en cada nodo, no hay un punto de falla en la red, ya que cada nodo ofrecerá esta información a sus clientes conectados.

**Desventajas:**

* Consume tiempo al configurar. Cuando tienes un gran número de nodos en la red, editar manualmente un archivo en cada dispositivo puede tomar mucho tiempo. Si deseas agregar más hostnames********** o editar los nombres de host actuales, tienes que hacer los cambios en cada nodo de la red de forma individual

Si tu red no cambia seguido y tiene un pequeño número de nodos, esto puede ser una buena solución para ti.

### Instrucciones de Configuración
****Primero necesitarás SSH en el nodo, *************You will first need to SSH in to the node,********* de la terminal en tu computadora. Si estás conectado al nodo vía WiFi o Ethernet, el nodo al que estás conectado debería responder al nombre "estenodo," que es el hostname que usaremos en todos los ejemplos.

Para este ejemplo, creamos un hostname para un servidor chat en la red. Llamémosle "chat.mesh".

De tu programa Terminal (por ejemplo: La app Terminal en Mac, OSX, PuTTY en Windows, o o cualquiera que sea por defecto en tu distribución de Linux), ***********SSH al nodo usando el comando `ssh root@thisnode` de un emulador Terminal o configura el Host como "estenodo" y el usuario a "raíz" en las configuraciones PuTTY. El resultado de la terminal debería verse algo cómo:*************************** SSH into the node using the `ssh root@thisnode` command from a Terminal emulator, or set up the Host as "thisnode" and user to "root" in the PuTTY settings. The terminal output should look something like:*******

   user@terminal:~$ ssh root@thisnode
   The authenticity of host 'thisnode (169.254.6.53)' can't be established.
   RSA key fingerprint is 00:a3:58:57:6a:9b:d5:7a:43:05:43:d8:8e:03:55:f3.
   Are you sure you want to continue connecting (yes/no)? yes
   Warning: Permanently added 'thisnode,169.254.6.53' (RSA) to the list of known hosts.
   root@thisnode's password:

Luego verás un banner de texto sobre Commotion, seguido por una solicitud de comando:

   root@testbed-1-3684304437:~#

<div class="sidebar">
La clave de huella digital RSA*********The RSA key fingerprint********* será diferente en cada nodo, así que se te podría presentar un mensaje de error. Hay una buena razón para esto, pero la explicación está un poco fuera de este tema, así que solo sigue las instrucciones para arreglar el error. La segunda cosa a notar es que el cursor no se moverá mientras escribes la contraseña para el nodo. El banner de Commotion es tu señal de que iniciaste sesión.
</div>

Ahora que ingresas al nodo, queremos editar los hosts******* en el archivo. En un nodo Commotion (así como la mayoría de las computadoras Linux y Mac) los archivos hosts están localizados en `/etc/hosts`. *********El único editor disponible en un nodo Commotion por defecto es vi (en inglés se pronuncia como las letras “vi-ay”),********************* The only editor available on a Commotion node by default is vi (pronounced vee-eye),********** así que es lo que usaremos. Si no estás familiarizado con vi, puede que quieras [leer un libro](https://en.wikibooks.org/wiki/Learning_the_vi_Editor),  o solo [echar un vistazo a la hoja de trampa***********glance at a cheat sheet](http://www.lagmonster.org/docs/vi.html). ******De donde se te solicita el comando en el nodo, escribe `vi /etc/hosts` que debería verse así: ************From the command prompt on the node, type `vi /etc/hosts` which should look like this:

   root@testbed-1-3684304437:~# vi /etc/hosts

Presiona Enter, que abrirá un editor y te mostrará los contendidos del archivo hosts, que se verán similar a esto:

   127.0.0.1 localhost
   169.254.6.53 thisnode

Estas dos lineas muestras las definiciones de para dos hostnames. El primero, "localhost", tiene un significado especial en los dispositivos Linux, y siempre resuelve al dispositivo en el que estás actualmente. El segundo, thisnode",********* se agrega por Commotion, y resuelve al nodo específico al que estás conectado.

Agregaremos ahora una entrada a los archivos host para nuestro servidor de chat. Adentro de vi, usa las flechas para moverte hacia abajo al fondo del archivo, luego usa el comando `i` para insertar texto. Escribe en la dirección IP de tu servidor chat(10.6.53.120 en nuestro ejemplo) y el hostname:

   10.6.53.120 chat.mesh

Luego presiona la tecla `Enter`. Después de eso, presiona la tecla `ESC`, `w` para guardar el archivo, luego la tecla `q` para salir del editor, seguido de la tecla `Enter`. Los hosts actualizados deberían verse algo como esto:

   127.0.0.1 localhost
   169.254.6.53 thisnode
   10.6.53.120 chat.mesh

Una vez que hayas guardado el archivo, necesitarás reiniciar la herramienta dnsmasq, para que la adición tenga efecto. Corre el comando:

   root@testbed-1-3684304437:~# /etc/init.d/dnsmasq restart

Eso es para un nodo. Todo lo que necesitas hacer es escribir `exit`****************** en la terminal y teclear `Enter` para salir del nodo, y avanzar al siguiente, hasta que todos los nodos en la red hayan sido modificados.

## 2. Configura un servidor DNS central
Cuando los nodos tratan de resolver un hostname no listado en sus archivos hosts, el nodo intenta resolver el hostname usando DNS. El Sistema de Nombres de Dominio (Domain Name System, DNS) permite a las computadoras y a los routers resolver hostnames pertenecientes a una computadora en algún lugar en Internet, usando una serie de "nombres de servidores". Los nombres de servidores solo son computadoras en red que mantienen bases de datos correlacionando hostnames con direcciones IP, similar a un archivo host. Cada servidor nombre está a cargo de ciertos subset específicos de hostnames,**************Each name server is in charge of a certain specific subset of hostnames, por ejemplo todos los hostnames que terminan con `.democracynow.org`.

En una red mesh, puedes configurar un servidor DNS y decirle a todos los nodos ******que usen esa computadora como su servidor nombre.*********to use that computer as their name server.******** Luego cuando los nodos quieran resolver un hostname, simplemente le preguntan a tu servidor DNS.

Si tu red está conectada a Internet, es recomendable colocarla tan cerca de la puerta de acceso a Internet como sea posible. De ese modo, cuando un nodo está tratando de resolver un hostname para un sitio web en el Internet en lugar de un hostname en la red local, el servidor DNS tiene acceso confiable al Internet para resolver esa solicitud.

**Ventajas:**

* Todos los nombres están en un solo lugar. Cuando quieras agregar o actualizar hostnames en la red, solo necesitas hacer el cambio en el servidor nombre en lugar de en cada nodo individual.

**Desventajas:**

* Los servidores DNS pueden ser complicados de instalar y configurar.
* Hay un solo punto de falla, lo que significa que si el servidor DNS, o el nodo al que está conectado, se desconecta, toda la red será incapaz de resolver tus hostnames personalizados.

Si tienes una red muy grande, o necesitas frecuentemente agregar o cambiar hostnames, configurar un servidor DNS puede ser la mejor opción.

### Instrucciones de Configuración
Para configurar un servidor DNS en tu red, necesitarás dos cosas:

1. Instala el software DNS en una computadora o uno de los nodos inalámbricos en la red.
2. Cambia la información de servidor DNS en cada nodo en la red.

¿Cómo decide ya sea correr DNS en una computadora o en uno de los nodos inalámbricos en tu red?

* ¿El nodo más cercano a la puerta de acceso tiene una conexión a la red confiable? Mientras que DNS es uno de los servicios de banda ancha de Internet más bajos, ten en cuenta que cada cliente y nodo en la red irán a este nodo para búsquedas de DNS.************keep in mind that every client and node on the network will be going to this node for DNS lookups.******
* ¿Están corriendo todas tus aplicaciones locales en el mismo servidor? Si ya tienes un servidor en la red donde la mayoría o todas tus apps están, entonces puede tener sentido poner el software DNS ahí.

Como una guía general, si tienes una computadora ejecutando aplicaciones locales en la red cerca a una conexión al Internet, instala DNS en ella. Si no lo tienes, pero algunos de los routers inalámbricos en tu red tienen suficiente memoria y un procesador rápido (como un Ubiquiti Rocket o TP-Link  WDR4300), instala ahí.

#### Configurando DNS en tu servidor de aplicaciones:
`dnsmasq` es el programa que le permite al nodo Commotion dar direcciones IP con DHCP, y le permite al nodo actuar como un servido DNS. Se pronuncia "D-N-S mask".********** It is pronounced "D-N-S mask".****** Ya está instalado en cada nodo Commotion, pero puedes instalarlo en cualquier computadora Linux que puede estar hospedando ya tus aplicaciones locales. En Debian, Ubuntu, o Mint, el comando para instalar dnsmasq es:
   sudo apt-get install dnsmasq
Esto debería instalar el programa y configurarlo para ejecutarse cuando la computadora se inicie.

Después, editaremos el archivo de configuración dnsmasq. Abre tu editor de texto favorito en el servidor (vi funcionaría bien), y edita el archivo /etc/dnsmasq.conf. Por ejemplo:

   vi /etc/dnsmasq.conf

Retira todo el texto en el archivo (en vi esto se puede hacer al escribir `dG` de la primera línea del archivo), y luego escribe o pega en los siguientes directivos de configuraciones:***********and then type or paste in the following configuration directives:

   domain-needed
   bogus-priv
   no-hosts
   expand-hosts
   domain=mesh.local

Finalmente, agrega en el hostname/dirección IP las entradas que quieras en forma de direcciones==/<HOSTNAME>/<IP ADDRESS>`.************add in the hostname/IP address entries you want in the form `address=/<HOSTNAME>/<IP ADDRESS>`.******** Una vez que termines, tu archivo de configuración se verá algo como esto:

   domain-needed
   bogus-priv
   no-hosts
   expand-hosts
   domain=mesh.local
   address=/chat.mesh/10.6.53.120

En el ejemplo de arriba, agregamos un nombre de dominio llamado "chat.mesh", en la IP 10.6.53.120. Cuando las personas ingresan "chat.mesh" en sus navegadores web, serán llevados a esa dirección IP. Puedes agregar tantos nombres a este archivo como servidores o aplicaciones tengas.

Guarda el archivo de configuración y reinicia dnsmasq con el siguiente comando:

   sudo service dnsmasq restart

#### Configurando DNS en un node:

Una vez que estes SSH en el nodo que estés usando como servidor DNS, escribe:**********Once you are SSH'ed into the node that you are using as a DNS server, type:

   vi /etc/config/dhcp

en la terminal y presiona `Enter`. Esto abrirá un editor. En el fondo del archivo agrega algo similar a esto:

   config domain
	    option name 'chat.mesh'
	    option ip '10.6.53.12'

Asegúrate de cambiar "chat.mesh" a cualquier nombre que quieras usar, y cambia la IP (10.6.53.12) a la dirección IP correcta de tu servidor de aplicaciones.

Puedes asignar tantos nombres en la red como quieras, ambos a direcciones IP únicas o a la misma dirección IP – cada aplicación local puede tener su propio nombre. Para hacer que los cambios tengan efecto necesitarás reiniciar dnsmasq. Para hacer simplemente escribe:

   /etc/init.d/dnsmasq restart

Luego presiona `Enter`. Tu servidor de aplicaciones o nodo Commotion está ahora actuando como servidor DNS.

### Cambiando la información del servidor DNS en cada nodo
Ahora que tienes una servidor DNS configurando y corriendo en tu red, necesitarás que cada otro nod apunte a tu servidor DNS. A menos que la dirección IP de tu servidor DNS cambie, solo necesitarás hacer este cambio una vez por nodo.

Si el sistema DNS es similar a una libreta de teléfono (donde buscas un nombre y obtienes un número), apuntar un nodo hacia un servidor DNS es similar a decirle a alguien que libreta de teléfono usar. Para preparar, asegúrate de tener la IP del servidor DNS a la mano. Si estás usando un nood como tu servidor DNS, es probablemente mejor usar la IP mesh (que comenzará con `100.`).

Para hacer este cambio, necesitarás de nuevo SSH al nodo. ************To make this change, you will again have to SSH into a node.******* Una vez ingresando al nodo, necesitarás editar dos archivos de configuración. Primero escribe:

   vi /etc/config/network

y en el editor encuentra la stanza con una linea que diga `option class 'mesh'` y pon tu cursor al final de esa stanza. Toda la stanza se verá algo como esto: *********************and in the editor find the stanza with a line that says `option class 'mesh'` and put your cursor at the bottom of that stanza. The entire stanza will look something like this:

   config interface 'Commotion'
	option class 'mesh'
	option proto 'commotion'
	option profile 'commotion'
	list dns '100.6.53.1'

La única línea que no debería ya estár ahí es la línea `list dns`. Todo lo que necesitas agregar es `list dns '100.6.53.1'` donde la IP coincide con la IP de tu servidor DNS.

En el siguiente archivo de configuración necesitarás cambiar una opción para que el DNS local funcione. Escribe:

   vi /etc/config/dhcp

y busca esta línea en la stanza dnsmasq***********and look for this line in the dnsmasq stanza:

	    option rebind_protection '1'

Cambia el `1` al `0` y guarda el archivo. Estos cambios tendrán efecto después de que reinicies el nodo.

## 3. Usando el portal de aplicaciones Commotion
******, y automáticamente será anunciado al resto de la red. La desventaja de este enfoque es que en lugar de usar un hostname de aplicación-específica, los usuarios necesitarán conectarse primero al portal de aplicaciones via el portal captivo (si tu red usa uno), o al ir a `http://thisnode` en su navegador. También debería notarse que el portal de aplicaciones solo soporta aplicaciones web. ******************************If you dons information once, and it will be automatically announced to the rest of the network. The disadvantage to this approach is that instead of using an application-specific hostname, users will need to first connect to the applications portal via the captive portal (if your network uses one), or by going to `http://thisnode` in their browser. It should also be noted that the applications portal only supports web applications.

Antes de que decidas asignar un hostname a un servidor de aplicaciones en tu red, querrás consultar con cualquier otra persona que esté ejecutando aplicaciones en la red para asegurarte que nadie esté usando el mismo nombre: actualmente no hay mecanismos automatizados en Commotion para resolver conflictos de hostnames.
