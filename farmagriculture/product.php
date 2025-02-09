<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Agriculture Products Sales System</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
         /* Basic styles for the page */
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        header nav ul {
            list-style-type: none;
            padding: 0;
        }
        header nav ul li {
            display: inline;
            margin-right: 20px;
        }
        header nav ul li a {
            color: white;
            text-decoration: none;
        }

        /* Slider Styles */
        .slider {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden; /* Hides images that are out of view */
        }
        .slider-images {
            display: flex;
            transition: transform 1s ease-in-out; /* Smooth transition for sliding images */
        }
        .slider-images img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        .slider-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }
        .slider-controls button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 50px;
        }
        .hero h2 {
            font-size: 2.5em;
        }
        .hero p {
            font-size: 1.2em;
            margin: 10px 0;
        }

        /* Featured Products */
        .featured-products {
            padding: 50px;
            background-color: #ecf0f1;
        }
        .featured-products h2 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
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
        <section class="product-list">
            <h2>All Products</h2>
            <div class="products">
                <div class="product-item">
                    <img src="images/apples.jpg" alt="Product 1">
                    <h3>Apples</h3>
                    <p>The apple is one of the pome (fleshy) fruits. Apples at harvest vary widely in size, shape, colour, and acidity, but most are fairly round and some shade of red or yellow</p>
                    <a href="product-page.html">View Details</a>
                </div>
                <div class="product-item">
                    <img src="images/bananas.jpg" alt="Product 2">
                    <h3>Bananas</h3>
                    <p>A banana is a curved, yellow fruit with a thick skin and soft sweet flesh. If you eat a banana every day for breakfast, your roommate might nickname you "the monkey." A banana is a tropical fruit that's quite popular all over the world.</p>
                    <a href="product-page.html">View Details</a>
                </div>
                <div class="product-item">
                    <img src="images/nyanya.jpg" alt="Product 3">
                    <h3>Tomattoes</h3>
                    <p>Tomatoes are a garden favorite and the most popular homegrown vegetable. The fruits come in various colors from yellow to red to purple and size small to large. Tomatoes are grown as an annual, but in frost-free climates, they are perennials.</p>
                    <a href="product-page.html">View Details</a>
                </div>
                <!-- More products can be added here -->
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Agriculture Products Sales System. All rights reserved.</p>
    </footer>
</body>
</html>