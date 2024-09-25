<?php include 'header.php'; ?>
<?php include 'whatsapp.php'; ?>

<link rel="stylesheet" href="style.css">


<div class="contact-container" class="col-md-4 col-sm-12 info-item">
        <h1>Contact Us</h1>
        <p>We’re here to help! Please reach out through the options below or fill out the form.</p>

        <div class="row">
        <div class="col-md-4 col-sm-12 info-item">
                <i class="fas fa-envelope"></i>
                <div>
                    <h3>Email</h3>
                    <p><a href="mailto:alichowdhryaptech@gmail.com">alichowdhryaptech@gmail.com</a></p>
                </div>
            </div>
     
        <div class="col-md-4 col-sm-12 info-item">
                <i class="fas fa-phone"></i>
                <div>
                    <h3>Phone</h3>
                    <p><a href="tel:+92 03312345814">+92 03312345814</a></p>
                </div>
            </div>
     
        <div class="col-md-4 col-sm-12 info-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <h3>Address</h3>
                    <p>123</p>
                </div>
            </div>
        </div>

        <h2>Send Us a Message</h2>
        
<form action="send.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="submit-button" name="btn">Send Message</button>
        </form>
    </div>
    
    <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['btn'])){ 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

      

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
    }
    
    ?>



<?php include 'footer.php'; ?>

