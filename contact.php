<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "hjoshi25@asu.edu";
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $name <$email>";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message delivery failed.";
    }
}
?>
