---
layout: blog
title: Commotion y la Seguridad
categories: [security]
created: 2014-04-21
changed: 2014-04-21
teaser_image: 
post_author: Josh King
lang: es

---
Uno de los principales objetivos del proyecto Commotion ha sido la introducción de herramientas de seguridad de redes mesh inalámbricas de código abierto, mientras se enfatiza la facilidad de uso y la reutilización de las tecnologías existentes tanto como sea posible. Ahora que nuestras primeras versiones estables están fuera, vale la pena volver a visitar ese objetivo y ver lo que el proyecto ha logrado.<!--more-->

## Auditorías de Seguridad

Como parte del proceso de desarrollo, Commotion se ha beneficiado de dos auditorías de seguridad por compañías profesionales de auditorías de seguridad iSEC y Cure53. Estas auditorías tenían un enfoque particular en los componentes del <a href="https://github.com/opentechinstitute/commotion-router" target="_blank">router de distribución de Commotion</a>, y las vulnerabilidades que encontraron tenían cosas en común. Dado que el router-commotion es escencialmente una distribución completa basada en el excelente <a href="https://openwrt.org/" target="_blank">proyecto OpenWRT</a>, esto fue una larga y compleja misión que afecta un largo número de proyectos hacia arriba. 

El alcance de las auditorías podría llegar a ser un reto para nosotros, ya que muchas  de las posibles vulnerabilidades descubiertas podrían pertenecer a los componentes del software desarrollado por grupos e individuos fuera del Open Technology Institute. Además, muchos de los artículos identificados implicarían formas en que hemos utilizado componentes como la interfaz web OpenWRT fuera del alcance de la forma en que estaban destinados originalmente para ser utilizados. Sin embargo, se optó por ver esto como una oportunidad para contribuir a proyectos de trabajo hacia arriba, por lo que beneficiaría a otras personas fuera de la comunidad Commotion.

### iSEC

La auditoría iSEC resultó en 11 vulnerabilidades. De las cuales, arreglamos 7 en la versión 1.x de Commotion. De los 4 problemas que quedaron, 3 son problemas hacia arriba en los que estamos trabajando pero que no son triviales para que los arreglemos; por lo menos uno de ellos requeriría grandes cambios hacia las partes de la arquitectura de OpenWRT. El problema que queda sin resolver involucra la decisión de un diseño arquitectónico que aún estamos evaluando.

### Cure53

La auditoría de Cure53 resultó en 9 vulnerabilidades. De las cuales, arreglamos 6 en la versión 1.x de Commotion. Todas las 3 restantes son problemas hacia arriba. Tenemos una solución y estamos enviando un parche para una de ellas, una ya está arreglada hacia arriba pero la nueva versión del software todavía no se integra a Commotion, y aún estamos evaluando la relevancia y el impacto del último problema.

## Arquitectura de Seguridad

La actual arquitectura relacionada con la seguridad para Commotion está altamente basada en elevar las redes mesh inalámbricas fuera-de-la-caja al nivel de seguridad esperada en dispositivos Wi-Fi comerciales comúnmente disponibles<sup><a href="#footnote1">1</a></sup>, sin afectar significativamente el rendimiento o utilidad. Con ese fin, Commotion cifra todos sus enlaces inalámbricos individuales entre los dispositivos que utilizan IBSS-RSN-esencialmente compatible con los estándares WPA2-PSK con cifrado AES, similar al cifrado utilizado en los puntos de acceso inalámbricos adecuadamente garantizados. Gracias al apoyo de cifrado de hardware dentro de los propios dispositivos inalámbricos, los enlaces cifrados operan con un impacto insignificante en el rendimiento. 

La principal tecnología de seguridad underpinning en Commotion, no obstante, es el cifrado y la biblioteca de comunicación de redes del <a href="http://servalproject.org/" target="_blank">Serval Project</a>. El Open Technology Institute patrocinó el desarrollo de componentes claves del software Serval, y Commotion 1.x actualmente provee cifrado Serval y redes API como una forma para los desarrolladores para crear aplicaciones seguras y tolerantes al retraso sobre la red Commotion. 

El software Serval también incorpora la <a href="http://nacl.cr.yp.to/" target="_blank">biblioteca de cifrado NaCl</a> para el uso de cifrado ECC fuerte, sin patrocinio NIST. Por defecto, Commotion usa Serval con el fin de proveer firmas de cifrado en anuncios de aplicaciones locales, y permite a los administradores de la red crear una clave compartida que es usada para firmar el tráfico del router en la malla para proveer un método adicional de restringir el acceso a una serie de usuarios confiables.

## Retos de Seguridad

Podría decirse que una de las ventajas de seguridad de tecnologías como Commotion es simplemente el hecho de que crea una infraestructura alternativa. La infraestructura centralizada del Internet hace que sea relativamente fácil y económico llevar a cabo la vigilancia y la explotación a gran escala, como lo demuestra la NSA y GCHQ. Una infraestructura alternativa local, basada en Commotion, por otro lado, mantiene el tráfico local dentro de la red mesh y lejos de centros de conmutación de Internet comprometidos, mejorando potencialmente la privacidad del usuario y la seguridad. Si bien esto habla de los beneficios de seguridad auxiliares al instalar una red alternativa en el primer lugar, no se ocupa de los problemas de seguridad significativos asociados con la propia red de mesh con el Wi-Fi basado en la red mesh misma.

