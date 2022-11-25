<?php
/** @var ModelUtilisateur $utilisateur */
$loginHTML = htmlspecialchars($utilisateur->getLogin());
$nomHTML = htmlspecialchars($utilisateur->getNom());
$prenomHTML = htmlspecialchars($utilisateur->getPrenom());
echo "<p>
    Login Utilisateur {$loginHTML}, 
    de nom {$nomHTML}, 
    de prenom {$prenomHTML}
    </p>
    ";
?>