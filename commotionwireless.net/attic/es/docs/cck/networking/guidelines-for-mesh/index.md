---
layout: cck
title: Guías para Redes Mesh
site_section: docs
sub_section: [cck,cck-networking]
pdf: cck/networking/Guidelines_for_Mesh_Networks.pdf
pdf-all:
categories: 
created: 2015-03-31
changed: 2015-04-01
post_author: Andy Gunn
lang: es
---


![Intro graphic](/files/Guidelines-intro-graphic.png)

### Lecciones aprendidas de redes socias

Hay muchas maneras de diseñar una red inalámbrica comunitaria – ¡pero muchas opciones puede llevar a la confusión! Afortunadamente, muchas redes comunitarias y Proveedores de Servicios de Internet Inalámbricos (Wireless Internet Service Providers, WISPs) han tenido muchos años de experiencia para aprender de ellos. El documento de abajo describe cinco guías para mantener en mente cuando diseñes tu red. En algunos casos, como redes pequeñas, puedes ser capaz de saltar algunas de estas guías. De otro modo, intenta y diseña con ellas en mente.

Si estás revisando estas guías en grupo, o en un taller, puedes descargar un [folleto de una página](/files/cck/networking/Guidelines_Handout.pdf) que ofrece una versión mucho más corta del documento abajo.

## Cada router debe hacer una sola cosa

### Problema

Commotion y muchos firmwares***** mesh inalámbricos puede “dividir” las funciones wireless del router para que creen un link mesh un un Punto de Acceso al mismo tiempo. Esto puede simplificar la red, ya que no necesitas muchas piezas de equipo, pero causa problemas de rendimiento.

![Mesh y Punto de Acceso combinados](/files/Mesh-AP-node-combined-functions.png)


Este diseño puede causar problemas por dos razones:

**Problema 1:** Realizar varias tareas a la vez es difícil. La división de tiempo entre las señales del Punto de Acceso y las señales mesh es difícil porque el router sólo puede transmitir o recibir una señal a la vez -- tiene que alternar estas funciones. Esto reduce el tiempo disponible para hacer alguna de las funciones a la mitad, lo que reduce el rendimiento.
![Mesh y Punto de Acceso combinados – problema de división del tiempo](/files/Mesh-AP-node-time-split-problem.png)


**Problema 2:** Cuando algunas personas están gritando, y otros están susurrando, se hace difícil escuchar los murmuradores. Las señales de laptops y teléfonos inteligentes son mucho más débiles que las señales del router. Los routers exteriores utilizados para enmallar por lo general tienen una energía inalámbrica mucho más alta que los teléfonos inteligentes y laptops. Esto permite que las señales que viajen más, y hace que sea más fácil para los routers vecinos escucharlas. Las señales de los dispositivos de las personas no son tan fuertes – así que los routers tienen que escuchar con mayor cuidad, lo que toma más tiempo. Esto hace que el problema de división del tiempo sea peor.
![Mesh y Punto de Acceso combinados – problema de cercanía-lejanía](/files/Mesh-AP-node-near-far-problem.png)


### Solución
Hay varias soluciones a este problema, la mayoría de las cuales implican un equipo adicional. En general, sólo tienes que tener los routers del techo o al aire libre que realizan funciones mesh solamente, y luego conectar los puntos de acceso adicionales para conectar a la gente.
![Mesh y Punto de Acceso como dispositivos separados](/files/Mesh-AP-node-separate-devices.png)


Hay varias maneras de dividir la función entre dispositivos:

**Solución 1:** Usa routers separados para Puntos de Acceso. Estos pueden ser de muy bajo costo, como el TP-Link WR841ND, y no necesitan ejecutar Commotion – solo necesitan proveer un “puente” para la red mesh. Estos deberían ser conectados con cables Ethernet a una red mesh. Pueden también ser colocados afuera para proveer acceso en áreas públicas.
![Mesh y Punto de Acceso separados - multi-dispositivos](/files/Mesh-AP-node-multi-device-solution.png)


