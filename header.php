<?php
session_start();

// Include the database connection
include_once "database/conn.php";

// Check if the product ID is provided
if(isset($_POST['item_id'])) 
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-Knight Second-Hand Haven</title>
    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-kxjw7h8Dl3UpTHX/knN5BO0TdNcpaif7ifC6k4B6SQ8EzR1VzEYgu4h2ZOF7Is7c1iQgx2g6LSz5ME6xLH4c2w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="assets/logo1.jpg" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add your custom CSS styles here */
        body {
        background-color:whitesmoke;
        color: black;
            text-align:center;
            align-items: center;
            padding-top: 100px; /* Adjust the body padding to make space for the fixed navbar */
        }
        /* Style the button */
    input[type="submit"] {
       /*  background-color:#4CAF50; Button background color */
        color:black ; /*Button text color */
        border: none; /* Remove button border */
        padding: 10px 20px; /* Add padding to the button */
        border-radius: 5px; /* Add border radius to the button */
        cursor: pointer; /* Add cursor pointer on hover */
        font-size: 16px; 
        margin-top: 10px;
        margin-right: 10px;/* Adjust font size */
        transition: background-color 0.3s; /* Add transition effect to background color */
    }

    /* Hover effect */
    input[type="submit"]:hover {
        background-color: orange; /* Change background color on hover */
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
        .navbar {
        padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <!-- Logo and Site Title -->
            <a class="navbar-brand" href="#">
                <img src="assets/logo1.jpg" width="50" height="50" class="d-inline-block align-top" alt="Logo">
                Knight Saver Mall
            </a>
            
            <!-- Navbar Toggle Button (for small screens) -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
             <!-- Search Bar -->
           <div class="col-md-4">
    <form action="action_page.php" class="search-container" method="GET">
        <input id="searchInput" type="text" name="query" placeholder="Search products, brands, and categories">
        <button type="submit">Search</button>
    </form>
</div>

<script>
    // Get the form element
    const form = document.querySelector('.search-container');

    // Add an event listener for form submission
    form.addEventListener('submit', function(event) {
        // Get the search input value
        const searchQuery = document.getElementById('searchInput').value;
        
        // Set the search query as the value of the input field
        document.querySelector('input[name="query"]').value = searchQuery;
    });
</script>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sell.php"> <i class="bi bi-cart-plu"></i>Sell</a>
                    </li>
                    <!-- Cart Button -->
                    <a href="#" class="btn btn-sm btn-success mr-3" id="cartButton" disabled>
    <i class="bi bi-cart-fill"></i> Cart
    <span id="cartCount" class="badge badge-pill badge-warning"><?php echo $cart_count; ?></span>
</a>

                    
                   
       <li class="nav-item">
    <!-- Account Dropdown -->
    <div class="dropdown">
        <a class="dropdown-item" href="#">
            
                <?php
            
                if (isset($_SESSION['username'])) {
                    // If user is logged in, display profile pic and username
                   
                    echo '<img src="assets/logo1.jpg" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 5px;" alt="Profile Pic">';
                    echo '<span>' . $_SESSION['username'] . '</span>'; // Display username
                    echo '</button>';
                    echo '<div class="dropdown-menu" aria-labelledby="accountDropdown">';
                    echo '<span class="dropdown-item-text">' . $_SESSION['username'] . '</span>'; // Display username in dropdown menu
                     echo '<span class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </span>';
                    echo '</div>';
                    echo '</div>';
                     
                } else {
                    // If user is not logged in, display sign in button
                    echo '<a href="login.php" class="btn btn-primary mr-3">Sign In</a>';
                   
                }
                
                ?>
            </i>
        </a>
    </div>
</li>


                </ul>
                
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Your Main Content Here -->
       
  <script>
    // Get cart count from localStorage if available
    var cartCount = localStorage.getItem('cartCount') || 0;
    updateCartCount(cartCount);

    // Function to update cart count
    function updateCartCount(count) {
        var cartCountElement = document.getElementById('cartCount');
        if (cartCountElement) {
            cartCountElement.innerText = count;
        }
    }
</script>

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            // Close dropdown when clicking outside
            $(document).on('click', function(event) {
                var $trigger = $('.navbar-toggler');
                if ($trigger !== event.target && !$trigger.has(event.target).length && $('.navbar-collapse').hasClass('show')) {
                    $('.navbar-collapse').collapse('hide');
                }        
            });

            // Toggle read more/less
            $('.read-more-link').click(function() {
                var $this = $(this);
                var $description = $this.prev('.description');
                var isExpanded = $this.hasClass('expanded');

                $description.toggleClass('expanded');
                $this.text(isExpanded ? 'Read more' : 'Read less');
            });
        });
    </script>
   
</body>
</html>
