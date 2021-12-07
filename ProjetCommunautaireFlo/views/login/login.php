<div class="body_light">
<button class="btn">Light/Dark</button>
<script src="./assets/js/darkMode.js"></script>


    <section class="container">
        <article class="login-form">
    <!--Formulaire de connexion-->
        <form action="./index.php?controller=user&method=login" method="POST">

    <h1>Connexion</h1>

        <section class="form-group">   
            <label>Nom d'utilisateur</label>
            <input name="loginuser" type="text" placeholder="Entrer le nom d'utilisateur" required class="form-control"><br/>
        </section>
        <section class="form-group">   
            <label>Mot de passe</label>
            <input name="mdpuser" type="password" placeholder="Entrer le mot de passe" required class="form-control"><br/>
        </section>
            <input type="submit" name="formconnect" value="Se connecter" class="btn">
        </form>
    <article>
    </section>
</div>