Uno de los retos que enfrentamos es mantener un equilibrio entre la seguridad y proporcionar las características que los usuarios esperan. Ya que estamos tratando de crear una tecnología flexible que se adapte a las necesidades de las comunidades en las que se despliega, esas comunidades en consecuencia influyen en la ruta del proyecto. Ha habido una gran demanda de acceso rápido a Internet en muchos de los lugares en los que Commotion se ha desplegado, pero esto a veces va en contra de la introducción de características de seguridad que tienen concesiones en la velocidad o facilidad de uso.

El rendimiento de las compensaciones son aún más pronunciadas en los routers inalámbricos, que normalmente carecen de los recursos necesarios para llevar a cabo de manera eficiente un cifrado fuerte. La mayoría tienen procesadores de baja potencia con sólo pequeñas cantidades de memoria y almacenamiento, y no poseen los teclados, cursor, pantallas táctiles y otros dispositivos de entrada que se utilizan típicamente por computadoras y dispositivos móviles para recopilar la entropía necesaria para el cifrado.

Por lo tanto, tenemos que tener cuidado con que las herramientas de seguridad que introducimos en la plataforma del router, ya que deben ser optimizadas para velocidad, tamaño y uso de recursos. Es probable que sea el caso en el futuro que algunas herramientas de seguridad sólo estén disponibles en las plataformas Commotion sin-router, ya que algunos dispositivos pueden simplemente carecer de la capacidad de ejecutar adecuadamente las herramientas.


También está el hecho de que el Wi-Fi, aunque posee muchas ventajas de costo, disponibilidad y apertura que para nuestro proyecto superan bastante sus desventajas, es en muchos aspectos inadecuado para algunas de las tareas a las que nosotros y otros proyectos lo aplicamos. Así también estamos investigando maneras de hacer a Commotion más oportuno, para que puede tolerar retrasos más largos de conectividad debido a la interrupción, y para que las plataformas de comunicación que se ejecutan encima de Commotion puedan utilizar otros medios de comunicación cuando estén disponibles.

## ¿Qué sigue?

Las características de seguridad actuales en Commotion proporcionan cierto grado de protección contra el espionaje y los ataques desde fuera de la red. Pero no sólo es posible hacer mucho más fuertes esas protecciones, sino que por el momento no hay mucha protección contra la vigilancia desde el interior de la red. 


En consecuencia, la siguiente etapa de desarrollo de la seguridad para Commotion será la introducción de un proxy genérico para red superpuesta cifrada de Serval, que permitirá cifrado oportuno de extremo a extremo del tráfico dentro de la red. Esto ayudará a prevenir incluso a los operadores de red que lean los contenidos de tráfico dentro de la red. Esta característica se encuentra actualmente en desarrollo y debe estar lista para el verano de 2014. 

Debido a los problemas antes mencionados de rendimiento cifrado, únicamente haciendo pruebas se revelará si es práctico habilitar a este proxy por defecto para todo el tráfico, o si sólo se habilitará para su uso en ciertos casos. Además, vamos a seguir ampliando nuestra API con el fin de facilitar el desarrollo de aplicaciones seguras sobre Commotion, y vamos a lanzar una nueva aplicación de mensajería dentro de los próximos meses para que sirva como una demostración de lo que es posible.

Además de proteger el contenido de la red tanto de la vigilancia interna y externa, también hay que mirar hacia la protección de la interrupción. De acuerdo con ello, el año pasado nos comprometimos con investigadores de seguridad en un proceso de amenazas al modelado detallado. El resultado de esto fue un detallado plan de arquitectura de seguridad que expuso los componentes necesarios para crear una red mesh inalámbrica que está tan fortalecida como la pudimos hacer contra la vigilancia y la interrupción, sin dejar de ser lo suficientemente flexible para adaptarse a las necesidades de muchas comunidades de Commotion. Se trata de un proyecto de investigación y desarrollo mucho más largo que será un foco importante en el próximo par de años. Daremos a conocer los nuevos componentes de esta plataforma de seguridad a medida que estén disponibles.

Es un momento emocionante para el proyecto ahora que Commotion 1.x ha sido lanzado, a medida que nuestro enfoque se mueve de simplemente integrar las tecnologías existentes a investigar y diseñar verdaderamente software nuevo y de vanguardia. La serie de la versión 1.x no es el fin del desarrollo, sino más bien el primer paso para poder tomar Commotion en direcciones nuevas e interesantes. Revisa de nuevo aquí o en nuestros proyectos Github para mantenerte al tanto de los nuevos desarrollos y nuevas y emocionantes características a medida que seguimos impulsando el plan de desarrollo.

<hr>
<span id="footnote1">1 – Aunque los investigadores de seguridad han demostrado <a href="http://www.infoworld.com/d/security/backdoor-found-in-d-link-router-firmware-code-228725" target="_blank">múltiples</a> <a href="http://arstechnica.com/security/2014/01/backdoor-in-wireless-dsl-routers-lets-attacker-reset-router-get-admin/" target="_blank">puertas traseras</a> y <a href="http://www.pcworld.com/article/2057260/vulnerabilities-in-some-netgear-router-and-nas-products-open-door-to-remote-attacks.html" target="_blank">severa</a> <a href="https://threatpost.com/serious-vulnerabilities-found-popular-home-wireless-routers-040813" target="_blank">seguridad</a> <a href="http://securityevaluators.com/knowledge/case_studies/routers/soho_router_hacks.php" target="_blank">vulnerabilidades</a> en los routers de grado de los consumidores, esperamos hacer una distribución del router firmware que cumpla con la expectativa de seguridad de los usuarios.</span>
