<?php

require_once '../phpmailtest/PHPMailer_5.2.4/class.phpmailer.php';
/* creates object */
$mail = new PHPMailer(true);
$mailid = "faroukarcher@gmail.com";
$subject = "Thank u";
$text_message = "Hello";
$message = "Thank You for Contact with us.";

try
{


$mail->IsSMTP();
$mail->IsMail();
$mail->isHTML(true);
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->AddAddress($mailid);
$mail->Username ="htmlfarouk@gmail.com";
$mail->Password ="dontstop95";
$mail->SetFrom('htmlfarouk@gmail.com','Farouk Hasni');

$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = $message;


if($mail->send())
{
echo "Thank you for register u got a notification through the mail you provide";
} else {
  echo $mail->ErrorInfo;
}
}
catch(phpmailerException $ex)
{
echo $ex->errorMessage();
}
?>