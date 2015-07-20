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
   title: Neighborhood Network Construction Kit
   url: /docs/cck/index.html
   image: /icons/cck.svg
   text: A build-it-ourselves guide to community wireless networks
 - ct-intro:
   title: Community Technology
   url: /docs/intro-ct/index.html
   image: /icons/stewards.svg
   text: Activities for discussing digital justice and digital stewardship.
 - skillshares:
   title: Skillshares
   url:
   image: /icons/skillshare.png
   text: (coming soon)
 - project-planning:
   title: Project Planning Tools
   text: Tools to help define and plan projects.
   url: /docs/project-planning/
   image: /icons/projectplanning.svg
 - facilitation:
   title: Facilitation Tools
   text: Tools for facilitating community projects (draft).
   url: /docs/facilitation/
   image: /icons/facilitation.svg
 - workshop-ideas:
   title: Workshop Ideas
   text: Workshop agendas for a half-day or four-days
   url: /docs/workshops
   image: /icons/workshop-agenda.png
---
 
<div id="slideshow">
  <div id="banner-slide" class="slideshow-inner">
    <ul class="bjqs">
    ¦ <li><a href="/blog/2014/10/15/commotion-router-v1.1-final-release-notes">Commotion 1.1 Release</a><br />
    ¦   Get the most current version of Commotion Router, 1.1, available for <a href="/download/routers">download.</a></li>
    ¦ <li>Commotion is an open-source communication tool that uses wireless devices to create decentralized mesh networks.</li>
    ¦ <li>Interested in trying Commotion or learning more?  Our <a href="/docs/get-started">Get Started</a> guide will explain how.</li>
    ¦ <li>Are you interested in contributing to Commotion?<br /><a href="/docs/get-involved">Get Involved!</a></li>
    ¦ <li>Have Questions about Commotion? Our <a href="/about/faq">Frequently Asked Questions</a> covers many of them.</li>
    </ul>
  </div>
  <noscript>
    <div id="banner-slide" class="slideshow-inner">
    ¦ <div class="noscript">Commotion is an open-source communication tool that uses wireless devices to create decentralized mesh networks.</div>
    </div>
  </noscript>
</div>


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
    {% for cell in site.categories.blog limit:6 %}
    <div class="grid-cell grid-gallery">
      <div class="figure">
	<a href="{{site.baseurl}}{{cell.url}}">
	  {% if cell.img %}
	  <img src="{{site.baseurl}}{{cell.img}}" />
	  {% else %}
	  <img src="{{site.baseurl}}/icons/map.svg" style="padding:70px;"/>
	  {% endif %}
	</a><div class="caption">{{cell.title}}</div>
      </div>
    </div>
    {% if forloop.last == false %}
    {% cycle 'row-blog': nil, nil, '</div><div class="grid-row">' %} 
    {% endif %}
    {% endfor %}
  </div>
  <div class="grid-row">
    <div class="grid-cell"><a href="{{site.baseurl}}/docs/blog/">MORE POSTS > </a></div>
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

   
