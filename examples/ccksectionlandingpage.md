---
layout: default
title: Commotion Contruction Kit - Planning
site_section: help
sub_section: [cck,cck-planning]
pdf-all: true
categories: 
created: 2013-09-27
changed: 2013-09-28
post_author: critzo
lang: en
---
## Introduction
This example illustrates how a top level section page for the CCK looks. It basically includes a section menu at the top of the page, in addition to content that is placed based on the metadata. The existing Planning section page, for example, simply has the following text: 

<code>
<div class="cck-section-page">
{% include help_cck_planning_menu.html %} 
</div>
</code>

Menus and other content files that get included in the site pages are stored in the <code>_includes</code> directory, and need to be updated when new pages or sub pages are added. 
You can explore the content of included files in the _includes folder, but it's appropriate to just ask the site maintainer to update the menus with new pages when you submit new 
content in a pull request on Github.

The <code>collection</code> layout uses a data file (<code>/_data/cck.yml</code>) to build the CCK sidebar. To add a new module, open cck.yml and add a new entry to
+ the <code>sections:</code> field in the following format:
+ <pre>
+  - title: New Module Title
+    id: module-folder-name
+ </pre>

