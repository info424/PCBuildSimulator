<?php

session_start();

use Ilbah\Shop\Cart;

require_once "index.php";

$cart = new Cart();

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product_Key) {
        $cart->add($products[$product_Key]);
    }
}


if (isset($_GET['product'])) {
    $cart->add($products[$_GET['product']]);

    $_SESSION['cart'][] = $_GET['product'];
}

$cartProducts = [];
foreach($cart -> getItems() as $product) {
    if (! isset($cartProducts[$product->getId()])) {
        $cartProducts[$product->getId()] = 1;
    }   else {
        $cartProducts[$product->getId()]++;
    }
}
//dd($cartProducts);
//dump($_SESSION['cart'], $cart);

$totalPrice = 0;
$totalQty = 0;
foreach($cart -> getItems() as $product) {
    $totalPrice += $product -> tax();
    $totalQty++;
}

?>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Product Name</td>
        <td>Price</td>
        <td>Category</td>
        <td>Quantity</td>
    </tr>
    <?php foreach ($cartProducts as $productId => $quantity): ?>
        <tr>
            <td><?php echo $products[$productId]->getId(); ?></td>
            <td><?php echo $products[$productId]->getName(); ?></td>
            <td><?php echo $products[$productId]->getPrice(); ?></td>
            <td><?php echo $products[$productId]->getCategory()->getName(); ?></td>
            <td><?php echo $quantity ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="3">Total <?= $totalPrice?></td>
        <td colspan="2">Total <?= $totalQty?></td>
    </tr>
</table>

<a href="list.php">Shop

</a>