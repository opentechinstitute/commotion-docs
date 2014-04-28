---
layout: blog
title: Your title goes here. Do not use the colon character. 
categories: [list of, comma-separated, tags]
created: 2014-02-04
changed: 2014-02-04
teaser_image: styles/large/public/ws_olsr_traffic.png
post_author: Author Name
lang: en
---

## Introduction
This file serves as an example for new content creators creating a blog post. Formatting examples are provided showing a mix of markdown syntax and HTML, and a brief overview of the file's metadata is covered.

### How to use this file
When writing a new blog post, copy this file and save the copy in the <code>_posts</code> folder, using the following naming convention:

	YYYY-MM-DD-title-of-this-post.md

## Metadata
At the top of this file is a section of text with some variables. It looks like this:

<code>
---
layout: blog
title: Your title goes here. Do not use the colon character.
categories: [list of, comma-separated, tags]
created: 2014-02-04
changed: 2014-02-04
teaser_image: posts/041814-Cover-Page.png
post_author: Author Name
lang: en
---
</code>

Most of this should look fairly self-explanatory, but for reference they are explained below:

* <strong>layout</strong> - Defines the page layout for this file. Layouts are defined in the folder "_layouts". For blog posts, your layout should be 'blog'. 
* <strong>title</strong> - The title of your post. One item to note is that using the colon character (:) in the title will cause an error when the site is built.
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
