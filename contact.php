

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="shortcut icon" href="assets/logo1.jpg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap-icons.css" rel="stylesheet">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        header {
            text-align: center;
            margin-bottom: 20px;
        }
  
        /* Custom Styles */
        header {
          background-color: #2ACFCF;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        section {
            margin: 20px;
            
        }

        footer {
          background-color: #2ACFCF;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        form {
            max-width: 500px;
           
        }
        body{
        align-items: center;
        display: flex;
        }
    </style>
</head>
<body>
<header>
        <h1>Contact Us <i class="bi bi-envelope-fill"></i></h1>
    </header>


    <section style="font"
        <h4>Contact Information</h4>
        <p>Feel free to get in touch with us using the information below:</p>
        <ul>
            <li>Email: info@knightsavermall.com</li>
            <li>Phone: 0115812700</li>
            <li>Address: 0100 Nairobi, Kenya</li>
        </ul>
    </section>

    <section>
        <h4>Contact Form</h4>
        <p>If you have any questions, suggestions, or feedback, please fill out the form below:</p>
        <form action="contact_process.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>

    

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
