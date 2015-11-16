---
layout: cck
title: Configuraciones de Hardware Comunes
site_section: docs
sub_section: [cck,cck-installing]
pdf: cck/installing-configuring/CCK-Common_Hardware_Setups.pdf
pdf-all: true
categories:
created: 2013-11-06
changed: 2014-08-13
post_author: andygunn
lang: es
---

<img alt="Commotion Common Configurations graphic" src="/files/CCK_CommonConfigs_Intro.png" class="img-responsive" />

<section id="introduction">
<h2>Introducción</h2>

<p>Cuando planeas y construyes una red, necesitarás instalar el nodo inalámbrico o nodos que tengan el mayor sentido para cada sitio. En la mayoría de los casos, un solo nodo inalámbrico en un solo nodo inalámbrico en el techo o en una ventana conectará a los vecinos cercanos y formará una malla. En algunos casos, este nodo inalámbrico puede conectarse por cable Ethernet a una conexión en una puerta de acceso al Internet, compartiéndolo con dichos vecinos. En otros casos, el nodo se conectará al cable Ethernet a una o más computadoras adentro del edificio, algunas de las cuales estarán compartiendo aplicaciones locales. En la mayoría de los casos, nodos en el techo o las ventanas tendrán Puntos de Acceso habilitados para permitir que las personas se conecten de forma inalámbrica.</p>

<p>Las instrucciones abajo están diseñadas para mostrar como configurar e instalar el hardware en estas diferentes maneras. Cada configuraión listada abajo describe las configuraciones que debes cambiar para que la red trabajo de acuerdo a tus planes. Estas son las tres configuraciones más comunes de los nodos Commotion – Si tienes necesidades más complejas o quieres instalar múltiples nodos en un solo sitio, por favor consulta la guía <a href="/docs/cck/installing-configuring/advanced-hardware-setups/">Configuraciones Hardware Avanzadas</a>.</p>
</section>

<section id="materials-and-supplies-needed">
<h3>Materiales + Suministros necesarios</h3>

<ol class="rteindent1">
	<li>Necesitas una impresión de la configuración, incluyendo la información específica para del nodo en el que estás trabajando.</li>
	<li>Información acerca de la configuración de otros nodos en la red.</li>
</ol>

<p><strong>Tiempo requerido: Varia dependiendo de la configuración – de 10 a 30 minutos.</strong></p>
</section>

<section id="nodes-meshed-wirelessly">
<h2>Dos o más nodos enmallados inalámbricamente</h2>

<p>La configuración más común para los nodos inalámbricos está hecho de los nodos mismos, los links mesh entre los nodos, y cualquier usuario conectado a la red. Involucra dos o más nodos inalámbricos, instalados con el software Commotion. Los nodos en el ejemplo abajo son un surtido de nodos omnidireccionales, pero el tipo específico no importa siempre y cuando estén dentro del rango inalámbrico de uno y otro.</p>

<p><img src="/files/CCK_CommonConfigs_01_Nodes_meshed_wirelessly_building.png" class="img-responsive" /></p>

<p>El diagrama de abajo:</p>
<ul class="rteindent1">
    <li><strong>(A)</strong> Representa nodos inalámbricos ejecutando el software de Commotion.</li>
    <li><strong>(B)</strong> Representa los enlaces enmallados inalámbricos entre los nodos.</li>
    <li><strong>(C)</strong> Representa el Punto de Acceso generado por el nodo Commotion para que los usuarios se conecten.</li>
    <li><strong>(D)</strong> Representa una persona usando una laptop, conectada a un Punto de Acceso de un nodo del techo.</li>
</ul>

<p><strong>Pasos para Configurar:</strong></p>
<p>Los nodos Commotion deberían enmallarese de forma inalámbrica ejecutando el Asistente de Configuración en el primer arranque, siempre y cuando los nodos están configurados con el mismo:</p>
<ul class="rteindent1">
    <li><strong>Nombre de red mesh.</strong> Por defecto, está configurado a commotionwireless.net.</li>
    <li><strong>Canal inalámbrico.</strong> Por defecto, son 11 para dispositivos inalámbricos de 2.4GHz.</li>
    <li><strong>Contraseña encriptada mesh.</strong> Las contraseñas deben coincidir através de la red. Puedes también inhabilitar el cifrado a través de la red.</li>
</ul>

