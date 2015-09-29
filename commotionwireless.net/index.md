---
layout: front
title: "The Commotion Wireless Project"
tagline: "Commotion is an open-source communication tool that uses wireless devices to create decentralized mesh networks."
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
   image: /icons/commotion-round-web.svg
   text:
 - download:
   title: Download
   url: /download
   image: /icons/Download.svg
   text:
 - documentation:
   title: Documentation
   text:
   url: /docs
   image: /icons/workshop-agenda.svg
 - organizers:
   title: For Organizers
   text:
   url: /docs/cck
   image: /icons/facilitation.svg
 - developers:
   title: For Developers
   text:
   url: /developer/resources
   image: /icons/Developer.svg
---

<!-- TODO: Look at TWBS gutter/tile/thumbnail system to construct grid -->
<div class="grid home-width container">
  <div class="grid-row row">
    {% for cell in page.grid %}
    <div class="grid-cell">
      <a href="{{site.baseurl}}{{cell.url}}" class="simple"><img src="{{site.baseurl}}{{cell.image}}" class="grid-icon"></a>
      <h2 class="h4"><a href="{{site.baseurl}}{{cell.url}}" class="simple">{{cell.title}}</a></h2>
      <h3 class="h5 small">{{cell.text}}</h3>
    </div>
    {% if forloop.last == false %}
    {% cycle 'row-grid': nil, nil, '</div><div class="grid-row row">' %}
    {% endif %}
    {% endfor %}
  </div>
</div>




<h3>Blog Posts + Reports</h3>
<div class="grid home-width container">
  <div class="grid-row row">
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
    {% cycle 'row-blog': nil, nil, '</div><div class="grid-row row">' %}
    {% endif %}
    {% endfor %}
  </div>
  <div class="grid-row row">
    <div class="grid-cell pull-left"><a href="{{site.baseurl}}/blog/">MORE POSTS > </a></div>
  </div>
</div>
