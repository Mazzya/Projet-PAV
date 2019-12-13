<?php
require 'conexion.php';
session_start();

$utilisateur = $_POST['utilisateur'];
$mdp = $_POST['mdp'];

$sql = "SELECT COUNT(*) as compter FROM administrateur WHERE ident = '$utilisateur' and mdp = '$mdp'";

$requete = mysqli_query($conexion, $sql);
$array = mysqli_fetch_array($requete);

if($array['compter']>0){
    $_SESSION['utilisateur'] = $utilisateur;
    header("location: pageprincipale.php");
} else {
    echo "Données incorrectes <br>";
    echo "<a href='login.php'>Retour</a>";
}
?>