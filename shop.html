<?php
session_start();

// Include the database connection
include_once "database/conn.php";

// Check if the product ID is provided
if(isset($_POST['item_id'])) {
    // Retrieve product details from the database based on the product ID
    $item_id = $_POST['item_id'];
    $sql = "SELECT id, item_name, price FROM products WHERE id = ?";
    if ($stmt = $link->prepare($sql)) {
        // Bind the product ID parameter
        $stmt->bind_param("i", $item_id);
        // Execute the query
        $stmt->execute();
        // Bind the result variables
        $stmt->bind_result($id, $item_name, $price);
        // Fetch the result
        $stmt->fetch();
        // Close the statement
        $stmt->close();
    }

    // Check if the product exists
    if($id) {
        // Add product details to the cart session variable
        $cart_item = array(
            'item_id' => $id,
            'item_name' => $item_name,
            'price' => $price,
            'quantity' => 1 // Assuming quantity is initially set to 1
        );

        // Check if the cart session variable exists
        if(isset($_SESSION['cart'])) {
            // Append the new item to the existing cart array
            $_SESSION['cart'][] = $cart_item;
        } else {
            // Create a new cart array and add the item
            $_SESSION['cart'] = array($cart_item);
        }

        // Set success message
        $_SESSION['success_message'] = "Item has been added to the cart successfully.";

        // Redirect to the previous page or the shopping cart page
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit;
    } else {
        // Handle the case where the product does not exist
        echo "Product not found.";
    }
} else {
    // Handle the case where the product ID is not provided
    echo "";
}

// Close the database connection
$link->close();
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
    <?php   

