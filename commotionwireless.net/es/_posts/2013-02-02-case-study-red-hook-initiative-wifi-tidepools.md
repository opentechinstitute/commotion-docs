---
layout: blog
title: Caso de Estudio – Red Hook Initiative WiFi y Tidepools
categories: [red hook,hardware,cost,community wireless,applications,Research,mesh]
created: 2013-02-02
changed: 2013-07-26
post_author: Georgia Bullen
lang: es
---
 
<em>Este caso de estudio será publicado en la próxima edición de <a href="http://wndw.net/">Wireless Networking in the Developing World</a> y está publicado también en <a href="http://oti.newamerica.net/blogposts/2013/case_study_red_hook_initiative_wifi_tidepools-78575">oti.newamerica.net</a>.</em>

<img src="http://oti.newamerica.net/sites/newamerica.net/files/imagecache/standard_node_image/articles/images/redhook_sign2.jpg" height="300">

Red Hook Initiative WiFi es una red mesh colaborativa diseñada. Ofrece acceso a Internet a la sección de Red Hook de Brooklyn, Nueva York, y sirve como una plataforma para el desarrollo de aplicaciones y servicios locales. Red Hook Initiative ha construido la red en colaboración con el Open Technology Institute, comprometiéndose con el diseño centrado en las personas y además de un compromiso comunitario en el núcleo del proyecto. La comunidad expandió la red significativamente después de un desastre natural en el otoño de 2012. 

<h2>Aspectos Clave</h2>
<ol><li>Los principales pilares de la red son las organizaciones comunitarias.</li>
<li>Relación sólida con proveedores de apoyo técnico externos a la comunidad.</li>
<li>Los procesos de diseño liderados por la comunidad enfatizan las necesidades locales y aumentan el compromiso.</li>
<li>Prototipado rápido de aplicaciones diseñadas para la red del área local.</li></ol>

<h2>Historia de la Red </h2>

Comenzando en el Otoño de 2011, la <a href="http://rhicenter.org">Red Hook Initiative</a> (RHI), una organización sin fines de lucro de Brooklyn se enfocó en generar cambio social a través de una juventud comprometida, se acercó al Open Technology Institute para colaborar en una red comunitaria inalámbrica. RHI quería una forma de comunicarse con los residentes inmediatos a su centro comunitario. OTI no pudo inicialmente apoyar este esfuerzo directamente, pero introdujo a Anthony Schloss, el Coordinador de Programas de Medios RHI, con Jonathan Baldwin, un graduado de la Escuela de Diseño Parsons, que había estado experimentando con el enmallado inalámbrico como plataforma digital local.

Red Hook es la esquina noroeste de Brooklyn, adentrándose en la bahía de Hudson. Está aislada del resto de la ciudad por el Gowanus Expressway, que lleva el tráfico de los puntos del sur hacia el bajo Manhattan. El vecindario es el hogar de aproximadamente 5,000 residentes de Casas Red Hook de vivienda pública y otras áreas de bajos ingresos cerca de una autopista, así como una sección gentrificada con muchas pequeñas empresas más cerca del agua. Muchos sitios industriales, un Ikea y un número de parques públicos llenan la zona.

El plan inicial de RHI WiFi era proporcionar acceso inalámbrico a Internet en y alrededor de la construcción de RHI, que está cerca de la autopista y las casas de Red Hook. Schloss y Baldwin instalaron una Nanoestación Ubiquiti en el techo y un router Linksys en el interior del edificio, conectado a través de Ethernet. Conectaron el router Linksys al módem de la central. Esta instalación proporcionó una oportunidad para crear prototipos de las primeras versiones de las aplicaciones locales RHI WiFi. Cuando los residentes o visitantes de RHI se conectaban al punto de acceso inalámbrico llamado "Red Hook Initiative WiFi," eran dirigidos a un sitio web en un servidor local. En esta página web había un tablero de mensajes digital local que permitía a todos a dejar un comentario o una nota detrás y participar en el proyecto.

