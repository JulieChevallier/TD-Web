<!DOCTYPE html>
<html>
<head>
    <title>Voiture</title>
</head>

<body>
<?php
require_once "Voiture.php";

$marque = 'vroum';
$couleur = 'oui-oui';
$immatriculation = '69';
$nbSieges = 2;

$voiture1 = new Voiture($marque,$couleur,$immatriculation,$nbSieges);
//echo $voiture1->afficher();
?>
</body>
</html>



