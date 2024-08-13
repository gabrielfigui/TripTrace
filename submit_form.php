<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // You can save the data to a database, send an email, etc.
    mail('your_email@example.com', 'New Contact Form Submission', "Name: $name\nEmail: $email\nMessage: $message");

    echo "Thank you for your message!";
} else {
    echo "There was an error with your submission.";
}
?>
