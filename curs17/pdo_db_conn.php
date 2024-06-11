<?php

//Conectarea la baza de date

$user = 'root';
$password = '';
$host = 'localhost';

try {
    $connection = new PDO("mysql:host=$host;dbname=bazar", $user, $password);
} catch (PDOException $e) {
    var_dump($e);  echo '<br><br>';
    echo $e->getMessage();
}

//$stmt = $connection->prepare("SELECT * FROM cars");
//$stmt->execute();
//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>';
//print_r($result);