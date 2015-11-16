---
layout: default
title: Configura Commotion
site_section: docs
sub_section: [cck,cck-installing]
pdf: cck/installing-configuring/CCK-Configure_Commotion.pdf
pdf-all: true
categories:
created: 2013-11-05
changed: 2014-09-17
post_author: critzo
lang: es
---

<p><img alt="Configure Commotion graphic" src="/files/CCK_Configure_intro_graphic.png" class="img-responsive" /></p>

<section id="introduction">
<h2>Introducción</h2>

<p>Este documento contiene instrucciones para configurar un nodo inalámbrico de Commotion a través del Asistente de Configuración Commotion y la interfaz de administración. Esta es una parte vital de desplegar y agregar nodos a la red inalámbrica comunitaria basada en Commotion, asegurándose que los nuevos nodos sean compatibles con la red. Si no has instalado Commotion en el router aún, ve los documentos de instalación en <a href="/docs/guides-howtos/">Las Gúias de Cómo-Se-Hace</a> antes de usar esta guía. Este documento incluye:</p>

<ol class="rteindent1">
	<li><a href="#Get-Ready-to-Run-Quickstart">Juntar la información que necesitas para configurar tus nodos</a></li>
	<li><a href="#Run-Quickstart">Ejecutar el Asistente de Configuración Commotion</a></li>
	<li><a href="#Access-Administration-interface">Accediendo la interfaz de administración de Commotion</a></li>
	<li><a href="#Configure-common-options">Configurando opciones de ajustes básicos en la interfaz de Administración de Commotion****************Setting basic configuration options in the Commotion administration interface</a></li>
	<li><a href="#Advanced-Commotion-mesh-settings">Ajustes de configuraciones avanzadas Commotion****************Advanced Commotion configuration settings</a></li>
	<li><a href="#Finish-Configuring">Una hoja de trabajo para ayudarte a recordar información importante de tus nodos y red, y una “prueba manual” para familiarizarte más con los ajustes de configuraciones importantes *********************** A worksheet to help you record important information about your nodes and network and a “hands-on test” to become more familiar with important configuration settings</a></li>
</ol>

<p>Configurar los Router debería tomarte 30 minutos o menos.</p>
</section>

<section id="materials-and-supplies-needed">
<h3>Materials + Supplies Needed</h3>

<ol>
    <li>Un router con Commotion instalado, conectado al puerto Ethernet de tu computadora.</li>
    <li>Una copia de la hoja de trabajo <a href="/files/cck/installing-configuring/2.2-CCK-Installing-ConfigureRouters_worksheet.pdf">disponible</a> al final de este documento, para llevar un registro de tus ajustes.</li>
    <li>(Opcional) Una copia impresa o fuera de línea del nodo **************
A printed or off-line copy of the node <a href="/files/CCK_ConfigureRouters_Hands-on_0.pdf">hands-on test*********prueba manual</a> localizado al final de este documento.</li>
</ol>

</section>

<section id="Get-Ready-to-Run-Quickstart">
<h2>Prepárate para Ejecutar el Asistente de Configuración Commotion</h2>

<p>Si el nuevo nodo se uniría a una red existente, primero junta los ajustes de esa red antes de ejecutar el Asistente de Configuración Commotion en el router. Necesitarás por lo menos el nombre de la red mesh, el canal inalámbrico y la contraseña encriptada de la red mesh, si la mesh está encriptada. Luego comienza con la primera sección: Red Existente  ****************** If the new node will join an existing network, first gather that network’s settings before you run the Commotion Setup Wizard on the router. You will need at least the mesh network name, wireless channel and the mesh encrytion password, if the mesh is encrypted. Then begin with the first section: Existing Network.</p>

<p>Si estás comenzando una nueva red, necesitas tomar algunas decisiones con tu comunidad antes de ejecutar el Asistente de Configuración Commotion, así que ve a la parte de Nueva Red.</p>

<h3>Red Existente</h3>

<p>Habla con un organizador de la red para obtener la siguiente información:</p>

<p>1. Nombre de la Red Mesh (SSID), Canal WiFi, y la Contraseña Mesh Encriptada************Mesh Encryption Password (si se usa).<br />
<br />
2. Configuraciones del Punto de Acceso:</p>

<ul>
	<li>¿Usan contraseña los Puntos de Acceso?</li>
	<li>Si es así, cada nodo usa su propia contraseña, o hay una contraseña compartida entre todos los nodos?</li>
	<li>¿Hay un sistema para generar/compartir las contraseñas?</li>
</ul>

<p>3. Nombramiento de los nodos – ¿La red tiene una forma de nombrar a los nodos, o tu puedes nombrarlos como quieras?</p>

<p>4. Administración de la contraseña – ¿es compartida a lo largo de la red, o tu puedes configurar tus propias contraseñas? Ve a Ejecutar el Asistente de Configuración Commotion.</p>

<h3>Nueva Red</h3>

<p>Primero, necesitas decidir información básica de la red. Decídelo con tu comunidad:</p>

<ul>
	<li>¿Cómo vas a nombrar a la red y los nodos?</li>
	<li>¿Cómo vas a nombrar tus Puntos de Acceso? ¿Van a ser seguros o abiertos?</li>
	<li>¿Cómo vas a crear y almacenar las contraseñas (admin, mesh link, y quizá Puntos de Acceso)? *******************************How will you create and store passwords (admin, mesh link, and maybe AP)?</li>
