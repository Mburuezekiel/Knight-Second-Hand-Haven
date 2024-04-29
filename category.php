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
        .product-container {
            max-width: 1200px; /* Adjust the width as per your requirement */
            margin: 0 auto; /* Center align the container */
            position: relative; /* Make the container relative for absolute positioning */
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
    </style>
</head>

<body>
<?php
include 'header.php';
include 'database/conn.php';
if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $sql = "SELECT * FROM products WHERE category = '$category'";
    $result = $link->query($sql);
    if ($result->num_rows > 0) {
        echo '<h2 class="category-heading" style="background-color: orange;">' . strtoupper($category) . '</h2>';
        echo '<div class="container product-container">';
        echo '<div class="row">'; // Start row
        $count = 0;
        while ($row = $result->fetch_assoc()) {
            if ($count % 3 == 0 && $count != 0) {
                echo '</div><div class="row">'; // Start new row after every 3 items
            }
            echo '<div class="col-md-4 position-relative">'; // Each product occupies 4 columns in medium-sized screens (12 / 3 = 4)
            echo '<div class="product mb-4 shadow-sm text-black">'; // Changed text color to white
            echo '<img src="' . $row['image'] . '" class="img-fluid" alt="' . $row['item_name'] . '">';
            echo '<i class="bi bi-heart heart-icon"></i>'; // Empty heart icon
            echo '<div class="product-body">';
            echo '<h5 class="product-title">' . $row['item_name'] . '</h5>';

            // Truncated description code here

            echo '<p class="product-text">Status: ' . $row['status'] . '</p>';
            echo '<p class="product-text">Price: Ksh ' . $row['price'] . '</p>';
            $description = $row['description'];
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
            echo '<p class="product-text">Location: ' . $row['location'] . '</p>';

            // Add to cart form with unique identifier
            echo '<form id="purchase_form_' . $row['item_id'] . '" action="pay.php" method="post" style="display: none;" " margin-right:10px;">';
            echo '<input type="hidden" name="item_id" value="' . $row['item_id'] . '">';
            echo '<input type="hidden" name="item_name" value="' . $row['item_name'] . '">';
            echo '<input type="hidden" name="price" value="' . $row['price'] . '">';
            echo '<input type="number" name="quantity" class="form-control" placeholder="Quantity" required/>';
            echo '<input type="submit" name="purchase_now" class="btn btn-primary" value="Purchase Now"/>';
            echo '</form>';
          
            // Purchase button to show the corresponding form
            echo '<button class="btn btn-primary purchase-btn" data-form-id="' . $row['item_id'] . '">Purchase Now</button>';
          
            // WhatsApp contact link
            $message = 'Hi, I am interested in your product: ' . urlencode($row['item_name']) . '. Price: Ksh ' . $row['price'] . '. More details at: ' . urlencode("https://example.com/shop.php?item_id=" . $row['item_id']);
            $whatsapp_link = 'https://wa.me/254115812700?text=' . $message;
             // WhatsApp contact link
             echo '<a href="' . $whatsapp_link . '" class="btn btn-success contact-seller"><i class="bi bi-whatsapp"></i> Contact Seller</a>';
             echo '</div>'; // Close product-body
            echo '</div>'; // Close product
            echo '</div>'; // Close col-md-4
            $count++;
        }
        echo '</div>'; // Close row
        echo '</div>'; // Close container
    } else {
        echo '<div class="alert alert-warning" role="alert">No items found in this category.</div>';
    }
} else {
    header('Location: shop.php');
    exit();
}
?>

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
</body>
</html>
