<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestions PAV</title>
</head>
<body>
    <center>
        <h1>Gestions des PAV</h1>
        <?php
        include("connectbase.php");
        echo "<a href='formulaire_pav.php'>Ajouter un nouveau PAV</a> <br><br>";
		$mysqli = new mysqli('localhost', 'root', '', 'mcd');
		$mysqli->set_charset("utf8");
		$requete = 'SELECT * FROM pav';
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {echo '<tr>';
			echo $ligne['adresse'].' '.$ligne['code_postal'].' '.$ligne['ville'].' ';
			echo $ligne['Taux_de_remplissage'].' <td>';
			echo "<td>",'<input type="button" value="Modifier" href="lien"/>',"</td>";
			echo "</tr>";
			echo "<td>",'<input type="button" value="Supprimer" href="lien"/>',"</td>";
			echo "</tr>";
			echo"</br><br>";
		}
		$mysqli->close();?>
        <a href="pageprincipale.php">Retour</a>
    </center>

</body>
</html>