En marzo de 2012, Baldwin y Schloss instalaron una Nanoestación Ubiquiti adicional en el techo de un edificio de apartamentos con vista al Parque Coffey y gran parte del resto del vecindario. Un residente del edificio con vínculos sociales con RHI donó la electricidad y el acceso al techo. Con este punto de acceso ventajoso al vecindario, la posibilidad de una red inalámbrica que conectara a los espacios públicos comenzó a tomar forma. Inicialmente, el punto de acceso del Parque Coffrey no estaba conectado al Internet, pero estaba conectado al <a href="http://www.globalscaletechnologies.com/t-guruplugdetails.aspx"> Servidor GuruPlug</a>. El servidor básico, de bajo poder alojó una página web local en la red y un tablero de mensajes similar al que corría en RHI.

<img src="http://oti.newamerica.net/sites/newamerica.net/files/articles/harbortech_6.jpg" height="400">

RHI WiFi usa el Commotion Wireless de OTI corriendo en routers Ubiquiti. Commotion es una herramienta de comunicación gratiuta y de código abierto que usa teléfonos móviles, computadoras y otros dispositivos inalámbricos para crear redes mesh descentralizadas. Más importante, Commotion permite que el desarrollo de la red ocurra dinámica y orgánicamente – para que la comunidad pueda decidir dónde y cómo debería crecer la red. Las redes Commotion son sustentables sin conexión a Internet, lo que permite que sean resistentes a cortes; pueden distribuir acceso a las aplicaciones alojadas en servidores locales o los routers mismos.

<h2>Software Social y el Crecimiento de la Red</h2>

Con base en la investigación de las redes inalámbricas comunitarias alrededor del mundo, Baldwin identificó una necesidad de software social que agregaría valor y una identidad distinta a la red inalámbrica de la comunidad, específicamente para:
<ul><li>Provocar compromiso cívico y comunitario para atender las necesidades locales, los intereses y la cultura.</li>
<li>Fomentar la confianza, la interdependencia y la reciprocidad en toda la comunidad.</li>
<li>Combinar espacios comunitarios digitales y físicos.</li>
<li>Asegurarse que las personas sepan del mesh / tengan software instalado antes de que un corto de comunicación ocurra.</li></ul>

Schloss y Baldwin comenzaron a trabajar con participantes de los programas de medios establecidos de RHI en un proceso de diseño centrado en las personas que requirió el conocimiento y los intereses de los residentes locales. A lo largo del primer año, Baldwin y Schloss realizaron talleres con miembros de la comunidad para determinar las necesidades locales y reunir ideas de diseño para <a href="http://tidepools.co/">Tidepools</a>, desarrollado por Baldwin para pilotos en la red RHI. <a href="http://tidepools.co/">Tidepools</a> es una plataforma construida, de mapeo local, de código abierto y personalizable que usa Javascript, <a href="http://leafletjs.com/">LeafletJS</a>, PHP y <a href="http://www.mongodb.org/">MongoDB</a>. Baldwin lo diseñó para las comunidades locales, planeación y organización de eventos, temas y bienes comunitarios.

<img src="http://oti.newamerica.net/sites/newamerica.net/files/articles/mapping_out_the_community_FAQ3_becky%20kazansky.png" width="500">
<em>Fuente: Becky Kazansky</em>

