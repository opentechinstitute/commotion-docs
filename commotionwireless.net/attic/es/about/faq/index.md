---
layout: default
title: FAQ
site_section: about
categories: 
created: 2013-07-14
changed: 2014-04-14
post_author: Chris Ritzo
lang: es
---
<div class="faq-content">
<h2>General</h2>

<h3>¿Qué es Commotion?</h3>
<p>Commotion es una suite de herramientas de comunicación de código abierto que usa dispositivos inalámbricos para crear redes mesh descentralizadas y compartir servicios locales. Lee más acerca de los <a href="/docs/supported-devices">dispositivos que son compatibles con Commotion</a> y más acerca de cómo funciona, abajo.</p>

<h3>¿Commotion provee acceso a Internet? Es posible compartir acceso a Internet con Commotion?</h3>
<p>Commotion no provee acceso a Internet.</p>
<p>Ciertamente puedes compartir acceso a Internet usando Commotion, aunque recomendamos que consultes los Términos de Servicio de tu Proveedor de Servicios de Internet (ISP). Todo lo que se requiere es conectar un router con Commotion instalado a una conexión a Internet existente para proveer una puerta de acceso a Internet. El router Commotion compartirá banda ancha con otros dispositivos en la red mesh de esa conexión. Múltiples routers pueden ser usados para esto en una red mesh para proveer múltipless puertas de acceso y banda ancha adicional. Ve a la sección "Uno o más nodos conectados a una puerta de acceso" en la <a href="/docs/cck/installing-configuring/common-hardware-setups/">página de configuraciones de hardware común</a>.</p> 

<h3>¿Cómo funciona Commotion?</h3>
<p>Commotion es un software que está instalado en routers inalámbricos. Permite la creación de redes de comunicaciones (mesh) usuario-a-usuario. La meta del Proyecto Commotion es proveer un paquete fácil de ensamblar de software y documentación que hace que construir redes mesh sea accesible para una amplia audiencia.</p>

<h3>¿Qué es mesh? ¿Qué es una red mesh? ¿Cómo funciona?</h3>
<p>Hay muchos tipos de redes. La mayoría de las redes con las que interactuamos todos los días se basan en modelo hub-and-spoke. Las redes mesh se basan en la idea de que cualquier punto en la red, o nodo, puede hablarle a cualquier otro punto en la red, similar a como funcionan las redes humanas. Puedes leer más acerca delas redes mesh en el Kit de Construcción Commotion <a href="http://commotionwireless.net/docs/cck/networking/intro-to-mesh/">Introducción al enmallado (mesh)</a>. </p>

<h3>¿Cuáles son los componentes centrales de Commotion?</h3>
<p>Commotion integra y extiende muchos proyectos de software de código abierto. Entre sus componentes centrales están <a href="http://www.olsr.org/">OLSRd</a> (el protocolo enrutador mesh sobre el que Commotion está construido), <a href="https://openwrt.org/">OpenWRT</a> (la distribución Linux embebida usada para instalar Commotion en routers), <a href="http://www.servalproject.org/">Serval</a> (que permite aplicaciones mesh seguras y distribuidas y routear), así como un número de <a href="https://github.com/opentechinstitute/commotion-router#the-commotion-daemon">componentes construidos personalizados</a>.</p>

<h3>¿Usar Commotion permitirá el acceso a los servicios y sitios web bloqueados por nuestro Proveedor de Servicios de Internet (ISP) local?</h3>
<p>Mientras que Commotion no pretende bloquear sitios web o servicios de Internet por defecto, las redes Commotion pueden estar sujetas a cualquier restricción vigente en dicha conexión a Internet. No obstante, permitirá a los usuarios la conexión a un Internet sin censura, compartir dicha conexión con otros usuarios de red. Los usuarios pueden también compartir información directamente los unos con los otros y guardar los datos hasta el tiempo en el que hubiera una conexión a Internet sin censura disponible.</p>

<h3>Hay alguna diferencia entre esta tecnología y otros proveedores mesh de bajo costo o firmwares como Open-Mesh, DD-WRT, Freifunk, etc.</h3>
<p>La respuesta corta es sí, hay muchas diferencias, pero también hay una cantidad significativa de coincidencias. Por ejemplo, ambos Commotiony Freifunk usan OpenWRT como base pero tiene diferentes sets de aplicaciones debido a sus diferentes casos de uso.</p>
   
