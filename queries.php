<?php

session_start();
include 'test.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 


$conn = OpenCon();
$email_id=$_POST["Email"];

$mail = new PHPMailer;
 
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = 'kunalshah.0429@gmail.com';   // SMTP username 
$mail->Password = 'i-phone6s';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
 
// Sender info 
$mail->setFrom('kunalshah.0429@gmail.com', 'Choco-o-lick'); 
//$mail->addReplyTo('reply@codexworld.com', 'CodexWorld'); 
 
// Add a recipient 
$mail->addAddress($email_id); 
 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'Regarding your query: "'.$_POST["Message"].'"'; 
 
// Mail body content 
$bodyContent = '<p> <h1> Hello "'.$_POST["Name"].'" </h1> We will get back yo you soon </p>'; 
$bodyContent .= '<p> Thank you for contacting us <b> Choco-o-lick </b></p>'; 
$mail->Body    = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
    echo '<script> alert("Message could not be sent. Mailer Error: '.$mail->ErrorInfo.'") </script>'; 
} else { 
    echo '<script> alert("Thank you for contacting us") </script>';
	?>
	<script>
	location.href="index.html"
	</script>
	<?php 
} 
 
?>