<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter/S'inscrire</title>
</head>
<body>
    
    <!--<h1>Connexion / Inscription</h1>

    <form id='register-form' action="" method="POST">
        <label>Nom : </label>
        <input name="lastusr" type="text" placeholder="Votre nom" required><br>
        <input name="firstusr" type="text" placeholder="Votre prenom" required><br>
        <input name="mail" type="email" placeholder="Votre mail" required><br>
        <input name="pwd" type="password" placeholder="Votre Mot de passe" required><br>
        <input name="repwd" type="password" placeholder="Confirmation du mot de passe" required><br>

        
        <p>Vous etes :</p>
        <input name="checkEtu" type="radio" value="">
        <label for="Etudiant">Etudiant</label><br>
        <input name="checkProf" type="radio" value="">
        <label for="Professeur">Professeur</label><br>
        <input name="checkPerso" type="radio" value="">
        <label for="Personnel">Personnel</label><br>
        
       
        <button type="submit" name="formRegister">S'inscrire</button>
        <a href="./views/logReg/login.php">Je me connecte !</a>
    </form>-->


    <!--Formulaire d'inscription-->
    <section class="container">
    <article class="register-form">

    <h1>Inscription</h1>

    <form id='register-form' action="./index.php?controller=register&method=register" method="POST">

        <section class="form-group">
        <input class='input-text' name="lastusr" type="text" placeholder="Votre nom" required><br/>
        </section>

        <section class="form-group">
            <input name="firstusr" type="text" placeholder="Votre prenom" required><br>
        </section>

        <section class="form-group">
        <input name="mail" type="email" placeholder="Votre mail" required><br>
        </section>

        <section class="form-group">
            <input name="pwd" type="password" placeholder="Votre Mot de passe" required><br>
        </section>

        <section class="form-group">
            <input name="repwd" type="password" placeholder="Confirmation du mot de passe" required><br>
        </section>

        <section class="form-group">
            <p>Votre classe :</p>
            <select name="classeMembre" required>
                <option value="" selected>Non renseigné</option>
                <option value="2nd">2nd</option>
                <option value="1ère" >1ère</option>
                <option value="Terminale">Terminale</option>
                <option value="BTS1">BTS1</option>
                <option value="BTS2">BTS2</option>
            </select>
        </section>

        <section class="form-group">
            <p>Vous êtes :</p>
            <select name="statMembre" required>
                <option value="etudiant" selected>Etudiant</option>
                <option value="personnel" >Personnel</option>
            </select>
        </section>

        <input type="submit" name="registerSubmit" value="Validez" class="btn btn-green">

        <section class="form-group">
        <a href="?controller=index&method=login">Se connecter</a>
        </section>
    </form>

    <!--Si erreur-->
    <?php
        //message si erreur de mot de passe
        if(isset($_GET['msgRegErreur'])){
            echo $_GET['msgRegErreur'];
        }

        if(isset($_GET['msgRegMailErreur'])){
            echo $_GET['msgRegMailErreur'];
        }
    ?>

    </article>
</section>
</body>
</html>