include_once "database/conn.php";
 $connect = $link;
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["item_id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["item_id"],  
                     'item_name'               =>     $_POST["hidden_item_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["item_id"],  
                'item_name'               =>     $_POST["hidden_item_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["item_id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }  
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-Knight Second-Hand Haven</title>
      <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-kxjw7h8Dl3UpTHX/knN5BO0TdNcpaif7ifC6k4B6SQ8EzR1VzEYgu4h2ZOF7Is7c1iQgx2g6LSz5ME6xLH4c2w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="assets/logo1.jpg" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS styles */
        .container {
            display: flex;
            flex-direction: column;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header.btn btn-success{
        margin-top: 5px;
        }
        .heart-icon {
            position: absolute;
            bottom: 10px; /* Adjust the distance from the bottom */
            right: 10px; /* Adjust the distance from the right */
            font-size: 24px;
            color: #000; /* Default color */
            cursor: pointer;
        }
        .heart-icon.red {
            color: red; /* Red color for liked items */
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #F8F8FA;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .navbar h3 {
            margin: 0;
        }

        .sidebar {
            background-color: #f8f9fa;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            overflow-x: auto; /* Enable horizontal scrollbar */
            white-space: nowrap; /* Prevent line breaks */
        }

        .sidebar h5 {
            color: #333;
            margin-bottom: 10px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex; /* Ensure list items are displayed horizontally */
        }

        .sidebar li {
            margin-right
            : 10px; /* Add some spacing between list items */
        }

        .sidebar a {
            display: block;
            padding: 10px;
            background-color: yellow;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #e0a8ae;
        }

        .main-content {
            flex: 1;
        }

        .products {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between; /* Align products with space between */
}

@media (max-width: 992px) {
    .products {
        justify-content: space-around; /* Align products with space around */
    }
}

@media (max-width: 768px) {
    .products {
        justify-content: center; /* Align products in the center */
    }
}


        .product {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1 1 300px; /* Let products grow but don't shrink below 300px */
            min-width: 250px; /* Minimum width for each product */
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
            
        }

        .product h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }

        .product p {
            color: #777;
            margin-bottom: 10px;
        }

        .product button {
            background-color: #FFCA28;
            color: #333;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .product button:hover {
            background-color: #e0a8ae;
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
        }
    </style>
    <style>
    /* Style the button */
    input[type="submit"] {
       margin-top: 5px;
        color:white ; /*Button text color */
        border: none; /* Remove button border */
        padding: 10px 10px; /* Add padding to the button */
        border-radius: 5px; /* Add border radius to the button */
        cursor: pointer; /* Add cursor pointer on hover */
        font-size: 16px; /* Adjust font size */
        transition: background-color 0.3s; /* Add transition effect to background color */
    }

    /* Hover effect */
    input[type="submit"]:hover {
        background-color:orange; /* Change background color on hover */
    }
    .search-container {
            display: flex;
            margin top 3px;
             padding: 10px;
        }

        .search-container input[type=text] {
            flex: 1;
             margin top 3px;
            padding: 10px;
            border-radius: 5px 0 0 5px;
            border: none;
            border-right: 3;
        }

        .search-container button {
            padding: 10px 20px;
            background-color: #FFCA28;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-container button:hover {
            background-color: #e0a8ae;
        }
        .navbar-right .btn {
    margin-right: 5px; /* Add space between the links */
}

.navbar-right .dropdown {
    margin-right: 5px; /* Add space between the dropdown and other links */
}
.sidebar-header {
    padding: 10px;
    background-color: #f8f9fa; /* Same as sidebar background */
    border-bottom: 1px solid #ddd; /* Optional: Add a bottom border */
}

.sidebar-header h5 {
    margin: 0;
}

</style>
</head>
<body>

<!-- Header -->
<header class="bg-dark text-white py-4">
    <div class="container">
        <!-- Logo and Site Title -->
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="logo-container d-flex align-items-center">
                    <img src="assets/logo1.jpg" style="width: 70px;" alt="Logo">
                    <h3 class="ml-2 mb-0">Knight <br>Second-Hand<br>Haven</h3>
                </div>
            </div>
            <!-- Search Bar -->
            <div class="col-md-4">
                <form action="action_page.php" class="search-container">
                    <input type="text" placeholder="Search products, brands, and categories">
                    <button type="submit">Search</button>
                </form>
            </div>
            <!-- Toggle Bar for Other Navigation Links -->
            <div class="col-md-4">
                <div class="navbar-toggle-bar d-flex justify-content-end align-items-center mt-3">
                    <!-- Toggle Button -->
                    <button class="btn btn-sm btn-primary dropdown-toggle mr-3" type="button" id="toggleDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-list"></i> Menu
                        </button>
                    <!-- Dropdown Menu -->
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="toggleDropdown">
                         <a href="index.html" class="dropdown-item"><i class="bi bi-house-door"></i>Home</a>
                        <a href="sellindex.php" class="dropdown-item"><i class="bi bi-lightning"></i> Sell</a>
                        <a class="dropdown-item" href="cart.php"><i class="bi bi-bag-check"></i> Orders</a>
                        <a class="dropdown-item" href="cart.php"><i class="bi bi-heart"></i> Saved Items</a>
                        <a href="about.php" class="dropdown-item"><i class="bi bi-question"></i> About</a>
                    </div>
                  <!-- Cart Button -->
<div class="mt-2 mr-2">
    <button class="btn btn-sm btn-success" type="button">
        <a class="dropdown-item" href="cart.php"><i class="bi bi-heart"></i> Saved Items</a>
    </button>
</div>

                    <!-- Account Dropdown -->
                    <div class="dropdown">
                        <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="accountDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/logo1.jpg" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 5px;" alt="Profile Pic">
                            <?php echo $_SESSION['username']; ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="accountDropdown">
                               <?php
                            if (isset($_SESSION['username'])) {
                                // If user is logged in, display My Account and sign out options
                                echo '<a class="dropdown-item" href="#"><i class="bi bi-person"></i> My Account</a>';
                                echo '<a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-left"></i> Sign Out</a>';
                            } else {
                                // If user is not logged in, display sign in option
                                echo '<a class="dropdown-item" href="login.php"><i class="bi bi-box-arrow-in-right"></i> Sign In</a>';
                            }
                            ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Sidebar -->

      <div class="sidebar-header">
        <h5><b>Product Categories</b></h5>
    </div>
   <!-- Toggle button for the dropdown menu -->
<?php
// Start the session



// Check if the success message session variable exists
if (isset($_SESSION['success_message'])) {
    echo '<div id="success-message" class="alert alert-success" role="alert">' . $_SESSION['success_message'] . '</div>';
    // Unset the session variable to prevent it from being displayed again
    unset($_SESSION['success_message']);
}

?>
<script>
    // Function to close the success message
    function closeSuccessMessage() {
        var successMessage = document.getElementById("success-message");
        if (successMessage) {
            successMessage.style.display = "none"; // Hide the success message
        }
    }

    // Automatically close the success message after 5 seconds
    setTimeout(closeSuccessMessage, 5000);

    // Add event listener to close button
    document.addEventListener("DOMContentLoaded", function() {
        var closeButton = document.querySelector("#success-message .close");
        if (closeButton) {
            closeButton.addEventListener("click", closeSuccessMessage);
        }
    });
</script>



<div class="sidebar">
<!-- Dropdown menu -->
<ul class="dropdown-content" id="myDropdown">
    <!-- Fetch and display categories from database -->
    <?php
    include 'database/conn.php';
    $sql = "SELECT DISTINCT category FROM products";
    $result = $link->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<li><a href="category.php?category=' . urlencode($row['category']) . '">' . $row['category'] . '</a></li>';
        }
    }
    ?>
