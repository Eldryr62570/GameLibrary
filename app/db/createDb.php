<?php 


require 'connDb.php';

// creation des tables Db 

// table editeurs 

$pdo->exec("CREATE TABLE editeurs (
    id_edit INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nom_editeur         Varchar (255) NOT NULL ,
    date_edition TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP , 
    descri     text NOT NULL,
    Jeux_le_plus_vendu  Varchar (255) NOT NULL
)ENGINE=InnoDB");

echo 'Table : Editeurs ';


// table Jeux 


$pdo->exec("CREATE TABLE jeux (
    id_jeux     INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nom_jeux      Varchar (255) NOT NULL ,
    date_sortie TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP , 
    descrip     text NOT NULL,
    ft_image VARCHAR(255) NOT NULL,
    user_id int DEFAULT NULL


,FOREIGN KEY (user_id) REFERENCES editeurs (id_edit) ON DELETE NO ACTION ON UPDATE NO ACTION
)ENGINE=InnoDB");

echo 'Table : Jeux ';


// table Plateforme 

$pdo->exec("CREATE TABLE plateforme (
    id_plateforme  Int  Auto_increment  NOT NULL ,
    nom_plateforme Varchar (255) NOT NULL ,
    descript     text NOT NULL,
    date_creation TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP 
,CONSTRAINT Plateforme_PK PRIMARY KEY (id_plateforme)
)ENGINE=InnoDB");


echo "Table : Platforme ";

// table Mail
$pdo->exec("CREATE TABLE mail (
    id_mail  Int  Auto_increment  NOT NULL ,
    name_mail Varchar (255) NOT NULL ,
    email_mail Varchar(255) NOT NULL,
    message_mail text NOT NULL,
    date_creation TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP 
,CONSTRAINT Plateforme_PK PRIMARY KEY (id_mail)
)ENGINE=InnoDB");
echo "table : mail";

echo'Table - Plateforme toutes les tables sont crées!';


