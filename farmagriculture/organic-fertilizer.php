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
    <title>Organic Fertilizer - Agriculture Products Sales System</title>
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
        <h2>Organic Fertilizer</h2>
        <p>Explore our selection of organic fertilizers to enhance the growth of your plants and improve soil health. All our fertilizers are eco-friendly and made from natural ingredients.</p>

        <div class="products">
            <!-- Product 1: Organic Compost -->
            <div class="product">
                <img src="images/organic.jpg" alt="Organic Compost" width="200">
                <h3>Organic Compost</h3>
                <p>This high-quality compost is perfect for enriching soil and promoting plant growth.</p>
                <p><strong>$15.99 per kg</strong></p>
                <form action="organic-fertilizer.php" method="post">
                    <input type="hidden" name="product_id" value="1">
                    <input type="hidden" name="product_name" value="Organic Compost">
                    <input type="hidden" name="product_price" value="15.99">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" value="1" min="1" required>
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>

            <!-- Product 2: Organic Manure -->
            <div class="product">
                <img src="images/manure.jpg" alt="Organic Manure" width="200">
                <h3>Organic Manure</h3>
                <p>Improve soil fertility and promote plant growth with our nutrient-rich organic manure.</p>
                <p><strong>$12.99 per kg</strong></p>
                <form action="organic-fertilizer.php" method="post">
                    <input type="hidden" name="product_id" value="2">
                    <input type="hidden" name="product_name" value="Organic Manure">
                    <input type="hidden" name="product_price" value="12.99">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" value="1" min="1" required>
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>

            <!-- Product 3: Vermicompost -->
            <div class="product">
                <img src="images/vermi.jpg" alt="Vermicompost" width="200">
                <h3>Vermicompost</h3>
                <p>Enhance soil structure and fertility with our organic vermicompost made from earthworms.</p>
                <p><strong>$18.99 per kg</strong></p>
                <form action="organic-fertilizer.php" method="post">
                    <input type="hidden" name="product_id" value="3">
                    <input type="hidden" name="product_name" value="Vermicompost">
                    <input type="hidden" name="product_price" value="18.99">
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
