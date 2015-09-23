---
layout: blog
title: ¿Es Commotion Vulnerable al error Shell Shock/Bash?
categories: [OpenWRT, security]
created: 2014-09-26
changed: 2014-09-26
teaser_image: posts/shellshock.jpg
post_author: Dan Staples
lang: es
---

Una nueva y seria [vulnerabilidad][shellshock] en el Linux [Bourne-again shell][bash] (Bash) ha estado rondando en los medios últimamente, llamada ya sea Shell Shock o el Bash Bug. La vulnerabilidad es potencialmente [aún más significante][errata] que la vulnerabilidad Heartbleed que ocurrió más temprano este año, y seguramente afecta un gran número de servidores en el internet.<!--more-->

La vulnerabilidad misma viene de la manera en que Bash shell interpreta las variables del ambiente. Si un atacante puede configurar una variable de ambiente en un script interpretado-con-bash, como muchos scripts CGI comúnmente encontrados en servidores web, pueden causar que el Bash shell ejecute arbitrariamente comandos, potencialmente dándole al atacante control sobre el servidor. Los vectores de ataques más comunes para esta vulnerabilidad vienen de un atacante configurando su agente de usuario o cabecera de HTTP, que se colocan en las variables de ambiente cuando los scripts CGI se ejecutan en el servidor al que se conectan. Aún los [DHCP clientes] [dhcp] son vulnerables. Para información más detallada en Shell Shock, checa este detallado [análisis en troyhunt.com] [troyhunt]. 

Muchos de ustedes se estarán preguntando si el Router Commotion firmware es vulnerable al Bash bug. Afortunadamente, la respuesta es no. La shell interactiva que corre en el [Commotion-router][], que la shell por defecto en lo que el [OpenWRT][] proyecto Commotion-router se basa en, no es Bash sino el [Almquist shell][ash] (ash) que está empacado con el [BusyBox][] software. Aunque no hay garantía de que otras shells de Linux no sean también vulnerables al mismo bicho, hemos confirmado que el ash shell que viene con OpenWRT es de hecho no vulnerable.

Aún así, si administras una computadora o un servidor que ejecuta Bash, querrás obtener las últimas actualizaciones de seguridad de tu distribuidor enseguida:

Ubuntu:

* [http://www.ubuntu.com/usn/usn-2362-1/][]

Debian:

* [https://lists.debian.org/debian-security-announce/2014/msg00220.html][]
* [https://lists.debian.org/debian-security-announce/2014/msg00221.html][]
* [https://security-tracker.debian.org/tracker/CVE-2014-6271][]

Redhat:

* [https://access.redhat.com/announcements/1210053][]
* [https://access.redhat.com/articles/1200223][]

CentOS:

* [http://lists.centos.org/pipermail/centos/2014-September/146099.html][]

OSX (debe recompilar bash):

* [https://apple.stackexchange.com/questions/146849/how-do-i-recompile-bash-to-avoid-shellshock-the-remote-exploit-cve-2014-6271-an][]

Gracias a Ben West por proveer los links de abajo.

[troyhunt]: http://www.troyhunt.com/2014/09/everything-you-need-to-know-about.html
[shellshock]: http://seclists.org/oss-sec/2014/q3/650
[bash]: https://www.gnu.org/software/bash/
[errata]: http://blog.erratasec.com/2014/09/bash-bug-as-big-as-heartbleed.html
[BusyBox]: http://busybox.net/
[ash]: http://rosettacode.org/wiki/Almquist_Shell
[dhcp]: https://www.trustedsec.com/september-2014/shellshock-dhcp-rce-proof-concept/
[OpenWRT]: https://openwrt.org/
[Commotion-router]: https://github.com/opentechinstitute/commotion-router
[http://www.ubuntu.com/usn/usn-2362-1/]: http://www.ubuntu.com/usn/usn-2362-1/
[https://lists.debian.org/debian-security-announce/2014/msg00220.html]: https://lists.debian.org/debian-security-announce/2014/msg00220.html
[https://lists.debian.org/debian-security-announce/2014/msg00221.html]: https://lists.debian.org/debian-security-announce/2014/msg00221.html
[https://security-tracker.debian.org/tracker/CVE-2014-6271]: https://security-tracker.debian.org/tracker/CVE-2014-6271
[https://access.redhat.com/announcements/1210053]: https://access.redhat.com/announcements/1210053
[https://access.redhat.com/articles/1200223]: https://access.redhat.com/articles/1200223
[http://lists.centos.org/pipermail/centos/2014-September/146099.html]: http://lists.centos.org/pipermail/centos/2014-September/146099.html
[https://apple.stackexchange.com/questions/146849/how-do-i-recompile-bash-to-avoid-shellshock-the-remote-exploit-cve-2014-6271-an]: https://apple.stackexchange.com/questions/146849/how-do-i-recompile-bash-to-avoid-shellshock-the-remote-exploit-cve-2014-6271-an
