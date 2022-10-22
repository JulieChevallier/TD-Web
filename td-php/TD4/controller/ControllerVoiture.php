<?php
//require_once ('../model/ModelVoiture.php'); // chargement du modèle
//$voitures = ModelVoiture::getVoitures();     //appel au modèle pour gerer la BD
//require ('../view/voiture/list.php');  //redirige vers la vue


require_once ('../model/ModelVoiture.php');

class ControllerVoiture {

    public static function readAll() : void {
        $voitures = ModelVoiture::getVoitures();
        self::afficheVue('../view/voiture/list.php', ['voitures' => $voitures]);
    }

    public static function read() : void {
        $immatriculation = $_GET['immat'];
        $voiture = ModelVoiture::getVoitureParImmat($immatriculation);
        if($voiture==null){
            self::afficheVue('../view/voiture/erreur.php');
        }else{
            self::afficheVue('../view/voiture/detail.php', ['voiture' => $voiture]);
        }
    }

    private static function afficheVue(string $cheminVue, array $parametres = []) : void {
        extract($parametres); // Crée des variables à partir du tableau $parametres
        require "../view/$cheminVue"; // Charge la vue
    }


    public static function create() : void {
        self::afficheVue('../view/voiture/create.php');
    }

    public static function created() : void {
        $v = new ModelVoiture($_POST['marque'],$_POST['couleur'],$_POST['immatriculation'],$_POST['sieges']);
        $v->sauvegarder();
        self::readAll();
    }
}
?>
