---
title: "Commotion Wireless Blog Index"
layout: default
lang: en
---
{% for category in site.categories %}
 <a href="#{{ category[0] }}"></a>
 <h2>{{ category[0] }}</h2> 
 <ul>
  {% for post in category[1] %} 
    <li><a href="{{ post.url }}">{{ post.title }}</a><br />
    {{ post.date | date: "%B %d, %Y" }} / {{ post.post_author }}</li> 
  {% endfor %}
 </ul>
{% endfor %}

