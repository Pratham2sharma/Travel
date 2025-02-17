<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require "PHPMailer/src/Exception.php";
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Replace with your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sharmapratham208@gmail.com'; // Replace with your email
        $mail->Password   = 'hkqbljzwqzkyusxc'; // Replace with your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use TLS
        $mail->Port       = 587; // Use 587 for TLS, 465 for SSL

        // Sender & Recipient
        $mail->setFrom($email, $name);
        $mail->addAddress($email, $name); // Replace with recipient email
        $mail->addAddress('sharmapratham208@gmail.com', 'Pratham Sharma'); // Your own email

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Message from $name";
        $mail->Body    = "<h3>Name:</h3> $name <br><h3>Email:</h3> $email <br><h3>Message:</h3><p>$message</p>";
        $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

        // Send Email
        $mail->send();
        echo
         "
    <script>
    alert('Email Sent Succesfully. You will Get Response from Us as soon as Possible');
    document.location.href = 'contact-us.php';
    </script>";
       
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
