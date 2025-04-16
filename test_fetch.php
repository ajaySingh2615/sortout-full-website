<?php
require './includes/db_connect.php';

// Test database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Test query
$sql = "SELECT * FROM clients WHERE approval_status = 'approved' LIMIT 5";
$result = $conn->query($sql);

if ($result === false) {
    die("Query failed: " . $conn->error);
}

// Display results
echo "<h2>Test Results:</h2>";
echo "<pre>";
while ($row = $result->fetch_assoc()) {
    print_r($row);
}
echo "</pre>";

$conn->close();
?> 