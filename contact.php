<?php
if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Send email
    $to = 'mtunzimedia@gmail.com';
    $subject = 'New contact form submission';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for your message!';
    } else {
        echo 'There was a problem sending your message.';
    }
}
?>
