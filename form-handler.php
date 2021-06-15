<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_form='Eduford@ pritimaurya16.host20.uk';
$eamil_subject='New Form Submission';
$email_body="User Name: $name.\n".
           "User Email: $email.\n".
           "Subject: $subject.\n".
           "User Message: $message.\n";

           $to='1805214039@IETLUCKNOW.ac.in'
$headers="Form: $email_form\r\n";
$headers .="Reply-To: $visitor_email \r\n";
 mail($to,$email_subject,$email_body,$headers);
 header("Locatio: contact.html");
           ?>