**Solución 2:** Usa routers de banda dual. Hay dos bandas Wi-Fi - 2.4GHz y 5GHz. Puedes separar el mesh y las funciones de Punto de Acceso para cada banda, permitiendo que el router realice ambas funciones simultáneamente. La mayoría de los routers son de una sola banda, así que esto requiere algo de creatividad al montar routers internos de banda dual en cajas a prueba de agua en el exterior. Un ejemplo de un router de banda dual que soporta funciones mesh es el TP-Link WDR3600.
![Mesh y Punto de Acceso separados – solución de multi-banda](/files/Mesh-AP-node-dual-band-solution.png)


** Solución 3:** Usa routers multi-radio. Algunos routers de alta tecnología, como el MikroTik RB433 tienen múltiples tarjetas de radio. Los enlaces mesh y Puntos de Acceso pueden estar en canales separados y trabajar simultáneamente. Estos routers son más caros y pueden ser más complicados para configurar.
![Mesh y Punto de Acceso separados - solución de multi-radio](/files/Mesh-AP-node-dual-radio-solution.png)


### Compensación
El rendimiento se puede aumentar mediante el uso más routers o routers más caros. También puede tomar más tiempo para configurar la red, ya que existen dispositivos adicionales. Aún así, las ganancias de rendimiento son muy significativas.


## Minimiza los saltos en la red 

### Problema

En una red mesh, cada eslabón, o "salto" entre los routers reducirá el ancho de banda a la mitad. Esto sucede porque los enlaces inalámbricos sólo pueden hacer una cosa a la vez - transmitir o recibir. En una "cadena" larga de enlaces mesh, esto se traduce en una conexión muy lenta de extremo a extremo.
![Saltos Mesh – demasiados saltos](/files/Mesh-hops-many-hops.png)


Esto ocurre por dos razones:

**Problema 1:** Cada salto en la red quita la mitad del ancho de banda. El rendimiento disminuirá rápidamente debido a esto. Esto será más evidente en los "bordes" de la red  - las áreas a varios saltos de distancia de los recursos a los que las personas están intentando acceder, como puertas de entrada a Internet o un servidor local.
![Saltos Mesh - problema de ancho de banda](/files/Mesh-hops-bandwidth-over-hops-problem.png)


**Problema 2:** Muchos saltos aumentan la latencia.****** Many hops increases the latency.******* La latencia******* es la palabra usada en redes para los retrasos, y cuando este número aumenta, ciertas aplicaciones - tales como transmisión de audio o vídeo y voz sobre IP - comenzarán a tener problemas graves, como deserción y tartamudeo. Esto puede hacer a estas aplicaciones totalmente inutilizables.
![Saltos Mesh – problema de latencia******](/files/Mesh-hops-latency-over-hops-problem.png)

**ms siginifica milisegundos – o una milésima de segundo. No es mucho, ¡pero suma!*


### Solución

Hay maneras de mantener el número de saltos bajos en una red. La planificación extra y el diseño antes de que la red este construida puede ayudar a minimizar el problema. Se pueden agregar enlaces adicionales para crear un "puente" entre las partes distantes de la red después.
![Saltos Mesh – manejando soluciones de saltos](/files/Mesh-hops-fewer-hops.png)


Hay diferentes maneras de disminuir el número de saltos en una red:

**Solución 1:** Planea desde el principio para los enlaces troncales de alto rendimiento. Los nodos Mesh en los tejados y torres principales deben tener una excelente comunicación entre sí para permitir "red central" sólida. Esto mantiene el rendimiento de la red más alto a medida que crece. Esto también requiere que los recursos tales como las conexiones a Internet, o la colocación de servidores que alojan aplicaciones, se planifique con antelación y se coloque cerca del "centro" de la red.
![Saltos Mesh – pre-planificando con saltos en mente](/files/Mesh-hops-pre-planning-solution.png)


**Solución 2:** Crea grupos de redes pequeñas. Los grupos de routers mesh pueden servir a edificios cercanos, y tener sólo unos saltos entre todos los vecinos. Estos grupos se pueden unir con punto-a-punto, o enlaces punto-a-multipunto regresando a un punto central. Esto puede requerir un edificio muy alto o torre que actue como el punto central.
![Saltos Mesh -solución creando grupos](/files/Mesh-hops-cluster-solution.png)


