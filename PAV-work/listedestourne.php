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
		$requete = 'SELECT * FROM tournee';
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {echo '<tr>';
			echo $ligne['numero_tournee'].' '.$ligne['date'].' <td>';			
			echo "<td>",'<input type="button" value="Modifier" href="lien"/>',"</td>";
			echo "</tr>";
			echo "<td>",'<input type="button" value="Supprimer" href="lien"/>',"</td>";
			echo "</tr>";
			echo"</br><br>";
		}
		$mysqli->close();?>
		<a href="gestiontourne.php">Retour</a>
		</center>
	</body> 
</html>

