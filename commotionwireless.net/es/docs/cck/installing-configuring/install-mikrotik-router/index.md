---
layout: cck
title: Instala en un Router MikroTik 
site_section: docs
sub_section: [cck,cck-installing]
pdf: 
pdf-all:
categories: 
created: 2014-10-21
changed: 2014-10-22
post_author: andygunn
lang: es
---

<p><img alt="Instala en un gráfico de router" src="/files/Install_MikroTik_intro_graphic.png" style="max-width:600px;" /></p>

<section id="section-introduction">
<h2>Introducción</h2>

<p>Este documento contiene un proceso paso-a-paso para instalar el software Commotion en routers MikroTik. Si tienes un nuevo, dispositivo en-la-caja MikroTik, esta guía es para ti.</p>

<p>Hemos escrito esta guía debido a que el Instituto de Tecnología Abierta está ampliando el soporte de software del router Commotion por routers MikroTik. El software es un sistema operativo alternativo, similar a Linux para +tu computadora de casa u oficina. El Hardware Mikrotik viene de fábrica instalado con su software a la medida, llamada RouterOS - al igual que un nuevo equipo por lo general viene con Microsoft Windows o Mac OSX instalado. Instalar Commotion en el router, en su lugar añadirá nuevas funciones a tu router, incluyendo la capacidad para enmallarse con otros routers que usen Commotion.</p>

<p>Las instrucciones para instalar Commotion en dispositivos MikroTik son mucho más complicadas que las del hardware Ubiquiti o TP-Link. La guía supone que estás familiarizado con Linux y trabajando en la línea de comandos. El proceso de instalación debe tomar alrededor de una hora o más. Si estos pasos no funcionan para ti, o si tienes un router que falló en parpadear adecuadamente Commotion o no responderá de ninguna manera, por favor, consulta la sección <a href="#external-resources">Recursos Externos</a>.</p>

<p><strong>Tiempo requerido: 1 hora o más.</strong></p>
</section>

<section id="section-materials-and-supplies-needed">
<h2>Materiales + Suministros Necesarios</h2>

<p>Para instalar Commotion, necesitarás los siguientes objetos en-mano:</p>

<ol class="rteindent1">
   <li>Una computadora con puerto Ethernet.</li>
   <li>El router MikroTik router y su fuente de poder (o un suministro 24V PoE).</li>
   <li>Acceso a una toma de corriente.</li>
   <li>Un switch Ethernet con dos puertos abiertos.</li>
   <li>Dos cables Ethernet.</li>
   <li>Una computadora con un puerto serial, o con adaptador USB-a-Serial.</li>
   <li>Un cable serial para conectar a una consola serial DB-9</li>
   <li>Una conexión a Internet o la imagen de software apropiado Commotion.</li>
</ol>

<p>&nbsp;</p>

<p class="tip">Si tu computadora no almacena vía el sistema de actualización en Mikrotik's RouterOS. Así que instalar Commotion es un proceso de dos pasos:</p>

<ul class="rteindent1">
   <li>Primero, reinicia el router de un servidor DHCP en el área de red local. Un servidor TFTP luego provee un archivo firmware .ELF que es cargado en la memoria del router.</li>
   <li>Segundo, un servidor Web provee un archivo firmware separado en el área de la red local para instalación permanente.</li>
</ul>

<p>Estos paquetes de servidor deben ser instalados en cualquier computadora de la que estés instalando el software Commotion. Para una guía en instalar y ejecutar estos servidores, por favor vea el <a href="/docs/guides-howtos/installation-server-setup/">MikroTik Installation Server Setup**************</a>. Lee a través de y realiza los pasos necesarios en esas instrucciones antes de regresar a este documento y proceder a la instalación.</p>

</section>

<section id="setup-the-hardware">
<h2>Configura el Hardware</h2>

<p><img src="/files/Install_MikroTik_prepare_hardware.png" style="max-width:600px;" /></p>

<ol class="rteindent1">
   <li>Desempaca el router MikroTik e instala las antenas externas (si la unidad las tiene).</li>
   <li>Apaga el puerto Ethernet de tu computadora.</li>
   <li>Conecta un segundo cable Ethernet entre el Switch y el puerto Ethernet y el router MikroTik.</li>
   <li>Conecta el adaptador USB-a-Serial a tu computadora, y conecta el conector DB-9 al puerto de la Consola Serial en el router MikroTik.</li>
