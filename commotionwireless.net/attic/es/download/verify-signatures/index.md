---
layout: default
title: Vericando Descargas Commotion
site_section: download
categories: 
created: 2013-06-10
changed: 2013-09-20
post_author: OTI
lang: es
---
 <h2>¿Qué es una firma y por qué debería verificarla?</h2>
 <hr>
 <p>¿Cómo sabes que el software Commotion que tienes es realmente el que nosotros hicimos? Dependiendo de tu situación, alguna persona o entidad puede tratar de que descargues una versión falsa de Commotion. Y si estás ejecutando una versión falsa de Commotion, no solo tu seguridad está en riesgo, sino también la seguridad de todos en tu red Commotion.</p>
 <p>Un atacante puede probar con una variedad de ataques para que descargues una versión falsa de Commotion. Por ejemplo, te puede engañar al hacerte pensar que otro sitio es genial para descargar Commotion. Es por ello que siempre debes descargar Commotion de <strong>https</strong>://commotionwireless.net/. La parte https significa que hay un cifrado y autentificación entre tu navegador y el sitio web, haciendo que sea mucho más difícil para que el atacante pueda modificar tu descarga. Pero no es perfecto. Dependiente de donde vivas, el sitio web Commotion puede no ser accesible para ti. Las grandes compañías a veces forzan a sus empleados a usar un navegador modificado, para que la compañía pueda escuchar todas sus navegaciones. Incluso han habido <a href="https://blog.torproject.org/blog/diginotar-debacle-and-what-you-should-do-about-it">ejemplos</a> de atacantes que tienen la habildad de engañar a tu navegador para que piense que está hablando con un sitio web con https cuando no lo estás haciendo.</p>
 <p>Algunos sitios de software, incluido Commotion, listan <a href="http://en.wikipedia.org/wiki/Cryptographic_hash_function">md5 hashes</a> junto con el software de su sitio web, para que los usuarios puedan verificar que han descargado el archivo sin errores. Estos "checksums" te ayudan a responder la pregunta "¿Descargué correctamente este archivo de quien quiera que me lo haya enviado?" Hacen un buen trabajo al asegurarse que no tuviste ningún error aleatorio en tu descarga, pero no te ayudan a descubrir si lo descargaste de un atacante. La mejor pregunta a responder es: "¿Fue este archivo que acabo de descargar, el archivo que Commotion quería que descargara?"</p>
 <h2>¿De donde obtengo las firmas y las claves que las hacen?</h2>
 <hr>
 <p>Cada archivo en <a href="/download">nuestra páginda de descargas</a> está acompañado de una firma, que puedes descarcar al dar click en ícono del sello (<img alt="" src="/images/seal.png" style="height:20px; width:21px" />) junto al nombre de la imagen.</p>
 <p><img alt="" src="/files/sigs.png" style="height:352px; width:492px" /></p>
 <p>El archivo de la firma tendrá el mismo nombre que el archivo de la imagen, pero con la extensión ".asc". Estos archivos .asc son firmas GPG. Te permiten verificar que el archivo que descargaste sea exactamente el que querías obtener. Por ejemplo, openwrt-ar71xx-generic-ubnt-bullet-m-squashfs-factory.bin está acompañado de openwrt-ar71xx-generic-ubnt-bullet-m-squashfs-factory.bin.asc.</p>
 <p>Abajo hay instrucciones de como verificar estas firmas, dependiendo de tu sistema operativo.</p>
 <h3>Windows</h3>
 <hr>
 <p>Necesitas tener GnuPG instalado antes de verificar las firmas. Descárgalo de <a href="http://gpg4win.org/download.html">http://gpg4win.org/download.html</a>.</p>
 <p>Una vez instalado, usa GnuPG para importar la clave de acceso del Desarrollador Commotion Developer. Ya que GnuPG para Windows es una herramienta de línea de comandos, necesitarás usar cmd.exe. A menos que edites tu variable de ambiente PATH, necesitarás decirle a Windows el path completo para el programa GnuPG. Si instalaste GnuPG con los valores por defecto, el path solo debería ser algo como esto: C:\Program Files\Gnu\GnuPg\gpg.exe.</p>
	"C:\Program Files\Gnu\GnuPg\gpg.exe" --keyserver x-hkp://pool.sks-keyservers.net --recv-keys 0xD01D01F1
