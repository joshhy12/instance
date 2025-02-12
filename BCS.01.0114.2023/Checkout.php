<?php
session_start();
include 'db_connect.php';

if (!empty($_SESSION["cart"])) {
    echo "<h2>Checkout</h2>";
    foreach ($_SESSION["cart"] as $id => $quantity) {
        $sql = "SELECT name, price FROM products WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($name, $price);
        $stmt->fetch();
        echo "<p>$name - Quantity: $quantity - Total: $" . ($price * $quantity) . "</p>";
        $stmt->close();
    }

    echo "<form method='POST' action='order.php'>
        <input type='text' name='address' placeholder='Shipping Address' required><br>
        <button type='submit'>Place Order</button>
    </form>";
} else {
    echo "Your cart is empty.";
}
?>
