<?php

if (isset($_POST['rent_submit'])) {
    $name = $_POST['gname'];
    $email = $_POST['gmail'];
    $phone = $_POST['tele'];
    $vehicle = $_POST['vehicle'];
    $days = $_POST['howmanydaysyourent'];
    $location = $_POST['glocation'];
    $gmessage = $_POST['guestrentmsg'];

    $to = "splendorstours@gmail.com"; // Replace with your email address
    $subject = "Rent a Vehicle Request";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $message = "<html><body>";
    $message .= "<h1 style='color: #f40;'>Name: " . $name . "</h1>";
    $message .= "<p style='color: #080;font-size: 18px;'>Email: " . $email . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Phone: " . $phone . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Vehicle: " . $vehicle . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Days: " . $days . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Location: " . $location . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Message: " . $gmessage . "</p>";
    $message .= "</body></html>";

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
