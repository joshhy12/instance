<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'jimmy_tours';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$tourType = $conn->real_escape_string($_POST['tour-type']);
$tourDate = $conn->real_escape_string($_POST['tour-date']);

$sql = "INSERT INTO booking_inquiries (name, email, phone, tour_type, tour_date) VALUES ('$name', '$email', '$phone', '$tourType', '$tourDate')";

if ($conn->query($sql)) {
    echo json_encode(['success' => 'Inquiry submitted successfully']);
} else {
    echo json_encode(['error' => 'Error: ' . $conn->error]);
}

$conn->close();
?>
