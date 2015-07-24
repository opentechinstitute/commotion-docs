---
layout: default
title: "Commotion Wireless"
tagline:
categories: 
created: 2013-09-20
changed: 2015-07-20
post_author: oti
lang: en
grid:
 - cck:
   title: Commotion Construction Kit
   url: /docs/cck
   image: /icons/cck.svg
   text: A build-it-ourselves guide to community wireless networks
 - about:
   title: About Commotion
   url: /about
   image: /icons/stewards.svg
   text: 
 - download:
   title: Download
   url: /download
   image: /icons/skillshare.png
   text: 
 - documentation:
   title: Documentation
   text: 
   url: /docs/project-planning/
   image: /icons/projectplanning.svg
 - organizers:
   title: For Organizers
   text:
   url: /docs/cck
   image: /icons/facilitation.svg
 - developers:
   title: For Developers
   text:
   url: /docs/resources
   image: /icons/workshop-agenda.png
---
 
<div class="grid home-width">
  <div class="grid-row">
    
    {% for cell in page.grid %}
    <div class="grid-cell">
      <a href="{{site.baseurl}}{{cell.url}}" class="simple"><img src="{{site.baseurl}}{{cell.image}}" class="grid-icon"></a>
      <h4><a href="{{site.baseurl}}{{cell.url}}" class="simple">{{cell.title}}</a></h4>
      <h5>{{cell.text}}</h5>
    </div>
    {% if forloop.last == false %}
    {% cycle 'row-grid': nil, nil, '</div><div class="grid-row">' %} 
    {% endif %}
    {% endfor %}
    
  </div>
</div>


<h3>Blog Posts + Reports</h3>
<div class="grid home-width">
  <div class="grid-row">
    {% for post in site.posts limit:6 %}
    <div class="grid-cell grid-gallery">
      <div class="figure">
	<a href="{{site.baseurl}}{{post.url}}">
	  {% if post.teaser_image %}
	  <img src="/{{site.imageurl}}/{{post.teaser_image}}" />
	  {% else %}
	  <img src="{{site.baseurl}}/icons/map.svg" style="padding:70px;"/>
	  {% endif %}
	</a><div class="caption">{{post.title}}</div>
      </div>
    </div>
    {% if forloop.last == false %}
    {% cycle 'row-blog': nil, nil, '</div><div class="grid-row">' %} 
    {% endif %}
    {% endfor %}
  </div>
  <div class="grid-row">
    <div class="grid-cell"><a href="{{site.baseurl}}/blog/">MORE POSTS > </a></div>
  </div>
</div>


<div id="planning" class="section">
  <h3>Planning to Host a Workshop?</h3>
  
</div>

<div id="contribute" class="section">
  <h3>Contribute</h3>
</div>

<div id="other-resources" class="section">
  <h3>Other Resources</h3>
  <ul>
    <li><a href="https://commotionwireless.net/">Commotion Wireless</a></li>
  </ul>
</div>

   
