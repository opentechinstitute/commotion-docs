﻿---
layout: blog
title: Haz tus propias antenas para redes comunitarias
categories: [community wireless,antennas]
created: 2014-11-05
changed: 2014-11-05
teaser_image: posts/DIY-antennas-hardware.png
post_author: Andy Gunn
lang: es
---

Para las personas alrededor del mundo, planear o construir redes inalámbricas, el costo y la accesibilidad del equipo pueden a menudo ser un reto. Hay usualmente algunos modelos para routers inalámbricos, pero generalmente son para uso en casa u oficina, y no están hechos para colocarse en exteriores. Además, la mayoría de las antenas de router están diseñadas para conectarse con dispositivos cerca, a 100 metros de distancia o menos.
<!--more-->

![MIMO de flujo único](/files/posts/DIY-antennas-hardware.png){: style="max-width:300px; float:right;"}

Con esta limitación en mente, muchas redes inalámbricas comunitarias deciden construir antenas Wi-Fi personalizadas para ampliar el alcance y las capacidades de los routers inalámbricos en sus redes. Generalmente, esto significa que los routers inalámbricos utilizados en las redes de la comunidad deben tener antenas externas. Si tienes un router en casa que sólo está con la forma de un rectángulo o un cuadro, es probable que las antenas estén dentro de la unidad. Muchos routers modernos tienen antenas externas extendiéndose de la parte posterior o lateral de la caja. Éstas a menudo pueden ser removidas y reemplazadas con antenas personalizadas.

