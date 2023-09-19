<?php
include("configure.php");
extract($_POST);
$service = $_POST['service'];
$sql = "INSERT INTO `form`(`name`, `email`, `service`) VALUES ('".$name."','".$email."','".$service."')";
$query= mysqli_query($mysqli,$sql);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];

 
//Load Composer's autoloader
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'bom1plzcpnl503248.prod.bom1.secureserver.net';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'contact@vishwa-education.com';                     //SMTP username
    $mail->Password   = 'Vishwa@828';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('contact@vishwa-education.com', 'login');
    $mail->addAddress('contact.vishwaeducation@gmail.com', 'Vishwa');     //Add a recipient
    

    //Attachments

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Quote Query';
    $mail->Body    = "Sender Name - $name <br> Email - $email <br> Selected Service - $service"  ;
  

    $mail->send();
    header("Location: quote.php?success=Thank You For Contacting Us");
    exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>

