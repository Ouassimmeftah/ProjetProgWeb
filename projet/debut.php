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
