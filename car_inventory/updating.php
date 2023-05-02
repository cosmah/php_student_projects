<?php

$servername = "localhost"; //change this to your server name
$username = "root"; //change this to your database username
$password = ""; //change this to your database password
$dbname = "marion"; //change this to your database name

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

if(isset($_POST['submit'])) {
  $type = $_POST['type'];
  $model = $_POST['model'];
  $mileage = $_POST['mileage'];
  $year = $_POST['year'];

  $stmt = $conn->prepare("INSERT INTO cars (type, model, mileage, year) VALUES (:type, :model, :mileage, :year)");
  $stmt->bindParam(':type', $type);
  $stmt->bindParam(':model', $model);
  $stmt->bindParam(':mileage', $mileage);
  $stmt->bindParam(':year', $year);

  if($stmt->execute()) {
    echo "<script>alert('Car added successfully');</script>";
  } else {
    echo "<div class='error'>Error adding car</div>";
  }
}

?>

<!doctype html>

<head>
    <meta charset="utf-8">
    <title>CRUD </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}
    </style>
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    
    
    <!-- Navbar -->
<div class="w3-top">
   <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="dashboard.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="add_cars.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Add Cars</a>
    <a href="updating.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Update Cars</a>
    <a href="view_car.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Cars</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="add_cars.php" class="w3-bar-item w3-button w3-padding-large">Add Cars</a>
    <a href="updating.php" class="w3-bar-item w3-button w3-padding-large">Update Cars</a>
    <a href="view_car.php" class="w3-bar-item w3-button w3-padding-large">View Cars</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
  </div>
</div>
<br/>
<br>

<?php
// Connect to the database
$dsn = 'mysql:host=localhost;dbname=marion';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Update the record if the Update button has been clicked
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $type = $_POST['type'];
    $model = $_POST['model'];
    $mileage = $_POST['mileage'];
    $year = $_POST['year'];

    $query = "UPDATE cars SET type = ?, model = ?, mileage = ?, year = ? WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$type, $model, $mileage, $year, $id]);
}

// Delete the record if the Delete button has been clicked
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM cars WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$id]);
}

// Fetch the records from the database
$query = "SELECT * FROM cars";
$stmt = $db->query($query);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display the records in an HTML table
echo '<table>';
echo '<tr><th>ID</th><th>TYPE</th><th>MODEL</th><th>MILEAGE</th><th>YEAR</th><th>ACTION</th></tr>';

foreach ($rows as $row) {
    echo '<tr>';
    echo '<form method="post">';
    echo '<td>' . $row['id'] . '<input type="hidden" name="id" value="' . $row['id'] . '"></td>';
    echo '<td><input type="text" name="type" value="' . $row['type'] . '"></td>';
    echo '<td><input type="text" name="model" value="' . $row['model'] . '"></td>';
    echo '<td><input type="text" name="mileage" value="' . $row['mileage'] . '"></td>';
    echo '<td><input type="text" name="year" value="' . $row['year'] . '"></td>';
    echo '<td><button type="submit" name="update">Update</button> <button type="submit" name="delete">Delete</button></td>';
    echo '</form>';
    echo '</tr>';
}

echo '</table>';
?>


<!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity"> 
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>&copy Marion sites, 2023</p>
 <!-- Footer end. -->
 </footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
 
</body>
</html>
