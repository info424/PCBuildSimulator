<?php


use Bazar\Aprozar\Fruit;
use Bazar\Aprozar\Category;


require_once 'vendor/autoload.php';
require_once 'pdo_db_conn.php';

if (isset($_POST['name'])) {
    $stmtCategories = $connection->prepare('SELECT * FROM categories WHERE id = :id');
    $stmtCategories->bindParam(':id', $_POST['category']);
    $stmtCategories->execute();
    $category = $stmtCategories->fetch(PDO::FETCH_ASSOC);
//    dd($category);

    $category = new Category($category['name']);
    $expiresAt = new \DateTime($_POST['expiresAt']);
    $fruit = new Fruit($_POST['name'], $category, $expiresAt, $_POST['price']);


    $stmt = $connection->prepare(
        'INSERT INTO fruits (name, category_id, expiresAt, price) 
    VALUES (:name, :category, :expiresAt, :price)');
    $stmt->bindValue(':name', $fruit->getName());
    $stmt->bindValue(':category', $_POST['category']);
    $stmt->bindValue(':expiresAt', $fruit->getExpiresAt()->format('Y-m-d H:i:s'));
    $stmt->bindValue(':price', $fruit->getPrice());
    $stmt->execute();

}

$stmtCategories = $connection->prepare('SELECT * FROM categories');
$stmtCategories->execute();
$categories = $stmtCategories->fetchAll(\PDO::FETCH_ASSOC);
//dd($categories);

?>
<form action="addFruit.php" method="post">
    Name: <input type="text" name="name"> <br>
    Category: <select name="category">
        <?php foreach ($categories as $category) : ?>
        <option value=" <?= $category['id'] ?>"> <?= $category['name'] ?></option>
        <?php endforeach; ?>

    </select> <br>
    Expires At: <input type="text" name="expiresAt"> <br>
    Price:  <input type="text" name="price"> <br>
    <input type="submit" value="Add Fruit">
</form>