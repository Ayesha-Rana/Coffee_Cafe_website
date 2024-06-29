<!-- login.php -->
<?php
session_start();

require('connection.php');
// Get form input
$email = $_POST['email'];
$password = $_POST['password'];

// Query the database
$sql = "SELECT * FROM admins WHERE email = ? AND password = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Valid login
    $_SESSION['admin_email'] = $email;
    header("Location: admin_dashboard.php"); // Redirect to the admin dashboard
} else {
    // Invalid login
    header("Location: admin.php?error=1");
}

$stmt->close();
$con->close();
?>
