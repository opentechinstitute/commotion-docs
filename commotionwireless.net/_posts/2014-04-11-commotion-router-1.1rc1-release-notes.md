---
layout: blog
title: Commotion Router v1.1 "Grumpy Cat" Release Candidate 1 
categories: [release]
created: 2014-02-04
changed: 2014-04-11
teaser_image: commotion_logo_100x100.png
post_author: Josh King
lang: en
---
This is the release candidate for our v1.1 bugfix release for our Commotion Router firmware. It is built on <a href="https://openwrt.org/">OpenWRT Attitude Adjustment trunk</a>, <a href="http://olsr.org/">OLSRd v0.6.5</a>, <a href="http://www.servalproject.org/">libseval</a>, and other software. It also includes the Commotion-specific components listed below with the features and enhancements included in this release:<!--more-->

## commotiond v0.2.1
This release primarily fixes a large number of bugs and memory leaks.

### Major Issues resolved:
<ul>
<li><a href="https://github.com/opentechinstitute/commotiond/issues/83">Commotiond will no longer generated invalid BSSIDs in some circumstances.</a></li>
<li>Added additional functions to libcommotion standard library for better memory control. (<a href="https://github.com/opentechinstitute/commotiond/commit/b538c96">b538c96</a> and <a href="https://github.com/opentechinstitute/commotiond/commit/9dbb189">9dbb189</a>)</li>
<li>Improved handling of DHCP options in OpenWRT scripts. (<a href="https://github.com/opentechinstitute/commotiond/commit/bb49b46">bb49b46</a> and <a href="https://github.com/opentechinstitute/commotiond/commit/b563048">b56e048</a>)</li>
<li>Numerous other bugfixes.</li>
</ul>

### Authors (by commits):
<ul>
<li><a href="https://github.com/jheretic">Josh King</a></li>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
<li><a href="https://github.com/gradyoti">Grady Johnson</a></li>
<li><a href="https://github.com/hawkinsnaf">Will Hawkins</a></li>
<li><a href="https://github.com/technosopher">Jordan McCarthy</a></li>
</ul>

## commotion-dashboard-helper v0.2.1
Bugfix update to 0.2.0

### Major Issues Resolved:
<ul>
<li>Fix form validation error</li>
<li>Migrate functions to new commotion-lua-helpers modules</li>
<li>Check for existing entry before adding to crontab</li>
</ul>

### Authors (by commits):
<ul>
<li><a href="https://github.com/areynold">Andrew Reynolds</a></li>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
</ul>

## commotion-debug-helper v1.0
This is the stable 1.0 version of commotion-debug-helper

### Features:
<ul>
<li>Input validation</li>
<li>Downloadable debugging reports</li>
<li>Form fields</li>
<li>Clickable radio form selectors</li>
</ul>

## commotion-lua-helpers v1.1

### Major Issues Resolved:
<ul>
<li>Added a validation library and integrated in with all Commotion packages.</li>
</ul>

### Authors (by commits):
<ul>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
<li><a href="https://github.com/elationfoundation">Seamus Tuohy</a></li>
<li><a href="https://github.com/jheretic">Josh King</a></li>
<li><a href="https://github.com/areynold">Andrew Reynolds</a></li>
</ul>

## commotion-service-manager v0.4

### Major Issues resolved:
<ul>
<li>Periodically restart avahi server to prompt service announcements, helps with reliability</li>
<li>Misc fixes</li>
</ul>

### Authors (by commits):
<ul>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
</ul>

## luci-commotion v1.1

### Major Issues Resolved:
<ul>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/148">Shared Mesh Keychain uploading now works.</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/144">Paired all browser user-entry warnings with back-end checks to support correct input.</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/150">Mesh over ethernet is now fully supported in the setup wizard and basic menu.</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/143">Setup wizard is now disabled upon any use of the admin-menu.</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/170">Adding SSH keys in the advanced menu now requires a user to enter the admin password.</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/187">Removed auto-spacing in the mesh visualizer "olsr-viz."</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/180">Hostnames are now only set after applying all changes during the setup-wizard</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/172">Serval Mesh Keychains now clear and recreate a new key upon being added</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/pull/195">All commotion splash logic has been moved to the luci-commotion-splash repository.</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion/issues/179">Added field specific browser input warnings for invalid values on forms</a></li>
</ul>