<p>Cada uno de estos proyectos tiene metas y prioridades que se reflejan en sus opciones de diseño. Commotion está primordialmente diseñado para un empacar firmware con buen soporte, gratis y de código abierto con configuraciones por defecto y herramientas administrativas que hacen posible para los nuevos usuarios construir y mantener una red con el mínimo soporte exterior.</p>

<h3>¿Cómo puedo escuchar acerca de los últimos desarrollos Commotion?</h3>
<p>En adición al sitio web del proyecto, hay tres listas de correos Commotion diseñadas para varios niveles de interés:</p>

<ul>
	<li><a href="https://lists.chambana.net/mailman/listinfo/commotion-announce">commotion-announce</a>: sólo anuncios oficiales con mínima discusión</li>
	<li><a href="https://lists.chambana.net/mailman/listinfo/commotion-discuss">commotion-discuss</a>: para aquellos que quieren usar Commotion sin entrar mucho en lo técnico</li>
	<li><a href="https://lists.chambana.net/mailman/listinfo/commotion-dev">commotion-dev</a>: para aquellos que quieren discutir las mejoras en el software Commotion</li>
</ul>

<p>También te puedes unir en IRC en #commotion en el servidor freenode.net</p>

<h2>Acceso &amp; Instalación</h2>

<h3>¿Qué tipo de equipo necesito para usar Commotion? ¿Tengo ya un router, es compatible con Commotion? ¿Tienen imágenes para este router? </h3>
<p>Como mínimo Commotion necesita dos o más routers de wifi para crear una red standalone. Los nuevos usuarios pueen sumarse a una red existente usando dispositivos clientes de otro wifi como computadoras o teléfonos móviles.</p>

<p>Nuestro desarrollo está enfocado en ser compatible <a href="http://www.ubnt.com/">con dispositivos Ubiquiti</a>, y estamos probando otras marcas con hardware similar como TP-Link, Mikrotik, y otros. Técnicamente, cualquier router que utilice un chipset y sea compatible con OpenWRT Attitude Adjustment debería funcionar. Consulta la lista en <a href="https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_compatibility_list">routers potencialmente compatibles</a> en nuestro wiki de desarrollo para más información. Si tienes un router que no está en la lista y nos quieres ayudar a probar en nuevos dispositivos, contáctanos y quizás podremos construir una imagen para que puedas probar.</p>

<p>En la medida que se prueban nuevas plataformas y se confirma su funcionamiento, las agregamos a la lista de hardware compatible y publicamos imágenes pre-compiladas para ellos. Puedes revisarlos en <a href="https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_in_testing"> lista de hardware en prueba actualmente </a>en nuestro wiki de desarrollo. Si tienes sugerencias de hardware que deberíamos revisar, o que te gustaría probar, por favor<a href="https://commotionwireless.net/contact">contáctanos.</a></p>

<h3>Commotion es compatible con los routers de múltiples radios (5Ghz y 2.4Ghz)?</h3>
<p>A partir de la versión 1.0 del router Commotion, el soporte está habilitado para dispositivos de doble radio. Probamos y publicamos imágenes para nuevos routers compatibles en la medida en que tenemos dispositivos disponibles. Revisar <a href="https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_in_testing">nuestra página wiki de hardware que estamos probando</a> para ver los dispositivos que estamos probando, el equipo de desarrollo y otros contribuidores al proyecto, con router Commotion. También tenemos una lista de <a href="https://wiki.commotionwireless.net/doku.php?id=development_resources:router:hardware_compatibility_list">routers potencialmente compatibles</a>, en nuestra wiki de desarrollo.</p>
 
<h3>¿Quién puede descargar y utilizar el software?</h3>
<p>Cualquier persona. Commotion es un proyecto de código abierto y que además tiene la meta central de asegurarse que está disponible libremente para aquellos que lo necesitan, y que funciona de forma correcta en el hardware disponible, y que puede adecuarse para atender las necesidades locales. Trabajamos para hacerlo fácilmente accesible y distribuible. </p>

