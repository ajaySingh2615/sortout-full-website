<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u469276866_sortout";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set to UTF-8
$conn->set_charset("utf8mb4");
?>