Siempre me impresiono cuando veo antenas hechas en casa, y aún más impresionado cuando veo antenas utilizadas de una forma que no pensaba antes. Cuando encontré documentación en la página web AlterMundi acerca de sus [antenas personalizadas](http://docs.altermundi.net/RedesMiniMaxi/MontajeDeUnNodo) y cómo se usan en redes comunitarias en Argentina, quedé intrigado.

AlterMundi es una organización comunitaria en Argentina (con socios en todo el mundo) que construye redes inalámbricas comunitarias. Primero conocí a algunos de sus organizadores en la [Cumbre Internacional 2013 para Redes Inalámbricas Comunitarias](http://2013.wirelesssummit.org/) (IS4CWN) en Berlín. Vi su presentación sobre cómo construyen sus antenas personalizadas, pero hasta que leí la documentación de su sitio web fue cuando entendí cómo las estaban utilizando.

El uso de AlterMundi es interesante porque usan las dos [MIMO](https://en.wikipedia.org/wiki/MIMO) (input-múltiple output-múltiple) en routers de bajo costo y realizan funciones separadas. Un manual básico rápido de Wi-Fi MIMO: la mayoría de los routers de consumo que tienen alta resistencia (N300, N450, N900, etc.) usan múltiples antenas apra conectar los dispositivos con múltiples transmisiones de datos. Es difícil visualizar, pero imagina que en lugar de intentar hacer un conducto más grande, pudieras usar múltiples conductos al mismo tiempo. Podrías mover más agua a través de esos conductos, ¿verdad? Echa un vistazo al ejemplo abajo. 


**Wi-Fi sin MIMO**, resistencia estándar:

![MIMO de flujo único](/files/posts/DIY-antennas-MIMO-single-stream.png){: style="max-width:600px;"}

**Wifi MIMO de flujo único**, alrededor del doble de resistencia sobre la estándar:

![MIMO de flujo doble](/files/posts/DIY-antennas-MIMO-dual-stream.png){: style="max-width:600px;"}

Mientas que puedes tener más conductos, éstas están aún conectadas a una sola radio en el router (y en tu laptop o teléfono). El radio es el chip dentro del router que envía y recibe las señales.

Suponiendo, abajo hay un ejemplo de dispositivo Wi-Fi con una sola radio. Puede ser posible que haya múltiples cosas a la vez, como proveer un Punto de Acceso para usuarios para conectarse, y enmallar un link para conectarse a otros nodos. No obstante, está restringido para usar un solo canal, por ejemplo canal 11 Wi-Fi en la banda de 2.4GHz. Todas las comunicaciones en este nodo usarían este único canal, y competirían por tiempo de conexión.

![Nodo con MIMO](/files/posts/DIY-antennas-single-radio-MIMO.png){: style="max-width:440px;"}

Si tuvieras un router con múltiples radios dentro, podrías dividir estas funciones, o hacer múltiples conexiones en diferentes canales. Abajo hay un ejemplo de este tipo de router. Puedes tener el Punto de Acceso Wi-Fi para usuarios en radio1, y los enlaces mesh en radio2. Esto permite muchas más conexiones y baja la cantidad de competencia por tiempo en el canal inalámbrico, ya que los dos radios pueden usar diferentes canales (Canal 1 y Canal 11 en la banda de 2.4GHz). Esto tiene el efecto de incrementar el desempeño y la resistencia, pero hace que los routers sean más caros y complicados.

![Dispositivo de radio dual](/files/posts/DIY-antennas-dual-radio-MIMO.png){: style="max-width:500px;"}

Ambos ejemplos arriba usan tecnología MIMO. Cada radio tiene dos antenas conectadas a él, lo que puede duplicar la resistencia a los dispositivos de los usuarios. Si no nos preocupara el rendimiento podríamos hacer cosas más interesates. AlterMundi utiliza tres diferentes configuraciones de antenas para sus nodos mesh:

1. **Dos antenas omnidireccionales.** Estas proveen señal alrededor del nodo, idéntico a cómo trabaja el router de una casa o de una oficina. Si el nodo se monta afuera, puede conectarse a través de largas distancias, pero usualmente sólo hasta 100 metros. 

![Nodo con MIMO](/files/posts/DIY-antennas-node-with-MIMO.png){: style="max-width:300px; margin-left:3em;"}

2. **Dos antenas parabólicas de larga distancia.** Estas únicamente proveen enlaces de larga distancia en la red, no sirven para brindar cobertura alrededor del router mesh. Estas pueden conectarse con otros nodos a varios kilómetros de distancia. 

![Nodo con MIMO](/files/posts/DIY-antennas-node-dual-directional.png){: style="max-width:600px; margin-left:3em;"}

3. **Una antena omnidireccional, una antena parabólica de larga distancia**. La antena omnidireccional crea una área alrededor del router para que los usuarios y otros nodos mesh se puedan conectar, pero únicamente a una distancia corta. La antena parabólica direccional crea una conexión de larga distancia, pero puede necesitar antenas parabólicas similares en el otro extremo para crear una conexión sólida. Esto puede ayudar a cerrar la brecha entre los nodos que están lejos y una serie de nodos que están cerca. 

![Nodo con MIMO](/files/posts/DIY-antennas-node-omni-and-directional.png){: style="max-width:500px; margin-left:3em;"}

Para más detalles en cómo estos nodos están construidos utilizando routers inalámbricos fuera de la plataforma y parabólicas hechas en casa, ver la [documentación AlterMundi](http://docs.altermundi.net/RedesMiniMaxi/MontajeDeUnNodo) (en español).

Estos diseños son interesantes ya que hacen más fácil y mucho menos caro, el cierre de la brecha entre los enlaces a larga distancia y las redes mesh locales. Normalmente, una parabólica separada y un router de wifi son necesarios para proveer de conexión a larga distancia en cada extremo del enlace. Esto conectará a otro router con antenas omnidirectional, lo que brindará conexión a los usuarios, otros nodos mesh o a ambos. 

Por ejemplo, considera el siguiente escenario. Dos conjuntos de casas están separadas por varios kilómetros. Normalmente, las señales de wifi ubicadas en los routers de los techos no alcanzarían tanta distancia. Con unos cuantos router modificados para utilizar antenas parabólicas direccionales, estos dos conjuntos de redes pueden juntarse en una sola. 

![Ejemplo de uso de una antena direccional](/files/posts/DIY-antennas-directional-use.png){: style="max-width:600px;"}

Este enfoque no es tan inconveniente. Como mencioné anteriormente, estos diseños separan las dos cadenas MIMO, y las usan para diferentes cosas. Esto reduce la resistencia disponible para el dispositivo Wi-Fi a la mitad. En lugar de un máximo de 130Mbps, la máxima resistencia sería de  65Mbps (aproximadamente). Esto es porque el router no puede utilizar múltiples conexiones a un sólo dispositivo, ya que está limitado a un sólo stream por cada antena, que se están conectando a dispositivos muy separas y distantes.  


A pesar de este inconveniente, yo creo que las ventajas lo hacen muy necesario en muchos de los casos. Y como lo ha demostrado AlterMundi, sí funciona bastante bien. Si sabes de cualquier otra red que esté tratando de hacer cosas como estas, o construyendo antenas por sí mismos, nos gustaría conocer al respecto. Contáctanos en [Commotion Discuss o la lista de desarrolladores](https://commotionwireless.net/docs/get-involved/) y ¡cuéntanos más sobre tus experimentos!

---

**Nota técnica:**

Yo simplifiqué muchos de los puntos técnicos arriba. Específicamente, muchos de los routers de ahora son de banda doble, lo que significa que usan ambos, los canales de 2.4GHz y los canales de 5GHz simultáneamente. Esto provee dos redes en un sólo router, aunque te conectan a los mismos recursos, típicamente. La mayoría de los dispositivos de los usuarios, como laptops o teléfonos, únicamente funcionan con la banda de 2.4GHz, pero muchos dispositivos modernos ya funcionan con ambas.

Técnicamente, cualquiera de estas bandas necesita de un radio separado, uno operando en 2.4GHz, y otro operando en 5GHz. Cuando estoy discutiendo sobre múltiples radios en el artículo de arriba, me estoy refiriendo a una sola banda al mismo tiempo. Los dispositivos de "doble banda" a los que me refieron, son dos radios en la misma banda, que es por lo que menciono los dos canales separados en la banda de 2.4GHz.

Los usos de los routers de AlterMundi son TP-Link WDR3500, que son de banda dual, y por tanto de radio dual. Aún así sólo apoyan un solo canal en cada banda. Para que un router pueda funcionar con múltiples canales en una sola banda, necesitaría ser multi-radio y multi-banda. Esto podría volverse caro rápidamente, porque si quieres utilizar dos canales en dos bandas, eso tomaría **cuatro** radios. ¿Tres canales en dos bandas? **Seis** radios.

También, para mantener los costos bajos, los routers del consumidor como el anteriormente mencionado TP-Link ponen las señales para cada banda en una sola antena. Ya que están en frecuencias separadas, la señal de 2.4GHz y la 5GHz no interfieren. Cada uno de los flujos MIMO tiene su propia antena, así que el compartir esta antena sucede dos veces. Así que cuando AlterMundi hace sus antennas personalizadas, estas tienen soporte para ambos 2.4GHz y 5GHz para las antenas de larga distancia. ¡Que es lo que lo hace tan cool!

