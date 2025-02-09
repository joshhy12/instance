<?php
// process-payment.php

// Get the selected payment method
$paymentMethod = $_POST['payment-method'];

if ($paymentMethod == 'credit-card') {
    // Process credit card payment (example)
    $cardNumber = $_POST['card-number'];
    $expiryDate = $_POST['expiry-date'];
    $cvv = $_POST['cvv'];

    // Here, you'd call a payment gateway API (e.g., Stripe, PayPal) to process the credit card details.

} elseif ($paymentMethod == 'paypal') {
    // Process PayPal payment (example)
    $paypalEmail = $_POST['paypal-email'];

    // Here, you'd redirect to PayPal or use PayPal's API to process the payment.

} elseif ($paymentMethod == 'bank-transfer') {
    // Process bank transfer (example)
    $bankAccount = $_POST['bank-account'];

    // Here, you'd manually process the bank transfer or generate transfer details.

} else {
    echo "Invalid payment method!";
    exit;
}

// Once processed, confirm the payment or show a success message
echo "Payment processed successfully! Thank you for your purchase.";
?>
