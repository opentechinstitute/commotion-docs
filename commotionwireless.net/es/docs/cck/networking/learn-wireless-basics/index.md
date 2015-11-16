---
layout: cck
title: Aprende Acerca de las Redes Inalámbricas
site_section: docs
sub_section: [cck,cck-networking]
pdf: cck/networking/Learn_Wireless_Basics.pdf
pdf-all: false
categories: Networking, Wireless, CCK
created: 2014-06-13
changed: 2014-06-13
post_author: Andy Gunn
lang: es
---
<section id="introduction">
<p><img alt="Learn Wireless Basics graphic" src="/files/CCK_WirelessBasics_intro_graphic.png" class="img-responsive" /></p>

<h2>Introducción</h2>

<p>Este documento cubre los conceptos básicos de cómo funciona la tecnología inalámbrica, y la forma en que se utiliza para crear redes. La tecnología inalámbrica se utiliza en muchos tipos de comunicación. La usamos para la creación de redes, ya que es más barata y más flexible que correr cables. Mientras que las redes inalámbricas pueden ser igual de rápidas y de gran alcance como las redes de cable, tienen algunos inconvenientes.
</p>
<p>
Leer y trabajar con <a href="/docs/cck/learn-networking-basics/">Aprende lo Básico de las Redes</a> antes de este documento te ayudará con algunos conceptos usados en las redes inalámbricas.
</p>

<p>Además de información de antecedentes, este documento cubre seis conceptos básicos:</p>

<ol class="rteindent1">
	<li><strong>Señales Inalámbricas</strong> - ¿Qué son y cómo las señales pueden diferir?.</li>
	<li><strong>Dispositivos Inalámbricos</strong> - las diferencias y usos para receptores y transmitores.</li>
	<li><strong>Modos Wi-Fi</strong> - cómo las redes se hacen para los clientes, puntos de acceso y dispositivos ad-hoc.</li>
	<li><strong>Señales Wi-Fi</strong> - las características únicas de  Wi-Fi, y como se organizan las señales.</li>
	<li><strong>Sensibilidad del Poder y el Receptor</strong> - qué tan lejos puede ir cada dispositivo, y que tan bien un router puede escuchar y filtrar las interferencias y el ruido.</li>
	<li><strong>Antenas</strong> - cómo el tipo de antena cambia la forma en que el router transmite.</li>
</ol>

<p>Leer este material debería tomarte una hora. Trabajar con las actividades, o entrar más a fondo en el tema con un grupo puede tomarte más tiempo.</p>
</section>

<section id="what-is-a-wireless-signal">
<h2>¿Qué es una señal inalámbrica?</h2>

<p>
<img alt="Signals" src="/files/CCK_WirelessBasics_Signals.png" class="img-responsive" />
</p>
<p>
Las señales inalámbricas son importantes porque pueden transferir información -- audio, video, nuestras voces, datos -- sin el uso de los cables, lo cuál las hace muy útiles.
</p>
<p>
Las señales inalámbricas son <strong>olas electromagnéticas</strong> viajando a través del aire. Estas se forman cuando la energía eléctrica viaja a través de una pieza de metal -- por ejemplo un cable o antena -- y las olas se forman alrededor de esa pieza de metal. Estas olas pueden viajar alguna distancia dependiendo de la fuerza de dicha energía.
</p>
<p>
Para más información sobre como trabajan las señales electromagnéticas, revisa la sección de #Recursos Externos al final de este documento.
</p>
</section>

<section id="types-of-wireless-signals">
<h2>Tipos de Señales Inalámbricas</h2>
<p>Hay muchos, muchos tipos de tecnologías inalámbricas. Puedes estar familiarizado con las señales de radio AM y FM, Televisión,  Teléfonos celulares, Wi-Fi, señales de satélites como GPS y televisión, radios de dos ondas, y Bluetooth. Estas son algunas de las señales más compunes, ¿pero que las hace diferentes?
</p>

