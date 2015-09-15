---
layout: default
title: Prepara e Instala Nodos en el Techo
site_section: docs
sub_section: [cck,cck-building]
pdf: cck/building-mounting/4-Prep_and_Install_Rooftop_Nodes.pdf
pdf-all: true
categories:
created: 2013-09-27
changed: 2013-10-01
post_author: critzo
lang: es
---
  <p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__338 img__view_mode__media_original attr__format__media_original" height="388" src="/files/prep_install_finish_support001.png" typeof="foaf:Image" width="510" /></p>

<section id="introduction">
<h2>Introducción</h2>

<p>Esta guía tiene la intención de proporcionar algunos pasos fáciles de seguir para la instalación de tu equipo inalámbrico. Leela para preparar, y usarla llevar un registro de las tareas el día de la instalación.</p>

<p>A continuación encontrarás secciones en:</p>

<p>Preparación de nodos inalámbricos</p>

<p>Preparación del sitio</p>

<p>Instalación de nodos inalámbricos</p>

<p>Tareas de limpiar, probar y después de la instalación</p>

<p>La revisión de estos materiales sólo se debe tomar alrededor de una hora, aunque si lo estás utilizando en un aula o entorno de enseñanza, puede tomar más tiempo. Ten en cuenta que esto es una visión general de todos los pasos necesarios para instalar equipos en el techo. Cada paso en el camino tomará tiempo - de hecho, las instalaciones de los techos puede tomar entre dos y seis horas, dependiendo de las condiciones y el equipo.</p>

<p><strong>Tiempo requerido: 1-6 horas.</strong></p>

<h3>MATERIALES + PROVISIONES NECESARIAS</h3>

<p>Router</p>

<p>Equipo de montaje &amp; hardware</p>

<p>Plan del sitio</p>

<p>Cable Ethernet</p>

<p>Adapador de Poder sobre Ethernet (Power over Ethernet (PoE) adapter)</p>

<p>Bolsa de herramientas</p>
</section>

<section id="wireless-node-preparation">
<h2>Preparación del Nodo Inalámbrico</h2>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__339 img__view_mode__media_original attr__format__media_original" height="256" src="/files/prep_install_finish_support002_003.png" typeof="foaf:Image" width="510" /></p>

<p>Esta guía tiene la intención de proveer algunos pasos fáciles-de-seguir para tu instalación de equipo inalámbrico. Es especialmente útil para llevar registro de las tareas el día que planees trabajar, pero te recomendamos leerlo antes para estar lo mejor preparado.</p>

<p>El primer paso es obtener el hardware inalámbrico e instalar el software mesh personalizado. Puedes hacerlo el día de la instalación, o días previos. Si tu red del vecindario tiene configuraciones particulares para la red, asegúrate de obtenerlas antes de empezar a instalar el software.</p>

<p>1. Adquiere un router inalámbrico Commotion compatible que sea apropiado para la ubicación.</p>

<p>2. Descarga la versión de software apropiada en el sitio web de Commotion (commotionwireless.net). Puedes encontrar las instrucciones en el módulo <a href="/docs/cck/installing-configuring/install-ubiquiti-router">Instala en un Router.</a></p>

<p>3. Graba las direcciones MAC de nodos inalámbricos – una Identificación única que puedes usar para monitorear el hardware, en caso de que necesites servicio del fabricante.</p>

<p>Para encontrar la dirección MAC: Mira en la etiqueta del fondo o en el fondo de la cubierta del router por un código que se ve como  aa:bb:cc:dd:ee:ff – esa es la dirección MAC de tu router. Es una combinación única de números y letras que identifica el dispositivo específico.</p>

<p>Para encontrar las direcciones IP MESH: en la interfaz de administrador de Commotion, navega a Status&gt;OLSR, luego da clic en "Interfaces" y guarda el número que comienza con 5. Se ve como 5.x.y.z, donde x, y, y z son números.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__340 img__view_mode__media_original attr__format__media_original" height="332" src="/files/prep_install_finish_nodetag.png" typeof="foaf:Image" width="510" /></p>

<p class="tip">Puedes escribir el nombre del nodo en la caja con un marcador permanente un una etiqueta impresa si tienes como hacer etiquetas.</p>
</section>

<section id="site-preparation">
<h2>Preparación del Sitio</h2>

<p>Es buena idea visitar el sitio donde planeas instalar tu nuevo nodo wireless días antes o una semana antes de la propia instalación. Esto perimte que haya más tiempo para prepararse y adquirir cualquier equipo o hardware faltante.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__341 img__view_mode__media_original attr__format__media_original" height="365" src="/files/prep_install_finish_support004.png" typeof="foaf:Image" width="510" /></p>

