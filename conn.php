<?php
// Replace 'your_username', 'your_password', 'your_host', and 'your_database' with your actual MySQL credentials and database information
$servername = "localhost";
$username = "root";
$password = "";
$database = "reviews";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Perform database operations here
// For example: execute SQL queries, fetch data, etc.

// Close the connection
$conn->close();
?>
