<html>
<link rel="stylesheet" href="css/admin.css">
<body>
    <header class="bandeauh"></header>
    <div id="contenu">
<?php
session_start(); 


$mysqli = new mysqli('localhost', 'root', '', 'mcd');
		$mysqli->set_charset("utf8");
		$requete = 'SELECT * FROM releve';
		$resultat = $mysqli->query($requete);
while ($ligne = $resultat->fetch_assoc()) {
    echo '<tr>';    
    
                          
            ?>
            <center>  
            <table border="1" align="center" style="line-height:25px;">   
            <tr>
            <th>Nom de la tournée</th>
            <th>Date de la tournée</th>
            <th>ID de la tournée</th>
            <th>Commentaire</th>
            <th>Taux de remplissage</th>
            </tr>
            <tr>
 <td><?php echo $ligne['id_releve']; ?></td>
 <td><?php echo $ligne['Date_r']; ?></td>
 <td><?php echo $ligne['id_tournee']; ?></td>
 <td><?php echo $ligne['commentaire']; ?></td>
 <td><?php echo $ligne['Taux_de_remplissage']; ?></td>
 </tr>
            
            <form name="idr" method="post" action="formulaire_releve.php">                   		
			<input type='hidden' value=<?php echo $ligne['id_releve']; ?>  name='idrel'>
            <input type='submit' value='Remplir' name='sendiddd'>			
			</form>	
            </table>	
            </center>  					
			<?php			
            echo '<br>';          
            echo "<br>";
    
};     
?>
</div>
</body>
<footer class="bandeaub"></footer>
</html>