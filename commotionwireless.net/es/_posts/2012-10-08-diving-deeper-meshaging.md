---
layout: blog
title: Profundizando en el "meshaging"
categories: [es]
tags: [messaging,chat,UX,applications]
created: 2012-10-08
changed: 2012-10-29
post_author: The Work Department
lang: es
---
  En nuestra reciente <a href="https://commotionwireless.net/blog/exploring-meshaging" target="_blank">publicación del blog sobre mensajes</a>, introdujimos nuestra aplicación &ldquo;meshaging&rdquo; (chat básico) y explicamos algunos de los planes para nuestro futuro trabajo con él. Todavía estamos trabajando en este proyecto y hemos diagramado cómo sucede exactamente la comunicación en la aplicación. Esto ha mejorado nuestro proceso interno y creemos que es beneficioso compartirlo.
En comparación con los sistemas centralizados, basados en servidor, las aplicaciones de redes descentralizadas son un poco desordenadas: con el beneficio de la descentralización viene el costo de una mayor complejidad. Mantener la consistencia de los datos a través de una red mesh es un problema difícil de resolver, y hay muchos enfoques interesantes para abordar este problema. Como diseñadores, nos interesamos en acoger la inconsistencia: ¿qué sistemas podrían existir, o incluso prosperar, en una red de conexiones inconsistentes o dispositivos transitorios? Esto es importante tener en cuenta debido a que una red mesh podría estar cambiando constantemente.
Para explorar el tema de la comunicación descentralizada, decidimos trabajar a través del diseño de una aplicación de chat de una red mesh en la que los nodos servirían como hubs de chat. Consideramos como una aplicación de chat descentralizada se vería con niveles variados de replicación o mensajes compartidos entre nodos vecinos
Usamos la analogía de la aplicación del chat por su simplicidad y generalidad, pero puedes reemplazar los &ldquo;chats&rdquo; con cualquier tipo de mensajes de uno a varios. Actualmente, como un ejercicio, ¡realmente <em>deberías</em> intentar y pensar en otro tipo de mensajes que podrían ser transportados sobre una red mesh! Imagina una red de termómetros en un invernadero, o una red de sensores de movimiento que encienda luces, o muchas otras posibilidades.
<img alt="" class="decoded" src="/files/basic_chat_diagrams_for_blog_Artboard_1_0.png" style="width: 540px; height: 485px;" />
**Diagrama 1** (arriba) ilustra una aplicación de chat en la que los nodos envían mensajes sólo a los clientes conectados localmente (cero saltos). Los números 1, 2, y 3 representan los nodos conectados a la red mesh, y los pequeños íconos de personas designadas con letras representan las personas conectadas a cada uno de los nodos. En este escenario, los usuarios pueden chatear con otros usuarios en el mismo nodo. Por ejemplo, la persona H puede chatear con la persona J porque ambos están conectados al Nodo 2. No pueden, sin embargo, chatear con la Persona K o la Persona D, porque esos usuarios, aunque están conectados con la red de mesh, están en diferentes nodos.
<img id="internal-source-marker_0.5773324861970599" src="/files/basic_chat_diagrams_for_blog_Artboard_2_0.png" />
**Diagrama 2 **(arriba) ilustra a los usuarios en el Nodo 1 comunicándose (hop-cero/sistema de chat sin transmisión).
<img id="internal-source-marker_0.5773324861970599" src="/files/basic_chat_diagrams_for_blog_Artboard_3_0.png" />
**Diagrama 3** (arriba) ilustra a un vecino de al lado difundir un sistema de chat, en el que los nodos difundirían todos los mensajes a nodos dentro de la distancia de un salto. Este sistema permitiría a una persona chatear con las personas conectadas dentro de su propio nodo, o con sus vecinos de al lado, pero no con nodos a dos o más saltos. En el Diagrama 3, la Persona G puede chatear con la Persona C porque ambos están conectados al Nodo 1. Pero en esta etapa la Persona G también puede chatear con la Persona J porque J está conectada con G del nodo 2 del vecino de al lado. Aunque, la Persona G no podría chatear con la Persona L, porque el Nodo 3, al que la Persona L está conectado, está a dos saltos de distancia.
<img id="internal-source-marker_0.5773324861970599" src="/files/basic_chat_diagrams_for_blog_Artboard_4.png" />
**Diagrama 4** (arriba) muestra como el vecino de al lado difunde el sistema de chat, ilustrando a los usuarios en el Nodo 1 comunicándose uno con el otro y a los usuarios en el Nodo 2.
Esperamos que estos diagramas puedan ayudar a incentivar conversaciones acerca del desarrollo de aplicaciones descentralizadas. Mantente atento para más mensajes.


