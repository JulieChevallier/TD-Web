<?php
require_once 'Model.php';
require_once 'Voiture.php';



foreach (Voiture::getVoitures() as $valeur){
    echo $valeur->afficher(). "<br>";
}
