<?php
$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

/*
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
$recipient = "youremail@here.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

 mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
 */

echo "<h1>Thank You " . $name . "! </h1>";
echo "<br> Your message:" . $message . " -" . "<a href='contactform.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
echo "<br> <a href='listcontacts.php' style='text-decoration:none;color:#ff0099;'> List Contacts</a>"
?>