<?php

if (isset($_POST['guidedEmailSend'])) {
    // Get form values
    $guideName = $_POST["guideName"];
    $guideEmail = $_POST["guideEmail"];
    $guidePhone = $_POST["guidePhone"];
    $guideDate = $_POST["guideDate"];
    $guideDuration = $_POST["guideDuration"];
    $guideLanguage = $_POST["guideLanguage"];
    $guideLocation = $_POST["guideLocation"];
    $guideMessage = $_POST["guideMessage"];

    // Compose email message
    $to = "splendorstours@gmail.com";
    $subject = "New Guide Booking";
    $headers = "From: " . $guideEmail . "\r\n";
    $headers .= "Reply-To: " . $guideEmail . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $message = "<html><body>";
    $message .= "<h1 style='color: #f40;'>Name: " . $guideName . "</h1>";
    $message .= "<p style='color: #080;font-size: 18px;'>Email: " . $guideEmail . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Phone: " . $guidePhone . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Date: " . $guideDate . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Duration: " . $guideDuration . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Language: " . $guideLanguage . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Location: " . $guideLocation . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Message: " . $guideMessage . "</p>";
    $message .= "</body></html>";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>
        alert('Thank you for your booking. We will contact you soon.');
        window.location.href = 'index.php';
      </script>";
    } else {
        echo "<script>
        alert('There was an error sending your booking. Please try again.');
        window.location.href = 'index.php';
      </script>";
    }
}

?>