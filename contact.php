<?php
$message = "";  // Initialize the message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $messageContent = $_POST["message"];
    
    // Construct the email message
    $to = "gaithawa@gmail.com";
    $subject = "Contact Form Submission";
    $headers = "From: $email";
    $content = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $messageContent";
    
    // Send the email
    if (mail($to, $subject, $content, $headers)) {
        $message = "Form submitted successfully!";
    } else {
        $message = "Failed to submit the form. Please try again later.";
    }
}

echo $message;  // Return the message
?>
