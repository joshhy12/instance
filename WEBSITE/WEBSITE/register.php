<?php
require_once 'config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = array();
    
    // Get and sanitize input data
    $fullName = filter_var($_POST['fullName'], FILTER_SANITIZE_STRING);
    $regNumber = filter_var($_POST['regNumber'], FILTER_SANITIZE_STRING);
    $gender = filter_var($_POST['sex'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $region = filter_var($_POST['region'], FILTER_SANITIZE_STRING);
    $district = filter_var($_POST['district'], FILTER_SANITIZE_STRING);
    $password = $_POST['password'];

    // Validate inputs
    if (empty($fullName) || empty($regNumber) || empty($gender) || 
        empty($email) || empty($region) || empty($district) || empty($password)) {
        $response['status'] = 'error';
        $response['message'] = 'All fields are required';
        echo json_encode($response);
        exit;
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $response['status'] = 'error';
        $response['message'] = 'Email already registered';
        echo json_encode($response);
        exit;
    }

    // Check if registration number already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE reg_number = ?");
    $stmt->bind_param("s", $regNumber);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $response['status'] = 'error';
        $response['message'] = 'Registration number already exists';
        echo json_encode($response);
        exit;
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data
    $stmt = $conn->prepare("INSERT INTO users (full_name, reg_number, gender, email, region, district, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $fullName, $regNumber, $gender, $email, $region, $district, $hashedPassword);

    if ($stmt->execute()) {
        $response['status'] = 'success';
        $response['message'] = 'Registration successful';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Registration failed: ' . $conn->error;
    }

    echo json_encode($response);
}
?>
