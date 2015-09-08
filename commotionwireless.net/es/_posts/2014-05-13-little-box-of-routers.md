---
layout: blog
title: Pequeña caja de Routers – Expandiendo el apoyo Commotion para más modelos de Router
categories: [supported routers, testing]
created: 2014-05-13
changed: 2014-05-13
teaser_image: posts/051314-box-o-routers.jpg
post_author: Chris Ritzo
lang: es
---
El equipo Commotion a menudo recibe correos electrónicos de personas interesadsas en probar nuestro software de router en sus dispositivos, así como preguntas acerca de soporte mayor que solo los modelos Ubiquiti. Desde la versión del Router Commotion 1.0, hemos estado trabajando en expandir el apoyo para más routers, ¡y nos encantaría obtener tu ayuda!<!--more-->

<img src="/files/posts/051314-box-o-routers.jpg" class="floatright onethird-width" />Estamos comprometidos con los dispositivos que están disponibles a través de las cadenas de suministro locales, en particular en el ámbito internacional de apoyo. En nuestro trabajo de campo, los socios locales nos han ayudado a identificar routers comúnmente utilizados/disponibles en su área. Por ejemplo, los modelos de mesa del router Mikrotik fueron identificados por nuestros socios en la India y Nepal. Otros nos han escrito por correo electrónico acerca de la compatibilidad para varios routers TP Link. También tenemos varios routers de proyectos anteriores que estamos probando actualmente.

En nuestra versión1.1 del Router Commotion, estaremos agregando imágenes compiladas   que apoyamos para estos routers:

  * TP Link WDR4300
  * Mikrotik RB411AH
  * Buffalo G300NH
  * Buffalo AG300N

## ¡Ayúdanos a probar nuevos routers!


El equipo Commotion está interesado en conectarse contigo para que nos ayudes a ampliar el apoyo para dispositivos nuevos. Tal vez nos hayas escrito por correo electrónico acerca de un router específico en el pasado. Tal vez hayas leído acerca de Commotion y quieras probarlo. ¿Tienes una caja de material tecnológico en el garaje o bajo su escritorio y estás pensando, "Me pregunto si ese viejo router podría ejecutarlo..." Bueno, ¡a nosotros también nos gustaría saber!

En general, el Router Commotion tiene estos requerimientos de sistema:

  * Expansor de rango inalámbrico (target) es ar71xx o atheros
  * El router tiene más de 4MB de flash
  * El router soporta OpenWRT 10.x Attitude Adjustment o mayor

Hemos compilado una <a href="https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_compatibility_list">lista de routers posiblemente compatibles</a> en nuestro wiki y evaluamos el potencial de cada dispositivo usando lo siguiente:

  * <img src="/files/posts/051314-confirmed-working.png" /> Confirmado que trabaja/es compatible con Commotion
  * <img src="/files/posts/051314-likely-compatible.png" /> Muy probable que ejecute Commotion 
  * <img src="/files/posts/051314-likely-compatible-with-exception.png" /> Es probable que ejecute Commotion, pero puede requerir una construcción especial o instalación, por ejemplo requiriendo root externo en un dispositivo USB
  * <img src="/files/posts/051314-likely-not-compatible.png" /> Es muy probable que no ejecute Commotion.

Si estás interesado en ayudar y tienes uno o más de los routers en tu lista, <a href="/contact">contáctanos</a>! ¡Incluso podemos construir una imagen de prueba para ti! 
