<?php
require_once 'Model.php';
require_once 'Trajet.php';
require_once 'Utilisateur.php';



foreach (Utilisateur::getUtilisateurs() as $valeur){
    echo $valeur->afficher(). "<br>";
}

foreach (Trajet::getTrajets() as $valeur){
    echo $valeur->afficher(). "<br>";
}
