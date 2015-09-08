﻿---
layout: blog
title: Prueba de campo de Commotion – red mesh Pop-up, en el centro de Washington, DC
categories: []
created: 2013-09-29
changed: 2013-11-04
post_author: Georgia Bullen
lang: es
---
  <iframe allowfullscreen="" frameborder="0" height="315" src="//www.youtube.com/embed/gqOZBVtarMc" width="420"></iframe>
<h3><b>Introducción:</b></h3>

Durante la hora de almuerzo en el centro de Washington, DC, el Open Technology Institute estableció una prueba de concepto de red para la distribución de servicios de Internet de un espacio público mediante una red mesh de múltiples routers móviles. Esta red sería útil donde hay una necesidad repentina de conectividad a Internet, como por ejemplo un evento espontáneo, o condiciones que impidan la instalación de red permanente para un evento planeado. La misma configuración de red funcionaría para un evento móvil, como una marcha, aunque el equipo de implementación no hizo las pruebas para ese escenario en este caso.
El equipo de despliegue uso la Commotion WRT Nightly Build 09.25.13 corriendo en un router omnidireccional Picostation de Ubiquiti, con cuatro routers alimentados por paquetes de baterías Energizer XP8000. El equipo conectó un router al Internet en la oficina de OTI en 1899 L St NW y lo colocó en la ventana del 5to piso dando hacia el sur. Los miembros del equipo tomaron los routers alimentados por baterías a intersecciones cercanas para medir la funcionabilidad del firmware, la calidad del link entre los nodos, y la calidad del servicio de Internet en un punto lejano a la red, que estaba a cuatro saltos de la puerta de entrada (véase la ilustración abajo).
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/2013-09-25 Pico Popup.svg_.2013_09_26_14_46_00.0.png" style="height: 318px; width: 400px;" />
<i>La ubicación aproximada de los nodos en la red pop-up. La red mesh ad hoc trajo conectividad a Internet a la Plaza Farragut de la oficina del 5to piso del Open Technology Institute a varias calles de distancia.</i>
<h3>**Resultados y Observaciones: **</h3>
<ul>
	<li>El staff de OTI fue capaz de usar una red pop-up “Commotion WRT Nightly Build 09.25.13” en Routers omnidireccionales Ubiquiti Picostation por hasta 4 saltos/3 calles/0.3 millas de distancia del nodo de la puerta de acceso en una ubicación urbana local llena de gente.</li>
	<li>Los Routers en las mochilas fueron capaces de mantener los enlaces apenas a una calle de distancia. Esta distancia se impactó por el número de árboles, gente, y edificios en el área, así como por la altura del router.</li>
