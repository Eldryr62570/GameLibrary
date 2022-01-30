<?php 
// fonction qui recupère les table de jeux 



function getJeu()
{
    require('../db/connDb.php');
    $req = $bdd->prepare('SELECT id , title FROM Jeux ORDER BY id DESC');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();
}


// function qui recupere un jeux la table 
function getJeux($id)
{
    require('../db/connDb.php');
    $req = $bdd->prepare('SELECT * FROM Jeux WHERE id = ?');
    $req->execute(array($id));
    if($req->rowCount() == 1)
    {
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    }    
    else 
        header('Location : ../views/jeux.view.php');
}