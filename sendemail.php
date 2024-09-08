<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email information
    $to = "zaclea88@hotmail.com";
    $subject = "New Contact Form Message from " . $name;
    $body = "You have received a new message from your website contact form.\n\n".
            "Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: " . $email;

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
