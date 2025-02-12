<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout/title>
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.6;
}

/* Navigation Bar */
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 10px 20px;
}

nav .logo img {
    height: 50px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    padding: 10px 15px;
    transition: background-color 0.3s, color 0.3s;
}

nav ul li a:hover {
    background-color: #555;
    color: #ffcc00;
}

nav ul li a.active {
    background-color: #ffcc00;
    color: #333;
}

/* Logout Button */
nav ul li a.logout-button {
    background-color: #ff4444; /* Red color for logout button */
    border-radius: 5px;
}

nav ul li a.logout-button:hover {
    background-color: #cc0000; /* Darker red on hover */
}

/* Main Content */
.main-content {
    padding: 40px 20px;
    text-align: center;
}

.main-content h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

.main-content p {
    font-size: 18px;
}

/* Footer */
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
    margin-top: 40px;
}

footer p {
    margin: 0;
    font-size: 16px;
}
    </style>
</head>
<body>
        <a href=".php">Logout</a>
        </ul>
    </nav>

    <!-- Main Content -->
    <section class="main-content">
        <h1></h1>
        <p></p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025. All rights reserved.</p>
    </footer>

    document.querySelector('.logout-button').addEventListener('click', function(event) {
        if (!confirm('Are you sure you want to logout?')) {
            event.preventDefault(); // Prevent logout if user cancels
        }
    });
</body>
</html>