<h3>¿Hay algún cargo o costo por usar Commotion?</h3>
<p>No. El software siempre estará disponible para su descarga gratuita, y nuestra documentación está bajo<a href="http://creativecommons.org/licenses/by-sa/2.5/">una licencia Creative Commons de Licenciamiento Recíproco</a>. Las comunidades o los individuos asumen los costos de comprar los routers y cualquier otro hardware que pueda utilizarse en la construicción de las redes. También puede que haya un gasto por la conexión al Internet público de cualquier proveedor local. El costo, alcance y la operación de una red Commotion depende de la comunidad dodne se implemente.</p>

<h3>¿Puedo comprar un Kit de Construcción de Commotion?</h3>
<p>No. El Kit de Construcción de Commotion es un set de documentación que puede descargarse del sitio. No es un kit de hardware, sino una herramienta de planeación e implementación que está diseñada para las comunidades interesadas en organizar y construir una red inalámbrica.</p>

<h3>¿Es posible adquirir partes locales y después descargar el software que se necesite de otra parte?</h3>
<p>Sí. Commotion fue diseñado para trabajar utilizando el hardware disponible comúnmente en la mayoría de las zonas.</p>


<h3>¿Se puede utilizar Commotion en áreas urbanas? ¿Puede usarse también en áreas remotas o rurales?</h3>
<p>Commotion está siendo utilizado en una gran variedad de comunidades, urbanas o rurales, y en todo tipo de terreno. Nótese que en las áreas remotas, podría ser necesaria una planeación y costos adicionales que atiendan a los retos de construir la infraestructura, como el acceso limitado a fuentes de energía, terreno escabroso, o distancias muy largas entre los enlaces inalámbricos.</p>

<h2>Seguridad</h2>

<h3>¿Es seguro Commotion?</h3>
<p>Las opciones de seguridad de Commotion están evolucionando constantemente. Para tener información actualizada sobre los modelos y características de seguridad de Commotion, revisa<a href="/understanding-commotions-warning-label">etiqueta de advertencia para entender Commotion</a>.</p>

<h3>¿Cómo es que otros usuarios identifican redes falsas de Commotion de las verdaderas redes mesh?</h3>
<p>Los individuos deben tratar las nuevas redes, basadas en Commotion o no, con el nivel de confianza que merecen. Deben utilizar únicamente redes en las que confían y, si tienen duda de los límites de confianza de la red, utilizar tecnología de cifrado end-to-end como HTTPS para asegurar sus datos cuando pasan a través de la red.</p>


<h3>¿Commotion es susceptible al error Heartbleed OpenSSL?</h3>
<p>No, las implementaciones de router inalámbrico de Commotion utilizan CyaSSL, que es una implementación separadas de SSL.Un desarrollador de CyaSSL publicó una <a href="http://community.arm.com/groups/embedded/blog/2014/04/10/wolfssl-and-cyassl-users-safe-from-heartbleed-bug">nota</a> al respecto. También nosotros mismos probamos usando el motor de script nmap<a href="http://nmap.org/nsedoc/scripts/ssl-heartbleed.html">que detecta la vulnerabilidad de heartbleed</a>, y determinamos que Commotion no es vulnerable.</p>

<h3>Es Commotion susceptible a las vulnerabilidades Bash Bug/Shell Shock?</h3>
<p>No, Commotion usa el ash shell que viene con <a href="http://busybox.net/">BusyBox</a> y está empaquetado por defecto con OpenWRT. Hemos <a href="/blog/2014/09/26/shell-shock/">probado y confirmado</a> que esta versión del ash shell no es vulnerable al bash bug.

<h2>Características &amp; Capacidades</h2>

<h3>¿Qué velocidad de conexión proveerá este servicio?</h3>
<p>La velocidad de conexión se determina por las capacidades de los dispositivos comprendidos en la red y la banda de ancha disponible. En este punto, Commotion supera con creces las capacidades de entrega de datos inalámbricos.</p>

<h3>¿Tiene este servicio la capacidad de soportar tráfico alto?</h3>
<p>La capacidad global está dictada por el número, la distribución y el tipo de dispositivos utilizados y, en el caso de acceso a Internet, la cantidad de ancho de banda disponible para la red. Sin embargo, el software es eficiente en distribuir carga en toda la red.</p>

