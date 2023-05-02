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
            /* Body styles */
body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  margin: 0;
  padding: 0;
}

/* Heading styles */
h1, h2, h3 {
  font-weight: bold;
}

h1 {
  font-size: 36px;
  margin: 40px 0 20px 0;
}

h2 {
  font-size: 24px;
  margin: 30px 0 20px 0;
}

h3 {
  font-size: 20px;
  margin: 20px 0 10px 0;
}

/* Paragraph styles */
p {
  margin: 0 0 20px 0;
}

/* Form styles */
form {
  margin: 20px 0;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"], input[type="email"], input[type="tel"], textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  line-height: 1.5;
}

input[type="submit"] {
  background-color: #0077b6;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #023e8a;
}

/* Link styles */
a {
  color: #0077b6;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
.abort-link {
  background-color: #dc3545;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  text-decoration: none;
}

.abort-link:hover {
  background-color: #c82333;
  text-decoration: none;
}


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
<a href="index.php" class="abort-link">Abort</a>


<div>
        <h1>Contact Us</h1>
    <h2>We're Here to Help</h2>
    <p>Do you have questions about our car rental services or need assistance with an existing reservation? Our friendly customer service team is here to help. You can reach us by phone, email, or through the contact form below.</p>
    
    <h3>Phone</h3>
    <p>Call us at <a href="tel:+256 702 702360">+256 702 702360</a> to speak with a representative. We're available Monday - Friday, 9am - 5pm EAT.</p>
    
    <h3>Email</h3>
    <p>Send us an email at <a href="mailto:naavadiana60@gmail.com">naavadiana60@gmail.com</a>. We typically respond within 24 hours.</p>
    
    <h3>Contact Form</h3>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br>

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone"><br>

      <label for="message">Message:</label><br>
      <textarea id="message" name="message"></textarea><br>

      <input type="submit" value="Submit">
    </form>
    
    <p>Thank you for choosing Company Name. We look forward to assisting you.</p>

</div>
  
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
