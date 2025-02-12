<?php
//session_start();

// Database connection
$host = 'localhost';
$dbname = 'ocls_db';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate inputs
    if (empty($email) || empty($password)) {
        echo "Please fill in all fields.";
        exit();
    }

    // Fetch user from database
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = :email");
   // $stmt->execute(['email' => $email]);
   // $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Login successful
       // $_SESSION['id'] = $user['id'];
        header('Location: register.php'); // Redirect to home page
    } else {
        header("Location: index.php");
    }
        exit();
        // Login failed
        echo "Invalid email or password.";
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* General Styles */
body {
    font-family: Time New Roman, serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Form Container */
.form-container {
    background-color: #f0f0f0;
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    height:60%;
    max-width: 400px;
    text-align: center;
}

.form-container h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

/* Form Labels */
label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
    text-align: left;
}

/* Form Inputs */
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Error Messages */
.error {
    color: red;
    font-size: 14px;
    margin-top: 5px;
    text-align: left;
}

/* Submit Button */
button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    background-color: green;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.4s;
}

button[type="submit"]:hover {
    background-color: #555;
}

button[type="submit"]:active {
    background-color: #222;
}

/* Register Link */
.form-container p {
    margin-top: 15px;
    font-size: 14px;
}

.form-container p a {
    color: #333;
    text-decoration: none;
    font-weight: bold;
}

.form-container p a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>

    <!-- Login Form -->
    <div class="form-container">
        <h1>Login</h1>
        <form id="login-form" action=""" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <span id="email-error" class="error"></span>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <span id="password-error" class="error"></span>

            <button type="submit">Login</button>

        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
        </form>
        
    </div>
</body>
</html>