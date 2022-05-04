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
        <li style='padding-right: 2px'><a href="box.html">La boite</a></li>
        <li style='padding-right: 2px'><a href="team.html">L'équipe</a></li>
        <li><a href="contact.html">Contact</a></li>

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
</body>
</html>