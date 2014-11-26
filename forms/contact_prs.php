<?php
 require_once('recaptchalib.php');
 $privatekey = "6LdQZ_4SAAAAAEV_6NkcFt_4sOXL50P-25QWYlP4";
 $resp = recaptcha_check_answer ($privatekey,
                                 $_SERVER["REMOTE_ADDR"],
                                 $_POST["recaptcha_challenge_field"],
                                 $_POST["recaptcha_response_field"]);
 if (!$resp->is_valid) {
   // What happens when the CAPTCHA was entered incorrectly
header("Location: ../index.php?e=1#contact");
 } else {

$name = $_POST['contact-name']; 
$visitorEmail = $_POST['email']; 
$visitorPhone = $_POST['phone'];
$comments = $_POST['comments'];
	

// given a specific recipient, the email to the internal contact is formatted and sent
  $headers = "MIME-Version: 1.0\r\n";
  $headers.= "Content-type: text/html; ";
  $headers.= "charset=iso-8859-1\r\n";
  $headers.= "From: webform@secondstreetcottages.com";

  $subject = "*SecondStreetCottages.com Online Contact Form";
  $body = "The following message was received through SecondStreetCottages.com's contact form:";
  $body.= "<br><br>Visitor information:";
  $body.= "<br><br><b>Name:</b> ".$name."";
  $body.= "<br><b>Email:</b> ".$visitorEmail."";
  $body.= "<br><b>Phone:</b> ".$visitorPhone."";
  $body.= "<br><br><b>Comments:</b>";
  $body.= "<br>".$comments."";

// set recipient for emails
$email = "kreichert@ameritech.net";
$email2 = "prsolans@gmail.com";
$email3 = "2ndstreetcottages@gmail.com";

mail($email2,$subject,$body,$headers);
mail($email3,$subject,$body,$headers);

$success = mail($email2,$subject,$body,$headers);
if ($success){
header("Location: ../index.php?m=1#contact");
  }
} 	
?>
