<?php
session_start();
include('database/conn.php');

// Define variables and initialize with empty values
$emailOrUsername = $password = "";
$emailOrUsername_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if email or username is empty
    if (empty(trim($_POST["emailOrUsername"]))) {
        $emailOrUsername_err = "Please enter your email or username.";
    } else {
        $emailOrUsername = trim($_POST["emailOrUsername"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($emailOrUsername_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, username, email, password FROM users WHERE username = ? OR email = ?";

        if ($stmt = $link->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_emailOrUsername, $param_emailOrUsername);

            // Set parameters
            $param_emailOrUsername = $emailOrUsername;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Store result
                $stmt->store_result();

                // Check if email/username exists, if yes then verify password
                if ($stmt->num_rows == 1) {
                    // Bind result variables
                    $stmt->bind_result($id, $username, $email, $stored_password);
                    if ($stmt->fetch()) {
                        if ($password == $stored_password) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["email"] = $email;

                            // Redirect user to welcome page
                            header("location:shop.php");
                        } else {
                            // Display an error message if password is not valid
                            $password_err = "The password you entered is not valid.";
                        }
                    }
                } else {
                    // Display an error message if email/username doesn't exist
                    $emailOrUsername_err = "No account found with that email/username.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $link->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login |Knight Second-Hand Haven</title>
    <link rel="shortcut icon" href="assets/logo1.jpg" type="image/x-icon">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-kxjw7h8Dl3UpTHX/knN5BO0TdNcpaif7ifC6k4B6SQ8EzR1VzEYgu4h2ZOF7Is7c1iQgx2g6LSz5ME6xLH4c2w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
                body {
            background-image: url('assets/watermark.jpg');
            background-repeat: repeat;
            font-family: 'Roboto', sans-serif; /* Use Roboto font */
            color: #333; /* Text color */
        }

        .wrapper {
            width: 360px;
            padding: 20px;
            margin: 100px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .error {
            color: red;
        }
        .fancy-font {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            /* Add any other styling here */
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Knight Saver Mall Logo -->
        <div class="text-center mb-4">
            <img src="assets/logo1.jpg" alt="Knight Saver Mall Logo" style="width: 150px;">
            <h2 class="mt-3 fancy-font">Welcome to Knight Second-Hand Haven</h2> <!-- Add 'fancy-font' class here -->
            <p>Type your email or username and password to log in.</p>
        </div>
        <!-- Login Form -->
        <form name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="emailOrUsername">Email or Username</label>
                <input type="text" name="emailOrUsername" id="emailOrUsername" class="form-control" value="<?php echo $emailOrUsername; ?>">
                <span class="error"><?php echo $emailOrUsername_err; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                <span class="error"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning btn-block" value="Login">
            </div>
            <p>Don't have an account? <a   class="btn btn-primary btn-block" href="register.php">Sign up now</a>.</p>
        </form>
        <!-- Additional Information -->
        <p class="text-center">
            By continuing you agree to Knight Saver Mall's <a href="#">Terms and Conditions</a>.
        </p>
    </div>
</body>
</html>
