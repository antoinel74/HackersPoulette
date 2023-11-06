<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'localhost';
$mail->SMTPAuth = false;
$mail->Port = 1025;

$mail->setFrom('antoine.lansman@gmail.com', 'Admin');
$mail->addAddress('antoine.lansman@gmail.com', 'User');
$mail->Subject = 'Test Email';

$mail->Body = "First Name: $firstname\n";
$mail->Body .= "Last Name: $name\n";
$mail->Body .= "Country: $country\n";
$mail->Body .= "Email: $email\n";
$mail->Body .= "Subject: $subject\n";
$mail->Body .= "Message:\n$message\n";

if ($mail->send()) {
    echo 'Email sent successfully';
} else {
    echo 'Email could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
