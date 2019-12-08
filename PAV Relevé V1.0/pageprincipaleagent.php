<?php
session_start();
include("connectbase.php");
$utilisateur = $_SESSION['utilisateur'];

if(!isset($utilisateur)){
    header("location: loginagent.php");
} else {
    echo "<center><h1>Bienvenue dans ton espace $utilisateur</h1></center>";
    echo "<center><a href='gestionpav.php'>Consulter ma tournée</a> <br><br></center>";
    echo "<center><a href='sortiragent.php'>Se déconnecter</a></center>";
}
?>