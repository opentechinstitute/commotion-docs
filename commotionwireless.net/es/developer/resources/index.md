---
layout: default
title: Recursos de Desarrollador
site_section: developers
categories: 
created: 2013-06-28
changed: 2014-02-27
post_author: areynold
lang: es
---
Si estás interesado en ayudar a desarrollar el software Commotion Wireless, o quieres crear tus propias imágenes de software para routers específicos u otros dispositivos, por favor ve las secciones debajo para las plataformas en las que estás interesado.

<h2>Plataformas</h2>

<p>Commotion corre en múltiples plataformas de software y hardware: Algunos routers inalámbricos, teléfonos inteligentes, y computadoras de escritorio y laptops. El desarrollo del software en cada plataforma se mueve a diferentes tiempos, pero estamos trabajando en unificar el código a través de todas las plataforma. Dónde es posible, un set de herramientas comunes se usa para desarrollar Commotion, sin importar la plataforma. No obstante, hay ciertas plataformas donde las herramientas únicas se requieren.</p>

<ul>
	<li><a href="commotion-router/">Guía de Desarrollo Commotion-Router</a></li>
	<li><a href="commotion-android/">Guía de desarrollo de aplicaciones Commotion-Android</a></li>
	<li><a href="https://wiki.commotionwireless.net/doku.php?id=commotion_architecture:commotion_client_architecture">Guía de desarrollo de aplicaciones Linux</a></li>
	<li><a href="https://wiki.commotionwireless.net/doku.php?id=commotion_architecture:commotion_client_architecture">Guía de desarrollo de aplicaciones Windows</a></li>
	<li><a href="commotion-mac/">Guía de desarrollo de aplicaciones Mac OS X y iOS</a></li>
<!-- 	<li><a href="https://wiki.commotionwireless.net/doku.php?id=general_openbts_notes">Guía de desarrollo de aplicaciones Open GSM</a></li> -->
</ul>

<h2>Arquitecturas</h2>

<p>Todas las plataformas Commotion comparten un centro común: una red compartida mediana (usualmente Wifi ad-hoc, conocido como <a href="http://en.wikipedia.org/wiki/Independent_Basic_Service_Set">IBSS</a>) y un protocolo de routing IP *********an IP routing protocol****** (<a href="http://www.olsr.org">OLSRd</a>). Lee más acerca de la <a href="https://wiki.commotionwireless.net/doku.php?id=commotion_architecture:start">arquitectura Commotion</a> y como varia a través de plataformas en el Wiki de Desarrollo.</p>

<h2>Código</h2>

<p>Commotion está escrito en una combinación de C, Lua, Javascript, Python, Java, shell, Objective-C, PHP. Todo nuestro código fuente está hospedado en <a href="http://github.org/opentechinstitute">Github</a>. Para ver la relación entre los repositorios de códigos y la arquitectura Commotion lee los documentos de arquitectura abajo.</p>

<p>Ve la <a href="https://wiki.commotionwireless.net/doku.php/development_resources/github_workflow">GitHub Workflow</a> página del <a href="https://wiki.commotionwireless.net">Wiki de Commotion</a> para información del flujo de trabajo GitHub del equipo de Commotion.</p>

<h2>Debugging Tools**********Herramientas de depuración</h2>

<p>Los desarrolladores Commotion se basan en una combinación de herramientas, experiencia, e intuición para depurar.*********debug********* Usamos gdb, ddms y pruebas de unidad. Lee más acerca de nuestros <a href="https://wiki.commotionwireless.net/doku.php/development_resources/testing/testing_procedures_and_methodologies">procedimientos de pruebas y metodologías</a> y procedimientos para <a href="https://wiki.commotionwireless.net/doku.php/development_resources/testing/lab_environment_testing">pruebas de laboratorio</a> en el Wiki de Desarrollo.</p>

<p>Lee más acerca de <a href="https://wiki.commotionwireless.net/doku.php/development_resources/router/debugging_resources">******common debugging procedures********procedimientos de depuración comunes******</a> que usamos en el Wiki de Desarrollo****** we use on the Developer Wiki*******. Para reportar fallas y enviar arreglos, usa nuestro********** To report bugs and submit fixes, use our <a href="https://github.com/opentechinstitute">rastreador de problemas</a>.</p>
 