<p>1. Haz algunas evaluaciones del sitio. Usando las guías y ejemplos en  <a href="/docs/cck/planning/inventory-the-neighborhood/">Inventaría al Vecindario</a> para evaluar los edificios y sitios para instalaciones inalámbricas. El documento incluye una serie de preguntas y cosas que buscar, y es un buen lugar donde empezar.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__342 img__view_mode__media_original attr__format__media_original" height="313" src="/files/prep_install_finish_support005.png" typeof="foaf:Image" width="510" /></p>

<p>2. Elige la mejor ubicación para el montaje en el techo basado en la visibilidad de otros techos. Toma en cuenta que las señales inalámbricas funcionan mejor cuando hay una linea clara de vista entre los nodos. También decide que tipo de montaje instalarás. EL módulo <a href="/docs/cck/building-mounting/learn-about-rooftop-mounts">Aprende de Montajes en los Techos</a> te puede ayudar a decidir.</p>

<p>3. Identifica donde correrá el cable Ethernet a lo largo del techo y entrará en el edificio.</p>

<p>4. Identifica donde se conectará el adaptador de Poder sobre Ethernet (Power over Ethernet, PoE).</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__343 img__view_mode__media_original attr__format__media_original" height="168" src="/files/prep_install_finish_support005_a.png" typeof="foaf:Image" width="510" /></p>

<p>4a. Si el nodo esta montando en un recinto o en interiores, intenta encontrar una ubicación accesible que lo mantenga fuera de la interacción diaria.</p>

<p>4b. Si el dueño del edificio o el anfitrión del nodo quiere donar ancho de banda para hacer que el nodo sea una puerta a Internet, coloca el adaptador PoE donde pueda ser conectado al router del anfitrión fácilmente.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__344 img__view_mode__media_original attr__format__media_original" height="288" src="/files/prep_install_finish_support007.png" typeof="foaf:Image" width="510" /></p>

<p>5. Adquiere el hardware de montaje apropiado.</p>

<p>El módulo <a href="/docs/cck/building-mounting/learn-about-rooftop-mounts">Aprende de los Montajes en los Techos</a> puede ayudarte a identificar el hardware correcto. Hay muchos lugares para encontrar el hardware de montaje – tu ferretería local o tienda de electrónicos puede tener algo, paro hay varios vendedores en línea también.</p>

<p>Revisa que tengas todo el hardware necesario para el montaje, como las anclas de concreto, pernos, abrazaderas, etc.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__345 img__view_mode__media_original attr__format__media_original" height="288" src="/files/prep_install_finish_support006.png" typeof="foaf:Image" width="510" /></p>

<p>6. Verifica que la bolsa de herramientas tenga todo lo que necesitas para montar el hardware y el sitio de instalación.</p>
</section>

<section id="wireless-node-installation">
<h2>Instalación de Nodo Inalámbrico</h2>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__346 img__view_mode__media_original attr__format__media_original" height="288" src="/files/prep_install_finish_support008.png" typeof="foaf:Image" width="510" /></p>

<p>¡Día de Instalación! Ahora podrás subir al techo e instalar el nuevo equipo para tu red comunitaria – pero asegúrate de trabajar de un modo seguro y responsable. Te recomendamos ir al módulo <a href="/docs/cck/building-mounting/learn-rooftop-basics">Aprende lo básico de los techos</a> y revisar las guías de seguridad en el techo antes de comenzar tu instalación.</p>

<p>Puedes dividir el trabajo en tres partes: instalar el montaje del hardware; instalar el nodo y la fuente de energía; y correr el cable Ethernet entre el nodo y la fuente de energía.</p>

<p>1. Instala el montaje de hardware. Esto variará dependiendo del tipo de montaje que estés usando. Si vino como kit, ¡lee y sigue las instrucciones de instalación! Para más información, ve al módulo <a href="/docs/cck/building-mounting/learn-about-rooftop-mounts">Aprende de los Montajes en los Techos</a> disponible.</p>

<p>Para un kit de montaje de cornisas o anclas, perfora los agujeros necesarios para las anclas. Asegúrate de usar anclas apropiadas para el exterior (de plástico o metal).</p>

<p>Para un kit de montaje en chimenea, ¡asegúrate de que el amarre esté extremadamente apretado!</p>

<p>Para montajes de techo sin penetración, asegúrate de usar por lo menos algunos bloques de concreto (bloques de 4" de grosor son suficiente – no necesitas bloques completos de 8" de grosor).</p>

<p>2. Pon el nodo inalámbrico al mástil montado. Usa abrazaderas metálicas o ataduras de plástico de uso rudo o para exteriores si es posible. Esto evitará que el nodo inalámbrico se resbale o se enrede en el mástil.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__347 img__view_mode__media_original attr__format__media_original" height="359" src="/files/prep_install_finish_support009.png" typeof="foaf:Image" width="510" /></p>

