<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter/S'inscrire</title>
</head>
<body>
<section class="container">

    <article class="login-form">
    <!--Formulaire de connexion -->
    <h1>Connexion</h1>

    <form id='login-form' action="./index.php?controller=login&method=login" method="POST">

        <section class="form-group">
        
        <input name="loginuser" type="text" placeholder="Entrer le nom d'utilisateur" required><br/>
        </section>
        <section class="form-group">
        <input name="mdpuser" type="password" placeholder="Entrer le mot de passe" required><br/>
        </section>

        <input type="submit" value="Validez" class="btn btn-green">

        <section class="form-group">
        <a href="?controller=index&method=register">Pas encore inscrit ? Créer un compte !</a>
        </section>
    </form>


    <?php
        //Message si erreur de connexion
        if(isset($_GET['msg'])){
            echo $_GET['msg'];
        }

        //Message Inscription
        elseif(isset($_GET['msgRegSuccess'])){
            echo $_GET['msgRegSuccess'];
        }
        
    ?>



    </article>
</section>
</body>
</html>

