<?php

$user = 'root';
$password = '';
$host = 'localhost';

try {
    $connection = new PDO("mysql:host=$host;dbname=bazar", $user, $password);
    echo 'Connected successfully';
} catch (PDOException $e) {
    var_dump($e);
    echo $e->getMessage();
}

$statements = [
    'CREATE TABLE IF NOT EXISTS categories (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name varchar(30) NOT NULL)',

    'CREATE TABLE IF NOT EXISTS fruits (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    category_id INT NOT NULL,
    expiresAt DateTime NOT NULL,
    price DOUBLE NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories (id))',
];

foreach ($statements as $statement) {
    $stmt = $connection->prepare($statement);
    $stmt->execute();
}

