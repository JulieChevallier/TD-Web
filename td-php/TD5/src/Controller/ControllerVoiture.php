<?php

//require_once __DIR__ .('/../Model/ModelVoiture.php');

namespace App\Covoiturage\Controller;
use App\Covoiturage\Model\ModelVoiture as ModelVoiture;


class ControllerVoiture {

    public static function readAll() : void {
        $voitures = ModelVoiture::getVoitures();
        self::afficheVue('../view/view.php', ['voitures' => $voitures,
            "pagetitle" => "Liste des voitures", "cheminVueBody" => "voiture/list.php"]);

    }

    public static function read() : void {
        $immatriculation = $_GET['immat'];
        $voiture = ModelVoiture::getVoitureParImmat($immatriculation);
        if($voiture==null){
            self::afficheVue('../view/view.php', ["pagetitle" => "Erreur", "cheminVueBody" => "voiture/erreur.php"]);
        }else{
            self::afficheVue('../view/view.php', ['voiture' => $voiture, "pagetitle" => "Voiture", "cheminVueBody" => "voiture/detail.php"]);
        }
    }

    private static function afficheVue(string $cheminVue, array $parametres = []) : void {
        extract($parametres); // Crée des variables à partir du tableau $parametres
        require __DIR__ . "/../view/$cheminVue"; // Charge la vue
    }


    public static function create() : void {
        self::afficheVue('../view/view.php', ["pagetitle" => "Création voiture", "cheminVueBody" => "voiture/create.php"]);
    }


    public static function created() : void {
        $voiture = new ModelVoiture($_POST['marque'], $_POST['couleur'], $_POST['immatriculation'], $_POST['sieges']);
        $voiture->sauvegarder();
        $voitures = ModelVoiture::getVoitures();
        self::afficheVue('../view/view.php', ["voitures" => $voitures,"pagetitle" => "Voiture crée", "cheminVueBody" => "voiture/created.php"]);
    }
}
?>
