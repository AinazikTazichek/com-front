<?php 
$subject = $_POST['subject'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$formcontent="From: $name \n Message: $message";
$recipient = "salmahunov@mail.ru";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='contacts-us.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>