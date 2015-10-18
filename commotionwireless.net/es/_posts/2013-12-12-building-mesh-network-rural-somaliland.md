<<<<<<< HEAD
---
layout: blog
title: Construyendo una Red Mesh en Somalilandia Rural
categories: [es]
tags: [Somaliland,rural,mesh] 
=======
﻿---
layout: blog
title: Construyendo una Red Mesh en Somalilandia Rural
categories: [Somaliland,rural,mesh] 
>>>>>>> 05c14056a25140e6b0b71d926bb8f6da3947366a
created: 2013-12-12
changed: 2013-12-19
post_author: Dan Hastings
lang: es
---
Había escuchado de las redes mesh antes de mi llegada a Somalilandia, pero nunca había estado en la posición de realmente construir una red mesh. Cuando acepté la posición de instructor de TIC en<a href="http://www.abaarsoschool.org" style="text-decoration:none;"> <u>la Escuela de Ciencia y Tecnología de Abaarso</u></a> en Abaarso, Somalilandia, pensé que esta podría ser mi oportunidad. Sabía que el Open Technology Institute (OTI) había estado desarrollando una mesh firmware llamada <a href="https://commotionwireless.net/" style="text-decoration:none;"><u>Commotion</u></a>, adecuada para lugares remotos. A mi llegada a Somalilandia decidí que construir una red mesh usando Commotion sería una de mis mayores prioridades.<!--more-->
<br />
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/somalilandcountryside%20%281024x768%29.jpg" style=" width:600px" /><br />
<br />
Parecía que construir una red mesh sería un proceso difícil. Experimenté en el pasado con otro firmware en una variedad de routers, pero encontré que la configuración consumía demasiado tiempo y era difícil de configurar. 
Sabía que Commotion corría en un hardware Ubiquiti, designado para ambientes externos duros como Somalilandia. Desafortunadamente, encontrar routers Ubiquiti en Somalilandia -- para tal efecto, conseguir cualquier cosa en Somalilandia -- no es una tarea sencilla.<br />
<br />
Somalilandia es una región autónoma de Somalia, y es un área segura comparada con las regiones del sur de Somalia. Mientras que no es reconocida internacionalmente como un país, Somalilandia tiene su propia moneda, gobierno, y ejército.<br />
<br />
La analogía que me gusta usar a la hora de viajar a Somalilandia no es diferente a la de llegar a Hogwarts. En lugar de correr de cabeza en una plataforma imaginaria en la estación de tren, tienes que aterrizar en Dubai, tomar un vuelo que sale sólo una vez a la semana y luego viajar a través de un desierto en una de las carreteras peor construidas que puedas imaginar. <br />
<br />
Mientras estuve de vuelta en los EE.UU. este último verano me puse en contacto con OTI y descubrí que ellos serían capaces de proporcionarme el equipo apropiado para ejecutar y configurar una red mesh utilizando Commotion. Estaba tan entusiasmado con la posibilidad de conseguir realmente todo el equipo en Somalilandia que cuidadosamente guardé todo en mi equipaje de mano.<br />
<br />
Antes de seguir adelante, debo explicar mi nivel de experiencia con la construcción de redes. Mi única experiencia con la creación de redes había sido tomando una clase en un colegio comunitario en San Francisco y pasando el último año solucionando nuestros problemas de Internet en la escuela. 
Sin embargo, Commotion está construido de tal manera que poca o ninguna configuración avanzada era necesaria para instalar una red mesh.
Comencé a construir mi red identificando donde quería los puntos de acceso en el campus e identificando las distancias entre cada punto. Tener una buena línea de visión entre cada nodo era extremadamente importante. Por suerte tenemos muchas torres altas de vigilancia y de agua en el campus, de manera que colocar los nodos no fue un problema.<br />
<br />
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/Abaarso-School-Mesh-Design%20%28960x720%29.jpg" style="width:600px" /><br />
<br />
Un pequeño problema con la colocación de los nodos en las torres fue que tuve que asegurar una fuente de energía confiable al alcance del nodo. Si todos mis nodos estuvieran alimentados con energía solar, ¡no me habría tenido que preocupar por correr ningún cable en absoluto!
<br />
<br />
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/hamse%20%281024x768%29.jpg" style="width:600px" /><br />
<br />
Después, tuve que configurar cada router, lo que significa cargar el firmware Commotion a cada dispositivo Ubiquti. Tenía experiencia con los enrutadores, pero nunca tuve que hacer redes mesh con nodos inalámbricos. Para ayudar con esto me referí a los ejempos de <a href="https://commotionwireless.net/docs/cck/installing-configuring/common-configuration" style="text-decoration:none;"><u>configuración</u></a> en el sitio de Commotion que encontré muy útiles. El software de código abierto es conocido por ser difícil de configurar y mantener pero en realidad no tendría que ser así. Commotion lo ha probado como cierto.<br />
<br />
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/group%20%281024x768%29.jpg" style="width:600px" /><br />
<br />
Mientras construía la red, me aseguré de incluir a los estudiantes lo más posible. Armé un club de cómputo con mis estudiantes de TIC más dedicados para discutir y enseñarles lo básico de las redes mesh, cómo instalar el firmware en los routers, y cómo agregar un nodo a la red. Juntos llevamos los cables y subimos torres de agua para ubicar los nodos en los lugares correctos. También tuvimos que ubicar algunos nodos en las torres de vigilancia, que en ocasiones los guardias desconectaban por accidente. Los estudiantes le enseñaron a los guardias la diferencia entre los puertos LAN y PoE, así como la importancia de mantenerlos cables PoE conectados a todo momento. Unas semanas después de la escuela pusimos los últimos dos nodos para los dormitorios de mujeres y hombres.<br />
<br />
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/educatingthegaurds%20%281024x768%29.jpg" style="width:600px" /><br />
 
