<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Knight Saver Mall</title>
    <link rel="shortcut icon" href="assets/logo1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Custom styles for the about page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
        }
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 150px;
            height: auto;
        }
        .vision-container, .jumia-today-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        .vision-heading, .jumia-heading {
            color: #007bff;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        .vision-item, .jumia-item {
            margin-bottom: 15px;
        }
        .bi-icon {
            color: #007bff;
            margin-right: 5px;
        }
        /* Circular items */
        .jumia-item {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: flex-start; /* 
            align-items: center;
            border-radius: 50%; /* Make the container circular */
            background-color: #f8f9fa; /* Background color */
            padding: 10px 20px; /* Adjust padding */
            margin: 10px; /* Adjust margin */
        }

        .jumia-item .bi-icon {
            margin-right: 10px; /* Add some space between the icon and text */
        }

        .jumia-item strong {
            margin-right: 5px; /* Add some space between the strong text and other text */
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="logo">
            <img src="assets/logo1.jpg" alt="Knight Saver Mall Logo">
        </div>
        <h2>About Us - Knight Saver Second Hand Shop</h2>
        
        <!-- Vision Section -->
        <div class="vision-container">
            <h3 class="vision-heading">Our Vision</h3>
            <div class="vision-item">
                <i class="bi bi-arrow-repeat bi-icon"></i> Promote sustainable living by offering high-quality second-hand items.
            </div>
            <div class="vision-item">
                <i class="bi bi-handshake bi-icon"></i> Build a community of like-minded individuals who value thrift and eco-consciousness.
            </div>
            <div class="vision-item">
                <i class="bi bi-people bi-icon"></i> Empower individuals to find affordable yet stylish options for their everyday needs.
            </div>
        </div>
     
        <!-- Knight Saver Second Hand Shop Today Section -->
        <div class="jumia-today-container">
            <h3 class="jumia-heading">Knight Saver Second Hand Shop Today</h3>
            <!-- Add respective icons for each item -->
            <div class="jumia-item">
                <i class="bi bi-box bi-icon"></i> <strong>Products:</strong> 5,000,000
            </div>
            <div class="jumia-item">
                <i class="bi bi-globe2 bi-icon"></i> <strong>East African Countries:</strong> 3
            </div>
            <div class="jumia-item">
                <i class="bi bi-shop bi-icon"></i> <strong>International & National Brands:</strong> 820
            </div>
            <div class="jumia-item">
                <i class="bi bi-people bi-icon"></i> <strong>Women Managers:</strong> 50%
            </div>
            <div class="jumia-item">
                <i class="bi bi-person-plus bi-icon"></i> <strong>Subscribers:</strong>500,000
            </div>
            <div class="jumia-item">
                <i class="bi bi-people bi-icon"></i> <strong>Employees:</strong> 500
            </div>
            <div class="jumia-item">
                <i class="bi bi-eye bi-icon"></i> <strong>Monthly Visitors:</strong> 1,000,000
            </div>
            <div class="jumia-item">
                <i class="bi bi-cart4 bi-icon"></i> <strong>Orders Across Kenya:</strong> 50,000
            </div>
            <div class="jumia-item">
                <strong>Knight Saver Mall</strong> offers the widest assortment at an unbeatable price.
           
        </div>
    </div>
    </div>
    </div>
    
</body>
<footer style="background-color: #333; color: #fff; padding: 20px 0;">
        <!-- Footer -->
    <?php include 'footer.php'; ?>
    </footer>
</html>
