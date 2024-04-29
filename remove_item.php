<?php
// Include database connection
include 'database/conn.php';

// Check if productId is set and not empty
if (isset($_POST['productId']) && !empty($_POST['productId'])) {
    $productId = $_POST['productId'];

    // Perform database operation to remove the item (replace placeholders with actual table and column names)
    $sql = "DELETE FROM saved_items WHERE product_id = '$productId'";
    if ($link->query($sql) === TRUE) {
        echo "Item removed successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }
} else {
    echo "Error: Product ID is not set or empty.";
}
?>
