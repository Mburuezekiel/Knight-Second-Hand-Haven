<?php
// Define an array of categories
$categories = array(
    "Home & Office",
    "Electronics",
    "Phones & Accessories",
    "TVs & Audio Systems",
    "Clothes & Fashion",
    "Appliances",
    "Sports",
    "Gaming",
    "Baby Toys",
    "Garden & Outdoor",
    "Automotive"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Knight Second-Hand Haven</title>
    <link rel="shortcut icon" href="assets/logo1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Button styles */
        .btn-get-started {
            background-color: #2ACFCF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-get-started:hover {
            background-color: #1D9FA3;
        }
  /* Custom link styles */
  ul.list-unstyled li a {
            color: whitesmoke; /* Change link color */
            text-decoration: none; /* Remove underline */
        }

        ul.list-unstyled li a:hover {
            color: lightgray; /* Change link color on hover */
        }
    </style>
</head>
<body>
    <!-- Footer -->
    <footer style="background-color: #333; color: #fff; padding: 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="sell.php">Sell</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Product Categories</h5>
                    <ul class="list-unstyled">
                        <?php
                        // Loop through each category and generate the links
                        foreach ($categories as $category) {
                            echo "<li><a href='category.php?category={$category}'>$category</a></li>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-md-4">
                    Follow us: <br>
                    <a href="#"><i class="bi bi-facebook"></i></a> |
                    <a href="#"><i class="bi bi-twitter"></i></a> |
                    <a href="#"><i class="bi bi-instagram"></i></a><br>
                    <form action="subscribe.php" method="post">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <button type="submit" class="btn btn-get-started">Subscribe</button>
                    </form>
                </div>
                <div class="col-md-4">
                   
                    <p><a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a></p>
                </div>
            </div>
            <hr style="border-color: white;">
            
            <div class="text-center">
                <p>© <?php echo date("Y"); ?> Knight Second-Hand Haven. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
