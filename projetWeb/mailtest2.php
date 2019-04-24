<?php
require("src/PHPMailer.php");
require("src/SMTP.php");
require 'src/Exception.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer();
   // $mail->IsSMTP(); // enable SMTP
    
    $mail->IsSMTP();
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "htmlfarouk@gmail.com";
    $mail->Password = "html1234";
    $mail->SetFrom("htmlfarouk@gmail.com",'Farouk');
    $mail->Subject = "Test";
    $mail->Body = "hello";
    $mail->AddAddress("faroukarcher@gmail.com",'farouk');

     if(!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>