<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Liste des voitures</title>-->
<!--</head>-->
<!--<body>-->
<?php
/** @var ModelVoiture $voitures */
foreach ($voitures as $voiture) {
    $immatHTML = htmlspecialchars($voiture->getImmatriculation());
    $immatURL = rawurlencode($voiture->getImmatriculation());
    echo "<p>
    Voiture d immatriculation
    <a href=\"./frontController.php?action=read&immat={$immatURL}\"> {$immatHTML} </a>
    </p>";
}
//?>
<!--</body>-->
<!--</html>-->

