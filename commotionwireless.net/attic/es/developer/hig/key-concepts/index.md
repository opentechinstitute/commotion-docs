---
layout: default
title: Conceptos Clave
site_section: developers
sub_section: hig
categories: 
created: 2012-06-25
changed: 2013-12-25
post_author: michael@theworkdept.com
lang: es
---
  <h2>Lenguaje común</h2>

<p>Una interfaz de usuario exitosa corriendo en múltiples dispositivos debe compartir un lenguaje apropiado, accesible y común. La siguiente lista de términos se debe utilizar en todas las aplicaciones Commotion. Algunos de ellos incluyen descripciones que se pueden incluir en la información de herramientas (tooltip) opcionales para el usuario que necesita más información. La terminología avanzada que requiere conocimiento previo importante para entenderse, se debe reservarse para el área avanzada de tu software.</p>

<ul>
	<li>Este lenguaje debe usarse cuando se incluye una corta descripción del proyecto:<br />
	<em>Commotion es una herramienta de comunicación de código abierto que usa dispositivos inalámbricos para crear redes mesh descentralizadas. Más en www.commotionwireless.net.</em><br />
	&nbsp;</li>
	<li>Este lenguaje debería ser agregado cuando tienes más espacio o en las páginas de “acerca”:<br />
	<em>El proyecto está siendo colaborativamente diseñado por el Instituto de Tecnología Abierta, el Departamento de Trabajo, El Proyecto Guardian, EL Proyecto Serval y voluntarios dentro de la comunidad.</em></li>
</ul>

<h2>Términos Comunes de la Interfaz de Usuario</h2>

<p>Muchos términos abajo se refieren a una definición. Una definición de un término debe ser incluida en la Interfaz de Usuario ya sea inline o como un tooltip pop-up********* the UI either inline or as a pop-up tooltip******* para poder ayudar a los usuarios principiantes a entender los conceptos básicos.</p>

<ol>
	<li><strong>Nombre de la Red Mesh</strong> (SSID)<br />
	(<em>Definición Inline:</em> Elige un nombre que tenga entre 5 y 12 caracteres. Debe de ser el mismo de entre los múltiples nodos.)<br />
	(<em>Pop-up tooltip:</em> El nombre público de una red inalámbrica. SSID es un acrónimo para Service Set Identifier, que se traduce en Set Identificador de Servicio.)<br />
	<img alt="SSID / mesh network name " src="/files/mesh_network_name.png" style="border-style:solid; border-width:1px; height:163px; margin-bottom:15px; margin-top:15px; width:552px" /></li>
	<li><strong>Nombre del Nodo</strong><br />
	(<em>Inline definition:</em> Nombre único que tenga entre 5 y 12 caracteres. Puedes usar números, letras &amp; caracteres especiales.)<br />
	(<em>Pop-up tooltip:</em> Each device connected to the mesh network has a unique name. This name helps you identify your device.)<br />
	<img alt="node name" src="/files/node_name.png" style="border-style:solid; border-width:1px; height:198px; margin-bottom:15px; margin-top:15px; width:552px" /></li>
	<li><strong>Channel</strong><br />
	(<em>Inline definition:</em> Cada nodo en la red debe usar el mismo canal.)<br />
	(<em>Pop-up tooltip:</em> La señal Wi-Fi del rango de 2.4 GHz se divide en 11 canales más pequeños en los Estados Unidos. Puedes elegir diferentes canales para evitar interferencia inalámbrica.)</li>
	<li><strong>Node</strong><br />
	(<em>Pop-up tooltip: </em>Un dispositivo individual en una red mesh.)</li>
	<li><strong>Cliente</strong><br />
	(<em>Pop-up tooltip:</em><em> </em>Un dispositivo Wi-Fi que temporalmente se conecta a la red mesh sin usar el software Commotion.)<br />
	<img alt="" src="/files/client.png" style="border-style:solid; border-width:1px; height:139px; margin-bottom:15px; margin-top:15px; width:596px" /></li>
	<li><strong>Únete a una red mesh</strong></li>
	<li><strong>Crea una red mesh</strong></li>
	<li><strong>Buscando redes...</strong></li>
	<li><strong>Uniéndose...</strong></li>
	<li><strong>Direcciones IP</strong></li>
	<li><strong>Velocidad actual</strong></li>
	<li><strong>Velocidad promedio</strong></li>
	<li><strong>Avanzado</strong></li>
	<li><strong>Ayuda</strong></li>
	<li><strong>Log</strong></li>
	<li><strong>Salir</strong></li>
</ol>

<h2 id="security">Seguridad, privacidad y anonimato</h2>

