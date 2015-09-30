---
layout: default
title: Routers Recomendados para Commotion
site_section: docs
sub_section: [guides]
categories:
created: 2014-11-24
changed: 2014-11-24
post_author: Andy Gunn
lang: es
---

![Routers Intro Graphic](/files/Recommended_Hardware_Intro.png)

Cuando se está eligiendo el hardware apropiado para tu red, hay algunos roles diferentes que los routers pueden jugar en la red. Trabaja con [Cada Red Cuenta una Historia](/docs/cck/planning/design-your-network-every-network-tells-story/) y <strong>Tipos de Redes Inalámbricas</strong> (coming soon!).

<strong>Redes Interiores y de Ventana***********Indoor and Window Networks</strong><br />
Para uso general, redes interiores, o redes de ventana-a-ventana, puedes usar un router consumidor interno. Un buen ejemplo de esto es el TP-Link [WDR3600](http://www.tp-link.us/products/details/?categoryid=2268&model=TL-WDR3600) or [WDR4300](http://www.tp-link.us/products/details/?categoryid=2166&model=TL-WDR4300). Estos están disponibles en muchas ubicaciones, soportan banda dual (2.4GHz y 5GHz) uso Wi-Fi, y tienen puertos Ethernet switched.

<strong>Redes Externas – Antenas de todas las direcciones</strong><br />
Para redes externas o de techos donde hay conexiones cercanas en varias direcciones, puedes usar un router omnidireccional externo. Un buen ejemplo de esto son la serie de routers Ubiquiti [Rocket M](http://www.ubnt.com/airmax/rocketm/) . Son de una sola banda, pero disponibles en modelos de 2.4GHz y 5GHz. También vienen en varios tipos de antenas para personalizarlos. La opción de antena menos cara es usar antenas genéricas de banda dual RP-SMA, como aquellas usadas en routers internos pero una opción más cara es usar antenas Ubiquiti [AirMax Omni](http://www.ubnt.com/airmax/airmax-omni-antenna/). Ellas ofrecen ganancia alta************These offer high gain******* (que pueden extender el rango del router), y pueden a veces reducir la interferencia

<strong>Redes Externas – Antenas de una sola dirección</strong><br />
Para redes externas o de techo donde las conexiones son un poco más alejadas, o concentradas en una sola dirección, puedes usar un router direccional externo. Un bien ejemplo de esto son la serie de routers Ubiquiti [NanoStation M](http://www.ubnt.com/airmax/nanostationm/). Son de banda simple, pero disponibles en modelos 2.4GHz y 5GHz. Vienen con una antena construida, y con una señal en forma de gajo.****************** They come with a built-in antenna, with a wedge-shaped signal.********** El rango será bueno en la dirección en la que el router esté apuntando, pero pobre o inexistente en la mayoría de las otras direcciones.

<strong>Uso Avanzado o Personalizado</strong><br />
Para nodos mesh completamente personalizados, donde quieras mezclar y combinar antenas, o puedas tener un gran número de usuarios o conexiones, los MikroTik [RouterBoards](http://routerboard.com/) son excelentes. Estas son unidades que requieren antenas cerradas y externas, así que solo se recomiendan para constructores de redes más experimentados. *************These units require enclosures, and external antennas, so they are only recommended for more experienced network builders. Actualmente, Commotion ha estado probando con los modelos RB411/AH y RB433 y RB433/AH.
