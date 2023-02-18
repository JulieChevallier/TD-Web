<?php
echo '<p><a href="./frontController.php?controller=utilisateur&action=create">Créer un utilisateur</a></p><div class="container">';
foreach ($utilisateurs as $utilisateur) {
    $utilHTML = htmlspecialchars($utilisateur->getLogin());
    $utilURL = rawurlencode($utilisateur->getLogin());
    echo '<div class="box"><span> Utilisateur :</span> ' . '<a href="./frontController.php?controller=utilisateur&action=read&login=' .
        $utilURL . '">' . $utilHTML . '</a>' . '<div class="edit"><a href="./frontController.php?controller=utilisateur&action=delete&login=' .
        $utilURL . '">' . '<span class="material-symbols-outlined delete">delete</span>' . '</a>' . '<a href="./frontController.php?controller=utilisateur&action=update&login=' .
        $utilURL . '">' . '<span class="material-symbols-outlined modify">edit</span>' . '</a></div></div>';
}
echo '</div>';