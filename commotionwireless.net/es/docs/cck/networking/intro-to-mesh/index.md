---
layout: default
title: Introducción a las Redes Mesh
site_section: docs
sub_section: [cck,cck-networking]
pdf: cck/networking/2-Introduction_to_Mesh.pdf
pdf-all: true
categories:
created: 2013-11-11
changed: 2013-12-02
post_author: critzo
lang: es
---

<section id="introduction">
<h2>Introducción
ion</h2>

<p>Hay muchas maneras de construir redes y muchas tecnologías que se pueden utilizar. Este módulo es una introducción a la idea de cómo funcionan las redes mesh y en qué se diferencian de otros tipos de redes. Entender las redes mesh es importante para el diseño de la red, y para hablar con la gente de tu vecindario que podría apoyar o participar en tu proyecto.</p>

<p>Lee y discute las ideas abajo, luego usa <a href="/files/cck/networking/2.1-Name_That_Network.pdf">Nombra esa Red</a> para explorar las diferenets propiedades de las redes. Las preguntas y actividades en las diapositivas les ayudarán a todos a pensar en diferentes estructuras de red.</p>

<p>Al explorar diferentes estructuras de red, tendrás una idea sobre como pensar acerca del diseño de la red y como los distintos diseños son útiles en diferentes situaciones.</p>

<p><strong>Tiempo requerido: 30 minutos para revisar y discutir el texto. 45 minutos para la presentación y actividades. </strong></p>
</section>

<section id="materials-and-supplies-needed">
<h3>Materiales</h3>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__678 img__view_mode__media_large attr__format__media_large" height="226" src="/files/styles/large/public/intro_to_mesh_presentation.png?itok=GLXiZJfZ" typeof="foaf:Image" width="294" /></p>

<p>Impresiones de <strong><a href="/files/cck/networking/2.1-Name_That_Network.pdf">Name that Network</a>&nbsp;</strong>(optional)</p>
</section>

<section id="read-and-discuss">
<h2>Lee y discute</h2>

<p>Lee y discute la información abajo. Para explorar más las características de los distintos tipos de redes, revisa <a href="/files/cck/networking/2.1-Name_That_Network.pdf"><strong>Nombra esa Red</strong></a>.</p>

<h3>La redes pueden tener estructuras jerárquicas o mesh.</h3>

<table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
	<tbody>
		<tr style="border:hidden;">
			<td>
			<p class="rtecenter"><img alt="" class="media-image attr__typeof__foaf:Image img__fid__581 img__view_mode__media_large attr__format__media_large" height="114" src="/files/styles/large/public/learn_about_mesh_hier_dots.png?itok=RytU-yKU" typeof="foaf:Image" width="120" />Jerárquico/<br />
			Hub and Spoke**************************</p>

			<p class="rtecenter"><img alt="" class="media-image attr__typeof__foaf:Image img__fid__582 img__view_mode__media_large attr__format__media_large" height="118" src="/files/styles/large/public/learn_about_mesh_mesh_dots.png?itok=hlYSgvH6" typeof="foaf:Image" width="123" />Mesh</p>
			</td>
			<td>
			<p>Las redes son grupos de dispositivos conectados que mueven información o mensajes de un lugar a otro.</p>

			<p>La mayoría de las redes (incluyendo las redes de teléfonos celulares) usan una arquitectura jerárquica, con otros usuarios conectándose a otros usuarios vía un dispositivo central que controla las conexiones y el tráfico en la red. ***********************Most networks (including cellular phone networks) use a or hierarchical architecture, with users connecting to other users via a central device that controls connections and traffic on the network.</p>

			<p>Esto significa que cualquier ocasión en la que te comuniques a través de la red, el mensaje o los datos deben primero ir a dicha central, y luego ser enviados a su destinación.************************ This means that any time you communicate through the network, the message or data must first go to that central hub, then be sent on to its destination.</p>
			</td>
		</tr>
	</tbody>
</table>

<h3>Las redes mesh se enrutan de forma diferente que las redes que no están enmalladas.********************* Mesh networks route differently than non-mesh networks.</h3>

<table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
	<tbody>
		<tr style="border:hidden;">
			<td>
			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__583 img__view_mode__media_large attr__format__media_large" height="114" src="/files/styles/large/public/learn_about_mesh_hier_route.png?itok=cqjyQu5M" typeof="foaf:Image" width="120" /></p>

			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__584 img__view_mode__media_large attr__format__media_large" height="118" src="/files/styles/large/public/learn_about_mesh_mesh_route.png?itok=2GFtnVwy" typeof="foaf:Image" width="123" /></p>
			</td>
			<td>
			<p>La diferencia entre las redes mesh y otros tipos de redes es que las redes mesh utilizan un determinado tipo de protocolo para mover información de un lugar a otro.</p>
			</td>
		</tr>
	</tbody>
</table>

<h3>Los routers son dispositivos que determinan como se mueve la información a través de la red.</h3>

<table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
	<tbody>
		<tr style="border:hidden;">
			<td>
			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__585 img__view_mode__media_large attr__format__media_large" src="/files/styles/large/public/learn_about_mesh_router_laptops.png?itok=OLtgrlQl" style="width: 200px; height: 126px;" typeof="foaf:Image" /></p>
			</td>
			<td>
			<p>Los puntos de acceso estándar, como el que podrías tener en tu casa, le hablan&nbsp;a las computadoras o teléfonos inteligentes, pero no pueden hablar fácilmente a otros routers.****************** Standard access points, like the one you might have at home, talk&nbsp;to computers or smartphones, but they cannot easily talk to other routers.</p>
			</td>
		</tr>
	</tbody>