</ul>
</div>
<script>
    // JavaScript to toggle the dropdown menu
    document.addEventListener("DOMContentLoaded", function() {
        var dropdownBtn = document.querySelector(".dropdown-btn");
        dropdownBtn.addEventListener("click", function() {
            var dropdownContent = document.getElementById("myDropdown");
            dropdownContent.classList.toggle("show");
        });
    });
</script>

<style>
    /* CSS to hide the dropdown menu by default and show it when toggled */
    .dropdown-content {
        display: none;
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .dropdown-content.show {
        display: block;
    }
    .ad-container {
    position: fixed;
    bottom: 00px; /* Position at the bottom of the viewport */
    right: 5px; /* Position at the right side of the viewport */
    z-index: 1700; /* Adjust z-index as needed to ensure it appears on top */
}


.ad-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.ad-content .card {
    flex: 1 1 100%; /* Ensure the card takes full width */
    max-width: 200px; /* Adjust max-width as needed */
    margin-bottom: 2px;
}

.ad-content .card img {
    max-width: 100%;
    height: auto;
}

.ad-content .card .card-body {
    padding: 10px;
    text-align: center;
}

.ad-content .card .card-title {
    margin-bottom: 10px;
    font-size: 18px;
    font-weight: bold;
}

.ad-content .card .card-text {
    margin-bottom: 10px;
}

.ad-content .card .btn-primary {
    display: block;
    width: 100%;
}

</style>

</div>




<div id="adsContainer"></div>
<div class="main-content">
    
     <?php
// Include database connection
include 'database/conn.php';

// Fetch distinct categories from the database
$sql_categories = "SELECT DISTINCT category FROM products";
$result_categories = $link->query($sql_categories);

// Check if there are any categories
if ($result_categories->num_rows > 0) {
    // Loop through each category
    while ($category = $result_categories->fetch_assoc()) {
        echo '<nav class="navbar navbar-expand-lg navbar-light bg-warning mb-3" style="padding-top: 3px;">';
        echo '<a class="navbar-brand" href="#">' . $category['category'] . '</a>';
        echo '<a href="category.php?category=' . urlencode($category['category']) . '" class="see-more ml-auto">See more--></a>';
        echo '</nav>';
        echo '<div class="products">';
        
        // Fetch products for the current category
        $sql_products = "SELECT * FROM products WHERE category = '" . $category['category'] . "' LIMIT 3"; // Limit to 3 products for display
        $result_products = $link->query($sql_products);
        $Till_number="4134440";
     
        // Display products
        if ($result_products->num_rows > 0) {
            while ($product = $result_products->fetch_assoc()) {
                echo '<div class="product">';
                echo '<img src="' . $product['image'] . '" alt="' . $product['item_name'] . '">';
                echo '<i class="fas fa-heart heart-icon"></i>'; 
                echo '<h3>' . $product ['item_name'] . '</h3>';
                
                echo '<p class="card-text">Availability: ' . ($product['quantity'] > 0 ? 'In Stock' : 'Out of Stock') . '</p>'; // Show availability
                echo '<p>Status: ' . $product['status'] . '</p>';
                $description = $product['description'];
                $maxLength = 10; // Maximum length of the description to display

                echo '<p class="description">';
                if (strlen($description) > $maxLength) {
                    // If description is longer than maxLength, truncate and add "Read More" link
                    echo '<span class="truncated">' . substr($description, 0, $maxLength) . '...</span>';
                    echo '<span class="full" style="display:none;">' . $description . '</span>';
                    echo ' <a href="#" class="read-more">Read More</a>';
                } else {
                    // If description is within the maxLength, display the full description
                    echo $description;
                }
                echo '</p>';
                echo '<p>Price: Ksh ' . $product['price'] . '</p>';
                echo '<p>Location: ' . $product['location'] . '</p>';
                echo '<p><i class="fas fa-heart heart-icon"></i></p>';

   // Add to cart form with unique identifier
   echo '<form id="purchase_form_' . $product['item_id'] . '" action="pay.php" method="post" style="display: none;" " margin-right:10px;">';
   echo '<input type="hidden" name="item_id" value="' .  $product['item_id'] . '">';
   echo '<input type="hidden" name="item_name" value="' .  $product['item_name'] . '">';
   echo '<input type="hidden" name="price" value="' . $product['price'] . '">';
   echo '<input type="number" name="quantity" class="form-control" placeholder="Quantity" required/>';
   echo '<input type="submit" name="purchase_now" class="btn btn-primary" value="Purchase Now"/>';
   echo '</form>';
 
   // Purchase button to show the corresponding form
   echo '<button class="btn btn-primary purchase-btn" data-form-id="' . $product['item_id'] . '">Purchase Now</button>';
             
               // Generate WhatsApp link with the encoded message
$message = 'Hi, I am interested in your product: *' . urlencode($product['item_name']) . '*.' . "\n" .
           'Price: *Ksh ' . $product['price'] . '*.' . "\n" .
           'More details at: *' . urlencode("https://knight.businesscareerconsulting.co.ke//shop.php?product?item_id=" . $product['item_id']) . '*';

                // Format the contact number with +254 and replace the first digit
                 $contact_number = "+254115812700";
               // $contact_number = substr_replace($product['contact'], '+254', 0, 1);
                $whatsapp_link = 'https://wa.me/' . $contact_number . '?text=' . $message;
                
                // WhatsApp contact link
                echo '<a href="' . $whatsapp_link . '" class="btn btn-success contact-seller"><i class="bi bi-whatsapp"></i> Contact Seller</a>';
                
                echo '</div>'; // Close product container
            }
        }
        echo '</div>'; 
         echo '  </form>'  ;
// Close products container
    }
} else {
    // No categories found
    echo 'No categories found.';
}
?>

    </div>
   <script>
$(document).ready(function() {
    // Function to toggle heart icon color and save item to table
    $('.heart-icon').click(function() {
        $(this).toggleClass('red'); // Toggle heart color
        var productId = $(this).closest('.product').attr('data-product-id'); // Get product ID
        if ($(this).hasClass('red')) {
            // If heart is red, save item to table
            saveItem(productId);
        } else {
            // If heart is not red, remove item from table (optional)
            removeItem(productId);
        }
    });

    // Function to save item to table
    function saveItem(productId) {
        // AJAX request to save item to table
        $.ajax({
            type: 'POST',
            url: 'save_item.php', // Replace with actual PHP script to save item
            data: { productId: productId },
            success: function(response) {
                // Handle success response
                console.log('Item saved successfully.');
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error('Error saving item:', error);
            }
        });
    }

    // Function to remove item from table (optional)
    function removeItem(productId) {
        // AJAX request to remove item from table
        $.ajax({
            type: 'POST',
            url: 'remove_item.php', // Replace with actual PHP script to remove item
            data: { productId: productId },
            success: function(response) {
                // Handle success response
                console.log('Item removed successfully.');
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error('Error removing item:', error);
            }
        });
    }
});
</script>
    <script>
    // JavaScript to handle showing/hiding purchase forms
    document.addEventListener("DOMContentLoaded", function() {
        const purchaseButtons = document.querySelectorAll('.purchase-btn');
        purchaseButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const formId = this.getAttribute('data-form-id');
                const form = document.getElementById('purchase_form_' + formId);
                if (form) {
                    form.style.display = 'block';
                }
            });
        });

        // Toggle heart icon color
        const heartIcons = document.querySelectorAll('.heart-icon');
        heartIcons.forEach(function(heart) {
            heart.addEventListener('click', function() {
                if (heart.classList.contains('red')) {
                    heart.classList.remove('red'); // Remove red color if already liked
                } else {
                    heart.classList.add('red'); // Add red color if not liked
                    // Implement code to save liked product in the database
                }
            });
        });
    });
