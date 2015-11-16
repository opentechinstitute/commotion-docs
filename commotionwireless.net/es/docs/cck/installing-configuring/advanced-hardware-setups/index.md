---
layout: cck
title: Configuraciones Avanzadas de Hardware
site_section: docs
sub_section: [cck,cck-installing]
pdf: cck/installing-configuring/CCK-Advanced_Hardware_Setups.pdf
pdf-all: true
categories:
created: 2014-08-13
changed: 2014-08-13
post_author: andygunn
lang: es
---

<img alt="Common Configurations graphic" src="/files/CCK_CommonConfigs_Intro2.png" class="img-responsive" />

<section id="introduction">
<h2>Introducción</h2>

<p>Para la mayoría de las redes comunitarias, instalar algunos nodos en el techo o las ventanas sería suficiente para satisfacer las necesidades del vecindario o pueblo. Para otros, se requerirán instalaciones y configuraciones más complejas. Esta guía sigue y es una compañía avanzada de <a href="/docs/cck/installing-configuring/common-hardware-setups/">Instalaciones de Hardware Comunes</a>, que cubre la mayoría de las configuraciones más comunes y básicas de Commotion.</p>

<p>A veces necesitarás conectar múltiples nodos juntos en un solo sitio, y esta guía te ayudará con eso. Algunas de las instrucciones abajo requieren algo de familiaridad con conceptos de redes, así que te recomendamos leer <a href="/docs/cck/networking/learn-networking-basics/">Aprende lo Básico de las Redes</a> first.</p>
<p><img src="/files/CCK_CommonConfigs_buildings.png" style="max-width:590px;" /></p>
</section>


<section id="materials-and-supplies-needed">
<h3>Materiales + Suministros necesarios</h3>

<ol class="rteindent1">
	<li>Necesitas una impresión de la configuración, incluyendo información específica para el nodo en que estás trabajando.</li>
	<li>Información sobre la configuración de otros nodos en la red.</li>
</ol>

<p><strong>Tiempo requerido: Varia dependiendo de la complejidad – de 20 minutos a una hora.</strong></p>
</section>


<section id="meshing-with-ethernet-dhcp">
<h2>Enmallando con Ethernet, con una puerta de entrada al Internet usando DHCP para asignaciones automáticas de direcciones IP</h2>

<p>Si quieres proveer una conexión a una puerta de entrada a Internet en tu red mesh, ayuda usar varios nodos en la ubicación que hospedará tal conexión. Esto debería reducir los cuellos de botella que suelen ocurrir cuando solo un nodo está conectado a la puerta de entrada.</p>
<p><img src="/files/CCK_CommonConfigs_05_Nodes_meshed_via_Ethernet_with_gateway.png" class="img-responsive" /></p>

<p>El diagrama abajo:</p>
<ul class="rteindent1">
   <li><strong>(A)</strong> Representa los nodos corriendo en el software Commotion.</li>
   <li><strong>(B)</strong> Representa los enlaces enmallados inalámbricos entre los nodos.</li>
   <li><strong>(C)</strong> Representa el Punto de Acceso generado por el nodo Commotion para que los usuarios se conecten.</li>
   <li><strong>(D)</strong> Representa un switch Ethernet, que transfiere datos entre los dispositivos conectados.</li>
   <li><strong>(E)</strong> Representa cableado Ethernet conectando el módem y los nodos al swith Ethernet.</li>
   <li><strong>(F)</strong> Representa el módem o router del Proveedor de Servicio de Internet (Internet Service Provider, ISP), conectado al Internet. Provee direcciones IP al puerto local con DHCP.</li>
   <li><strong>(G)</strong> Representa el Internet.</li>
</ul>

<p>El diagrama de abajo demuestra como se vería esto con el equipo instalado en un edificio:</p>
<p><img src="/files/CCK_CommonConfigs_05_Nodes_meshed_via_Ethernet_with_gateway_building.png" class="img-responsive" /></p>

<p><strong>Pasos para Configurar:</strong></p>
<p>Primero, asegura los nodos Commotion con vecinos inalámbricos.  Ejecuta el Asiste de Configuración en el primer arranque, con el mismo:</p>
<ul class="rteindent1">
   <li><strong>Nombre de red mesh.</strong> Por defecto, está configurado a commotionwireless.net.</li>
   <li><strong>Canal inalámbrico.</strong> Por defecto, son 11 para dispositivos inalámbricos de 2.4GHz.</li>
   <li><strong>Contraseña mesh encriptada.</strong> Las contraseñas deben coincidir através de la red. Puedes también inhabilitar el encriptado a través de la red.</li>
