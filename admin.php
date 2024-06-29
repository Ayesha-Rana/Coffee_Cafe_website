<!-- login.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Poppins;
            background-image:url('images/w2.jpg');
        }
        .login-container {
            width: 400px;
            margin: 100px auto;
            padding: 20px;
            border: none;
            border-radius: 5px;
           
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px;
            border: none;
            border-radius: 5px;
        }

      
        .login-container input[type="password"]:hover {
           background:#000;
           color:#fff;
        }
        .login-container input[type="email"]:hover{
            background:#000;
           color:#fff;
        }
        
        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #dfa878;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
        h2{
            color:#fff;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 >Admin Login</h2>
        <?php
        if (isset($_GET['error'])) {
            echo '<div class="error">Invalid email or password.</div>';
        }
        ?>
        <form action="login.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
