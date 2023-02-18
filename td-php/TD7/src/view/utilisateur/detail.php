<?php
$loginHTML = htmlspecialchars($utilisateur->getLogin());
$nomHTML = htmlspecialchars($utilisateur->getNom());
$prenomHTML = htmlspecialchars($utilisateur->getPrenom());

echo "<ul>
        <li>Login : ". $loginHTML . "</li>
        <li>Nom : " . $nomHTML . "</li>
        <li>Prénom : " . $prenomHTML . "</li>
        </ul>";
