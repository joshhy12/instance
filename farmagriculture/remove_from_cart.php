<?php
// Start the session to access the cart stored in $_SESSION
session_start();

// Function to remove an item from the cart
function remove_from_cart($product_id) {
    // Check if the cart exists in the session
    if (isset($_SESSION['cart'])) {
        // Loop through the cart to find the item and remove it
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] == $product_id) {
                // Remove the item by unsetting the item in the cart
                unset($_SESSION['cart'][$key]);
                // Re-index the cart array to prevent gaps in the indices
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                break;
            }
        }
    }
}
?>