<p>Después de las configuraciones iniciales con el Asistente de Configuración estas configuraciones están todas visibles y editables en el menú de <strong>Configuración Básica -> Configuraciones de Red -> Red Mesh</strong> en el panel de Administración de tu nodo inalámbrico. Si algún nodo no está enmallado, checa que las configuraciones mesh sean idénticas en todos los nodos, y que los nodos estén a un mismo rango inalámbrica unos de otros. Para una guía en acceder y cambiar estas configuraciones, ve la página <a href="/docs/cck/installing-configuring/configure-commotion/">Configura Commotion</a> disponible. </p>
</section>

<section id="nodes-connected-to-gateway">
<h2>Uno o más nodos conectados a una puerta de acceso</h2>

<p>La mayoría de las redes está diseñada para proveer servicios, ¡con una conexión al Internet global siendo el más popular! Commotion está diseñado para compartir servicios a través de toda la red mesh por defecto, e intentará detectar una conexión con puerta de acceso al Internet cuando un nodo arranque. Si el nodo inalámbrico recibe una dirección IP via DHCP en el puerto conectado de Ethernet, se  configurará para si mismo una puerta de acceso.</p>
<p><img src="/files/CCK_CommonConfigs_02_Nodes_with_gateway_building.png" class="img-responsive" /></p>

<p>El diagrama abajo:</p>
<ul class="rteindent1">
    <li><strong>(A)</strong> Representa los nodos ejecutando el software Commotion.</li>
    <li><strong>(B)</strong> Representa los enlaces enmallados inalámbricos entre los nodos.</li>
    <li><strong>(C)</strong> Representa el Punto de Acceso generado por el nodo Commotion para que los usuarios se conecten.</li>
    <li><strong>(D)</strong> Representa la laptop de un usuario, conectada al segundo punto de acceso del nodo.</li>
    <li><strong>(E)</strong> Representa el módemo o router del Proveedor de Servicio de Internet(Internet Service Provider, ISP), conectado al Internet. Provee direcciones IP en el puerto local con DHCP.</li>
    <li><strong>(F)</strong> Representa la conexión al Internet.</li>
</ul>

<p>El tipo de módem va a variar dependiendo del Proveedor de Servicio de Intenet, pero debería al menos tener dos puertos:</p>
<p><img src="/files/CCK_CommonConfigs_02_Nodes_with_gateway_modem.png" style="max-width:400px;" /></p>

<ul class="rteindent1">
    <li><strong>(G)</strong> Muestra el puerto LAN del módem (modem LAN port*******), que está conectado al puerto WAN de Commotion. Puede haber múltiples puertos LAN en el módem o el router, cualquiera debería funcionar bien.</li>
    <li><strong>(H)</strong> Muestra la conexión del módem al Internet – vía DSL, cable, adaptador USB 3G, u otro tipo.</li>
</ul>

<p>El cable del del puerto del módem LAN debería correr al puerto WAN en el nodo Commotion. En la mayoría de los routers, habrá un solo puerto en el suministro de energía PoE de la unidad. En routers con múltiples puertos, el puerto WAN será típicamente etiquetado, y es a menudo de un color diferente – usualmente azul. Estos ejemplos se muestran abajo:</p>
<p><img src="/files/CCK_CommonConfigs_02_Nodes_with_gateway_ports.png" class="img-responsive" /></p>

<p><strong>Pasos para Configurar:</strong></p>
<p>Los nodos Commotion deberían enmallarse inalámbricamente después de ejecutar el Asistente de Configuración en el primer arranque, siempre y cuando los nodos estén configurados con el mismo</p>
<ul class="rteindent1">
    <li><strong>Nombre de red Mesh.</strong> Por defecto, está configurado a <em>commotionwireless.net</em>.</li>
    <li><strong>Canal inalámbrico.</strong> Por defecto, son 11 para dispositivos inalámbricos de 2.4GHz.</li>
    <li><strong>Contraseña encriptada mesh.</strong> Las contraseñas deben coincidir através de la red. Puedes también inhabilitar el cifrado a través de la red.</li>
</ul>

<p>El primer nodo Commotion conectado al módem debería recibir una dirección IP y configurarse a sí mismo como una puerta de acceso. Anunciará esto en la red por defecto, siempre y cuando el “Anuncia tu puerta de acceso al mesh” esté checado en el menú de <strong>Redes de Interfaz Adicionales</strong>. En este punto, el usuario conectándose con la laptop en el nodo mesh puede acceder a Internet.</p>

<p>Después de correr el Asistente de Configuración, puedes configurar el nodo a un nodo de “puerta de acceso únicamente”:</p>
<p><img src="/files/CCK_CommonConfigs_02_Nodes_with_gateway_screenshot.png" class="img-responsive" /></p>

<ol class="rteindent1">
    <li>En el panel de administración, navega a el menú de
