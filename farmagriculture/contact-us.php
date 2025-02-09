<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Agriculture Products Sales System</title>
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
        <section>
            <h2>Get in Touch</h2>
            <form action="#" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </section>

        <section>
            <h2>Contact Information</h2>
            <p>If you have any questions, feel free to reach out to us:</p>
            <p>Email: support@agricultureproducts.com</p>
            <p>Phone: +255659263416/255756863416</p>
            <p>Address: 1861, Arusha Tanzania</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Agriculture Products Sales System. All rights reserved.</p>
    </footer>
</body>
</html>