<?php

require 'safeRequests.php';


// Email options
$to = "c03v23@gmail.com";
$subject = "Тема письма";
$message = "Текст сообщения";

// Данные для подключения к серверу Yahoo по IMAP
$imapHost = "{imap.mail.yahoo.com:993/ssl/novalidate-cert}";

// Данные для подключения к серверу Yahoo по SMTP
$smtpHost = "smtp.bizmail.yahoo.com";
$smtpPort = 465; // Порт для SSL
$smtpUsername = "phpsender@immigrationwise.com";
$smtpPassword = "vfvbzbzdbmlmuvhu";

// Настройки для отправки письма
$mailHeaders = array(
    "From" => $smtpUsername,
    "Reply-To" => $smtpUsername,
    "X-Mailer" => "PHP/" . phpversion()
);

// Подключение к серверу IMAP
$inbox = imap_open($imapHost, $smtpUsername, $smtpPassword);
if (!$inbox) {
    die("Не удалось подключиться к серверу IMAP: " . imap_last_error());
}

// Подключение к серверу SMTP
$smtpConnect = fsockopen("ssl://$smtpHost", $smtpPort, $errno, $errstr, 15);
if (!$smtpConnect) {
    die("Не удалось подключиться к серверу SMTP: $errstr ($errno)");
}

// Аутентификация на сервере SMTP
fputs($smtpConnect, "EHLO localhost\r\n");
$smtpResponse = fgets($smtpConnect, 515);
if (substr($smtpResponse, 0, 3) != 250) {
    die("Не удалось отправить приветственную команду EHLO: $smtpResponse");
}

fputs($smtpConnect, "AUTH LOGIN\r\n");
$smtpResponse = fgets($smtpConnect, 515);
if (substr($smtpResponse, 0, 3) != 334) {
    die("Не удалось запросить авторизацию: $smtpResponse");
}

fputs($smtpConnect, base64_encode($smtpUsername) . "\r\n");
$smtpResponse = fgets($smtpConnect, 515);
if (substr($smtpResponse, 0, 3) != 334) {
    die("Не удалось отправить имя пользователя: $smtpResponse");
}

fputs($smtpConnect, base64_encode($smtpPassword) . "\r\n");
$smtpResponse = fgets($smtpConnect, 515);
if (substr($smtpResponse, 0, 3) != 235) {
    die("Не удалось отправить пароль: $smtpResponse");
}

// Отправка письма
fputs($smtpConnect, "MAIL FROM: <$smtpUsername>\r\n");
$smtpResponse = fgets($smtpConnect, 515);
if (substr($smtpResponse, 0, 3) != 250) {
    die("Не удалось отправить команду MAIL FROM: $smtpResponse");
}

fputs($smtpConnect, "RCPT TO: <$to>\r\n");
$smtpResponse = fgets($smtpConnect, 515);
if (substr($smtpResponse, 0, 3) != 250) {
    die("Не удалось отправить команду RCPT TO: $smtpResponse");
}

fputs($smtpConnect, "DATA\r\n");
$smtpResponse = fgets($smtpConnect, 515);
if (substr($smtpResponse, 0, 3) != 354) {
    die("Не удалось отправить команду DATA: $smtpResponse");
}

// Отправка заголовков и тела письма
fputs($smtpConnect, "Subject: $subject\r\n");
foreach ($mailHeaders as $key => $value) {
    fputs($smtpConnect, "$key: $value\r\n");
}

fputs($smtpConnect, "\r\n");
fputs($smtpConnect, "$message\r\n");
fputs($smtpConnect, ".\r\n");

$smtpResponse = fgets($smtpConnect, 515);
if (substr($smtpResponse, 0, 3) != 250) {
    die("Не удалось отправить письмо: $smtpResponse");
}

// Завершение сеанса
fputs($smtpConnect, "QUIT\r\n");
fclose($smtpConnect);

// Закрытие соединения с сервером IMAP
imap_close($inbox);

echo "Письмо успешно отправлено!";


// header("Location: /");
