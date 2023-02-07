<?php

if (isset($_POST['contact_emailsend'])) {
    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $contact_subject = $_POST['contact_subject'];
    $contact_message = $_POST['contact_message'];


    $to = "splendorstours@gmail.com"; // Replace with your email address
    $subject = "A guest want to contact you.";
    $headers = "From: " . $contact_email . "\r\n";
    $headers .= "Reply-To: " . $contact_email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $message = "<html><body>";
    $message .= "<p style='color: #080;font-size: 18px;'>Name: " . $contact_name . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Email: " . $contact_email . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Subject: " . $contact_subject. "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Message: " . $contact_message . "</p>";
    $message .= "</body></html>";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>
        alert('Form submitted successfully! Redirecting to main page...');
        window.location.href = 'index.php';
      </script>";
    } else {
        echo "<script>
        alert('An error occurred. Please try again later.');
        window.location.href = 'index.php';
      </script>";
    }
}

?>