</ul>
<h3>**Detalles del equipo: **</h3>
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/battpackrouter.png" style="width: 500px; height: 245px;" />
<ul>
	<li>4 Ubiquiti Picostations HP (6dBi) routers Omnidireccionales (<a href="http://dl.ubnt.com/pico2hp_ds.pdf">spec</a>)</li>
	<li>4 paquetes de baterías Energizer XP8000 (<a href="http://www.energizerpowerpacks.com/il/products/xp8000/">spec</a>)</li>
	<li>Commotion Firmware: Commotion-OpenWRT 25-Sep-2013 DR2 Nightly build <a href="https://commotionwireless.net/download/routers">(https://commotionwireless.net/download/routers</a>)</li>
	<li>4 Cables Ethernet para conectar la Picostation al paquete de baterías</li>
	<li>4 Passive PoE Injector Cable Sets</li> 
</ul>
<h3>**Detalles de la locación: **</h3>
<ul>
	<li>Calle moderadamente llena durante la hora del almuerzo con muchas personas caminando en el área</li>
	<li>Aproximadamente árboles de 10 a 12 pies de altura a lo largo de las calles K St NW</li>
	<li>Localizados cercanamente, 4 a 6 edificios en el área</li>
	<li>Router de la puerta de entrada en el 5to piso de la dirección 1899 L St NW</li>
	<li>Red mesh con puntos de acceso móviles dentro de 3 calles (0.3 millas) del nodo de la puerta de acceso localizado en las siguientes intersecciones:
	<ul>
		<li>1828 L St NW: justo frente a la calle (33 pies) del nodo de la puerta de acceso pero a nivel de piso con una clara línea a la vista</li>
		<li>1875 K St NW: clara línea de vista desde el primer punto de acceso a nivel de piso (500 pies)</li>
		<li>1801 K St NW: clara línea de vista desde el segundo punto de acceso a nivel de piso pero con más árboles, edificios y gente alrededor (250 pisos)</li>
		<li>La Plaza Farragut en la esquina de la calle K St NW y la avenida Connecticut: línea satisfactoria de vista desde el tercer punto de acceso a nivel de piso con más árboles, edificios y gente alrededor.(0.1 millas)</li>
	</ul>
	</li>
</ul>
<h3>**Pasos que siguieron a la prueba Pop-up:**</h3>
El equipo OTI instaló un nodo de puerta de acceso en la ventana de cristal del 5to piso del edificio de las oficinas.
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/IMG_1152.JPG" style="height: 225px; width: 300px;" />
Luego, cuatro miembros del equipo conectaron sus cuatro respectivas picoestaciones a los paquetes de batería y las llevaron en mochilas y bolsas.
El equipo dejó al primer miembro del equipo con el primer router, o nodo, a 33 pies de distancia del nodo de la puerta de acceso en la dirección 1828 L St NW a nivel de piso. Fueron capaces de acceder a Internet a través de una red mesh en este punto.
El resto de los miembros del equipo luego caminaron al sur hacia la calle K St NW sobre la calle 19th St NW para dejar al próximo miembro del equipo con el segundo nodo a 500 pies de distancia del primer nodo. El equipo corrió un “<a href="http://www.overlooksoft.com/features">Fing</a>”, paquete de red, en sus teléfonos/dispositivos móviles para revisar si eran capaces de localizar los nodos de unos y otros. En este punto, el equipo fue capaz de acceder al Internet en sus teléfonos a través del enmallado.
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/Screenshot_2013-09-25-14-00-42.png" style="width: 300px; height: 500px;" />
<em>Página splash de cuando el equipo accedió al Internet usando la red mesh</em>
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/Screenshot_2013-09-25-14-20-56.png" style="width: 281px; height: 500px;" />
<em>Usando Fing, el equipo puede monitorear los detalles del punto de acceso y los usuarios en el punto de acceso </em>
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/Screenshot_2013-09-25-14-09-56.png" style="width: 281px; height: 500px;" />
<em>Usando Fing, el equipo puede dar un toque a otros usuarios de la red mesh </em>
El resto del equipo caminó al este sobre la calle K St NW hacia 18th St NW, y dejó al tercer miembro del equipo con el tercer nodo a 250 pies de distancia del segundo nodo en 1801 K St NW. El equipo todavía podía acceder al Internet usando la red mesh que estaba ahora a tres saltos (nodos) de distancia del nodo de la puerta de acceso.
Finalmente, el equipo continuó hacia el este dirigiéndose a la Plaza Farragut en la calle K St NW, con el cuarto nodo en la bolsa de uno de los miembros del equipo, a 0.1 millas de distancia del tercer nodo. Los dispositivos todavía estaban conectados unos a los otros vía la red mesh pero las señales eran más débiles, ahora estaban a cuatro saltos de distancia y 0.3 millas de distancia del nodo de la puerta de acceso en una calle muy llena. Cuando levantamos el cuarto punto de acceso a un nivel más alto, la conexión entre los nodos tres y cuatro mejoró.
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/Screenshot_2013-09-25-14-29-08.png" style="width: 281px; height: 500px;" />
<em>Usando OLSR-Viz, vemos que la conexión entre los puntos de acceso es más débil cuando está a 4 saltos y 0.3 millas de distancia. </em>
 
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/IMG_1182.JPG" style="width: 400px; height: 533px;" />
<em>El cuarto punto de acceso está ahora levantado en posición en la Plaza Farragut </em>
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/Screenshot_2013-09-25-14-28-42.png" style="width: 281px; height: 500px;" />
<em>OLSR-Viz muestra que la conexión mejora cuando la cuarta Picoestación se levanta para que haya una línea de vista mejor entre el tercer punto de acceso y ella misma. </em>
En la Plaza Farragut, entrar a Internet fue más retador y lento. En un punto, durante el experimento, todas las conexiones de las redes mesh fueron catpuradas en OLSR-Viz (imagen abajo).
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/13.png" style="height: 342px; width: 500px;" />
<em>OLSR-Viz muestra cuatro puntos de acceso en forma de “L” a la derecha del nodo de la puerta de acceso. Los otros dos nodos formando una red mesh más pequeña, a la izquierda del nodo de la puerta de acceso, son puntos de acceso localizados en la oficina de OTI en la misma red mesh. </em>
 

