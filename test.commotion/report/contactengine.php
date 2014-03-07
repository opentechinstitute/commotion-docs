<?php

require_once('recaptchalib.php');
$privatekey = "6LfscO8SAAAAAOWh3XyvEYKFmm1nyVbVdUZ7olO0";
$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
  die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
       "(reCAPTCHA said: " . $resp->error . ")");
}


$Subject = "New bug report submitted";
$Name = Trim(stripslashes(strip_tags($_POST['Name']))); 
$Email = Trim(stripslashes(strip_tags($_POST['Email']))); 
$Message = Trim(stripslashes($_POST['bugtype'])); 
$Message .= Trim(stripslashes(strip_tags($_POST['What-Occurred']))); 
$Message .= Trim(stripslashes(strip_tags($_POST['Expected-Behavior']))); 
$Message .= Trim(stripslashes(strip_tags($_POST['Experienced-Behavior']))); 
$EmailFrom = $Email;
$EmailTo = "support@commotionwireless.net";

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "City: ";
$Body .= $City;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
