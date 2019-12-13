<?php
$host = "localhost";
$utilisateur = "root";
$mdp = "";
$bd = "mcd";
$nametourne = $_POST['touname'];

$conexion = mysqli_connect($host,$utilisateur,$mdp,$bd);
// Check connection
if ($conexion->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE ". $nametourne ." (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
PAV VARCHAR(30) NOT NULL,
AGENT VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conexion->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conexion->error;
}

$conexion->close();
?> 

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Creation Tourne</title>
</head>
<center>
        <?php  echo "<h1>Création de la tourné $nametourne !</h1>"; ?>
        <form name="inscription" method="post" action="transitiontourne.php">         
            
            <a href="formulaire_tourne.php">Continuer</a>
            
        </form>
</center>
        </html>