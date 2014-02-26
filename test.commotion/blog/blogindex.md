---
title: "Commotion Wireless Blog Index"
layout: blog-index
lang: en
---
<div class="blog-index">
<h2>Posts by Tag</h2>
{% for category in site.categories %}
 <h3 id="{{ category[0] }}">{{ category[0] }}</h3> 
 <ul>
  {% for post in category[1] %} 
    <li><a href="{{ post.url }}">{{ post.title }}</a><br />
    {{ post.date | date: "%B %d, %Y" }} / {{ post.post_author }}</li> 
  {% endfor %}
 </ul>
{% endfor %}
</div>
