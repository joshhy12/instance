<?php
// Include cart logic
include('cart.php');

// Check if product ID and quantity are provided
if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Update the quantity in the cart (Assuming cart is stored in session)
    if ($quantity > 0) {
        update_cart_item($product_id, $quantity);
    } else {
        // Remove the item if quantity is set to 0
        remove_from_cart($product_id);
    }

    // Redirect back to the cart page after updating
    header('Location: shopping-cart.php');
    exit();
}

// Function to update the quantity of an item in the cart
function update_cart_item($product_id, $quantity) {
    // Start session if not already started
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // If cart exists in session, update the quantity of the product
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] = $quantity;
    }
}

// Function to remove an item from the cart
function remove_from_cart($product_id) {
    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }
}
