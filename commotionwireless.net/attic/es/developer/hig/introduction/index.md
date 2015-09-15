---
layout: default
title: Guías de Interfaz Humana
site_section: developers
sub_section: [hig]
categories: 
created: 2012-06-25
changed: 2013-12-25
post_author: critzo
lang: es
---
 <h2>Introduction</h2>

<p>Commotion es una herramienta de comunicación de código abierto que usa dispositivos inalámbricos para crear redes mesh descentralizadas. Actualmente está siendo desarrollada por múltiples organizaciones alrededor del mundo, incluyendo el <a href="http://newamerica.org/oti" target="_blank">Instituto de Tecnología Abierta</a>, <a href="http://theworkdept.com/" target="_blank">El Departamento de Trabajo</a>, <a href="https://guardianproject.info/" target="_blank">El proyecto Guardian (The Guardian Project)</a>, y <a href="http://www.servalproject.org/" target="_blank">El proyecto Serval</a>.</p>

<p>Estas Guías de Interfaz Humana están destinados a unir a los desarrolladores y diseñadores para crear una experiencia de usuario consistente y accesible a través de las herramientas Commotion. Las personas que trabajan en el software Commotion deben adherirse a estas pautas y hacer sugerencias para su mejora, según sea necesario. Queremos Commotion sea accesible a una amplia población de usuarios de todo el mundo, y con un enfoque de diseño coordinado pueden facilitar la adopción generalizada.</p>

<p>Los estilos visuales que se ven a lo largo de estas directrices se basan en la Identidad de Marca Commotion, que fue creada en 2012 en colaboración con los primeros desarrolladores Commotion. La marca Commotion es fácil de usar, versátil y humanista para complementar la tecnología útil detrás de ella que en última instancia ayudará a que las personas se conectan entre sí. También es un espacio para adaptar la identidad de varias plataformas y aplicaciones de una manera creativa.</p>

<p>Gracias por ser parte del proyecto Commotion. En conjunto, la historia wes y la naturaleza de la plataforma,***********Together, wes history and the nature of the platform,********** la interfaz del router OpenWRT tenderán a tener el conjunto más robusto de características y servirán como punto de referencia para otras plataformas y sus interfaces. La interfaz Commotion extiende el sistema de configuración OpenWRT predeterminado mediante LuCI.</p>

<p>Para entender mejor la experiencia del usuario Commotion OpenWRT, considera cómo se establecería una red inalámbrica media pequeña comunitaria.</p>

<p>Ahora, considere cómo esta experiencia del usuario puede ser diferente para alguien que se una red existente con un teléfono móvil con el fin de acceder a un servicio en algún lugar de la red local.</p>

<p>(Véase <strong><a href="https://wiki.commotionwireless.net/doku.php/project_scope/use_case_development" target="_blank">Desarrollando un caso de uso</a></strong> para pistas en lluvias de ideas de escenarios de usuarios.)</p>

<p>Estas diferentes experiencias de usuario, por supuesto, requieren interfaces ligeramente diferentes. La instalación de cuatro routers en tejados vecinos requerirá diferentes herramientas que las de un amigo de visita que quiera iniciar sesión en la red y acceder a un servidor de archivos de la comunidad, pero ambos de estos usuarios deberían experimentar algunos elementos compartidos. Ambos de estos usuarios se encontrarán con el nombre del producto Commotion, y ambos aprenderán algunos términos clave. En el caso del vecino que esta instalando la red, gran parte de este aprendizaje va a suceder mientras leen a través de la documentación o utilicen la interfaz de configuración OpenWRT. Pasarán un poco de tiempo introduciendo configuraciones y familiarizándose con como se ve y se siente la interfaz.</p>

<p>En el caso de un visitante conectándose a la red, puede sólo entrar en contacto con el software Commotion por un breve momento cuando se conecte a un punto de acceso (nombrado) y haga clic a través de una página splash de portal cautivo con un logotipo Commotion y alguna información descriptiva. Estos son muy diferentes usos de Commotion, pero ambas situaciones deben dejar al usuario una impresión positiva y algunos conocimientos básicos sobre el proyecto: el nombre, el logotipo, y las maneras de obtener más información y obtener ayuda.</p>

<hr />
<h2>*****Maquetas de interfaz de usuario************User interface mockups*******</h2>

<p>Como parte del proceso de desarrollo Commotion, maquetas de interfaz de usuario fueron creadas***UI mockups were created****** por diseñadores en el Departamento de Trabajo para inspirar el diseño del software. Puedes ver esas <a href="http://www.flickr.com/photos/24639042@N07/sets/72157629570342842/with/6986293486/" target="_blank">ideas iniciales en Flickr</a>. Las primeras ideas se compartieron con la comunidad de Commotion para solicitar retroalimentación. Los ejemplos de Interfaz de Usuario (UI) a lo largo de estas guías han sido desde entonces refinados y aprobados por el equipo central de Commotion.</p>

<hr />
<h2>Construyendo Software Exitoso</h2>

<p>Los usuarios esperan fiabilidad a largo plazo, velocidad y facilidad de uso cuando usen dispositivos inalámbricos. La interfaz de usuario Commotion debería:</p>

<ol>
	<li>
	<p>Acompañar a un usuario a través del proceso de configuración.</p>
	</li>
	<li>
	<p>Trabajar bien a través de plataformas, navegadores y dispositivos.</p>
	</li>
	<li>
	<p>Ser tan rápido como cuando se usa un punto de acceso WiFi no-enmallado (non-mesh).</p>
	</li>
	<li>
	<p>Ayudar a los usuarios a entender la seguridad de las redes mesh.</p>
	</li>
	<li>
	<p>Permitir el monitoreo fácil del estado de la red en términos de que los usuarios puedan entender.</p>
	</li>
	<li>
	<p>Ofrecer sugerencias de solución de problemas cuando una red no funcione correctamente.</p>
	</li>
</ol>

<hr />
<h2>Construyendo una red de vecindario exitosa</h2>

<p>Construir una comunidad, ya sea en línea o fuera de línea, requiere organización social y cultural efectiva. Aprender y confiar juegan un rol clave en crear una red vecinal que pueda beneficiar una amplia gama de individuos. El software Commotion debería facilitar las interacciones humanas positivas que construyan una red social mientras construyen una red mesh.</p>

<p>Si una aplicación Commotion permite al usuario construir o mantener una red, se debe hacer referencia a la documentación relevante de Commotion con relación a la construcción y organización de redes vecinales. ************Puedes incluir algo de este contenido en línea en el software y algunos cómo enlaces a las fuentes en línea.*******You might include some of this content inline in the software and some as links to online sources.***********</p>

