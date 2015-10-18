<<<<<<< HEAD
---
layout: blog
title: Cambios de última hora de Commotion R1
categories: [es]
tags: [R1,upgrade]
=======
﻿---
layout: blog
title: Cambios de última hora de Commotion R1
categories: [R1,upgrade]
>>>>>>> 05c14056a25140e6b0b71d926bb8f6da3947366a
created: 2014-01-10
changed: 2014-01-10
post_author: Dan Staples
lang: es
---
 La última versión de Commotion, <a href="https://commotionwireless.net/download/routers">R1 “Grumpy Cat”</a>, mejora y aprovecha las características de versiones anteriores Commotion. Aunque nos esforzamos por mantener Commotion parecido y compatible con las versiones anteriores siempre que sea posible, R1 introdujo cambios significativos que los usuarios y los desarrolladores deben conocer.<!--more--> Estos cambios afectan a los componentes de red básicos de Commotion, y han sido desde hace mucho tiempo las prioridades de desarrollo. En primer lugar, vamos a discutir los detalles técnicos de los cambios y el razonamiento detrás de ellos, y al final vamos a hablar de los problemas de compatibilidad que esto trae para aquellos que ejecutan las redes Commotion previas al R1.

**Direccionamiento IP**
El primer cambio es el esquema de direccionamiento IP que usamos. Si has usado versiones anteriores de Commotion, quizá hayas notado que los dispositivos en la red mesh se asignan a sí mismos direcciones IP en algún punto entre el rango de 5.0.0.0/8. Adicionalmente, si te has conectado a un router Commotion corriendo en una versión previa, el dispositivo tuvo una dirección IP 101.x.x.x, 102.x.x.x, ó 103.x.x.x. Los lectores con experiencia en redes de computadoras se darán cuenta que todos estos rangos de direcciones IP son técnicamente espacio público, y al usarlas Commotion podría potencialmente romper el routing de dispositivos a los que se les asignaron estas direcciones IP en el internet público.
Los rangos de estas direcciones fueron originalmente seleccionados para mantener la compatibilidad con uno de los predecesores de Commotion. Antes de que Commotion existiera en su forma actual, el Open Technology Institute estaba trabajando en un proyecto para proveer a una comunidad existente de una red inalámbrica con routers mesh. El software que estaba escrito para esos dispositivos fue creado para ser compatible hacia atrás con los routers que ya estaban colocados, que corrían en una versión de <a href="http://robin.forumup.it" target="_blank">firmware R.O.B.I.N.</a>. Los rangos default de las direcciones IP del firmware R.O.B.I.N. fueron adoptados para nuestro software personalizado, y ese proyecto eventualmente se convirtió en la semilla que sería Commotion. 
Para R1, nos movimos de las direcciones IP asignables públicamente y ahora estamos usando rangos más privados. Pero esto nos introdujo a otro problema: las redes más residenciales y comerciales IPv4 usan el mismo puñado de rangos de direcciones privadas debido a la escasez de las direcciones IPv4. Si usamos algunos de estos rangos comunes de direcciones privadas para Commotion, corremos el riesgo de interferir con la puerta de acceso hacia arriba de las redes y por tanto causar problemas de routing.
Para resolver este problema, hemos elegido usar el espacio para direcciones compartidas Carrier-Grade NAT (<a href="http://tools.ietf.org/search/rfc6598" target="_blank">RFC6598</a>)para todos los dispositivos mesh. Esto nos permite usar las direcciones IP en el rango de 100.64.0.0/10. Además, todas las redes de cliente ahora están conectadas y usan <a href="http://tools.ietf.org/html/rfc1918" target="_blank">RFC1918</a>un rango de direcciones privadas 10.0.0.0/8.
Otro enfoque al problema del choque de las direcciones IPv4 sería mover a una dirección de espacio totalmente IPv6. Sin embargo, para poder soportar mejor la variedad más grande de hardware posible, hemos decidido mantenernos con una red por defecto IPv4 por ahora, mientras buscamos poder utilizar IPv6 en versiones futuras.

**Configuraciones inalámbricas adhoc**
Las versiones previas de Commotion venían pre-configuradas con valores por defecto para la configuración de redes inalámbricas adhoc/mesh. Elegimos “commotionwireless.net” como el SSID, “02:CA:FF:EE:BA:BE” como el BSSID (un BSSID utilizado comunmente en redes mesh inalámbricas), y un canal de 5 por default. En la versión R1 de Commotion, se les pide a los usuarios elegir un canal y SSID durante la configuración, así que los defaults viejos ya no son relevantes.
El cambio más significativo concierne al BSSID adhoc, un valor que, como el SSID adhoc, debe de ser compartido por todos los dispositivos en una red mesh particular. En lugar de pedirle al usuario elegir un BSSID, que es una secuencia de seis bits representada como doce caracteres hexadecimales, optamos por usar una generación BSSID determinista. Esto significa que el BSSID es ahora generado como un hash del canal SSID adhoc, una idea originalmente sugerida por los frecuentes contribuyentes a Commotion, Hans-Christoph Steiner y Sean McIntyre.
Este cambio ayudará a prevenir que ciertos drivers inalámbricos ignoren el BSSID solicitado y que realicen roaming a un SSID correspondiente. En R1, los nodos Commotion con el mismo BSSID siempre tienen el mismo SSID y canal, y viceversa. 
Esto también ha agregado el beneficio de no molestar al usuario con detalles técnicos innecesarios.

**Compatibilidad hacia atrás**
El efecto colateral desafortunado de estos cambios es que Commotion R1 no es compatible hacia atrás con versiones anteriores. Para poder actualizar tu red Commotion pre-R1, recomendamos realizar el proceso de instalación del firmware a todos los nodos de tu red hacia la vía R1 <a href="https://commotionwireless.net/docs/cck/installing-configuring/install-and-recover-tftp">restablecimiento de fábrica</a> o el método sysupgrade (**asegúrate de *quitar la selección* en "Guardar configuración" cuando realices el sysupgrading al R1**). Después de instalar el firmware en los nodos, sigue el asistente de configuración para configurar los ajustes pertinentes para el nodo. Una vez que hayas terminado, ¡debería estar listo!
Después de actualizar al R1, tus nodos ahora tienen la habilidad de guardar sus configuraciones durante actualizaciones futuras. Para hacerlo, puedes mantener la opción checada cuando uses el método sysupgrade.
¿Has probado el R1? <a href="https://commotionwireless.net/contact">Déjanos saber lo que piensas</a> en nuestro formato de retroalimentación.

