<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php use App\Covoiturage\Lib\MessageFlash;

        echo $pagetitle; ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="frontController.php?action=readAll&controller=voiture">Voitures</a></li>
            <li><a href="frontController.php?action=readAll&controller=utilisateur">Utilisateurs</a></li>
            <li><a href="frontController.php?action=readAll&controller=trajet">Trajets</a></li>
            <li><a href="frontController.php?action=formulairePreference"><span class="material-symbols-outlined">favorite</span></a></li>
        </ul>
    </nav>
</header>
<main>
    <?php
    foreach (['info', 'success', 'warning', 'danger'] as $type) {
        if (MessageFlash::contientMessage($type)) {
            foreach (MessageFlash::lireMessages($type) as $key=>$message) {
                echo '<div class="alert alert-' . $type . '">' . $message . '</div>';
            }
        }
    }
    require __DIR__ . "/{$cheminVueBody}";
    ?>
</main>
</body>
</html>