</ol>

<p>No tengas un programa termina que pueda acceder a las consolas  de puertos seriales instaladas, puedes usar***********************Dont have a terminal program that can access serial port consoles installed, you can use <strong>minicom</strong> o algo similar. Abre una terminal e instala el paquete al escribir lo siguiente:</p>
<p><pre>sudo apt-get install minicom</pre></p>*****************

<p>Necesitarás configurar el minicom al puerto apropiado y data-rate para tu router MikroTik**************** You will need to configure minicom to the proper port and data-rate for your MikroTik router. Ejecuta el siguiente comando en la terminal:</p>
<p><pre>sudo minicom -s</pre></p>

<p>Se te presentará un menú de configuración:</p>
<p><img src="/files/Install_MikroTik-minicom_menu.png" style="max-width:510px" /></p>

<p>Usa las teclas de flechas para moverte abajo al menú y presiona enter. Aquí puedes cambiar el puerto serial a la dirección que el adaptador USB-a-Serial usa. Escribe y cambia /dev/xxx a <strong>/dev/ttyUSB0</strong> (para la mayoría de los adaptadores USB-A-Serial). Presiona enter, y luego cambia el rango de bits. Escribe de nuevo y selecciona el rango 115,200 bps, y deja el flujo de control a 8 bits, sin paridad, 1 stop bit (8N1)******************** and leave the flow control to 8 bits, no parity, 1 stop bit (8N1).********** Presiona enter y sal al menú previo. Presiona enter de nuevo y regresa al menú anterior.</p>
<p><img src="/files/Install_MikroTik-minicom_serial_port_menu.png" style="max-width:510px" /></p>

<p>En este punto podemos guardar las configuraciones. Navega hacia abajo y presiona enter. Esto guardará tus cambios y configurará los ajustes por defecto para el programa.</p>
<p><img src="/files/Install_MikroTik-minicom_save_as_default.png" style="max-width:510px" /></p>

<p>Desplázate hacia abajo y presiona enter. Serás movido al programa minicom, que estará esperando entradas del puerto serial. <strong>Deja esta ventana terminal abierta</strong> para estar lista para los siguientes pasos.</p>
<p><img src="/files/Install_MikroTik-minicom_running.png" style="max-width:510px" /></p>

</section>

<section id="load-software">
<h2>Carga la memoria del software</h2>

<p>If you havens boot process.****************</p>
<p><img src="/files/Install_MikroTik-minicom_RouterBoot_init.png" style="max-width:510px;" /></p>

<p>Rápidamente presiona cualquier tecla en tu teclado para entrar  al router presiona una tecla ahora, permite que el menu bootloader termine. Tu computadora debería dar un lease DHCP, reconocer su dirección MAC y el dispositivo arrancará el archivo en el que está hospedado: **********************************Quickly hit any key on your keyboard to enter the routert hit a key this time, let the bootloader menu time out. Your computer should give the device a DHCP lease, recognize its MAC address and the device will boot from the file hosted in:</p>
<p><pre>/var/lib/tftproot/</pre></p>
<p>Esto ocurrirá muy rápido, luego el software del router Commotion comenzará a ejecutarse.</p>
<p><img src="/files/Install_MikroTik-minicom_RouterBoot_loading_image.png" style="max-width:510px;" /></p>

<p>Un gran número de mensajes se imprimirá en la pantalla como arranques Commotion. Cuando la pantalla deje de actualizarse por algún tiempo, o veas el mensaje en la pantalla terminal serial, Commotion ha arrancado completamente. Presiona ********************A large number of messages will print to the screen as Commotion boots. When the screen stops updating for a while, or you see the message on the serial terminal screen, Commotion has fully booted. Hit <strong>Enter</strong>.</p>
<p><img src="/files/Install_MikroTik-minicom_Commotion_booted.png" style="max-width:510px;" /></p>

<p>Verás el siguiente banner Commotion, si todo salió bien:</p>
<p><img src="/files/Install_MikroTik-minicom_Commotion_banner.png" style="max-width:510px;" /></p>

