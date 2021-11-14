<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter/S'inscrire</title>
</head>
<body>
    <!--Formulaire de connexion-->
    <form action="?controller=index&method=login" method="POST">
        <h1>Connexion</h1>
        <label>Nom d'utilisateur</label>
        <input name="loginuser" type="text" placeholder="Entrer le nom d'utilisateur" required><br/>
        <label>Mot de passe</label>
        <input name="mdpuser" type="password" placeholder="Entrer le mot de passe" required><br/>
        <input type="submit" name="formconnect" value="Se connecter">
    </form>
</body>
</html>