<h3>¿Es posible que los teléfonos móviles habilitados con Wi-Fi accedan a este servicio? Si es así, ¿tendrán alguna forma de bloquear el servicio? </ H3>
<p>Una red Commotion es igual que cualquier otra red Wi-Fi. Es necesario para una red Wi-Fi del dispositivo móvil habilitado de cualquier tipo elegir unirse a la red.</p>

<h3>¿Qué tan escalables son las redes Commotion?</h3>
<p>Commotion es teóricamente escalable para miles de nodos a lo largo de un área urbana o múltiples aldeas rurales. En la práctica, sin embargo, la escalabilidad de la red es muy dependiente de la situación específica: diseño de la red, entorno físico, estrategias de gestión y hardware. Cuanto más grande se convierte la red, más importante será para minimizar las interferencias de radio, equilibrar la carga en los nodos individuales, administrar densidad de nodos, y descentralizar la solución de problemas. La mayoría de las redes de mesh de gran escala utilizan otras tecnologías, tales como enlaces de backhaul de punto a punto, para crear puentes entre grupos de nodos mesh a las puertas de enlace de Internet. Soluciones de ingeniería como éstas ayudan a las grandes redes a mantener un rendimiento más consistente.</p>

<h3>¿Usando este tipo de servicio cuán grande puede ser el área que sea cubierta?</h3>
<p>Este tipo de servicio puede escalar bastante bien. Sin embargo, las redes lo suficientemente grandes sí requieren cuidado y planificación para un funcionamiento suave. Un entorno físico de redes mesh. A pesar de que no utilizan software de Commotion, dos ejemplos de redes mesh a gran escala son la Red Inalámbrica Metropolitana Atenas (AWMN) con más de 1100 nodos de red troncal y más de 2400 equipos cliente y Guifi.net de España, que tiene más de 19,000 nodos.</p>

<h3>¿Cuántos usuarios pueden utilizar un sólo nodo?</h3>
<p>Esto depende de la capacidad de cada dispositivo, en términos de conexión inalámbrica simultánea y en ancho de banda total consumido por cada usuario.</p>

<h3>Quiero correr aplicaciones en mi red mesh Commotion. ¿Cómo configuras X aplicación en una red mesh?</h3>
<p>Correr aplicaciones en una red local es muy similar a correr aplicaciones en Internet o en cualquier red local (LAN), y requiere de un mínimo de hospedaje en el servidor para la app o el servicio. Es servicio puede anunciarse entre los routers en mesh Commotion para que las personas que se conectan a través de tu red puedan encontrar el servicio o aplicación. Puedes revisar nuestra<a href="/docs/guides-howtos/local-applications/">Guía de aplicaciones locales</a> o el <a href="/docs/cck/local-applications">módulo local de aplicaciones en el KCC</a> para más información.</p>

<h2>Desarrollo</h2>

<h3>¿Ya se ha probado este proyecto o se encuentra únicamente en nivel de hipótesis? </h3>
<p>Commotion ha sido probado y está siendo utilizado en<a href="/about/where-its-used">múltiples lugares del mundo.</a></p>

<h3>¿Cómo se realizará la programación del proyecto?</h3>
<p>El proyecto se encuentra estructurado como un proyecto tradicional de código abierto. Estamos trabajando actualmente para coordinar e integrar muchos proyectos de código abierto en este campo. Puedes encontrar el código fuente de Commotion en<a href="https://github.com/opentechinstitute">nuestra página de Github</a>.</p>

<h3>¿Cómo se financia Commotion?</h3>
<p><a href="/about/funding">Commotion está financiado por diferentes fuentes</a> pero como un proyecto independiente de código abierto tiene un vida independiente sin importar de ningún financiamiento en particular. El financiamiento activo en cualquier momento en particular es consecuencia del tiempo, y no un reflejo de cómo aseguramos el apoyo de nuestro trabajo.</p>

<h3>¿Qué sistemas operativos son compatibles con Commotion?</h3>
<p>Cualquier dispositivo que habilite wifi, sin importar del sistema operativo, puede conectarse a un punto de acceso proveido por la red de Commotion sin tener que correr ningún software, y por lo tanto utilizando la red sin ser parte de ella.</p>

