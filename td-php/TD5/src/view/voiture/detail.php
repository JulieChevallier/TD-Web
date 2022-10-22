
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Liste des voitures</title>-->
<!--</head>-->
<!--<body>-->
<?php
    /** @var ModelVoiture $voiture */
    $immatHTML = htmlspecialchars($voiture->getImmatriculation());
    $couleurHTML = htmlspecialchars($voiture->getCouleur());
    $marqueHTML = htmlspecialchars($voiture->getMarque());
    echo "<p>
    Voiture de marque {$marqueHTML}, 
    de couleur {$couleurHTML}, 
    d'immatriculation {$immatHTML}, 
    et de nbSieges {$voiture->getNbSieges()}
    </p>
    ";
?>
<!--</body>-->
<!--</html>-->