<table class="table table-responsive">
	<tr>
		<td><img alt="Radio" src="/files/CCK_WirelessBasics_wireless_icon_radio.png" width="100" /></td>
		<td><img alt="TV" src="/files/CCK_WirelessBasics_wireless_icon_tv.png" width="100" /></td>
		<td><img alt="Teléfono" src="/files/CCK_WirelessBasics_wireless_icon_cell.png" width="100" /></td>
		<td><img alt="Satélite" src="/files/CCK_WirelessBasics_wireless_icon_satellite.png" width="100" /></td>
		<td><img alt="Laptop" src="/files/CCK_WirelessBasics_wireless_icon_WiFi.png" width="100" /></td>
	</tr>
</table>

</section>

<section id="frequency">
<h3>Frecuencia</h3>

<p>
En primer lugar, las señales inalámbricas ocupan un espectro, o amplia gama, de frecuencias: la velocidad a la que una señales vibran. Si la señal vibra muy lentamente, tiene una frecuencia baja. Si la señal vibra muy rápidamente, tiene una alta frecuencia. La frecuencia se mide en Hertz, que es el recuento de la rapidez con la que una señal cambia cada segundo. Como ejemplo, ¡las señales de la radio FM vibran alrededor de 100 millones de veces por segundo! Ya que las señales de comunicación son a menudo de muy alta frecuencia, abreviamos las medidas para las frecuencias – millones de vibraciones por segundo son Megahertz (MHz), y billones de vibraciones por segundo son Gigahertz (GHz). Mil Megahertz es un Gigahertz.
</p>

<table>
<tr>
<td>
<strong>Ejemplo de Rango de Frecuencias</strong>
<p>
A continuación podemos ver el lapso de frecuencias que se utilizan habitualmente en las comunicaciones. Los transmisores de radiodifusión de AM, FM y Televisión usan frecuencias inferiores a 1000 Mhz, El Wi-Fi utiliza dos bandas de frecuencias más altas – 2.4 y 5 GHz. Los teléfonos celulares utilizan muchas frecuencias diferentes.
</p>
<p>
<img alt="Wireless spectrum" src="/files/CCK_WirelessBasics_Channels_spectrum.png" class="img-responsive" />
</p>
<p>
<ol class="rteindent1">
	<li>Las frecuencias de izquierda a derecha:</li>
	<li>AM Radio: Alrededor de 10MHz</li>
	<li>FM Radio: Alrededor de 100MHz</li>
	<li>Televisión: Muchas frecuencias de 470MHz a 800MHz, y otras.</li>
	<li>Teléfonos celulares: 850MHz, 1900MHz, y otras</li>
	<li>Wi-Fi: 2.4GHz</li>
	<li>Satélite: 3.5GHz</li>
	<li>Wi-Fi: 5GHz</li>
</ol>
</p>
</td>
</tr>
</table>

</section>

<section id="modulation">
<h3>Modulación</h3>

