<?php

require('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sign Up
    if (isset($_POST['username'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $password = md5($password);
        $email = trim($_POST['email']);

        // Check if all fields are provided
        if (!empty($username) && !empty($password) && !empty($email)) {
            // No hashing of the password
            $hashed_password = $password;

            // Use prepared statement to prevent SQL Injection
            $stmt = $con->prepare("INSERT INTO customer (customer_name, password, customer_email) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $hashed_password, $email);

            if ($stmt->execute()) {
                // Sign up successful, redirect to index.php
                header('Location: index.php');
                exit;
            } else {
                echo "Sign up unsuccessful. Please try again.";
            }

            $stmt->close();
        } else {
            // If any field is empty, redirect to index.php
            header('Location: index.php');
            exit;
        }
    } 
    // Sign In
    elseif (isset($_POST['cemail'])) {
        $email = trim($_POST['cemail']);
        $password = trim($_POST['cpassword']);

        if (!empty($email) && !empty($password)) {
            // Use prepared statement to prevent SQL Injection
            $stmt = $con->prepare("SELECT password FROM customer WHERE customer_email = ?");
            $stmt->bind_param("s", $email);

            if ($stmt->execute()) {
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($stored_password);
                    $stmt->fetch();

                    if ($password === $stored_password) {
                        // Password is correct, redirect to index.php
                        header('Location: index.php');
                        exit;
                    } else {
                        $error_message = "Login failed. Incorrect password.";
                    }
                } else {
                    $error_message = "Email not found.";
                }
            } else {
                echo "An error occurred. Please try again.";
            }

            $stmt->close();
        } else {
            $error_message = "Both email and password are required.";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery.js"></script>
    <script>
      $(document).ready(function () {
        $("#register").click(function () {
          $("#container").addClass("active");
        });
        $("#login").click(function () {
          $("#container").removeClass("active");
        });
      });
    </script>
    <title>Login page</title>
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up">
        <form action="signin.php" method="POST">
          <h1 class="h1">Create Account</h1>
          <div class="social-icons">
            <a href="#" class="icon m-2"><i class="fa-brands fa-google-plus-g"></i></a>
            <a href="#" class="icon m-2"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="icon m-2"><i class="fa-brands fa-github"></i></a>
            <a href="#" class="icon m-2"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
          <span>You can use your email for registration</span>
          <input type="text" class="form-control m-2" placeholder="Your name" name="username" required />
          <input type="email" class="form-control m-2" placeholder="Your email" name="email" required />
          <input type="password" class="form-control m-2" placeholder="Your password" name="password" required />
          <button class="btn mt-2 px-3">Sign up</button>
        </form>
      </div>
      <div class="form-container sign-in">
        <form action="signin.php" method="POST">
          <h1 class="h1">Sign In</h1>
          <div class="social-icons">
            <a href="#" class="icon m-2"><i class="fa-brands fa-google-plus-g"></i></a>
            <a href="#" class="icon m-2"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="icon m-2"><i class="fa-brands fa-github"></i></a>
            <a href="#" class="icon m-2"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
          <span>or use your email password</span>
          <?php if (!empty($error_message)): ?>
                <div class="alert alert-danger" role="alert"><?php echo $error_message; ?></div>
          <?php endif; ?>
          <input type="email" class="form-control m-2" placeholder="Your email" name="cemail" required />
          <input type="password" class="form-control m-2" placeholder="Your password" name="cpassword" required />
          <button class="btn mt-2 px-3">Sign in</button>
        </form>
      </div>
      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h1>Welcome Back!</h1>
            <p class="my-2">We are ready to serve you <br> click below & log in your detail</p>
            <button class="hidden btn mt-2 px-3" id="login">Sign In</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Coffee lovers!</h1>
            <p class="my-2">Are you new here? <br> Then first make an account <br> It's so easy... <br> <b>click below</b></p>
            <button class="hidden btn mt-2 px-3" id="register">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
