---
layout: default
title:  Aprende lo Básico de las Redes
site_section: docs
sub_section: [cck,cck-networking]
pdf: cck/networking/CCK-Learn_Networking_Basics.pdf
pdf-all: true
categories:
created: 2013-11-07
changed: 2014-08-22
post_author: critzo
lang: es
---
<section id="introduction">
<p><img alt="Learn Networking Basics graphic" src="/files/CCK_Networking_Basics_intro_graphic.png" /></p>

<h2>Introducción</h2>

<p>Este documento cubre los conceptos básicos de cómo funciona la creación de redes, y cómo utilizar diferentes dispositivos para construir redes. Las redes de computadoras han existido durante muchos años, y con el paso del tiempo las tecnologías se han vuelto más rápidas y menos costosas. Las redes se componen de varios dispositivos-de computadora, switches, routers-conectados entre sí por cables o señales inalámbricas. Entender los fundamentos de cómo las redes se organizan es un paso importante en la construcción de redes inalámbricas en una comunidad o barrio.</p>

<p>Este módulo cubre los conceptos de:</p>

<ol class="rteindent1">
	<li>Clientes y servidores—cómo los servicios como el correo electrónico y las páginas web se conectan usando redes.</li>
	<li>Direcciones IP—cómo los dispositivos se pueden encontrar en una red.</li>
	<li>Centrales de redes, switches y cables—los bloques de construcción de hardware de cualquier red.</li>
	<li>Routers y firewalls—cómo organizar y controlar el flujo del tráfico en la red.</li>
</ol>

<p>Leer este material debe tomar entre media hora y una hora. Explorar las actividades y los detalles del tema con un grupo tomará más tiempo.</p>
</section>

<section id="clients-and-servers">
<h2>Clientes and Servidores</h2>

<p>Una relación importante en las redes es aquella del <strong>servidor</strong> y el <strong>cliente</strong>. Un servidor es una computadora que almacena contenido y servicios como un sitio web, un archivo de medios o una aplicación de chat. Un buen ejemplo de un servidor es la computadora que almacena el sitio web para la página de búsqueda de Google: <a href="http://www.google.com"><strong>http://www.google.com</strong></a>. El servidor almacena esa página, y la envía cuando se solicita.</p>

<p>Un cliente es una computadora diferente, como tu laptop o teléfono celular, que solicita ver, descargar o utilizar el contenido. El cliente puede conectarse a través de una red de intercambio de información. Por ejemplo, cuando solicitas la página de búsqueda de Google con tu navegador web, tu computadora es el cliente.</p>

<p>En el siguiente ejemplo, dos computadoras están conectadas entre sí mediante un cable Ethernet. Estas computadoras son capaces de verse entre sí y comunicarse a través del cable. La computadora cliente solicita una página web de la computadora servidor. El sitio web se entrega desde el servidor, y se muestra en el navegador web del cliente.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__626 img__view_mode__media_original attr__format__media_original" height="197" src="/files/CCK_Networking_Basics_Client_server_diagram.png" typeof="foaf:Image" width="510" /></p>

<p>La mayoría de las solicitudes y entrega de contenido en redes son similares a, o se basan en, una relación de cliente con el servidor. En una red, el servidor puede estar ubicado casi en cualquier lugar, y si el cliente tiene la dirección, puede acceder a los contenidos en el servidor.</p>

<p><strong>Activity:</strong> Cuál es un ejemplo del mundo real de una relación cliente y servidor:</p>

<pre>


Client: _________________


Server:_________________</pre>

<p class="rteindent1"><em>Ejemplo:<br />
cliente: receptor de radio en tu carro<br />
servidor: estación de radio</em></p>
</section>

<section id="ip-addresses">
<h2>Direcciones IP</h2>

<p>Para poder enviar y dirigir datos a través de la red, las computadoras necesitan ser capaces de identificar los destinos y orígenes. Esta identificación es una dirección IP (Protocolo de Internet). Una <strong>dirección IP</strong> es solo un set te cuatro números entre 1 y 254, separados por puntos. Un ejemplo de una dirección IP es <strong>173.194.43.7</strong>.</p>

<p>Una dirección IP es similar a una dirección de calle. Las partes de la dirección describen donde en el mundo se ubica el edificio, otra parte lo reduce al estado o ciudad, luego el área dentro del estado o ciudad, luego la ubicación de la calle.</p>

<p>Abajo podemos ver <strong>Calle 192.168.1</strong>. En ella hay tres casas:</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__627 img__view_mode__media_original attr__format__media_original" height="189" src="/files/CCK_Networking_Basics_IP_address_street.png" typeof="foaf:Image" width="510" /></p>

