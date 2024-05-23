<?php
use Ilbah\Shop\Shop;

require_once "index.php";
?>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Product Name</td>
        <td>Price</td>
        <td>Category</td>
        <td>Buy Now</td>
    </tr>
    <?php foreach (Shop::$products as $product): ?>
    <tr>
        <td><?php echo $product->getId(); ?></td>
        <td><?php echo $product->getName(); ?></td>
        <td><?php echo $product->tax(); ?></td>
        <td><?php echo $product->getCategory()->getName(); ?></td>
        <td><a href="cart.php?product=<?php echo $product->getId() ?> ">Buy</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="cart.php">Cart

</a>