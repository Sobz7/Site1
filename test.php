<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .review-container {
            width: 80%;
            margin: 0 auto;
        }

        .review {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .review .user-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .review .user-info img {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .review .user-info .star-rating input[type="radio"] {
            display: none;
        }

        .review .user-info .star-rating input[type="radio"] + i {
            font-style: normal;
            font-size: 24px;
            color: #f8d32b;
            cursor: pointer;
        }

        .review .user-info .star-rating input[type="radio"]:checked + i {
            color: #ffd700;
        }

        .reply {
            margin-left: 30px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="review-container">
        <h1>Customer Reviews</h1>

        <?php
        $servername = "localhost"; // MySQL server hostname
        $username = "root"; // MySQL username (default: root)
        $database = "reviews"; // Database name

        // Create a connection
        $conn = new mysqli($servername, $username, "", $database); // No password is provided

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to fetch reviews from the database
        $sql = "SELECT * FROM review";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<div class='review'>";
                echo "<div class='user-info'>";
                echo "<img src='images/avatar.png' alt='avatar'>";
                echo "<div>";

                echo "<p>" . $row["name"] . " <span class='small'>- " . $row["date"] . " " . $row["time"] . "</span></p>";

                echo "<div class='star-rating'>";
                for ($i = 1; $i <= $row["stars"]; $i++) {
                    echo "<i style='color: gold; font-size: 1.8rem;'>★</i>";
                }
                echo "</div>";

                echo "</div>";
                echo "</div>";
                echo "<p class='small mb-0'>" . $row["review"] . "</p>";

                // Fetch and display replies for this review
                $reviewId = $row["review_id"];
                $replySql = "SELECT * FROM review WHERE review_id = $reviewId";
                $replyResult = $conn->query($replySql);

                if ($replyResult->num_rows > 0) {
                    while ($replyRow = $replyResult->fetch_assoc()) {
                        echo "<div class='reply'>";
                        echo "<p><strong>" . $replyRow["name"] . ":</strong> " . $replyRow["reply"] . "</p>";
                        echo "</div>";
                    }
                }

                echo "</div>";
            }
        } else {
            echo "No reviews found.";
        }

        // Close the connection
        $conn->close();
        ?>
    </div>
</body>

</html>
