---
layout: default
title: Instala y Recupera con TFTP
site_section: docs
sub_section: [cck,cck-installing]
pdf: cck/installing-configuring/CCK-Install_with_TFTP.pdf
pdf-all: true
categories:
created: 2013-09-27
changed: 2014-09-15
post_author: critzo
lang: es
---

<p><img src="/files/CCK-Recover_with_TFTP_support1.png" /></p>

<section id="section-introduction">
<h2>Introducción</h2>

<p>Este documento esta diseñado para ayudarte a recuperar el software Commotion si las instrucciones <a href="/docs/cck/installing-configuring/install-ubiquiti-router">Instala en un Dispositivo Ubiquiti</a> no funcionaron, o si tu router tiene software malfuncional y necesita ser instalado de nuevo o actualizado. Contiene instrucciones para usar un protocolo llamado Trivial File Transfer Protocol (TFTP) para instalar el software.</p>

<p>Necesitarás encontrar instrucciones específicas para operar el sistema que estas ejecutando en tu computadora – ya sea Windows, Mac OSX, o Linux. Por favor procede a la sección de tu sistema operativo abajo.</p>

<p><strong>Este proceso toma más tiempo que las instrucciones básicas. Agrega otra media hora o una hora para los pasos de configuración adicionales en estas páginas.</strong></p>

<h4>Materiales + suministros necesarios</h4>

<p>Para recuperar una instalación Commotion, necesitarás las siguientes cosas en-mano:</p>

<ol>
   <li>Una computadora con puerto Ethernet.</li>
   <li>Un router Ubiquiti y su adaptador Power over Ethernet (PoE) adapter y cable de poder.</li>
   <li>Acceso a un toma de corriente.</li>
   <li>Dos cables Ethernet.</li>
   <li>La imagen de software Commotion apropiado de la página de <a href="/download/routers/">descargas</a> .</li>
</ol>

<p>Procede a las instrucciones de instalación para tu plataforma, abajo:</p>
<ul>
   <li><a href="#instructions-for-windows">Microsoft Windows</a></li>
   <li><a href="#instructions-for-mac-osx">Mac OSX</a></li>
   <li><a href="#instructions-for-linux">Debian-based Linux</a></li>
</ul>
</section>

<section id="instructions-for-windows">
<h2>Instrucciones para Windows</h2>

<h3>Comenzando</h3>

<p>Esta guía debería funcionar con cualquier versión de Microsoft Windows desde Windows XP en adelante. Si no está seguro qué versión de Windows tienes, haz click en el menú Inicio y escribe <code>winver</code> en el menú de Ejecutar o el cuadro de búsqueda. Las más probables respuestas son Windows XP, Windows Vista o Windows 7.</p>

<p>Puedes instalar el software Commotion en el router con un programa de interfaz gráfica de usuario (GUI) para TFTP, o mediante la línea de comandos. Te recomendamos la opción GUI si eres nuevo en este proceso. En primer lugar descarga el <a href="http://www.shadowsoftware.net/shadowgameworld/downloads/tftp2.exe" target="_blank">TFTP2 cliente</a> e instálalo en tu computadora. Después de essto, prepararás el router para el TFTP y luego carga el software.</p>

<h3>Prepara tu computadora paraTFTP</h3>

<p>Primero, configura la conexión cableada de tu computadora con la dirección <strong>192.168.1.254</strong>. Puedes hacer esto en la sección de Panel de Control para conexiones de red, bajo configuraciones de puerto Ethernet.</p>

<p>Después, el router Ubiquiti debería ponerse en un modo especial para descargar archivos a él usando TFTP. Para configurar el router al modo de recuperación, debe estar prendido con el botón de Reinicio apretado, hasta que las luces de estatus parpadeen en un orden especial. Para poner tu router en modo de recuperación:</p>

<p><img src="/files/CCK-Recover_with_TFTP_support2.png" /></p>

<ol class="rteindent1">
   <li>Si tu router ya está conectado a la fuente de poder, remueve el cable Ethernet del fondo del router. Las luces en el router se apagarán.</li>
   <li>Toma un clip de papel con una punto doblada hacia afuera, y gentilmente presiona el botón de Reinicio en la parte de abajo del router inalámbrico, junto a donde se conectan los cables Ethernet, que alimentarán el router.</li>
   <li>Mientras mantienes presionado el botón de Reinicio, observa las luces al frente de la unidad. Las luces debajo del triángulo harán un baile especial, mostrado abajo.</li>
</ol>

