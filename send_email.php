<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "boluayofashina@gmail.com";  // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Respond to the frontend
    echo "success";
} else {
    echo "error";
}
?>
