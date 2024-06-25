<?php

use Bazar\Aprozar\Category;

require_once "vendor/autoload.php";
require_once "pdo_db_conn.php";  // This should define $connection

if (isset($_POST['name'])) {
    try {
        $category = new Category($_POST['name'], $_POST['type']);

        $stmt = $connection->prepare("INSERT INTO categories (name, type) VALUES (:name, :type)");
        $stmt->bindValue(':name', $category->getName());
        $stmt->bindValue(':type', $category->getType());
        $stmt->execute();

        header('Location: index.php');
    } catch (PDOException $PDOException) {
        if ($PDOException->getCode() == '23000') {
            echo '<p style="color: red;">Value already in database!</p>';
        } else {
            echo '<p style="color: red">' . $PDOException->getMessage() . '</p>';
        }
    } catch (\Exception $e) {
        echo '<p style="color: red">' . $e->getMessage() . '</p>';
    }
}

?>

<form action="addCategory.php" method="post">
    Name: <input type="text" name="name" value="<?= (isset($_POST['name'])) ? htmlspecialchars($_POST['name']) : '' ?>"><br>
    Type: <select name="type">
        <option value="Vegetables">Vegetables</option>
        <option value="Fruits">Fruits</option>
    </select> <br>
    <input type="submit" value="Add Category"><br>
</form>
