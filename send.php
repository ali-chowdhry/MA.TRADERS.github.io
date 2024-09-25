<link rel="stylesheet" href="style.css">
<?php

include 'header.php';;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['btn'])){ 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];}

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'alichowdhryaptech@gmail.com';
    $mail->Password   = 'xjmsyyphlubnvuea'; // Use your App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use STARTTLS
    $mail->Port       = 587; // Use port 587 for TLS

    // SSL Options
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->setFrom('alichowdhryaptech@gmail.com', 'customer message');
    $mail->addAddress('maliirfan2009@gmail.com', 'chowdhry');

    $mail->isHTML(true);
    $mail->Subject = 'customer message';
    $mail->Body    = "Name - $name <br> Email - $email <br> Message - $message";
    $mail->send();

    echo "<div class='success'>Message has been sent</div>";
  } catch (Exception $e) {
    echo "<div class='alert'>Message has been sent</div>";
}

echo "<br><br><br><br>";

include 'footer.php';
?>