<p>Hay dos posibles secuencias de luces para routers Ubiquiti. Tu dispositivo pasará por alguna de las secuencias de luces abajo.</p>

<h4>Secuencia de luces Original Ubiquiti</h4>
<p>Primero, las dos luces del centro - una Naranja y la otra Verde - se prenderán por algunos segundo, después se apagarán.</p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights1.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights2.png" style="max-width:400px;" /></p>

<p>Luego, las luces de la izquierda a la derecha se prenderán en orden: Rojo, Naranja, Verde, y Verde de nuevo.</p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights3.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights4.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights5.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights6.png" style="max-width:400px;" /></p>

<p>Finally, the 1st and 3rd will light, then the 2nd and 4th, over and over.</p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights7.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights8.png" style="max-width:400px;" /></p>
<p>&nbsp;</p>

<h4>Nueva secuencia de luces Ubiquiti</h4>
<p>Primero, las dos luces del centro, Una naranja y una verde, se prenderán por unos segundos, luego se apagarán. Las luces permanecerán apagadas por alrededor de 10 secciones - ¡se paciente!</p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights_new1.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights_new2.png" style="max-width:400px;" /></p>

<p>Luego, todas las luces emitirán un flash, y luego se apagarán. Esto ocurrirá tres veces.</p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights_new3.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights_new4.png" style="max-width:400px;" /></p>

<p>Finalmente, la 1era y 3era luz se prenderán, luego la 2da y 4ta, una y otra vez.</p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights_new5.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights_new6.png" style="max-width:400px;" /></p>

<p>Una vez que el router esté en la etapa final - donde los dos sets de luces estén emitiendo un flash repetidamente, la unidad esta en modo TFTP. Puedes liberar el botón de Reinicio en este punto. Si pasan de 30 segundos a un minuto y las luces no cooperan, puede ser que necesites empezar de nuevo. Desconecta el cable Ethernet y comienza el proceso de nuevo.</p>

<p>&nbsp;</p>

<p class="tip">El modo de Recuperación solo se habilita por un periodo corto de tiempo. Si el router no acepta el software, necesitarás reiniciar el proceso del botón de Reinicio. Típicamente necesitarás reiniciarlo si ha estado en modo de recuperación por más de tres minutos.</p>


<h3>Instala el software en el router</h3>

<p>Pasaremos por el proceso de instalación GUI primero, que es recomendado. Si el programa TFTP2 no funciona para ti, procede a las instrucciones de la linea de comando abajo e intenta esos.</p>

<h4>Usando una Interfaz GUI</h4>

<p>TFTP2 es un cliente TFTP muy simple que incluye las configuraciones necesarias para instalar el software. Usa el link en <a href="#section-external-resources">Recursos Externos</a> abajo para descargar e instalar el programa antes de proceder, si no lo has hecho ya.</p>

<p><img src="/files/CCK-Recover_with_TFTP_windows_GUI.png" /></p>
<ol>
	<li>Ingresa <strong>192.168.1.20</strong>, la dirección IP del routerServerPasswordUpgrade.RetrySends en el campo.</li>
	<li>Deja el campo en blanco.</li>
	<li>Abre el navegador del archivo, navega a donde bajaste la imagen Commotion, y seleccionala. Pon el router en modo TFTP, e inmediatamente después.</li>
	<li>Da Click </li>
</ol>

<p>Después de las cargas de software, deberías ver el mensaje "Transferencia completada exitosamente". Después de un minuto o dos, el router debería reiniciar y comenzar a cargar Commotion. Procede al documento <a href="/docs/cck/installing-configuring/configure-commotion/">Configura Commotion</a> para terminar de configurar el dispositivo.</p>


<h4>Usando la línea de comando</h4>

<p>Todas las versiones de Macintosh OSX deberían tener un cliente TFTP instalado. Es accesible del programa de la Terminal, que es una interfaz basada en texto al sistema OSX. Puedes encontrar este programa al navegar del archivo de Aplicaciones al archivo de Utilidades.</p>

<p><img src="/files/OSX_screengrab_2_0.png" /></p>

<p>De ahí, lanza el programa titulado "Terminal", debería abrir una interfaz de linea de comando titulado "Terminal - bash", o algo similar.</p>

<p><img src="/files/OSX_screengrab_3_1.png" /></p>

<p>La ventana puede verse diferente, dependiendo de la versión de OSX que estés usando. Deberías poder ver un prompt que se ve algo como esto:</p>