</ul>

<p>Avanza a Ejecutar el Asistente de Configuración Commotion después de decidir cómo se configurarán las contraseñas, y cómo se nombrarán los nodos.</p>
</section>

<section id="Run-Quickstart">
<h2>Ejecuta el Asistente de Configuración Commotion</h2>

<p>El Asistente de Configuración Commotion te lleva a través de los pasos básicos para configurar tu router como un nodo mesh.</p>

<p>Antes de empezar, necesitarás conectar la conexión Ethernet de tu computadora al nodo recientemente flasheado. El nodo te dará el lease DHCP de tu computadora. Es buena idea apagar el wireless te tu computadora también. Luego ve a la URL <strong>http://thisnode</strong> en tu navegador.</p>

<p>Asegúrate de registrar toda la información que has ingresado durante el uso del Asistente de Configuración Commotion:</p>

<ul>
	<li>Nombre del Nodo</li>
	<li>Contraseña de Administración</li>
	<li>Contraseña Mesh Encriptada</li>
	<li>Contraseña de Puntos de Acceso (si instalas una).</li>
</ul>

<p>¡No compartas las contraseñas o información con nadie, a menos que confíes en ellos con la red!</p>

<p><strong>1.</strong> Ejecuta el Asistente de Configuración Commotion dando clic en la imágen etiquetada <strong>Asiste de COnfiguración</strong>:</p>
<p><img src="/files/CCK-Configure_setup_wizard1.png" class="img-responsive" /></p>
<p class="tip">&nbsp; Al dar clic en el botón de Avanzado se deshabilitará el Asistente de Configuración Commotion para permitir configurar tu nodo manualmente.</p>

<p><strong>2.</strong> Usa la información que reuniste o decidiste llenar en los campos del Asistente de Configuración de Commotion. El Asistente de Configuración tiene cuatro páginas requeridas y una página opcional. Los valores que entres se guardarán mientras navegas entre las páginas, y se aplican a la página de Confirmación de la Configuración.</p>

<p><strong>Asistente de Configuración, página 1 – configuraciones del Nodo</strong></p>
<p><img src="/files/CCK-Configure_setup_wizard2.png" class="img-responsive" /></p>
<p>Ingresa el Nombre del Nodo y la Contraseña de Administración.</p>

<p><strong>Asistente de Configuración, página 2 – Configuraciones de la Red</strong><p>
<p><img src="/files/CCK-Configure_setup_wizard3.png" class="img-responsive" /></p>
<p>Ingresa el Nombre de la Red Mesh y selecciona el canal. Si tu red mesh debe encritpar el tráfico entre los dispositivos mesh, elije la caja apropiada e ingresa la  Contraseña Mesh Encriptada************** Mesh Encryption Password.</p>

<p><strong> Asistente de Configuración, página 3 – Red inalámbrica</strong></p>
<p><img src="/files/CCK-Configure_setup_wizard4.png" class="img-responsive" /></p>
<p>Si lo deseas, configura un Punto de Acceso, para proveer acceso inalámbrico a la red a través de este nodo. Ingresa el Nombre del Punto de Acceso y proporciona una Contraseña que las personas necesitarían para conectarse.</p>
<p><strong>Nota:</strong> Si configuras un Punto de Acceso al nodo, <strong>must</strong> usa el mismo canal como la red Mesh.</p>

<p><strong> Asistente de Configuración, página 4 – Configuración completa</strong></p>
<p><img src="/files/CCK-Configure_setup_wizard5.png" class="img-responsive" /></p>
<p>Ahora has completado todos los pasos requeridos para configurar tu nodo mesh.</p>

<ul>
	<li>Si terminaste, da clic en Terminar para revisar y aplicar tus configuraciones.</li>
	<li>Si quieres empezar de nuevo, da clic en Reiniciar.</li>
</ul>

<p>Opcional, si quieres configurar opciones adicionales de como se comporta el puerto conectado WAN (Ethernet), ve a las opciones de <a href="#Advanced-Commotion-mesh-settings">Configuraciones Avanzadas</a> debajo.</p>

<p><strong>Asistente de Configuración – Confirma las configuraciones</strong></p>
<p><img src="/files/CCK-Configure_setup_wizard6.png" class="img-responsive" /></p>
<p>Revisa las configuraciones, luego navega hacia abajo y da clic en *********** Skim through the settings, then scroll down and hit <strong>Guardar y Aplicar</strong>:</p>
<p><img src="/files/CCK-Configure_setup_wizard7.png" class="img-responsive" /></p>

<p><strong>3.</strong> Cuando termines con el Asistente de Configuración Commotion, el nodo se reiniciara. Esto tomará algunos minutos - sé paciente.<strong> </strong>Cuando el nodo comience de nuevo, automáticamente se conectará a otros nodos mesh en el área con información  correspondiente de los links mesh. **************When the node starts up again, it will automatically connect to other mesh nodes in the area with matching mesh link information.
</section>

<section id="Access-Administration-interface">
<h2>Interfaz de Administración de Acceso</h2>

