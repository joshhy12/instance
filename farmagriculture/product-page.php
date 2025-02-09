<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page - Agriculture Products Sales System</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body >
    
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
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">My Account</a>
                    <div class="dropdown-content">
                        <a href="register.php">Register Here</a>
                        <a href="login.php">Login</a>
                    </div>
                </li>
                <li><a href="shopping-cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="product-details">
            <h2>Vegetables</h2>
            <img src="images/lettuce.jpg" alt="Product Image">
            <p><strong>Description:</strong> Lettuce, Lactuca sativa, is a leafy herbaceous annual or biennial plant in the family Asteraceae grown for its leaves which are used as a salad green. </p>
            <p><strong>Price:</strong> Tsh 3500</p>
            
            <button>Add to Cart</button>
            <button>Add to Wishlist</button>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Agriculture Products Sales System. All rights reserved.</p>
    </footer>
</body>
</html>