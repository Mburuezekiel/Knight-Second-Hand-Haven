<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell - Knight Second-Hand Haven</title>
    <link rel="shortcut icon" href="assets/logo1.jpg" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add necessary CSS files and styles -->
    <style>
        /* Add your custom styles here */
        .navbar {
            background-color: black;
            color: white;
            padding: 20px;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-link {
            font-size: 18px;
            font-weight: bold;
            margin-right: 20px;
        }

        .sell-container {
            margin-top: 0%;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .sell-form {
            flex: 1;
            padding: 20px;
        }

        .sell-instructions {
            flex: 1;
            height: 100vh;
            padding: 20px;
            background-color: darkorange;
        }
        .sell-instructions.h3 {
            background-color: yellow;
        }

        .sell-form input[type="text"],
        .sell-form input[type="file"],
        .sell-form textarea {
            width: 100%;
            margin-bottom: 20px;
        }

        .sell-form button {
            padding: 10px 20px;
            background-color: #0FEC16;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .sell-form button:hover {
            background-color: #45a049;
        }

        .container mt-5 {
            margin-top: 0px;
            padding: 0%;
        }

        /* Celebratory background with nice ribbons */
        .celebratory-bg {
            background-image: url('https://via.placeholder.com/');
            background-repeat: no-repeat;
            background-size: cover;
            align-items: center;
            background-position: center;
            padding: 5px;
            border-radius: 10px;
        }
        .instruction-heading {
    background-color:skyblue;
    padding: 10px;
    display: inline-flex;
    align-items: center;
}

.instruction-heading i {
    margin-right: 10px;
    color: blue; /* Adjust icon color as needed */
}


        /* Black line separation */
        .separator {
            border-top: 9px solid black;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        /* Add this CSS to create the zigzag effect */
.zigzag-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.zigzag-item {
    width: calc(50% - 10px); /* Adjust the width as needed */
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
}

.zigzag-item:nth-child(odd) {
    transform: translateY(15px); /* Move odd items down */
}

.zigzag-item:nth-child(even) {
    transform: translateY(-15px); /* Move even items up */
}

.zigzag-img {
    width: 100%;
    height: auto;
    display: block;
}

.zigzag-description {
    padding: 15px;
}

    </style>
   
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/logo1.jpg" alt="Logo" style="width: 70px; height: 70px;">
           
        </a>
        <h4>Knight Saver|<br>Mall</h4>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a id="sell-list-link" class="nav-link" href="index.php">|Home</a>
            </li>
                <li class="nav-item">
                    <a id="sell-list-link" class="nav-link" href="fetch_sell_list.php">Sales List</a>
                </li>
              
                <li class="nav-item">
                    <a id="nav-link" class="nav-link" href="shop.php">Shop</a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link" href="#total-earnings">Total Earnings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="selllogout.php">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
        <a class="navbar-brand" href="#">Selling Your Item</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        </div>
    </div>
</nav>
                <div class="separator"></div>
            </div>
            </div>
            </div>
            </div>
             <!-- Main Content -->
           
<!-- Main Content -->
<div class="container">
   <div class="zigzag-container">
   
    <div class="zigzag-item">
        <div class="zigzag-description">
            <h3>Getting Started</h3>
            <p>
                Transform your unwanted treasures into cash with Knight Second-Hand Haven. Whether it's clothing, electronics, furniture, or more, our platform offers a hassle-free way to sell your pre-loved items. Simply create a listing, provide details and photos, set your price, and reach potential buyers across our vast network. With our secure transactions and seller protection, you can confidently turn clutter into currency. Join our community of sellers today and discover the ease of selling with Knight Saver Mall!
            </p>
        </div>
        <img src="assets\sell.jpeg" alt="Resume Writing" class="zigzag-img">
    </div><br>
    <div class="zigzag-item">
        <img src="assets/money.jpg" alt="Sell Item 2" class="zigzag-img">
        <div class="zigzag-description">
            <h3>Start Making Money</h3>
            <p>
                Sell your pre-loved items effortlessly with Knight Second-Hand Haven . Our platform provides a convenient way to list and sell your gently used goods to a wide audience of potential buyers. From clothing and accessories to electronics and home decor, we make it easy for you to turn your items into cash. Simply create a listing, add photos and details, set your price, and connect with interested buyers. With our user-friendly interface and secure payment options, selling your items has never been easier. Join our community of sellers today and start earning from your unwanted items!
            </p>
        </div>
    </div>
    <!-- Add more zigzag items as needed -->
</div>

</div>
<hr style="border-color: white;">
<hr style="border-color: #555;">
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
        <a class="navbar-brand" href="#">Sell Now</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        </div>
    </div>
</nav>


<!-- Main Content -->
<div class="container">
    <!-- Your main content goes here -->
</div>

            <div class="sell-container">
            
                <div class="sell-form">
                    <form action="process_sale.php" method="POST" enctype="multipart/form-data">
                        <label for="item_name">Item Name:</label>
                        <input type="text" id="item_name" name="item_name">

                        <label for="category">Category:</label>
                        <select id="category" name="category">
                            <option value="Home & Office">Home & Office</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Phones & Accessories">Phones & Accessories</option>
                            <option value="TVs & Audio Systems">TVs & Audio Systems</option>
                            <option value="Clothes & Fashion">Clothes & Fashion</option>
                            <option value="Appliances">Appliances</option>
                            <option value="Sports">Sports</option>
                            <option value="Gaming">Gaming</option>
                            <option value="Baby Toys">Baby Toys</option>
                            <option value="Garden & Outdoor">Garden & Outdoor</option>
                            <option value="Automotive"> Automotive</option>
                        </select><br>

                        <label for="description">Description:</label>
                        <textarea id="description" name="description" rows="4"></textarea>

                        <label for="price">Price (Ksh):</label>
                        <input type="text" id="price" name="price">

                        <!-- New Field: Quantity -->
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1">

                        <label for="status">Status:</label>
                        <select id="status" name="status">
                            <option value="new">New</option>
                            <option value="used">Used</option>
                        </select><br>

                        <label for="location">Location:</label>
                        <input type="text" id="location" name="location">

                        <label for="contact">Contact Information:</label>
                        <input type="text" id="contact" name="contact">

                        <label for="image">Upload Image(s) (Max 2):</label>
                        <input type="file" id="image" name="image[]" multiple accept="image/*">

                        <button type="submit">Sell Now</button>
                    </form>
                </div>
              
                <div class="sell-instructions">
    <h3 class="instruction-heading"><i class="bi bi-info-circle-fill"></i>  Selling Instructions</h3>


                    <p>Follow the steps below to sell your item on Knight Saver Mall:</p>
                    <ol>
                        <li>Fill in the details of your item in the form.</li>
                        <li>Click the "Submit" button to list your item for sale.</li>
                        <li>Your item will be displayed in the appropriate category on Knight Saver online Mall and in your Sales List.</li>
                    </ol>
                    <hr>
                    <img src="assets/seller.jpeg" style="width:100%">
                </div>
            </div>
           
        </div>
    </div>
</div>
<hr style="border-color: #555;">


<?php
// Include footer files
    include 'footer.php'; // Assuming you have a footer.php file with necessary HTML and scripts
    ?>
</body>
</html>
