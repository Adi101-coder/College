<?php
$name=$_post['name'];
$visitor_email=$_post['email'];
$subject=$_post['subject'];
$message=$_post['message'];

$email_form='Harvard6145@gmail.com';

$email_subject= 'New Form Submission';

$email_body="User Name:$name.\n".
    "User Email: $visitor_email.\n".
    "subject: $subject.\n".
    "User Message: $message .\n";

$to='aditkatiyar050@gmail.com';
$headers="From: $email_form \r\n";
$headers.="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:index4.html");
?>