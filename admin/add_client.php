<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); // Temporarily enable display errors for debugging
header('Content-Type: application/json');

// Fix file paths
$root_path = dirname(dirname(__FILE__));
require_once $root_path . '/includes/db_connect.php';
require_once $root_path . '/includes/config.php';
require_once $root_path . '/vendor/autoload.php';

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

// Ensure Cloudinary is configured
try {
    Configuration::instance([
        'cloud' => [
            'cloud_name' => 'dcrk1fzah',
            'api_key'    => '739623412262183',
            'api_secret' => '2gQxCaV5g3ptDJ_FNaJOnVNomvs'
        ],
        'url' => [
            'secure' => true
        ]
    ]);
} catch (Exception $e) {
    error_log("Cloudinary configuration error: " . $e->getMessage());
    echo json_encode(["status" => "error", "message" => "Server configuration error"]);
    exit;
}

// Create uploads directory if it doesn't exist
$uploads_dir = $root_path . '/uploads/resumes';
if (!file_exists($uploads_dir)) {
    mkdir($uploads_dir, 0755, true);
}

$response = ["status" => "error", "message" => "Unknown error"];

try {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception("Invalid request method");
    }

    // Debug log
    error_log("POST data received: " . print_r($_POST, true));
    error_log("FILES data received: " . print_r($_FILES, true));

    // Get form data safely
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    $age = isset($_POST['age']) ? intval($_POST['age']) : 0;
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : "";
    $gender = isset($_POST['gender']) ? trim($_POST['gender']) : "";
    $professional = isset($_POST['professional']) ? trim($_POST['professional']) : "";
    $city = isset($_POST['city']) ? trim($_POST['city']) : "";
    
    // Handle multiple languages properly
    $language = isset($_POST['languages']) ? trim($_POST['languages']) : "";

    // Get both fields regardless of professional type
    $followers = isset($_POST['followers']) ? trim($_POST['followers']) : "";
    $experience = isset($_POST['experience']) ? trim($_POST['experience']) : "";
    $current_salary = isset($_POST['current_salary']) ? trim($_POST['current_salary']) : "";
    $category = isset($_POST['category']) ? trim($_POST['category']) : "";
    $role = isset($_POST['role']) ? trim($_POST['role']) : "";
    
    // Initialize resume_url
    $resume_url = "";

    // Basic validation
    if (empty($name) || empty($professional) || empty($city)) {
        throw new Exception("Name, Professional type, and City are required.");
    }

    // Professional type specific validation and field clearing
    if ($professional === "Artist") {
        if (empty($category)) {
            throw new Exception("Category is required for Artist type.");
        }
        // Clear Employee fields
        $role = "";
        $experience = "";
        $current_salary = "";
        $resume_url = "";
    } else if ($professional === "Employee") {
        if (empty($role)) {
            throw new Exception("Role is required for Employee type.");
        }
        
        // Resume validation for Employee
        if (empty($_FILES['resume']['tmp_name'])) {
            $response = [
                "status" => "error",
                "field" => "resume",
                "message" => "Resume is required for Employee profiles."
            ];
            echo json_encode($response);
            exit;
        }
        
        // Validate resume file
        if (!is_uploaded_file($_FILES['resume']['tmp_name'])) {
            $response = [
                "status" => "error",
                "field" => "resume",
                "message" => "Invalid file upload attempt."
            ];
            echo json_encode($response);
            exit;
        }
        
        // Validate file type
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $file_type = finfo_file($finfo, $_FILES['resume']['tmp_name']);
        finfo_close($finfo);
        
        $allowed_types = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        if (!in_array($file_type, $allowed_types)) {
            $response = [
                "status" => "error",
                "field" => "resume",
                "message" => "Invalid file type. Only PDF, DOC, and DOCX are allowed."
            ];
            echo json_encode($response);
            exit;
        }
        
        // Validate file size (5MB max)
        if ($_FILES['resume']['size'] > 5 * 1024 * 1024) {
            $response = [
                "status" => "error",
                "field" => "resume",
                "message" => "File size too large. Maximum size is 5MB."
            ];
            echo json_encode($response);
            exit;
        }
        
        // Generate unique filename
        $file_extension = pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION);
        $unique_filename = uniqid('resume_') . '_' . time() . '.' . $file_extension;
        $upload_path = $uploads_dir . '/' . $unique_filename;
        
        // Move uploaded file
        if (!move_uploaded_file($_FILES['resume']['tmp_name'], $upload_path)) {
            error_log("File upload error: Could not move file to " . $upload_path);
            $response = [
                "status" => "error",
                "field" => "resume",
                "message" => "Failed to save resume file. Please try again."
            ];
            echo json_encode($response);
            exit;
        }
        
        // Store relative path in database
        $resume_url = 'uploads/resumes/' . $unique_filename;
        
        // Clear Artist fields
        $category = "";
        $followers = "";
    }

    // Handle Image Upload (keeping Cloudinary for images as they need to be served quickly)
    $image_url = "";
    if (!empty($_FILES['image']['tmp_name'])) {
        if (!is_uploaded_file($_FILES['image']['tmp_name'])) {
            throw new Exception("Invalid file upload attempt.");
        }

        // Validate file type
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $file_type = finfo_file($finfo, $_FILES['image']['tmp_name']);
        finfo_close($finfo);

        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($file_type, $allowed_types)) {
            throw new Exception("Invalid file type. Only JPG, PNG, and GIF are allowed.");
        }

        // Validate file size (5MB max)
        if ($_FILES['image']['size'] > 5 * 1024 * 1024) {
            throw new Exception("File size too large. Maximum size is 5MB.");
        }

        try {
            $uploadApi = new UploadApi();
            $upload = $uploadApi->upload($_FILES['image']['tmp_name'], [
                'folder' => 'client_images',
                'resource_type' => 'image'
            ]);
            $image_url = $upload['secure_url'];
        } catch (Exception $e) {
            error_log("Cloudinary upload error: " . $e->getMessage());
            throw new Exception("Image upload failed: " . $e->getMessage());
        }
    } else {
        throw new Exception("Profile image is required.");
    }

    // Prepare SQL Query
    $query = "INSERT INTO clients (name, age, phone, gender, followers, experience, current_salary, category, role, language, professional, city, image_url, resume_url, approval_status) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($query);
    if (!$stmt) {
        error_log("MySQL prepare error: " . $conn->error);
        throw new Exception("Database error occurred: " . $conn->error);
    }

    // Debug log the values being bound
    error_log("Binding parameters: " . print_r([
        'name' => $name,
        'age' => $age,
        'phone' => $phone,
        'gender' => $gender,
        'followers' => $followers,
        'experience' => $experience,
        'current_salary' => $current_salary,
        'category' => $category,
        'role' => $role,
        'language' => $language,
        'professional' => $professional,
        'city' => $city,
        'image_url' => $image_url,
        'resume_url' => $resume_url,
        'approval_status' => 'pending'
    ], true));

    // Store approval_status in a variable for binding
    $approval_status = 'pending';

    // Bind Parameters
    if (!$stmt->bind_param("sisssssssssssss", 
        $name,          // s - string
        $age,           // i - integer
        $phone,         // s - string
        $gender,        // s - string
        $followers,     // s - string
        $experience,    // s - string
        $current_salary,// s - string
        $category,      // s - string
        $role,          // s - string
        $language,      // s - string
        $professional,  // s - string
        $city,          // s - string
        $image_url,     // s - string
        $resume_url,    // s - string
        $approval_status // s - string
    )) {
        error_log("MySQL bind error: " . $stmt->error);
        throw new Exception("Database error occurred: " . $stmt->error);
    }

    // Execute Query
    if (!$stmt->execute()) {
        // If query fails, delete the uploaded resume file
        if (!empty($resume_url) && file_exists($root_path . '/' . $resume_url)) {
            unlink($root_path . '/' . $resume_url);
        }
        error_log("MySQL execute error: " . $stmt->error);
        throw new Exception("Database error occurred: " . $stmt->error);
    }

    $response = [
        "status" => "success",
        "message" => "Profile submitted successfully. It will be visible after admin approval."
    ];

} catch (Exception $e) {
    error_log("Error in add_client.php: " . $e->getMessage());
    // Clean up uploaded file if there was an error
    if (!empty($resume_url) && file_exists($root_path . '/' . $resume_url)) {
        unlink($root_path . '/' . $resume_url);
    }
    $response = [
        "status" => "error",
        "message" => $e->getMessage()
    ];
}

// Send JSON response
echo json_encode($response);
exit;
