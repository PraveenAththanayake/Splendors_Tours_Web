
<?php
// Retrieve the form data
$name = $_POST['name'];
$comment = $_POST['comment'];


$conn = mysqli_connect("localhost", "root", "", "aradhana_travels");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Insert the review data into the database
$sql = "INSERT INTO reviews (name, comment)
VALUES ('$name', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
    alert('Review submitted successfully! Redirecting to main page...');
    window.location.href = 'index.php';
  </script>";
} else {
    echo "<script>
    alert('An error occurred. Please try again later.');
    window.location.href = 'index.php';
  </script>";
}

$conn->close();
?>