</ul>

<p>Los nodos conectados al módem o router deberían recibir direcciones IP y configurarse a si mismos como puertas de entrada. Para asegurarse que los nodos estén recibiendo direcciones IP, asegúrate que cada nodo esté conectado al switch, luego reinicia cada nodo después de ejecutar el Asistente de Configuración:</p>

<ol class="rteindent1">
   <li>Navega a <strong>Avanzado -> Sistema -> Reinicia.</strong></li>
   <li>Da clic y espera que el dispositivo reinicie.</li>
</ol>

<p>En segundo lugar, coloca los nodos para prevenid problemas con los nodos iniciando antes que el módem.</p>

<ol class="rteindent1">
   <li>Navega al panel de Administración en el nodo.</li>
   <li>Navega al menú <strong>Configuraciones Básicas -> Configuraciones de Red -> Interfaces Adicionales de Red</strong>.</li>
   <li>En el menú que se jala hacia abajo, selecciona, y asegúrate que esté checado***************In the pull-down menu, select , and make sure is checked.***********</li>
   <li>"Guardar y aplicar" estas configuraciones.</li>
</ol>

<p>En tercer lugar, habilita el meshing sobre el Ethernet para que los nodos se conecten al switch.</p>

<ol class="rteindent1">
   <li>Navega al panel de Adminitración en el nodo.</li>
   <li>Navega al menú <strong>Advanzado -> Servicios -> OLSR</strong>.</li>
   <li>Al final de la página, debajo de la sección de interfaces, da clic en el botón "Agregar".</li>
   <li>En la siguiente página, da clic en el botón de radio para la interfaz "WAN" debajo de "Red".</li>
   <li>En el menú que se jala, selecciona “Ether”.*************In the pull down menu, select "Ether".***********</li>
   <li>Navega hacia el fondo de la página y da clic en "Guardar y Aplicar" estos cambios.</li>
</ol>

<p>Haz estos paso para cada nodo Commotion conectado al switch. Cuando todos estos nodos se hayan configurado, puedes confirmar que estén enmallando sobre las conexiones de Ethernet cableado al conectarse a uno de los nodos y navegar por el
<strong>Menú Básico -> Estatus</strong>. Luego dar clic y mirar debajo de la sección. Deberías ver entradas para todos los nodos conectados al switch, y deberían tener direcciones IP en la misma subred, como se dan por el módem o el router. Estas deberían verse como 192.168.x.y, o 10.0.x.y, o algo similar. Esa entrada tendrá un valor ETX de 0.100. Si ese es el caso, los nodos están enmallados con Ethernet exitosamente.</p>

<p class="tip">&nbsp;Montar routers inalámbricos muy cerca uno de otro puede causar interferencia. Para mejor rendimiento, nosotros recomendamos:<br/>
1. Montar el equipo en tubos separados, con dos o tres metros (6 a 10 pies) entre ellos.<br/>
2. Usar protecciones de metal en la espalda de los nodos direccionales. Estas reducen la señal inalámbrica que irradia detrás del equipo, reduciendo la interferencia. Puedes <a href="http://www.rfarmor.com/cart/index.php?main_page=product_info&cPath=12&products_id=30">comprarlos comercialmente</a>, o <a href="http://gowasabi.net/content/importance-shielding">hacer tus propios broches de metal para el edificio</a>.</p>
</section>


<section id="meshing-with-ethernet-no-gateway">
<h2>Enmallando con Ethernet, sin una puerta de acceso a Internet</h2>

<p>Even if a tall or centrally located site doesnsupernodePerform rebootInterface OverviewEditCommon ConfigurationSwitch ProtocolReally switch protocol?Save and ApplyexitAddModesave and applyPerform rebootNearby Mesh DevicesOLSR LinksPerform rebootEditCommon ConfigurationSwitch Protocols modem has the IP address 192.168.50.1. The items to set are:*****************************************</li>
	<ol type="i">
	    <li>Dirección IP IPv4 (Dda por tu ISP, una para cada nodo)</li>
	    <li>Máscara de red IPv4 (normalmente 255.255.255.0, pero puede variar)</li>
	</ol>
	<li>Guarda y aplica estas configuraciones.</li>
   </ol>
   <li>Agrega la interfaz WAN a la zona firewall apropiada.</li>
   <ol type="a">
	<li>SSH hacia el nodo y escribe los siguientes comandos, apretando enter después de cada línea:</li>
