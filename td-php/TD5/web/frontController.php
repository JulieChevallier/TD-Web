<?php
use App\Covoiturage\Controller\ControllerVoiture;

require_once __DIR__ . "/../src/Controller/ControllerVoiture.php";
require_once __DIR__ . "/../src/Lib/Psr4AutoloaderClass.php";

$loader = new App\Covoiturage\Lib\Psr4AutoloaderClass();
$loader->addNamespace('App\Covoiturage', __DIR__ . '/../src');
$loader->register();


// On recupère l'action passée dans l'URL
$action = $_GET['action'];

// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action();
?>
