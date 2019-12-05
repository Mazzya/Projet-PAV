<html>
<head>
	<title>Consultation liste voyages</title>
</head>
<body>
<?php
//connexion à la base de données PARTIR
$db=mysqli_connect ("localhost", "root", "", "partir") or die ("Connexion au serveur impossible");

// Projection du contenu de la table VOYAGE
	$sql="select * from voyage order by Intitule";
// Exécution de la requête
	$res=mysqli_query($db,$sql) or die("Consultation des voyages impossible.");
// Affichage du résultat de la requête
	echo "<h3><p align='center'> Liste des voyages</p></h3>";
	echo "<table align='center' border='1'>";
	echo "<tr><th>Code du voyage</th><th>Intitulé</th><th>Description</th><th>Date départ</th><th>Date retour</th><th>Prix Adulte</th><th>Prix Enfant</th><th>Nombre de places </th></tr>";
	while($ligne=mysqli_fetch_array($res))
	{
		echo "<tr>";
			echo "<td>".$ligne['CodeVoyage']."</td>";
			echo "<td>".$ligne['Intitule']."</td>";
			echo "<td>".$ligne['Descriptif']."</td>";
			echo "<td>".$ligne['DateDebut']."</td>";
			echo "<td>".$ligne['DateFin']."</td>";
			echo "<td>".$ligne['PrixAdulte']."</td>";
			echo "<td>".$ligne['PrixEnfant']."</td>";
			echo "<td>".$ligne['NbMaxParticipant']."</td>";
		echo "</tr>";
	}
	echo "</table>";
// Fermeture de la connexion à MySQL
	mysqli_close($db);
?>
<form action="index.html"><p align="center"><input type="submit" value="retour au menu"></p></form>
</body>
</html>
