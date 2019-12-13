<?php
session_start();
include("connectbase.php");
$utilisateur = $_SESSION['utilisateur'];

if(!isset($utilisateur)){
    header("location: login.php");
} else {
    echo "<center><h1>Bienvenue dans ton espace $utilisateur</h1></center>";
    echo "<center><a href='gestionpav.php'>Gestion des PAV</a> <br><br></center>";
    echo "<center><a href='gestionagents.php'>Gestion des Agent de collecte</a> <br><br></center>";
    echo "<center><a href='gestiontourne.php'>Gestion des Tournee</a> <br><br></center>";
    echo "<center><a href='sortir.php'>Se déconnecter</a></center>";
}
?>