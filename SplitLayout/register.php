<?php

$message=
'Full Name:	'.$_POST['name'].'<br />
email:	'.$_POST['email'].'<br />
Phone:	'.$_POST['phone'].'<br />
place:	'.$_POST['place'].'<br />
interest:	'.$_POST['interest'].'<br />

gender:	'.$_POST['gender'].'

';

require "phpmailer/class.phpmailer.php"; //include phpmailer class

// Instantiate Class
$mail = new PHPMailer();

// Set up SMTP
$mail->IsSMTP();                // Sets up a SMTP connection
$mail->SMTPAuth = true;         // Connection with the SMTP does require authorization
    // Connect using a TLS connection
$mail->Host = "smtp.postmarkapp.com";  //Gmail SMTP server address
$mail->Port = 25;  //Gmail SMTP port

// Authentication
$mail->Username   = "5aa1b801-efa8-434a-bf2d-15a385613530"; // Your full Gmail address
$mail->Password   = "5aa1b801-efa8-434a-bf2d-15a385613530"; // Your Gmail password

$mail->Encoding = '7bit';
// Compose
$mail->SetFrom("mkv@commutatus.com", "mkv");
$mail->AddReplyTo($_POST['email'], $_POST['name']);
$mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)
$mail->MsgHTML($message);

// Send To
$mail->AddAddress("karan@commutatus.com", "mkv"); // Where to send it - Recipient

$result = $mail->Send();		// Send!
$message = $result ? 'Successfully Sent!' : 'Sending Failed!';
unset($mail);
header('Location:index.php');
?>
