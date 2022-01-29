<?php 


require 'connDb.php';

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("DROP TABLE editeurs");
$pdo->exec("DROP TABLE jeux");
$pdo->exec("DROP TABLE plateforme");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

echo "Database tables supprimées ! ";

