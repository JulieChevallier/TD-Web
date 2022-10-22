<?php
echo "</br>";
echo "<b>Lire trajet :</b>";
/** @var ModelTrajet $trajets */
foreach ($trajets as $trajet) {
    $idHTML = htmlspecialchars($trajet->getId());
    $idURL = rawurlencode($trajet->getId());
    echo "<p>
    ID Trajet
    <a href=\"./frontController.php?action=read&controller=trajet&id={$idURL}\"> {$idHTML}</a>,
    {$trajet->getPDepart()} vers {$trajet->getPArrivee()}
    </p>";
}

echo "</br>";
echo "<b>Supprimer trajet :</b>";
foreach ($trajets as $trajet) {
    $idHTML = htmlspecialchars($trajet->getId());
    $idURL = rawurlencode($trajet->getId());
    echo "<p>
    ID Trajet
    <a href=\"./frontController.php?controller=trajet&action=delete&id={$idURL}\"> {$idHTML}</a>,
    {$trajet->getPDepart()} vers {$trajet->getPArrivee()}
    </p>";
}


echo "</br>";
echo "<b>Modifier trajet :</b>";
foreach ($trajets as $trajet) {
    $idHTML = htmlspecialchars($trajet->getId());
    $idURL = rawurlencode($trajet->getId());
    echo "<p>
    ID Trajet
    <a href=\"./frontController.php?controller=trajet&action=update&id={$idURL}\"> {$idHTML}</a>,
    {$trajet->getPDepart()} vers {$trajet->getPArrivee()}
    </p>";
}
?>