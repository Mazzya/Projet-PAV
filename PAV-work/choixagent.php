<?php
$value =  $_POST['select'];
var_dump($value)
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<center>
		<h1>Choississez un agent à affecter</h1>
		<?php        
		$mysqli = new mysqli('localhost', 'root', '', 'mcd');
		$mysqli->set_charset("utf8");
		$requete = 'SELECT * FROM agent';
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {echo '<tr>';
			echo $ligne['prenom'].' '.$ligne['ident'].'  ';
			echo $ligne['mdp'].' '.$ligne['ID_Age'].' <td>';
			error_reporting(E_ALL);	
			
				
			?>		
			<form name="envoisagent" method="post">
			<input type='submit' value='+' name='ajout'><input type='hidden' value="<?php $ligne['prenom']; ?>"  name='select'><br><br>
			</form>
			
							
			<?php
			


            echo '<br>';         
		}
		$mysqli->close();?>
		<a href="formulaire_tourne.php">Retour</a>
		</center>
	</body> 
</html>





