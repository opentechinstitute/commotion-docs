﻿---
layout: blog
title:  Explorando Commotion con Wireshark - un tutorial
categories: [development,wireshark,debugging]
created: 2014-02-04
changed: 2014-02-04
teaser_image: styles/large/public/ws_olsr_traffic.png
post_author: Seamus Tuohy
lang: es
---
<p>El programa Wireshark, un analizador de red para Windows y Linux, te permite monitorear el tráfico de red para ver paquetes actuales de datos siendo enviados alrededor tuyo. Esto nos permitirá ver la diferencia entre el tráfico cifrado y no cifrado en un router corriendo en Commotion para ver si el cifrado está trabajando. Esta guía está escrita para Wireshark corriendo en un dispositivo Linux, pero se puede aplicar a la depuración Wireshark en cualquier dispositivo compatible.<!--more--></p>

<h2>Configurando tus dispositivos</h2>

<p>Antes de empezar deberías seguir una de las guías de Commotion <a href="/docs/cck/installing-configuring"> para Instalar &amp; Configurar</a> para configurar los dispositivos que vas a monitorear. Si quieres continuar asegúrate que NO coloques una contraseña mesh cifrada aún. Necesitaremos un paquete sin cifrado para ayudarnos a encontrar los paquetes cifrados que creamos después.</p>

<p>NOTA: Si vas a examinar una computadora linux ejecutando el cliente Commotion, estas instrucciones deberían correrse desde una COMPUTADORA DIFERENTE. Puedes usar un wireshark para monitorear tu propio dispositivo también, pero estas instrucciones son para monitorear pasivamente las ondas. Seguir estas instrucciones INTERFERIRÁ con la habilidad de tu dispositivo para enmallar si se usan en el dispositivo ejecutando Commotion.</p>

<p>Antes de comenzar el monitoreo de tráfico inalámbrico debes preparar el radio en el equipo que ejecuta Wireshark. Estas instrucciones basadas en Debian deberían funcionar en la mayoría de los sistemas Linux sólo con pequeñas modificaciones. Si quieres copiar y pegar los siguientes comandos en tu dispositivo copia las líneas sin el signo de dólar. Reemplaza  &lt;CHANNEL&gt; con el canal del dispositivo wirless que estarás monitoreando para usar su mesh.</p>

	$ sudo service network-manager stop 
	$ sudo iwconfig wlan0 channel &lt;CHANNEL&gt; 
	$ sudo ifconfig wlan0 down 
	$ sudo iwconfig wlan0 mode Monitor 
	$ sudo wireshark

<p>Ahora que tu radio está lista y wireshark está abierto, necesitamos configurarlo. Para establecer tu interfaz inalámbrica para oír todo el tráfico, y no sólo el tráfico entre ella y los dispositivos a los que le hable tenemos que configurarla al airwaves. Dale doble clic en wlan0 y checa la caja de "modo de uso de monitor".</p>

<p><img alt="" src="/files/styles/large/public/ws_mon_mode.png" /></p>

<p>Da clic en "OK" y luego da clic en el botón de inicio de la ventana principal para comenzar a monitorar la señal wifi a tu alrededor.</p>

<p><img alt="" src="/files/styles/large/public/ws_traffic.png" /></p>

<h2>Monitoreando el tráfico Commotion Mesh</h2>

<p>Commotion actualmente usa el protocolo de redes mesh <a href="https://en.wikipedia.org/wiki/Optimized_Link_State_Routing_Protocol">OLSR</a>&nbsp;para hacer el enmallado. Una de las muchas razones por las que amo Wireshark, es porque ha creado una serie de filtros para varios tipos de tráfico. Nosotros estaremos usando los <a href="https://www.wireshark.org/docs/dfref/o/olsr.html">filtros OLSR</a> para asegurarnos que sólo vemos el tráfico de la mesh Commotion. Para filtar los paquetes que estás viendo en las airwaves y que sólo se vea el tráfico OLSR escribe&nbsp;<em>olsr </em> en la sección de filtro. Esto alentará significativamente el número de paquetes que veas. Sólo verás el tráfico que contiene paquetes olsr enviados por los dispositivos a tu alrededor. Esto se verá como algo así...</p>

<p><img alt="" src="/files/styles/large/public/ws_olsr_traffic.png" /></p>

<p>Dando clic en una línea en esta lista seleccionará un sólo paquete de información. Una vez que des clic en uno de estos paquetes, llenará el cuadro de abajo con información sobre el paquete.</p>

<p><img alt="" src="/files/styles/large/public/ws_olsr_packet.png" /></p>

<p>Cada paquete se romperá en una serie de secciones expandibles. Hay muchos datos debajo de estas secciones. Para este post sólo estaremos viendo a las pocas piezas importantes de datos que necesitamos probar para que la codificación funcione. Primero, necesitamos asegurarnos que estamos viendo sólo nuestros dispositivos, y no a docenas, si no es que cientos, de otros dispositivos Commotion que se están enlazando en tu vecindario cada día. La sección "IEEE 802.11 Data" retendrá la información acerca del dispositivo que envió el mensaje.</p>

<p><img alt="" src="/files/styles/large/public/ws_olsr_ieee.png" /></p>