<p>Ahora, entra a las páginas del Administrador de configuración. Después del Asistente de Configuración Commotion, tu navegador debería llevarte a la página de administración automáticamente. Si no lo hace, escribe <strong>thisnode/</strong> en la barra URL de tu navegador y presiona “Enter”. Ahora da clic en el <strong>Administration</strong> botón al final de la página.</p>

<p class="tip">&nbsp;Ahora estarás haciendo una conexión segura a tu nodo (nota el "https" en la barra de direcciones de tu navegador -- s es por segura). Encontrarás un certificado de advertencia aquí porque el certificado del nodo que se usó para crear la conexión segura no fue firmado por una “autoridad certificada” y entonces el navegador no puede verificar la identidad del nodo. Deberías tener cuidado cuando veas estas advertencias, porque a menudo significan que tu conexión segura a un sitio web puede ser insegura, pero en este caso simplemente significa que el certificado del nodo fue auto-firmado.<br/><br/>

<!--**************Tal vez quieras registrar la “huella digital” del certofocadp del nodo, que es una red identificada únicamente. Al escribir esta huella digital, puedes verificar en el futuro si el nodo está presentando el mismo certificado, y por tanto si tu conexión es segura. Puedes checar nuestro navegador-específico****************You may want to record the "fingerprint" of the node's certificate, which is a uniquely identifying string. By writing down this fingerprint, you can verify in the future that the node is presenting the same certificate, and thus your connection is secure. You can check our browser-specific*********** <a href="/docs/cck/installing-configuring/certificate-verification">certificate verification instructions</a> ************para encontrar la huella digital del certificado *************to find the certificate's fingerprint.**********<br/><br/>-->

Al entender porqué tuviste esta advertencia, ahora puedes aceptar el certificado auto-firmado para continuar.<br/><br/>
<img src="/files/CCK-Configure_cert_warning.png" style="max-width:510px;" /></p>

<p>Se te alentará a tener un nombre de usuario y contraseña. El nombre de usuario de administración es siempre “raíz” - ingrésalo si es necesario. Tu configuras la contraseña de administrador durante el uso del Asistente de Configuración Commotion, ingrésalo y presiona el botón de “Inicio de Sesión”.</p>

<p><img src="/files/CCK-Configure_administrator_login.png" class="img-responsive" /></p>
<p>&nbsp;</p>

</section>

<section id="Configure-common-options">
<h3>Configura Opciones Comunes</h3>

<p>Las opciones básicas para tu nodo se configuraron durante el uso del Asistente de Configuración Commotion, pero puede que quieras saber como cambiar las configuraciones.</p>

<p>Las páginas administrativas de Commotion tienen dos despliegues: Configuraciones Básicas y Avanzadas. <strong>Alterna entre los modos Básico y Avanzado usando el botón del fondo del menú azul.</strong> Cambiar las configuraciones más comunes estará en las Configuraciones Básicas y algunas configuraciones se cambiarán en el menú de Avanzadas.</p>

<p>Abajo hay una lista de configuraciones comúnmente cambiadas y cómo cambiarlas. Da clic abajo y desplazate hacia abajo.</p>

<ul>
	<li><a href="#admin-password">Cambiando la Contraseña de Administrador</a></li>
	<li><a href="#change-hostname">Cambiando el Hostname*************Changing the Hostname</a></li>
	<li><a href="#mesh-settings">Cambiando las configuraciones de las conexiones mesh</a></li>
	<li><a href="#ap-information">Cambiando la Información del Punto de Acceso</a></li>
	<li><a href="#splash-page">Cambiando la Información de la Página de Bienvenida</a></li>
	<li><a href="#bandwidth-qos">Configurando los Límites de Banda Ancha y las Configuraciones de los Servicios</a></li>
	<li><a href="#get-mesh-ip">Cómo obtener tu dirección IP enmallada del nodo</a></li>
	<li><a href="#see-mesh-connections">Ver las conexiones de las redes mesh</a></li>
	<li><a href="#set-gateway-node">Configurando un nodo de Puerta de Acceso</a></li>
	<li><a href="#upgrading-commotion">Actualizando a un nuevo software Commotion</a></li>
</ul>
<p>&nbsp;</p>

<h3 id="admin-password">Cambiando la Contraseña de Administrador</h3>

<p>Esta contraseña es para el administrador “raíz” en el sistema, y se requiere para acceder a la interfaz de Administración y para cambiar cualquier otra configuración. Configuras esto durante el Asistente de Configuración.</p>

<ol class="rteindent1">
	<li>Navega a <strong>Configuraciones Básicas -> Seguridad -> Contraseñas</strong>.</li>
	<li>Ingresa la contraseña de Administración existente en el campo arriba de la página etiquetada "Contraseña Actual".</li>
</ol>
<p><img src="/files/CCK-Configure_current_administrator_password.png" class="img-responsive" /></p>
<ol start="3">
	<li>Bajo la sección de “Contraseña de Administración”, ingresa la nueva contraseña en ambos campos “Contraseña” y “Confirmación”.</li>
</ol>
<p><img src="/files/CCK-Configure_administrator_password.png" class="img-responsive" /></p>
<ol start="4">
	<li>Desplázate al fondo de la página y haz clic en “Guardar &amp; Aplicar”.</li>
	<li>Espera que el sistema se actualice. Esto puede tomar hasta dos minutos, ¡sé paciente!</li>
