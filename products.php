<?php
require('connection.php');

if (isset($_POST['add_to_cart'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;

    $select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE name = '$product_name'");
    if (mysqli_num_rows($select_cart) > 0) {
        // $message[] = 'Product already added to cart';
    } else {
        $insert_product = mysqli_query($con, "INSERT INTO cart (name, price, image, quantity)
        VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
        // $message[] = 'Product added successfully';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Poppins;
        }



        .products {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 20px;
        }

        .product {
            border: none;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            background: #fae3ce;
        }

        .product img {
            max-width: 100%;
            filter: drop-shadow(0 20px 20px #0009);
        }

        .order-now-btn {
            background-color: #dfa878;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 15px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .order-now-btn:hover{
            color:#fff;
        }

        .coffee h6{
            color:#dfa878;
            font-weight:bold;
            font-size:1.2rem
        }
        .text-center{
            font-weight:1.2rem;
            color:#000;
        }

        .product h2 {
            margin-top: 10px;
            font-size: 18px;
        }

        .product p {
            font-size: 16px;
            color: #888;
            margin-bottom: 10px;
        }

        .product button {
           
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        

        main {
            background-image: url("now.webp");
        }

        nav {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .dropbtn {
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            background: black;
            border-radius: 15px;
            position: absolute;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -ms-border-radius: 15px;
            -o-border-radius: 15px;
        }

        .dropdown-content a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .inner {
            font-family: Arial, sans-serif;
            justify-content: center;
            align-items: center;
        }

        .inner a {
            position: relative;
            font-size: 1.7rem;
            font-weight: 500;
            color: #fff;
            text-decoration: none;
            padding: 6px 20px;
            transition: 0.5s;
        }

        .inner a:hover {
            color: #dfa878;
        }

        .inner a span {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-bottom: 2px solid #dfa878;
            z-index: -1;
            border-radius: 15px;
            transform: scale(0) translateY(50px);
            opacity: 0;
            transition: 0.5s;
        }

        .inner a:hover span {
            transform: scale(1) translateY(0);
            opacity: 1;
        }
       .coffee h2{
            font-size:2.5rem;
            font-weight:bold;
            color:#dfa878;
            
        }

        .content {
            padding-top: 20px;
            padding-left: 10px;
            margin-top: 20px;
            margin-left: 30px;
            animation: slideInLeft ease-in-out 1s 1 normal none;
            -webkit-animation: slideInLeft ease-in-out 1s 1 normal none;
        }

        .show {
            display: inline-table;
        }

        .container {
            position: relative;
            text-align: start;
            color: black;
        }
        .icon-cart a{
            color: #fff
        }
        .price{
            font-weight:bold;
            font-size:1rem
        }
    </style>
</head>
<body>
<?php
if (isset($message)) {
    foreach ($message as $msg) {
        echo '<div class="message"><span>' . $msg . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i></div>';
    }
}
?>

<main>
<div class="bg-white container">
    <header class="container">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark container p-1">
            <div class="container">
                <img src="./images/logo (2).png" alt="Avatar Logo" style="width:60px;" class="me-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse inner" id="navbarCollapse">
                    <a href="index.php">Home <span></span></a>
                    <a href="About.html">About us <span></span></a>
                    <a href="Our menu.html">Menu <span></span></a>
                    <div class="dropdown">
                        <a href="#" onclick="myFunction()" class="dropbtn">Sections<span></span></a>
                        <div id="myDropdown" class="dropdown-content bg-dark">
                            <a href="Our Coffee.html">Our Coffee <span></span></a>
                            <a href="Our Story.html">Our Story <span></span></a>
                            <a href="products.php">Products <span></span></a>
                            <a href="services.php">Services <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icon-cart me-5">
                <?php
                $select_row = mysqli_query($con, "SELECT * FROM `cart`") or die('Query failed');
                $row_count = mysqli_num_rows($select_row);
                ?>
                <a  href="cart.php">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
                </svg>
                <span><?php echo $row_count; ?></span></a>
            </div>
        </nav>
    </header>
    <br>
    <div class="mt-5 coffee">
        <h6 class="text-center">Enjoy it at Home</h6>
        <h2 class="text-center mb-4">Buy Your Coffee</h2>
        <p class="text-center pb-4 text-black-50">Discover the pure essence of organic coffee beans,<br> meticulously cultivated
            and roasted to unlock their natural flavors.</p>
    </div>
    <div class="listProduct p-3">
        <!-- Products will be dynamically inserted here -->
    </div>

    <div class="container">
        <div class="products">
            <?php
            $sql = "SELECT * FROM `products`";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <form action="" method="post">
                        <div class="product">
                            <img src="<?php echo $row['image']; ?>" alt="">
                            <h3><?php echo $row['name']; ?></h3>
                            <div class="price">$<?php echo $row['price']; ?>/-</div>
                            <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                            <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
                            <input type="submit" class="btn order-now-btn" value="Add to cart" name="add_to_cart">
                        </div>
                    </form>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
</main>

<script src="js/script.js"></script>
</body>
</html>
