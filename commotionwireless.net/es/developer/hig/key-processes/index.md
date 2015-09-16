---
layout: default
title: Procesos Clave
site_section: developers
sub_section: [hig]
categories:
created: 2012-07-03
changed: 2013-07-14
post_author: michael@theworkdept.com
lang: es
---
  <h2>Construyendo y manteniendo una red</h2>

<p>El siguiente diagrama de flujo describe los pasos por los que un usuario debe pasar con el fin de crear o unirse a una red mesh. El proceso comienza con una pantalla de bienvenida (splash) simple que incluye el logotipo de Commotion y es seguido por la detección automática de la red. Después de elegir o crear una red que no este cifrada, el usuario debe ver inmediatamente una advertencia pop-up que lee:</p>

<p>"La actividad en esta red mesh puede ser monitoreada por partes externas. Aprende más acerca de seguridad y privacidad."<br />
(<a href="/developer/hig/key-concepts#security">Lee las guías de seguridad, privacidad y anonimato.</a>)</p>

<p>Crear o unirse a una red debe ser una tarea veloz que el usuario aprende rápidamente y puede también enseñar a otros. Una vez que el dispositivo esté conectado a una red mesh, un usuario puede cerrar la aplicación o la página y regresar más tarde si quieren dejar la red o cambiar las configuraciones.</p>

<p><img alt="" src="/files/key_process_FLOWCHART.png" /></p>

<h2>Cambiando configuraciones avanzadas</h2>

<p>Esta área debe ofrecer a los usuarios avanzados y administradores de red opciones adicionales y aplicaciones experimentales. Estas pueden incluir configuraciones relacionadas con una red mesh o configuraciones globales relacionadas con la aplicación. En Android, esta área debería simplemente usar el estilo de menú nativo de Android. En las aplicaciones basadas en la web y de escritorio, esta ára debería usar menús simples que sean consistentes con la identidad de marca Commotion.</p>

<p>Estas son las configuraciones típicas que pueden estar disponibles en áreas avanzadas:</p>

<ol>
	<li>Cambia BSSID</li>
	<li>Cambia ESSID</li>
	<li>Metadata (ubicación, descripción, etc.)</li>
	<li>Opciones OLSRd</li>
	<li>Cambia los niveles de poder</li>
	<li>Elige un tema</li>
	<li>Importa/exporta configuración</li>
</ol>

<p><img alt="" src="/files/advanced%20settings.png" /></p>

<p>&nbsp;</p>

<h2>Obteniendo Ayuda</h2>

<p>Estas son opciones típicas que deberían estar disponibles en el área de ayuda. En Android, esta área debería simplemente usar el estilo de menú nativo de Android, como el menú de Configuraciones Avanzadas mostrado abajo.</p>

<ol>
	<li>Observa el manual de usuario en commotionwireless.net/docs/user-manual</li>
	<li>Reporta un error</li>
	<li>Envía retroalimentación</li>
	<li>Acerca de Commotion</li>
</ol>

<h2>Viendo el log**********Viewing the log</h2>

<p>El area de log debería incluir******* The log area should include*****una historia de actividades de red claves y la fecha y tiempo en que ocurrieron. El log ***** The log *** debería seguir las guías del lenguaje común discutido previamente en esta guía. Hay un ejemplo abajo:</p>

<table border="0" cellpadding="10" cellspacing="0" style="width:400px">
	<tbody>
		<tr>
			<td>Hoy</td>
			<td>5:12pm</td>
			<td>Aplicación Abierta</td>
		</tr>
		<tr>
			<td>Hoy</td>
			<td>4:30pm</td>
			<td>Salir de la Aplicación</td>
		</tr>
		<tr>
			<td>Hoy</td>
			<td>11:00am</td>
			<td>Izquierda <strong>MantequilladeManí</strong> red mesh</td>
		</tr>
		<tr>
			<td>Viernes</td>
			<td>9:47pm</td>
			<td>Cliente <strong>Bobby500</strong> conectado a mi nodo</td>
		</tr>
		<tr>
			<td>Viernes</td>
			<td>8:23pm</td>
			<td>Joined <strong>MantequilladeManí</strong> red mesh</td>
		</tr>
	</tbody>
</table>

<p>Esta página debería incluir también las siguientes opciones:</p>

<ul>
	<li><strong>Descarga</strong> (descarga el log completo******download the complete log****** como un archivo de texto plano)</li>
	<li><strong>Enviado al equipo Commotion</strong> (para enviar el log por correo electrónico***** to email the log***** al equipo de desarrollo de la aplicación)</li>
	<li><strong>Borrar</strong> (*****para borrar el log******to delete the log******)</li>
</ul>

<h2>Uniéndose a una red mesh como cliente</h2>

<p>Cuando un cliente se une a una red mesh sin usar software mesh, una pantalla splash estándar debería aparecer cuando el usuario primero abra un navegador de red. Aquí hay un ejemplo.</p>

<p><img alt="" src="/files/join%20as%20a%20client.png" /></p>

<p>&nbsp;</p>