<p>Si no inicia de la red, revisa de nuevo tu configuración en:
<p><pre>/etc/dnsmasq.conf</pre></p>
<p>y mira a los mensajes en</p>
<p><pre>/var/log/syslog</pre></p>
<p>para diagnosticar el asunto Asumiendo que el dispositivo inicio de la red, deberías ver el banner del texto Commotion y comandar prompt************************ to diagnose the issue Assuming the device booted from the network, you should see the Commotion text banner and command prompt.</p>

</section>

<section id="install-software-to-flash">
<h2>Instala el software para flash****** Install the software to flash</h2>

<p>A este punto, tu tabla de routers esta ejecutando Commotion en la memoria. Para instalar permanente Commotion en el NAND flash de dispositivo (similar a un disco duro de computadora), los archivos deben cargarse del servidor web corriendo en tu computadora. **************************At this point, your routerboard is running Commotion in memory. To permanently install Commotion to the device's NAND flash (similar to a computer hard drive), the files must be loaded from the web server running on your computer.</p>

<p>En esta consola serial, checa si tu router Commotion recibió una dirección IP de la instancia dnsmasq a tu computadora. Ejecuta el comando: *************************In the serial console, check if your Commotion router received an IP address from the dnsmasq instance on your computer. Run the command:</p>
<p><pre>ifconfig eth0</pre></p>

<p>Si el router tienen una dirección IP, debería verse algo como esto:</p>
<p><pre>
eth0      Link encap:Ethernet  HWaddr aa:bb:cc:dd:ee:ff
         inet addr:192.168.10.101  Bcast:192.168.10.255
         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
         RX packets:1019 errors:0 dropped:0 overruns:0 frame:0
         TX packets:4400 errors:0 dropped:0 overruns:0 carrier:0
         collisions:0 txqueuelen:1000 
</pre></p>

<p>Puedes proceder al siguiente paso de instalación, wget2nand. Si tu router no recibe una dirección IP, configura una dirección IP para la interfaz Ethernet en el nodo estaticamente. Ejecuta este comando:*********************  If your router doesn't receive an IP, set an IP address for the Ethernet interface on the node statically. Run this command:</p>
<p><pre>ifconfig eth0 inet 192.168.10.100 netmask 255.255.255.0</pre></p>

<p>Después de esto, puedes cargar los archivos de imagen de la computadora a la nota. Este comando asume que la dirección IP de tu computadora es 192.168.10.254, como se recomiendo en la guía arriba: ***********************After this, you can load the image files from the computer to the note. This command assumes that your computer's IP address is 192.168.10.254, as recommended in the guide above:</p>
<p><pre>wget2nand http://192.168.10.254/</pre></p>

<p>Si es exitoso, tu consola serial debería desplegar información indicando que el dispositivo ha sido flasheado, y que eventualmente se reiniciará. *******************If successful, your serial console should display information indicating that the device is being flashed, and eventually it will reboot.</p>

<p>Una vez que el dispositivo se reinice, usa los comandos abajo en tu computadora para apagar dnsmasq y lighttpd: *****************Once the device is rebooting, use the commands below on your computer to turn off dnsmasq and lighttpd:</p>
<p><pre>
sudo service dnsmasq stop
sudo service lighttpd stop
</pre></p>

<p>Deberías ahora configurar tu computadora a que tenga un puerto Serial (la mayoría de las computadoras hechas en los últimos 5 años no), necesitarás un adaptador serial USB, como los siguientes modelos: *******************You should now set your computert have a Serial port (most computers made in the past 5 years do not), you will need a USB to serial adapter, such as these models:</p>
<ul class="rteindent1">
   <li>Sabrent USB 2.0 TO Serial DB9 male - model # CB-RS232</li>
   <li>TRENDnet USB to Serial Converter - model # TU-S9</li>
   <li>StarTech USB to RS232 Serial DB9 Adapter - model # ICUSB232PRO</li>
</ul>

<p>En adición, probablemente necesitarás un DB-9, también conocido como cambiador de género, como los siguientes: ************* In addition, you will likely need a DB-9 - also known as a gender changer, such as these:</p>
<ul class="rteindent">
   <li>Tripp Lite DB9 F/F Gender Changer - model # P150-000</li>
   <li>StarTech DB9 RS232 Serial Null Modem Adapter F/F - model # NM9FF</li>
</ul>

</section>