<p><code>computername:~ username$</code></p>

<p>Primero, necesitamos navegar al archivo donde guardaste el archivo de imagen Commotion. Para hacerlo, escribe <code>cd &quot;path to the folder where you saved the file&quot;</code>************** y persiona Enter.</p>

<p>Esto puede verse algo como <strong>cd Desktop</strong> o <strong>cd Downloads</strong> - o algo más. Si no estas seguro, puedes usar el Buscador para buscar el archivo y después presionar <code>command I</code>. El diálogo de “Obtener Información” debería aparecer, donde puedes encontrar todo el camino debajo del tabulador General, etiquetado "Donde:". Puedes luego escribir estoen la Terminal después de <code>cd command</code>. Para verificar los archivos en tu directorio actual, puedes escribir ls, que debería desplegar una lista de archivos.</p>

<p><img src="/files/OSX_screengrab_4-1.png" /></p>

<p>Una vez que estés en el directorio apropiado, puedes ejecutar el cliente TFTP. Para hacerlo, solo escribe <code>tftp</code> en el prompt y presiona enter. Tu línea de comando debería cambiar a lo siguiente:</p>

<p><code>tftp&gt;</code></p>

<p>De aquí, ingresa los comandos en secuencia:</p>

<p><code>connect 192.168.1.20</code>- Instruye al cliente a hablarle al router.</p>

<p><code>verbose</code>- Instruye al cliente a proveer reportes más detallados en lo que está haciendo.</p>

<p><code>binary</code>- Ya que estamos transfiriendo un archivo, y no texto, esto es requerido.</p>

<p><code>put exact-name-of-file.bin</code></p>

<p>Deberías ver algunos números aparecer, luego una linea que estipula algo como "<code>Sent ### bytes in ##.# seconds [### bits per second]</code>".********************* Puedes luego escribir quit**** en el prompt, y tu terminal va a cambiar de regreso al modo normal.</p>

<p>Si hay un mensaje de error, regresa y asegúrate que estás en el directorio correcto, y que has escrito todo correctamente. Puedes luego proceder a <a href="/docs/cck/installing-configuring/configure-commotion/">Configura Commotion</a> para terminar de configurar el dispositivo.</p>
</section>


<section id="instructions-for-linux">
<h2>Instrucciones para Linux</h2>

<h3>Comenzando</h3>

<p>Dependiendo de tu distribución de Linux, podrías o no podrías tener un cliente TFTP instalado por defecto. Puedes checar esto en la terminal, y si resulta que no tienes instalado TFTP, será posible instalar un cliente en la terminal y luego usarlo.</p>

<p>Primero, abre la aplicación de la Terminal:</p>

<ul>
   <li>Si usa Gnome como tu administrador de ventanas, deberías ser capaz de encontrar un programa terminal en el menú principal, bajo <strong>Accesorios -> Terminal</strong>.</li>
   <li>Si usas un administrador de ventanas KDE, deberías ser capaz de acceder al programa terminal en el Kmenu, bajo <strong>Sistema -> Konsole**********</strong>.</li>
   <li>Si usas otro administrador de ventanas, las posibilidades son que ya sepas como entrar a la terminal.</li>
</ul>

<p>Si no estás seguro, o no tienes un administrador de ventanas, solo ve a la terminal al presionar ALT, CTRL y el número 1 o 2. Esto debería traer una pantalla completa de la terminal. Lo más probable es que tengas que ingresar usando cualquier credencial que hayas configurado inicialmente en la computadora.</p>

<p>De aquí, verás un prompt similar a: <code>computername:~ $</code></p>

<p>Escibre: <code>which tftp </code>****************** en este prompt y persiona enter. Esto regresará una de dos cosas: la ubicación del programa tftp si lo tienes instalado, o regresará un error.</p>

<p>Si tienes un cliente tftp, el resultado debería verse como: <code>/usr/bin/tftp</code></p>

