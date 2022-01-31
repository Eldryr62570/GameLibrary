<?php

// connexion à la Db

$host = 'localhost';
$db = 'gamelibrary';
$user = 'root';
$psw = '1234';
$port = '3306';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;port=$port;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new \PDO($dsn, $user, $psw, $options);
    echo 'Database connexion established! connexion établie - ';
} catch (\PDOExeption $e) {
    throw new \PDOExeption ($e->getMessage(), $e->getCode());
}

