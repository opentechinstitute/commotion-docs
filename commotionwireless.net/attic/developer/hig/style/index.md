---
layout: default
title: Style
site_section: developers
sub_section: [hig]
categories: 
created: 2012-07-03
changed: 2013-09-04
post_author: michael@theworkdept.com
lang: en
---
  <h2>Core Elements</h2>

<p><strong>Logo</strong></p>

<p>The full logo is made up of several parts. There is the name or logotype “Commotion”. Then, there are several pink circles that represent “nodes” in the mesh network. The o’s in the word Commotion also represent nodes. These nodes are connected by pink lines, forming a mini mesh network.</p>

<p>The full logo should be used whenever there is enough horizontal space to do so. There are other versions of the logo where the full-size logo doesn't fit.</p>

<p>There is the mid-sized logo and the tiny-logo, which should be used when the space doesn’t allow for the whole Commotion word to be spelled out.</p>

<p><img alt="" src="/files/HIG_52.png" /></p>

<p>Since a mesh network is flexible and can change shape, so can the logo. The main difference between the digital and print version of the mid logo is that the digital version has a slight drop shadow. This helps it to stand out more on a screen. Otherwise they are exactly the same.</p>

<p><img alt="" src="/files/HIG_53.png" /></p>

<p>&nbsp;</p>

<p><img alt="" src="/files/HIG_54.png" /></p>

<p><strong>Color</strong></p>

<p>The color palette consists of two primary colors and a set of secondary colors. The primary colors are used for most of the logo and typographic applications. ‘Commotion’ and nodes in the logo are always black and the mesh is generally pink. Depending on the application, the mesh lines may change colors.</p>

<p>The secondary colors will be applied depending on the needs of the various user interfaces and the utility of the network.</p>

<p><img alt="" class="media-image attr__typeof__foaf:Image img__fid__251 img__view_mode__media_large attr__format__media_large" src="/files/styles/large/public/color_0.png?itok=eUHJg4SJ" style="width: 379px; height: 480px;" typeof="foaf:Image" /></p>

<p>&nbsp;</p>

<p><strong>Fonts</strong></p>

<p>There are two fonts that are recommended for use with the Commotion brand: Avenir and ASAP. Avenir is made for print, and is recommended when designing anything that will be printed. ASAP, on the other hand, was made for viewing on screen and therefore anything that is designed to be digital should use ASAP.</p>

<p>ASAP is a free and open-source font that <a href="http://www.google.com/webfonts/specimen/Asap" target="_blank">can be downloaded here</a>. Avenir can be purchased from numerous font stores. (If you are unable to acquire Avenir, use ASAP instead.)</p>

<p>Headings should be large and easy to read. The subhead should be in all capital letters and in one of the colors from the color palette above. A subhead should be about 1/3 of the size of the heading.&nbsp; &nbsp;</p>

<p>Body copy should also be about 1/3 of the size of the heading and in black. To make the text easier to read, allow for some extra line spacing.</p>

<p><img alt="" src="/files/HIG_57.png" style="margin-bottom:10px; margin-top:10px" /></p>

<h2>Graphic components</h2>

<p><strong>Core components</strong></p>

<p>The core components of the Commotion identity are simple but can be used to make other images. These parts are “the nodes,” and “the line.”</p>

<p>Be creative with these parts and make graphs diagrams or icons or any other graphic that is needed.</p>

<p><strong>Illustration style</strong></p>

<p>For illustrations that are more complex than a simple node and line, we recommend using a thick black outline and adding shading and color using the outlined palette and blocks of color and dot patterns of various sizes and colors.</p>

<p><img alt="" src="/files/HIG_58b.png" /></p>

<p><strong>Standard Icons</strong></p>

<p>We recommend using the following seven standard icons throughout Commotion to represent common processes and menus. You should use these icons whenever practical. This icon set may evolve over time as Commotion and its community grows.</p>

<p><img alt="" src="/files/icons.png" /></p>

<p>If a certain platform's guidlines recomend native icon use or you are unable to use custom elements, use your platform's native iconography instead. For example, the <strong>Create a network</strong> and <strong>Join a network</strong> icons could replaced with native icons if needed:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img alt="" src="/files/androidicon1.png" />&nbsp;&nbsp;&nbsp;&nbsp; <img alt="" src="/files/androidicon2.png" /></p>

