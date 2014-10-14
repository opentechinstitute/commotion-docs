---
layout: default
title: Verifying Commotion Downloads 
site_section: download
categories: 
created: 2013-06-10
changed: 2013-09-20
post_author: OTI
lang: en
---
 <h2>What is a signature and why should I check it?</h2>
 <hr>
 <p>How do you know that the Commotion software you have is really the one we made? Depending on your situation, some person or entity might try to get you to download a fake version of Commotion. And if you're running a fake version of Commotion, not only is your security in jeopardy, but so is the security of everyone on your Commotion network.</p>
 <p>An attacker could try a variety of attacks to get you to download a fake version of Commotion. For example, he could trick you into thinking some other website is a great place to download Commotion. That's why you should always download Commotion from <strong>https</strong>://commotionwireless.net/. The https part means there's encryption and authentication between your browser and the website, making it much harder for the attacker to modify your download. But it's not perfect. Depending on where you live, the Commotion website may not be accessible to you. Large companies sometimes force employees to use a modified browser, so the company can listen in on all their browsing. There have even been <a href="https://blog.torproject.org/blog/diginotar-debacle-and-what-you-should-do-about-it">examples</a> of attackers who have the ability to trick your browser into thinking you're talking to a website with https when you're not.</p>
 <p>Some software sites, including Commotion, list <a href="http://en.wikipedia.org/wiki/Cryptographic_hash_function">md5 hashes</a> alongside the software on their website, so users can verify that they downloaded the file without any errors. These "checksums" help you answer the question "Did I download this file correctly from whoever sent it to me?" They do a good job at making sure you didn't have any random errors in your download, but they don't help you figure out whether you were downloading it from the attacker. The better question to answer is: "Is this file that I just downloaded the file that Commotion intended me to get?"</p>
 <h2>Where do I get the signatures and the keys that made them?</h2>
 <hr>
 <p>Each file on <a href="/download">our download page</a> is accompanied by a signature, which you can download by clicking on the seal icon (<img alt="" src="/images/seal.png" style="height:20px; width:21px" />) next to the image name.</p>
 <p><img alt="" src="/files/sigs.png" style="height:352px; width:492px" /></p>
 <p>The signature file will have the same name as the image file, but with the extension ".asc". These .asc files are GPG signatures. They allow you to verify the file you've downloaded is exactly the one that we intended you to get. For example, openwrt-ar71xx-generic-ubnt-bullet-m-squashfs-factory.bin is accompanied by openwrt-ar71xx-generic-ubnt-bullet-m-squashfs-factory.bin.asc.</p>
 <p>Below are instructions for how to verify these signatures, depending on your operating system.</p>
 <h3>Windows</h3>
 <hr>
 <p>You need to have GnuPG installed before you can verify signatures. Download it from <a href="http://gpg4win.org/download.html">http://gpg4win.org/download.html</a>.</p>
 <p>Once it's installed, use GnuPG to import the Commotion Developer signing key. Since GnuPG for Windows is a command-line tool, you will need to use cmd.exe. Unless you edit your PATH environment variable, you will need to tell Windows the full path to the GnuPG program. If you installed GnuPG with the default values, the path should be something like this: C:\Program Files\Gnu\GnuPg\gpg.exe.</p>
	"C:\Program Files\Gnu\GnuPg\gpg.exe" --keyserver x-hkp://pool.sks-keyservers.net --recv-keys 0xD01D01F1
