<?php 


require 'connDb.php';

// creation des tables Db 

// table editeurs 

$pdo->exec("CREATE TABLE Editeurs (
    ID_edit             Int  Auto_increment  NOT NULL ,
    nom_editeur         Varchar (255) NOT NULL ,
    date_edition        Date NOT NULL ,
    Jeux_le_plus_vendu  Varchar (255) NOT NULL
    ,CONSTRAINT Editeurs_PK PRIMARY KEY (ID_edit)
)ENGINE=InnoDB");

echo 'Table : Editeurs ';


// table Jeux 


$pdo->exec("CREATE TABLE Jeux (
    ID_jeux       Int  Auto_increment  NOT NULL ,
    nom_jeux      Varchar (255) NOT NULL ,
    date_parution Date NOT NULL ,
    ID_edit       Int NOT NULL
,CONSTRAINT Jeux_PK PRIMARY KEY (ID_jeux)

,CONSTRAINT Jeux_Editeurs_FK FOREIGN KEY (ID_edit) REFERENCES Editeurs(ID_edit)
)ENGINE=InnoDB");

echo 'Table : Jeux ';


// table Plateforme 

$pdo->exec("CREATE TABLE Plateforme (
    ID_plateforme  Int  Auto_increment  NOT NULL ,
    nom_plateforme Varchar (255) NOT NULL ,
    date_creation  Date NOT NULL
,CONSTRAINT Plateforme_PK PRIMARY KEY (ID_plateforme)
)ENGINE=InnoDB");

echo 'Table - Plateforme toutes les tables sont crées!';


?>