<p>Las imágenes con soporte oficial para el router Commotion pueden encontrarse<a href="/download/routers">en la página de descargas</a> del router Commotion. La información sobre las plataformas que están activamente en desarrollo pueden encontrarse en<a href="/developer/resources">la sección para desarrolladores</a> en este sitio.</p>

<h3>Me gustaría contribuir a la traducción de la interfaz y documentación de Commotion. ¿Cómo puedo participar?</h3>
<p>Puedes encontrar más información sobre cómo involucrarte en la traducción de Commotion en <a href="/docs/localization">nuestra página de Localización de Commotion.</a></p>

<h2>Construyendo redes</h2>
<h3>¿OTI construye redes? ¿Cómo es que OTI decide dónde trabajar? ¿Cómo es que decide dónde implementar Commotion? ¿Cómo es que OTI decide con quién trabajar en esos países? ¿Y cómo OTI conecta con las personas en el territorio?</h3>
<p>OTI no implementa Commotion. OTI brinda apoyo a las comunidades a través de talleres, herramientas y recursos. OTI busca que los socios de las comunidades decidan cómo quieren involucrarse y cómo quieren utilizar las herramientas. Nosotros los seguimos a ellos.</p> 
<p>Nosotros nos asociamos con individuos y grupos que trabajan en una gran variedad de temas de justicia social. OTI promueve las comunicaciones asequibles, universales y ubicuas a través de colaboraciones con comunidades, investigadores, industria, y grupos de interés público, y está comprometido con maximizar los potenciales de las tecnologías de innovación abierta. En el campo, OTI trabaja directamente con las comunidades al utilizar las herramientas basadas en aprendizajes de proyectos y diseño participativo, para construir y dar soporte a las insfraestucturas de tecnología controlada por las comunidades como una forma de auto-gobernanza. Los socios de las comundiades deciden cómo quieren involucrarse en el uso de la herramienta. OTI únicamente publica sobre proyectos o socios que quieren aparecer en nuestro sitio. </p>

<h3>Leí sobre {la red en la comunidad X}—¿Cómo puedo hacer eso en mi comunidad?</h3>
<p>OTI y sus socios han desarrollado una serie de herramientas para ayudar a otras comunidades a pensar en cómo construir redes comunitarias sustentables. El KCC está disponible gratuitamente en nuestro sitio web y está en constante actualización junto con el software Commotion. Para empezar, recomendamos trabajar con otros individuos y grupos en tu comunidad y comenzar con la sección de Planeando. Si hay una red específica o un caso de estudio que creas que puede ser un modelo para tu comunidad, definitivamente deberías unirte a  <a href="https://lists.chambana.net/mailman/listinfo/commotion-discuss">la lista de correos para discusión de Commotion</a> para conectarte directamente con los grupos que han hecho estas implementaciones.</p>

<h3>¿Cuánto cuesta construir una red Commotion?</h3>
<p>Por favor ve al post<a href="/blog/2014/04/14/how-much-does-it-cost/">blog</a> sobre este tema para más información en los distintos costos asociados con la construcción de una red Commotion.</p>

<h3>¿Puedo proporcionar acceso a Internet a toda mi comunidad a través de mi router de casa?</h3>
<p>Por supuesto que puedes compartir el acceso a Internet usando Commotion, aunque no podrás escalar a toda tu comunidad sólo con tu conexión a Internet de casa. Un router Commotion compartirá la banda ancha con otros dispositivos enmallados en una red si está conectado a Internet (en ese caso se llama “gateway” o puertos de acceso). Para una red comunitaria, seguro necesitarás múltiples puertos de acceso a Internet. Esto puede lograrse utilizando múltiples routers en una red mesh para que provean de múltiples puertos de acceso y banda ancha adicional. Revisa la sección "Uno o más nodos conectados a un puerto de acceso" en la<a href="/docs/cck/installing-configuring/common-hardware-setups/">página de configuración para hardware</a>.</p>

