<?php
session_start();

require_once 'connect.php';

// Function to sanitize input data
function sanitize_input($data) {
    global $conn;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return mysqli_real_escape_string($conn, $data);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize all inputs
    $name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
    $mobile = isset($_POST['mobile']) ? sanitize_input($_POST['mobile']) : '';
    $dob = isset($_POST['dob']) ? sanitize_input($_POST['dob']) : '';
    $gender = isset($_POST['gender']) ? sanitize_input($_POST['gender']) : '';
    $address = isset($_POST['address']) ? sanitize_input($_POST['address']) : '';
    $emp_type = isset($_POST['emp_type']) ? sanitize_input($_POST['emp_type']) : '';
    $terms = isset($_POST['terms']) ? 1 : 0;

    // Validate required fields
    $errors = array();
    
    if (empty($name)) $errors[] = "Name is required";
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    if (empty($mobile)) {
        $errors[] = "Mobile number is required";
    } elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
        $errors[] = "Invalid mobile number format";
    }
    if (empty($dob)) $errors[] = "Date of Birth is required";
    if (empty($gender)) $errors[] = "Gender is required";
    if (empty($address)) $errors[] = "Address is required";
    if (empty($emp_type)) $errors[] = "Employee Type is required";
    if (!$terms) $errors[] = "You must agree to the Terms and Conditions";

    // If there are no errors, process the form
    if (empty($errors)) {
        // Create SQL query
        $sql = "INSERT INTO users (name, email, mobile, dob, gender, address, emp_type, terms) 
                VALUES ('$name', '$email', '$mobile', '$dob', '$gender', '$address', '$emp_type', $terms)";
        
        // Execute query
        if (mysqli_query($conn, $sql)) {
            $_SESSION['success'] = "Form submitted successfully! Thank you, " . $name . "!";
        } else {
            $_SESSION['error'] = "Database error: " . mysqli_error($conn);
        }
    } else {
        // If there are errors, store them in the session
        $_SESSION['error'] = "Please correct the following errors:<br>" . implode("<br>", $errors);
    }
} else {
    $_SESSION['error'] = "Invalid request method";
}

// Close connection and redirect
mysqli_close($conn);
header("Location: index.php");
exit();
?>