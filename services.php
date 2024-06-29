<?php
require('connection.php');

$sql = "SELECT title, description, image FROM services";
$result = $con->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services - Coffee Cafe</title>
 <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap-icons.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery.js"></script>
  
</head>
<body>

<main>
<header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark container p-1">
          <div class="container">
            <img src="./images/logo (2).png" alt="Avatar Logo" style="width:60px;" class="me-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
              aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse inner" id="navbarCollapse">
             
                <a href="#">Home <span></span></a>
                <a href="About.html">About us <span></span></a>
                <a href="Our menu.html">Menu <span></span></a>
               
                <div class="dropdown">
                <a href="#" onclick="myFunction()"  class=" dropbtn">Sections<span></span></a>
                  <div id="myDropdown" class="dropdown-content  bg-dark">
                    <a href="Our Coffee.html">Our Coffee <span></span></a>
                    <a href="Our Story.html">Our Story <span></span></a>
                    <a href="products.php">Products <span></span></a>
                    <a href="services.php">Services <span></span></a>
                  </div>
                </div>
            </div>
              <div class="text-end d-flex">
              <button type="button" class="btn  " style="background-color: #DFA878;">
                <a href="signin.php"
                    style="text-decoration: none; color: rgb(255, 255, 255);font-family:Georgia, 'Times New Roman', Times, serif; ">Sign Up</a>
                  </button>
              </div>
            
          </div>
        </nav>
        </header>
<br></br>
  <!-- this is our services -->

  <section class="container py-5" style="background-color: #fff;">
        <div class="top-heading pt-5">
            <h2>Our Best Service</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, accusantium. <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus doloribus, ratione illum repellat rem asperiores?</p>
        </div>
        <div class="container mt-5">
            <div class="row">
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4">';
                        echo '<div class="service-card">';
                        echo '<img src="' . $row["image"] . '" alt="' . $row["title"] . '" class="img-fluid">';
                        echo '<div class="service-card-content">';
                        echo '<h3>' . $row["title"] . '</h3>';
                        echo '<p>' . $row["description"] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </section>





<footer class="footer-distributed container p-5">

  <div class="footer-left">

      <img src="./images/logo (2).png" alt="Avatar Logo" style="width:100px;" class="me-5 ">

    <p class="footer-links">
      <a href="index.html" class="link-1">Home</a>
      
      <a href="">Blog</a>
    
      <a href="#menu">Pricing</a>
    
      <a href="About.html">About</a>
      
   
    </p>

    <p class="footer-company-name">CAFFEAMORE © 2024</p>
  </div>

  <div class="footer-center">

    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>144 F Street</span> Fareed Town, Sahiwal</p>
    </div>

    <div>
      <i class="fa fa-phone"></i>
      <p>+92 303 3547589</p>
    </div>

    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="support@company.com">support@caffeamore.com</a></p>
    </div>

  </div>

  <div class="footer-right">

    <p class="footer-company-about" style="color: #fff;">
      <span>About Our Cafe</span>
      We source the finest coffee beans from around the world, ensuring ethical practices and fair trade
      relationships with farmers.
    </p>

    <div class="footer-icons">

      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="#"><i class="fa-brands fa-twitter"></i></a>
      <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="#"><i class="fa-brands fa-github"></i></a>

    </div>

  </div>

</footer>

</main>
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
