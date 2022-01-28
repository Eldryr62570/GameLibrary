<?php 


require 'connDb.php';

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("DROP TABLE Editeurs ");
$pdo->exec("DROP TABLE Jeux");
$pdo->exec("DROP TABLE Plateforme");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

echo "Database tables supprimées ! ";

