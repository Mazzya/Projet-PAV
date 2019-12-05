<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestions des agents de collecte</title>
</head>
<body>
    <center>
        <h1>Gestions des Agents de collecte</h1>
        <?php
        include("connectbase.php");
        echo "<a href='formulaire_agent.php'>Ajouter un nouvel Agent</a> <br><br>";
		$mysqli = new mysqli('localhost', 'root', '', 'mcd');
		$mysqli->set_charset("utf8");
		$requete = 'SELECT * FROM agent';
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {echo '<tr>';
			echo $ligne['prenom'].' '.$ligne['nom'].'  '.$ligne['ident'].' ';
			echo $ligne['mdp'].' <td> <br>';
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