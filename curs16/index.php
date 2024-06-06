<?php

$user = 'root';
$password = '';
$host = 'localhost';

$connection = mysqli_connect($host, $user, $password,  'curs15');

if ($connection->connect_error) {
    echo "Connection failed: " . $connection->connect_error;
}

echo "Connected successfully";
echo "<br>";
$result = mysqli_query($connection, "SELECT * FROM users");
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo '<pre>';
print_r($data);
var_dump($data);