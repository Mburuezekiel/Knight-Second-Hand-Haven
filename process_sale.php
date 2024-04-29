<?php
// Start the session
session_start();

// Check if seller is logged in
if (!isset($_SESSION['seller_logged_in'])) {
    // Redirect to login page
    header("location: sell_login.php");
    exit;
}

// Include the database connection
include_once "database/conn.php";

// Get the user ID from the session
$user_id = $_SESSION['seller_id'];

// Get form data
$item_name = $_POST['item_name'];
$category = $_POST['category'];
$description = $_POST['description'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];
$location = $_POST['location'];
$contact = $_POST['contact'];

// Handle image upload
$targetDir = "uploads/";
$imagesArr = [];
if (!empty($_FILES['image']['name'][0])) {
    foreach ($_FILES['image']['name'] as $key => $name) {
        $targetFile = $targetDir . basename($name);
        if (move_uploaded_file($_FILES['image']['tmp_name'][$key], $targetFile)) {
            $imagesArr[] = $targetFile;
        } else {
            // Store error message in session variable
            $_SESSION['error_message'] = "Error uploading $name.";
        }
    }
}

// Generate random item_id
$item_id = mt_rand(100000, 999999);

// Prepare the SQL statement to insert sell data into the database
$sql = "INSERT INTO products (item_id, seller_id, item_name, category, description, price, quantity, status, location, contact, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Execute the SQL statement
if ($stmt = $link->prepare($sql)) {
    // Bind parameters and execute
    $imagesString = implode(',', $imagesArr);
    $stmt->bind_param("iisssdissss", $item_id, $user_id, $item_name, $category, $description, $price, $quantity, $status, $location, $contact, $imagesString);

    if ($stmt->execute()) {
        // Success message
        $_SESSION['success_message'] = "Item has been listed successfully.";
    } else {
        // Error message
        $_SESSION['error_message'] = "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    // Error message
    $_SESSION['error_message'] = "Error: " . $link->error;
}

// Close the database connection
$link->close();

// Redirect to the sell form page after submission
header("location:fetch_sell_list.php");
exit;
?>
