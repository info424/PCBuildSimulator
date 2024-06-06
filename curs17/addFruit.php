<?php

require_once 'vendor/autoload.php';
require_once 'pdo_db_conn.php';

if (isset($_POST['name'])) {
    $stmt = $connection->prepare(
        'INSERT INTO fruits (name, category_id, expiresAt, price) 
    VALUES (:name, :category, :expiresAt, :price)');
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':category', $_POST['category']);
    $stmt->bindParam(':expiresAt', $_POST['expiresAt']);
    $stmt->bindParam(':price', $_POST['price']);
    $stmt->execute();

}

?>
<form action="addFruit.php" method="post">
    Name: <input type="text" name="name"> <br>
    Category: <input type="text" name="category"> <br>
    Expires At: <input type="text" name="expiresAt"> <br>
    Price:  <input type="text" name="price"> <br>
    <input type="submit" value="Add Fruit">
</form>