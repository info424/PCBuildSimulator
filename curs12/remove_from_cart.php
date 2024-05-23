<?php


session_start();

$product_id = $_POST['product_id']; // scoate product ID ul din post method, cand dau click pe remove se da req prin post ca sa fie ermoved

$key = array_search($product_id, $_SESSION['cart']); // cauta in sesiunea de cart value == product id. El da return la prima val gasita, daca nu e gasita da false
if ($key !== false) {
    unset($_SESSION['cart'][$key]);
}
//daca e gasit, face unset => care da remove la elementele din cart

header('Location: cart.php'); // inapoi redirect ca sa dai update la cart
// trimite un raw http header la client ca sa te retrimita la cart.php pt a iti da update la codul dupa remove/upd



