<?php session_start(); 
if (!isset($_SESSION['prenom'])){
	header('Location:loginag.php');
}

if (isset($_GET['page']) && ($_GET['page'] == "deconnect")){
	echo "test";
	session_destroy();
	header('Location:loginag.php');
}
?>

<!doctype html>
<html>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/style.css" /> 
<body>
<div class= "fond1">  
  
 <contain class="central">
    
        <div id="respge">
            
    <div class="resag"> <img src="images/logoresp.png"/></div>
    <p>
    <center><h1><strong>Bienvenu </strong> : <?= $_SESSION['prenom']." ".$_SESSION['nom']; ?></h1></center><br />
    <?php



$mysqli = new mysqli('localhost', 'root', '', 'mcd');
		$mysqli->set_charset("utf8");
		$requete = 'SELECT * FROM tournee';
		$resultat = $mysqli->query($requete);
while ($ligne = $resultat->fetch_assoc()) {
    echo '<tr>';    
    
    if ($ligne['ID_Age'] == intval($_SESSION['ID_Age'])) {                        
            ?>
            <center>  
            <table border="1" align="center" style="line-height:25px;">   
            <tr>
            <th>Nom de la tournée</th>
            <th>Date de la tournée</th>
            
            </tr>
            <tr>
 <td><?php echo $ligne['Nom_tour']; ?></td>
 <td><?php echo $ligne['Date_t']; ?></td>
 
 </tr>
            
            <form name="idttt" method="post" action="pagereleve.php">                   		
			<input type='hidden' value=<?php echo $ligne['id_tournee']; ?>  name='idtou'>
            <input type='submit' value='Liste des releves' name='sendiddd'>
			</form>	
            </table>	
            </center>  					
			<?php			
            echo '<br>';          
            echo "<br>";
    }
 
};     


/*
action="editreleve.php"
action="formulaire_releve.php"
*/
?>

<center><a href="?page=deconnect">Deconnexion</a></center>

<div class="resag"><img src="images/logosbasresp.png"  /></div>  
     

   </div> 
</contain>
</body>
    
