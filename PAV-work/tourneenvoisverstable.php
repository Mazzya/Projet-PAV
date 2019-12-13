<?php
include("connectbase.php");
?>
<?php

if (isset ($_POST['valider'])){
            //On récupère les valeurs entrées par l'utilisateur :           
            $ville=$_POST['ville'];
           // $Taux_de_remplissage=$_POST['Taux_de_remplissage'];
//insert
$smtp = $db->query("INSERT INTO . $nametourne .( `adresse`, `code_postal`, `ville`, `Taux_de_remplissage`,`id_admin`)  VALUES ('$adresse', '$code_postal', '$ville', '0/4', '1');");}


?>

<a href="gestionpav.php" id="retour">Retour</a>