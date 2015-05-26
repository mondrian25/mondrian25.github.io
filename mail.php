<?php 

$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];
$formcontent="Contact form\n\nFrom: $name \nMessage: $message";
$recipient = "mengnawu2015@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! E-mail send.";

?>