<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
require_once 'includes/db_connect.php';

// Function to check if column exists
function columnExists($conn, $table, $column) {
    $sql = "SELECT 1 FROM information_schema.columns 
            WHERE table_schema = DATABASE() 
            AND table_name = ? 
            AND column_name = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $table, $column);
    $stmt->execute();
    $result = $stmt->get_result();
    
    return $result->num_rows > 0;
}

// Add resume_url column if it doesn't exist
try {
    if (!columnExists($conn, 'clients', 'resume_url')) {
        $sql = "ALTER TABLE clients ADD COLUMN resume_url VARCHAR(255) DEFAULT NULL";
        
        if ($conn->query($sql) === TRUE) {
            echo "Column 'resume_url' added successfully to the clients table.<br>";
        } else {
            echo "Error adding column: " . $conn->error . "<br>";
        }
    } else {
        echo "Column 'resume_url' already exists in the clients table.<br>";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

// Close connection
$conn->close();
echo "Database update process completed.";
?> 