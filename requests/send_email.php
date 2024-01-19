<?php

require 'safeRequests.php';

$name = safeRequest('name');
$email = safeRequest('email');
$phone = safeRequest('phone');
$message = safeRequest('msg');

if (empty($name) && empty($email) && empty($phone) && empty($message)) {
    $formattedMessage = "All fields are empty";
} else {
    $formattedMessage = sprintf("Name: %s <br>Email: %s <br>Phone: %s <br>Message: %s", $name ?: "Empty", $email ?: "Empty", $phone ?: "Empty", $message ?: "Empty");
}

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Email Options
$to = "tatiana@immigrationwise.com";  // <---------------------------------- Change EMAIL
$subject = $email ?: "Empty" . ' || Feedback from site form';
$message = $formattedMessage;

// Data for connecting to the Yahoo server via SMTP
$smtpHost = "smtp.mail.yahoo.com";
$smtpPort = 465; // Port SSL
$smtpUsername = "phpsender@immigrationwise.com";
$smtpPassword = "vfvbzbzdbmlmuvhu";

// Settings for sending letters
$mail = new PHPMailer(true);

try {
    // Server settings
    // --- $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = $smtpPort;
    
    // UTF-8 
    $mail->CharSet = 'UTF-8';

    // Recipients
    $mail->setFrom($smtpUsername, 'SiteForm');
    $mail->addAddress($to);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();
    // --- echo 'Письмо успешно отправлено!';
} catch (Exception $e) {
    // --- echo "Письмо не удалось отправить. Ошибка: {$mail->ErrorInfo}";
}

header("Location: /pure_php_site/");
exit;
