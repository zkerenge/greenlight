<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Create the email message
    $to = "zachariakerenge@yahoo.com";
    $subject = "Contact Form Submission: $subject";
    $message = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    // Send the email
    if (mail($to, $subject, $message)) {
        // Email sent successfully
        echo "Message sent. Thank you!";
    } else {
        // Email not sent
        echo "Sorry, there was an error. Please try again later.";
    }
} else {
    // Handle invalid form submission
    echo "Invalid form submission.";
}
?>