<pre>
uci add_list firewall.@zone[2].network=wan
uci commit firewall
</pre>
	<li>Sal del nodo con el comando .</li>
   </ol>
   <li>Finalmente, ve al menú <strong>Red -> Router Estático </strong>.</li>
   <ol type="a">
	<li>Da clic en la sección.</li>
	<li>En la entrada que sale, selecciona en el primer menú que se arrastra hacia abajo*************In the entry that comes up, select in the first pull-down menu.***********</li>
	<li>En el campo, escribe 0.0.0.0</li>
	<li>En el campo, escribe 0.0.0.0</li>
	<li>En el campo, escribe la dirección IP para el módem de la puerta de entrada o el router del ISP. En nuestro ejemplo es 192.168.50.1</li>
	<li>Guarda y Aplica estas configuraciones.</li>
   </ol>
   <li>Ve a <strong>Services -> OLSR</strong>:</li>
   <ol type="a">
	<li>En el fondod e la página, debajo de la sección de interfaces, da clic en el botón de "Agregar".</li>
	<li>En la página siguiente, da clic en el botón de radio para la interfaz "WAN" debajo de "Red".</li>
	<li>En el menú que se arrastra hacia abajo, selecciona “Ether”**************In the pull down menu, select "Ether".****************</li>
	<li>Navega hacia el fondo y las configuraciones.</li>
   </ol>
</ol>

<p>Finalmente, conecta cada nodo al switch y reinicia el nodo una vez más. Esto asegurará que las configuraciones de las direcciones IP están en el estado correcto.</p>
<ol class="rteindent1">
   <li>Navega a <strong>Advanzado -> Sistema -> Reinicio</strong>.</li>
   <li>Da clic y espera a que el dispositivo se reinicie.</li>
</ol>

<p>Haz estos pasos para cada nodo Commotion conectado al switch. Cuando configures el IP en esos nodos, debes configurarlo a diferentes direcciones en la misma subred que configuraste arriba. En el ejemplo dado, configurarías las direcciones a 192.168.50.3, 192.168.50.4, y así sucesivamente.</p>

<p>Haz estos pasos para cada nodo Commotion conectado al switch. Cuando todos los nodos se hayan configurado, puedes confirmar que están enmallándose sobre las conexiones Ethernet al conectarse a uno de los nodos y navegar a el <strong>Menú Básico -> Estatus</strong>. Luego da clic y mira bajo la sección. Deberías ver entradas por todos los nodos conectados al switch, y deberían tener direcciones IP en la misma subred, como se dieron por el módem o el router. Estas se verán como 192.168.x.y, or 10.0.x.y, o algo similar. Esa entrada tendrá un valor ETX de 0.100. Si este es el caso, los nodos están exitosamente enmallando con el Ethernet.</p>

<p class="tip">&nbsp;Montar routers inalámbricos muy cerca uno de otro puede causar interferencia. Para mejor rendimiento, nosotros recomendamos:<br/>
1. Montar el equipo en postes separados, con dos o tres metros (6 a 10 pies) de distancia entre ellos.<br/>
2. Usar protecciones de metal en la espalda de los nodos direccionales. Estas reducen la señal inalámbrica que irradia detrás del equipo, reduciendo la interferencia. Puedes<a href="http://www.rfarmor.com/cart/index.php?main_page=product_info&cPath=12&products_id=30">comprarlos comercialmente</a>, o <a href="http://gowasabi.net/content/importance-shielding">hacer tus propios broches de metal para el edificio</a>.</p>

</section>

<section id="section-definitions">
<h2>Definiciones</h2>

<dl>
	<dt> AP: Punto de Acceso (Access Point)</dt>
	<dd>Un dispositivo que permite que los dispositivos inalámbricos se conecten a una red usando Wi-Fi o estándares relacionadoss</dd>
	<dt>DHCP: Dynamic Host Configuration Protocol***********</dt>
	<dd>Asigna dircciones IP a los dispositivos cliente, como computadoras de escritorio, laptops y teléfonos, cuando están conectados a Ethernet o a redes inalámbricas.</dd>
	<dt>Ethernet</dt>
	<dd>Un tipo de protocolo de redes – define los tipos de cables y conexiones que se usan para conectar computadores, switches, y routers juntos. A menudo el cableado Ethernet es Categoría 5 o 6, hecho de cables torcidos similares a los cables del teléfono.</dd>
	<dt>Router</dt>
	<dd>Un dispositivo que determina como se mueven los mensajes a través de la red de la computadora.</dd>
	<dt>Nodo</dt>
	<dd>Un dispositivo individual en una red mesh.</dd>
	<dt>WAN: Wide Area Network</dt>
	<dd>Significa la conexión al Internet Global o a una red diferente, típicamente más grande.</dd>
</dl>

</section>
