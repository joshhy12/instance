<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check user in database
    $sql = "SELECT id, username, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $username, $hashed_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
        $_SESSION["user_id"] = $id;
        $_SESSION["username"] = $username;
        echo "Login successful. <a href='index.php'>Go to Home</a>";
    } else {
        echo "Invalid email or password.";
    }

    $stmt->close();
    $conn->close();
}
?>

<form method="POST">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>
CART.PHP
<?php
session_start();
include 'db_connect.php';

// Add to cart
if (isset($_POST["product_id"])) {
    $product_id = $_POST["product_id"];
    $_SESSION["cart"][$product_id] = ($_SESSION["cart"][$product_id] ?? 0) + 1;
    echo "Product added to cart!";
}

// Display cart
if (!empty($_SESSION["cart"])) {
    echo "<h2>Your Cart</h2>";
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
    echo "<a href='checkout.php'>Proceed to Checkout</a>";
} else {
    echo "Your cart is empty.";
}
?>
