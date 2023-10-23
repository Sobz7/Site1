<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .user-info {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reviewId = $_POST["review_id"];
    $action = $_POST["action"];

    if ($action == "view") {
        $sql = "UPDATE review SET viewed = 1 WHERE review_id = $reviewId";
        $conn->query($sql);
    } elseif ($action == "delete") {
        $sql = "DELETE FROM review WHERE review_id = $reviewId";
        $conn->query($sql);
    } elseif ($action == "reply") {
        $replyText = $_POST["reply_text"];
        $sql = "UPDATE review SET reply = '$replyText' WHERE review_id = $reviewId";
        $conn->query($sql);
    }
}

$sql = "SELECT * FROM review";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

echo "<div class='user-info card mt-3'>";
echo "<div class='card-body'>";
echo "<h5 class='card-title'>Review ID: {$row['review_id']}</h5>";
echo "<p class='card-text'><strong>Name:</strong> {$row['name']}</p>";
echo "<p class='card-text'><strong>Email:</strong> {$row['email']}</p>";
echo "<p class='card-text'><strong>Review:</strong> {$row['review']}</p>";

if ($row['viewed'] == 1) {
    echo "<p class='card-text'><strong>Status:</strong> <span class='badge badge-success'>Viewed</span></p>";
} else {
    echo "<p class='card-text'><strong>Status:</strong> <span class='badge badge-warning'>Not Viewed</span></p>";
}

if (!empty($row['reply'])) {
    echo "<p class='card-text'><strong>Reply:</strong> {$row['reply']}</p>";
}

echo "<button class='btn btn-primary view-btn mr-2' data-review-id='{$row['review_id']}'>View</button>";
echo "<button class='btn btn-danger delete-btn mr-2' data-review-id='{$row['review_id']}'>Delete</button>";
echo "<button class='btn btn-secondary reply-btn' data-review-id='{$row['review_id']}'>Reply</button>";
echo "</div>";
echo "</div>";

    }
} else {
    echo "No reviews found.";
}

$conn->close();
?>

<script>
    $(document).ready(function() {
        $(".view-btn").click(function() {
            var reviewId = $(this).data("review-id");
            $.post("admin.php", { review_id: reviewId, action: "view" }, function() {
                alert("Review marked as viewed.");
            });
        });

        $(".delete-btn").click(function() {
            var reviewId = $(this).data("review-id");
            $.post("admin.php", { review_id: reviewId, action: "delete" }, function() {
                alert("Review deleted.");
                location.reload(); // Refresh the page after deletion
            });
        });

        $(".reply-btn").click(function() {
            var reviewId = $(this).data("review-id");
            var replyText = prompt("Enter your reply:");
            if (replyText !== null) {
                $.post("admin.php", { review_id: reviewId, action: "reply", reply_text: replyText }, function() {
                    alert("Reply submitted.");
                    location.reload(); // Refresh the page after replying
                });
            }
        });
    });
</script>

</body>
</html>