</ol>
<p>&nbsp;</p>

<h3 id="change-hostname">Cambiando el Hostname*************Changing the Hostname
Changing the Hostname</h3>

<p>Esto cambia la identificación del sistema del nodo en la red, no el nombre del Punto de Acceso.</p>

<p class="tip">&nbsp;Asegúrate de no re-usar o duplicar hostnames,********** ¡puede causar problemas!&nbsp;</p>

<ol class="rteindent1">
	<li>Navega hacia <strong>Configuraciones Básicas</strong> -&gt;<strong> Configuraciones de Nodos</strong>.</li>
	<li>Bajo la sección de “Propiedades del Sistema”, ingresa el nuevo nombre para el nodo en el campo “Hostame”.************************</li>
	<li>Desplázate al fondo de la página, da clic en “Guardar &amp; Aplicar”.</li>
	<li>Espera a que el sistema se actualice.</li>
</ol>

<p><img src="/files/basic_config1_0.png" class="img-responsive" /></p>
<p>&nbsp;</p>

<h3 id="mesh-settings">Cambiando las configuraciones mesh</h3>

<p>Puedes cambiar las configuraciones de las ligas mesh en cualquier momento. Podrías hacer esto para crear una red separada, para cambiar el nombre de la conexión mesh, o para cambiar la llave encriptada mesh.</p>

<ol class="rteindent1">
	<li>Navega a <strong>Configuraciones Básicas -&gt; Configuraciones de Red -&gt; Red Mesh</strong></li>
	<li>Selecciona el canal Wi-Fi que tu red usará: ya sea un “Canal de 2GHz” o un “Canal de 5GHz” dependiendo de las capacidades de tu nodo inalámbrico. Este canal debe de ser el mismo a través de toda la red.</li>
	<li>En el cambio “Mesh SSID”, ingresa el nombre de tu red. Este nombre debe de ser el mismo para cada nodo en la red.</li>
</ol>
<p class="tip">&nbsp;Si estás cambiando las configuraciones de los link mesh, esto romperá las conexiones mesh existentes. ¡Recuerda que todas las configuraciones (nombre de la mesh, canal Wi-Fi, y contraseña encriptada) debe igualar los nodos para que se enmallen!*************** If you are changing mesh link settings, this will break existing mesh connections. Remember that all settings (mesh name, Wi-Fi channel, and encryption password) must match for nodes to mesh!</p>
<p>&nbsp;</p>

<h3 id="ap-information">Cambiando la Información del Punto de Acceso</h3>

<p>Hay tres configuraciones comunes para el Punto de Acceso en un nodo Commotion: ya sea que el Punto de Acceso esté prendido o apagado, el nombre del Punto de Acceso (SSID), y la seguridad (ya sea que el Punto de Acceso esté protegido con una contraseña, y si es así, la contraseña).**********************There are three common settings for the Access Point (AP) on a Commotion node: whether the Access Point is on or off, the name of the AP (SSID), and the security (whether the AP is password-protected, and if so, the password).</p>

<p class="tip">&nbsp; Asegúrate de registrar estas configuraciones, en caso de que las necesites después.</p>

<p>Puedes cambiar la mayoría de las configuraciones del Punto de Acceso en el menú de Configuraciones Básicas<strong>:</strong></p>

<ul>
	<li>Nombre del Punto de Acceso</li>
	<li>Prende o apaga la contraseña</li>
	<li>Configura o cambia la contraseña para el Punto de Acceso</li>
	<li>Agrega o Borra un Punto de Acceso</li>
</ul>

<p>Navega a <strong>Configuraciones Básicas -&gt; Configuraciones de REd -&gt; Red Inalámbrica</strong> para configuraciones del Menú Básico.</p>

<p>Adicionalmente en los menús avanzados puedes:</p>

<ul>
	<li>Habilitar/Deshabilitar un Punto de Acceso existente</li>
	<li>También configura los ajustes arriba</li>
</ul>

<p>Navega a <strong>Avanzado -&gt; Network -&gt; WiFi&nbsp; </strong>para el menú de configuraciones Avanzadas.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__730 img__view_mode__media_original attr__format__media_original" height="262" src="/files/network_wireless_settings1.png" typeof="foaf:Image" width="600" /></p>

<p><strong>Para cambiar el nombre del Punto de Acceso:</strong></p>

<ol>
	<li><strong>&nbsp;&nbsp;&nbsp;</strong> Bajo la sección “Punto de Acceso”, ingresa un nuevo nombre en el campo de “Nombre”.</li>
	<li>&nbsp;&nbsp;&nbsp; Desplázate al fondo de la página, da clic en “Guardar &amp; Aplicar”.</li>
	<li>&nbsp;&nbsp;&nbsp; Espera que el sistema se actualice. (Si estás conectado al nodo inalámbricamente, te necesitarás reconectar al nuevo Nombre).</li>
</ol>

<p><strong>Para poner una contraseña para el Punto de Acceso:</strong></p>

