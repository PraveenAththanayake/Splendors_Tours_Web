<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "aradhana_travels");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch reviews from database
$sql = "SELECT * FROM reviews";
$result = mysqli_query($conn, $sql);

// Display reviews
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='review'>";
        echo "<p class='reviewname'>" . $row["name"] . "</p>";
        echo "<p>" . $row["comment"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No reviews found.";
}


// Close database connection
mysqli_close($conn);
?>
