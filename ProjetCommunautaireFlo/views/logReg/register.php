<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter/S'inscrire</title>
</head>
<body>
    <!--Formulaire de connexion et d'inscription-->
    <h1>Connexion / Inscription</h1>

    <form id='register-form' action="" method="POST">
        <label>Nom : </label>
        <input name="lastusr" type="text" placeholder="Votre nom" required><br>
        <input name="firstusr" type="text" placeholder="Votre prenom" required><br>
        <input name="mail" type="email" placeholder="Votre mail" required><br>
        <input name="pwd" type="password" placeholder="Votre Mot de passe" required><br>
        <input name="repwd" type="password" placeholder="Confirmation du mot de passe" required><br>

        
        <!--<p>Vous etes :</p>
        <input name="checkEtu" type="radio" value="">
        <label for="Etudiant">Etudiant</label><br>
        <input name="checkProf" type="radio" value="">
        <label for="Professeur">Professeur</label><br>
        <input name="checkPerso" type="radio" value="">
        <label for="Personnel">Personnel</label><br>-->
        
       
        <button type="submit" name="formRegister">S'inscrire</button>
        <a href="./views/logReg/login.php">Je me connecte !</a>
    </form>
</body>
</html>