After importing the key, you can verify that the fingerprint is correct:</p>

	"C:\Program Files\Gnu\GnuPg\gpg.exe" --fingerprint 0xD01D01F1
 <p>You should see:</p>
	pub   4096R/D01D01F1 2013-05-17
	Key fingerprint = 55A5 25F8 EFE5 7820 BA2A 40F7 D3F5 4B1E D01D 01F1
	uid                  Commotion Developers (Master Signing Key) &lt;commotion-dev@lists.chambana.net&gt;
	sub   4096R/AC84AB94 2013-05-17
 <p>To verify the signature of the file you downloaded, you will need to download the ".asc" file as well. Assuming you downloaded the file and its signature to your Desktop, run:</p>

	"C:\Program Files\Gnu\GnuPg\gpg.exe" --verify C:\Users\Alice\Desktop\openwrt-ar71xx-generic-ubnt-bullet-m-squashfs-factory.bin.asc C:\Users\Alice\Desktop\openwrt-ar71xx-generic-ubnt-bullet-m-squashfs-factory.bin
 <p>The output should say "Good signature":</p>

	gpg: Signature made Thu 23 May 2013 09:24:14 PM EDT using RSA key ID D01D01F1
	gpg: Good signature from "Commotion Developers (Master Signing Key) &lt;commotion-dev@lists.chambana.net&gt;"
	gpg: WARNING: This key is not certified with a trusted signature!
	gpg:          There is no indication that the signature belongs to the owner.
	Primary key fingerprint: 55A5 25F8 EFE5 7820 BA2A 40F7 D3F5 4B1E D01D 01F1
 <p>Notice that there is a warning because you haven't assigned a trust index to this person. This means that GnuPG verified that the key made that signature, but it's up to you to decide if that key really belongs to the developer. The best method is to meet the developer in person and exchange key fingerprints.</p>
 <h3>Mac OS X</h3>
 <hr>
 <p>You need to have GnuPG installed before you can verify signatures. You can install it from <a href="http://www.gpgtools.org/">http://www.gpgtools.org/</a>.</p>
 <p>Once it's installed, use GnuPG to import the Commotion Developer signing key. Import the key (0xD01D01F1) by starting the terminal (under "Applications") and typing:</p>

	gpg --keyserver x-hkp://pool.sks-keyservers.net --recv-keys 0xD01D01F1
 <p>After importing the key, you can verify that the fingerprint is correct:</p>

	gpg --fingerprint 0xD01D01F1
 <p>You should see:</p>

	pub   4096R/D01D01F1 2013-05-17
	Key fingerprint = 55A5 25F8 EFE5 7820 BA2A 40F7 D3F5 4B1E D01D 01F1
	uid                 Commotion Developers (Master Signing Key) &lt;commotion-dev@lists.chambana.net&gt;
	sub   4096R/AC84AB94 2013-05-17
 <p>To verify the signature of the file you downloaded, you will need to download the ".asc" file as well. Assuming you downloaded the file and its signature to your Desktop, run:</p>

	gpg --verify /Users/Alice/openwrt-ar71xx-generic-ubnt-bullet-m-squashfs-factory.bin{.asc,}
 <p>The output should say "Good signature":</p>

	gpg: Signature made Thu 23 May 2013 09:24:14 PM EDT using RSA key ID D01D01F1
	gpg: Good signature from "Commotion Developers (Master Signing Key) &lt;commotion-dev@lists.chambana.net&gt;"
	gpg: WARNING: This key is not certified with a trusted signature!
	gpg:          There is no indication that the signature belongs to the owner.
	Primary key fingerprint: 55A5 25F8 EFE5 7820 BA2A 40F7 D3F5 4B1E D01D 01F1
 <p>Notice that there is a warning because you haven't assigned a trust index to this person. This means that GnuPG verified that the key made that signature, but it's up to you to decide if that key really belongs to the developer. The best method is to meet the developer in person and exchange key fingerprints.</p>
 <h3>Linux</h3>
 <hr>
 <p>Most Linux distributions come with gpg pre-installed, so users who want to verify their Commotion download can just follow along with the instructions above for "Mac OS X".</p>
 <p>See <a href="http://www.gnupg.org/documentation/">http://www.gnupg.org/documentation/</a> to learn more about GPG.</p>
 <hr>
<p>This tutorial borrows heavily from documentation created by the <a href="https://www.torproject.org/docs/verifying-signatures.html.en" target="_blank">Tor Project</a>.</p>

