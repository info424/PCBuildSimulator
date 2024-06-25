<?php

use Bazar\Aprozar\Vegetable;
use Bazar\Aprozar\Category;

require_once 'vendor/autoload.php';
require_once 'pdo_db_conn.php';

if (isset($_POST['name'])) {
    $stmtCategories = $connection->prepare('SELECT * FROM categories WHERE id = :id');
    $stmtCategories->bindParam(':id', $_POST['category']);
    $stmtCategories->execute();
    $categoryData = $stmtCategories->fetch(PDO::FETCH_ASSOC);

    $category = new Category($categoryData['name'], $categoryData['type']);
    $expiresAt = new \DateTime($_POST['expiresAt']);
    $vegetable = new Vegetable($_POST['name'], $category, $expiresAt, $_POST['price']);

    $stmt = $connection->prepare(
        'INSERT INTO vegetables (name, category_id, expiresAt, price) 
        VALUES (:name, :category, :expiresAt, :price)');
    $stmt->bindValue(':name', $vegetable->getName());
    $stmt->bindValue(':category', $_POST['category']);
    $stmt->bindValue(':expiresAt', $vegetable->getExpiresAt()->format('Y-m-d H:i:s'));
    $stmt->bindValue(':price', $vegetable->getPrice());
    $stmt->execute();

    header('Location: index.php');
}

$stmtCategories = $connection->prepare('SELECT * FROM categories WHERE type = "Vegetables"');
$stmtCategories->execute();
$categories = $stmtCategories->fetchAll(\PDO::FETCH_ASSOC);

?>

<form action="addVegetable.php" method="post">
    Name: <input type="text" name="name"> <br>
    Category: <select name="category">
        <?php foreach ($categories as $category) : ?>
            <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
        <?php endforeach; ?>
    </select> <br>
    Expires At: <input type="text" name="expiresAt"> <br>
    Price: <input type="text" name="price"> <br>
    <input type="submit" value="Add Vegetable">
</form>
