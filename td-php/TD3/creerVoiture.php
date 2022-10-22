
<?php
require_once "Model.php";
require_once "Voiture.php";

$voiture = new Voiture($_POST['marque'],$_POST['couleur'],$_POST['immatriculation'],$_POST['sieges']);
$voiture->sauvegarder();

?>