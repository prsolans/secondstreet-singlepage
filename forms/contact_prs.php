<?php

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

//mail($email2,$subject,$body,$headers);
//mail($email3,$subject,$body,$headers);

$success = mail($email2,$subject,$body,$headers);
if ($success){
header("Location: ../index.html?m=1#contact");
  }
 	
?>