<p>
Además de tener diferentes frecuencias, las señales inalámbricas pueden ser diferentes en su forma de transmitir la información. Una señal inalámbrica tiene que ser modulada--o cambiada--para enviar información. Hay muchos tipos de modulación, y diferentes tecnologías pueden utilizar uno o más tipos para enviar y recibir información. En los dos ejemplos siguientes –- radio AM y FM -- M significa modulación. El tipo de modulación es lo que las hace diferentes.
</p>
<p>
<strong>Ejemplo uno: radio AM.</strong> La A en AM viene de Amplitud – la energía o fuerza de la señal, operando en una sola frecuencia. Una onda sin modular AM puede verse como:<br/>
<img alt="Unmodulated wave" src="/files/CCK_WirelessBasics_Wave1.png" class="img-responsive" />
</p>
<p>
Y una onda de radio AM modulada tiene ondas de energía (amplitud) más alta y más baja indicando frecuencias de audio más altas y bajas en la señal:<br/>
<img alt="Amplitude modulated wave" src="/files/CCK_WirelessBasics_Wave2.png" class="img-responsive" />
</p>
<p>
De izquierda a derecha, tenemos la onda normal, sin modular, luego la onda de baja amplitud (representando puntos bajos en ondas de audio), luego la onda de amplitud más alta (representando las crestas o puntos altos en las ondas de audio).
</p>
<p>
Una versión más detallada de una señal AM está abajo:<br/>
<img alt="Detailed AM wave" src="/files/CCK_WirelessBasics_Wave3.png" class="img-responsive" />
</p>
<p>
La señal de audio es la onda en la parte de arriba, con la onda de Amplitud Modulada correspondiente debajo.
</p>
<p>
<strong>Ejemplo dos: radio FM.</strong> La F en FM viene de Frecuencia – definida por que tan rápido la onda vibra por segundo. Una onda FM sin modular puede verse como:<br/>
<img alt="Unmodulated wave" src="/files/CCK_WirelessBasics_Wave1.png" class="img-responsive" />
</p>
<p>
Una onda de radio FM modulada tienen frecuencias más altas y bajas indicando frecuencias de audio en la señal más altas y bajas:<br/>
<img alt="Frequency modulated wave" src="/files/CCK_WirelessBasics_Wave4.png" class="img-responsive" />
</p>
<p>
De izquierda a derecha, tenemos la onda sin modular normal, luego la onda de frecuencia más baja (representando amplitudes de audio más bajas), luego la onda de frecuencia más alta (representando amplitudes de audio más altas).
</p>
<p>
El tipo de modulación que varias tecnologías usan para comunicarse puede ser muy diferente, y a menudo no son compatibles. El equipo satelital no le puede hablar directamente a tu laptop o teléfono inteligente, que usa Wi-Fi para enviar y recibir información. Esto es porque los radios en diferentes dispositivos pueden escuchar solo cierto tipo de modulaciones y frecuencias.
</p>
<p>
<img alt="Radio" src="/files/CCK_WirelessBasics_wireless_icon_radio.png" style="max-width:200px;float:right;margin:10px;" /> Como ejemplo, algunos receptores de radio tienen un switch para seleccionar entre señales AM y FM, por dos razones: usan diferentes frecuencias para transmitir, y usan diferentes tipos de modulación. Si intentas escuchar una señal AM con tu radio en modo FM, no tendrá sentido para el receptor. Es importante que los transmisores y receptores usen la  misma frecuencia y tipos de modulación para comunicarse.
</p>
<p>
Los dispositivos en tu vida diaria utilizan muchos tipos de señales inalámbricas. Mira la tabla de abajo para ver las distintas frecuencias y tipos de modulación que cada uno utiliza:
</p>
<p>
<table class="table table-responsive">
	<tr>
		<td>
		<strong>Tecnología o dispositivo</strong>
		</td>
		<td>
		<strong>Tipo de señal inalámbrica</strong>
		</td>
	</tr>
	<tr>
		<td>
		<img alt="Televisión" src="/files/CCK_WirelessBasics_wireless_icon_tv.png" style="max-width:150px;" />
		</td>
		<td>
		<ol>
			<li>Video Análogo - Amplitud modulada de 50MHz a 800MHz</li>
			<li>Video Digital – modulación compleja de 200MHz a 800MHz</li>
		</ol>
		</td>
	</tr>
	<tr>
		<td>
		<img alt="Teléfono Celular" src="/files/CCK_WirelessBasics_wireless_icon_cell.png" style="max-width:150px;" />
		</td>
		<td>
		<ol>
			<li>Voz - modulación análoga o digital de 800MHz a 900MHz</li>
			<li>3G, 4G or LTE - modulación digital de 1700MHz a 1900MHz y otras</li>
			<li>Bluetooth - modulación digital en 2400MHz</li>
			<li>Walkie-talkie / radio de dos salidas - análogo AM, FM o modulación digital sobre muchas frecuencias</li>
		</ol>
		</td>
	</tr>
	<tr>
		<td>
		<img alt="Satélite" src="/files/CCK_WirelessBasics_wireless_icon_satellite.png" style="max-width:150px;" />
		</td>
		<td>
		<ol>
			<li>Muchos tipos de señales - voz, audio, video, datos</li>
			<li>Muchos tipos de modulaciones - análogas y digitales</li>
			<li>Muchos tipos de frecuencias - 3400MHz, 5900MHz, 10.7GHz, 14.5GHz, 23GHz, y muchas otras.</li>
		</ol>
		</td>
	</tr>
	<tr>
		<td>
		<img alt="Laptop" src="/files/CCK_WirelessBasics_wireless_icon_WiFi.png" style="max-width:150px;" />
		</td>
		<td>
		<ol>
			<li>Wi-Fi - modulación digital en 2400MHz o 5000 a 5800MHz.</li>
			<li>Bluetooth - modulación digital en 2400MHz</li>
		</ol>
		</td>
	</tr>
	<tr>
		<td>
		<img alt="Radio" src="/files/CCK_WirelessBasics_wireless_icon_radio.png" style="max-width:150px;" />
		</td>
		<td>
		<ol>
			<li>AM Radio - AM modulación de 0.6MHz a 1.6MHz</li>
			<li>FM Radio - FM modulación de 88MHz a 108MHz</li>
		</ol>
		</td>
	</tr>
