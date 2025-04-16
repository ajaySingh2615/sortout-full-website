<?php
require_once '../../auth/auth.php';
require_once '../../includes/db_connect.php';

// Ensure only super admins can access
if ($_SESSION['role'] !== 'super_admin') {
    echo "Access Denied! Only super admins can manage jobs.";
    exit();
}

$errorMsg = "";
$successMsg = "";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $title = trim($_POST['title']);
    $companyName = trim($_POST['company_name']);
    $location = trim($_POST['location']);
    $minSalary = intval($_POST['min_salary']);
    $maxSalary = intval($_POST['max_salary']);
    
    // Debug job_type value
    error_log("Raw job_type value: " . print_r($_POST['job_type'], true));
    
    $jobType = trim($_POST['job_type']);
    
    // Ensure job_type is a string and not empty
    if (empty($jobType) || $jobType === "0") {
        $jobType = "Full Time"; // Default value if empty or 0
    }
    
    error_log("Processed job_type value: " . $jobType);
    
    $experience = trim($_POST['experience']);
    $educationLevel = isset($_POST['education_level']) && $_POST['education_level'] !== '0' ? trim($_POST['education_level']) : '';
    $description = trim($_POST['description']);
    
    // Debug the raw $_POST data to see what's being submitted
    error_log("RAW POST DATA FOR CATEGORY: " . (isset($_POST['category']) ? "'" . $_POST['category'] . "'" : "not set"));
    
    // Fix for category field - direct assignment from POST without additional checks
    $category = isset($_POST['category']) && $_POST['category'] !== '0' ? trim($_POST['category']) : '';
    
    // Ensure we never have null or "0" for category
    if (empty($category)) {
        $category = "";
    }
    
    error_log("Category value being stored: '" . $category . "' (type: " . gettype($category) . ")");
    
    $vacancies = isset($_POST['vacancies']) ? intval($_POST['vacancies']) : 1;
    $highDemand = isset($_POST['high_demand']) ? 1 : 0;
    $contactPerson = isset($_POST['contact_person']) && $_POST['contact_person'] !== '0' ? trim($_POST['contact_person']) : '';
    $interviewAddress = isset($_POST['interview_address']) && $_POST['interview_address'] !== '0' ? trim($_POST['interview_address']) : '';
    $incentives = isset($_POST['incentives']) && $_POST['incentives'] !== '0' ? trim($_POST['incentives']) : '';
    $workingDays = isset($_POST['working_days']) ? intval($_POST['working_days']) : 5;
    $workingHours = isset($_POST['working_hours']) && $_POST['working_hours'] !== '0' ? trim($_POST['working_hours']) : '';
    $isVerified = isset($_POST['is_verified']) ? 1 : 0;
    $isContract = isset($_POST['is_contract']) ? 1 : 0;
    
    // Ensure none of the text fields are '0'
    if ($jobType === '0') $jobType = '';
    if ($experience === '0') $experience = '';
    if ($description === '0') $description = '';
    
    // Basic validation
    if (empty($title) || empty($companyName) || empty($location) || $minSalary <= 0 || $maxSalary <= 0) {
        $errorMsg = "Please fill in all required fields.";
    } else if ($minSalary > $maxSalary) {
        $errorMsg = "Minimum salary cannot be greater than maximum salary.";
    } else {
        // Use a single prepared statement for all fields
        $sql = "INSERT INTO jobs (
            title, company_name, location, min_salary, max_salary, 
            job_type, experience, education_level, description, category,
            vacancies, high_demand, contact_person, interview_address,
            incentives, working_days, working_hours, is_verified, is_contract
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        
        // Bind all parameters directly
        $stmt->bind_param(
            "sssiisssssiisssiiii",
            $title, $companyName, $location, $minSalary, $maxSalary,
            $jobType, $experience, $educationLevel, $description, $category,
            $vacancies, $highDemand, $contactPerson, $interviewAddress,
            $incentives, $workingDays, $workingHours, $isVerified, $isContract
        );
        
        if ($stmt->execute()) {
            $successMsg = "Job added successfully!";
            // Clear form data on success
            $_POST = [];
        } else {
            $errorMsg = "Error adding job: " . $stmt->error;
        }
        
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Job</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(240,240,240,1) 100%);
            background-image: url("https://www.transparenttextures.com/patterns/cubes.png");
            background-repeat: repeat;
        }
        .form-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            padding: 2rem;
        }
        .form-label {
            font-weight: 600;
        }
        .required::after {
            content: "*";
            color: red;
            margin-left: 4px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center text-danger" href="#">
            Add New Job
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link fw-semibold px-3" href="job-dashboard.php">Job Dashboard</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold px-3" href="#" role="button" data-bs-toggle="dropdown">
                        👤 <?= $_SESSION['username']; ?> (<?= ucfirst($_SESSION['role']); ?>)
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="../../auth/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Spacing for Navbar -->
<div style="height: 80px;"></div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="form-container">
                <h2 class="mb-4">Add New Job</h2>
                
                <!-- Display error or success messages -->
                <?php if ($errorMsg): ?>
                    <div class="alert alert-danger"><?= $errorMsg ?></div>
                <?php endif; ?>
                
                <?php if ($successMsg): ?>
                    <div class="alert alert-success"><?= $successMsg ?></div>
                <?php endif; ?>
                
                <form method="POST" action="">
                    <div class="row">
                        <!-- Basic Information -->
                        <div class="col-md-6 mb-3">
                            <label for="title" class="form-label required">Job Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?= $_POST['title'] ?? '' ?>" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="company_name" class="form-label required">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="<?= $_POST['company_name'] ?? '' ?>" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="location" class="form-label required">Location</label>
                            <input type="text" class="form-control" id="location" name="location" value="<?= $_POST['location'] ?? '' ?>" required>
                        </div>
                        
                        <!-- Job Category -->
                        <div class="col-md-6 mb-3">
                            <label for="category" class="form-label required">Job Category</label>
                            <select class="form-select" id="category" name="category" required>
                                <option value="">Select a category</option>
                                <option value="IT & Software Development">IT & Software Development</option>
                                <option value="Marketing & Advertising">Marketing & Advertising</option>
                                <option value="Sales & Business Development">Sales & Business Development</option>
                                <option value="Human Resources & Recruitment">Human Resources & Recruitment</option>
                                <option value="Finance & Accounting">Finance & Accounting</option>
                                <option value="Operations & Supply Chain Management">Operations & Supply Chain Management</option>
                                <option value="Education & Training">Education & Training</option>
                                <option value="Healthcare & Medical">Healthcare & Medical</option>
                                <option value="Banking & Insurance">Banking & Insurance</option>
                                <option value="Media, Arts & Entertainment">Media, Arts & Entertainment</option>
                                <option value="Customer Service & Support">Customer Service & Support</option>
                                <option value="Manufacturing & Engineering">Manufacturing & Engineering</option>
                                <option value="Hospitality & Travel">Hospitality & Travel</option>
                                <option value="Legal & Compliance">Legal & Compliance</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        
                        <!-- Salary Information -->
                        <div class="col-md-6 mb-3">
                            <label for="min_salary" class="form-label required">Minimum Salary (₹)</label>
                            <input type="number" class="form-control" id="min_salary" name="min_salary" value="<?= $_POST['min_salary'] ?? '' ?>" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="max_salary" class="form-label required">Maximum Salary (₹)</label>
                            <input type="number" class="form-control" id="max_salary" name="max_salary" value="<?= $_POST['max_salary'] ?? '' ?>" required>
                        </div>
                        
                        <!-- Job Type and Experience -->
                        <div class="col-md-6 mb-3">
                            <label for="job_type" class="form-label required">Job Type</label>
                            <select class="form-select" id="job_type" name="job_type" required onchange="console.log('Job Type changed to: ' + this.value)">
                                <option value="">Select Job Type</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Contract">Contract</option>
                            </select>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="experience" class="form-label required">Experience Required</label>
                            <input type="text" class="form-control" id="experience" name="experience" value="<?= $_POST['experience'] ?? '' ?>" placeholder="e.g., 0 - 6 months, 1 - 3 years" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="education_level" class="form-label">Education Level</label>
                            <select class="form-select" id="education_level" name="education_level">
                                <option value="">Select Education Level</option>
                                <option value="All Education levels" <?= (isset($_POST['education_level']) && $_POST['education_level'] == 'All Education levels') ? 'selected' : '' ?>>All Education levels</option>
                                <option value="High School" <?= (isset($_POST['education_level']) && $_POST['education_level'] == 'High School') ? 'selected' : '' ?>>High School</option>
                                <option value="Bachelor's Degree" <?= (isset($_POST['education_level']) && $_POST['education_level'] == "Bachelor's Degree") ? 'selected' : '' ?>>Bachelor's Degree</option>
                                <option value="Master's Degree" <?= (isset($_POST['education_level']) && $_POST['education_level'] == "Master's Degree") ? 'selected' : '' ?>>Master's Degree</option>
                                <option value="Ph.D." <?= (isset($_POST['education_level']) && $_POST['education_level'] == 'Ph.D.') ? 'selected' : '' ?>>Ph.D.</option>
                            </select>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="vacancies" class="form-label">Number of Vacancies</label>
                            <input type="number" class="form-control" id="vacancies" name="vacancies" value="<?= $_POST['vacancies'] ?? '1' ?>" min="1">
                        </div>
                        
                        <!-- Working Hours and Days -->
                        <div class="col-md-6 mb-3">
                            <label for="working_hours" class="form-label">Working Hours</label>
                            <input type="text" class="form-control" id="working_hours" name="working_hours" value="<?= $_POST['working_hours'] ?? '09:00 AM - 06:00 PM' ?>" placeholder="e.g., 09:00 AM - 06:00 PM">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="working_days" class="form-label">Working Days Per Week</label>
                            <input type="number" class="form-control" id="working_days" name="working_days" value="<?= $_POST['working_days'] ?? '5' ?>" min="1" max="7">
                        </div>
                        
                        <!-- Contact Information -->
                        <div class="col-md-6 mb-3">
                            <label for="contact_person" class="form-label">Contact Person</label>
                            <input type="text" class="form-control" id="contact_person" name="contact_person" value="<?= $_POST['contact_person'] ?? '' ?>">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="incentives" class="form-label">Incentives</label>
                            <input type="text" class="form-control" id="incentives" name="incentives" value="<?= $_POST['incentives'] ?? '' ?>" placeholder="e.g., Performance bonus, Health insurance">
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <label for="interview_address" class="form-label">Interview Address</label>
                            <textarea class="form-control" id="interview_address" name="interview_address" rows="2"><?= $_POST['interview_address'] ?? '' ?></textarea>
                        </div>
                        
                        <!-- Job Description -->
                        <div class="col-md-12 mb-3">
                            <label for="description" class="form-label required">Job Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5" required><?= $_POST['description'] ?? '' ?></textarea>
                        </div>
                        
                        <!-- Additional Options -->
                        <div class="col-md-12 mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="high_demand" name="high_demand" value="1" <?= (isset($_POST['high_demand'])) ? 'checked' : '' ?>>
                                <label class="form-check-label" for="high_demand">High Demand</label>
                            </div>
                            
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="is_verified" name="is_verified" value="1" <?= (isset($_POST['is_verified'])) ? 'checked' : '' ?>>
                                <label class="form-check-label" for="is_verified">Verified</label>
                            </div>
                            
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="is_contract" name="is_contract" value="1" <?= (isset($_POST['is_contract'])) ? 'checked' : '' ?>>
                                <label class="form-check-label" for="is_contract">Contract Job</label>
                            </div>
                        </div>
                        
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">Add Job</button>
                            <a href="job-dashboard.php" class="btn btn-secondary ms-2">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap & jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
// Validation for form submission
document.querySelector('form').addEventListener('submit', function(e) {
    // Get the category value
    const categoryValue = document.getElementById('category').value;
    
    // Log for debugging
    console.log('Category value before submission:', categoryValue);
    
    // Check if category is empty or "0"
    if (!categoryValue || categoryValue === "0") {
        e.preventDefault(); // Prevent form submission
        alert('Please select a valid job category');
        return false;
    }
    
    // Additional validation for other fields can be added here
    return true;
});
</script>

</body>
</html> 