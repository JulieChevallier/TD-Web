<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $pagetitle; ?></title>
    <link rel="stylesheet" type="text/css" href="css/page.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="frontController.php?action=readAll">Accueil</a></li>
            <li><a href="frontController.php?action=create">Création</a></li>
            <li><a href="frontController.php?action=readAll&controller=utilisateur">Utilisateur</a></li>
            <li><a href="frontController.php?action=readAll&controller=trajet">Trajet</a></li>
        </ul>
    </nav>
</header>
<main>
    <?php
    require __DIR__ . "/{$cheminVueBody}";
    ?>
</main>
<footer>
</footer>
</body>
</html>

