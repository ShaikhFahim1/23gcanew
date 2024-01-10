<?php

// Include the PHPMailer classes
require 'vendor/PHPMailer/phpMailer/src/Exception.php';
require 'vendor/PHPMailer/phpMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/phpMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


echo "3here";
die();
function sendEmail($to, $subject, $message) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = MAIL_HOST;  // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = MAIL_USERNAME;  // Replace with your email address
        $mail->Password = MAIL_PASSWORD;  // Replace with your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = MAIL_PORT;

        // Recipients
        $mail->setFrom(MAIL_FROMEMAIL, MAIL_FROMNAME);
        $mail->addAddress($to);
        $mail->addCC('faheem@actuariesindia.org', 'Faheem');
        $mail->addCC('sf792914@gmail.com', 'SF');

         // BCC recipients
        $mail->addBCC('sumit@actuariesindia.org', 'Sumit');
        // $mail->SMTPDebug = 2; // 2 or higher for detailed debugging

        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
      
        
    } catch (Exception $e) {
        return false;
    }
}