<ol>
	<li>&nbsp;&nbsp;&nbsp; En la sección “Punto de Acceso”, marca la caja bajo “Requiere una Contraseña".</li>
	<li>&nbsp;&nbsp;&nbsp; En el campo de “Contraseña”, ingresa la contraseña que quieres para este Punto de Acceso.</li>
	<li>&nbsp;&nbsp;&nbsp; Desplázate al fondo de la página, da clic en “Guardar &amp; Aplicar”.</li>
	<li>&nbsp;&nbsp;&nbsp; Espera a que el sistema se actualice.</li>
</ol>

<p><strong>Para apagar una contraseña para el Punto de Acceso:</strong></p>

<ol>
	<li>&nbsp;&nbsp;&nbsp; En la sección “Punto de Acceso”, quit ala marca de la caja bajo “Requiere una Contraseña".</li>
	<li>&nbsp;&nbsp;&nbsp; Desplázate al fondo de la página, da clic en “Guardar &amp; Aplicar”.</li>
	<li>&nbsp;&nbsp;&nbsp; Espera a que el sistema se actualice.</li>
</ol>

<p><strong>Para borrar un Punto de Acceso:</strong></p>

<ol>
	<li>&nbsp; Encuentra la sección del Punto de Acceso y da clic en el botón de "Borrar".</li>
</ol>

<p><strong>Para agregar un nuevo Punto de Acceso:</strong></p>

<ol>
	<li>&nbsp; Desplázate al fondo de la página y da clic en "Agregar"</li>
</ol>

<p><strong>Para prender o apagar un Punto de Acceso:</strong></p>

<ol>
	<li>&nbsp;&nbsp;&nbsp; Navega a Redes -&gt; WiFi -&gt; Avanzadas ********Navigate to Advanced -&gt; Network -&gt; WiFi </li>
	<li>&nbsp;&nbsp;&nbsp; Mira bajo “Wireless Overview” para el Nombre de la Red (SSID):******************* Look under “Wireless Overview” for the Network Name (SSID):
	<ul>
		<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Si el Punto de Acceso está habilitado, esta prendido. Para apagarlo, da clic en “Deshabilitar”.</li>
		<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Si el Punto de Acceso actualmente está deshabilitado, está apagado. Para prenderlo, da clic en “Habilitar”.</li>
	</ul>
	</li>
</ol>

<p><strong>&nbsp;Esto puede causar que el nodo se vuelva inestable. Reiniciar el dispositivo después de cambiar esta función debería ayudar a prevenir problemas.</strong></p>

<p><img src="/files/network_wireless_settings1.1.png" class="img-responsive" /></p>

<h3 id="splash-page">Cambiando la Página de Información de la Página de Bienvenida</h3>

<p>Cuando los usuarios se conectan al Punto de Acceso, pueden ser dirigidos a una Página de Bienvenida (también llamada página splash o portal captivo). Puedes prender o apagar esto, personalizar el texto en la pantalla, y configurar el número de horas antes de que un usuario tenga que re-aceptar los términos de la Página de Bienvenida.</p>

<p class="tip">Si no hay Puerta de Acceso (por ejemplo, no Internet, solo una intranet local) en la red, no habrá página de Bienvenida.</p>

<p>Primero, navega a <strong>Configuraciones Básicas -&gt; Controles de Clientes -&gt; Página de Bienvenida</strong></p>

<p><strong>Para cambiar el texto desplegado en la página de Bienvenida:</strong></p>

<ol class="rteindent1">
	<li>Da clic en “Editar el textod e la Página de Bienvenida”, en la parte de arriba de la página</li>
	<li>Cambia el código HTML en el campo largo de texto para desplegar la información que quieres como un nombre de red o contactos.</li>
	<li>Desplázate al fondo de la página, da clic en “Enviar”.</li>
	<li>Espera a que el sistema se actualice.</li>
</ol>

<p>También puedes dar clic en “Subir” para subir un archivo HTML de tu computadora para usar como texto de la Página de Bienvenida.</p>

<p><strong>Para cambiar el tiempo antes de que un usuario se deba re-conectar vía la Página de Bienvenida:</strong></p>

<ol class="rteindent1">
	<li>Primero, selecciona el incremento de tiempo que quieras usar en el menú que se arrastra hacia abajo.****************** Se recomienda en “Horas”.</li>
	<li>Después, ingresa el número de horas (o días, si seleccionaste ese incremento) en la caja de texto.</li>
	<li>Desplázate al fondo de la página, da clic en “Guardar &amp; Aplicar”.</li>
	<li>Espera a que el sistema se actualice.</li>
</ol>

<p><img src="/files/client_controls1.1.png" style="max-width=600px;" /></p>

<p><strong>Para prender o apagar la página de Bienvenida:</strong></p>

<ol>
	<li>Para prender o apagar la página de Bienvenida al selecciona/quita la selección de la caja arriba de esta página. *****************Turn the Welcome page on or off by selecting/deselecting the checkbox at the top of this page.</li>
	<li>Desplázate al fondo de la página, da clic “Guardar &amp; Aplicar”.</li>
	<li>Espera a que el sistema se actualice.</li>
</ol>

<p><img src="/files/client_controls1.png" class="img-responsive" /></p>

<h3 id="bandwidth-qos">Configurando los Límites de la Banda Ancha y las configuraciones de la Calidad del Servicio</h3>