<p>Si es posible, coloca las luces del indicador en el nodo hacia la calle o hacia el piso, para que sean visibles sin tener que subir al techo. Esto ayudará a la solución de problemas en el futuro.</p>

<p>Si estás usando un nodo direccional, apúntalo directamente hacia donde debería enlazarse con otro nodo.</p>

<p>Conecta el conector Ethernet hacia en nodo y cierra el armazón.</p>

<p>Conecta el adaptador PoE y aseguralo de algún modo, para que no esté colgando de la conexión de poder. Ataduras de plástico o sujetadores montados en la pared podrían ayudar con esto.</p>

<p>4. Corre el cable Ethernet entre el nodo inalámbrico y el adaptador PoE.</p>

<p>Sigue los tips en el módulo "Aprende lo Básico de los Techos" sobre como correr el cable Ethernet, asegurarlo al mástil, las paredes y sobre las superficies del techo</p>

<p>Asegúrate que el cable Ethernet este asegurado de tal manera que el cable no pueda ser pisoteado, y no se arrastrará con el viento durante una tormenta.</p>

<p>5. Instala los conectores RJ45 a las puntas del cable Ethernet. Cada punta debería ser conectada independientemente, usando el código apropiado de color para el orden de los cables (conocido como T568B). Luego conecta el cable hacia el Nodo y el adaptador PoE, y terminaste con los pasos de la instalación</p>
</section>

<section id="clean-up">
<h2>Limpiar, Preparar y la Post-Instalación</h2>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__348 img__view_mode__media_original attr__format__media_original" height="428" src="/files/prep_install_finish_support010.png" typeof="foaf:Image" width="510" /></p>

<p>Ninguna instalación está terminada a menos que dejes el lugar viéndose mejor que cuando llegaste. ¡Nunca dejes un desastre! Asegúrate de no haber dejado ningún agujero sin sellar en el exterior del edificio por donde pueda entrar agua.</p>

<h3>1. LIMPIA EL TECHO Y LA UBICACIÓN DEL POE.</h3>

<p>Corta cualquier pedazo suelto o extendido de las ataduras de plástico.</p>

<p>Limpia cualquier cable o piezas de cable.</p>

<p>Revisa que los bucles de servicio en el cable estén asegurados de algún modo.</p>

<p>Barre cualquier polvo de mortero / polvo de madera si taladraste.</p>

<h3>2. CHECA LA CONECTIVIDAD AL NODO INALÁMBRICO.</h3>

<p>Después de unos cuantos minutos, asócialo con el Punto de Acceso (Access Point, AP) en tu teléfono o laptop. Confirma que te conectaste.</p>

<p>Trae la página de Administración del nodo inalámbrico.</p>

<p>Navega a la página de estatus OLSR que muestra los nodos de tus vecinos en la mesh, si hay alguno. Confirma que este nodo esté conectado a los otros.</p>

<p>SI hay una Puerta de Acceso a Internet en tu red, checa que puedas salir del Internet.</p>

<h3>3. GRABA CUALQUIER INFORMACIÓN NECESARIA ACERCA DE LA INSTLACIÓN EN TU DOCUMENTACIÓN DE LA RED.</h3>

<p>Por ejemplo, en adición al nombre del nodo, direcciones MAC y direcciones de IP, toma nota de la ubicación y que funcionó y que no funcionó, así como cualquier seguimiento o pasos próximos.</p>
</section>

<section id="definitions">
<h2>Definiciones</h2>

<dl>
	<dt>Direcciones MAC</dt>
	<dd>Una combinación única de números y letras que identifican a un dispositivo específico.</dd>
	<dt>Dirección IP</dt>
	<dd>Una secuencia única de números separada por puntos que identifica a cada dispositivo unido a una red.</dd>
	<dt>Linea de Vista</dt>
	<dd>Un camino sin obstrucción para que las señales inalámbricas viajen entre edificios o dispositivos.</dd>
</dl>
</section>

<section class="related-information" id="related-information">
<h2>Información Relacionada</h2>

<p>Otros módulos referenciados en este:</p>

<p><a href="/docs/cck/installing-configuring/install-ubiquiti-router">Instala un Router Ubiquitir</a></p>

<p><a href="/docs/cck/planning/inventory-the-neighborhood">Inventorio del Vecindario</a></p>

<p><a href="/docs/cck/building-mounting/learn-rooftop-basics">Aprende lo básico de los techos</a></p>

<p><a href="/docs/cck/building-mounting/learn-about-rooftop-mounts">Aprende de Montajes en los Techos</a></p>
</section>

<section class="external-resources" id="external-resources">
<h2>Recursos Externos</h2>

<p>Consulta el sitio web de Commotion Wireless commotionwireless.net para más información o documentación sobre instalar el software en tus dispositivos.</p>
</section>