</script>
</div>
</div>
</div>
<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Find all elements with class "read-more"
    var readMoreButtons = document.querySelectorAll('.read-more');
    var lessButtons = document.querySelectorAll('.read-less');

    // Function to toggle description visibility
    function toggleDescription(paragraph) {
        var truncatedSpan = paragraph.querySelector('.truncated');
        var fullSpan = paragraph.querySelector('.full');
        truncatedSpan.style.display = 'none';
        fullSpan.style.display = 'inline';
    }

    // Function to toggle description visibility back to truncated
    function toggleTruncated(paragraph) {
        var truncatedSpan = paragraph.querySelector('.truncated');
        var fullSpan = paragraph.querySelector('.full');
        truncatedSpan.style.display = 'inline';
        fullSpan.style.display = 'none';
    }

    // Loop through each "Read More" button
    readMoreButtons.forEach(function(button) {
        // Add click event listener
        button.addEventListener('click', function(event) {
            // Prevent default link behavior
            event.preventDefault();

            // Find the parent paragraph element
            var paragraph = this.parentNode;

            // Toggle visibility of truncated and full description spans
            toggleDescription(paragraph);

            // Hide the "Read More" button and show the "Less" button
            this.style.display = 'none';
            paragraph.querySelector('.read-less').style.display = 'inline';
        });
    });

    // Loop through each "Read Less" button
    lessButtons.forEach(function(button) {
        // Add click event listener
        button.addEventListener('click', function(event) {
            // Prevent default link behavior
            event.preventDefault();

            // Find the parent paragraph element
            var paragraph = this.parentNode;

            // Toggle visibility back to truncated description
            toggleTruncated(paragraph);

            // Hide the "Less" button and show the "Read More" button
            this.style.display = 'none';
            paragraph.querySelector('.read-more').style.display = 'inline';
        });
    });
});
</script>

<div id="cartButton" style="cursor: pointer;">
    
</div>
<script>
    // JavaScript to handle click event on the cartButton div
    document.getElementById("cartButton").addEventListener("click", function() {
        // Redirect to the cart page without displaying the filename in the URL
        window.location.replace("cart.php");
    });
</script>



</body>
<!-- Footer -->
    <?php include 'footer.php'; ?>
</html>
