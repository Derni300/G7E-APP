<?php
session_start();
 
// Vérifiez si l'utilisateur est déjà connecté, si oui, redirigez-le vers la page d'accueil
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Inclut le fichier de configuration
require_once "config.php";
 
// Définit des variables et les initialises avec des valeurs vides
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Traite les données du formulaire lors de la soumission du formulaire
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Vérifie si le nom d'utilisateur est vide
    if(empty(trim($_POST["username"]))){
        $username_err = "Entrez le pseudonyme";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Vérifie si le mot de passe est vide
    if(empty(trim($_POST["password"]))){
        $password_err = "Entrez le mot de passe";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Valider les identifiants
    if(empty($username_err) && empty($password_err)){
        // Préparer une instruction select
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Lier les variables à l'instruction préparée en tant que paramètres
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Définir les paramètres
            $param_username = $username;
            
            // Tentative d'exécution de l'instruction préparée
            if(mysqli_stmt_execute($stmt)){
                // Stocke le résultat
                mysqli_stmt_store_result($stmt);
                
                // Vérifiez si le nom d'utilisateur existe, si oui, vérifiez le mot de passe
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Lier les variables de résultat
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Le mot de passe est correct, alors démarre une nouvelle session
                            session_start();
                            
                            // Stocker les données dans des variables de session
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Rediriger l'utilisateur vers la page d'accueil
                            header("location:index.php");
                        } else{
                            // Le mot de passe n'est pas valide, affiche un message d'erreur générique
                            $login_err = "Pseudonyme ou mot de passe incorrect";
                        }
                    }
                } else{
                    // Le nom d'utilisateur n'existe pas, affiche un message d'erreur générique
                    $login_err = "Pseudonyme ou mot de passe incorrect";
                }
            } else{
                echo "Veuillez réessayer";
            }

            // Fermer la déclaration
            mysqli_stmt_close($stmt);
        }
    }
    
    // Fermer la connexion
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="wrapper">
            <h2>Se connecter</h2>
            <p>Veuillez entrer vos identifiants.</p>

            <?php 
            if(!empty($login_err)){
                echo '<div class="alert alert-danger">' . $login_err . '</div>';
            }        
            ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Pseudonyme</label>
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>    
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>

                <br>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
                <p>Vous n'avez pas de compte ? <a href="register.php">S'enregistrer</a>.</p>
            </form>
        </div>
    </body>
</html>