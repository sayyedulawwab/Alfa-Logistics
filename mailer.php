<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

//Server settings
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'support@alfalogistics.com.bd';                     //SMTP username
$mail->Password   = 'password';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 465;  //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//Recipients
$mail->addAddress('info@alfalogistics.com.bd');     //Add a recipient

// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// //Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

if (isset($_POST['contact'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];

//Recipients
$mail->setFrom($email, $name);

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = ("$email ($subject)");
$mail->Body    = "From: $name <br>Email: $email <br>Phone: $phone <br>Subject: $subject <br>Message: $message ";
$mail->AltBody = "From: $name \nEmail: $email  \nPhone: $phone \nSubject: $subject \nMessage: $message";

if($mail->send()){

  $status = "success";
  $response = "Email is sent!";
}
else{
  $status = "failed";
  $response = "Something is wrong".$mail->ErrorInfo;
}
exit(json_encode(array('status' => $status , "response" => $response )));

}

if (isset($_POST['footer_message'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

//Recipients
$mail->setFrom($email, $name);
//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = ("$email ($name)");
$mail->Body    = "From: $name <br>Email: $email <br>Message: $message";
$mail->AltBody = "From: $name \nEmail: $email \nMessage: $message";

if($mail->send()){

  $status = "success";
  $response = "Email is sent!";
}
else{
  $status = "failed";
  $response = "Something is wrong".$mail->ErrorInfo;
}
exit(json_encode(array('status' => $status , "response" => $response )));

}


// header('Content-Type: application/json');
// if ($name === ''){
//   print json_encode(array('message' => 'Name cannot be empty!', 'code' => 0));
//   exit();
// }
// if ($email === ''){
//   print json_encode(array('message' => 'Email cannot be empty!', 'code' => 0));
//   exit();
// } else {
//   if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//   print json_encode(array('message' => 'Email format invalid!', 'code' => 0));
//   exit();
//   }
// }
// if ($subject === ''){
//   print json_encode(array('message' => 'Subject cannot be empty!', 'code' => 0));
//   exit();
// }
// if ($message === ''){
//   print json_encode(array('message' => 'Message cannot be empty!', 'code' => 0));
//   exit();
// }
// $content="From: $name \nEmail: $email \nMessage: $message";
// $recipient = "--------------------------------------------------------------------------------------------------";
// $mailheader = "From: $email \r\n";
// mail($recipient, $subject, $content, $mailheader) or die("Error!");
// print json_encode(array('message' => 'Thank you for your message. I will get back to you asap!' , 'code' => 1));
// exit();

?>