</table>
</p>

<p>
Casi cada dispositivo o tecnología usa una frecuencia y modulación inalámbrica diferente. Esto significa que la mayoría de los dispositivos solo entienden un tipo específico de señal inalámbrica.
</p>

</section>

<section id="receivers-and-transmitters">
<h2>Receptores y Transmitores</h2>

<p>
Cuando un dispositivo envía una señal inalámbrica, se llama un transmisor. Cuando otro dispositivo recoge esa señal inalámbrica y entiende la información, se le llama un receptor. En el caso de la radio FM, hay un transmisor--propiedad y operado por la estación de radio--y muchos receptores con los que la gente escucha la estación. Cuando un dispositivo tiene ambos, un transmisor y un receptor, a veces se llama un *********transmisores-receptores******* transceiver****************. Los dispositivos como routers pueden transmitir y recibir, que es lo que los hace útiles para la construcción de redes--¡es probable que desees ser capaz de enviar mensajes a tus vecinos y al mundo, así como recibir mensajes!
</p>
<p>
<strong>Actividad rápida:</strong> ¿Qué dispositivos que posees o usas frecuentemente, son transmisores, receptores o transmisores-receptores**********? Rellena algunos ejemplos abajo de cada tipo:
</p>
<p>
<table class="table table-responsive table-bordered">
	<tr>
		<td style="border:1px solid black;">
		<strong>Transmisor</strong>
		</td>
		<td style="border:1px solid black;">
		<strong>Receptor</strong>
		</td>
		<td style="border:1px solid black;">
		<strong>Transmisor-receptor***********</strong>
		</td>
	</tr>
	<tr>
		<td style="border:1px solid black;">
		<img alt="Tower" src="/files/CCK_WirelessBasics_transmitter_icon.png" style="max-width:200px;" />
		</td>
		<td style="border:1px solid black;">
		<img alt="Receiver" src="/files/CCK_WirelessBasics_receiver_icon.png" style="max-width:200px;" />
		</td>
		<td style="border:1px solid black;">
		<img alt="Cell" src="/files/CCK_WirelessBasics_transceiver_icon.png" style="max-width:200px;" />
		</td>
	</tr>
	<tr style="border:1px solid black;">
		<td style="border:1px solid black;">
		<strong>Examples:</strong><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		</td>
		<td style="border:1px solid black;">
		<strong>Examples:</strong><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		</td>
		<td style="border:1px solid black;">
		<strong>Examples:</strong><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		</td>
	</tr>
</table>
</p>
<p>
¿Usas más transmisores, receptores, o transmisores-receptores******* a lo largo del día? ¿Qué es diferente sobre la forma en que usas cada uno de ellos?
</p>

</section>

