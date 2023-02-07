<?php
if (isset($_POST['airportEmailSend'])) {
  // Get the form data
  $airportName = $_POST['airportName'];
  $airportEmail = $_POST['airportEmail'];
  $airportTele = $_POST['airportTele'];
  $airportDate = $_POST['airportDate'];
  $airportTime = $_POST['airportTime'];
  $airportGuests = $_POST['airportGuests'];
  $airportChilds = $_POST['airportChilds'];
  $pickupOrDrop = $_POST['pickupOrDrop'];
  $pickupLocation = isset($_POST['pickupLocation']) ? $_POST['pickupLocation'] : '';
  $flightNo = isset($_POST['flightNo']) ? $_POST['flightNo'] : '';
  $dropLocation = isset($_POST['dropLocation']) ? $_POST['dropLocation'] : '';
  $airportMessage = $_POST['airportMessage'];

  // Construct the message body
  $message = "Name: $airportName\n"
    . "Email: $airportEmail\n"
    . "Phone: $airportTele\n"
    . "Date: $airportDate\n"
    . "Time: $airportTime\n"
    . "No. of Guests: $airportGuests\n"
    . "No. of Childs: $airportChilds\n"
    . "Pickup or Drop-Off: $pickupOrDrop\n"
    . "Message: $airportMessage\n";
  if ($pickupOrDrop == 'pickup') {
    $message .= "Drop-Off Location: $dropLocation\n"
      . "Flight No: $flightNo\n";
  } else {
    $message .= "Pickup Location: $pickupLocation\n";
  }

  // Set the email headers
  $to = 'splendorstours@gmail.com';
  $subject = 'New airport booking';
  $headers = "From: $airportEmail\r\n"
    . "Reply-To: $airportEmail\r\n"
    . "X-Mailer: PHP/" . phpversion();

  // Send the Email
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