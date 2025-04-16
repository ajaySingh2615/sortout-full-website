<?php
// Comment out or remove display_errors for production
error_reporting(E_ALL);
ini_set('display_errors', 0); // Change to 0 to prevent displaying errors in output

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

require '../includes/db_connect.php';  // Database connection

// Set headers before any output
header('Content-Type: application/json'); // Ensure JSON output

// Wrap everything in a try-catch to handle any errors
try {
    // Debug: Check if database connection is successful
    if ($conn->connect_error) {
        echo json_encode([
            "status" => "error",
            "message" => "Database connection failed"
        ]);
        exit;
    }

    // Get parameters
    $status = isset($_GET['status']) ? $_GET['status'] : 'pending';
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
    $limit = 10; // Items per page
    $offset = ($page - 1) * $limit;
    $search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
    $filter = isset($_GET['filter']) ? mysqli_real_escape_string($conn, $_GET['filter']) : '';

    // Build search condition
    $searchCondition = '';
    if (!empty($search)) {
        $searchCondition = " AND (
            name LIKE '%$search%' OR 
            gender LIKE '%$search%' OR 
            professional LIKE '%$search%' OR 
            category LIKE '%$search%' OR 
            role LIKE '%$search%' OR 
            city LIKE '%$search%'
        )";
    }

    // Build filter condition
    $filterCondition = '';
    if (!empty($filter)) {
        $filterCondition = " AND professional = '$filter'";
    }

    // Prepare query
    $query = "SELECT id, name, age, gender, professional, category, role, city, followers, 
              experience, language, image_url, resume_url, current_salary, is_visible 
              FROM clients 
              WHERE approval_status = '$status'$searchCondition$filterCondition 
              ORDER BY id DESC 
              LIMIT $limit OFFSET $offset";

    $countQuery = "SELECT COUNT(*) as total FROM clients WHERE approval_status = '$status'$searchCondition$filterCondition";

    // Execute queries
    $result = mysqli_query($conn, $query);
    $countResult = mysqli_query($conn, $countQuery);
    $total = mysqli_fetch_assoc($countResult)['total'];

    // Prepare response
    $clients = [];
    while ($row = mysqli_fetch_assoc($result)) {
        // Ensure is_visible has a default value if not set
        if (!isset($row['is_visible'])) {
            $row['is_visible'] = 1; // Default to visible
        } else {
            // Ensure is_visible is correctly cast to integer
            $row['is_visible'] = (int)$row['is_visible'];
        }
        $clients[] = $row;
    }

    echo json_encode([
        'status' => 'success',
        'clients' => $clients,
        'total' => (int)$total,
        'page' => $page,
        'pages' => ceil($total / $limit)
    ]);

} catch (Exception $e) {
    // Log the error to a file instead of displaying it
    error_log("Error in fetch_clients.php: " . $e->getMessage());
    
    // Return a clean JSON error response
    echo json_encode([
        'status' => 'error',
        'message' => 'Error loading clients. Please try again.'
    ]);
} finally {
    if (isset($conn) && $conn) {
        mysqli_close($conn);
    }
}
?>
