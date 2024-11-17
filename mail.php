<?php 

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($subject, $body, $email, $name, $html = false){
    
    // Initial configuration of our server
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465;
    $phpmailer->Username = 'santiagomonsalve7030@gmail.com';
    $phpmailer->Password = 'hlfo uqfr szqs ikpb';

    // Adding recipients
    $phpmailer->setFrom('MarkZuckerberg@gmail.com', 'Mark Zuckerberg');
    $phpmailer->addAddress($email, $name); 

    // Defining the content of my email
    $phpmailer->isHTML($html);
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    // Send the email
    $phpmailer->send();

}

?>