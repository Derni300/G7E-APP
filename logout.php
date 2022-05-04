<?php
session_start();
 
// Annuler toutes les variables de session
$_SESSION = array();
 
// Détruit la session
session_destroy();
 
// Redirige vers le login
header("location: login.php");
exit;
?>