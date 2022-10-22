<?php
echo "Marque : ". $_GET['marque'] .'<br>';
echo "Couleur : ". $_GET['couleur'] .'<br>';
echo "Nombre de sièges : ". $_GET['nbSieges'] .'<br>';
echo "Immatriculation : ". $_GET['immatriculation'] .'<br>';

require_once "Voiture.php";
$marque =$_GET['marque'];
$couleur=$_GET['couleur'];
$immatriculation=$_GET['immatriculation'];
$nbSieges=$_GET['nbSieges'];
$voiture1 = new Voiture($marque,$couleur,$immatriculation,$nbSieges);
echo $voiture1->afficher();
?>
