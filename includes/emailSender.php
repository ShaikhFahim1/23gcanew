<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include the PHPMailer classes
require 'vendor/PHPMailer/phpMailer/src/Exception.php';
require 'vendor/PHPMailer/phpMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/phpMailer/src/SMTP.php';

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
function sendEmail1($toEmail, $subject, $msgPlain)
{
    
    // Build the request parameters
    $params = [
        'uname' => "Actuaries_Email",
        'pass' => "Actuaries@2022",
        'fromEmail' => "noreply@actuariesindia.org",
        'fromName' => "noreply",
        'toEmail' => $toEmail,
        'subject' => $subject,
        'msgPlain' => $msgPlain,
    ];

    // Initialize cURL session
    $ch = curl_init("http://eapi.mgage.solutions/email");

    // Set cURL options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session and get the response
    $response = curl_exec($ch);

    // Close cURL session
    curl_close($ch);

    // Output the result
    return true;
}
function sendEmailk($toEmail, $subject, $message){

     $encodedMessage = $message;
     // Set up email API parameters
     $emailApiUrl = "http://eapi.mgage.solutions/email";
     $emailApiParams = [
         'uname' => 'Actuaries_Email',
         'pass' => 'Actuaries@2022',
         'fromEmail' => 'noreply@actuariesindia.org',
         'fromName' => 'noreply',
         'toEmail' => $toEmail,
         'subject' => $subject,
         'msgHTML' => $encodedMessage,
     ];

     // Make the request to the email API
    //  echo  $emailApiUrl . '?' . http_build_query($emailApiParams);
    //  die();
     $output =  file_get_contents($emailApiUrl . '?' . http_build_query($emailApiParams));
     return true;
}