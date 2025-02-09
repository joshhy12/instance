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
    <title>Vegetables - Agriculture Products Sales System</title>
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
        <h2>Vegetables</h2>
        <p>Explore our range of fresh vegetables sourced directly from local farms.</p>

        <div class="products">
            <!-- Example product 1 - Tomatoes -->
            <div class="product">
                <img src="images/nyanya.jpg" alt="Tomatoes" width="200">
                <h3>Tomatoes</h3>
                <p>Fresh, juicy tomatoes, perfect for your meals.</p>
                <p><strong>$2.99 per kg</strong></p>
                <form action="vegetables.php" method="post">
                    <input type="hidden" name="product_id" value="1">
                    <input type="hidden" name="product_name" value="Tomatoes">
                    <input type="hidden" name="product_price" value="2.99">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" value="1" min="1" required>
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>

            <!-- Example product 2 - Carrots -->
            <div class="product">
                <img src="images/carrots.jpg" alt="Carrots" width="200">
                <h3>Carrots</h3>
                <p>Sweet and crunchy carrots, ideal for salads or snacking.</p>
                <p><strong>$1.99 per kg</strong></p>
                <form action="vegetables.php" method="post">
                    <input type="hidden" name="product_id" value="2">
                    <input type="hidden" name="product_name" value="Carrots">
                    <input type="hidden" name="product_price" value="1.99">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" value="1" min="1" required>
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>

            <!-- Example product 3 - Spinach -->
            <div class="product">
                <img src="images/spinach.jpg" alt="Spinach" width="200">
                <h3>Spinach</h3>
                <p>Fresh spinach, packed with iron, perfect for healthy meals.</p>
                <p><strong>$3.49 per kg</strong></p>
                <form action="vegetables.php" method="post">
                    <input type="hidden" name="product_id" value="3">
                    <input type="hidden" name="product_name" value="Spinach">
                    <input type="hidden" name="product_price" value="3.49">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" value="1" min="1" required>
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>

            <!-- Example product 4 - Broccoli -->
            <div class="product">
                <img src="images/broco.jpg" alt="Broccoli" width="200">
                <h3>Broccoli</h3>
                <p>Fresh and green broccoli, a great source of vitamins and antioxidants.</p>
                <p><strong>$4.50 per kg</strong></p>
                <form action="vegetables.php" method="post">
                    <input type="hidden" name="product_id" value="4">
                    <input type="hidden" name="product_name" value="Broccoli">
                    <input type="hidden" name="product_price" value="4.50">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" value="1" min="1" required>
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>

            <!-- Example product 5 - Cucumbers -->
            <div class="product">
                <img src="images/cucu.jpg" alt="Cucumbers" width="200">
                <h3>Cucumbers</h3>
                <p>Crisp cucumbers, ideal for salads or fresh snacks.</p>
                <p><strong>$1.50 per kg</strong></p>
                <form action="vegetables.php" method="post">
                    <input type="hidden" name="product_id" value="5">
                    <input type="hidden" name="product_name" value="Cucumbers">
                    <input type="hidden" name="product_price" value="1.50">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" value="1" min="1" required>
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>

        </div>
    </main>

    <footer>
        <p>&copy; 2025 Agriculture Products Sales. All rights reserved.</p>
    </footer>
</body>
</html>
