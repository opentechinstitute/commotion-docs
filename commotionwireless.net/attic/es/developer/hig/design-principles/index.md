---
layout: default
title: Principios de Diseño
site_section: developers
sub_section: [hig]
categories: 
created: 2012-07-03
changed: 2013-12-25
post_author: michael@theworkdept.com
lang: es
---
 <h2>Facilidad de uso**********Ease of Use</h2>

<p>La red inalámbrica es un tema complejo para la mayoría de la gente y, a menudo una fuente de frustración para el usuario intermedio. Las interfaces de Commotion deben utilizar un lenguaje sencillo y ofrecer retroalimentación frecuente para guiar a un usuario a través de diversos procesos. Si está diseñado con los siguientes principios en mente, Commotion puede enseñar a los usuarios acerca de las redes inalámbricas y aumentar el conocimiento público sobre el tema.</p>

<h2>Consistencia</h2>

<p>Commotion es un proyecto en evolución al que mucha contribuye a través del tiempo y los continentes. Con el fin de fomentar la adopción generalizad y educación de igual a igual en el proyecto, los usuarios deben tener una experiencia consistente utilizando el software. Los procesos, el lenguaje y el estilo visual deben permanecer similares a través de diferentes implementaciones Commotion. Esto permite a las personas transferir sus conocimientos y habilidades de las versiones antiguas a nuevas y de un dispositivo a otro. Nuestra intención compartida es fomentar un ambiente en el que las personas se sienten cómodos probando Commotion, recomendándolo a otros, y enseñando a su comunidad cómo beneficiarse de él.</p>

<h2>Accesibilidad</h2>

<p>Las herramientas Commotion deberían ser desarrolladas con accesibilidad universal en mente para asegurar que los usuarios con impedimentos visuales, de movilidad, auditivos u otros, puedan usarlas exitosamente. Las pruebas deberían también incluir usuarios con varias habilidades. Cualquier elemento de la interfaz con el que un usuario interactúa debería ser accesible al usar una variedad de métodos. Aquí hay algunos principios simples que deben guiar el desarrollo Commotion:</p>

<ol>
	<li>Usa alt o texto descriptivo para describir imágenes que no puedan seer leídas por un lector de pantalla.</li>
	<li>Diseña interfaces que usen colores contrastantes, específicamente cuando el texto este presente. Esto es útil para las personas con impedimentos visuales o personas que tratan de incrementar el contrastante de su sistema operativo UI.</li>
	<li>Mientras que los códigos de colores son una herramienta organizacional útil, no requiere que los usuarios distingan entre colores para poder interactuar con tu interfaz. Esto es útil para las personas que puedan tener dificultad distinguiendo algunos colores.</li>
	<li>Asegúrate que un usuario pueda navegar tu aplicación usando solo un teclado si es necesario. Esto es útil para las personas que usan dispositivos de asistencia.</li>
</ol>

<p>Hay muchos más principios de desarrollo de aplicaciones accesibles. Numerosos recursos están disponibles para guiar las acciones de los diseñadores y desarrolladores y les asegura que van a través de los pasos de un proceso. Los usuarios deben recibir un mensaje positivo, sonido o validación cuando una red se ha configurado correctamente y las instrucciones de qué hacer a continuación. Cuando se produce un error, un mensaje de error, fácil de entender, debería ayudar al usuario a comprender qué hacer al respecto.</p>

<p>Dependiendo de la aplicación, puedes incluir animaciones que muestran el progreso de entre los estados, como se muestra abajo.</p>

<h2><img alt="" src="/files/feedback.png" style="margin-bottom:5px; margin-top:5px; width:871px" /></h2>

<h2>Barra de estatus y notificaciones</h2>

<p>Cada vez que sea posible, una aplicación debe desarrollarse usando la ícono de la barra de estatus estándar de Commotion. El ícono indica que el software Commotion esta corriendo y la velocidad de la red a la que el usuario está conectado, si es aplicable. En Android, es apropiado colocar esto en el lado correcto con los otros íconos estándar.</p>

<p>En teléfonos móviles y aplicaciones de escritorio, una notificación debería siempre estar presente cuando un dispositivo se conecte a una red mesh. Cuando se toca la notificación, la aplicación Commotion debería reabrir. En Android, esto se considera un indicativo, un proceso significativo que continúa hasta que el usuario lo termina. Es conveniente también incluir un icono en la parte izquierda de la barra de estado cuando la notificación está presente. Este icono distintivo muestra a cuántos nodos el dispositivo está conectado.</p>

<p><img alt="" src="/files/status%20bar%20and%20notifications.png" style="width:841px" /></p>

<h2>Tamaño y la orientación de la pantalla</h2>

<p>Las aplicaciones móviles Commotion, aplicaciones web y sitios web deberían responder a los tamaños de pantalla y navegador.</p>

<p>Los desarrolladores móviles deben ser especialmente sensibles a la orientación de la pantalla. Los usuarios pueden girar los dispositivos móviles en cualquier momento y por una variedad de razones. A veces, una tarea puede sentirse más natural en una orientación determinada -- un retrato o paisaje. Si un dispositivo se hace girar por cualquier razón, Commotion debe responder de manera adecuada y mantener su enfoque en la tarea principal que nos ocupa. La aplicación debería comenzar en la misma orientación que el menú de aplicaciones que lo lanza. En los teléfonos Android que tienen un teclado físico, el menú de aplicaciones esta a menudo en orientación horizontal cuando el teclado está abierto.</p>

