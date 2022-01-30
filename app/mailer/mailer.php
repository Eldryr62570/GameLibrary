<?php
$to = "jordan.moulin62570@gmail.com";
$subject ="Question sur les jeux !";
//vérification que $_POST existe
if(isset($_POST)){
    //vérification que toutes les données du formulaire ont été écrites
    if($_POST["message"]!=null && $_POST["sender"] != null && $_POST["mail"]!=null){
        $message_form = $_POST["message"];
        $from = $_POST["sender"];
        $from_mail = $_POST["mail"];
    }
        
}

$header = "MIME-Version:1.0\r\n";
$header.='From:"jordan.moulin62570@gmail.com"';
$header.='Content-Type:text/html; charset=utf-8'.'\n';
$header.='Content-Transfer-Encoding: 8bit';


$message = '
<html>
    <body>
        <div align="center">'
        .'Adresse mail du visiteur : '.$from_mail.

        'De : '.$from.'<br>'.
           'Demande : ' .$message_form.
        '</div>
    </body>
</html>
';
mail($to,$subject,$message,$header);
header("Location:../views/mail.view.php");