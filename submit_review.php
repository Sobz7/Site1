<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Submission</title>
    <style>
     body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif; /* Change the font-family here */
        }

        .message-container {
            background-color: #4caf50;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .error-message {
            background-color: #f44336;
        }
    </style>
</head>

<body>
    <div class="message-container">
        <?php
        $servername = "localhost"; // MySQL server hostname
        $username = "root"; // MySQL username (default: root)
        $database = "reviews"; // Database name

        // Create a connection
        $conn = new mysqli($servername, $username, "", $database); // No password is provided

        // Check the connection
        if ($conn->connect_error) {
            echo "<div class='error-message'>Connection failed: " . $conn->connect_error . "</div>";
        } else {
            // Get form data
            $stars = $_POST['stars'];
            $name = $_POST['name'];
            $title = $_POST['title'];
            $email = $_POST['email'];
            $review = $_POST['review'];
            $date = $_POST['date'];
            $time = $_POST['time'];

            // Insert data into the database
            $sql = "INSERT INTO review (stars, name, title, email, review, date, time) VALUES ('$stars', '$name', '$title', '$email', '$review', '$date', '$time')";

            if ($conn->query($sql) === TRUE) {
                echo "Review submitted successfully!";
            } else {
                echo "<div class='error-message'>Error: " . $sql . "<br>" . $conn->error . "</div>";
            }

            // Close the connection
            $conn->close();
        }

        echo "<meta http-equiv='refresh' content='3;url=review.php'>";
        ?>
    </div>
</body>

</html>
