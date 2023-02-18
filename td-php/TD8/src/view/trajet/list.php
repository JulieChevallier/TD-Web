<?php
echo '<p><a href="./frontController.php?controller=trajet&action=create">Créer un Trajet</a></p><div class="container">';
foreach ($trajets as $trajet) {
    $trajetHTML = htmlspecialchars($trajet->getId());
    $trajetURL = rawurlencode($trajet->getId());
    echo '<div class="box"><span> Trajet : </span>' . '<a href="./frontController.php?controller=trajet&action=read&id=' .
        $trajetURL . '">' . $trajet->getPDepart() . ' vers ' . $trajet->getPArrivee() . '</a>' . '<div class="edit"><a href="./frontController.php?controller=trajet&action=delete&id=' .
        $trajetURL . '">' . '<span class="material-symbols-outlined delete">delete</span>' . '</a>' . ' <a href="./frontController.php?controller=trajet&action=update&id=' .
        $trajetURL . '">' . '<span class="material-symbols-outlined modify">edit</span>' . '</a></div></div>';
}
echo '</div>';