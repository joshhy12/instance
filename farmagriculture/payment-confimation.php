<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="confirmation-container">
    <h1>Payment Confirmation</h1>
    <p>Thank you for your purchase! Below is the summary of your order.</p>

    <div class="confirmation-details">
        <h2>Order Summary</h2>
        <p><strong>Name:</strong> <?php echo $_POST['email']; ?></p>
        <p><strong>Phone Number:</strong> <?php echo $_POST['phone']; ?></p>
        <p><strong>Shipping Address:</strong> <?php echo $_POST['address'] . ", " . $_POST['city'] . ", " . $_POST['state'] . ", " . $_POST['zip']; ?></p>
        <p><strong>Payment Method:</strong> <?php echo $_POST['payment-method']; ?></p>

        <h3>Shopping Cart</h3>
        <p>Product Name 1 - Quantity: 2 - Price: $20.00</p>
        <p>Product Name 2 - Quantity: 1 - Price: $15.00</p>

        <div class="cart-total">
            <p><strong>Total Price:</strong> $55.00</p>
        </div>

        <h3>Payment Status</h3>
        <p>Your payment is being processed. Once your payment is confirmed, you will receive an email with the details.</p>
    </div>

    <div class="confirmation-actions">
        <a href="index.php" class="btn">Return to Home</a>
    </div>
</div>

</body>
</html>
