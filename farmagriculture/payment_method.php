<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="payment-container">
    <div class="payment-header">
        <h1>Select Your Payment Method</h1>
        <p>Choose a payment method to complete your purchase.</p>
    </div>

    <div class="payment-options">
        <div class="payment-option">
            <h3>Credit Card</h3>
            <form action="process-credit-card.php" method="post">
                <button type="submit" class="payment-btn">Pay with Credit Card</button>
            </form>
        </div>

        <div class="payment-option">
            <h3>PayPal</h3>
            <form action="process-paypal.php" method="post">
                <button type="submit" class="payment-btn">Pay with PayPal</button>
            </form>
        </div>

        <div class="payment-option">
            <h3>Bank Transfer</h3>
            <form action="process-bank-transfer.php" method="post">
                <button type="submit" class="payment-btn">Pay with Bank Transfer</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
