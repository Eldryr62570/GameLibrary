<?php


require dirname(__DIR__) . '../../vendor/autoload.php';

$faker = Faker\Factory::create('fr_FR');

require 'connDb.php';

$editeurs = [];
$jeux = [];
$plateforme = [];
$mail = [];

// clean table data

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("TRUNCATE TABLE editeurs");
$pdo->exec("TRUNCATE TABLE jeux");
$pdo->exec("TRUNCATE TABLE plateforme");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

echo 'Database tables cleaned successfuly ';

// Editeurs faker ( 25 id_editeurs)

for ($i = 0; $i < 25; $i++){
    
    $pdo->exec("INSERT INTO editeurs
                SET nom_editeur='{$faker->name}',
                    date_edition='{$faker->date} {$faker->time}',
                    descri='{$faker->paragraphs(rand(3,15), true)}',
                    Jeux_le_plus_vendu='{$faker->sentence(2)}'
                ");
    $editeurs[] = $pdo->lastInsertId();            
}

echo 'Editeurs, ';


// Jeux Faker 100 jeux ( 1 id_editeurs lié à 4 id_jeux )


for ($i = 0; $i < 100; $i++){

    $pdo->exec("INSERT INTO jeux
                SET 
                    nom_jeux='{$faker->sentence(2)}',
                    ft_image='image{$faker->numberBetween($min = 1, $max = 5)}.jpg',
                    descrip='{$faker->paragraphs(rand(3,15), true)}',
                    date_sortie='{$faker->date} {$faker->time}'
                ");
    $jeux[] = $pdo->lastInsertId();            
}

echo 'Jeux, ';


// plateforme Fake 10 plateforme 


for ($i = 0; $i < 10; $i++){
    
    $pdo->exec("INSERT INTO plateforme
                SET nom_plateforme='{$faker->name}',
                    date_creation='{$faker->date} {$faker->time}',
                    descript='{$faker->paragraphs(rand(3,15), true)}'
                
                ");
    $editeurs[] = $pdo->lastInsertId();            
}

echo 'Editeurs, ';
// mail fake (10 mails)

for ($i = 0 ; $i<10;$i++){
    $pdo->exec("INSERT INTO mail 
                SET email_mail ='{$faker->email}',
                    name_mail = '{$faker->name}',
                    message_mail = '{$faker->paragraphs(rand(3,15),true)}'
    ");
    $mail[] = $pdo->lastInsertId();
}

echo'Mail ,';





