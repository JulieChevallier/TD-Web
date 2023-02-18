<?php
require_once __DIR__ . '/../src/Lib/Psr4AutoloaderClass.php';
use App\Covoiturage\Controller\ControllerVoiture;
use App\Covoiturage\Lib\PreferenceControleur;

$loader = new App\Covoiturage\Lib\Psr4AutoloaderClass();
$loader->addNamespace('App\Covoiturage', __DIR__ . '/../src');
$loader->register();

$action = $_GET['action'] ?? 'readAll';
$preference = PreferenceControleur::lire();
$controllerDefaut = $preference == "" ? 'voiture' : $preference;
$controller = $_GET['controller'] ?? $preference;

$controllerClassName = 'App\Covoiturage\Controller\Controller' . ucfirst($controller);

if (class_exists($controllerClassName)) {
    if (in_array($action,get_class_methods($controllerClassName))){
        $controllerClassName::$action();
    } else {
        ControllerVoiture::Error("La page : $action n'existe pas");
    }
} else {
    ControllerVoiture::Error("La page n'existe pas");
}


