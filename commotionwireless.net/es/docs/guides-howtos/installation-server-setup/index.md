---
layout: cck
title: MikroTik Installation Server Setup
site_section: docs
sub_section: [guides]
pdf:
pdf-all:
categories:
created: 2014-10-21
changed: 2014-10-22
post_author: andygunn
lang: es
---

<section id="section-introduction">
<h2>Introducción</h2>

<p>Los routers MikroTik requieren un proceso de instalación diferente que la mayoría de los otros routers: obtienen software de servidores en una red, en lugar de que tu subas el software al dispositivo. Esto requiere que configures los servidores requeridos antes de que puedas instalar Commotion en tu dispositivo MikroTik. Los tres servidores que necesitarás configurar son:</p>
<ol class="rteindent1">
   <li>Un servidor Netboot que puede asignar una dirección IP al router con DHCP o BootP</li>
   <li>Un servidor TFTP que le provee al router el primer set de archivos firmware</li>
   <li>Un servidor Web que le provee al router el segundo set de archivos firmware</li>
</ol>

<p>Esta guía instala y configura los siguientes dos paquetes de servidor:
<ol class="rteindent1">
   <li><strong>dnsmasq</strong> - un DNS de bajo peso y un servidor DHCP.******************** a lightweight DNS and DHCP server.*********** Esto le proporciona al Netboot y TFTP funciones dentro de un paquete.</li>
   <li><strong>lighttpd</strong> - un servidor web de bajo peso.*************** a lightweight web server. Responderá las solicitudes justo como un servidor web en el Internet, pero sólo está configurado aquí para proporcionar firmware a tus routers.</li>
</ol>

</section>

<section id="using-linux">
<h2>Usando Linux</h2>

<p>Esta guía está escrita para computadores ejecutando Debian Linux o una variante como Ubuntu o Mint. Puede ser posible configurar los mismos paquetes de servidor usando Windows o Mac OSX, pero esas opciones no están documentadas aquí.</p>

<p>Si no tienes acceso a una computadora Linux, podrías ser capaz de configurar una instancia de Linux usando una máquina virtual u otra plataforma, pero eso está más allá del alcance de esta guía.  *******************If you do not have access to a Linux computer, you may be able to set up an instance of Linux using a virtual machine on another platform, but that is beyond the scope of this guide.</p>

</section>

<section id="install-configure-dnsmasq">
<h2>Instala y Configura dnsmasq</h2>

<p>Primero, desconecta tu computadora de cualquier red a la que estás conectado. El servidor dnsmasq puede asignar direcciones IP a cualquier computadora en tu red una vez que esté configurada, lo que puede causar comportamiento extraño. Por ello, deberías ser muy cuidadoso en prender el servidor solo cuando lo estés usando para instalar Commotion. Todas las otras veces tu computadora este corriendo, se debe apagar el servicio dnsmasq. Cubriremos eso abajo.</p>

<p>Después, abre una ventana de terminal y escribe:**********Next, open a terminal window and type:</p>
<pre>sudo apt-get install dnsmasq*****************</pre>

<p>Espera a que tu servicio instale el paquete, luego detén el servicio si está corriendo:</p>
<pre>sudo service dnsmasq stop****************</pre>

<p>Deberías ver un mensaje que diga que el servidor se ha apagado.</p>

<p>También, deberías deshabilitar que dnsmasq inicie cuando inicies tu computadora:</p>
<pre>sudo update-rc.d -f dnsmasq remove</pre>
<p><img src="/files/Install_MikroTik-dnsmasq_install_commands_combined.png" style="max-width:510px;" /></p>

<p>Después, configura dnsmaq para proveer solo los servicios necesitados para instalar Commotion. Estos son para proporcionar un servidor DHCP en el puerto Ethernet conectado, y habilitar el servicio TFTP/BootP para servir archivos a los routers.******************************Next, configure dnsmaq to provide only the services needed to install Commotion. These are to provide a DHCP server on the wired Ethernet port, and to enable the TFTP/BootP service to serve files to the routers.</p>

<p>Dnsmasq está configurado en el archivo <strong>/etc/dnsmasq.conf</strong>. Hay muchas, muchas opciones para configurar dnsmasq, y abajo están solo las líneas necesarias para la instalación de la configuración del servidor.</p>
<pre>
# Nuestro servidor solo tiene un puerto ethernet. Checa el tuyo para asegurarte que  estés habilitando el puerto correcto
interface=eth0
#bind-interfaces

# Puedes especificar cualquier rango dhcp-range que quieras, o por tus
requerimientos específicos de ambiente (por tanto si esta es un*********for instance if this is a
servidor de producción*******production server)
dhcp-range=192.168.10.100,192.168.10.120,255.255.255.0,12h

dhcp-leasefile=/var/lib/misc/dnsmasq.lease

