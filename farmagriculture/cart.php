<?php
session_start(); // Start session to store cart data

// Initialize the cart if it's not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// If the user adds a product to the cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['quantity'];

    // Add product to the cart (or update quantity if already exists)
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['product_id'] == $product_id) {
            $item['quantity'] += $quantity; // Update the quantity
            $found = true;
            break;
        }
    }

    if (!$found) {
        $_SESSION['cart'][] = [
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'quantity' => $quantity
        ];
    }
}

// Remove an item from the cart
if (isset($_GET['remove'])) {
    $product_id = $_GET['remove'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['product_id'] == $product_id) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
    // Reindex the cart array to avoid empty keys
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

// Clear the cart
if (isset($_GET['clear_cart'])) {
    unset($_SESSION['cart']);
}

// Calculate total price of cart
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['product_price'] * $item['quantity'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart - Agriculture Products Sales System</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Agriculture Products Sales</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="vegetables.php">Products</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
                <li><a href="shopping-cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Your Shopping Cart</h2>

        <?php if (empty($_SESSION['cart'])): ?>
            <p>Your cart is empty.</p>
        <?php else: ?>
            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>

                <?php foreach ($_SESSION['cart'] as $item): ?>
                    <tr>
                        <td><?php echo $item['product_name']; ?></td>
                        <td>Tsh <?php echo number_format($item['product_price'], 2); ?></td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td>Tsh <?php echo number_format($item['product_price'] * $item['quantity'], 2); ?></td>
                        <td><a href="cart.php?remove=<?php echo $item['product_id']; ?>">Remove</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <p><strong>Total: Tsh <?php echo number_format($total, 2); ?></strong></p>

            <form action="checkout.php" method="post">
                <button type="submit">Proceed to Checkout</button>
            </form>

            <a href="cart.php?clear_cart=true">Clear Cart</a>
        <?php endif; ?>

    </main>

    <footer>
        <p>&copy; 2025 Agriculture Products Sales. All rights reserved.</p>
    </footer>
</body>
</html>
