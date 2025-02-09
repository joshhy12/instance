<?php
// Handle Bank Transfer instructions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Provide bank transfer details to the user, and confirm the transfer.
    header("Location: payment-confirmation.php?status=bank-transfer");
    exit();
}
