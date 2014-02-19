---
layout: default
title: Design Principles
categories: {categories}
created: 2012-07-03
changed: 2013-12-25
post_author: michael@theworkdept.com
lang: en
---
  <h2>Ease of Use</h2>

<p>Wireless networking is a complex topic for most people and often a source of frustration for the average user. Commotion interfaces should use simple language and offer frequent feedback to guide a user through various processes. If it is designed with the following principles in mind, Commotion can teach users about wireless networking and increase public knowledge about the topic.</p>

<h2>Consistency</h2>

<p>Commotion is an evolving project that many people will contribute to over time and across continents. In order to encourage widespread adoption and peer-to-peer education on the project, users must have a consistent experience using the software. Processes, language, and visual style must remain similar across different Commotion implementations. This allows people to transfer their knowledge and skills from old versions to new and from one device to another. Our shared intention is to foster an environment in which people are comfortable trying out Commotion, recommending it to others, and teaching their community how to benefit from it.</p>

<h2>Accessibility</h2>

<p>Commotion tools should be developed with universal accessibility in mind to ensure that users with visual, mobility, auditory, or other impairments can successfuly use it. Testing should also include users of various abilities. Any interface element that a user can interact with should be accessible using a variety of methods. Here are a few simple principles that should guide Commotion development:</p>

<ol>
	<li>Use alt or description text to describe images that can't be read by a screen reader.</li>
	<li>Design interfaces that use contrasting colors, especially when text is present. This is useful for people with visual impariments or people who try to increase the contrast of their operating system UI.</li>
	<li>While color coding is a helpful organizational tool, don't require users to distinguish between colors in order to interact with your interface. This is useful for people who may have difficulty distinguishing certain colors.</li>
	<li>Make sure that a user can navigate your app using only a keyboard if needed. This is useful for people using assistive devices.</li>
</ol>

<p>There are many more principles of accessible application development. Numerous resources are available to guide designers and developers — here are a few examples that we've found helpful:</p>

<div class="field field-name-body field-type-text-with-summary field-label-hidden clearfix">
<div class="field-items">
<div class="field-item even">
<p><a href="http://www.onevoiceict.org/http%3A//www.onevoiceict.org/first-seven-steps-accessible-mobile-apps/learn-about-accessibility" target="_top">Find out how users with disabilities access apps to ensure your design will be accessible</a></p>

<p><a href="http://developer.android.com/guide/topics/ui/accessibility/index.html" target="_blank">Accessibility on Android</a></p>

<p><a href="http://en.wikipedia.org/wiki/Web_accessibility" target="_blank">Web accessibility on Wikipedia</a></p>

<p><a class="headline source-org" href="http://mashable.com/2011/04/20/design-for-visually-impaired/" target="_blank">5 Ways to Ensure Your Site Is Accessible to the Visually Impaired</a></p>
</div>
</div>
</div>

<h2>Feedback</h2>

<p>Feedback acknowledges a person’s actions and assures them that they are going through steps in a process. Users should receive a positive message, sound or validation feature when a network has been successfully configured and instructions on what to do next. When an error occurs, an easy-to-understand error message should help the user understand what to do about it.</p>

<p>Depending on the application, you may include animations that show progress in between states, as shown below.</p>

<h2><img alt="" src="/files/feedback.png" style="margin-bottom:5px; margin-top:5px; width:871px" /></h2>

<h2>Status bar and notifications</h2>

<p>Whenever possible, an application should be developed using the standard Commotion status bar icon. The icon indicates that Commotion software is running and the speed of the network a user is connected to, if applicable. On Android, it is appropriate to place this on the right side with the other standard icons.</p>

<p>On mobile phones and desktop applications, a notification should always be present when a device is connected to a mesh network. When the notification is tapped, the Commotion application should reopen. On Android, this is considered an “ongoing notification” indicating a significant process that continues until the user ends it. It is appropriate to also include an icon in the left side of the status bar when the notification is present. This distinct icon shows how many nodes the device is connected to.</p>

<p><img alt="" src="/files/status%20bar%20and%20notifications.png" style="width:841px" /></p>

<h2>Screen size and orientation</h2>

<p>Commotion mobile apps, web applications and websites should be responsive to screen or browser size.</p>

<p>Mobile developers should be especially sensitive to screen orientation. Users can rotate mobile devices at any time and for a variety of reasons. Sometimes a task may feel most natural in a certain orientation -- portrait or landscape. If a device is rotated for any reason, Commotion should respond appropriately and maintain its focus on the primary task at hand. The app should start in the same orientation as the app menu that launches it. On Android phones that have a physical keyboard, the app menu is often in landscape orientation when the keyboard is open.</p>
 
