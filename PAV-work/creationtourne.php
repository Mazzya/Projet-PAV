<?php
include("connectbase.php");
?>
<?php

if (isset ($_POST['valider'])){
            //On récupère les valeurs entrées par l'utilisateur :
            $adresse=$_POST['adresse'];
            $code_postal=$_POST['code_postal'];
      
           // $Taux_de_remplissage=$_POST['Taux_de_remplissage'];
//insert
$smtp = $db->query("INSERT INTO `pav`( `adresse`, `code_postal`, `ville`, `Taux_de_remplissage`,`id_admin`)  VALUES ('$adresse', '$code_postal', '$ville', '0/4', '1');");}


?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
</head>
<center>
        <h1>Tourné creer !</h1>
        <form name="inscription" method="post" action="transitiontourne.php">           
            <input type="submit" name="valider" value="Ajouter PAV"/><br><br>
            <a href="gestionpav.php">Continuer</a>
            
        </form>
</center>
        </html>