</table>

<h3>Los routers que permiten el enmallado puede hablarse los unos a los otros dinámicamente, permitiéndoles enrutar flexiblemente el tráfico dentro de la red.************ Mesh-enabled routers can dynamically talk to each other, allowing them to flexibly route traffic within the network.</h3>

<table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
	<tbody>
		<tr style="border:hidden;">
			<td>
			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__586 img__view_mode__media_large attr__format__media_large" src="/files/styles/large/public/learn_about_mesh_simple_routers.png?itok=BATFARzr" style="width: 200px; height: 164px;" typeof="foaf:Image" /></p>
			</td>
			<td>
			<p>Por defecto, la mayoría de los routers y dispositivos no pueden enmallar. Pero, con el sistema operativo correcto, algunos routers, teléfonos celulares y laptops pueden enmallarse.************ By default, most routers and devices are not able to mesh. But, with the right operating system, some routers, cellphones and laptops can mesh.</p>

			<p>Construyes una red mesh al instalar un paquete de software mesh de código abierto en dispositivos que permiten las redes inalámbricas, y luego los conectan a otros dispositivos enmallados cercanos.****************** You build a mesh network by installing an open-source mesh software package on wireless-enabled devices, and then connecting them to other nearby meshing devices.</p>
			</td>
		</tr>
	</tbody>
</table>

<h3>Cualquier dispositivo mesh puede ser la central o punto central en la red o la red puede no tener un punto central.</p>
			</td>
		</tr>
	</tbody>
</table>

<h3>Cualquier dispositivo mesh puede formar el borde de la red, siendo capaz de extender su alcance y formar nuevas conexiones.</h3>

<table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
	<tbody>
		<tr style="border:hidden;">
			<td>
			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__588 img__view_mode__media_large attr__format__media_large" src="/files/styles/large/public/learn_about_mesh_complex_routers2.png?itok=hkniUJ93" style="width: 300px; height: 129px;" typeof="foaf:Image" /></p>

			<p>Una red mesh dinámica, a diferencia de una red más tradicional, se adapta constantemente a las nuevas condiciones. Ajusta automáticamente sus vías para integrar nuevos nodos que se unen a la red y tiene la flexibilidad para redirigir la información cuando un nodo abandona la red.</p>
			</td>
		</tr>
	</tbody>
</table>

<h3>Las redes mesh se fortalecen y expanden a medida que la base de usuarios crece.</h3>

<table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
	<tbody>
		<tr style="border:hidden;">
			<td>
			<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__589 img__view_mode__media_large attr__format__media_large" src="/files/styles/large/public/learn_about_mesh_complex_routers3.png?itok=U9gFTEEu" style="width: 300px; height: 138px;" typeof="foaf:Image" /></p>

			<p>Cuando hay muchos nodos mesh interconectados, la red puede evitar la interferencia, bloqueo o congestión de red.</p>

			<p>Cuando tu amigo te envía un mensaje de respuesta, si alguno de los nodos deja de trabajar, la red mesh se adaptará de acuerdo a ello, asegurándose de que recibas el mensaje.</p>
			</td>
		</tr>
	</tbody>
</table>

<p>Para explorar más las características de los diferentes tipos de redes, revisa&nbsp;**************** To further explore the characteristics of different types of networks, go through&nbsp;<strong><a href="/files/cck/networking/2.1-Name_That_Network.pdf">Nombra esa Red</a></strong>.</p>

<p>Una vez que entiendas lo básico de las redes mesh, intenta llevar tu conocimiento a la práctica con el módulo <strong><a href="/docs/cck/planning/design-your-network-every-network-tells-story">Cada Red Cuenta Una Historia</a></strong>. Para información más técnica sobre como Commotion funciona y forma redes mesh, <strong>Aprende Acerca de las Redes Inalámbricas&nbsp;(coming soon).</strong></p>
</section>

<section id="section-definitions">
<h2>Definiciones</h2>

<dl>
	<dt>Jerarquía</dt>
	<dd>En este caso, la jerarquía se refiere a la relación de las tres estructuras de cliente y dueño entre dispositivos en redes tradicionales.</dd>
	<dt>Saltos</dt>
	<dd>El número de enlaces requeridos para alcanzar un nodo destino en la red.</dd>
	<dt>Muchos-a-muchos</dt>
	<dd>En redes mesh, muchos nodos se conectan a muchos nodos. &nbsp;En diseños tradicionales, un nodo se puede conectar a uno o un nodo se puede conectar a varios.</dd>
	<dt>Red Mesh</dt>
	<dd>Un tipo de red en la que los nodos se pueden conectar como iguales y dinamicamente enrutar tráfico a través de la red.*************A type of network in which nodes can connect as peers and dynamically route traffic across the network.</dd>
	<dt>Router</dt>
	<dd>UN dispositivo que determina como los mensajes se mueven a través de la red de la computadora.</dd>
</dl>
</section>

<section class="related-information" id="section-related-information">
<h2>Información Relacionada</h2>

<p>Para explorar estos conceptos más a fondo, revisa <strong>&nbsp;Aprende Acerca de las Redes Inalámbricas&nbsp;(próximamente).</strong></p>

<p>Una vez que tengas entendimiento de lo básico de las redes mesh, intenta poner tu conocimiento en práctica con el módulo <a href="/docs/cck/planning/design-your-network-every-network-tells-story"><strong>Toda Red Cuenta una Historia</strong></a>.</p>
</section>
