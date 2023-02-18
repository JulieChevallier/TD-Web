<?php

namespace App\Covoiturage\Controller;

use App\Covoiturage\Lib\MessageFlash;
use App\Covoiturage\Model\Repository\AbstractRepository;
use App\Covoiturage\Model\Repository\VoitureRepository;
use App\Covoiturage\Model\DataObject\Voiture;

class ControllerVoiture extends AbstractController {
    // Déclaration de type de retour void : la fonction ne retourne pas de valeur
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
            (new MessageFlash())->ajouter("danger","La voiture n'existe pas");
        }
    }

    public static function create(): void {
        self::afficheVue('view.php',
            ["pagetitle" => "Creation", "cheminVueBody" => "voiture/create.php"]);
    }

    public static function created(): void {
        $voiture = new Voiture($_POST['marque'], $_POST['couleur'], $_POST['immatriculation'], $_POST['sieges']);
        (new VoitureRepository())->sauvegarder($voiture);
        (new MessageFlash())->ajouter("success","La voiture a été créé.");
        self::redirection("?controller=voiture&action=readAll");
    }

    public static function delete(): void {
        $immatriculation = $_GET['immat'];
        (new VoitureRepository())->supprimer($immatriculation);
        (new MessageFlash())->ajouter("success","La voiture a été créé supprimée.");
        self::redirection("?controller=voiture&action=readAll");
    }

    public static function update(): void {
        $voiture = (new VoitureRepository())->select($_GET['immat']);
        self::afficheVue('view.php',
            ["voiture" => $voiture, "pagetitle" => "Modification", "cheminVueBody" => "voiture/update.php"]);
    }

    public static function updated(): void {
        $voiture = new Voiture($_GET['marque'], $_GET['couleur'], $_GET['immatriculation'], $_GET['sieges']);
        (new VoitureRepository())->update($voiture);
        (new MessageFlash())->ajouter("success","La voiture a été modifée.");
        self::redirection("?controller=voiture&action=readAll");
    }

    public static function error(string $errorMessage = "") {
        self::afficheVue("view.php",
            ["errorMessage" => $errorMessage,"pagetitle" => "Erreur", "cheminVueBody" => "voiture/error.php"]);
    }
}
