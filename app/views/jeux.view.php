<?php 


// on va chercher les jeux dans la base 

require_once "../db/connDb.php";

// requête 

$sql = "SELECT * FROM Jeux ORDER BY 'id_jeux' LIMIT 10;";
$sqlediteur = "SELECT * FROM Editeurs ORDER BY 'id_edit' LIMIT 9;";


// DESC 

//EXECUTE LA REQUETE 

$requete = $pdo->query($sql);
$requete2 = $pdo->query($sqlediteur);
// on recupere les données 

$Jeux = $requete->fetchAll();
$Editeurs = $requete2->fetchAll();

?>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="css/jeux.style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="navbar">
            <nav class="navigation hide" id="navigation">
                <span class="close-icon" id="close-icon" onclick="showIconBar()"><i class="fa fa-close"></i></span>
                <ul class="nav-list">
                    <li class="nav-item"><a href="index.view.php">Accueil</a></li>
                    <li class="nav-item"><a href="#">Plateforme</a></li>
                    <li class="nav-item"><a href="#">Editeurs de Jeux</a></li>
                </ul>
            </nav>
            <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
            <div class="brand">Game Library</div>
        </div>


        <section class="banniere" id="banniere"> <!-- suite en tête de page -->
                <canvas id="canvas" class="canvas" width="1480" height="850"></canvas>
                <h2>Retrouvez dans notre grande bibliothèques </h2>
                <a href="#menu" class="btn1">Voir les jeux  </a>
        </section>
    
        <div class="search-box">
            <div>
                <select name="Plateforme" id="Search_plateforme">
                    <option value="Plateforme1">Playstation</option>
                    <option value="Plateforme2">Xbox</option>
                    <option value="Plateforme3">Nintendo</option>
                    <option value="Plateforme4">PC</option>
                </select>
                <select name="jouabilite" id="search_jouabilite">
                    <option value="jouabilite1">Multijoueurs en ligne</option>
                    <option value="jouabilite2">Coop en ligne</option>
                    <option value="jouabilite3">Solo</option>
                    <option value="jouabilite4">Multijoueurs local</option>
                    <option value="jouabilite5">Coop local</option>
                </select>
                <select name="genre" id="">
                    <option value="genre1">Action</option>
                    <option value="genre2">Aventure</option>
                    <option value="genre3">Stratégie</option>
                    <option value="genre4">3D</option>
                    <option value="genre5">Famille</option>
                </select>
                <input type="text" name="q" placeholder="search ...">
                <button><i class="fa fa-search"></i></button>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="subforum">
            <div class="subforum-title">
                <h1>Jeux vidéo</h1>
            </div>

            <div class="contenu">
                <?php foreach($Jeux as $Jeu){?>
                <div class="box">
                                <h2><a href="#"><?php echo $Jeu["nom_jeux"]; ?></h2>
                                <div class="imbox">
                                    <img src="img/jeuxvideo1.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h3><?php echo $Jeu["descrip"]; ?></h3>
                                </div>
                                <div class="datesortie">
                                    <h5><?php echo $Jeu["date_sortie"]; ?></h5>
                                </div>
                                <div class="bouton3">
                                    <a href="#menu" class="btn1">Voir les jeux</a>
                                </div>
                </div>

                <?php }?>
            </div>
                
            
            
            <div class="subforum-title2">
                <h1>Editeurs de jeux vidéo</h1>
            </div>

            <div class="subforum-row-edit">
             <?php foreach($Editeurs as $Editeur){?>
                    <div class="subforum-icon subforum-column center">
                        <h2><?php echo $Editeur["nom_editeur"]; ?></h2>
                    </div>
                    <div class="subforum-description subforum-column">
                        <h3><?php echo "Description : <br>".$Editeur["descri"]; ?></h3>
                        <h4><?php echo "Date de création : <br> ".$Editeur["date_edition"] ?></h4>
                    
                        <h4><?php echo "Jeux les plus vendu : <br> ".$Editeur["Jeux_le_plus_vendu"] ?><h4>
                    </div>
               <?php }?>
            </div>
        </div>
   </div>







        <script type="text/javascript">
            
            function hideIconBar(){
        var iconBar = document.getElementById("iconBar");
        var navigation = document.getElementById("navigation");
        iconBar.setAttribute("style", "display:none;");
        navigation.classList.remove("hide");
        }

        function showIconBar(){
        var iconBar = document.getElementById("iconBar");
        var navigation = document.getElementById("navigation");
        iconBar.setAttribute("style", "display:block;");
        navigation.classList.add("hide");
        }
        </script>
        <script src="js/canvas.js"></script>
</body>
</html>