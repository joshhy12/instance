<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_SESSION["cart"])) {
    $user_id = $_SESSION["user_id"];
    $address = $_POST["address"];

    // Insert into orders table
    $sql = "INSERT INTO orders (user_id, address, status) VALUES (?, ?, 'Pending')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $user_id, $address);
    if ($stmt->execute()) {
        $order_id = $stmt->insert_id;
        foreach ($_SESSION["cart"] as $id => $quantity) {
            $sql = "INSERT INTO order_items (order_id, product_id, quantity) VALUES (?, ?, ?)";
            $stmt2 = $conn->prepare($sql);
            $stmt2->bind_param("iii", $order_id, $id, $quantity);
            $stmt2->execute();
            $stmt2->close();
        }
        echo "Order placed successfully! <a href='index.php'>Go back to shop</a>";
        unset($_SESSION["cart"]); // Clear cart after order
    } else {
        echo "Error placing order.";
    }
    $stmt->close();
}
?>