<p>La direcciones completas para cada una de estas casas son: 192.168.1.<strong>20</strong>, 192.168.1.<strong>21</strong>, y 192.168.1.<strong>22</strong>.</p>

<p>Existen diferentes clasificaciones o tipos de direcciones IP. Una red puede ser pública, o puede ser privada. Las direcciones IP públicas son accesibles en cualquier lugar en Internet. Las direcciones IP privadas no lo son, y la mayoría están normalmente escondidas detrás de un dispositivo con una dirección IP pública.</p>

<p>Aquí podemos ver un ejemplo—una calle con dos edificios con <strong>direcciones IP públicas</strong>—representando computadoras con direcciones que son visibles a todo el Internet. Estos edificios pueden estar en cualquier parte del mundo, pero sus direcciones están completas, así que sabemos exactamente donde están y les podemos mandar mensajes.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__628 img__view_mode__media_original attr__format__media_original" height="218" src="/files/CCK_Networking_Basics_IP_address_public.png" typeof="foaf:Image" width="510" /></p>

<p>Para ver un ejemplo de como las direcciones IP públicas y privadas se usan comunmente, demos otro vistazo a <strong>Calle 192.168.1</strong>. Tenemos un nuevo edificio en la calle. Ese edificio tiene una dirección IP pública, y una dirección IP privada. Hay también una barda que bloquea el resto del Internet de ver y pasar mensajes a direcciones en la calle.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__629 img__view_mode__media_original attr__format__media_original" height="190" src="/files/CCK_Networking_Basics_IP_address_private.png" typeof="foaf:Image" width="510" /></p>

<p>El edificio postal controla los mensajes que viajan entre el Internet y la calle, dando seguimiento a los mensajes que salen a la calle, y dirigiendo mensajes de regreso a la casa correcta. En la calle, tiene la dirección  <strong>192.168.1.1</strong>, y en Internet tiene la dirección <strong>74.10.10.50</strong>.</p>

<p><strong>Activity:</strong> Encuentra la dirección IP asignada a tu computadora, y tu red.</p>

<pre>


¿Cuál es la dirección IP de tu computadora? ____________________


Navega a <a href="http://ip.mayfirst.org"><strong>http://ip.mayfirst.org/</strong></a>
y escribe la dirección IP que reporta: ____________________
</pre>

<p>¿Son estos números los mismos o diferentes? ¿Por qué?</p>
</section>

<section id="network-hubs-and-switches">
<h2>Centrales de Red y Switches</h2>

<p>Tradicionalmente, las computadoras se conectan unas a otras usando cables—creando una red. El cable usando más a menudo es Ethernet, que consuste en cuatro pares de cables dentro de una cubierta de plástico. Es físicamente similar a los cables de teléfono, pero puede transportar muchos más datos.</p>

<p>Pero los cables y computadoras solas no hacen una buena red, por lo que una pronta solución fue utilizar una red <strong>central</strong>. Los cables Ethernet de la computadora se conectan al dispositivo similar al centro de una bicicleta de ruedas—donde todas las radios se unen en el centro.</p>

<p>Un ejemplo de como funciona una central se muestra abajo. Una computadora <strong>A</strong> quiere enviar un mensaje a una computadora <strong>B</strong>. Envía un mensaje a través del cable Ethernet a la central, luego la central repite el mensaje a todas las computadoras conectadas.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__630 img__view_mode__media_original attr__format__media_original" height="344" src="/files/CCK_Networking_Basics_Network_hub.png" typeof="foaf:Image" width="510" /></p>

<p>Una red usando una central se puede alentar si muchas computadores están mandando mensajes, ya que podrían intentar y enviar mensajes al mismo tiempo y confundir a la central. Para ayudar con este problema, las redes comenzaron a usar otro dispositivo llamado <strong>switch</strong>. En lugar de repetir todos los mensajes que llegan, un switch solo envía el mensaje al destino previsto. Esto elimina la repetición innecesaria de la central.</p>

<p>Usando un switch, una computadora <strong>A</strong> envía un mensaje a una computadora <strong>B</strong>—las otras computadoras no ven ese mensaje. Esas computadoras pueden envíar otros mensajes al mimso tiempo sin interferir.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__631 img__view_mode__media_original attr__format__media_original" height="344" src="/files/CCK_Networking_Basics_Network_switch.png" typeof="foaf:Image" width="510" /></p>

<p>No obstante, los switches tienen limitaciones—ellos solo saben acerca de las direcciones de los equipos que están conectados directamente a ellos. Así que, solo puedes enviar mensajes a un pequeño número de dispositivos—sin embargo, ¡el switch tiene muchos puertos! Si necesitas enviar un mensaje a una computadora o a otra red, se necesitará enviar a través de un router, que discutimos a continuación.</p>
</section>

