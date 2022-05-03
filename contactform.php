<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "matt@deepcurrents.llc"
$subject = "Portfolio Contact Form Submission":
$txt = "Name = ". $name . "\r\n Email = " . $email . "\r\n Message = " . $message;
$headers = "From: noreply@paperarmada.github.io";
if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}

?>