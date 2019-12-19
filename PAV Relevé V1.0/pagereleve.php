<html>
<link rel="stylesheet" href="css/style.css">
<body>
     <contain class="central">
    
        <div id="respge">
            
    <div class="resag"> <img src="images/logoresp.png"/></div>
<?php
session_start(); 
$recup = $_POST["idtou"];

$mysqli = new mysqli('localhost', 'root', '', 'mcd');
		$mysqli->set_charset("utf8");
		$requete = 'SELECT * FROM releve';
		$resultat = $mysqli->query($requete);
while ($ligne = $resultat->fetch_assoc()) {
    echo '<tr>';    
    
    if ($ligne['id_tournee'] == ($recup)) {                        
            ?>
            <center>  
            <table border="1" align="center" style="line-height:25px;">   
            <tr>
            <th>ID du relevé</th>
            <th>Date de la tournée</th>
            <th>ID du PAV</th>
            </tr>
            <tr>
 <td><?php echo $ligne['id_releve']; ?></td>
 <td><?php echo $ligne['Date_r']; ?></td>
 <td><?php echo $ligne['id_pav']; ?></td>
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
    }
};     
?>
 <div class="resag"><img src="images/logosbasresp.png"  /></div>  
     

   </div> 
</contain>
</body>

</html>