<?php
require('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $contact = trim($_POST['contact']);
    $productModel = trim($_POST['productModel']);

    $sql = "INSERT INTO form_data (name, email, contact, product_model) VALUES ('$name', '$email', '$contact', '$productModel')";

    $r = mysqli_query($con,$sql);
    if ($r == 1)

    echo "file data sent";

    else 
        echo "Login Failed";
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Model Form</title>
  <link rel="stylesheet" href="css/bootstrap-icons.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery.js"></script>
  <style>
    .form-container {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
  <script>
    
    $(document).ready(function(){
      $("#productForm").submit(function(event){
  
   var text = $("#contact").val();
   var pattern = /^+(92)/()$/;
  
  
   var res = pattern.test(text);
  
   if(!res){
      event.preventDefault();
   }
  
      });
  
  
    }); 
  </script>
</head>
<body>
  <div class="container">
    <div class="form-container">
      <h2 class="text-center">Product Model Form</h2>
      <form id="productForm" action="practice.php"  method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="contact">Contact</label>
          <input type="text" class="form-control" id="contact" name="contact" required>
        </div>
        <div class="form-group">
          <label for="productModel">Product Model</label>
          <select class="form-control" id="productModel" name="productModel" required>
            <option value="">Select a model</option>
            <option value="Model1">Model 1</option>
            <option value="Model2">Model 2</option>
            <option value="Model3">Model 3</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
  </div>

  
 
</body>
</html>
