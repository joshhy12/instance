<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $transaction_method = $_POST['transaction_method'];
    $phone_number = $_POST['phone_number'];
    $payment_status = $_POST['payment_status'];
    $service_type = $_POST['service_type'];

    // Insert payment details into the database
    $stmt = $conn->prepare("INSERT INTO payments (username, transaction_method, phone_number, payment_status, service_type) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $transaction_method, $phone_number, $payment_status, $service_type);

    if ($stmt->execute()) {
        echo " congratulation dear customer your Payment  successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
