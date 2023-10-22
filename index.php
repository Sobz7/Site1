<?php
$servername = "localhost"; // MySQL server hostname
$username = "root"; // MySQL username (default: root)
$database = "reviews"; // Database name

// Create a connection
$conn = new mysqli($servername, $username, "", $database); // No password is provided

// Check the connection
if ($conn->connect_error) {
    // If connection fails, print an error message
    die("Connection failed: " . $conn->connect_error);
} else {
    // If connection is successful, print a success message
    echo "Connected to the database successfully!";
    
    // Perform your database operations here
    
    // Don't forget to close the connection when you're done
    $conn->close();
}
?>