Los talleres comunitarios produjeron ideas para aplicaciones locales que abordarían necesidades específicas identificadas por la comunidad. Las necesidades identificadas en los talleres de la comunidad fueron:
<ul><li>Acceso al Internet (en casa, vía móvil y en kioscos comunitarios.</li>
<li>Participación comunitaria responsable (FAQs, carteles de anuncios electrónicos, características habilitadas de SMS).</li>
<li>Acceso a recursos (empleo y habilidades compartidas).</li>
<li>Sistema de Información Local(archivo histórico, puntos de referencia).</li>
<li>Multilingüe (Español, Árabe y Tagalo).</li>
<li>Interfaz amigable para promover la exploración.</li></ul>

En el verano de 2012, Baldwin se unió al personal de OTI, y OTI trajo experiencia adicional tecnológica para la colaboración junto con la experiencia de cerrar las brechas digitales y el desarrollo de la infraestructura controlada por la comunidad. La experiencia de la organización en Detroit y Filadelfia proporcionó orientación sobre cómo colaborar con las comunidades aisladas social, geográfica y tecnológicamente dentro de las ciudades.

Durante los meses después de las pruebas iniciales de la red local, OTI y RHI se enfocaron en realizar tres aplicaciones iniciales que usarían las plataformas Tidepools y correrían sobre la red inalámbrica local:
<ul><li><a href="http://rhiwifi.co/bus">¿Dónde está el autobús B61?</a> - Una aplicación para acceder en tiempo real a las locaciones y el tiempo de arribo de los autobuses usando datos del BusTime API de las Autoridades de Tránsito Metropolitanas (lanzado el 9 de Octubre de 2012).</li>
<li><a href="https://rhiwifi.co/stopfrisk">Stop &amp; Frisk Survey</a> - Una aplicación de encuestas que los residentes pueden usar para documentar las interacciones de la policía en Red Hook y mejorar la seguridad pública (lanzado el 17 de Octubre del 2012).</li>
<li><a href="http://rhicenter.org/category/rhi/rhi_radio/">RHI Radio</a> - Una estación de radio en línea, transmitiendo contenido producido por el Youth Radio Group en RHI (en desarrollo).</li></ul>

<img src="http://oti.newamerica.net/sites/newamerica.net/files/articles/RHIWifi_Apps.png" height="400">

<h2>Expansión después del Huracán Sandy</h2>

El 29 de Octubre de 2012, el Huracán devastó la parte inferior de Red Hook junto con gran parte de la región circundante. En medio de los cortes de energía y las inundaciones, la necesidad para acceder a los sistemas de comunicación para obtener información sobre lo que estaba sucediendo y donde se necesitaba ayuda se convirtió en algo crucial. El edificio RHI era uno de los pocos lugares que había logrado mantener el poder y, como resultado, la RHI WiFi se había mantenido en funcionamiento durante la tormenta. En los días inmediatamente después de la tormenta, hasta 300 personas por día accedieron a la red para comunicarse con sus seres queridos, aprender de lo que sucedía en el resto de la ciudad, y buscar asistencia para la recuperación.

“Inmediatamente vimos a las comunicaciones como una de las necesidades críticas en la comunidad,” dice Tony Schloss. “Queríamos que fuera tan fácil como fuera posible para que la gente se conectara a las redes para buscar alojamiento, tener acceso a la información, y reportar su estatus seguro.”

Los mensajes de texto eran el medio de comunicación más extenso – y en algunos casos el único – para los residentes del vecindario después de la tormenta, así que en cuestión de días, OTI desarrolló <a href="http://rhiwifi.co/status">RHI Status - un plugin de un mapa alimentado por SMS</a> para Tidepools usando la <a href="https://www.tropo.com/">Interfaz de Programación de Aplicación Tropo (Application Programming Interface, API)</a> para manejar los mensajes SMS y el <a href="https://developers.google.com/maps/documentation/geocoding/">API de geocodificación de Google</a> para manejar direcciones de lenguaje natural. El RHI Status proporcionó los medios para que los residentes pudieran enviar por texto su locación y para quienes estuvieran en la necesidad de contactar a un número telefónico, lo que automáticamente mapeó la información en Tidepools con foros de discusiones para que la comunidad pudiera responder.

<img src="http://oti.newamerica.net/sites/newamerica.net/files/articles/sms_rhistatus_map.png" width="500">

Mientras la recuperación progresaba, Frank Sanborn, un becario de innovación de la Federal Emergency Management Administration (FEMA) se acercó a RHI para expandir la red y promover el apoyo de los esfuerzos de recuperación en Red Hook. Sanborn reclutó voluntarios de <a href="https://wiki.projectmeshnet.org/New_York_City_Meshnet">NYC Mesh</a> y <a href="http://www.hacdc.org/">HacDC</a>, un hackerspace con base en Washington, DC y coordinado con el International Technology Disaster Resource Center (<a href="http://www.itdrc.org/">ITDRC</a>). OTI ya había guardado algunos routers en RHI desde antes de la tormenta. Con la dirección técnica de OTI y operando de acuerdo con las metas establecidas por RHI, el equipo instaló un link satelital a FEMA en el techo de RHI e instaló un router Commotion en el techo de un taller mecánico a unas cuadras del RHI. Anteriormente, el dueño de la tienda había estado reacio a alojar un router, ya que no veía un beneficio al hacerlo. Sin embargo, mientras la comunidad se manifestó en respuesta a la crisis, el taller mecánico se convirtió en un eslabón clave entre las puertas de entrada al Internet en RHI y el router con vista al Coffey Park, que para entonces se había convertido en un punto de distribución de ayuda importante para Red Hook. Aunque el enlace ascendente del satélite fue ofrecido por sólo 30 días, la red mesh podía distribuir la conexión clave del Internet a locaciones clave donde los residentes, el personal de primeros auxilios, y los voluntarios para la recuperación, más la necesitaban.

A medida que la comunidad se unió para responder a la tormenta, la necesidad de hacer crecer esta infraestructura de comunicaciones resistente se hizo evidente. Con la energía y el agua aún desconectada en gran parte de Red Hook el siguiente mes, muchas organizaciones locales y residentes se acercaron a ayudar. Brooklyn Fiber, un proveedor de servicios de Internet (ISP) local, ofreció una puerta de entrada adicional para RHI WiFi. Para agregar la puerta de entrada a la malla, OTI, RHI y Brooklyn Fiber instalaron un router de 5 GHz Ubiquiti Nanostation Loco corriendo en AirOS (para recibir la señal de fibra), y una Nanoestación Ubiquiti corriendo en Commotion (como un punto de acceso inalámbrico), en el 3er piso de la Iglesia Visitation Church Rectory en el lado oeste del Coffey Park. La iglesia estaba también sin electricidad entonces, pero el equipo instaló un <a href="http://en.wikipedia.org/wiki/Uninterruptible_power_supply">proveedor de energía ininterrumpible</a> que podía correr los routers por 12 horas continuas.

Desde la tormenta, RHI WiFi ha apoyado a cerca de 100 usuarios por semana, incluso sin hacer promoción del recurso. Los datos recogidos por Commotion en arrendamientos de DHCP, así como en Google Analytics en la página web de aterrizaje, muestran que los residentes parecen estar conectándose principalmente usando dispositivos Android y Apple iPod Touch. Además, muchos residentes utilizan las estaciones de trabajo en las computadoras del laboratorio de medios RHI, así como la conexión inalámbrica disponible en RHI. RHI está sirviendo como ambos, un ancla física y un ancla social para la red inalámbrica, impulsando la adopción digital, la educación del barrio, y la coordinación de los esfuerzos de ayuda.

<img src="http://oti.newamerica.net/sites/newamerica.net/files/articles/Adding%20new%20nodes_repairing%20old%20ones%20-%20coffey%20park.jpg" height="400">

<h2>Sustentabilidad &amp; Metas futuras </h2>

RHI continuará desarrollando el proyecto con el objetivo de apoyar a toda la comunidad para la recuperación del Huracán Sandy. Con el apoyo del financiamiento del New York City Workforce Development RHI y OTI están poniendo en marcha un programa de entrenamiento en enero de 2013 para involucrar a los residentes del vecindario en el mantenimiento y el desarrollo de la red inalámbrica. Siguiendo el modelo del curriculum de “Digital Stewards” desarrollado por OTI y <a href="http://alliedmedia.org/">Allied Media Projects</a> en Detroit, Michigan, el curriculum capacitará a jóvenes adultos para instalar nuevos routers, mantener los existentes, y promover la adopción de la red RHI WiFi en todo Red Hook. Los administradores digitales RHI priorizarán espacios públicos adicionales para la expansión de la red y trabajarán con otros residentes para diseñar aplicaciones nuevas y locales. OTI continuará asistiendo en el desarrollo de las aplicaciones y apoyará la ingeniería de la red, en estrecha colaboración con la comunidad.

<h2>Costo de la Red</h2>

<ul><li>Labor donada por los residentes locales y técnicos.</li>
<li>Apoyo institucional de RHI y OTI.</li>
<li>Hardware (~$50 a ~$85 dólares cada router).</li>
<li>Instalación (3-5 horas de trabajo para dos personas por sitio).</li>
<li>Banda ancha (donada por RHI, Brooklyn Fiber y FEMA).</li>
<li>Programa de entrenamiento para residentes locales para mantener y expandir la red como parte de un programa de empleo municipal.</li></ul>

<h2>Lecciones Aprendidas</h2>

<ul><li>Establecer relaciones y anclando nodos inalámbricos en un lugar antes de un desastre facilita el despliegue rápido de una red a través de: </li>
<ul><li>Relaciones ya establecidas con participantes clave de la comunidad.</li>
<li>Un mayor nivel de alfabetización tecnológica en la comunidad.</li>
<li>Equipo de redes inalámbrico pre-posicionado en el vecindario.</li></ul>
<li>La inversión de mayor reto es la organización inicial y la fase de diseño antes de que se realice cualquier valoración.</li>
<li>La aplicaciones de diseño-comunitario agregan valor a la red local, aún en una escala pequeña.</li></ul>

<img src="http://oti.newamerica.net/sites/newamerica.net/files/articles/coverage.png" height="400">

<h2>Artículos Relacionados &amp; Sitios Web</h2>

<a href="http://oti.newamerica.net/pressroom/2012/release_new_community_tech_tool_to_help_in_sandys_aftermath ">LANZAMIENTO: Nueva Herramienta Tecnológica-Comunitaria para Ayudar en la Situación Posterior a Sandy</a>

<a href="http://www.forbes.com/sites/deannazandt/2012/11/10/what-sandy-has-taught-us-about-technology-relief-and-resilience/ ">Lo Que Sandy Nos Ha Enseñado Acerca de la Tecnología, Ayuda y Resistencia</a>

<a href="http://www.newamerica.net/node/34925 ">Un Prototipo de Mesh Inalámbrico Comunitario en Detroit, MI</a>

<h3>Tidepools</h3>
<a href="http://tidepools.co">http://tidepools.co</a>
<a href="http://www.animalnewyork.com/2012/tidepools-a-social-networktool-in-the-service-of-the-community/">http://www.animalnewyork.com/2012/tidepools-a-social-networktool-in-the-service-of-the-community/</a>
<a href="http://wlan-si.net/en/blog/2012/05/26/introducing-tidepools-social-wifi/">http://wlan-si.net/en/blog/2012/05/26/introducing-tidepools-social-wifi/</a>
<a href="http://www.core77.com/blog/social_design/a_community-owned_map_accessed_via_mesh_networks_23319.asp">http://www.core77.com/blog/social_design/a_community-owned_map_accessed_via_mesh_networks_23319.asp</a>
<a href="http://www.jrbaldwin.com/tidepoolswifi/">http://www.jrbaldwin.com/tidepoolswifi/</a>

<h3>Stop &amp; Frisk App</h3>
<a href="http://animalnewyork.com/2012/stop-and-frisk-app-from-red-hook-initiative/">http://animalnewyork.com/2012/stop-and-frisk-app-from-red-hook-initiative/</a>
<a href="http://www.dnainfo.com/new-york/20121017/red-hook/stop-and-frisk-app-launched-by-red-hook-initiative">http://www.dnainfo.com/new-york/20121017/red-hook/stop-and-frisk-app-launched-by-red-hook-initiative</a>

<h3>Red Hook</h3>
<a href="http://www.nycgovparks.org/parks/redhookpark/history">http://www.nycgovparks.org/parks/redhookpark/history</a>

Para descargar el PDF de este caso de estudio, <a href="/files/rhiwifi_tidepools_casestudy.pdf">haz clic aquí</a>