<strong>Configuración Básica -> Configuraciones de red -> Interfaces de Redes Adicionales</strong>.</li>
    <li>En el menú que se arrastra de la “Configuración de la Puerta de Acceso”, selecciona “Este dispositivo siempre DEBE intentar de adquirir el DHCP lease”. *************************In the “Gateway Configuration” pull-down menu, select “This device should ALWAYS try to acquire a DHCP lease”.</li>
    <li>Asegúrate de que esté seleccionado “Anuncia tu puerta de entrada a la red mesh”.</li>
    <li>Guarda y aplica estas configuraciones.</li>
</ol>
</section>

<section id="node-connected-to-server">
<h2>Nodo conectado a una servicio local de aplicaciones</h2>

<p>Tienes un servidor web hospedando un blog comunitario en tu computadora, y quieres compartirlo con la red del vecindario. Conecta la computadora al nodo mesh usando el puerto de Ethernet cableado. La laptop recibirá una dirección IP en la red, y puedes usar el portal de aplicaciones Commotion vía la página splash en todos los nodos.</p>
<p><img src="/files/CCK_CommonConfigs_03_Nodes_with_server.png" class="img-responsive" /></p>

<p>En el diagrama abajo:</p>
<ul>
    <li><strong>(A)</strong> Representa un nodo ejecutando el software Commotion.</li>
    <li><strong>(B)</strong> Representa los enlaces enmallados inalámbricos entre los nodos.</li>
    <li><strong>(C)</strong> Representa el Punto de Acceso generado por el nodo Commotion para que los usuarios se conecten.</li>
    <li><strong>(D)</strong> Representa una laptop configurada como servidor, conectada a un puerto Ethernet cableado de un nodo. En este caso, uno de los puertos LAN.</li>
</ul>

<p>El cable correrá de los puertos LAN de los nodos Commotion. En la mayoría de los routers exteriores, habrá un solo puerto en el suministro de energía POE. En routers con múltiples puertos, los puertos LAN serán típicamente etiquetados, y están en diferentes colores – usualmente amarillo. Estos ejemplos se muestran abajo:</p>
<p><img src="/files/CCK_CommonConfigs_03_Nodes_with_server_ports.png" class="img-responsive" /></p>

<p><strong>Pasos para configurar:</strong></p>
<p>Los nodos Commotion deberían enmallarse inalámbricamente después de ejecutar el Asistente de Configuración en el primer arranque, siempre y cuando los nodos estén configurados con el mismo:</p>
<ul class="rteindent1">
    <li><strong>Nombre de Red Mesh.</strong> Por defecto, está configurado a commotionwireless.net.</li>
    <li><strong>Canal Inalámbrico.</strong> Por defecto, son 11 para dispositivos inalámbricos de 2.4GHz.</li>
    <li><strong>Contraseña encriptada mesh.</strong>
Las contraseñas deben coincidir através de la red. Puedes también inhabilitar el cifrado a través de la red.</li>
</ul>

<p>El nodo Commotion debería proveer una dirección IP a la computadora conectada. Para asegurarte que esto sea siempre el caso, puedes configurar el nodo al modo “solo servidor DHCP”:</p>
<p><img src="/files/CCK_CommonConfigs_03_Nodes_with_server_screenshot.png" class="img-responsive" /></p>

<ol class="rteindent1">
    <li>En el panel de administración, navega al menú de <strong>Configuración Básica -> Configuraciones de Redes -> Interfaces de Redes Adicionales</strong>.</li>
    <li>En el menú que se arrastra de la “Configuración de Puerta de Acceso”, selecciona “Este dispositivo debería SIEMPRE proveer DHCP leases a los clientes”.*********************************
In the “Gateway Configuration” pull-down menu, select “This device should ALWAYS provide DHCP leases to clients”.</li>
    <li>Guarda y aplica estas configuraciones.</li>
</ol>
</section>

<section id="node-connected-t0-ap">
<h2>Nodo conectado a un AP o un router externo</h2>

<p>Si no hay conexión a Internet dentro del edificio, puedes conectarte a la red mesh del techo para proveer acceso. Conecta un Punto de Acceso interno o router con un AP al puerto Ethernet conectado del nodo Commotion en el techo. El nodo proveerá a cualquier usuario conectándose al Punto de Acceso con dispositivos inalámbricos como teléfonos inteligentes, y laptops con direcciones IP en la red. Estos routers y Puntos de Acceso que no son de Commotion pueden agregar cobertura inalámbrica a las áreas que no están cubiertas por los nodos mesh exteriores. Al conectar estos Puntos de Acceso, los usuarios pueden acceder a los servicios y puertas de acceso que están en la red mesh. Ya que Commotion no es compatible con todos los routers, este método te permite usar los routers y Puntos de Acceso que podrías ya tener.</p>
<p><img src="/files/CCK_CommonConfigs_04_Nodes_with_AP.png" class="img-responsive" /></p>

