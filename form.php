<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require '/usr/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

require '/usr/share/php/libphp-phpmailer/src/PHPMailer.php';
require '/usr/share/php/libphp-phpmailer/src/SMTP.php';
require '/usr/share/php/libphp-phpmailer/src/Exception.php';
$mail = new PHPMailer;

// $mail->setFrom('u2oomuch@gmail.com');
$mail->setFrom($_POST['email'], $_POST['name']);
$mail->addReplyTo($_POST['email'], $_POST['name']);
$mail->addAddress('samuelebeagu@gmail.com');
$mail->Subject = 'Portfolio Enquiry';
$mail->Body = $_POST['message'];
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;

//Set your existing gmail address as user name
$mail->Username = 'gomolola19@gmail.com';

$mail->Password = 'omolola2020';
if($mail->send()) {
  ?>
  <script>alert("Message Sent!")</script>;
<?php
} else {
  ?>
  <script>alert("Message NOT sent!")</script>;
  <?php
}
?>
<script>document.location = 'index.html';</script> 