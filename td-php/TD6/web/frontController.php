<?php
use App\Covoiturage\Controller\ControllerVoiture as ControllerVoiture;
require_once __DIR__ . "/../src/Lib/Psr4AutoloaderClass.php";

$loader = new App\Covoiturage\Lib\Psr4AutoloaderClass();
$loader->addNamespace('App\Covoiturage', __DIR__ . '/../src');
$loader->register();

$action = $_GET['action'] ?? "readAll";
$controller = $_GET['controller'] ?? "voiture";
$controllerClassName = 'App\Covoiturage\Controller\Controller' . ucfirst($controller);

if(class_exists($controllerClassName)){
    if(in_array($action,get_class_methods($controllerClassName))){//si dans tableau
        $controllerClassName::$action();
    }
    else{
        ControllerVoiture::Error("La page : $action n'existe pas");
    }
}
else{
    ControllerVoiture::Error("La page n'existe pas");
}
?>