### Authors (by commits):
<ul>
<li><a href="https://github.com/elationfoundation">Seamus Tuohy</a></li>
<li><a href="https://github.com/areynold">Andrew Reynolds</a></li>
<li><a href="https://github.com/jheretic">Josh King</a></li>
<li><a href="https://github.com/critzo">Chris Ritzo</a></li>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
<li>Special thanks to <a href="https://wiki.gnome.org/OutreachProgramForWomen">OPW</a> intern applicant <a href="https://github.com/sheenaj">Sheena</a> for <a href="https://github.com/opentechinstitute/luci-commotion/issues/179">Issue #179</a></li>
</ul>

## luci-commotion-apps v2.1

### Major Issues resolved:
<ul>
<li>avahi field is sha1sum of UUID and hostname</li>
<li>updated to use new commotion-lua-helpers validate module</li>
<li>updated to use new serval-client program for signing announcements</li>
<li>properly blacklist apps</li>
<li>added confirmation message when adding application</li>
<li>better integration with olsrd-dnssd</li>
<li>misc fixes</li>
</ul>

### Authors (by commits):
<ul>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
</ul>

## luci-commotion-splash v1.3

### Major Issues Resolved:
<ul>
<li><a href="https://github.com/opentechinstitute/commotion-docs/issues/1">The splash page will now capture https traffic</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion-splash/pull/10">Commotion Splash can now run without any other Commotion packages</a></li>
<li><a href="https://github.com/opentechinstitute/luci-commotion-splash/pull/26">Nodogsplash is now configured using UCI</a></li>
</ul>

### Authors (by commits):
<ul>
<li><a href="https://github.com/jheretic">Josh King</a></li>
<li><a href="https://github.com/elationfoundation">Seamus Tuohy</a></li>
<li><a href="https://github.com/critzo">Chris Ritzo</a></li>
<li><a href="https://github.com/areynold">Andrew Reynolds</a></li>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
</ul>

## luci-i18n-commotion v0.2.2

### Major Issues Resolved:
<ul>
<li><a href="https://github.com/opentechinstitute/luci-i18n-commotion/pull/6">Cleaned up .po generation scripts</a><li>
</ul>

### Authors (by commits):
<ul>
<li><a href="https://github.com/areynold">Andrew Reynolds</a></li>
<li><a href="https://github.com/critzo">Chris Ritzo</a></li>
<li><a href="https://github.com/elationfoundation">Seamus Tuohy</a></li>
</ul>

## luci-theme-commotion v2.1

### Major Issues Resolved:
<ul>
<li><a href="https://github.com/opentechinstitute/luci-theme-commotion/pull/34">Addressed horizontal sizing issues</a></li>
<li><a href="https://github.com/opentechinstitute/luci-theme-commotion/pull/18">Added a log-out button to the basic menu.</a></li>
<li><a href="https://github.com/opentechinstitute/luci-theme-commotion/issues/16">Fixed interface crashing due to dnsmasq errors.</a></li>
</ul>

### Authors (by commits):
<ul>
<li><a href="https://github.com/elationfoundation">Seamus Tuohy</a></li>
<li><a href="https://github.com/glamrock">Griffin Boyce</a></li>
<li><a href="https://github.com/areynold">Andrew Reynolds</a></li>
<li><a href="https://github.com/jheretic">Josh King</a></li>
<li>A Special Thanks to <a href="http://wiki.reseaulibre.ca/">Team RéseauLibre</a> for their work!</li>
</ul>

## olsrd-dnssd & olsrd-mdp v0.4

### Issues resolved:
<ul>
<li>Dnssd: Reliability improvements for multi-hop service announcements</li>
<li>Misc fixes for dnssd and mdp plugins</li>
</ul>

### Authors (by commits):
<ul>
<li><a href="https://github.com/dismantl">Dan Staples</a></li>
</ul>