<p>Si estás hospedando un nodo de Puerta de Acceso (compartiendo el Internet con el resto de la red), puedes limitar el total de banda ancha permitido para el resto de la red, usando Calidad del Servico (Quality of Service, QoS).</p>

<p><img src="/files/adv_qos1.png" /></p>

<ol class="rteindent1">
	<li>Navega a <strong>Red -&gt;Avanzada -&gt; QoS</strong>.</li>
	<li>Selecciona las cajas de “Permitir” y “Calcular los Gastos”.*********************Select the “Enable” and “Calculate Overhead” checkboxes.</li>
	<li>En el campo de “Descargar Velocidad”, ingresa el toral de banda ancha de descarga a entregar a la red mesh (en kilobits por segundo-para aproximadamente 5Mbps, ingresa 5000).</li>
	<li>En el campo de “Subir Velocidad”, ingresa el total de banda ancha de carga a entregar a la red mesh (en kilobits por segundo-para aproximadamente 1 Mbps, ingresa 1000).</li>
	<li>Desplázate al fondo de la página, da clic en “Guardar &amp; Aplicar”.</li>
	<li>Espera a que el sistema se actualice.</li>
</ol>

<h3 id="get-mesh-ip">Cómo obtener tu dirección IP enmallada del nodo</h3>

<p>Es importante anotar la dirección IP enmallada para tu nodo.</p>

<ol class="rteindent1">
	<li>Navega a la <strong>Status</strong> página.</li>
	<li>La dirección IP enmallada está desplegada en la barrá de menú de arriba a la derecha.</li>
</ol>

<h3 id="see-mesh-connections">Ve conexiones en la red mesh</h3>
<p>Puedes ver si el nodo se ha conectado exitosamente a otros nodos mesh al verlos con el visualizador mesh.</p>
<p><img src="/files/styles/large/public/CCK_ConfigureRouters_oslrviz.png" /></p>
<p>Navega a la página <strong>Estatus</strong> y da clic en <strong>Dispositivos Mesh Cercanos</strong>.</p>
<p>&nbsp;</p>

<h3 id="set-gateway-node">Configurando un nodo de Puerta de Acceso</h3>

<p>Si quiers compartir tu ancho de banda con la red, puedes convertir tu nodo en una Puerta de Acceso. Quizá quieras terminar otra configuración antes de completar estos paso, como la de Calidad de Servicio, arriba.</p>

<ol class="rteindent1">
	<li>Conecta el puerto LAN al poder sobre el adaptador Ethernet en tu router o modem con conexión a Internet.</li>
	<li>Navega a <strong>Reinicia -&gt; Sistema -&gt; Avanzado</strong>&nbsp;para reiniciar el nodo.</li>
	<li>Da clic en “Realizar Reinicio” y espera a que el nodo se reinicie.</li>
	<li>Automáticamente se configurará a sí mismo como Puerta de Acceso y proporcionará ancho de banda a la red cuando esté de nuevo en línea.</li>
	<li>Navega a la página de Estatus. Si este nodo está proporcionando una Puerta de Acceso, se indicará aquí en la barra del menú de arriba. Detalles adicionales se pueden encontrar en <strong>Estatus -&gt; Avanzado -&gt; OLSR</strong></li>
</ol>
<p>&nbsp;</p>

<h3 id="upgrading-commotion">Actualizando a nuevo software Commotion</h3>

<p>Ocasionalmente hay nuevas versiones del software Commotion Wireless, disponibles en la <a href="/download/">Página de Descargas</a>. Por favor descarga la versión "sysupgrade" y sigue estas instrucciones.</p>

<p class="tip">&nbsp;Lee la página<a href="/download/verify-signatures">Verificando Firmas</a> page para mayor información en asegurarte que tengas imágenes reales de Commotion.</p>

<p>Asegúrate de registrar las configuraciones de tu nodo y red para que puedas re-ingresarlas cuando ejecutes el Asistente de Configuración en la nueva versión Commotion.</p>

<ol class="rteindent1">
	<li>Navega a <strong>Respaldo -&gt; Avanzado -&gt; de Sistema / Flash Firmware</strong>.</li>
	<li>Si estás actualizando de un Pre-Lanzamiento (PR2, PR2.1) o verión de Lanzamiento Desarrollador (DR1, DR2), quita la selección de la opción “Mantén las Configuraciones” bajo la sección “Flash New Firmware Image”************.</li>
	<li>Para actualizar el nuevo software, da dlick en el campo rectangular de abajo, y selecciona el archivo que descargaste. Da clic en ************“Flash Image...”.</li>
	<li>En la página que sigue, espera a que el archivo se actualice, luego de clic en “Proceder”.</li>
	<li>Espera a que el sistema se actualice.</li>
</ol>

<p><img src="/files/styles/large/public/adv_upgrade1.png" class="img-responsive" /></p>
</section>

<section id="Advanced-Commotion-mesh-settings">
<h2>Configuraciones Avanzadas de mesh Commotion</h2>

<h3>Configuraciones de Interfaz WAN</h3>

