<?php


if(isset($_POST['Submit'])){
//post fields from form
$name    = $_POST['name'];
$email   = $_POST['email'];
$message =  mysql_real_escape_string($_POST['message']);

//db connection info
$host = "localhost";
$username="root";
$password="love13";
$db="contacts_db";

}
/*
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
$recipient = "youremail@here.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

 mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
 */

// Make a MySQL Connection
mysql_connect($host,$username,$password) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());

// Insert a row of information into the table "example"
mysql_query("INSERT INTO contacts 
(name, email, message) VALUES('$name' ,'$email', '$message')") 
or die(mysql_error());  

mysql_close();

echo "Data Inserted!";


echo "<h1>Thank You " . $name . "! </h1>";
echo "<br> Your message:" . $message . " -" . "<a href='contactform.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
echo "<br> <a href='listcontacts.php' style='text-decoration:none;color:#ff0099;'> List Contacts</a>"
?>