<section id="wifi-signals">
<h2>Señales Wi-Fi</h2>
<p>
Cuando se construye una red, estarás utilizando la tecnología Wi-Fi, que tiene algunas características únicas que necesitarás conocer.
</p>
<p>
Hay dos tipos de señal Wi-Fi, basada en las frecuencias que usa:
</p>
<ol>
<li><strong>2.4GHz</strong> - Un frecuencia más baja, es la tecnología más común Wi-Fi en uso hoy en día. Muchos dispositivos la utilizan, por lo que las señales pueden llegar a ser más concurridas e interferir unas con otras. Puede pasar a través de muros y ventanas bastante bien.
</li>
<li><strong>5GHz</strong> - Esta tecnología de frecuencia más alta se usa en menos dispositivos, y puede a veces alcanzar más altas velocidades porque las frecuencias son menos concurridas. No puede pasar a través de muros y ventanas tan bien como las señales de banda de 2.4GHz, así que el rango de la tecnología de 5GHz es a menudo más corto.
</li>
</ol>
<p>
Estos dos tipos de Wi-Fi se llaman las<strong>Bandas de Frecuencia</strong>, o solo <strong>Bandas</strong> como abreviación.
</p>
<p>
Cada banda de frecuencia usada en el Wi-Fi se divide en múltiples “canales”. Cada canal es similar a los cuartos en una fiesta – si un cuarto está muy lleno será difícil mantener una conversación. Puedes moverte al cuarto siguiente, pero ese también puede llenarse. Tan pronto como el edificio este lleno, se vuelve difícil mantener una conversación en la fiesta.
</p>
<p>
<strong>Banda de 2.4GHz</strong><br/>
Para la banda de 2.4GHz, hay 14 canales en total. Desafortunadamente, estos canales se traslapan, así que no tienen que preocuparse de recoger canales no estándares como en la banda de 2.4GHz. ************************For the 2.4GHz band, there are 14 channels total. Unfortunately, these channels overlap, so they arent have to worry about picking non-standard channels like in the 2.4GHz band.
</p>
<p>
<img alt="5GHz channels" src="/files/CCK_WirelessBasics_Channels5.png" class="img-responsive" />
</p>
<p>
Hay muchos más canales disponibles en la banda de 5GHz, así que debería ser más fácil seleccionar un canal en esta banda que no funcione como redes mesh inalámbricas. El mejor lugar para checar lo que se permite ene le área es en línea. Los links se proporcionan en <a href="#section-external-resources">Recursos Externos</a> al final de este documento.
</p>
<p>
Cuando configures tu red inalámbrica, necesitarás pensar acerca de que frecuencia de banda usar, y que canal usar.
</p>

</section>

<section id="power-receive-sensitivity">
<h2> Sensibilidad del Poder y el Receptor</h2>

