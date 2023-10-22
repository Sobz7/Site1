<?php
// Your database connection code here

// Fetch reviews from the database
$sql = "SELECT * FROM review";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $stars = $row["stars"];
        $name = $row["name"];
        $reviewText = $row["review"];
        
        // Output review with gold stars
        echo "<div class='d-flex flex-start mt-4'>";
        echo "<div class='star-rating'>";
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $stars) {
                echo "<i class='fas fa-star'></i>"; // Solid gold star
            } else {
                echo "<i class='far fa-star'></i>"; // Empty star
            }
        }
        echo "</div>";
        echo "<div class='flex-grow-1 flex-shrink-1'>";
        echo "<div>";
        echo "<div class='d-flex justify-content-between align-items-center'>";
        echo "<p class='mb-1'>$name <span class='small'>- $stars stars</span></p>";
        echo "</div>";
        echo "<p class='small mb-0'>$reviewText</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No reviews found.";
}

// Close the database connection
$conn->close();
?>
