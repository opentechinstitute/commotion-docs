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

<div class="list-group">
    {% assign postindex = site.posts | where:"lang",page.lang %}
{% for post in postindex %}
<div class="section list-group-item">
<a href="{{site.baseurl}}{{post.url}}">{{post.title}}</a> ({{post.date | date: "%F"}})
<p>{{post.excerpt | strip_html}} <a href="{{site.baseurl}}{{post.url}}">...</a></p>
</div>
{% endfor %}
</div>