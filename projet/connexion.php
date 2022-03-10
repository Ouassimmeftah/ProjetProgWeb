<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Jeu du 8 américain </title>
	<link rel="stylesheet" href="demo.css" />
	<script type="text/javascript" src="demo.js"></script>
	
</head>

<?php
/*
Page: connexion.php
*/
//à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
session_start();
//si le bouton "Connexion" est cliqué
if(isset($_POST['connexion'])){
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['pseudo'])){
        echo "Le champ Pseudo est vide.";
        header("Location: http://ssh1.pgip.universite-paris-saclay.fr/~ouassim.meftah/projet/debut.php"); // Redirection du navigateur
		exit;//on affiche pas le reste de la page pour faire une redirection parfaite et sans erreurs
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['mdp'])){
            echo "Le champ Mot de passe est vide.";
            header("Location: http://ssh1.pgip.universite-paris-saclay.fr/~ouassim.meftah/projet/debut.php"); // Redirection du navigateur
			exit;//on affiche pas le reste de la page pour faire une redirection parfaite et sans erreurs
        } else {
            // les champs pseudo & mdp sont bien postés et pas vides, on sécurise les données entrées par l'utilisateur
            //le htmlentities() passera les guillemets en entités HTML, ce qui empêchera en partie, les injections SQL
            $Pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, "UTF-8"); 
            $MotDePasse = htmlentities($_POST['mdp'], ENT_QUOTES, "UTF-8");
            
            
            
                    $_SESSION['pseudo'] = $Pseudo;
                    echo "Vous êtes à présent connecté avec le pseudo '$Pseudo'!";
                }
            }
        }
    
?>

</html>