**Solución 3:** Crea accesos directos en la red. Si hay algunas partes de la malla que han crecido lejos de los recursos que la gente quiere usar, uno o más enlaces punto-a-punto podrían utilizarse para acortar la distancia. Esto requiere de enlaces dedicados y alguna configuración adicional, pero puede proporcionar un "atajo" rápida en la red y mejorar el rendimiento.
![Saltos Mesh – creando soluciones de accesos directos](/files/Mesh-hops-PtP-bridge-solution.png)


### Compensación

Usar más equipo para crear un puente entre las partes de la malla y acortar el número de saltos añade gastos y complejidad. Una de las ventajas de una malla es su naturaleza dinámica - que la extensa planificación y enlaces de punto-a-punto pueden limitar.


## Usa los routers que manejen múltiples transmisiones (MIMO)

### Problema

Los routers Wi-Fi de bajo coste a menudo sólo tienen una sola antena, lo que limita el rendimiento a una sola corriente de datos a la vez. Si utilizas estos routers Wi-Fi para la "columna vertebral" de la red en el techo, en una red de la comunidad, habrá un límite bajo para el nivel de rendimiento.
![Hardware mesh – una sola transmisión](/files/Mesh-hardware-SISO-network.png)


Usar routers Wi-Fi con una sola antena tiene dos efectos:

**Problema 1:** El máximo ancho de banda disponible será de aproximadamente 65 Mbps (Megabits por segundo) para dispositivos Wi-Fi modernos que soportan mesh. Mientras esto pueda parecer muy rápido, ten en cuenta que sobre varios saltos de red, esta banda ancha disminuirá muy rápidamente.
![Hardware mesh – problema de límite de banda ancha](/files/Mesh-hardware-bandwidth-limit-problem.png)


**Problema 2:** Los equipos Wi-Fi puede recibir interferencias de reflejos de la señal que llegan a la antena, al mismo tiempo que la señal principal. Esto puede causar la pérdida de datos y reducir el rendimiento del enlace entre los routers mesh, ya que los datos tendrán que ser transmitido de nuevo (¡en lugar de nuevos datos!).
![Hardware mesh – problema multipath*******](/files/Mesh-hardware-multipath-problem.png)


### Solución

Siempre habrá alguna interferencia y disminuciones en el rendimiento a medida que una red de la comunidad crece, pero utilizar el hardware de mayor rendimiento posible puede reducir el impacto. Si bien puede ser un poco más caro, los routers Wi-Fi MIMO (de entrada múltiple, salida múltiple - que sólo significa múltiples flujos de datos) son más resistentes a las interferencias, y tienen un mayor rendimiento.
![Hardware mesh – dispositivos de transmisiones múltiples](/files/Mesh-hardware-MIMO-network.png)


**Solución 1:** Siempre usa routers MIMO. Hay muchos modelos de routers Wi-Fi existentes y es difícil saber cuales son MIMO. Los valores de resistencia en la caja o en el sitio web pueden no ser claros. Muchos fabricantes usan la terminología N300, N450, N750 y así sucesivamente para designar la velocidad del dispositivo. N300 significa 300 Megabits de resistencia, pero puede ser engañoso. Si es un dispositivo de ancho de banda-dual (2.4GHz y 5GHz), los fabricantes agregan resistencia de cada banda junta para el número “N” - N750 sería 300 Megabits en la banda de 2.4GHz, y 450 Megabits en la banda de 5GHz. La manera más fácil de saber si un router soporta MIMO es ver si es 802.11n compatible y tiene dos o más antenas. Para una lista completa de equipo MIMO soportado por Commotion, ve la barra lateral.
![Hardware mesh – usa equipo MIMO](/files/Mesh-hardware-MIMO-equipment.png)

Algunos routers que soportan niveles de datos MIMO*********** Some routers that support MIMO data rates:
* Modelos de exterior Ubiquiti NanoStation M, NanoBridge M, Rocket M, UniFi AP, y UniFi AP 
* Modelos TP-Link WDR3600 y WDR4300 
* Modelos MikroTik RB411 y RB433 con tarjetas de radio R52nM o R52Hn.


