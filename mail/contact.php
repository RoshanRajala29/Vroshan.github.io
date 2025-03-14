<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Error: All fields are required!";
        exit;
    }

    // Debugging: Check if values are received
    echo "Name: $name, Email: $email, Subject: $subject, Message: $message";
}
?>
