<?php
session_start();
if (!isset($_SESSION['admin_email'])) {
    header("Location: admin.php");
    exit();
}

require('connection.php');

// Fetch total number of orders
$sqlOrders = "SELECT COUNT(*) AS total_orders FROM `order` ";
$resultOrders = $con->query($sqlOrders);
$totalOrders = $resultOrders->fetch_assoc()['total_orders'];

// Fetch total number of customers
$sqlCustomers = "SELECT COUNT(*) AS total_customers FROM customer";
$resultCustomers = $con->query($sqlCustomers);
$totalCustomers = $resultCustomers->fetch_assoc()['total_customers'];

// Fetch orders data
$sql = "SELECT name,number, email, method, city, country,total_products,total_price FROM `order`";
$result = $con->query($sql);

$order = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $order[] = $row;
    }
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/bootstrap-icons.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="css/style.css">
    <title>AdminHub</title>

    <style>
    /* CSS for the table to take full width and provide space between columns */
    #ordersTable {
        width: 100%;
        margin-top: 20px; /* Adjust this value as needed */
    }

    #ordersTable table {
        width: 100%;
        border-collapse: collapse;
    }

    #ordersTable th,
    #ordersTable td {
        padding: 10px; /* Adjust this value as needed */
        text-align: left;
         /* Adjust border color as needed */
    }

    /* CSS for the table to take full width and provide space between columns */
#ordersTable {
    width: 100%;
    margin-top: 20px;
    overflow-x: auto; /* Add horizontal scroll if needed on smaller screens */
}

#ordersTable table {
    width: 100%;
    border-collapse: collapse;
}

#ordersTable th,
#ordersTable td {
    padding: 10px;
    text-align: left;
}

/* Adjustments for smaller screens */
@media screen and (max-width: 768px) {
    /* Adjust margins and paddings for smaller screens */
    #ordersTable {
        margin-top: 10px;
        overflow-x: auto;
    }

    #ordersTable th,
    #ordersTable td {
        padding: 8px; /* Adjust padding for smaller screens */
    }
}
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px; /* Adjust padding as needed */
}

.profile img {
    width: 40px; /* Adjust size as needed */
    height: 40px; /* Adjust size as needed */
    border-radius: 50%; /* Make it circular */
}
</style>
</head>
<body>


<section id="content">
   <header>
    <nav>
        
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">AdminHub</span>
    </a>

    <a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
       
        <a href="#" class="profile ">
    
            <img src="images/o1.jpg">
        </a>
    </nav>
</header>
   
    <main>
        <div class="container bg-white p-3" >
        <div class="head-title">
            <div class="left ">
                <h1>Dashboard</h1>
                
            </div>
           
        </div>

        <ul class="box-info">
            <li id="newOrdersButton">
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
                    <h3><?php echo $totalOrders; ?></h3>
                    <p>New Order</p>
                </span>
            </li>
            <li id="visitorsButton">
                <i class='bx bxs-group'></i>
                <span class="text">
                    <h3><?php echo $totalCustomers; ?></h3>
                    <p>Visitors</p>
                </span>
            </li>
          
        </ul>
       

        <div class="table-data ">
            <div id="ordersTable">
                <div class="head">
                    <h3>Recent Orders</h3>
                   
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Payment</th>
                            <th>Products</th>
                            <th>Amount</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($order as $orders): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($orders['name']); ?></td>
                            <td><?php echo htmlspecialchars($orders['email']); ?></td>
                            <td><?php echo htmlspecialchars($orders['number']); ?></td>
                            <td><?php echo htmlspecialchars($orders['city']); ?></td>
                            <td><?php echo htmlspecialchars($orders['country']); ?></td>
                            <td><?php echo htmlspecialchars($orders['method']); ?></td>
                            <td><?php echo htmlspecialchars($orders['total_products']); ?></td>
                            <td><?php echo htmlspecialchars($orders['total_price']); ?></td>
                           
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->

<script src="js/script.js"></script>
<script>
    // Initialize flag to track current state
    var currentDisplay = 'orders';

    // Add event listener to the "Visitors" button
    document.getElementById('visitorsButton').addEventListener('click', function() {
        // Update current display state
        currentDisplay = 'customers';

        // Create a new AJAX request
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == XMLHttpRequest.DONE) {
                if (xhr.status == 200) {
                    // Handle the AJAX response
                    document.getElementById('ordersTable').innerHTML = xhr.responseText;
                } else {
                    console.error('AJAX request failed with status:', xhr.status);
                }
            }
        };

        // Send the AJAX request to fetch customer data
        xhr.open('GET', 'get_customers.php', true);
        xhr.send();
    });

    // Add event listener to the "New Orders" button
    document.getElementById('newOrdersButton').addEventListener('click', function() {
        // Update current display state
        currentDisplay = 'orders';

        // Reset to show recent orders
        // You may want to re-fetch recent orders here if they can change dynamically
        var ordersHTML = `
            <div class="head">
                <h3>Recent Orders</h3>
            </div>
            <table>
                <thead>
                    <tr>
                    <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Payment</th>
                            <th>Products</th>
                            <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
        `;
        <?php foreach ($order as $orders): ?>
        ordersHTML += `
            <tr>
            <td><?php echo htmlspecialchars($orders['name']); ?></td>
                            <td><?php echo htmlspecialchars($orders['email']); ?></td>
                            <td><?php echo htmlspecialchars($orders['number']); ?></td>
                            <td><?php echo htmlspecialchars($orders['city']); ?></td>
                            <td><?php echo htmlspecialchars($orders['country']); ?></td>
                            <td><?php echo htmlspecialchars($orders['method']); ?></td>
                            <td><?php echo htmlspecialchars($orders['total_products']); ?></td>
                            <td><?php echo htmlspecialchars($orders['total_price']); ?></td>
            </tr>
        `;
        <?php endforeach; ?>
        ordersHTML += `
                </tbody>
            </table>
        `;
        document.getElementById('ordersTable').innerHTML = ordersHTML;
    });
</script>
</body>
</html>
