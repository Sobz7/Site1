<?php
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$date = $_POST["date"];
$time = $_POST["time"];
$number = $_POST["number"];
$event = $_POST["event"];

$sql = "INSERT INTO reservations (date, time, number, event) VALUES ('$date', '$time', '$number', '$event')";

if ($conn->query($sql) === TRUE) {
    $response = ["success" => true];
} else {
    $response = ["success" => false];
}

$conn->close();

echo json_encode($response);
?>
