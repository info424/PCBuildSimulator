<?php

session_start();

use Ilbah\Shop\Cart;
use Ilbah\Shop\Shop;

require_once "index.php";

$cart = new Cart();

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product_Key) {
        $cart->add(Shop::$products[$product_Key]);
    }
}


if (isset($_GET['product'])) {
    $cart->add(Shop::$products[$_GET['product']]);

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
<link href="main.css" rel="stylesheet">
<table border="1">
    <tr>
        <td>ID</td>
        <td>Product Name</td>
        <td>Price</td>
        <td>Category</td>
        <td>Quantity</td>
        <td>Remove</td>
    </tr>
    <?php foreach ($cartProducts as $productId => $quantity): ?>
        <tr>
            <td><?php echo Shop::$products[$productId]->getId(); ?></td>
            <td><?php echo Shop::$products[$productId]->getName(); ?></td>
            <td><?php echo Shop::$products[$productId]->tax(); ?></td>
            <td><?php echo Shop::$products[$productId]->getCategory()->getName(); ?></td>
            <td><?php echo $quantity ?></td>
            <td>
                <form action="remove_from_cart.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $productId ?>">
                    <input type="submit" value="Remove">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="3">Total <?= $totalPrice?></td>
        <td colspan="2">Total <?= $totalQty?></td>
    </tr>
</table>

<a href="list.php">Shop

</a>