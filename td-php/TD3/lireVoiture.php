<?php
require_once 'Model.php';
require_once 'Voiture.php';



foreach (Voiture::getVoitures() as $valeur){
    echo $valeur->afficher(). "<br>";
}
$imma = 'ABCDEF85';
echo Voiture::getVoitureParImmat($imma)->afficher(). "<br>";

$v = new Voiture("Peugeot","noir","WXXZZF22",4);
$v->sauvegarder();