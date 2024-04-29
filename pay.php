<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="shortcut icon" href="assets/logo1.jpg" type="image/x-icon">
    <!-- Include your CSS stylesheets here -->
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            padding: 20px;
            background-color: orange;
            text-align: center;
            margin-bottom: 20px;
        }
        .section-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .confirm-btn {
            text-align: center;
            margin-top: 20px;
        }
        .btn {
            background-color: green;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .login-form {
            margin: 0 auto;
            max-width: 300px;
            text-align: center;
        }
        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form input[type="submit"] {
            width: 100%;
            margin-top: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
    </style>
</head>
<body onload="initMap()">

    <h1>Knight Second-Hand Haven - Payment</h1>
    
    <div class="container">
    <?php
    session_start();
    include('database/conn.php');
 
    // Check if the user is logged in
    if(isset($_SESSION["username"])) {
        // Fetch user details from the database
        $user_id = $_SESSION["id"];
        $query = "SELECT * FROM users WHERE id = $user_id";
        $result = mysqli_query($link, $query);
        $user = mysqli_fetch_assoc($result);
        
        // Store user details in session
        $_SESSION['phone_number'] = $user['phone_number'];

        // Display user information
        ?>
        <div class="address-info">
            <div class="section-title">Customer Address</div>
            <div><strong>Name:</strong><?php echo $_SESSION['username']; ?></div>
            <div><strong>Phone_number:</strong><?php echo isset($_SESSION['phone_number']) ? $_SESSION['phone_number'] : ''; ?> </div>
            <div><strong>Email:</strong><?php echo $_SESSION['email']; ?></div>
        </div>
    <?php
    } else {
        // Display login form
        ?>
        <div class="login-form">
            <form action="processlogin.php" method="POST">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Login">
            </form>
        </div>
    <?php
    }

    $station = "Kiambu";
    ?>
    <br><br>
    <div class="delivery-details">
        <div class="section-title">Delivery Details</div>
        (from KSh 159), Nairobi
        <div>Delivery takes 2-3 days</div>
        
        <div>
            <label for="pickup-station">Pick-up Station:</label>
            <select id="pickup-station" name="pickup-station"></select>
        </div>
    </div>

    <div id="map" style="height: 400px;"></div>

    <script>
        // Initialize Google Map
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -1.286389, lng: 36.817223}, // Nairobi coordinates
                zoom: 12
            });

            // Initialize Places Autocomplete
            var input = document.getElementById('pickup-station');
            var autocomplete = new google.maps.places.Autocomplete(input);

            // Set the bounds to Nairobi
            autocomplete.setComponentRestrictions({ 'country': 'KE' });

            // Add listener for place selection
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("No details available for input: '" + place.name + "'");
                    return;
                }

                // Store selected pickup station in session
                var pickupStation = place.name;
                sessionStorage.setItem('pickupStation', pickupStation);
            });
        }
    </script>
    <?php
    // Retrieve pickup station from session
    $station = isset($_SESSION['pickupStation']) ? $_SESSION['pickupStation'] : 'Kiambu';
    ?>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuUOTUQCvOtgiITDaGbDErEYk6_y5QsEk&libraries=places"></script>

    <?php
    // Store the product details in session variables
    $_SESSION['item_name'] = isset($_POST['item_name']) ? $_POST['item_name'] : '';
    $_SESSION['price'] = isset($_POST['price']) ? $_POST['price'] : '';
    $_SESSION['image'] = isset($_POST['image']) ? $_POST['image'] : '';

    // Store product details in session variables
    $till_number = "4134440";
    $product_name = isset($_SESSION['item_name']) ? $_SESSION['item_name'] : '';
    $price = isset($_SESSION['price']) ? $_SESSION['price'] : '';
    $image = isset($_SESSION['image']) ? $_SESSION['image'] : '';
    ?>
    <br><br>
    <div class="order-summary">
        <div class="section-title">Order Summary</div>
        <?php
        // Fetch items according to the category from the database
        $sql = "SELECT * FROM products WHERE item_name = '$product_name'";
        $result = $link->query($sql);
        
        // Loop through each item and display them
        while ($row = $result->fetch_assoc()) {
            echo '<img src="' . $row['image'] . '" width="50%" height="225"><br>';
            echo '<div><b>' . $row['item_name'] . '</b></div>';
            echo '<div>KSh ' . $price . '</div>';
            echo '<div>Delivery fees: KSh 159</div>';
            echo '<div><b>Total: KSh ' . ($price + 159) . '</b></div>';
        }
        ?>
        <br>
        <div>Direct payments are Directed to Till Number: <b><?php echo $till_number; ?></b></div>
        <div class="confirm-btn">
            <button class="btn">Check Out KSh. <?php echo $price + 159; ?></button>
            <div>By proceeding, you are automatically accepting the <a href="#">Terms & Conditions</a></div>
        </div>
    </div>

    <div><b><i>Knight C.E.O,<br>Ezekiel Njuguna Mburu</i></b></div>
    <div>Thank you for shopping with us. 😌 We value you.</div>

</div> <!-- Close container -->
</body>
</html>
