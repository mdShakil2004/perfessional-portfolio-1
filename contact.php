<?php
require 'assets/php/PHPMailer.php'; // Include PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'iam.shakil.dev@gmail.com'; // SMTP username
    $mail->Password = ''; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption
    $mail->Port = 587; // TCP port to connect to

    $mail->setFrom('from@example.com', 'Parax Contact Form');
    $mail->addAddress('iam.shakil.dev@gmail.com'); // Add a recipient
    $mail->Subject = $subject;
    $mail->Body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($mail->send()) {
        header("location: thank-you.html");
    } else {
        die("Error: Unable to send email. " . $mail->ErrorInfo);
    }
}
?>