<p>En el menú <strong>Configuraciones Básicas,</strong> bajo <strong>COnfiguraciones de Red -> Interfaces de Red Adicionales</strong>, hay opciones adicionales para configurar como se comporta una interfaz WAN (el puerto Ethernet que está normalmente conectada a un router o switch con una conexión al Internet). En muchos dispositivos, tales Puntos de Acceso dedicados o dispositivos de cleintes como series Ubiquiti PicoStation o NanoStation, puede haber solo un puerto Ethernet. En dispositivos con múltiples puertos switch, esto configurará solo el puerto WAN.</p>

<p class="cck-content-container"><img src="/files/CCK-Configure_additional_network_interfaces.png" class="img-responsive" />

<ul>
	<li>Si quieres que Commotion auto-configure tu conexión cableada, selecciona <em>Configura la Puerta de Acceso en el arranque automáticamente</em></li>
	<li>Si a este nodo siempre se le debe de dar un DHCP lease para otro router o modem, selecciona**************************** If this node should always be given a DHCP lease from another router or modem, select <em>Este dispositivo debería SIEMPRE intentar y adquirir DHCP lease*********** and acquire a DHCP lease</em></li>
	<li>Si quisieras que este nodo siempre proporcionara DHCP leases en el puerto Ethernet conectado, selecciona ************If you would like this node to always provide DHCP leases on the wired Ethernet port, select****** <em>Este dispositivo SIEMPRE debería proporcionar DHCP leases a los clientes***************This device should ALWAYS provide DHCP leases to clients***********</em></li>
	<li>Si el nodo no debería recibir o proporcionar DHCP leases********* en el puerto Ethernet, selecciona <em>Este dispositivo no debería hacer nada con DHCP</em></li>
</ul>
<p>Después de cambiar esta configuración, necesitarás dar clic en "Guardar", luego confirma el cambio. Se recomienda reiniciar el nodo después de cambiar estas configuraciones.</p>
<p>&nbsp;</p>

<h3>Abriendo la red para Administración remota</h3>

<p>Por defecto, Commotion previene el acceso a la interfaz de la administración de la web de un puerto Ethernet de un nodo, porque a veces este puerto se conectará directamente a Internet. Prevenir acceso al portal de administración del Internet ayuda a prevenir que los intrusos indeseados lejos dañen el nodo y otras partes de la red.</p>

<p>No obstante, en algunas configuraciones avanzadas, necesitarás acceder a la interfaz web de administración sobre el puerto Ethernet de un nodo. Esto puede ser el caso si el nodo está configurado para enmallarse sobre Ethernet, o cuando el nodo está adjuntando a un switch Ethernet común con otros nodos.</p>

<p>Si este es el caso, puedes añadir una regla al firewall del nodo para acceder al portal de administración sobre la interfaz Ethernet del nodo. Comenzarás por conectarte al punto de acceso inalámbrico del nodo, y al ir a
<a href="http://thisnode">http://thisnode</a> en tu navegador.</p>

<ol class="rteindent1">
    <li>Da clic en el botón de Administración al fondo de la página.</li>
    <li>Ve a <strong>Advanzado -> Red -> Firewall</strong>.</li>
    <li>En la parte de arriba de la página, da clic en “Reglas de Tráfico" tab.</li>
</ol>
<p><img src="/files/CCK_ConfigureRouters_Firewall1.png" class="img-responsive" /></p>
<ol class="rteindent1" start="4">
    <li>Bajo la sección "Abre los puertos en el router", encontrarás los siguientes valores:</li>
    <ol type="a">
	<li>Nombre: "Interfaz Admin"</li>
	<li>Protocolo: "TCP"</li>
	<li>Puerto Externo: 443</li>
    </ol>
    <li>Da clic en el botón de "Agregar" al lado de los campos que acabas de llenar.</li>
</ol>
<p><img src="/files/CCK_ConfigureRouters_Firewall2.png" class="img-responsive" /></p>
<ol class="rteindent1" start="6">
    <li>Da clic en “Guardar & Aplicar” al fondo de la página.</li>
</ol>

<p>Después de dar clic en “Guardar & Aplicar”, los cambios se harán y verás la nueva entrada en las reglas del Firewall:
<p><img src="/files/CCK_ConfigureRouters_Firewall3.png" class="img-responsive" /></p>

<p>El nodo con esta configuración debería ahora permitir el acceso al panel de Administración de cualquier computadora conectada al puerto WAN (Ethernet).</p>
<p>&nbsp;</p>
</section>

<section id="Finish-Configuring">
<h2>Terminando</h2>

<p>Cuando termines de configurar, desconecta el cable Ethernet de la computadora. Si quieres ser anfitrión de una Puerta de Acceso (compartir el Internet con la red mesh), conecta el nodo Commotion en tu modem o router de Puerta de Acceso, y reinicia el nodo.</p>

<p>Para mayor información en varios tipos de configuraciones de hardware, por favor ve <a href="/docs/cck/installing-configuring/common-hardware-setups/">Configuraciones de Hardware Comunes</a>. Para configuraciones más complicadas de hardware, ve <a href="/docs/cck/installing-configuring/advanced-hardware-setups/">Configuraciones Avanzadas de Hardware</a>.</p>

<p>Si estás teniendo problemas con tu nodo o configuración Commotion, ve <a href="/docs/cck/installing-configuring/troubleshoot-your-wireless-node/">Solución de Problemas de tu nodo Wireless</a>.</p>
</section>

