
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des voitures</title>
</head>
<body>
<?php
    /** @var ModelVoiture $voiture */
    echo "<p>
    Voiture de marque {$voiture->getMarque()}, de couleur {$voiture->getCouleur()}, d'immatriculation {$voiture->getImmatriculation()}, et de nbSieges {$voiture->getNbSieges()}
    </p>
    ";
?>
</body>
</html>