<p>
Muchas personas quieren saber que tan lejos llegarían las señales inalámbricas. Saber esto es importante para planear una red, ya que el poder de los routers afectará el diseño de la red, y que tanto equipo es requerido.
</p>
<p>
Diferentes routers Wi-Fi pueden tener diferentes niveles de poder. Algunos son mucho más fuertes: tienen más poder de conversación o transmisión que otros. Algunos son buenos oyentes: tienen lo que se llama una mejor sensibilidad de recepción. Estos dos elementos definen que tan bien se conectarán los dispositivos inalámbricos, y que tan lejos un router Wi-Fi receptor puede estar.
</p>
<p>
Los fabricantes usualmente no publican información acerca de los rangos de los routers, la transmisión de poder puede medirse con dos escalas  milliwatts (mW) o dBm******************** Manufacturers do not usually publish information about their routerranges transmit power can be measured with two scales -- milliwatts (mW) or dBm:
<ol>
	<li>A <strong>milliwatt</strong> es una milésima (que escucha al poder más quieto para ser capaz de recibir cualquier señal, ya sea debido a que la señal sea muy débil o que otras señales estén interfiriendo, y los routers se deconectarían. Abajo podemos ver que los dos routers se han desconectado, como ahí no ha tenido que haber mucha planeación para conectarse con múltiples vecinos o edificios. Si hay suficiente señal entre los nodos, deberían conectarse. ***************************is one thousandth (thatlisten powerquietert be able to receive any signal, either due to the signal being too weak or other signals interfering, and the routers will disconnect. Below we can see the two routers have disconnected, as there isnt have to do as much planning to connect with multiple neighbors or buildings. If there is enough signal between nodes, they should connect.
</p>
<p>
<img alt="Omnidireccional crea conexiones en todas las direcciones" src="/files/CCK_WirelessBasics_Omni_close.png" class="img-responsive" />
</p>
<p>
La fuerza en todas las direcciones de estas antenas viene con la desventaja de transmitir una señal más débil. Ya que la señal viaja en todas direcciones, se distribuye y se vuelve más débil con la distancia muy rápido. Si los nodos o clientes están muy lejos, podrían no conectarse bien.
</p>
<p>
<img alt="Las omni antenas no pueden llegar tan lejos" src="/files/CCK_WirelessBasics_Omni_far.png" style="max-width:450px;" />
</p>
<p>
También, si solo hay nodos o clientes en una dirección del router, entonces las señales que van a la dirección opuesta se desperdician:
</p>
<p>
<img alt="Las omni antenas pueden desperdiciar energía en direcciones sin receptores" src="/files/CCK_WirelessBasics_Omni_one_side.png" class="img-responsive" />
</p>

<h3>Antenas Direccionales</h3>
<p>
El siguiente tipo de antena se conoce como direccional--envía una señal de un modo más enfocado. Hay dos tipos principales de antenas direccionales:
</p>
<p>
<table class="table table-responsive" style="text-align:center;">
	<tr>
		<td>
		<strong>Antena de Sector</strong><br/>
		<img alt="Antena de Sector" src="/files/CCK_WirelessBasics_Antenna_sector.png" style="max-width:250px;" />
		</td>
		<td>
		<strong>Antena Enfocada</strong><br/>
		<img alt="Antena Enfocada" src="/files/CCK_WirelessBasics_Antenna_focused.png" style="max-width:250px" />
		</td>
	</tr>
	<tr>
		<td>La antena de sector envía una señal en forma de una orilla de gráfica de pie de señal – puede ser en cualquier lugar entre 30 y 120 grados de amplitud. Estas son a menudo antenas largas y rectangulares que están separadas o integradas en un router.
		</td>
		<td>Una antena enfocada envía una transmisión estrecha de señal – está normalmente entre 5 y 10 grados de amplitud, pero puede ser un poco más amplia también. Estas son a menudo antenas o tienen una cuenca mesh reflejando la señal detrás de ellas. *******************A focused antenna sends out a narrow beam of signal - it is normally around 5 to 10 degrees wide, but it can be a little wider as well. These are often dishes or have a mesh bowl reflecting signal behind them.
		</td>
	</tr>
</table>
</p>
<p>
Usando antenas direccionales tiene el beneficio de incrementar la distancia con la que una señal viaja en una dirección, mientras que la reduce en todas las otras direcciones. Ya que la señal va toda a un lugar, el poder que sería enviado en todas las direcciones con los nodos omnidireccionales está ahora enfocado, incrementando el poder en esa dirección.
</p>
<p>
<img alt="Las antenas direccionales envían las señales más lejos" src="/files/CCK_WirelessBasics_Directional_distance.png" class="img-responsive" />
</p>
<p>
También puede disminuir la interferencia recibida en el nodo. Hay un menor número de señales que llegan a la antena, ya que el nodo sólo está escuchando a las señales de la dirección en la que está apuntando. ********Ya wonsidesendsWt.******It wonsidesendsWt already.****** Los conceptos de redes son importantes cuando se están manejando redes inalámbricas.</p>
</section>

<section class="external-resources" id="section-external-resources">
<h2>Recursos Externos</h2>

<p>
Si estás interesado en aprender más acerca de tecnología Wi-Fi e inalámbrica, hay mucha información existente. Algunos buenos libros para leer para antecedentes y más información incluyen How Radio Signals Work (Cómo funcionan las Señales de Radio) por Sinclair (ISBN 0070580588), y 802.11 Wireless Networks: The Definitive Guide (Redes Inalámbricas: La Guía Definitiva) por Gast (ISBN 0596100523).
</p>
<p>
Hay también excelentes documentos en Wikipedia acerca de <a href="http://en.wikipedia.org/wiki/Wi-Fi" target="_blank">Wi-Fi</a> y <a href="http://en.wikipedia.org/wiki/Wireless" target="_blank">señales inalámbricas</a>. Igualmente, una búsqueda de Internet muy probablemente responderá cualquier pregunta que puedas pensar, ya que la tecnología inalámbrica es muy popular.
</p>
<p>
Para mayor información sobre que frecuencias están disponibles en tu país o área regulatoria, por favor ve este artículo de Wikipedia en <a href="http://en.wikipedia.org/wiki/List_of_WLAN_channels" target="_blank">canales inalámbricos</a>.
</p>
</section>
