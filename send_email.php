<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address where the message will be sent
    $to = "mccartneyandrew14@gmail.com";
    
    // Subject of the email
    $subject = "New Contact Form Submission from $name";

    // The body of the email
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to a thank you page or display a success message
        echo "Thank you for contacting us. We'll get back to you shortly.";
    } else {
        // Display an error message if email sending fails
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
