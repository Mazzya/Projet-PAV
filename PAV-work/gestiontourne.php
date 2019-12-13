<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestions Tournee</title>
</head>
<body>
    <center>
        <h1>Gestions des Tournee</h1>
        <?php
        include("connectbase.php");
        echo "<a href='addtourne.php'>Ajouter une nouvelle tournee</a> <br><br>";
		$mysqli = new mysqli('localhost', 'root', '', 'mcd');
		$mysqli->set_charset("utf8");
		$requete = 'SELECT * FROM tournee';
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {echo '<tr>';
			echo $ligne['id_tournee'].' '.$ligne['date'].' <td>';	
			echo "<td>",'<input type="button" value="Modifier" href="lien"/>',"</td>";
			echo "</tr>";
			echo "<td>",'<input type="button" value="Supprimer" href="lien"/>',"</td>";
			echo "</tr>";
			echo"</br><br>";
		}
		$mysqli->close();?>
        <form>
		<input type="button" value="RETOUR" onclick="location='pageprincipale.php'" />
		</form> 
    </center>

</body>
</html>