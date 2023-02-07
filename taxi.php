<?php

if (isset($_POST['taxi_submit'])) {
    $taxiname = $_POST['taxiname'];
    $taxigmail = $_POST['taxigmail'];
    $taxitele = $_POST['taxitele'];
    $taxipickuplocation = $_POST['taxipickuplocation'];
    $taxidroplocation = $_POST['taxidroplocation'];
    $howmanypersons = $_POST['howmanypersons'];
    $howmanychilds = $_POST['howmanychilds'];
    $taxibookdate = $_POST['taxibookdate'];
    $taxibooktime = $_POST['taxibooktime'];
    $guesttaximsg = $_POST['guesttaximsg'];

    $to = "splendorstours@gmail.com"; // Replace with your email address
    $subject = "Guest Want a Taxi";
    $headers = "From: " . $taxigmail . "\r\n";
    $headers .= "Reply-To: " . $taxigmail . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $message = "<html><body>";
    $message .= "<h1 style='color: #f40;'>Name: " . $taxiname . "</h1>";
    $message .= "<p style='color: #080;font-size: 18px;'>Email: " . $taxigmail . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Phone: " . $taxitele . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Pickup Location: " . $taxipickuplocation . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Drop Location: " . $taxidroplocation . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>No.Guests: " . $howmanypersons . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>No.Childs: " . $howmanychilds . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Date: " . $taxibookdate . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Time: " . $taxibooktime . "</p>";
    $message .= "<p style='color: #080;font-size: 18px;'>Message: " . $guesttaximsg . "</p>";
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
