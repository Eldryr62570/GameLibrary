<?php
    session_start();
    require_once("../db/connDb.php");
    $_SESSION["verif"]= "";
    $to  = 'jordan.moulin62570@gmail.com'; 
    $subject = 'Ticket Joueur';

    if(isset($_POST)){
        if($_POST["email_mail"]!=null && $_POST["message_mail"]!=null && $_POST["name_mail"]!=null){
            $email = $_POST["email_mail"];
            $message = $_POST["message_mail"];
            $name = $_POST["name_mail"];
        }
    }
    // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    // En-têtes additionnels
    $headers[] = 'To: Jordan <jordan.moulin62570@gmail.com>';
    $headers[] = 'From: '.$name.' : <'.$email.'>';
    if(mail($to, $subject, $message, implode("\r\n", $headers))){
        $_SESSION["verif"] = true ;
    }


    // Envoi en bdd pour sauvegarder les logs des emails !
        // Ecriture de la requête
        $sqlQuery = 'INSERT INTO mail(name_mail,email_mail,message_mail) VALUES (:name_mail,:email_mail,:message_mail)';   
        // Préparation
        $insertRecipe = $pdo->prepare($sqlQuery);   
        // Exécution de la requête avec les variables provenant de notre formulaire
        $insertRecipe->execute([
            'name_mail' => $name,
            'email_mail' => $email,
            'message_mail'=> $message
        ]);
    




header("Location:mail.view.php");