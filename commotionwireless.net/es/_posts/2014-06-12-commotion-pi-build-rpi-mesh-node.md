<<<<<<< HEAD
---
layout: blog
title: "Commotion Pi: Construye un Nodo MESH RPi"
categories: [es]
tags: [Raspberry Pi, mesh, developement, guest post]
=======
﻿---
layout: blog
title: "Commotion Pi: Construye un Nodo MESH RPi"
categories: [Raspberry Pi, mesh, developement, guest post]
>>>>>>> 05c14056a25140e6b0b71d926bb8f6da3947366a
created: 2014-06-12
changed: 2014-06-12
post_author: Joshua Besneatte
teaser_image: posts/rpi.png
lang: es
---

**Notas del editor: Este es un post comunitario que originalmente apareció [aquí](http://besneatte.blogspot.com/2014/05/commotion-pi-build-rpi-mesh-node.html). Si estás escribiendo acerca de trabajar con Commotion [haznos saber](http://lists.chambana.net/mailman/listinfo/commotion-dev), ¡¡nos hace felices re-publicar y compartir lo que la gente está haciendo con Commotion!!**

Comenzaremos con asumir que tienes una Raspberry Pi en marcha y funcionando con Raspbian instalado, el último firmware (actualización-rpi), un nivel de comprensión de trabajo con la línea de comandos y una conexión a Internet. Estoy instalando en headless RPi Rev.A y toda la configuración se realizará desde la línea de comandos a través de un cable de la consola. También me gusta correr todos los procesos utilizando la aplicación en "pantalla" para poder re-conectar desde cualquier otro lugar en caso de que sea necesario. SHH trabajará hasta antes de que enmalles, después puedes hacer ssh desde la malla.<!--more-->

También, necesitarás una interfaz wifi compatible. Yo utilicé una antena con un  panda usb dongle:

[Panda rango medio 150Mbps 802.11B/G/N 2.4GHz adaptador wifi de usb](http://www.amazon.com/gp/product/B004AC0L4Y)

Lista de dispositivos aquí:

[https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_compatibility_list](https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_compatibility_list)

También puede ser una buena idea pasar el tiempo con nosotros en un nodo de IRC, en el canal #commotion. Yo aparezco como shamanon.

# Paso 1: Actualiza RPi a Jessie

En un post encontré que es necesaria la distro Jessie para instalar Commotion inalámbrico. Primero tenemos que asegurarnos que las instalaciones existentes estén actualizadas, luego actualizaremos a Jessie. Puedes copiar y pegar, deja fuera el $ por supuesto ;). 
```
$ sudo aptitude update && sudo aptitude dist-upgrade
```

 
Esto toma un rato.... 

```
$ sudo rpi-update
```

Esto también... do-do-dodo...&nbsp; 

Una vez que esté hecho edita `/etc/apt/sources.list`

```
$ sudo nano /etc/apt/sources.list
```

Para verse así:

```
deb http://mirrordirector.raspbian.org/raspbian/ jessie main contrib non-free rpi
deb http://archive.raspbian.org/raspbian jessie main contrib non-free rpi
deb-src http://archive.raspbian.org/raspbian jessie main contrib non-free rpi
```


Ahora actualiza/upgrade de nuevo:

```
$ sudo aptitude update && sudo aptitude dist-upgrade
```

Este proceso que es tardado nos da algo de tiempo para hacer algunas tareas y revisar los posts que me ayudaron a iniciar:

[https://commotionwireless.net](https://commotionwireless.net)

[http://www.raspberrypi.org/forums/viewtopic.php?f=66&amp;t=47944](http://www.raspberrypi.org/forums/viewtopic.php?f=66&amp;t=47944)
[https://jumoke021.wordpress.com/category/commotion-on-raspberry-pi/](https://jumoke021.wordpress.com/category/commotion-on-raspberry-pi/)

# Paso 2: Instala Dependencias

Un sin número de dependencias se necesitarán instalar para hacer que Commotion funcione. Aquí hay una buena lista de partida, espero que esto te permita compilar commotion en el siguiente paso.

```
$ sudo apt-get install git-buildpackage bison flex python-gtk2-dev liblua50-dev \
libldns-dev libavahi-core-dev libavahi-common-dev \
lua5.1 liblua5.1-0-dev subversion libsqlite3-dev \
python-all autoconf cmake
```

# Paso 3: Instala los beneficios de servidor

Necesitarás tener serval-dna y serval-crypto instalado para poder (próximo paso)&nbsp; compilar commotiond. Así que vamos a descargar el paquete de archivos deb de mi repo. Vamos a hacer una carpeta commotion e ir ahí si no lo habías hecho ya:

```
$ cd ~
$ mkdir Commotion
$ cd Commotion
```

Tienes algunas opciones:

Obtén los archivos de mi servidor y descomprime:

```
$ wget http://artofconfusion.com/commotion-pi/commotion-pi.tar.bz2
$ tar -xvf commotion-pi.tar.bz2
$ cd commotion-pi 
```

O puedes checar/descargar los archivos de google code

```
$ svn checkout http://commotion-wireless-raspberry-pi.googlecode.com/svn/ commotion-wireless-raspberry-pi-read-only
```

o

```
https://code.google.com/p/commotion-wireless-raspberry-pi/source/browse/
```

```
$ sudo dpkg -i serval*.deb
```

si esto falla en las dependencias, haz esto:

```
$ sudo apt-get install -f
$ sudo dpkg -i serval*.deb
```

# Paso 4: Instala commotiond

El paquete commotiond necesita ser instalado de su fuente manualmente.

```
$ unzip commotiond-master.zip
$ cd commotiond-master 
$ mkdir build
$ cd build
$ cmake ..
$ make
$ sudo make install
```

# Paso 5: Instala el Resto de los Paquetes

```
$ cd ../../
$ sudo dpkg -i *.deb
```

Esto probablemente fallará pero configura una lista de dependencias para apt-get para que: 

```
$ sudo apt-get install -f
```

Todas las dependencias se instalarán. En un nuevo Pi, esto es mucho. Pi va bien con café. Cuando esté hecho, haz la instalación de nuevo:

```
$ sudo dpkg -i *.deb
```

# Paso 6: Configura el Nodo

Tienes que asegurarte que el administrador de red pueda controlar tu wifi para que funcione. Edita /etc/network/interfaces y comenta (agrega un # al principio de la línea) todas las líneas relativas a cualquier dispositivo wlan.

```
$ sudo nano /etc/network/interfaces
```

Debería verse como algo así:

Guarda y apaga. Si ya tienes nodos mesh sin cifrar instalados con configuraciones por defecto puede solo conectarse en reboot, no estoy seguro aún.

Esta es la parte fastidiosa, necesitarás conectar un monitor y un teclado ya que no he descubierto cómo hacerlo todo desde la línea de comando aún. (las buenas noticias son que una vez que termines, el Pi puede ser “ booteado sin monitor” y se conectará automáticamente a tu mesh).

Una vez que tus cosas se conecten, rebootea el pi e inicia sesión. Tengo cosas que trabajar empezando con la línea de comando, y ejecutando este comando (Sé que no deberías ejecutar X como raíz, pero solo esta vez, ¿vale?)


```
$ sudo startx
```

Deberías tener ahora un applet mesh corriendo en tu barra de herramientas al lado de tu administrador applet de red.

Da clic derecho en el ícono del  administrador de red y selecciona editar conexiones. Si solo será un nodo mesh borra todas las conexiones excepto la de commotionwireless.net y luego edita la conexión, asegúrate que el cifrado se estableza en nada en la pestaña de seguridad. Guarda y cierra.

Da clic en el applet commotion y aparecerá un menú, selecciona commotionwireless.net, y si todo sale bien deberías conectarte al mesh.

He encontrado que ahora puedo apagar el pi y retirar todos los periféricos guardados para el adaptador wifi y cuando lo arranco se conecta al mesh de forma automática. Soy capaz de ssh sobre el mesh desde mi laptop, ¡así que estoy conectado!

Próximo paso, configuraré un RPi B para ser un punto de acceso de la web.
