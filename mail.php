<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_address = $_POST['email_address'];
$message = $_POST['message'];
$formcontent="From: $first_name $last_name \n Message: $message";
$recipient = "egmatti@gmail.com";
$subject = "Email from www.emilymattison.io";
$mailheader = "From: $email_address \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
