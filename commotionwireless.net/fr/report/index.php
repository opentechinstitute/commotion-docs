<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Report a Bug| Commotion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/commotion.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
<body>
<div class="navbar navbar-inverse">
  <div class="boxes-box" id="boxes-box-top_colors">
    <div class="boxes-box-content">
      <div class="navbar-inners">
        <div class="color0">&nbsp;</div>
        <div class="color1">&nbsp;</div>
        <div class="color2">&nbsp;</div>
        <div class="color3">&nbsp;</div>
        <div class="color4">&nbsp;</div>
      </div>
    </div>
  </div>
</div>
<div id="logo">
  <a href="/"><img src="/images/commotion_kbabout_measure-03_0_0.png" alt="Commotion Wireless logo"/></a>
</div>
<div id="navbar">
  <ul class="nav nav-pills">
    <li class="dropdown">
      <a id="aboutMenu" href="/about" data-toggle="dropdown" role="button" class="menu-top-level">
        About
        <b class="caret"></b>
      </a>
      <ul id="aboutMenu" class="dropdown-menu" aria-labelledby="aboutMenu" role="menu">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="/about">About Commotion</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="/about/faq">FAQ</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="/about/guiding-principles">Guiding Principles</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="/about/where-its-used">Where It&#039;s Used</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="/about/press">Press</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="/about/license-privacy">License &amp; Privacy</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="/jobs">Jobs</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="/contact">Contact</a></li>
      </ul>
    </li>
    <li class="static-nodrop"><a href="/blog" title="">Blog</a></li>
    <li class="dropdown">
      <a id="getHelpMenu" href="/docs" data-toggle="dropdown" role="button" class="menu-top-level">
        Get Help
        <b class="caret"></b>
      </a>
      <ul id="getHelpMenu" class="dropdown-menu" aria-labelledby="getHelpMenu" role="menu">
        <li role="presentation"><a role="menuitem" tabindex="-2" href="/docs/get-started">Get Started</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-2" href="/docs/get-involved">Get Involved</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-2" href="/docs/supported-devices">Supported Devices</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-2" href="/docs/cck">Commotion Construction Kit</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-2" href="/docs/localization">Commotion Localization</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a id="downloadMenu" href="/download" data-toggle="dropdown" role="button" class="menu-top-level">
        Download
        <b class="caret"></b>
      </a>
      <ul id="downloadMenu" class="dropdown-menu" aria-labelledby="downloadMenu" role="menu">
        <li role="presentation"><a role="menuitem" tabindex="-3" href="/download/routers" title="Downloads for supported routers">Routers</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-3" href="/download/android" title="Downloads for supported cellular phones.">Phones</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-3" href="/download/computers">Computers</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-3" href="/download/openbts" title="Downloads for supported cellular network gateways.">Cellular Networks</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-3" href="/download/verify-signatures" title="">Verifying Downloads</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a id="developersMenu" href="/developer/resources" data-toggle="dropdown" role="button" class="menu-top-level">
        For Developers
        <b class="caret"></b>
      </a>
      <ul id="developersMenu" class="dropdown-menu" aria-labelledby="developersMenu" role="menu">
        <li role="presentation"><a role="menuitem" tabindex="-4" href="/developer/resources" title="">Developer Resources</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-4" href="/jobs" title="Read and submit bids for open RFPs on the Commotion Wireless project.">Requests for Proposals</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-4" href="https://wiki.commotionwireless.net" title="">Wiki</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-4" href="https://github.com/organizations/opentechinstitute/dashboard/issues/repos?direction=desc&amp;state=open" title="">Issue Tracker</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-4" href="https://github.com/opentechinstitute" title="">Source Code</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-4" href="/developer/hig/introduction">Human Interface Guidelines</a></li>
      </ul>
    </li>
  </ul>
</div>
<div class="containercontent pageheadings">
  <hr>
  <h1 class="pageheadings">Report a Bug</h1>
</div>
<div class="contentcontainer">
  <div class="container">
<div id="contact-area">

<h2>When to report a bug</h2>

