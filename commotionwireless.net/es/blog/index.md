---
layout: blog-index
title: "Blog: Updates from Networks"
categories: null
created: {}
changed: {}
post_author: oti
abstract: null
lang: es
published: true
---

{% assign posts=site.posts | where:"lang", page.lang %}
{% for post in posts %}
<div class="section">
<a href="{{site.baseurl}}{{post.url}}">{{post.title}}</a> ({{post.date | date: "%F"}})
<p>{{post.excerpt | strip_html}} <a href="{{site.baseurl}}{{post.url}}">...</a></p>
</div>
{% endfor %}
