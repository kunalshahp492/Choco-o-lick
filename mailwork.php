<?php

session_start();
include 'test.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 


$conn = OpenCon();
$mail = new PHPMailer;
 
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = '';   // SMTP username 
$mail->Password = '';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
 
// Sender info 
$mail->setFrom('kunal29@somaiya.edu', 'Exp-7'); 
//$mail->addReplyTo('reply@codexworld.com', 'CodexWorld'); 
 
// Add a recipient 
$mail->addAddress('ravindradivekar@somaiya.edu'); 
 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'Exp 7:- Email using php Roll no:-2024011'; 
 
// Mail body content 
$bodyContent = '<p> <h1> Mail is successfully sent from:- </h1> </p>';  
$bodyContent .= '<p> Name:- Kunal Shah </br> Roll no:- 2024011 </p>';  
$mail->Body    = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
    echo '<script> alert("Message could not be sent. Mailer Error: '.$mail->ErrorInfo.'") </script>'; 
} else { 
    echo '<script> alert("Message sent successfully") </script>';
} 
 
?>