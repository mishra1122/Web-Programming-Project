<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message =$_POST['message'];
$email_form='ss8673@srmist.edu.in';
$email_subject = "New Form Submission";
$email_body ="User Name: $name.\n"."User Email: $visitor_email.\n"."User Message: $message.\n";
$to="smritimishra.0408@gmail.com";
$headers="From: $email_form\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");