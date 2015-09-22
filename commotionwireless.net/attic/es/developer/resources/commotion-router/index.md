---
layout: default
title: Recursos de Desarrollador Commotion-Router
site_section: developers
sub_section: devresources
categories:
created: 2014-02-26
changed: 2014-02-27
post_author: areynold
lang: es
---

<h2>Overview</h2>
<p>Commotion-Router es una versión altamente personalizada de <a href="https://openwrt.org/">OpenWRT</a> distribución Linux embebida. El principal repositorio de proyectos (<a href="https://github.com/opentechinstitute/commotion-router">Commotion-Router</a>) contiene no solo scripts y carpetas por defecto necesarias para descargar OpenWRT y agregar paquetes Commotion a el sistema construido OpenWRT . Los paquetes Commotion están definidos en directorios de paquetes del <a href="https://github.com/opentechinstitute/commotion-feed.git">Commotion Feed repo</a>. El código fuente para paquetes individuales Commotion-Router puede encontrarse en los repositorios (PKG_SOURCE_URL) y ramas (PKG_VERSION) especificadas en sus respectivos Commotion Feed Makefiles.</p>

<p>Por defecto, Commotion-Router está configurado para construir imágenes para dispositivos Ubiquiti ********usando la rama maestra de cada proyecto repo. El nuevo desarrollo tiene lugar en las ramas de características, que se fusionaron para dominar después de las pruebas de función.******using the master branch of each project repo. New development takes place in feature branches, which are merged to master after function testing.********* Ve el <a href="https://wiki.commotionwireless.net/doku.php/development_resources/github_workflow">GitHub Workflow</a> documento en la Wiki de Commotion ******para información en el enramado y el envío de parches******** for information on branching and submitting patches.**************</p>

<p>El Commotion-Router teóricamente puede ser construido por cualquier<a href="http://wiki.openwrt.org/toh/start">dispositivo compatible con OpenWRT</a> con suficiente almacenamiento flash para instalar los 5.4MB de la imágen Commotion. No obstante, por ahora, los dispositivos usando los chipsets ar7xxx/ar9xxx tienen la mejor compatibilidad inalámbrica de driver.</p>

<h2>Pre requisitos</h2>
<p>See the <a href="http://wiki.openwrt.org/doc/howto/easy.build">OpenWRT Fácil de Construir</a> guía para los mínimos pre requisitos para construir OpenWRT. Puedes encontrar dependencias adicionales cuando construyas o desarrolles paquetes específicos Commotion.</p>

<h2>Construir/Instalar</h2>
<p>Ve el<a
href="https://github.com/opentechinstitute/commotion-router/blob/master/LEEME.
md#build—install">Leeme de Commotion Router</a> en GitHub.</p>
