<?php
require('connection.php');

// Fetch customer data
$sqlCustomers = "SELECT customer_name, customer_email, password FROM customer";
$resultCustomers = $con->query($sqlCustomers);

if ($resultCustomers->num_rows > 0) {
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Email</th>';
    echo '<th>Password</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($row = $resultCustomers->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['customer_name']) . '</td>';
        echo '<td>' . htmlspecialchars($row['customer_email']) . '</td>';
        echo '<td>' . htmlspecialchars($row['password']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo 'No customers found.';
}

// Close database connection if necessary
?>
