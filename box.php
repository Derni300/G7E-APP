<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <ul>
        <li style='padding-right: 2px'><a href="index.php">Acceuil</a></li>
        <li style='padding-right: 2px'><a href="box.php">La boite</a></li>
        <li style='padding-right: 2px'><a href="team.php">L'équipe</a></li>
        <li><a href="contact.php">Contact</a></li>

        <?php 
            if($_SESSION["loggedin"] = false){
                echo "<li style='float:right';><a href='login.php'>Se connecter</a></li>";
                echo "<li style='float:right; padding-right: 2px;'><a href='register.php'>S'inscrire</a></li>";
            } else {
                echo "<li style='float:right';><a href='logout.php'>Se déconnecter</a></li>";
                echo "<li style='float:right; padding-right: 2px;'><a class='inverted'> Bienvenu " . $_SESSION["username"] . " !</a></li>";
            }      
        ?>
    </ul>
</nav>

<br>
<br>

<div class="container">
    <br>
    <br>

    <h2 class="subtitle">Données des Capteurs</h2>
    
    <br>
    <br>

    <div class="capteur">
            
        <h3>Température</h3>

        <div class="data-comp">

            <div>
                32°C
            </div>
            <img src="images/hot.png" alt="Feature 02" style="width: 5em;">
        </div>
    </div>

    <div class="capteur">

        <h3>CO2</h3>

        <div class="data-comp">

            <div>
                30%
            </div>
            <img src="images/co2-cloud.png" alt="Feature 01"  style="width: 6em;">
        </div>
    </div>
</div>
</body>
</html>