<p>En el diagrama abajo:</p>
<ul>
    <li><strong>(A)</strong> Representa los nodos ejecutando el software Commotion.</li>
    <li><strong>(B)</strong> Representa los enlaces enmallados inalámbricos entre los nodos.</li>
    <li><strong>(C)</strong> Representa el Punto de Acceso generado por el nodo Commotion para que los usuarios se conecten.</li>
    <li><strong>(D)</strong> Representa un Punto de Acceso o router externo, que no está ejecutando Commotion. Está conectado al puerto Ethernet LAN cableado del segundo nodo.</li>
</ul>

<p>EL diagrama de abajo demuestra como se vería esto con el equipo instalado en el edificio:</p>
<p><img src="/files/CCK_CommonConfigs_04_Nodes_with_AP_building.png" class="img-responsive" /></p>

<p><strong>Pasos para configurar:</strong></p>
<p>Los nodos Commotion deberían enmallarse inalámbricamente después de ejecutar el Asistente de Configuración en el primer arranque, siempre y cuando los nodos estén configurados con el mismo:</p>
<ul>
    <li><strong>Nombre de Red Mesh.</strong> Por defecto, está configurado a commotionwireless.net.</li>
    <li><strong>Wireless channel.</strong> Por defecto, son 11 para dispositivos inalámbricos de 2.4GHz.</li>
    <li><strong>Contraseña encriptada mesh.</strong> Si no quieres encriptar la red mesh, puedes dejar esto en blanco para deshabilitarlo.</li>
</ul>

<p>Asegúrate que el puerto LAN del nodo Commotion esté conectado al puerto “WAN” del Punto de Acceso o router. El puerto WAN es el puerto de conexión “de recepción”, a donde conectas un módem para el acceso a Internet. El nodo Commotion debería proveer una dirección IP al Punto de Acceso y cualquier otro usuario para conectarse. Para asegurarse que esto siempre sea el caso, después de ejecutar el Asistente de Configuración,  puedes configurar el nodo al modo “solo servidor DHCP”:</p>
<p><img src="/files/CCK_CommonConfigs_03_Nodes_with_server_screenshot.png" class="img-responsive" /></p>
<ol class="rteindent1">
    <li>En el panel de Administración, navega al menú de <strong>Configuración Básica-> Configuraciones de Red -> Interfaces de Redes Adicionales</strong>.</li>
    <li>En el menú que se arrastra de la “Configuración de Puerta de Acceso”, selecciona “Este dispositivo debería SIEMPRE proveer DHCP leases a los clientes”.*********************************
In the “Gateway Configuration” pull-down menu, select “This device should ALWAYS provide DHCP leases to clients”.</li>
    <li>Guarda y aplica estas configuraciones.</li>
</ol>
</section>

<section id="section-conclusion">
<h2>Conclusiones</h2>
<p>Eso cubre las tres configuraciones más básicas para instalar y configurar nodos Commotion. Si quieres ver ejemplos de configuraciones adicionales y pasos para configura, ve la guía <a href="/docs/cck/installing-configuring/advanced-hardware-setups/">Configuraciones Avanzadas de Hardware</a>.
</p>

</section>

<section id="section-definitions">
<h2>Definiciones</h2>

<dl>
	<dt>PA Punto de Acceso (Access Point, AP)</dt>
	<dd>Un dispositivo que permite que los dispositivo se conecten a una red cableada o conectada usando Wi-Fi o estándares relacionados</dd>
	<dt>DHCP: Dynamic Host Configuration Protocol***********</dt>
	<dd>Asigna direcciones IP a dispositivos de clientes, como computadoras de escritorio, laptops, y teléfonos, cuando están conectados a Ethernet o conectados a las redes Wireless.</dd>
	<dt>Ethernet</dt>
	<dd>Un tipo de protocolo de redes – define los tipos de cables y conexiones que se usan para  conectar computadoras, switches, y routers juntos. A menudo el cableado Ethernet es Categoría 5 o 6, hecho de cables torcidos similares a los cables del teléfono.</dd>
	<dt>Router</dt>
	<dd>Un dispositivo que determina como se mueven los mensajes a través de la red de la computadora</dd>
	<dt>Node</dt>
	<dd>Un dispositivo individual en una red mesh.</dd>
	<dt>WAN: Wide Area Network</dt>
	<dd>Significa la conexión al Internet Global o a una red diferente, típicamente más grande.</dd>
</dl>

</section>