<h2>Visual language</h2>

<p>There are six types of visual language that can be used in Commotion applications:</p>

<ol>
	<li><strong>Descriptive Language</strong> is the content contained in the black bar often located at the top of the user interface. This language explains a step in the process and creates a guiding framework. This approach blends instructional and narrative-based content. Descriptive language is themed in black text on a white background or white text on a black background.</li>
	<li><strong>Action Language</strong> is content that appears in pink and requires action, whether it’s a form field or button to apply a configuration setting. Action-oriented icons should have a pink frame, as demonstrated.</li>
	<li><strong>Learning Language</strong> is content that appears within one of the two documentation tiers -- inline below fields in grey or as a grey and black tooltip.</li>
	<li><strong>Warning Language</strong> is content that is very important and notes a serious change in settings, like the pop-up that appears when a user attempts to change the mesh network or channel while already connected to a network.</li>
	<li><strong>In-progress Language</strong> is content that is attached to either validation or detection points in a process, as demonstrated. The animation overrides the UI with a predominantly white background and a message in purple.</li>
	<li><strong>Success and Failure Language</strong> describes the most recent successful or failed process completed by the software. For example, after creating a new network, Commotion would tell the user, “You've successfully created XYZ network! Other people can join by choosing XYZ as their network name."</li>
</ol>

<p><img alt="" src="/files/visual_language.png" style="margin-bottom:15px; margin-top:15px" /></p>

<p><img alt="" src="/files/HIG_599Ab.png" /></p>

<p>&nbsp;</p>

<p><img alt="" src="/files/HIG_599Bb.png" /></p>

<p>With the exception of learning language, these messages should be clearly displayed within the application and give the user the option to close or collapse the message. The messages should not disappear based on an arbitrary timeout.</p>

<p>Learning Language can appear as a tooltip (on hover or tap) or persistently below form fields. In the <a href="http://www.flickr.com/photos/24639042@N07/sets/72157629570342842/with/7132460719/" target="_blank">early UI mockups</a>, the designers chose to place the tooltips in the right-hand gutter on a desktop-sized screen. On a mobile device, it would not be practical to place the tooltips in the gutter, so a designer might decide to provide an option to expand the below-field Learning Language to show more information and provide links to external documentation.</p>

<h2>Writing</h2>

<p>The words you use in your application are important. They can either help new users effectively use mesh networks or discourage them from even getting started. Commotion applications should speak to the most basic computer user and guide them through processes while teaching potentially new concepts. See the <a href="/developer/hig/key-concepts"><strong>Common language</strong></a> section for a detailed list of terms to use consistently in the user interface. Advanced terminology that requires significant prior knowledge to understand should be reserved for the advanced area of your software.</p>

<p>Here are useful writing tips from the <a href="http://developer.android.com/design/style/writing.html" target="_blank">Android Design</a> guidelines:</p>

<ol>
	<li>Keep it brief. Be concise, simple and precise. Start with a 30 character limit (including spaces), and don't use more unless absolutely necessary.</li>
	<li>Keep it simple. Pretend you're speaking to someone who's smart and competent, but doesn't know technical jargon and may not speak English very well. Use short words, active verbs, and common nouns.</li>
	<li>Be friendly. Use contractions. Talk directly to the reader using second person ("you"). If your text doesn't read the way you'd say it in casual conversation, it's probably not the way you should write it. Don't be abrupt or annoying and make the user feel safe, happy and energized.</li>
	<li>Put the most important thing first. The first two words (around 11 characters, including spaces) should include at least a taste of the most important information in the string. If they don't, start over.</li>
	<li>Describe only what's necessary, and no more. Don't try to explain subtle differences. They will be lost on most users.</li>
	<li>Avoid repetition. If a significant term gets repeated within a screen or block of text, find a way to use it just once.</li>
</ol>

<p><strong>Here are some examples of good writing that you may use for Commotion:</strong></p>

<p>"It looks like there is a mesh network you can join! Select a network below or create a new mesh network."</p>

<p>“You're connected to <strong>Sparkles</strong> mesh network. Your node name is <strong>Josh21</strong> and you are using <strong>Channel 5</strong>. You're connected to 5 nodes and 2 clients are connected to you. You aren't connected to the internet.”</p>

<p>"There aren't any nearby mesh networks. Would you like to create a new mesh network?"</p>
 
