<?php
echo '<p><a href="./frontController.php?controller=voiture&action=create">Créer une voiture</a></p>
    <div class="container">';
foreach ($voitures as $voiture) {
    $immatHTML = htmlspecialchars($voiture->getImmatriculation());
    $immatURL = rawurlencode($voiture->getImmatriculation());
    echo '<div class="box"><span> Voiture d\'immatriculation</span>' . '<a href="./frontController.php?controller=voiture&action=read&immat=' .
        $immatURL . '">' . $immatHTML . '</a>' . '<div class="edit"><a href="./frontController.php?controller=voiture&action=delete&immat=' .
        $immatURL . '">' . '<span class="material-symbols-outlined delete">delete</span>' . '</a>' . '<a href="./frontController.php?controller=voiture&action=update&immat=' .
        $immatURL . '">' . '<span class="material-symbols-outlined modify">edit</span>' . '</a></div></div>';
}
echo '</div>';