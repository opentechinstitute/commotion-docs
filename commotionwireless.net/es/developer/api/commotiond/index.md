---
layout: doxygen
title: Referencia API - commotiond
site_section: developers
categories:
created: 2014-06-06 13:22:04.584366
changed: 2014-06-06 13:22:04.584366
post_author: Commotion
lang: en
---
commotiond/libcommotion
=======================
Esta biblioteca emembida y daemon son el inicio de lo que formará el nuevo centro del proyecto Commotion en plataformas embebidas. *Esto es software extremadamente pre-alfa que no hace nada aún, pero que está en rápido desarrollo.*

Constrúyelo
============
NOTE: este proyecto usa Cmake, así que debes tenerlo instalado en tu sistema, así como subversión y  sqlite3 header files (libsqlite3-dev).********** as well as subversion and sqlite3 header files (libsqlite3-dev).**********

1. Clona el repositorio.
2. cd commmotiond
3. mkdir build
4. cd build
5. cmake ..
6. make
7. sudo make install

Componentes Commotion
======================
Este repositorio incluye 3 componentes principales:

libcommotion
------------
libcommotion es una biblioteca de alto nivel que contiene una C API con todas las herramientas necesarias para crear una variedad de redes mesh y aplicaciones de red enmalladas, sin necesidad de lidiar con todos los detalles específicos de configurar cada y todos los tipos de esquema de direccionamiento y la creación de redes mesh daemon disponibles. Los enlaces para otros lenguajes como Java o Python vienen próximamente.

commotiond
----------
commotiond es una implementación de libcommotion, en la forma de un superserver daemon que crea y **********gestiona los procesos padre para una variedad de daemons relacionados con enmallados de redes y servicios basados en tiendas de configuraciones comunes. Este (próximamente) soporta una variedad de tipos de plugins y extensiones, incluyendo:*********manages parent processes for a variety of mesh-networking related daemons and services based on a common configuration store. It (will) support a variety of types of plugins and extensions, including:

* extensiones específicas del sistema operativo para la interfaz con el subsistema inalámbrico*******operating-system specific extensions for interfacing with the wireless subsystem
* esquemas para la detección de redes mesh
* APIs para diferentes tipos de infraestructura de mensajes (dbus, ubus, JNI)
* drivers para diferentes tipos de daemons de redes mesh (olsrd, babeld, servald)

commotion
---------
La aplicación commotion es una simple interfaz shell de comandos para manejar el daemon commotion.**************The commotion application is a simple command-shell interface for managing the commotiond daemon.
