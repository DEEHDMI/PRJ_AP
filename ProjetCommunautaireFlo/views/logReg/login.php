
    <!--Formulaire de connexion et d'inscription-->
    <h1>Connexion</h1>

    <form id='login-form' action="./index.php?controller=user&method=login" method="POST">

        <label>Nom d'utilisateur</label>
        <input name="loginuser" type="text" placeholder="Entrer le nom d'utilisateur" required><br/>
        <label>Mot de passe</label>
        <input name="mdpuser" type="password" placeholder="Entrer le mot de passe" required><br/>
        
        <button type="submit" name="formConnect">Se connecter</button>
        <a href="./views/logReg/register.php">Pas encore inscrit ? Créer un compte !</a>
    </form>

    <?php
        if(isset($erreur)){
            echo $erreur;
        } 
    ?>
</body>
</html>

