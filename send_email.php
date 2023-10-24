<?php
    $name = $_POST['cf-name'];
    $email = $_POST['cf-email'];
    $message = $_POST['cf-message'];

    $to = 'rasoulrezvanijal@gmail.com';
    $subject = 'New message from your contact form';
    $body = "Name: {$cf-name}\nEmail: {$cf-email}\nMessage: {$cf-message}";

    mail($to, $subject, $body);
?>