<p>El valor de la "Dirección Fuente" será la dirección MAC de tu router. Si te conectas a tu router y corres&nbsp;<em>$ ifconfig </em> en él puedes comparar el " HWaddr" de las interfaces mesh con esta dirección. Si coinciden, entonces el paquete que estás viendo fue enviado por tu dispositivo. Asegúrate de escribir la información fuente de tu nodo aquí. La necesitaremos después. También notarás que la “dirección destino” está configurada para “Transmitir (ff:ff:ff:ff:ff:ff)". Los mensajes OLSR se transmiten para que cualquier otro dispositivo mesh los oiga para que usen una dirección “Transmisión” compartida y que sepan donde buscar mensajes OLSR.</p>

<p>Por último, veamos los datos actuales que se están enviando. La sección “Optimized Link State Routing Protocol" contiene los datos que tu router está enviando a la red mesh. En este ejemplo está enviando un mensaje de SALUDOS que permite que otros dispositivos mesh sepan que existe.</p>

<p><img alt="" src="/files/styles/large/public/ws_OLSR_TC_message.png" /></p>

<p>Observando estos paquetes podemos ver todos los nodos en el area que están corriendo OLSR sin cifrado. Para ver los paquetes cifrados tenemos que activar el cifrado mesh en su dispositivo. Puedes agregar una contraseña para cifrar la malla a tu menú de routers en <strong> Config Básica -&gt; Configuración de red -&gt; Red mesh </strong>. Te enseñaría una foto de él en mi router, pero estoy a la mitad de probar una traducción, así que la mitad está en francés.</p>

<p>Si todavía estás viendo wireshark verás que de pronto el tráfico OLSR de tu dispositivo paró por completo. Los datos que hace que un paquete olsr sea fácilmente soportable por wireshark ahora están cifrados. Remueve tu filtro olsr y da clic en el botón de limpiar. Toma la dirección fuente que capturaste antes y ve si puedes encontrar a tu dispositivo transmitiendo un paquete. Puedes usar&nbsp;<em>wlan.addr == SOURCE_ADDRESS </em> con la dirección MAC que capturaste antes en la barra de filtro para solo mostrar los paquetes de tu router. La razón por la que estás usando tu dirección fuente en lugar de la dirección IP que fue listada bajo fuente antes, es que la dirección IP también está cifrada ahora.</p>

<p>Si estás también corriendo un Punto de Acceso en tu dispositivo verás los paquetes viniendo de tus direcciones fuente transmitiendo invitaciones para unirse a ese punto de acceso. Asegúrate de estar viendo un paquete de transmisión con una sección “Data” dentro. Esto diferenciará el paquete OLSR de los anuncios para el punto de acceso del router, mostrado abajo. Por cierto, si no estás divirtiéndote aún, no sabes lo que es vida.</p>

<p><img alt="" src="/files/styles/large/public/ws_broadcast_frame.png" /></p>

<p>Si guardaste tu viejo paquete, o tomaste una foto, notarás que en la sub-sección <strong>IEEE 802.11 Data -&gt; Frame Control -&gt; Flags</strong> que en nuestro paquete cifrado muestra como&nbsp;<em>.1.. .... = Bandera protegida: Datos protegidos.</em> Un paquete sin cifrar se muestra como <em> .0.. .... = Bandera protegida: Datos no protegidos. </em>*************************** Esta información del "header" les permite a otros dispositivos saber que los datos abajo están cifrados.</p>

<p>Como se planteó en "Bandera protegida", los paquetes cifrados en la sección de datos son simplemente una cadena larga y un valor especificando su longitud. Aquí es donde la información del "header" sin cifrar se detiene y el paquete cifrado comienza. Todos los datos en el paquete son cifrados como la cadena de texto incomprensible que ves abajo. Ver esto nos permite asegurarnos que nuestra red mesh esté de hecho cifrando los datos que envía.</p>

<p><img alt="" src="/files/styles/large/public/ws_enc_data.png" /></p>

<p>Wireshark puede hacer más que sólo mostrar que has cifrado tu tráfico. Con wireshark y unos pocos nodos mesh sin cifrar puedes observar el elaborado baile que se requiere para hacer que una red mesh funcione. Si agregas una puerta de entrada y un usuario a esto puedes incluso mirar cómo se ven los datos de usuario sobre una red mesh cifrada vs. una no cifrada. Pero, este es un viaje para otro día. Antes de dejarte, hagamos que tu interfaz inalámbrica regrese a lo normal. La primera parada escanear y cerrar wireshark. Asegúrate de guardar tus archivos de captura si quieres verlos después. Una vez que cierre haz lo siguiente.</p>

	$ sudo ifconfig wlan0 down 
	$ sudo iwconfig wlan0 mode Managed 
	$ sudo ifconfig wlan0 up 
	$ sudo service network-manager restart

<p>Espero que hayas disfrutado este pequeño tour para examinar tu dispositivo mesh desde los datos que envía al mundo. Por favor haznos saber si quieres que te mostremos las técnicas de depuración de otra red mesh o conceptos en nuestra sección de comentarios debajo o vía correo electrónico.</p> 