<h3>¿Cuánto costará dar acceso a Internet a toda la comunidad?</h3>
<p>Depende. Determinar el costo de una red inalámbrica comunitaria es complicado ya que involucra muchos factores, como el número de personas que necesitan el servicio, cuánto espacio necesitas cubrir en tu comunidad, y las opciones en tu comunidad para conectarse con las redes en Internet, así como el hardware, la instalación, y los costos de trabajo. Para dar algunos ejemplos de estos costos, por favor revisar la publicación en el blog <a href="/blog/2014/04/14/how-much-does-it-cost/">¿Cuánto cuesta?</a> Para comenzar a pensar en cómo te gustaría que la red de tu comunidad se viera, recomendamos reunir a tu comunidad para trabajar <a href="/docs/cck/planning/design-your-network-every-network-tells-story">el módulo Cada red cuenta una historia</a> del Kit de Construcción de Commotion, que te ayudará en tus ejercicios de planeación inicial.</p>

<h2>Tecnologías similares</h2>

<h3>Asumiendo que Commotion se implementa exitosamente, ¿cómo pueden ser rastreados los usuarios? Si los usuarios no pueden rastrearse, ¿no sería una buena herramienta para los criminales?</h3>
<p>No existe la perfecta seguridad y anonimato, pero tratamos de hacer una red que sea lo más segura posible y a la vez informar a los usuarios de las fortalezas, debilidades y las ramificaciones de la red. Una herramienta de este tipo es poderosa en las manos de cualquier persona o comunidad que la utilice. El software no es por sí mismo bueno o malo y puede ser utilizado por personas con varias intenciones. Activistas bajo un régimen opresivo pueden ser considerados como criminales por el gobierno al que se oponen.</p>

<h3>¿El proyecto estará accesible únicamente en periodos de disturbios?</h3>
<p>Esta tecnología es permanente. De hecho, muchos de los componentes fundamentales están<a href="/about/where-its-used">siendo utilizados alrededor del mundo</a> hoy en día para conectar a las comunidades.</p>

<h3>¿Qué ventajas tiene este método sobre el Internet satelital?</h3>
<p>Commotion es una serie de herramientas diseñadas para utilizar cualquier servicio de Internet, incluyendo vía satelital, y que la conexión pueda compartirse con cualquier persona en la red. Si no hay conexión a Internet disponible, los usuarios de la red podría aún comunicarse de forma segura y anónima entre ellos. Finalmente, la red está diseñada para auto-sanarse, permitiendo a los usuarios entrar y salir de la red cuando ellos lo necesiten.</p>

<h2>Prensa, investigación o colaboraciones</h2>
<h3>Soy un periodistas y quisiera entrevistar a alguien sobre Commotion.</h3>
<p>Gracias por tu interés en saber más sobre Commotion. Por favor ponte en contacto con Jenny Lu Mallamo, Encargada de las Relaciones con Medios en New America, en mallamo@newamerica.org o por teléfono al (202) 596-3368. Jenny puede direccionarte a la información que necesites o con la personas indicada y puede ayudarte a coordinar entrevistas</p>

<h3>Soy investigador, grupo comunitario, organización sin fines de lucro, entidad civil, etc., interesado en colaborar con OTI/Commotion.</h3>
<p>¡Gracias por acercarte! Antes de comenzar, recomendamos que explores nuestros recursos en la página web de Commotion. Si estás pensando en comenzar una red, el Kit de Construcción Commotion está diseñado para ayudarte a través de la planeación, construcción, instalación, y las necesidades básicas de las redes para comenzar una red inalámbrica usando Commotion. </p>
<ul>
<li>Únete a la <a href="https://lists.chambana.net/mailman/listinfo/commotion-discuss">lista de Discusión Commotion</a></li> 
<li>Los investigadores pueden leer antecedentes de nuestro reporte disponible <a href="http://oti.newamerica.net/publications/policy/universities_as_hubs_for_next_generation_networks">Universidades como</a> Hubs.</li>
<li>Descubre como <a href="/docs/get-started">comenzar</a>.</li> 
<li>Lee acerca de los costos <a href="/blog/2014/04/14/how-much-does-it-cost/">potenciales para construir redes Commotion.</a></li>
</ul>

<h3>¿Podrías decirme acerca de/conectarme con comunidades haciendo redes mesh?</h3>
<p>Sí. Casi todos los usuarios Commotion están en<a href="https://lists.chambana.net/mailman/listinfo/commotion-discuss">la lista de discusión Commotion</a> y hemos compilado una serie de  <a href="/about/where-its-used">casos de estudio en proyectos específicos</a>.</p>

</div> 
