<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Jeu du 8 américain </title>
	<link rel="stylesheet" href="demo.css" />
	<script type="text/javascript" src="demo.js"></script>
	
</head>
<body>
		<p> <b style="text-decoration: underline">  Page de connexion pour le jeu du 8 américain </b> </p>
	
	
	
	
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
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['mdp'])){
            echo "Le champ Mot de passe est vide.";
        } else {
            // les champs pseudo & mdp sont bien postés et pas vides, on sécurise les données entrées par l'utilisateur
            //le htmlentities() passera les guillemets en entités HTML, ce qui empêchera en partie, les injections SQL
            $Pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, "UTF-8"); 
            $MotDePasse = htmlentities($_POST['mdp'], ENT_QUOTES, "UTF-8");
            
            
            
                    $_SESSION['pseudo'] = $Pseudo;
                    echo "Vous êtes à présent connecté !";
                }
            }
        }
    
?>

<form action="connexion.php" method="post">
    Pseudo: <input type="text" name="pseudo" placeholder="..."/>
    <br />
    Mot de passe: <input type="password" name="mdp" placeholder="..."/>
    <br />
    
    
<select name="niveau" >
	<option value=""> Renseignez votre niveau </option>
	<option value="debutant"> Débutant </option>
	<option value="medium"> Moyen </option>
	<option value="pro"> Professionnel </option>
</select>

    
    
    <input type="submit" name="connexion" value="Connexion" />
</form>

</body>
</html>
