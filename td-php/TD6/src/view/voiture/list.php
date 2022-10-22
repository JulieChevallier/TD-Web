
<?php
echo "</br>";
echo "<b>Lire voiture :</b>";
/** @var ModelVoiture $voitures */
foreach ($voitures as $voiture) {
    $immatHTML = htmlspecialchars($voiture->getImmatriculation());
    $immatURL = rawurlencode($voiture->getImmatriculation());
    echo "<p>
    Voiture d'immatriculation
    <a href=\"./frontController.php?controller=voiture&action=read&immat={$immatURL}\"> {$immatHTML} </a>
    </p>";
}

echo "</br>";
echo "<b>Supprimer voiture :</b>";
foreach ($voitures as $voiture){
    $immatHTML = htmlspecialchars($voiture->getImmatriculation());
    $immatURL = rawurlencode($voiture->getImmatriculation());
    echo "<p>
    Voiture d'immatriculation
    <a href=\"./frontController.php?controller=voiture&action=delete&immat={$immatURL}\"> {$immatHTML} </a>
    </p>";
}


echo "</br>";
echo "<b>Modifier voiture :</b>";
foreach ($voitures as $voiture){
    $immatHTML = htmlspecialchars($voiture->getImmatriculation());
    $immatURL = rawurlencode($voiture->getImmatriculation());
    echo "<p>
    Voiture d'immatriculation
    <a href=\"./frontController.php?controller=voiture&action=update&immat={$immatURL}\"> {$immatHTML} </a>
    </p>";
}
?>

