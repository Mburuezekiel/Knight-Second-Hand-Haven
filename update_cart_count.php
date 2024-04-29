<?php
session_start();

// Check if the cart session variable exists and is not empty
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Calculate cart count
    $cart_count = count($_SESSION['cart']);
} else {
    // If cart is empty, set count to 0
    $cart_count = 0;
}

// Output cart count
echo $cart_count;
?>
