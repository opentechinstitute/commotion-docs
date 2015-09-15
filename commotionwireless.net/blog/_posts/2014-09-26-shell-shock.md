---
layout: blog
title: Is Commotion Vulnerable to the Shell Shock/Bash Bug?
categories: [OpenWRT, security]
created: 2014-09-26
changed: 2014-09-26
teaser_image: posts/shellshock.jpg
post_author: Dan Staples
lang: en
---

A new and serious [vulnerability][shellshock] in the Linux [Bourne-again shell][bash] (Bash) has been making the rounds in the media lately, termed either Shell Shock or the Bash Bug. The vulnerability is potentially [even more significant][errata] than the Heartbleed vulnerability earlier this year, and likely affects a huge number of servers on the internet.<!--more-->

The vulnerability itself stems from the way the Bash shell interprets environment variables. If an attacker is able to set an environment variable in a bash-interpreted script, such as many CGI scripts commonly found on web servers, they can cause the Bash shell to execute arbitrary commands, potentially giving the attacker control over the server. The most common attack vectors for this vulnerability come from an attacker setting their user agent or HTTP header strings, which are put into environment variables when CGI scripts are run on the server they connect to. Even [DHCP clients][dhcp] are vulnerable. For more detailed information on Shell Shock, check out this detailed [analysis on troyhunt.com][troyhunt].

Many of you might be wondering if the Commotion router firmware is vulnerable to the Bash bug. Fortunately, the answer is no. The interactive shell that runs on [Commotion-router][], which is the default shell in the [OpenWRT][] project Commotion-router is based on, is not Bash but rather the [Almquist shell][ash] (ash) that is packaged with the [BusyBox][] software. Although there is no guarantee that other Linux shells are not also vulnerable to the same bug, we have confirmed that the ash shell that comes with OpenWRT is in fact not vulnerable.

Still, if you administer a computer or server that runs Bash, you'll want to get the latest security updates from your distribution right away:

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

OSX (must recompile bash):

* [https://apple.stackexchange.com/questions/146849/how-do-i-recompile-bash-to-avoid-shellshock-the-remote-exploit-cve-2014-6271-an][]

Thanks to Ben West for providing the above links.

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