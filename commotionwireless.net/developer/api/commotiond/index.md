---
layout: default
title: API Reference - commotiond
site_section: developers
categories: 
created: 2014-06-06 13:22:04.584366
changed: 2014-06-06 13:22:04.584366
post_author: Commotion
lang: en
---
commotiond/libcommotion
=======================
This embedded library and daemon are the start of what will form the new core of the Commotion project on embedded platforms. *This is extremely pre-alpha software that does not do anything yet, but which is in rapid development.*

Build it
============
NOTE: this project uses CMake, so you must have that installed on your system, as well as subversion and sqlite3 header files (libsqlite3-dev).

1. Clone the repository.
2. cd commmotiond
3. mkdir build
4. cd build
5. cmake ..
6. make
7. sudo make install

Commotion components
======================
This repository includes 3 main components:

libcommotion
------------
libcommotion is a high level library that contains a C API with all of the tools necessary to create a variety of mesh networks and mesh networking applications, without needing to deal with all of the specifics of configuring each and every type of addressing scheme and mesh networking daemon available. Bindings for other languages like Java or Python are forthcoming.

commotiond
----------
commotiond is an implementation of libcommotion, in the form of a superserver daemon that creates and manages parent processes for a variety of mesh-networking related daemons and services based on a common configuration store. It (will) support a variety of types of plugins and extensions, including:

* operating-system specific extensions for interfacing with the wireless subsystem
* schemas for mesh network detection
* APIs for different kinds of messaging infrastructures (dbus, ubus, JNI)
* drivers for different kinds of mesh networking daemons (olsrd, babeld, servald)

commotion
---------
The commotion application is a simple command-shell interface for managing the commotiond daemon.
