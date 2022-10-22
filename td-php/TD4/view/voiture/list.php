<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des voitures</title>
</head>
<body>
<?php
/** @var ModelVoiture $voitures */
foreach ($voitures as $voiture)
    echo "<p>
    Voiture d immatriculation
    <a href=\"https://webinfo.iutmontp.univ-montp2.fr/~chevallierj/td-php/TD4/controller/routeur.php?action=read&immat={$voiture->getImmatriculation()}\"> {$voiture->getImmatriculation()} </a>
    </p>";
?>
</body>
</html>