# Para cada dispositivo que quieras que inicie TFTP, necesitas una entrada
dhcp-host con la dirección MAC y la IP para dar al cliente.
# Necesitarás buscar la dirección MAC del dispositivo y
agregar una línea aquí para que sea reconocido.
dhcp-host=xx:xx:xx:xx:xx:xx,192.168.10.101

# El nombre del archivo boot para ser proporcionad a los dhcp-hosts. Este
archivo debería ser guardado en el folder 'tftp-root' (véase abajo)
dhcp-boot=openwrt-ar71xx-nand-vmlinux-initramfs-lzma.elf

# Habilita la construcción del dnsmasq en el servidor tftp/bootp**********Enable dnsmasq's built in tftp/bootp server
enable-tftp

# Designa donde se servirán los archivos TFTP/BOOTP de este************Designate where TFTP/BOOTP files will be served from on this************
servidor
tftp-root=/var/lib/tftproot
log-queries
log-dhcp
</pre>

<p>Puedes descargar el archivo <a href="/files/Commotion_dnsmasq.conf">aquí</a> y usa los siguientes pasos para moverlo a su lugar. (clic derecho y selecciona "Guardar link como...")</p>

<p>Primero necesitarás editar el archivo dnmasq.conf para proporcionar la dirección MAC Ethernet de tu dispositivo MikroTik. En el archivo de ejemplo arriba, la línea se lee:</p>
<p><pre>dhcp-host=xx:xx:xx:xx:xx:xx,192.168.10.101</pre></p>
<p>La sección significa la dirección MAC de tu router. Necesitarás cambiar esto a la dirección MAC apropiada para tu dispositivo MikroTik. El número se verá algo como <strong>a6:9b:45:23:ab:f2</strong>, y debería haber sido proporcionado en la caja con el router, ya sea en una pegatina o un pedazo de papel. Mantén esto adjuntado al router o guardado en un archivo para después, en aso que necesites ejecutar este proceso de instalación de nuevon.</p>

<p>Puedes usar tu editor de texto favorito para editar el archivo proporcionado antes de que lo copies con el comando de abajo. Por ejemplo, para ejecutar el editor gedit en el archivo de configuración, escribe:</p>
<p><pre>gedit ~/location_of_file/Commotion_dnsmasq.conf</pre></p>

<p>Haz un respaldo del archivo dnsmasq.conf existente antes de copiar cualquier cosa sobre él</p>
<p><pre>sudo mv /etc/dnsmasq.conf /etc/dnsmasq.conf.bak</pre></p>
<p>Luego copia el archivo editado en el directorio apropiado:</p>
<p><pre>sudo cp ~/location_of_file/Commotion_dnsmasq.conf /etc/dnsmasq.conf</pre></p>
<p>(donde la ubicación_del_archivo es donde guardaste los archivos de software Commotion)</p>

<p>Necesitarás hacer un directorio para que los archivos se descarguen de via TFTP. Para hacerlo, escribe lo siguiente cuando se solicite el comando:</p>
<p><pre>
sudo mkdir /var/lib/tftproot
sudo cp ~/location_of_file/openwrt-ar71xx-nand-vmlinux-initramfs-lzma.elf /var/lib/tftproot/
</pre></p>
<p>( donde la ubicación_del_archivo es donde guardaste los archivos de software Commotion)</p>

<p>We wons Ethernet port to the Static IP address information below***********:</p>
<ul class="rteindent1">
   <li>Dirección IP: 192.168.10.254</li>
   <li>Máscara de Red: 255.255.255.0</li>
   <li>Puerta de entrada: nothing or blank</li>
</ul>

<p>En una terminal, escribe los siguientes comandos:</p>
<p><pre>
sudo service dnsmasq start
sudo service lighttpd start
</pre></p>

<p>Dnsmasq debería esstar ahora proporcionando los DHCP leases a los routers conectados a tu computadora (ya sea directamente o a través de un switch Ethernet) y para los dispositivos en el archivo de configuración que están identificados por la línea dhcp-host que editaste antes ( dhcp-host=xx:xx:xx:xx:xx:xx,192.168.10.101), dnmasq probará un archivo de firmware Commotion para el arranque de la red. Para confirmar que dnsmaq está corriendo, puedes conectar el puerto Ethernet especificado en tu configuración a un switch, y luego conectar una PC o laptop al mismo switch. **********La PC debería obtener lease DHCP del servidor.*********************The PC should get a DHCP lease from the server.***********</p>

<p>Lighttpd también debería ejecutarse en este punto. Estará sirviendo paquetes web a cualquier computadora que se pueda conectar a él, y proporcionará los archivos de software Commotion a los routers adjuntados al switch mencionado arriba. Para confirmar que lighttpd esté corriendo, abre un navegador web y escribe en la barra URL. Deberías ver la página web default – algo similar a .</p>

<p>En este punto, puedes regresar a la guía <a href="/docs/cck/install-configure/install-mikrotik-router/">Instala en un Router MikroTilk</a>.</p>

</section>
