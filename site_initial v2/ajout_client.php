<html>
<head>
	<title>Ajout nouveau client</title>
</head>
<body>
<?php
//connexion à la base de données PARTIR
$db=mysqli_connect ("localhost", "root", "", "partir") or die ("Connexion au serveur impossible");
//récupération des données du formulaire
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$cp=$_POST['cp'];
$ville=$_POST['ville'];
$tel=$_POST['tel'];
 
// Requête d'insertion des valeurs dans la table CLIENT
	$req1="INSERT INTO client (Nom, Prenom, Adresse, cp, Ville, Tel) VALUES ('$nom','$prenom','$adresse','$cp','$ville','$tel')";
// Exécution de la requête
	echo "<h1> <p align ='center'>Enregistrement d'un nouveau client</p></h1>";
	mysqli_query($db,$req1) or die("insertion du client impossible.");
	echo "<p align='center'>$nom $prenom a été enregistré comme nouveau client. <br><br></p>";

// Fermeture de la connexion à MySQL
	mysqli_close($db);
?>
<form action="index.html"><p align="center"><input type="submit" value="retour au menu"></p></form>
</body>
</html>
