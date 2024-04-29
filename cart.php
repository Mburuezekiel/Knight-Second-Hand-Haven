
<?php
session_start();
include_once "database/conn.php";

if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    // Retrieve items from the cart for the logged-in user
    $sql = "SELECT * FROM saved_items WHERE user_id = ?";
    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<h2>Saved Items</h2>";
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                $product_id = $row['product_id'];
                // Fetch product details
                $product_sql = "SELECT * FROM products WHERE product_id = ?";
                $product_stmt = $link->prepare($product_sql);
                $product_stmt->bind_param("i", $product_id);
                $product_stmt->execute();
                $product_result = $product_stmt->get_result();
                $product = $product_result->fetch_assoc();
                echo "<li>" . $product['product_name'] . " - $" . $product['product_price'] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "Cart is empty.";
        }
        $stmt->close();
    }
} else {
    echo "Please log in to view your saved items.";
}
?>

<title>Cart-Knight Saver</title>
<link rel="shortcut icon" href="assets/logo1.jpg" type="image/x-icon">
<div class="container1">
    <h4><i class="bi bi-cart-fill"></i> Shopping Cart</h4>
</div>

<style>
    /* Your custom CSS styles */
    .container1{
            background-color: orange;
            color: white;
            padding :10px;
            text-align:center;
        }
        /* Black line separation */
  .separator {
      border-top: 9px solid black;
      margin-top: 20px;
      margin-bottom: 20px;
  }
  .custom-btn {
      width: 100%; /* Adjust this value to make the button span the full width */
      padding: 20px 25px; /* Adjust the padding to make the button bigger */
      font-size: 20px; /* Adjust the font size to make the text bigger */
  }
  .product-item {
      margin-bottom: 20px;
      border: 1px solid #ccc;
      padding: 10px;
  }
  .product-image img {
      width: 100%;
      height: auto;
  }
</style>

<div class="separator"></div>

<?php if (!empty($cart_items)) : ?>
    <div class="container">
        <div class="row">
            <?php foreach ($cart_items as $item) : ?>
                <div class="col-md-4">
                    <div class="product-item">
                        <div class="product-image">
                            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['item_name']; ?>">
                        </div>
                        <div class="product-details">
                            <h4><?php echo $item['item_name']; ?></h4>
                            <p>Price: Ksh <?php echo $item['price']; ?></p>
                            <p>Availability: <?php echo ($item['available_quantity'] > 0 ? 'In Stock' : 'Out of Stock'); ?></p>
                            <p>Status: <?php echo $item['status']; ?></p>
                            <p>Description: <?php echo $item['description']; ?></p>
                            <p>Location: <?php echo $item['location']; ?></p>
                        </div>
                        <!-- Additional product actions/buttons if needed -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php else : ?>
    <p>Your cart is empty.</p>
<?php endif; ?>

<?php
// Include footer
include_once "footer.php";
// Close the database connection
$link->close();
?>