<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "ansilrahman1230@gmail.com";  // <-- your email
    $subject = "New Contact Form Submission";
    $body = "Email: $email\nPhone: $phone\nMessage:\n$message";
    $headers = "From: noreply@yourdomain.com\r\nReply-To: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message delivery failed.";
    }
}
?>
