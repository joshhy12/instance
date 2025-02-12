<?php
// Database connection details
$servername = "localhost";
$username = "root";  // Default username for XAMPP
$password = "";      // Default password is empty for XAMPP
$dbname = "jersey_shop";  // The database you created earlier

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jersey Shop</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional CSS link -->
</head>
<body>
    <h1>Welcome to Jersey Shop</h1>

    <div class="product-list">
        <?php
        if ($result->num_rows > 0) {
            // Output data for each product
            while($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<img src='" . $row['image'] . "' alt='" . $row['name'] . "'>";
                echo "<h3>" . $row['name'] . "</h3>";
                echo "<p>" . $row['description'] . "</p>";
                echo "<p>Price: $" . $row['price'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "No products available.";
        }
        ?>
    </div>

</body>
</html>

<?php
$conn->close();  // Close the connection
?>
