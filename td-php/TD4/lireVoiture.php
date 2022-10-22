<?php
require_once 'Model.php';
require_once 'ModelVoiture.php';



foreach (ModelVoiture::getVoitures() as $valeur){
    echo $valeur->afficher(). "<br>";
}
