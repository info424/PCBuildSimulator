<?php

require_once "vendor/autoload.php";

require_once  "pdo_db_conn.php";

$stmtFruits = $connection->prepare('SELECT f.id,f.name,f.expiresAt,f.price,c.name AS category
FROM fruits AS f
INNER JOIN categories AS c ON f.category_id = c.id ');
$stmtFruits->execute();
$fruits = $stmtFruits->fetchAll(PDO::FETCH_ASSOC);
//dd($fruits);
?>

<a href = "addFruit.php">Add Fruit</a> | <a href = "addCategory.php">Add Category</a>

<table border="1">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>CATEGORY</td>
        <td>EXPIRES AT</td>
        <td>PRICE</td>
    </tr>
    <?php foreach ($fruits as $fruit): ?>
        <tr>
            <td> <?=$fruit['id'] ?> </td>
            <td> <?=$fruit['name'] ?> </td>
            <td> <?=$fruit['category'] ?> </td>
            <td> <?=$fruit['expiresAt'] ?> </td>
            <td> <?=$fruit['price'] ?> </td>
        </tr>
    <?php endforeach;?>

</table>