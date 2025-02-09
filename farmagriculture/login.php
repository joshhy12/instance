<?php
// Include the database connection file
include('db.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate inputs
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query to get the user by email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // User found
        $user = $result->fetch_assoc();
        // Verify the password
        if (password_verify($password, $user['password'])) {
            echo "Login successful!";
            // Redirect to the dashboard or account page
        } else {
            echo "Invalid email or password!";
        }
    } else {
        echo "No user found with that email!";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>User Login</h1>
    </header>

    <main>
        <form method="POST" action="login.php">
            <label for="email">Email</label>
            <input type="email" name="email" required>
            
            <label for="password">Password</label>
            <input type="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2025 Agriculture Products Sales. All rights reserved.</p>
    </footer>
</body>
</html>
