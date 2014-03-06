<div id="contact-area">
	
<form method="post" action="contactengine.php">
<table>
	<tr>
		<td class="left"><label for="Name">Name:</label></td>
		<td><input type="text" name="Name" /></td>
	</tr>
	<tr>
		<td class="left"><label for="Email">Email Address:</label></td>
		<td><input type="text" name="Email" /></td>
	</tr>
	<tr>
		<td class="left"><label for="Message">Message:</label></td>
		<td><textarea name="Message" rows="20" cols="20"></textarea></td>
	</tr>
</table>

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

<?php include("../footer.php"); ?>

