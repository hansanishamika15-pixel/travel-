<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';
    $to = 'your-email@example.com'; // <- replace with your email
    $subject = "Website contact from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = 'From: no-reply@yourdomain.com' . "\r\n" .
               'Reply-To: ' . $email . "\r\n";
    // Try to send email
    if (mail($to, $subject, $body, $headers)) {
        echo '<p style="color:green;">Thank you! Your message has been sent.</p>';
    } else {
        echo '<p style="color:red;">Sorry, an error occurred while sending your message.</p>';
    }
}
?>