<p>Si no tienes uno, el resultado se vería como: <code>which: no tftp in (/path...</code></p>********************

<p>Si tienes un cliente TFTP instalado, puedes saltarte algunos pasos. Si no tienes uno, necesitarás instalar un cliente antes de avanzar. Cómo lo instales dependerá de que distribución Linux estés usando. Detallaremos los comandos que escribir para las pocas distribuciones comunes abajo. Los comandos se muestran en el prompt normal que comenzamos desde arriba. Necesitarás saber la contraseña del administrador (raíz) que se colocó cuando el sistema fue inicialmente instalado.</p>

<p>Ubuntu: <code>$ sudo aptitude install tftp</code></p>

<p>Debian: <code>$ sudo apt-get install tftp</code></p>

<p>Arch: <code>$ sudo pacman -Ss tftp-hpa</code></p>

<p>Fedora: <code>$ sudo rpm -i tftp</code></p>

<p>Ya que no podemos cubrir todas las distribuciones de Linux, si no estás seguro de como instalar un paquete de cliente TFTP en tu computadora, ¡usa Google!</p>

<p>Después de escribir el comando correcto para tu distribución, deberías ver una pantalla confirmando que tu paquete fue instalado. Para verificarlo, puedes escribir <code>which tftp</code> at the prompt again. If you receive a single path response, as show above, you should be good to go.</p>

<h3>Prepara tu computadora para TFTP</h3>

<p>El dispositivo Ubiquiti está listado para una conexión TFTP de una sola fuente, o computadora con una dirección específica. Necesitarás configurar la dirección IP de tu computadora con los siguientes ajustes:</p>

<p>Dirección IP estática: <code>192.168.1.254</code><br />
Máscara de subnet: <code>255.255.255.0</code><br />
Puerta de Acceso: <code>192.168.1.1</code></p>

<p>Si necesitas ayuda asignando direcciones estáticas IP para tu computadora Linuz, busca versiones específicas de linux y "direcciones estáticas IP".</p>

<p>El router Ubiquiti debería ponerse en un modo especial para descargar archivos a él usando TFTP. Para configurar el router al modo de recuperación, debe estar prendido con el botón de Reinicio apretado, hasta que las luces de estatus parpadeen en un orden especial. Para poner tu router en modo de recuperación:</p>

<p><img src="/files/CCK-Recover_with_TFTP_support2.png" /></p>

<ol class="rteindent1">
   <li>Si tu router ya está conectado a la fuente de poder, remueve el cable Ethernet del fondo del router. Las luces en el router se apagarán.</li>
   <li>Toma un clip de papel con una punto doblada hacia afuera, y gentilmente presiona el botón de Reinicio en la parte de abajo del router inalámbrico, junto a donde se conectan los cables Ethernet, que alimentarán el router.</li>
   <li>Mientras mantienes presionado el botón de Reinicio, conecta el cable Ethernet, que alimentará al router.</li>
   <li>Mientras mantienes presionado el botón de Reinicio, observa las luces al frente de la unidad. Las luces debajo del triángulo harán un baile especial, mostrado abajo.</li>
</ol>

<p>Hay dos posibles secuencias de luces para routers Ubiquiti. Tu dispositivo pasará por alguna de las secuencias de luces abajo.</p>

<h4>Secuencia de luces Original Ubiquiti</h4>
<p>Primero, las dos luces del centro - una Naranja y la otra Verde - se prenderán por algunos segundo, después se apagarán.</p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights1.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights2.png" style="max-width:400px;" /></p>

<p>Luego, las luces de la izquierda a la derecha se prenderán en orden: Rojo, Naranja, Verde, y Verde de nuevo.</p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights3.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights4.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights5.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights6.png" style="max-width:400px;" /></p>

<p>Finalmente, la 1era y 3era luz se prenderán, luego la 2da y 4ta, una y otra vez.</p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights7.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights8.png" style="max-width:400px;" /></p>
<p>&nbsp;</p>

<h4>Nueva secuencia de luces Ubiquiti</h4>
<p>Primero, las dos luces del centro, Una naranja y una verde, se prenderán por unos segundos, luego se apagarán. Las luces permanecerán apagadas por alrededor de 10 secciones - ¡se paciente!</p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights_new1.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights_new2.png" style="max-width:400px;" /></p>

<p>Luego, todas las luces emitirán un flash, y luego se apagarán. Esto ocurrirá tres veces.</p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights_new3.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights_new4.png" style="max-width:400px;" /></p>

<p>Finalmente, la 1era y 3era luz se prenderán, luego la 2da y 4ta, una y otra vez.</p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights_new5.png" style="max-width:400px;" /></p>
<p><img src="/files/CCK-Recover_with_TFTP_router_lights_new6.png" style="max-width:400px;" /></p>

<p>Una vez que el router esté en la etapa final - donde los dos sets de luces estén emitiendo un flash repetidamente, la unidad esta en modo TFTP. Puedes liberar el botón de Reinicio en este punto. Si pasan de 30 segundos a un minuto y las luces no cooperan, puede ser que necesites empezar de nuevo. Desconecta el cable Ethernet y comienza el proceso de nuevo.</p>

<p>&nbsp;</p>

<p class="tip">El modo de Recuperación solo se habilita por un periodo corto de tiempo. Si el router no acepta el software, necesitarás reiniciar el proceso del botón de Reinicio. Típicamente necesitarás reiniciarlo si ha estado en modo de recuperación por más de tres minutos.</p>

<h3>Instala el software en el router</h3>

<p>Ahora necesitamos navegar al folder donde guardaste el archivo de imagen Commotion para tu router.</p>

<p>Para hacerlo, escribe: <code>cd &quot;path to the folder where you saved the file&quot;</code>*********** y presiona Enter.</p>

<p>Esto puede verse algo como <strong>cd ~/Escritorio</strong> o <strong>cd ~/Descargas</strong>*********** - o algo más. Si no estás seguro, puedes usar Nautilus en Gnome para navegar al archivo, y presiona Control-L. Esto debería desplegar el camino al directorio que estás viendo. Usando Konqueror en KDE, navega al archivo, y luego lee el camino en el statusbar*********** de arriba.</p>

<p>Una vez que estes en el directorio apropiado, puedes correr el cliente TFTP. Para hacerlo, solo escribe <code>tftp</code> en el prompt y presiona enter. Algunos clientes te preguntarán (qué), a qué punto pones tu dirección IP 192.168.1.20.***************** Some cilents will ask you (to), at which point you put in the IP address 192.168.1.20.********** Tu linea de comandos debería cambiar a lo siguiente:<br />
<code>tftp&gt;</code></p>

<p>De aquí, ingresa los comandos en secuencia:</p>

<p><code>connect 192.168.1.20  </code>- If you didn't put it in at the (to) prompt.************* Instruye al cliente a hablarle al router.</p>

<p><code>verbose </code>- Instruye al cliente a proveer reportes más detallados de lo que está haciendo</p>

<p><code>binary</code>- Y aque estamos transfiriendo un archivos, y no el texto, esto se requiere.</p>

<p><code>put exact-name-of-file.bin</code>- La imagen Commotion para el hardware, como se menciona en el documento "Instalando Commotion en Nodos Inalámbricos".</p>

<p>Deberías ver algunos números aparecer, luego una linea que estipula algo como  "<code>Sent ### bytes in ##.# seconds [### bits per second]</code>".****** Puedes luego escribir quit****** en el prompt, y tu terminal va a cambiar de regreso al modo normal.</p>

<p> Si todo sale bien, después de un minuto o dos, el router debería reiniciar y comenzar a cargar Commotion. Procede al documento <a href="/docs/cck/installing-configuring/configure-commotion/">Configura Commotion</a> para terminar de configurar este dispositivo.</p>
</section>

<section id="section-definitions">
<h2>Definiciones</h2>

<dl>
	<dt>TFTP</dt>
	<dd>Un protocolo de transferencia de archivo notable por su simplicidad. Es generalmente usado por transferencia automatizada o configuración o iniciar archivos entre maquina en un ambiente local. **********************a file transfer protocol notable for its simplicity. It is generally used for automated transfer of configuration or boot files between machines in a local environment.</dd>
	<dt>Firmware</dt>
	<dd>la combinación de memoria persistente y código de programa y datos guardados en el. En otras palabras, un sistema operativo muy pequeño y básico para dispositivos como electrodomésticos, computadoras, relojes digitales, cámaras digitales, teléfonos móviles, y más.</dd>
</dl>
</section>

<section class="related-information" id="section-related-information">
<h2>Información Relacionada</h2>

<p>Este módulo es un documento que acompaña a <a class="module" href="https://commotionwireless.net/docs/cck/installing-configuring/install-ubiquiti-router">Instala un Dispositivo Ubiquiti</a>. ¡Debería ser consultado para una vista general del proceso!</p>
</section>

<section class="external-resources" id="section-external-resources">
<h2>Recursos Externos</h2>

<p>Para Interfaces de Usuario Grpaficas (Graphical User Interfaces, GUIs) para ayudar con el proceso TFTP:</p>

<p>Windows: <a href="http://www.shadowsoftware.net/shadowgameworld/downloads/tftp2.exe" target="_blank">TFTP2 de Software Shadow</a></p>

<p>Mac OSX: <a href="http://www.mactechnologies.com/index.php?page=downloads#tftpclient" target="_blank">Mac Technologies TFTP client****************</a></p>
</section>
