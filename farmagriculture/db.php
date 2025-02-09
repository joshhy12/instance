<?php
// Database configuration
$host = 'localhost';      // Your database host (usually localhost)
$username = 'root';       // Your database username
$password = '';           // Your database password (set it accordingly)
$dbname = 'farmagriculture';  // Your database name (change this to your actual DB name)

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If connection successful, you can proceed further
// echo "Connected successfully";

?>