<p><em>Verify what you found is actually a bug.</em><br />
When you experience a bug you should search the mailing list archives to see if someone has experienced the same issue you have come across. Many times what seems like a bug may be an opportunity for a feature that our development team has not thought of yet. If you can’t decide if a issue is a bug or not, please submit it as a bug. The development community would like to know how it can make your experience better. We may not classify it as a bug internally until we are told that a behavior gets in the way of your use of the software.</p>

<h2>How to report a bug</h2>

<p>Bug reports are vital to the Commotion development process. The back-and-forth that accompanies a bug report allows the Commotion team to capture vital observations about the platform's behavior in the field. These conversation allows the developers to improve their understanding of unexpected behavior so they can address it.</p>

<p>The aim of these conversations is to gather as much information as possible. Below is a short list of questions that will help developers recreate your experience in our laboratory.</p>
	
<form method="post" action="contactengine.php">
<label for="Name">Name:</label><br />
<input type="text" name="Name" /><br />
<label for="Email">Email Address:</label><br />
<input type="text" name="Email" /><br />
<label for="bugtype">What type of bug it is? </label><br />
<input type="radio" value="trivial" name="bugtype" id="bugtype-1">
<label for="bugtype-1">Trivial (cosmetic problem) </label><br />
<input type="radio" class="form-radio" value="minor" name="bugtype" id="bugtype-2">
<label for="bugtype-2">Minor (minor loss of function) </label><br />
<input type="radio" value="major" name="bugtype" id="bugtype-3">
<label for="bugtype-3">Major (major loss of function) </label><br />
<input type="radio" value="critical" name="bugtype" id="bugtype-4">
<label for="bugtype-4">Critical (crashes, loss of data) </label><br />
<label for="What-Occurred">What were you doing on the device right before and when the error occurred?</label><br />
<textarea name="What-Occurred" rows="10" cols="50"></textarea><br />
<label for="Expected-Behavior">Please describe what behavior you expected:</label><br />
<textarea name="Expected-Behavior" rows="10" cols="50"></textarea><br />
<label for="Experienced-Behavior">Please describe what behavior you experienced that you believe is wrong:</label><br />
<textarea name="Experienced-Behavior" rows="10" cols="50"></textarea><br />
<div id="captcha-area">
		
<?php
	
	require_once('recaptchalib.php');
	$publickey = "6LfscO8SAAAAAO55wfTdwbCZi7iKOHPT_GCg2VBT";
	$privatekey = "6LfscO8SAAAAAOWh3XyvEYKFmm1nyVbVdUZ7olO0";
	
	# the response from reCAPTCHA
	$resp = null;
	# the error code from reCAPTCHA, if any
	$error = null;
	
	# are we submitting the page?
	if ($_POST["submit"]) {
	  $resp = recaptcha_check_answer ($privatekey,$_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
	
	  if ($resp->is_valid) {
		echo "You got it!";
		# in a real application, you should send an email, create an account, etc
	  } else {
		# set the error code so that we can display it. You could also use
		# die ("reCAPTCHA failed"), but using the error message is
		# more user friendly
		$error = $resp->error;
	  }
	}
	echo recaptcha_get_html($publickey, $error);
	?>
	
</div>
					
<input type="submit" name="submit" value="Submit" class="submit-button" />
</form>

    </div>
  </div>
</div>
<div class="footer-wrapper">
  <div class="container">
        <ul class="menu"><li class="first leaf menu-mlid-2043"><a href="/contact" title="">Contact</a></li>
        <li class=""><a href="/jobs" title="">Jobs</a></li>
        <li class=""><a href="http://oti.newamerica.net/" title="">OTI</a></li>
        <li class=""><a href="/about/press" title="">Press</a></li>
        <li class="last leaf menu-mlid-2048"><a href="/about/license-privacy" title="">License &amp; Privacy</a></li>
        </ul>
  </div>
</div>
  </div>
</div>

<script src="/js/jquery-2.1.0.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/commotion.js"></script>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);

  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://piwik.opentechinstitute.org/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "1"]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->

  </body>
</html>

