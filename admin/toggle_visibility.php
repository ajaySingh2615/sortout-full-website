<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Ensure proper authentication
if (!isset($_SESSION['role']) || ($_SESSION['role'] != 'admin' && $_SESSION['role'] != 'super_admin')) {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
    exit();
}

// Database connection
require_once __DIR__ . '/../includes/db_connect.php';

// Check if ID is provided
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => 'Invalid client ID']);
    exit();
}

$client_id = (int)$_GET['id'];

// Get current visibility status
$query = "SELECT is_visible FROM clients WHERE id = ? AND approval_status = 'approved'";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $client_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => 'Client not found or not approved']);
    exit();
}

$row = $result->fetch_assoc();
$new_status = $row['is_visible'] ? 0 : 1; // Toggle the value

// Update visibility status
$update_query = "UPDATE clients SET is_visible = ? WHERE id = ?";
$update_stmt = $conn->prepare($update_query);
$update_stmt->bind_param('ii', $new_status, $client_id);

if ($update_stmt->execute()) {
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'success', 
        'message' => 'Visibility updated successfully', 
        'is_visible' => (int)$new_status
    ]);
} else {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => 'Failed to update visibility status']);
}

$update_stmt->close();
$stmt->close();
$conn->close();
?> 