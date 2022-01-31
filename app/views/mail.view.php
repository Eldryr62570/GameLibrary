<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mail.style.css">
    <script src="https://kit.fontawesome.com/9121f1a0ce.js" crossorigin="anonymous"></script>
</head>

<body>
    <section id="contact">
        <div class="contact-box">
            <div class="contact-links">
                <h2>CONTACT</h2>
                <i class="fas fa-gamepad"></i>
                
            </div>
            <div class="contact-form-wrapper">
                <form action="mailer.php" method="POST">
                    <div class="form-item" >
                        <input type="text" name="name_mail" required>
                        <label>Name:</label>
                    </div>
                    <div class="form-item">
                        <input type="text" name="email_mail" required>
                        <label>Email:</label>
                    </div>
                    <div class="form-item">
                        <textarea class="" name="message_mail" required></textarea>
                        <label>Message:</label>
                    </div>
                    <button class="submit-btn">Send</button>
                </form>
                <?php 
                //Message d'envoie du mail
                if(isset($_SESSION)){
                    if(isset($_SESSION["verif"])){
                        if($_SESSION["verif"]==true){
                            echo'<div class="valid">Message envoyé a l\'administrateur !</div>' ;
                        }
                        //Pour que la session se vide si on recharge la page 
                        $_SESSION["verif"]= [];
                    }
                    
                }
                ?>
            </div>
        </div>
    </section>
</body>

</html>