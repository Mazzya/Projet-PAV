<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Administrateur</title>
</head>
<body>
    <center>
        <h1>Identification - Administrateur</h1>
        <div id="login">
        <form action="log.php" method="POST">
            <b><label>Identifiant: </label></b>
            <input type="text" name="utilisateur"><br><br>
            <b><label>Mot de passe: </label></b>
            <input type="password" name="mdp"><br>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <br><br><br><br>
    <b><a href="portail.php" id="retour">Retour</a></b>
    </center>
</body>
</html>