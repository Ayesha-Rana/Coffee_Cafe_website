<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Cafe</title>
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap-icons.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery.js"></script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  </style>
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
                <a href="#blog">Blog <span></span></a>
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

 <!-- this is next div -->
 <section class="container first">
<div class="container">
<img style="opacity: 0.3;" src="./images/3.jpg" alt="" width="100%" height="500vh">
    <div class="top-left content animate__animated animate__backInLeft">
      <h2 style="font-size: 38px;font-family:Georgia, 'Times New Roman', Times, serif">ELEVATE YOUR <br><b style="color: #fff;">MORNING</b> EXPERIENCE!</h2>
      <p class="lead">We serve Coffee with the best Aroma!</p>
      <p>Because we know <b>Your Choice</b>...</p>
     <a href="product.html"> <button type="button" class=" order-now-btn">Order now!</button></a>
    </div>
</div>

  </section>

  <!-- this is our services -->

<section class="container py-5" style="background-color: #fff;">
    <div class="top-heading pt-5">
        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 35px;">
            Our Best Service
        </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, accusantium. <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus doloribus, ratione illum repellat rem asperiores?</p>
    </div>
    <div class="text-center mt-5">
      <a href="services.php"> <button class="custom-btn">View More</button></a> 
     </div>
      <div class="container mt-5">
        <div class="row">
          <!-- Tea Lover -->
          <div class="col-md-4">
            <div class="service-card">
              <img src="images/m2.jpg" alt="Tea Lover" class="img-fluid">
              <div class="service-card-content">
                <h3>Tea Lover</h3>
                <p>Explore a world of soothing teas, each blend curated to perfection for the tea enthusiast.</p>
               
              </div>
            </div>
          </div>
    
          <!-- Coffee Lover -->
          <div class="col-md-4">
            <div class="service-card">
              <img src="images/m1.jpg" alt="Coffee Lover" class="img-fluid">
              <div class="service-card-content">
                <h3>Coffee Lover</h3>
                <p>Indulge in the rich aroma and bold flavors of our specialty coffee creations.</p>
                
              </div>
            </div>
          </div>
    
          <!-- Casual Drinks -->
          <div class="col-md-4">
            <div class="service-card">
              <img src="images/m6.jpg" alt="Casual Drinks" class="img-fluid">
              <div class="service-card-content">
                <h3>Casual Snacks</h3>
                <p>Quench your thirst with our refreshing selection of casual drinks, perfect for any occasion.</p>
               
              </div>
            </div>
          </div>
        </div>
      </div>

</section>

<!-- this is our story section -->

<section class="container py-5" style="background-color: #fff;">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="video-container">
          <iframe src="images/coffee vedio.mp4" frameborder="0" allowfullscreen ></iframe>
        </div>
      </div>
      <div class="col-lg-6 slideRight animated-text">
        <div class="text-center mt-3 text-lg-start story ms-3 ">
          <h2 style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 35px;"> This is Our Story </h2>
          <p>
            At Coffee Cafe, our story is deeply rooted in a passion for coffee and a commitment to quality. It all began with a simple idea: to create a space where people can enjoy exceptional coffee in a welcoming atmosphere. From our humble beginnings, we've grown into a beloved neighborhood cafe, cherished by locals and visitors alike. Our journey has been fueled by a dedication to sourcing the finest coffee beans from around the world and meticulously crafting each cup to perfection.
          </p>
          
         <button class=" read-more-btn">Read More</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- this is our coffee section -->

<section class="container py-5 ourCoffee" >
  <div class="container py-5">
    <h2 style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 35px;text-align: center;"> OUR COFFEE </h2>

    <p class="coffee-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Sed aliquam, elit nec tempor vestibulum, massa urna luctus nisi, nec convallis dolor mi et ligula.</p>
    
    <div class="row">
      <div class="col-md-6 d-flex justify-content-center align-items-center"> <!-- Centering column content -->
        <div class="coffee-image">
          <img src="./images/i1.png" class="img-fluid" alt="Coffee Image 1">
          <h3 class="image-description">Espresso Supreme</h3>
          
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center align-items-center"> <!-- Centering column content -->
        <div class="coffee-image">
          <img src="./images/i3.png" class="img-fluid" alt="Coffee Image 2"> <!-- Replace 'coffee_image2.jpg' with the path to your image -->
          <h3 class="image-description">Caramel Macchiato</h3>
         
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-6 d-flex justify-content-center align-items-center"> <!-- Centering column content -->
        <div class="coffee-image">
          <img src="./images/i7.png" class="img-fluid" alt="Coffee Image 3"> <!-- Replace 'coffee_image3.jpg' with the path to your image -->
          <h3 class="image-description">Mocha Madness</h3>
          
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center align-items-center"> 
        <div class="coffee-image">
          <img src="./images/i5.png" class="img-fluid" alt="Coffee Image 4"> <!-- Replace 'coffee_image4.jpg' with the path to your image -->
          <h3 class="image-description">Vanilla Bliss Latte</h3>
          
        </div>
      </div>
    
    <div class="text-center mt-4">
     <a href="Our Coffee.html"> <button class="custom-btn">View More</button></a> 
    </div>
  </div>
</section>

<!-- this is carousel section -->

<section class="container py-5 carousel" style="background-color: #fff;">
  
  <div class="container mt-5 pe-5">
    <h6 class="text-center">Enjoy it at Home</h6>
    <h2 class="text-center mb-4">Buy Your Coffee</h2>
    <p class="text-center pb-4" >Discover the pure essence of organic coffee beans, <br> meticulously cultivated and roasted to unlock their natural flavors. </p>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card">
            <img src="images/p1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Traditional <strong>PeRU</strong></h5>
              <p class="card-text" >Pure <br> Sustainable <br>Freshness</p>
              <div class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <img src="images/p2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Traditional <strong>ETHiOPiA</strong></h5>
              <p class="card-text">Natural <br>Ethically-Sourced <br>Rich</p>
              <div class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <img src="images/p3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Traditional <strong>CoLUMBiA</strong></h5>
              <p class="card-text">Premium <br> Eco-Friendly <br>Flavorful</p>
              <div class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <img src="images/p4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Traditional <strong>NiCARAGuA</strong></h5>
              <p class="card-text">Pristine <br>Responsibly-Grown <br>Robust</p>
              <div class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</div>
            </div>
          </div>
        </div>
        
      </div>
      
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden ">Next</span>
      </button>

      <div class="text-center mt-5">
        <a href="products.php"><button class="order-now-btn">Shop Now</button></a>
      </div>
    </div>
  </div>
    
  
</section>



<!-- this is blog part -->

<section class="container py-5 carousel" id="blog" style="background-color: #fff;">
  <div class="container-fluid ">
    <div class="main-div">
        <div><img src="images/b2.png" alt="Image 1"></div>
        <div><img src="images/a4.jpg" alt="Image 2"></div>
        <div><img src="images/blog1.jpg" alt="Image 3"></div>
        <div><img src="images/a2.jpg" alt="Image 4"></div>
        <div><img src="images/b1.png" alt="Image 5"></div>
        <div><img src="images/a1.jpg" alt="Image 6"></div>
        <div><img src="images/b3.png" alt="Image 7"></div>
        <div><img src="images/a6.jpg" alt="Image 8"></div>
        <div><img src="images/b6.png" alt="Image 9"></div>
        <div><img src="images/a5.jpg" alt="Image 10"></div>
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
 
    







<script src="js/script.js"></script>
<script src="js/app.js"></script>
</body>
</html>