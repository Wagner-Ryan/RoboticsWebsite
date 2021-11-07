<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "ryanw618@hotmail.com"

    $email_body = "Email from $name at email: $email.\n\n$message";

    mail($to, $subject, $email_body);

    header("Location: contact.html");
?>