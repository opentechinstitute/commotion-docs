---
layout: blog
title: Construyendo Redes Mesh Pop-up 
categories: [pop-up mesh, urban]
created: 2013-10-30
changed: 2013-12-19
post_author: Ryan Gerety
lang: es
---
 <img alt="" class="media-image attr__typeof__foaf:Image img__fid__548 img__view_mode__media_large attr__format__media_large" height="222" src="/files/styles/large/public/title_image.png?itok=uhJC0pqH" typeof="foaf:Image" width="480" />
El Open Technology Institute recientemente condujo una capacitación sobre cómo construir redes mesh pop-up usando Commotion. Nuestra meta era desplegar rápidamente una red mesh flexible y móvil sobre varias calles usando routers portables, alimentados por baterías, cargados en mochilas. <!--more--> El enrutamiento dinámico permite a la red cambiar y transformarse con los movimientos de las personas, creando una infraestructura temporal resiliente que pueda distribuir el acceso a Internet a lo largo de una área o dar soporte local para compartir datos y comunicaciones. 
En esta publicación, describimos tres pruebas de campo conducidas por participantes durante los talleres. En las pruebas de campo utilizamos routers Ubiquiti omnidireccional PicoStation M2 y baterías Energizer XP8000. Estas baterías son compactas y pueden dar hasta 3 ó 4 horas de energía para los routers, pero cualquier paquete de baterías que cubra con este requerimento de energía puede servir, por ejemplo, PicoStations puede funcionar con un voltaje de 15 a 24 volts. Los paquetes de baterías dan 20 volts. Revisa las marcas de voltaje que tiene tu router antes de escoger una batería. 
<img alt="" class="media-image attr__typeof__foaf:Image img__fid__561 img__view_mode__media_large attr__format__media_large" height="161" src="/files/styles/large/public/equipment_0.png?itok=HPlApBYr" typeof="foaf:Image" width="480" />
Al principio de los talleres, los participantes aprendieron cómo instalar y configurar varios routers mesh con Commotion y atender a la calidad de los enlaces. Con estas habilidades, los participantes fueron afuera y probaron el potencial de alcance de la señal en el nivel de las calles con dos routers con energía portátil de los paquetes de baterías. 
Ubiquiti estima que PicoStations puede cubrir hasta 500 metros, pero cada ambiente tiene propiedades diferentes que impactan en la propagación de la red inalámbrica. Como con las redes inalámbricas en los techos, las redes pop-up se ven afectadas por edificios, vegetación, línea de visión u otras barreras de la red inalámbrica. Las redes al nivel de las calles también se ven afectadas por el tráfico, los autos estacionados, las personas y las pequeñas subidas. 
En esta distancia prueba, los participantes encontraron que la calidad del enlace se bajó hasta aproximadamente 200 metros y se rompió en aproximadamente 300. Este estimado fue probado consistente con <a href="http://oti.newamerica.net/blogposts/2013/commotion_field_test_pop_up_mesh_network_downtown_washington_dc-93217"> pruebas anteriores</a> cerca de las oficinas del Open Technology Institute, a pesar de que estábamos en una ubicación diferente. Los participantes monitorearon la calidad del enlace desde sus teléfonos inteligentes utilizando la interfaz de Commotion para ver los valores ETX y la fuerza de a señal, y Fing para medir los tiempos de Ping. 

<table border="0" cellpadding="0" cellspacing="0" style="width: 427px;" width="427px">
	<tbody>
		<tr>
			<td width="300px"><img alt="" class="media-image attr__typeof__foaf:Image img__fid__549 img__view_mode__media_large attr__format__media_large" src="/files/styles/large/public/p2p.png?itok=SZDHeK_0" style="width: 300px; height: 211px;" typeof="foaf:Image" /></td>
			<td width="127px"><img alt="" class="media-image attr__typeof__foaf:Image img__fid__559 img__view_mode__media_large attr__format__media_large" src="/files/styles/large/public/Screenshot_2013-10-29-13-30-11_0.png?itok=E5zClkvu" style="width: 127px; height: 211px;" typeof="foaf:Image" /></td>
		</tr>
	</tbody>
