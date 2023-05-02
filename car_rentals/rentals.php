<?php

require_once 'config.php';

// Get all rentals
function get_rentals() {
    global $db;
    $stmt = $db->query('SELECT rentals.*, cars.make, cars.model FROM rentals LEFT JOIN cars ON rentals.car_id = cars.id ORDER BY rentals.id DESC');
    return $stmt->fetchAll();
}

// Add rental to database
function add_rental($car_id, $customer_name, $rental_date, $return_date, $total_price) {
    global $db;
    $stmt = $db->prepare('INSERT INTO rentals (car_id, customer_name, rental_date, return_date, total_price) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$car_id, $customer_name, $rental_date, $return_date, $total_price]);
}

// Get rental by id
function get_rental_by_id($id) {
    global $db;
    $stmt = $db->prepare('SELECT * FROM rentals WHERE id = ?');
    $stmt->execute([$id]);
    return $stmt->fetch();
}

// Update rental in database
function update_rental($id, $car_id, $customer_name, $rental_date, $return_date, $total_price) {
    global $db;
    $stmt = $db->prepare('UPDATE rentals SET car_id = ?, customer_name = ?, rental_date = ?, return_date = ?, total_price = ? WHERE id = ?');
    $stmt->execute([$car_id, $customer_name, $rental_date, $return_date, $total_price, $id]);
}

// Delete rental from database
function delete_rental($id) {
    global $db;
    $stmt = $db->prepare('DELETE FROM rentals WHERE id = ?');
    $stmt->execute([$id]);
}

// Get all cars for dropdown
function get_cars_dropdown() {
    global $db;
    $stmt = $db->query('SELECT * FROM cars ORDER BY make ASC');
    $options = '';
    while ($car = $stmt->fetch()) {
        $options .= '<option value="' . $car['id'] . '">' . $car['make'] . ' ' . $car['model'] . '</option>';
    }
    return $options;
}


// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_rental'])) {
        // Add rental to database
        add_rental($_POST['car_id'], $_POST['customer_name'], $_POST['rental_date'], $_POST['return_date'], $_POST['total_price']);
        header('Location: rentals.php');
    } elseif (isset($_POST['edit_rental'])) {
        // Edit rental in database
        update_rental($_POST['id'], $_POST['car_id'], $_POST['customer_name'], $_POST['rental_date'], $_POST['return_date'], $_POST['total_price']);
        header('Location: rentals.php');
    } elseif (isset($_POST['delete_rental'])) {
        // Delete rental from database
        delete_rental($_POST['id']);
        header('Location: rentals.php');
    }
}

// Get all rentals
$rentals = get_rentals();

// Get all cars for dropdown
$cars = get_cars_dropdown();

?>


<!DOCTYPE html>
<html>
<head>
    <title>Rentals - Car Dealer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            form {
  width: 50%;
  margin: 0 auto;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="submit"] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top: 20px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

        body {
            padding: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
input[type="date"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 5px;
}

select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 5px;
}

button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #45a049;
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


    </style>
</head>
<body>
    <a href="index.php" class="abort-link">Abort</a>

    <div class="container">
      <center><h1>Car Rentals</h1></center>  

        <?php if (isset($error)) { ?>
            <div class="error"><?php echo $error; ?></div>
        <?php } ?>

        <form method="post">
            <div class="form-group">
                <label for="car_id">Car</label>
                <select id="car_id" name="car_id">
                    <option value="">Select a car</option>
                    <?php echo get_cars_dropdown(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="customer_name">Customer Name</label>
                <input type="text" id="customer_name" name="customer_name">
            </div>
            <div class="form-group">
                <label for="rental_date">Rental Date</label>
                <input type="date" id="rental_date" name="rental_date">
            </div>
            <div class="form-group">
                <label for="return_date">Return Date</label>
                <input type="date" id="return_date" name="return_date">
            </div>
            <div class="form-group">
                <label for="total_price">Total Price</label>
                <input type="text" id="total_price" name="total_price">
            </div>
            <button type="submit" name="add_rental">Add Rental</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Car</th>
                    <th>Customer Name</th>
                    <th>Rental Date</th>
                    <th>Return Date</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (get_rentals() as $rental) { ?>
                    <tr>
                        <td><?php echo $rental['id']; ?></td>
                        <td><?php echo $rental['make'] . ' ' . $rental['model']; ?></td>
                        <td><?php echo $rental['customer_name']; ?></td>
                        <td><?php echo $rental['rental_date']; ?></td>
                        <td><?php echo $rental['return_date']; ?></td>
                        <td><?php echo $rental['total_price']; ?></td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="id" value="<?php echo $rental['id']; ?>">
                                <button type="submit" name="delete_rental">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
