<?php
require_once 'vendor/autoload.php';

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendmail($to, $subject, $messageBody){

	$mail = new PHPMailer(true);

	$mail->isSMTP();

	$mail->Host = 'localhost';
	$mail->SMTPAuth = false;
	$mail->SMTPAutoTLS = false; 
	$mail->Port = 25;

	$mail->setFrom('Marketing@mumsports.com', 'Mumsports');
	$mail->addAddress($to);

	$mail->isHTML(true);

	$mail->Subject = $subject;
	$mail->Body    = $messageBody;

	$mail->send();

	/*if (!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}*/
}

sendmail('kay@espis.com', "Test email", "Hello <strong>world</strong> 123");

?>