<p>Un reto importante en el desarrollo de Commotion es equilibrar la facilidad de uso y control sobre la funcionalidad. Diferentes usuarios querrán que Commotion sirva para diferentes propósitos, y nuestras opciones en características y diseño harán algunas cosas más fáciles y algunas cosas más difíciles. Desafortunadamente, no podemos hacer un paquete perfecto para todas las situaciones: tenemos que tener en claro las limitaciones inherentes a Commotion, especialmente en materia de seguridad, privacidad y anonimato. Estos tres conceptos están relacionados a través de su importancia para las comunidades y las personas con problemas de la "vida real", preocupaciones sobre opresión, vigilancia, y otros ataques.</p>

<p><strong>Advertencias</strong></p>

<p>Mientras que el Software Commotion no puede ser el único responsable para proveer una educación definitiva en estos temas, el software debería dejar en claro cualquier riesgo o beneficio de las aplicaciones que tiene que ver con seguridad, privacidad, o anonimato.</p>

<p>Cuando un usuario realiza una acción que podría afectar a su seguridad, privacidad o anonimato, deberían ver un mensaje de advertencia simple que los invita a conocer más al vincularse con documentación externa. He aquí un ejemplo de advertencia que podrían aparecer en una ventana pop-up después de que un usuario cambie el nombre de nodo. Debería incluir una casilla de "No me adviertas de nuevo" para deshabilitar esta advertencia en el futuro. La página web de Commotion debería ofrecer detalles sobre los posibles riesgos y las vulnerabilidades relacionadas con el uso de las herramientas en escenarios comunes.</p>

<p><img alt="" src="/files/security_0.png" style="height:392px; margin-bottom:0px; margin-top:0px; width:293px" /></p>

<p><strong>Seguridad</strong></p>

<p>En el contexto de Conmoción, deberías considerar la seguridad de la información de datos en una red, así como la seguridad física de las personas que utilizan la red. La seguridad de los datos involucra a la confianza, la tolerancia a fallos, y la integridad de las conexiones entre los nodos enmallados. La seguridad física se superpone con la privacidad de muchas maneras: ¿pueden las personas que han creado la red ser identificados con base en hardware visible o señales de radio detectables? Tenemos la responsabilidad y la capacidad de informar a los usuarios acerca de preocupaciones en cuanto a seguridad de la información, pero ¿cómo se introduce el tema de la seguridad física?</p>

<p>La documentación de Commotion debería explicar los conceptos de seguridad de redes inalámbricas y como las redes mesh y redes tradicionalmente-enrutadas con respecto a la seguridad. Esta documentación deberia ser referenciada durante la configuración inicial de la red.</p>

<p><strong>Privacidad y Anomimato</strong><br />
<br />
La documentación Commotion debería discutir claramente cualquier problema de privacidad y retención de datos. Cuando Commotion genera y retiene entradas, debería proveer opciones para hacer anónimos a los datos, periódicamente entradas claras, y deshabilitar logging.********* Si el software colecciona metadatos del dispositivo, debería alentar al usuario a permitir que esta información se divulgara por la red. Si la plataforma lo permite, el software Commotion debería permitir que se cambiaran las direcciones MAC a través de las configuraciones avanzadas.</p>

<p>En adición a las habilidades que Commotion puede ofrecer a nivel red, la documentación debe apuntar a los recursos de privacidad y anonimato sobre la capa de red mesh. Mientras que el software puede prevenir algunos ataques contra la privacidad y el anonimato, la documentación debería subrayar cualquier vulnerabilidad asociada con el análisis del tráfico y monitoreo de la radio.</p>

<p><a href="https://wiki.commotionwireless.net/doku.php/commotion_architecture/start" target="_blank">Lee más acerca de la Arquitectura de Seguridad Commotion.</a></p>

<h2>Pie de página común</h2>

<p>Un menú de pie de página común debería estar disponible en toda la Interfaz de Usuario. Esto asegura que los usuarios tengan acceso consistente a las funciones estándar del software todo el tiempo. Para aplicaciones basadas en la web y de escritorio, crea un pie de página común verde en la Interfaz de Usuario.</p>

<p>En Android, usa el menú nativo. Los iconos del menú pueden también ser colapsados al botón en Android de "action overflow" (desbordamiento de la acción)***********en la barra de navegación si es necesario.</p>

<p>Los iconos del menú son:</p>

<ol>
	<li><strong>Advanzado</strong> (Va a un menú de opciones avanzadas)</li>
	<li><strong>Ayuda</strong> (Va a un menú de opciones de ayuda)</li>
	<li><strong>Log***************Entrada</strong> (Va a un actividad de entrada********Goes to an activity log)</li>
	<li><strong>Salir</strong> (Finaliza todos los procesos de redes mesh y cierra la aplicación)</li>
</ol>

<p><img alt="" src="/files/HIG_24.png" style="border-style:solid; border-width:1px; height:159px; margin-bottom:15px; margin-top:15px; width:419px" /><br />
<img alt="" src="/files/HIG_25b.png" style="border-style:solid; border-width:1px; height:113px; margin-bottom:5px; margin-top:5px; width:419px" /></p>

<p>&nbsp;</p>
 
