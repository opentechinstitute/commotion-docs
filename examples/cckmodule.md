---
layout: collection
title: New CCK module title
site_section: docs
sub_section: [cck,cck-planning]
pdf: cck/planning/name-of-pdf-for-this-module.pdf
pdf-all: true
categories: 
created: 2013-11-02
changed: 2013-11-27
post_author: Author Name
lang: en
---
<section id="introduction">
<h2>Introduction</h2>
This example document illustrates how to create a new CCK module within an existing section. By using additional metadata variables, we tell the website build system what layout to use, what section the new files is in, what sub-section as well, and specify additional options for PDFs, specific to the CCK.  

## Using this file to create a new CCK page
Let's say you're using this example to create a new CCK module in the Planning section. 

### Create a new folder for the new module. 

Currently in the planning section we have these folders:
<code>
design-your-network-construction-elements
identify-neighborhood-skills
design-your-network-every-network-tells-story
survey-your-neighbors
get-word-out-flyer-design
inventory-the-neighborhood
wireless-challenges
</code>

If we need a new module called "Planning Essentials", we would first create a folder in /docs/cck/planning/ called: <code>planning-essentials</code>.
This will ensure our new URL conforms to the syntax for others.

### Make a copy of this sample file

You can now save a copy of this file into the folder you just created. Be sure to name it <code>index.md</code>

### Edit the Metadata
Here's what the metadata for this new CCK module page looks like:

<code>
---
layout: cck
title: New CCK module title
site_section: help
sub_section: [cck,cck-planning]
pdf: cck/planning/name-of-pdf-for-this-module.pdf
pdf-all: true
categories:
created: 2013-11-02
changed: 2013-11-27
post_author: Author Name
lang: en
---
</code>

Most of this should look fairly self-explanatory, but for reference they are explained below. Note that for CCK modules, there are additional metadata variables not found in other types of content. These are note in italics in the list below.

* <strong>layout</strong> - Defines the page layout for this file. Layouts are defined in the folder "_layouts". For blog posts, your layout should be 'blog'. 
* <strong>title</strong> - The title of your post. One item to note is that using the colon character (:) in the title will cause an error when the site is built.
* <strong><em>site_section</em></strong> - This variable sets the section of the website where this page lives, corresponding to the menu items at the top of the page. Setting the appropriate <strong><em>site_section</em></strong> tells the website build system what menus to place on the page. 
* <strong><em>sub_section</em></strong> - Because CCK pages have multiple menu levels, this variable is needed to identify what sub-section the page is in, so that the appropriate sub-menu will be displayed. Note that this variable has both the top level section and it's sub-section inside of square brackets. Look at existing files for the appropriate section and sub-section names to use.
* <strong><em>pdf</em></strong> - If a PDF version of this module is available, enter the path to this PDF here. Note that this path is relative to the <code>files</code> folder. If this value is set, the "Download PDF" button in the right menu will link to it.
* <strong><em>pdf-all</em></strong> - Either set this value to true or false. If "true" the button for downloading a zip file of all CCK PDFs will be placed on the page.
* <strong>categories</strong> - Within a set of square brackets, enter the tags you wish to use for this post.
* <strong>created</strong> and <strong>changed</strong> - Both of these dates should use the format YYYY-MM-DD 
* <strong>teaser_image</strong> - Specify the image to be used for blog post teasers. All images should be saved within the <strong>files</strong> directory and the value entered here is relative to that folder. Current practice is to place images for blog posts in the folder: <code>files/posts/</code> and to name the images used in the post using the posts publication date in the image filename, as shown in the example.
* <strong>post author</strong> - The name of the post's author(s). You can have multiple authors.
* <strong>lang</strong> - The two character language code that identifies the language this post is written in. "en" for English is the default. If you are authoring blog posts in other languages, please check with the site maintainer.

## Writing Content

Content for your blog post can be written using a combination of Markdown formatting and HTML.  So you could write a numbered list using either of the following:

1. list item 1
2. list item 2

or 

<ol>
  <li>list item 1</li>
  <li>list item 2</li>
</ol>

### Headings

### Code blocks

Indented blocks of text will be formatted as a code block:

	$ sudo ifconfig wlan0 down 
	$ sudo iwconfig wlan0 mode Managed 
	$ sudo ifconfig wlan0 up 
	$ sudo service network-manager restart

You can also place code blocks in-line with text using <code>text inside of a \<code\> \</code\> tag set.</code> 
