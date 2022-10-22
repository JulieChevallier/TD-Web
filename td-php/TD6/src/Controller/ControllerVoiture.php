<?php

//require_once __DIR__ .('/../Model/Voiture.php');

namespace App\Covoiturage\Controller;
use App\Covoiturage\Model\Repository\AbstractRepository;
use App\Covoiturage\Model\Repository\VoitureRepository as VoitureRepository;
use App\Covoiturage\Model\DataObject\Voiture as Voiture;


class ControllerVoiture extends AbstractController {

    public static function readAll(): void {
        $voitures = (new VoitureRepository())->selectAll(); //appel au modèle pour gerer la BD
        self::afficheVue('view.php',
            ["voitures" => $voitures,"pagetitle" => "Liste des voitures", "cheminVueBody" => "voiture/list.php"]);
    }

    public static function read(): void {
        $voiture = (new VoitureRepository())->select($_GET['immat']);
        if ($voiture) {
            self::afficheVue('view.php',
                ["voiture" => $voiture, "pagetitle" => "Voiture", "cheminVueBody" => "voiture/detail.php"]);
        } else {
            self::afficheVue('view.php',
                ["pagetitle" => "Erreur", "cheminVueBody" => "voiture/erreur.php"]);
        }
    }

    public static function create(): void {
        self::afficheVue('view.php',
            ["pagetitle" => "Creation", "cheminVueBody" => "voiture/create.php"]);
    }

    public static function created(): void {
        $voiture = new Voiture($_POST['marque'], $_POST['couleur'], $_POST['immatriculation'], $_POST['sieges']);
        (new VoitureRepository())->sauvegarder($voiture);
        $voitures = (new VoitureRepository())->selectAll();
        self::afficheVue('view.php',
            ["voitures" => $voitures,"pagetitle" => "Crée", "cheminVueBody" => "voiture/created.php"]);
    }

    public static function update(): void {
        $voiture = (new VoitureRepository())->select($_GET['immat']);
        self::afficheVue('view.php',
            ["voiture" => $voiture, "pagetitle" => "Modification", "cheminVueBody" => "voiture/update.php"]);
    }

    public static function updated(): void {
        $voiture = new Voiture($_GET['marque'], $_GET['couleur'], $_GET['immatriculation'], $_GET['sieges']);
        (new VoitureRepository())->update($voiture);
        $voitures = (new VoitureRepository())->selectAll();
        self::afficheVue('view.php',
            ["immatriculation" => $voiture->getImmatriculation(),"voitures" => $voitures,"pagetitle" => "Updated", "cheminVueBody" => "voiture/updated.php"]);
    }

    public static function delete(): void {
        $immatriculation = $_GET['immat'];
        (new VoitureRepository())->supprimer($immatriculation);
        $voitures = (new VoitureRepository())->selectAll();
        self::afficheVue('view.php',
            ["voitures" => $voitures,"immatriculation" => $immatriculation, "pagetitle" => "Suppression", "cheminVueBody" => "voiture/deleted.php"]);
    }

    public static function error(string $errorMessage = "") {
        self::afficheVue("view.php",
            ["errorMessage" => $errorMessage,"pagetitle" => "Erreur", "cheminVueBody" => "voiture/erreur.php"]);
    }

}
?>
