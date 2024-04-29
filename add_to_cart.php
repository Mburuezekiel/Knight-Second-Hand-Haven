<?php
session_start();
include_once "database/conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if product_id is provided
    if(isset($_POST['product_id'])) {
        $product_id = $_POST['product_id'];
        // Check if the user is logged in
        if(isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            // Add product to cart
            $sql = "INSERT INTO cart (user_id, product_id) VALUES (?, ?)";
            if ($stmt = $link->prepare($sql)) {
                $stmt->bind_param("ii", $user_id, $product_id);
                if ($stmt->execute()) {
                    $_SESSION['success_message'] = "Product added to cart successfully.";
                } else {
                    $_SESSION['error_message'] = "Failed to add product to cart.";
                }
                $stmt->close();
            }
        } else {
            $_SESSION['error_message'] = "You must be logged in to add products to cart.";
        }
    } else {
        $_SESSION['error_message'] = "Product ID is missing.";
    }
    header("Location: shop.php"); // Redirect to index page
    exit();
}
?>

<script>
    // JavaScript function to hide the success message after 3 seconds
    window.onload = function() {
        setTimeout(function() {
            var successMessage = document.querySelector('.alert-success');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 5000); // 3000 milliseconds = 3 seconds
    };
    </script>
