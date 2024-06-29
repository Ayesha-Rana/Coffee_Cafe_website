<?php

require('connection.php');

if(isset($_POST['order_btn'])){

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $number = mysqli_real_escape_string($con, $_POST['number']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $method = mysqli_real_escape_string($con, $_POST['method']);
   $city = mysqli_real_escape_string($con, $_POST['city']);
   $country = mysqli_real_escape_string($con, $_POST['country']);


   $cart_query = mysqli_query($con, "SELECT * FROM `cart`");
   $price_total = 0;
   $product_name = [];

   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = $product_item['price'] * $product_item['quantity'];
         $price_total += $product_price;
      }

      $total_product = implode(', ', $product_name);

      $detail_query = mysqli_query($con, "INSERT INTO `order` (name, number, email, method, city, country, total_products, total_price) VALUES('$name','$number','$email','$method','$city','$country','$total_product','$price_total')") or die('query failed');

      if($detail_query){
         mysqli_query($con, "DELETE FROM `cart`") or die('query failed');
         echo "
         <div class='order-message-container'>
         <div class='message-container'>
            <h3>Thank you for shopping!</h3>
            <div class='order-detail'>
               <span>".$total_product."</span>
               <span class='total'> Total : $".$price_total."/-  </span>
            </div>
            <div class='customer-details'>
               <p> Your name : <span>".$name."</span> </p>
               <p> Your number : <span>".$number."</span> </p>
               <p> Your email : <span>".$email."</span> </p>
               <p> Your address : <span>  ".$city.", ".$country." </span> </p>
               <p> Your payment mode : <span>".$method."</span> </p>
              
            </div>
               <a href='products.php' class='btn'>Continue shopping</a>
            </div>
         </div>
         ";
      }
   } else {
      echo "<div class='order-message-container'><div class='message-container'><h3>Your cart is empty!</h3><a href='products.php' class='btn'>Go back to products</a></div></div>";
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="shopping.css">

</head>
<body>



<div class="container">

<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($con, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> grand total : $<?= $grand_total; ?>/- </span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>your number</span>
            <input type="number" placeholder="enter your number" name="number" required>
         </div>
         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="method">
               <option value="cash on delivery" selected>cash on devlivery</option>
               <option value="credit cart">credit cart</option>
               <option value="paypal">paypal</option>
            </select>
         </div>
        
         <div class="inputBox">
            <span>city</span>
            <input type="text" placeholder="e.g. sahiwal" name="city" required>
         </div>
        
         <div class="inputBox">
            <span>country</span>
            <input type="text" placeholder="e.g. pakistan" name="country" required>
         </div>
        
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>