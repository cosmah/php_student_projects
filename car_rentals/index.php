<!DOCTYPE html>
<html>
  <head>
    <title>Diana Car Rentals</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
    .w3-row-padding img {margin-bottom: 12px}
    /* Set the width of the sidebar to 120px */
    .w3-sidebar {width: 120px;background: #222;}
    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {margin-left: 120px}
    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {#main {margin-left: 0}}
    </style>
  </head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="./car.png" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="stock.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>STOCK</p>
  </a>
  <a href="rentals.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>RENTAL RECORDS</p>
  </a>
  <a href="contact.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Rent a Car for Your Next Adventure</span> From DIANA CARS.</h1>
    <p>Experience the Freedom of the Open Road with Our Car Rentals</p>
    <img src="./car.png" alt="cars" class="w3-image" width="992" height="1108">
  </header>
  <p>
    Are you planning a road trip or need a reliable car for your upcoming travels? Look no further than our car rental service. We offer a wide variety of vehicles to suit your needs, whether you're looking for a fuel-efficient economy car or a spacious SUV for your family.
<br/>
Our rental process is quick and easy. Simply choose your rental dates and pick-up location, select your vehicle, and you're ready to hit the road. We also offer convenient delivery options, so you can have your rental car delivered to your doorstep.
<br/>
At Diana Cars, we pride ourselves on our exceptional customer service. Our friendly staff are here to assist you every step of the way, from choosing the right vehicle for your needs to answering any questions you may have.
<br/>
We also offer competitive rates and flexible rental options, including short-term and long-term rentals. Plus, with our comprehensive insurance coverage and roadside assistance, you can have peace of mind knowing that you're covered in the unlikely event of an accident or breakdown.
<br/>
Don't let transportation woes hold you back from your next adventure. Contact us today to learn more about our car rental options and start planning your journey on the open road.
  </p>
  
<!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->
<footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <p class="w3-small">Connect with Us.</p>
 <!-- End footer -->
</footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
