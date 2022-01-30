<?php
    session_start();
    $_SESSION["verif"]= "";
    $to  = 'jordan.moulin62570@gmail.com'; 
    $subject = 'Ticket Joueur';

    if(isset($_POST)){
        if($_POST["email"]!=null && $_POST["message"]!=null && $_POST["name"]!=null){
            $email = $_POST["email"];
            $message = $_POST["message"];
            $name = $_POST["name"];
        }
    }
    

    // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    // En-têtes additionnels
    $headers[] = 'To: Jordan <jordan.moulin62570@gmail.com>';
    $headers[] = 'From: '.$name.' : <'.$email.'>';
    

    // Envoi
    if(mail($to, $subject, $message, implode("\r\n", $headers))){
        $_SESSION["verif"] = true ;
    }
header("Location:mail.view.php");