**Solución 2:** Usa antenas de polaridad dual. Algunos equipos MIMO designados para usos exteriores pueden poner las transmisiones de datos en diferentes orientaciones. Algunas de las transmisiones de datos puede salir en una dirección “arriba y abajo”, mientras que otros pueden salir en una dirección “de un lado a otro”. Esto ayuda a los routers a que eviten la interferencia que viene de muchas señales moviéndose en la misma dirección – todas las de arriba y abajo por ejemplo. Solo algunas antenas de router pueden hacer esto – por ejemplo las antenas (de todo alrededor) de los routers Ubiquiti Rocket M omnidirectional y  NanoStation M directional. **********Use dual-polarity antennas. Some MIMO equipment designed for outdoor use can put the streams of data in different orientations. Some of the data streams would come out in an “up and down” direction, while the other would come out in a “side to side” direction. This helps the routers avoid interference that comes from many signals moving in the same way - all up and down, for instance. Only some router antennas can do this - for instance the Ubiquiti Rocket M omnidirectional (all around) antennas, and the NanoStation M directional routers.************
![Hardware mesh – equipo de polaridad dual](/files/Mesh-hardware-dual-polarity-equipment.png)


### Compensación
Usar equipo MIMO puede generar un costo adicional – especialmente cuando usas antenas de polaridad dual, que pueden ser muy caras. En la mayoría de los casos, el rendimiento adicional cuando usas equipo MIMO vale la pena, y los routers se están volviendo menos caros con el paso del tiempo.


## Proporcionar múltiples conexiones para puertas de entrada y servidores

### Problema

Las redes comunitarias tienen recursos que las personas quieren usar, tales como conexiones a Internet y servidores de aplicaciones locales. Estos deben conectarse a un router antes de que puedan ser utilizados en toda la red. Si el recurso está conectado únicamente a un solo router, se crea un cuello de botella y las conexiones se hacen lentas para todo el mundo.
![Mesh hubs – cuellos de botella de la red](/files/Mesh-hubs-single-router-bottleneck.png)

Cualquier router único sólo puede manejar ciertas conexiones. Esto es cierto tanto con conexiones mesh y conexiones de punto de acceso, como se discute en una guía anterior. El principio es cierto aquí también - cuando hay muchas conexiones y peticiones a un único servidor o conexión a Internet, el router puede sobrecargarse.


### Solución
Considera agregar routers adicionales. Si un solo router está sobrecargado o no tiene suficiente ancho de banda para manejar todas las conexiones a un servidor o puerta de enlace a Internet, entonces puedes agregar más routers al sitio. Si utilizas routers con antenas direccionales, entonces secciones de la red se enrutarán a través de un router y otro, y compartirán el número de conexiones. Esto puede tener efectos adicionales para ayudar a disminuir el número de saltos en la red, y segmentar la red en grupos más pequeños, como se explica en las guías
 anteriores.
![Mesh hubs – sitios con muchos routers](/files/Mesh-hubs-multi-router-hubs.png)

Usa routers de múltiples direcciones en sitios centrales. Muchos tipos de redes usan este método para proveer servicio a áreas mayores – compañías de teléfonos móviles ponen múltiples antenas en una torre, que están conectadas a radios especiales que conectan tu teléfono móvil. Esta solución funciona mejor cuando tienes un edificio alto o una torre que está localizada centralmente en tu comunidad. Los routers con antenas direccionales pueden llegar más lejos, y se enfoca en menos conexiones de router-a-router, acelerando el acceso a los recursos de la red.
![Mesh hubs – torres con múltiples routers](/files/Mesh-hubs-multi-router-towers.png)


### Compensación
Mayor rendimiento con los routers adicionales viene con gastos adicional de tener más equipos. Además, puede ser más difícil de configurar, ya que puede ser necesario tener un router o firewall adicional, en el caso de una puerta de entrada a Internet, o un switch Ethernet y la configuración adicional para enmallar través de la conexión Ethernet entre routers.



## Segmenta la red en secciones más pequeñas 

### Problema

Cuando hay muchos dispositivos inalámbricos en el mismo canal, pueden empezar a interferir unos con otros. Las redes mesh tienen ese problema, porque las redes mesh inalámbricas se basan en todos los routers que comparten el mismo canal. Si hay algunos routers con muchas, muchas conexiones inalámbricas de sitios cercanos, entonces se pueden sobrecargar.
![Segmentos Mesh – demasiados routers en un solo canal](/files/Mesh-segments-too-many-single-channel.png)


