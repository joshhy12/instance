<?php
$db_host = 'localhost';
$db_user = 'root'; // Update with your MySQL username
$db_pass = ''; // Update with your MySQL password
$db_name = 'jimmy_tours'; // Changed to match the database name from registration.sql

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

$fullName = $conn->real_escape_string($_POST['fullName']);
$regNumber = $conn->real_escape_string($_POST['regNumber']);
$sex = $conn->real_escape_string($_POST['sex']);
$email = $conn->real_escape_string($_POST['email']);
$region = $conn->real_escape_string($_POST['region']);
$district = $conn->real_escape_string($_POST['district']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (full_name, reg_number, sex, email, region, district, password) 
        VALUES ('$fullName', '$regNumber', '$sex', '$email', '$region', '$district', '$password')";

if ($conn->query($sql)) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['error' => $conn->error]);
}

$conn->close();
?>
