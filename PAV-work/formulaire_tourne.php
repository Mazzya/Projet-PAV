<?php
include("connectbase.php");
?>

<html>

        <center>
            <h1>Formulaire de saisie des Tournée</h1>
            <h2>Entrez les données demandées :</h2>
            <form name="inscription" method="post" action="gestiontourne.php">                   
            Agent à affectée: <a href="choixagent.php">Agent</a> <br/><br> 
            PAV à affectée: <a href="choixpav.php">PAV</a> <br/><br> 
            <br><br>
            <input type="submit" name="valider" value="Ajouters"/><br><br>
            <a href="gestiontourne.php">Retour</a> 
                   
            
            </form>
        </center>
</html>