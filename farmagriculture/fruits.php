<?php 
session_start(); // Start session to store cart data

// Check if the add to cart button is clicked
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['quantity'];

    // Check if the cart already exists in session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add product to the cart
    $_SESSION['cart'][] = [
        'product_id' => $product_id,
        'product_name' => $product_name,
        'product_price' => $product_price,
        'quantity' => $quantity
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits - Agriculture Products Sales System</title>
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
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Products</a>
                    <div class="dropdown-content">
                        <a href="vegetables.php">Vegetables</a>
                        <a href="fruits.php">Fruits</a>
                        <a href="organic-fertilizer.php">Organic Fertilizer</a>
                    </div>
                </li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
                <li><a href="shopping-cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Fruits</h2>
        <p>Explore our range of fresh and healthy fruits sourced directly from local farms.</p>

        <div class="products">
            <!-- Example product 1 -->
            <div class="product">
                <img src="images/apples.jpg" alt="Apple" width="200">
                <h3>Apple</h3>
                <p>Fresh and crispy apples, packed with vitamins and perfect for snacking.</p>
                <p><strong>$3.99 per kg</strong></p>
                <form action="fruits.php" method="post">
                    <input type="hidden" name="product_id" value="1">
                    <input type="hidden" name="product_name" value="Apple">
                    <input type="hidden" name="product_price" value="3.99">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" value="1" min="1" required>
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>

            <!-- Example product 2 -->
            <div class="product">
                <img src="images/bananas.jpg" alt="Banana" width="200">
                <h3>Banana</h3>
                <p>Sweet and ripe bananas, perfect for smoothies or a quick energy boost.</p>
                <p><strong>$1.99 per kg</strong></p>
                <form action="fruits.php" method="post">
                    <input type="hidden" name="product_id" value="2">
                    <input type="hidden" name="product_name" value="Banana">
                    <input type="hidden" name="product_price" value="1.99">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" value="1" min="1" required>
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>

            <!-- Example product 3 -->
            <div class="product">
                <img src="images/oranges.jpg" alt="Orange" width="200">
                <h3>Orange</h3>
                <p>Juicy and tangy oranges, a great source of vitamin C.</p>
                <p><strong>$2.49 per kg</strong></p>
                <form action="fruits.php" method="post">
                    <input type="hidden" name="product_id" value="3">
                    <input type="hidden" name="product_name" value="Orange">
                    <input type="hidden" name="product_price" value="2.49">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" value="1" min="1" required>
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>

            <!-- Example product 4 -->
            <div class="product">
                <img src="images/strew.jpg" alt="Strawberry" width="200">
                <h3>Strawberry</h3>
                <p>Fresh and sweet strawberries, perfect for desserts and snacks.</p>
                <p><strong>$5.99 per kg</strong></p>
                <form action="fruits.php" method="post">
                    <input type="hidden" name="product_id" value="4">
                    <input type="hidden" name="product_name" value="Strawberry">
                    <input type="hidden" name="product_price" value="5.99">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" value="1" min="1" required>
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>

            <!-- Repeat for more fruit products as needed -->

        </div>
    </main>

    <footer>
        <p>&copy; 2025 Agriculture Products Sales. All rights reserved.</p>
    </footer>
</body>
</html>
