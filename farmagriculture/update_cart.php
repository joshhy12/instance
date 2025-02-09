<?php
// Include cart logic
include('cart.php');

// Ensure that product ID and quantity are provided in the POST request
if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    // Get product ID and quantity from the POST data
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Ensure quantity is a valid number (greater than 0)
    if ($quantity > 0) {
        // Update the cart with the new quantity
        update_cart_quantity($product_id, $quantity);
    } else {
        // If quantity is zero or less, remove the product from the cart
        remove_from_cart($product_id);
    }

    // Redirect back to the cart page after updating
    header('Location: shopping-cart.php');
    exit();
} else {
    // Handle case where product_id or quantity are not set
    echo "Error: Missing product ID or quantity.";
    exit();
}

// Function to update the cart quantity
function update_cart_quantity($product_id, $quantity) {
    // Start session if it's not already started
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Check if cart exists in session
    if (isset($_SESSION['cart'])) {
        // Check if the product is in the cart
        if (isset($_SESSION['cart'][$product_id])) {
            // Update the quantity for the product in the cart
            $_SESSION['cart'][$product_id]['quantity'] = $quantity;
        } else {
            // If the product is not found in the cart, handle it
            echo "Product not found in cart!";
            exit();
        }
    } else {
        // If no cart exists, handle the case
        echo "Cart not initialized!";
        exit();
    }
}

// Function to remove a product from the cart
function remove_from_cart($product_id) {
    // Start session if it's not already started
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Check if cart exists in session
    if (isset($_SESSION['cart'])) {
        // Check if the product is in the cart
        if (isset($_SESSION['cart'][$product_id])) {
            // Remove the product from the cart
            unset($_SESSION['cart'][$product_id]);
        } else {
            // If the product is not found in the cart, handle it
            echo "Product not found in cart!";
            exit();
        }
    } else {
        // If no cart exists, handle the case
        echo "Cart not initialized!";
        exit();
    }
}