Los routers se pueden sobrecargar con demasiadas señales. Este problema está relacionado con lo que sucede cuando se tiene un solo router proporcionando los enlaces mesh y un Punto de Acceso – está tratando de hacer demasiadas cosas. Cuando hay muchas, muchas conexiones, el router se puede sobrecargar y frenar al tratar de hacer tantas conexiones. Esto empeora a medida que las redes se vuelven más y más densas, y muchos routers tratan de hablar al mismo tiempo. Si dos routers que no pueden oír entre sí tratan de hablar con uno tercero que puede oírlos a ambos, tendrá que resolver dos señales interferentes.
![Segmentos Mesh – problema de sobrecarga de router](/files/Mesh-segments-hidden-node-problem.png)



### Solución
Crear  grupos de redes de mesh en canales separados puede reducir el número de conexiones en una malla. Crea redes mesh más pequeñas que tienen un menor número de routers, por lo que el número de señales disminuye, y reduce la cantidad de interferencia inalámbrica.
![Segmentos Mesh – dividir en múltiples canales](/files/Mesh-segments-split-multiple-channels.png)


**Solución 1:** Crea redes mesh más pequeñas en canales separados. Esto requiere varios sitios en el borde o bordes de las dos redes para tener dos routers - cada uno configurado para el canal inalámbrico diferente. Estos routers están entonces conectados por un puente junto con un cable Ethernet para un enlace de banda ancha alta entre las dos sub-redes.
![Segmentos Mesh – Solución de puente Ethernet](/files/Mesh-segments-separate-channel-Ethernet-bridge-solution.png)


**Solución 2:** Crea centrales de routers, usa múltiples canales. Cuando creas centrales para más ancho de banda para puertas de entrada a Internet o servidores de aplicaciones, puedes dividir la red en segmentos en canales separados. Esto puede resolver los problemas de interferencia en el edificio o la torre que tiene múltiples routers – ya que la interferencia inalámbrica incrementa cuando los routers están muy cerca.
![Segmentos Mesh – solución de centrales](/files/Mesh-segments-separate-channel-hub-solution.png)


### Compensación

Con ciertos canales inalámbricos en diferentes partes de la comunidad, la red se vuelve más complicada y menos dinámica. Esto requiere más planificación, y puede hacer las cosas más difíciles de configurar o arreglar a medida que la red crece.


## Definiciones

**Punto de acceso:** dispositivo que permite que dispositivos inalámbricos se conecten a una red conectada usando Wi-Fi o estándares relacionados.

**Red Ad-hoc / Red de Dispositivo:** En algunos dispositivos (por ejemplo laptops) algunas conexiones de red disponibles se muestras como redes de computadora a computadora. Estas son redes que pueden ser redes mesh ad-hoc o enlaces de punto a punto entre computadoras para compartir archivos a pequeña escala. El término “ad-hoc” puede referirse también a conexiones de red sin planificación, descentralizadas..

**Antena:** Convierte señales eléctricas en ondas de radio. Está normalmente conectado a un transmisor de radio o un receptor de radio, y es la interfaz entre las señales eléctricas en la radio y el movimiento de las señales a través del aire.

**Dispositivo cliente:** El dispositivo con una radio wifi que usas para conectarte a un punto de acceso inalámbrico, por ejemplo, una computadora, un teléfono celular o un dispositivo de tablet.

**Ethernet:** Un tipo de protocolo de red – define los tipos de cables y conexiones que se usan para conectar computadoras, switches, y routers juntos. A menudo los cables Ethernet son categoría 5 o 6, hechos de pares de cables enredados similares a los cables de teléfono.

**Nodo:** Un dispositivo individual en una red mesh.

**Router:** Un dispositivo que determina como los mensajes se mueven a través de una red de computadora.


## Información Relacionada

Este documento esta diseñado para acompañar [Tipos de Redes Inalámbricas](/docs/cck/networking/types-of-wireless-networks) y [Retos Inalámbricos](/docs/cck/networking/wireless-challenges). Usalo como un conjunto de reglas básicas para configurar tu red, o solucionar problemas. Recuerda que no todas las guías aplicarán a tu red – pero mientras crece y se expande, ¡puede ser necesario que cambies las cosas!
