<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<center>
		<?php
		$mysqli = new mysqli('localhost', 'root', '', 'mcd');
		$mysqli->set_charset("utf8");
		$requete = 'SELECT * FROM pav';
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {echo '<tr>';
			echo $ligne['adresse'].' '.$ligne['code_postal'].' '.$ligne['ville'].'  ';
            echo $ligne['Taux_de_remplissage'].' <td> <br>';
            echo '<br>';            
		}
		$mysqli->close();?>
		<a href="formulaire_tourne.php">Retour</a>
		</center>
	</body> 
</html>

