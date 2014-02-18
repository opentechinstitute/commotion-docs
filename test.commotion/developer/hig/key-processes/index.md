---
layout: default
title: Key Processes
categories: [{categories}]
created: 2012-07-03
changed: 2013-07-14
post_author: michael@theworkdept.com
lang: en
---
  <h2>Setting up and maintaining a network</h2>

<p>The flowchart below describes the steps that a user should go through in order to create or join a mesh network. The process begins with a simple splash screen that includes the Commotion logo and is followed by automatic network detection. After choosing or creating a network that is not encrypted, the user should immiediately see a pop-up warning that reads:</p>

<p>"Activity on this mesh network can be monitored by outside parties. Learn more about security and privacy."<br />
(<a href="/developer/hig/key-concepts#security">Read the guidelines about security, privacy and anonymity.</a>)</p>

<p>Creating or joining a network should be a fast task that a user learns quickly and can also teach others. Once a device is connected to a mesh network, a user may close the app or the page and come back later if they want to leave the network or change settings.</p>

<p><img alt="" src="/files/key_process_FLOWCHART.png" /></p>

<h2>Changing advanced settings</h2>

<p>This area should offer advanced users and network managers additional options and experimental features. These can include settings related to a mesh network or global settings related to the app. On Android, this area should simply use the native Android menu style. On web-based and desktop applications, this area should use a simple menu style that is consistent with the Commotion brand identity.</p>

<p>These are typical settings that might be available in the advanced area:</p>

<ol>
	<li>Change BSSID</li>
	<li>Change ESSID</li>
	<li>Metadata (location, description, etc.)</li>
	<li>OLSRd options</li>
	<li>Change power levels</li>
	<li>Choose a theme</li>
	<li>Import/export configuration</li>
</ol>

<p><img alt="" src="/files/advanced%20settings.png" /></p>

<p>&nbsp;</p>

<h2>Getting help</h2>

<p>These are typical options that should be available in the help area. On Android, this area should simply use the native Android menu style, like the Advanced Settings menu shown above.</p>

<ol>
	<li>View the user manual at commotionwireless.net/docs/user-manual</li>
	<li>Report a bug</li>
	<li>Send feedback</li>
	<li>About Commotion</li>
</ol>

<h2>Viewing the log</h2>

<p>The log area should include a history of key network activities and the date and time they occurred. The log should follow the common language guidelines discussed earlier in this guide. An example is below:</p>

<table border="0" cellpadding="10" cellspacing="0" style="width:400px">
	<tbody>
		<tr>
			<td>Today</td>
			<td>5:12pm</td>
			<td>Opened application</td>
		</tr>
		<tr>
			<td>Today</td>
			<td>4:30pm</td>
			<td>Quit application</td>
		</tr>
		<tr>
			<td>Today</td>
			<td>11:00am</td>
			<td>Left <strong>PeanutButter</strong> mesh network</td>
		</tr>
		<tr>
			<td>Friday</td>
			<td>9:47pm</td>
			<td>Client <strong>Bobby500</strong> connected to my node</td>
		</tr>
		<tr>
			<td>Friday</td>
			<td>8:23pm</td>
			<td>Joined <strong>PeanutButter</strong> mesh network</td>
		</tr>
	</tbody>
</table>

<p>This page should also include the following options:</p>

<ul>
	<li><strong>Download</strong> (download the complete log as a plain text file)</li>
	<li><strong>Send to Commotion team</strong> (to email the log to the app's development team)</li>
	<li><strong>Delete</strong> (to delete the log)</li>
</ul>

<h2>Joining a mesh network as a client</h2>

<p>When a client joins a mesh network without using mesh software, a standard splash screen should appear when the user first opens a web browser. Here’s an example.</p>

<p><img alt="" src="/files/join%20as%20a%20client.png" /></p>

<p>&nbsp;</p>
 <div class="tags">Tags: {{ page.categories }}</div>