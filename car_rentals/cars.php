<?php

require_once 'config.php';

// CREATE
function add_car($make, $model, $year) {
    global $db;
    $stmt = $db->prepare("INSERT INTO cars (make, model, year) VALUES (:make, :model, :year)");
    $stmt->bindParam(':make', $make);
    $stmt->bindParam(':model', $model);
    $stmt->bindParam(':year', $year);
    $stmt->execute();
}

// READ
function get_all_cars() {
    global $db;
    $stmt = $db->prepare("SELECT * FROM cars");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_car_by_id($id) {
    global $db;
    $stmt = $db->prepare("SELECT * FROM cars WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// UPDATE
function update_car($id, $make, $model, $year) {
    global $db;
    $stmt = $db->prepare("UPDATE cars SET make = :make, model = :model, year = :year WHERE id = :id");
    $stmt->bindParam(':make', $make);
    $stmt->bindParam(':model', $model);
    $stmt->bindParam(':year', $year);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

// DELETE
function delete_car($id) {
    global $db;
    $stmt = $db->prepare("DELETE FROM cars WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