Después de importar la clave, puedes verificar que tu huella digital sea correcta:</p>

	"C:\Program Files\Gnu\GnuPg\gpg.exe" --fingerprint 0xD01D01F1
 <p>Deberías ver:</p>
	pub   4096R/D01D01F1 2013-05-17
	Key fingerprint = 55A5 25F8 EFE5 7820 BA2A 40F7 D3F5 4B1E D01D 01F1
	uid                  Commotion Developers (Master Signing Key) &lt;commotion-dev@lists.chambana.net&gt;
	sub   4096R/AC84AB94 2013-05-17
 <p>Para verificar tu firma en el archivo que descargaste, necesitarás descargar el archivo ".asc" también. Asumiendo que descargaste el archivo y su firma en tu Escritorio, ejecuta:</p>

	"C:\Program Files\Gnu\GnuPg\gpg.exe" --verify C:\Users\Alice\Desktop\openwrt-ar71xx-generic-ubnt-bullet-m-squashfs-factory.bin.asc C:\Users\Alice\Desktop\openwrt-ar71xx-generic-ubnt-bullet-m-squashfs-factory.bin
 <p>El resultado debería decir "Buena firma":</p>

	gpg: Firma hecha el Jue 23 May 2013 09:24:14 PM EDT usando RSA key ID D01D01F1
	gpg: Buena firma de "Commotion Developers (Master Signing Key) &lt;commotion-dev@lists.chambana.net&gt;"
	gpg: ¡ADVERTENCIA: Esta clave no está certificada con una firma confiable!
	gpg:          No hay indicación de que la firma pertenezca al dueño.
	Primary key fingerprint: 55A5 25F8 EFE5 7820 BA2A 40F7 D3F5 4B1E D01D 01F1
 <p>Nota que hay una advertencia porque no has asignado un directorio confiable a esta persona. *********Esto significa que GnuPG verificado que la clave hizo tal firma, *******This means that GnuPG verified that the key made that signature,************ pero depende de ti decidir si esa clave realmente pertenece al desarrollador. **********El mejor método es conocer al desarrollador en persona e intercambiar huellas digitales************The best method is to meet the developer in person and exchange key fingerprints.</p>
 <h3>Mac OS X</h3>
 <hr>
 <p>Necesitas tener GnuPG instalado antes de verificar las firmas. Puedes instalarlas de <a href="http://www.gpgtools.org/">http://www.gpgtools.org/</a>.</p>
 <p>Una vez instalado, usa GnuPG para importar la clave de acceso del Desarrollador Commotion. Importa la clave (0xD01D01F1) al prender la terminal (bajo "Aplicaciones") y escribir:</p>

	gpg --keyserver x-hkp://pool.sks-keyservers.net --recv-keys 0xD01D01F1
 <p>Después de importar la clave, puedes verificar que la huella digital sea correcta:</p>

	gpg --fingerprint 0xD01D01F1
 <p>Deberías ver:</p>

	pub   4096R/D01D01F1 2013-05-17
	Key fingerprint = 55A5 25F8 EFE5 7820 BA2A 40F7 D3F5 4B1E D01D 01F1
	uid                 Commotion Developers (Master Signing Key) &lt;commotion-dev@lists.chambana.net&gt;
	sub   4096R/AC84AB94 2013-05-17
 <p>Para verificar esta firma del archivo que descargaste, necesitarás descargar el archivo ".asc" también. Asumiendo que descargaste el archivo y su firma a tu Escritorio, ejecuta:</p>

	gpg --verify /Users/Alice/openwrt-ar71xx-generic-ubnt-bullet-m-squashfs-factory.bin{.asc,}
 <p>El resultado debería decir "Buena firma":</p>

	gpg: Firma hecha el Jue Thu 23 May 2013 09:24:14 PM EDT usando RSA key ID D01D01F1
	gpg: Buena firma de "Commotion Developers (Master Signing Key) &lt;commotion-dev@lists.chambana.net&gt;"
	gpg: ¡ADVERTENCIA: Esta clave no está certificada con una firma confiable!
	gpg:          No hay indicación de que la firma pertenezca al dueño.
	Primary key fingerprint: 55A5 25F8 EFE5 7820 BA2A 40F7 D3F5 4B1E D01D 01F1
 <p>Nota que hay una advertencia porque no has asignado un directorio confiable a esta persona. *********Esto significa que GnuPG verificado que la clave hizo tal firma, *******This means that GnuPG verified that the key made that signature,************ pero depende de ti decidir si esa clave realmente pertenece al desarrollador. **********El mejor método es conocer al desarrollador en persona e intercambiar huellas digitales************The best method is to meet the developer in person and exchange key fingerprints.</p>
 <h3>Linux</h3>
 <hr>
 <p>La mayoría de las distribuciones Linux vienen con gpg pre-instalado, para que los usuarios que quieran verificar sus descargas Commotion puedan solo seguir las instrucciones abajo para "Mac OS X".</p>
 <p>Ve <a href="http://www.gnupg.org/documentation/">http://www.gnupg.org/documentation/</a> para aprender más de GPG.</p>
 <hr>
<p>Este tutorial toma prestado mucha de la documentación creada por el <a href="https://www.torproject.org/docs/verifying-signatures.html.en" target="_blank">Proyecto Tor</a>.</p>