</table>
<i>Mapa 1: Prueba de dos nodos de distancia.</i>
Repetimos las pruebas de distancia y los ejercicios de enlace, los que ayudaron a los participantes a desarrollar un sentido de intuición de la planeación y la administración. Desarrollamos estas habilidades más allá de las actividades con el diseño de red interactiva y las actividades de ingeniería, los "retos de la inalámbrica" y “<a href="https://commotionwireless.net/docs/cck/planning/design-your-network-every-network-tells-story">Todas las redes cuentan una historia</a>,” Antes de movernos a una configuración de redes más avanzada.
Los participantes crearon una red y se conectaron a Internet a través del puerto Commotion en una ventana con conexión ADSL a Internet. Los participantes probaron está nueva conexión a lo largo de calles más variadas, agregando más nodos a la red. Con un puerto a Internet en la mesh los participantes y el equipo de OTI fueron capaces de hacer llamadas de voz IP y de checar el correo electrónico mientras que exploraban el tener comunicación entre las esquinas de las calles. 

Los participantes se esparcieron a lo largo de las calles hasta que cada conexión a la red se hizo débil, inhabilitando esas actividades en línea. Los participantes encontraron que el tráfico y los automóviles estacionados pueden impactar de forma negativa en el máximo de la distancia de enlace y utilizaron habilidades de las actividades de temprano para resolver los problemas. Esta red se muestra en el mapa 2. 
<img alt="" class="media-image attr__typeof__foaf:Image img__fid__551 img__view_mode__media_large attr__format__media_large" height="294" src="/files/styles/large/public/map2.png?itok=n-xrL_wd" typeof="foaf:Image" width="389" />
<i>Mapa 2: prueba de campo con 6 nodos con puerto a Internet.</i>
En la tercera prueba, los participantes implementaron una red para cubrir una calle mucho más ocupada y una red entre calles pequeñas. Los participantes estacionaron a los individuos y sus redes mesh portátiles en nodos de esquinas particulares, establece una red estacionaria de columna vertebral. Otros participantes estaban haciendo roaming en los nodos; ellos caminaron sobre toda la calle para establecer una cobertura de la red entre estas calles y experimentar con cambios drásticos en la red. La configuración general se muestra en el mapa 3, ya que son estadísticas de redes capturadas durante la prueba de campo. 
<img alt="" class="media-image attr__typeof__foaf:Image img__fid__552 img__view_mode__media_large attr__format__media_large" height="319" src="/files/styles/large/public/map3.png?itok=Z-XI2qdf" typeof="foaf:Image" width="390" /> 
<i>Mapa 3: prueba de campo con 8 nodos con 7 personas que son relativamente fijas y dos personas que se mueven a lo largo del área.</i>
En esta configuración, el nodo 50 se movió a través de la red mientras que los otros nodos se mantuvieron fijos. Los nodos 37 y 182 tuvieron problemas para mantener la conexión al resto de las redes. Esto fue porque fue difícil mantener en la línea de visión, y porque los participantes tuvieron menor experiencia en el ajuste de la posición para improvisar el funcionamiento de la red. 
<img alt="" class="media-image attr__typeof__foaf:Image img__fid__553 img__view_mode__media_large attr__format__media_large" height="276" src="/files/styles/large/public/olsrviz4.png?itok=hYCCbEeN" typeof="foaf:Image" width="475" />
<i>Imagen 1: La red visualizada con valores ETX en la ubicación\[4\] (los últimos dígitos de la dirección IP corresponden con los números del mapa).</i>
<img alt="" class="media-image attr__typeof__foaf:Image img__fid__554 img__view_mode__media_large attr__format__media_large" height="240" src="/files/styles/large/public/olsrviz6.png?itok=RtTLCP_Y" typeof="foaf:Image" width="480" />
<i>Imagen 2: La red visualizada con valores ETX en la ubicación \[6\] (los últimos dígitos de la dirección IP corresponden a los números en el mapa). </i>
<img alt="" class="media-image attr__typeof__foaf:Image img__fid__555 img__view_mode__media_large attr__format__media_large" height="216" src="/files/styles/large/public/olsrviz7.png?itok=oxbB0fsK" typeof="foaf:Image" width="480" />
<i>Imagen 3: La red visualizada con valores ETX en la ubicación \[7\] (los últimos dígitos de la dirección IP corresponden a los números en el mapa).</i>
En esta prueba de campo, no tuvimos un puerto disponible de Internet, pero en vez de eso, utilizamos <a href="https://github.com/danstaples/MediaGrid">MediaGrid</a> para facilitar las conexiones locales seguras entre la red mesh. Durante el ejercicio, tuvimos MediaGrid funcionando en una laptop solamente, en la red. Sin embargo, MediaGrid, tiene la habilidad de sincronizarse a lo largo de múltiples computadoras, lo que incrementa el nivel de resiliencia de la red. MediaGrid tiene la opción de chat que permite al equipo discutir los cambios en la posición de los nodos en red y reportar la calidad de los enlaces y la fuerza de la señal en el área de la red local.
<table border="0" cellpadding="0" cellspacing="0" style="width: 338px;" width="338px">
	<tbody>
		<tr>
			<td width="169px"><i><img alt="" class="media-image attr__typeof__foaf:Image img__fid__556 img__view_mode__media_large attr__format__media_large" src="/files/styles/large/public/mediagrid1.png?itok=XYdP47ke" style="width: 169px; height: 300px;" typeof="foaf:Image" /></i></td>
			<td width="169px"><i><img alt="" class="media-image attr__typeof__foaf:Image img__fid__558 img__view_mode__media_large attr__format__media_large" src="/files/styles/large/public/mediagrid2_0.png?itok=-5kIuikp" style="width: 169px; height: 300px;" typeof="foaf:Image" /></i></td>
		</tr>
	</tbody>
