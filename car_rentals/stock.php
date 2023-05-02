<?php

require_once 'cars.php';

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Add new car
    if (isset($_POST['add_car'])) {
        add_car($_POST['make'], $_POST['model'], $_POST['year']);
        header('Location: stock.php');
    } 
    // Edit existing car
    elseif (isset($_POST['edit_car'])) {
        update_car($_POST['id'], $_POST['make'], $_POST['model'], $_POST['year']);
        header('Location: stock.php');
    } 
    // Delete existing car
    elseif (isset($_POST['delete_car'])) {
        delete_car($_POST['id']);
        header('Location: stock.php');
    }
}

// Get all cars from database
$cars = get_all_cars();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Car Dealership</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
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

    </style>
</head>
<body>
    <a href="index.php" class="abort-link">Abort</a>

    <h1>Car Stock</h1>
    <h2>Add Car</h2>
    <form method="post">
        <label>Make:</label><br>
        <input type="text" name="make"><br>
        <label>Model:</label><br>
        <input type="text" name="model"><br>
        <label>Year:</label><br>
        <input type="text" name="year"><br><br>
        <input type="submit" name="add_car" value="Add Car">
    </form>
    <hr>
    <h2>Car List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($cars as $car) { ?>
        <tr>
            <td><?php echo $car['id']; ?></td>
            <td><?php echo $car['make']; ?></td>
            <td><?php echo $car['model']; ?></td>
            <td><?php echo $car['year']; ?></td>
            <td>
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $car['id']; ?>">
                    <!-- <input type="submit" name="edit_car" value="Edit"> -->
                    <input type="submit" name="delete_car" value="Delete" onclick="return confirm('Are you sure?')">
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