**Aplicaciones locales y ancho de banda limitado**<br />
Actualmente, Somalilandia es el único país en ÁFrica que no cuenta con acceso a fibra óptica -- los cables están pero el acceso se ha dicho que estará hasta 2014. Somalilandia recibe la conexión a Internet vía micro-ondas que cruzan el desierto de Djibouti. Todas las direcciones IP de Somalilandia te dirán que estás en Djibouti. La distancia en conectividad, sin mencionar ISP poco confiables, dan como resultado un Internet verdaderamente lento. <br />
<br />
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/somalilandfiber%20%28526x582%29.jpg" style="width:526px" /><br />
<em><a href="http://www.ubuntunet.net/sites/ubuntunet.net/files/Intra-Africa_Fibre_Map_v6.pdf" style="text-decoration:none;"><u>http://www.ubuntunet.net/sites/ubuntunet.net/files/Intra-Africa_Fibre_Map_v6.pdf</u></a> © UbuntuNet Alliance; Creative Commons 3.0</em><br />
<br />
La falta de un acceso estable a Internet es la pesadilla de todo maestro de TIC. No ser capaz de enseñar las tecnologías actuales puede ser frustrante, e impide compartir archivos con los estudiantes.

El enmallado de redes es descrito como "una red de usuario-a-usuario:” quería hacer uso de todo el sentido del término y hacer que compartir archivos con mis estudiantes fuera fácil y manejable. Para poder resolver los problemas de comunicación decidí confiar menos en el Internet externo y confiar más en las aplicaciones locales instaladas en nuestros servidores.
Encontré la solución a nuestra inconsistencia e Internet lento al instalar<a href="http://owncloud.org/" style="text-decoration:none;"> <u>OwnCloud</u></a>, una alternativa de código abierto al Dropbox, en nuestro servidor local. Ahora los estudiantes podían compartir tareas conmigo y otros maestros sin tener que depender en el Internet para nada.<br />
<br />
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/dan%20%281024x768%29.jpg" style="width:600px" /><br />
<br />
**Creando una Red de Auto-Suficiencia**<br />

Tan bien como funcionó la red y tan divertido como fue configurarla, no puedo llamar exitoso a este proyecto hasta que pueda volver a Somalilandia, de aquí a un año y ver los mismos nodos en su lugar corriendo la misma red.
Utilicé algunos métodos para asegurarme que este sería el caso. Tuve cuidado de documentar todos los aspectos del proyecto y crear guías detalladas para profesores y futuros administradores de red, de todo, desde cómo encontrar su dirección IP en la red, hasta la forma de hacer ping a un nodo, que es importante para aislar un posible problema en la red. A pesar de que las redes mesh se “auto-cura”, no son perfectas y aún tienen sus peculiaridades.<br />
<br />
Teniendo todo el conocimiento centrado en un sólo lugar con un miembro del personal únicamente enviará a una organización al fracaso, así que me aseguré de dar una serie de pequeñas capacitaciones a todo el personal.
Cuanto más transparente seas acerca de cómo funciona la red, será más probable que la tecnología vaya a durar.<br />
<br />
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/idiris.saeed_.hamse%20%28768x1024%29.jpg" style="width:600px" /><br />
<br />
Le dije repetidamente a mis alumnos que algunos de los mayores constructores y tecnólogos de nuestros tiempos fueron autodidactas. La excelente comunidad de apoyo centrada en el software de código abierto hace que proyectos como Commotion sean sustentables. Hay una buena probabilidad de que si surge un problema, alguien ya tuvo ese problema o alguien de otra comunidad al otro lado del mundo está trabajando en una solución.
Me gustaría dar mi más sincero agradecimiento al Proyecto Commotion Inalámbrico por el apoyo que me dieron además de proporcionarme las herramientas necesarias para construir esta red. No sólo los estudiantes de la Escuela Abaarso estuvieron muy entusiasmados acerca de la creación de redes mesh y de aprender el significado de la tecnología de la comunidad, sino que ahora otra pequeña parte de un país que, técnicamente ni siquiera existe, está más conectado con el resto del mundo.<br />
<br />
<img alt="" src="http://oti.newamerica.net/sites/newamerica.net/files/articles/ahmed.abdirahiim%20%28768x1024%29.jpg" style="width:600px" />

