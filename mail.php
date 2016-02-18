<?php
$name = $_GET['name'];
$email = $_GET['email'];
$dropdown = $GET['dropdown'];
$message = $_GET['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "AKTnowHK@gmail.com";
/*$recipient = "210591@hkis.edu.hk";*/
$subject = "Contact Us";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>