<section id="Check-your-understanding">
<h2>Revisa tu entendimiento</h2>

<p>Esta es una prueba manual que puedes usar para explorar cualquier interfaz de administrador de nodo Commotion.*************** This is a short hands-on test you can use to explore any Commotion node’s administrator interface. Completar esta prueba no se requiere para configurar un nodo en la red, pero puede ayudarte a encontrar información importante que los administradores de red necesitan para mantener la red funcionando apropiadamente. Si estás configurando varios nodos con otras personas, todos pueden explorar estos detalles si corren su nodo a través de esta prueba, y llenan las respuestas.</p>

<p><a href="/files/cck/installing-configuring/2.1-CCK-Installing-ConfigureRouters_Hands-on.pdf"><img  src="/files/styles/large/public/CCK_ConfigureRouters_handson.png?itok=EyeqjNQ_" class="img-responsive" typeof="foaf:Image" /></a></p>
</section>

<section id="Record-important-information">
<h2>Registra la información importante</h2>

<p>Mientras checas y cambias estas configuraciones, asegúrate de registrar de forma segura la información. Puedes usar esa hoja de trabajo si te es útil.</p>

<p><a href="/files/cck/installing-configuring/2.2-CCK-Installing-ConfigureRouters_worksheet.pdf"><img alt="" class="img-responsive" src="/files/styles/large/public/CCK_ConfigureRouters_Installworksheet.png?itok=HBI0JETU" typeof="foaf:Image" /></a></p>
</section>

<section id="section-definitions">
<h2>Definiciones</h2>

<dl>
	<dt>PA Punto de Acceso (Access Point, AP):</dt>
	<dd>Este es un dispositivo que permite a los clientes inalámbricos, como laptops, o teléfonos inteligentes, que se conecten a una red usando Wi-Fi.</dd>
	<dt>BSSID (Basic Service Set Identifier)**********:</dt>
	<dd>La dirección usada para identificar una red mesh específica. Se usa por el dispositivo link mesh inalámbrico.*************** It is used by the wireless mesh link device.</dd>
	<dt>Puerta de Acceso:</dt>
	<dd>Una conexión a otra red, usualmente el Internet. Uno o más nodos en una red mesh pueden ser Puertas de Acceso.</dd>
	<dt>Hostname***************:</dt>
	<dd>El nombre de un nodo. Un sobre nombre que corresponde a la dirección de un dispositivo conectado a una red. Puede ser el mismo, similar a, o diferente que el SSID de un Punto de Acceso.***************** It can be the same, similar to, or different than the SSID of the Access Point.</dd>
	<dt>Dirección IP:</dt>
	<dd>Una etiqueta numérica asignada a cada dispositivo (por ejemplo, computadora, impresora, router) participando en una red que usa Protocolo de Internet para comunicarse.</dd>
	<dt>Dirección MAC:</dt>
	<dd>Un identificador de hardware único asignado a interfaces de red.</dd>
	<dt>Red mesh:</dt>
	<dd>Un tipo de red donde cada nodo en la red puede actuar como un router independiente, y puede conectar a muchos nodos a la vez.</dd>
	<dt>Nodo:</dt>
	<dd>Cualquier router conectado a una red mesh.</dd>
	<dt>OLSR (Optimized Link State Routing Protocol)*******:</dt>
	<dd>un protocolo de routing IP para redes móviles y ad hoc*************
an IP routing protocol optimized for mobile ad hoc networks.</dd>
	<dt>Raíz***********Root:</dt>
	<dd>Una cuenta de usuario utilizada para administración del sistema.</dd>
	<dt>Página Splash o Portal Captivo:</dt>
	<dd>Una página web que aparece cuando los usuarios primero intentan conectarse a la red vía un Punto de Acceso. Usualmente requiere aceptar términos de servicio para llegar al Internet.</dd>
	<dt>SSID (Service Set Identifier):</dt>
	<dd>Un nombre que identifica de forma única una red de área local inalámbrica. A menudo es el nombre de un Punto de Acceso. Puede ser un nombre humanamente-leíble,*********It can be a human-readable name,****** y puede ser de hasta 32 caracteres de largo.</dd>
</dl>
</section>

<section class="related-information" id="section-related-information">
<h2>Información Relacionada</h2>

<p>Módulos a completar para prepara esta*********** Modules to complete to prepare for this one</p>

<ul>
	<li><a href="/docs/cck/installing-configuring/install-ubiquiti-router">instala en un Router Ubiquiti</a></li>
	<li><a href="/docs/cck/installing-configuring/install-and-recover-tftp">Instala y recupera con TFTP</a></li>
</ul>

<p>Otros módulos referenciados en este</p>

<ul>
	<li>Asegura la Red (Hardware y Software)</li>
	<li>Solución de problemas para Nodos Anfitriones (en desarrollo, próximamente disponible.)</li>
</ul>

<p>Módulos posibles para seguir a este</p>

<ul>
	<li>Solución de problemas para Nodos Anfitriones (en desarrollo, próximamente disponible.)</li>
</ul>

<p>Módulos relacionados en otras unidades</p>

<ul>
	<li><a href="/docs/cck/networking/learn-networking-basics">Redes: Aprende lo Básico de las Redes</a></li>
</ul>
</section>
