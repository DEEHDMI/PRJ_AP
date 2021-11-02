<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, student-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LPP-BtsSio</title>
    <!-- styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <nav class="navbar">
        <a href="?controller=index" class="navbar-brand">Communauté Lycée Pierre Poivre  <?php echo date("Y"); ?> </a>
        <ul class="navbar-nav">
            <?php //if(!empty($_SESSION['student'])): ?>
                <li><a class="nav-link" href="?controller=student">Personnels</a></li>
                <li><a class="nav-link" href="?controller=student&method=index">Étudiants</a></li>
                <!--<li><a class="nav-link" href="?controller=security&method=logout">Déconnexion</a></li>-->
            <?php //else: ?>
              <!--  <li><a class="nav-link" href="?controller=index&method=login">Connexion</a></li>-->
            <?php// endif; ?>
        </ul>
    </nav>
    <main class="container">
</body>
</html>

