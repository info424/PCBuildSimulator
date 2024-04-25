<?php

/** HTTP verbs
 * GET =
 * POST =
 * PUT =
 * PATCH =
 * DELETE =
 */


/**
 *  200 = success
 * 201 = created
 *
 */



// Get = parametrii se trimit prin url
// https://localhost/index.php?nume=Marian&prenume=Alex
// in action pui html file ul adica index.html

    var_dump($_REQUEST);

    if (isset($_GET['first_name']) && isset($_GET['last_name'])) {
        echo 'Hello ' . $_GET['first_name'] . ' ' . $_GET['last_name'];
    }


    if (!empty($_POST)){
        echo 'Hello World!' . $_POST['first_name'] . ' ' . $_POST['last_name'] . '<br>';
}

?>


<!--<form action="index.php" method='GET'>-->
<!--   First name: <input type='text' name='first_name'> <br/>-->
<!--    Last name: <input type='text' name='last_name'> <br/>-->
<!--    <input type="submit" value="Send">-->
<!--</form>-->

<form action="index.php?color=blue" method='POST'>
    First name: <input type='text' name='first_name'> <br/>
    Last name: <input type='text' name='last_name'> <br/>
    <input type="submit" value="Send">
</form>