</table>
<i>Imagen 4: Pantallazos de la interfaz web móvil de MediaGrid.</i>
Mientras que corremos una aplicación local en la red para estos experimentos, la red puede también conectarse a un módem 3G, un puerto a Internet dentro de un edificio, o un enlace de larga distancia en otra parte de la ciudad. 

Los experimentos de campo resultaron en las siguientes conclusiones:
<ul>
	<li>Ya que la red puede ser bastante dinámica, las personas deben elaborar un plan y coordinar constantemente para dar mantenimiento sólido a los enlaces de las redes y proveer cobertura adecuada al dar espacio aparte, Esto es más fácil cuando algunos nodos se mantienen relativamente inmóviles. </li>
	<li>La red es más resiliente cuando hay enlaces múltiples. A pesar de que los enlaces pueden abarcar varias cuadras, funcionó mejor ubicar nodos en los lados opuestos de las calles pero sólo con una calle de separación y crear redundancia en la red.</li>
	<li>Agregar altura a los niveles de piso mejoró el funcionamiento al reducir el número de barreras para la red inalámbrica (por ejemplo, las personas que se paraban entre los nodos). Subir la mitad de unas escaleras mejoró el nivel de la red entre esos enlaces.</li>
	<li>Coordinarnos entre una larga geografía es difícil, y hacer planeación previa importante. Especialmente para los propósitos de las pruebas de campo, todos deben tener todas las opciones identificadas, todas las direcciones IP y los métodos de comunciación.</li>
</ul>
El proyecto de Commotion está funcionando actualmente con el <a href="https://commotionwireless.net/docs/cck">Kit de Construcción Commotion,</a> un set de herramientas que el Open Technology Institute ha utilizado en talleres alrededor del mundo y en casa. Ya que esta es una guía del estilo "hágalo usted mismo" para construir redes mesh inalámbricas. Son un trabajo en desarrollo, así que vuelve pronto para más actualizaciones. ¡La retroalimentación y experimentación son bienvenidas!
Estos experimentos de campo dueron conducidos utilizando <a href="https://commotionwireless.net/download/routers">la versión para desarrollador de Commotion2</a>, y la red se configuró para usar WPA2-PSK para cifrar el tráfico.
 
