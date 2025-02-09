<?php 
// Include the database connection file
include 'db.php';

// Code to display featured products or other content can be added here.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Products Sales System</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        <section class="hero">
            <h2>Welcome to Our Agriculture Products Store</h2>
            <p>Your one-stop shop for eco-friendly farm products.</p>
            <div class="promotions">
                <h3>Buy more packages, get one 25% Discount</h3>
                <p>Check out our latest discounts and offers!</p>
            </div>

            <!-- Image Slider -->
            <div class="slider">
                <div class="slider-images">
                    <img src="images/bananas.jpg" alt="Slider Image 1">
                    <img src="images/seeds.jpg" alt="Slider Image 2">
                    <img src="images/fertilizer.jpg" alt="Slider Image 3">
                </div>
                <div class="slider-controls">
                    <button class="prev">❮</button>
                    <button class="next">❯</button>
                </div>
            </div>

        </section>

        <section class="featured-products">
            <h2>Featured Products</h2>
            <div class="product-list">
                <?php
                // Database connection and product fetching logic here
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Agriculture Products Sales. All rights reserved.</p>
    </footer>

    <script>
        // jQuery for slider functionality
        $(document).ready(function(){
            let currentIndex = 0;
            const images = $('.slider-images img');
            const totalImages = images.length;

            // Function to move the slider to the correct image
            function showImage(index) {
                const newPosition = -index * 100 + '%';
                $('.slider-images').css('transform', 'translateX(' + newPosition + ')');
            }

            // Next Button click event
            $('.next').click(function() {
                currentIndex = (currentIndex + 1) % totalImages;
                showImage(currentIndex);
            });

            // Previous Button click event
            $('.prev').click(function() {
                currentIndex = (currentIndex - 1 + totalImages) % totalImages;
                showImage(currentIndex);
            });

            // Auto slide functionality (Optional, can be enabled or removed)
            setInterval(function() {
                currentIndex = (currentIndex + 1) % totalImages;
                showImage(currentIndex);
            }, 5000); // Slide every 5 seconds
        });
    </script>
</body>
</html>
