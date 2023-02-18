<?php

use App\Covoiturage\Lib\ConnexionUtilisateur;

$loginHTML = htmlspecialchars($utilisateur->getLogin());
$nomHTML = htmlspecialchars($utilisateur->getNom());
$prenomHTML = htmlspecialchars($utilisateur->getPrenom());

echo "<ul>
        <li>Login : ". $loginHTML . "</li>
        <li>Nom : " . $nomHTML . "</li>
        <li>Prénom : " . $prenomHTML . "</li>
        </ul>";
if (ConnexionUtilisateur::estAdministrateur() || ConnexionUtilisateur::estUtilisateur($utilisateur->getLogin())){
    echo '<div class="edit">
            <a href="./frontController.php?controller=utilisateur&action=delete&login=' .
        rawurlencode($utilisateur->getLogin()) . '">' .
        '<span class="material-symbols-outlined delete">delete</span>' .
        '</a>' .
        '<a href="./frontController.php?controller=utilisateur&action=update&login=' .
        rawurlencode($utilisateur->getLogin()) . '">' .
        '<span class="material-symbols-outlined modify">edit</span>' .
        '</a>
           </div>';
}