<section id="routers-and-firewalls">
<h2>Routers y Firewalls</h2>

<p><strong>Routers</strong> hacen la mayoría del trabajo duro en una red – toman las decisiones acerca de todos los mensajes que viajan en la red, y si pasan mensajes de y a redes externas. Hay tres funciones principales:</p>

<table border="0" cellpadding="1" cellspacing="1" style="width: 510px;">
	<tbody>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__632 img__view_mode__media_original attr__format__media_original" src="/files/CCK_Networking_Basics_router_icons_1.png" style="width: 200px; height: 189px;" typeof="foaf:Image" /></td>
			<td>
			<p><strong>Separar y Crear Puentes</strong></p>

			<p>Los routers se separan en secciones, o crean puentes en diferentes redes juntos, como vemos en el ejemplo de abajo-la red privada de Calle 192.168.1 Street está conectada con un puente al Internet con una dirección IP pública.</p>
			</td>
		</tr>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__633 img__view_mode__media_original attr__format__media_original" src="/files/CCK_Networking_Basics_router_icons_2.png" style="width: 200px; height: 189px;" typeof="foaf:Image" /></td>
			<td>
			<p><strong>Asignar IPs</strong></p>

			<p>Pueden asignar direcciones IP. En el ejemplo de Calle 192.168.1, si una nueva casa está construida en la calle, obtendría cualquier número más alto que estuviera disponible. En el caso de los routers, asignan direcciones IP usando DHCP—Dynamic Host Configuration Protocol.**************</p>
			</td>
		</tr>
		<tr>
			<td><img alt="" class="media-image attr__typeof__foaf:Image img__fid__634 img__view_mode__media_original attr__format__media_original" src="/files/CCK_Networking_Basics_router_icons_3.png" style="width: 200px; height: 189px;" typeof="foaf:Image" /></td>
			<td>
			<p><strong>Firewall y Protección</strong></p>

			<p>Pueden filtrar mensajes o mantener a los usuarios fuera de las redes privadas. La mayoría de los routers tienen un Firewall construido adentro. Esta es una función de software que mantiene a los mensajes no deseados sin alcanzar a las computadoras adentro, o partes privadas, de la red.</p>
			</td>
		</tr>
	</tbody>
</table>

<p>Miremos de nuevo Calle 192.168.1, y el edificio de servicio postal que incluimos cuando tenían una dirección pública para toda la calle. Como resultado, ese edificio de servicio postal está actuando como un <strong>Router</strong>.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__629 img__view_mode__media_original attr__format__media_original" height="190" src="/files/CCK_Networking_Basics_IP_address_private.png" typeof="foaf:Image" width="510" /></p>

<p>En este caso, el edificio de servicio postal esta enrutando mensajes entre el resto del Internet usando su dirección pública y la calle con direcciones privadas.</p>
</section>

<section id="section-definitions">
<h2>Definiciones</h2>

<dl>
	<dt>DHCP—Dynamic Host Configuration Protocol********************</dt>
	<dd>Asigna direcciones IP a dispositivos cliente, como computadoras de escritorio, laptops, y teléfonos, cuando están conectadas a Ethernet o conectadas a redes inalámbricas.</dd>
	<dt>Ethernet</dt>
	<dd>Un tipo de protocolo de redes—define los tipos de cables y conexiones que se usan para conectar computadoras, switches, y routers juntos. A menudo los cables Ethernet son categoría 5 o 6, hechos de pares de cables enredados similares a los cables de teléfono.</dd>
	<dt>Central**************Hub</dt>
	<dd>Un dispositivo de red que repite el tráfico que recibe a todos los dispositivos conectados.</dd>
	<dt>Switch</dt>
	<dd>Un dispositivo de red que envía tráfico y lo recibe a un dispositivo específico conectado, como una sola computadora de escritorio o laptop.</dd>
	<dt>Router</dt>
	<dd>Un dispositivo que puede conectar a través de un puente diferentes redes, determina que tráfico puede pasar a través de ellas, y realiza otras funciones en una red, como asignar direcciones IP.</dd>
	<dt>Firewall</dt>
	<dd>Una función tipicamente realizada por routers, esto filtra el tráfico entre redes y puede protegerlas de interferencias o ataques.</dd>
</dl>
</section>

<section class="related-information" id="section-related-information">
<h2>Información Relacionada</h2>

<p>Este módulo tiene la intención de proporcionar algunos antecedentes útiles sobre las redes. Recomendamos leer próximo documento (¡pero que aún no está terminado!) Aprende Acerca de las Redes Inalámbricas después de esta guía.</p>
</section>
