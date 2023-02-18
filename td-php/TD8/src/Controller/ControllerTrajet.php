<?php

namespace App\Covoiturage\Controller;
use App\Covoiturage\Lib\MessageFlash;
use App\Covoiturage\Model\Repository\TrajetRepository;
use App\Covoiturage\Model\DataObject\Trajet;

class ControllerTrajet extends AbstractController {

    public static function readAll(): void {
        $trajets = (new TrajetRepository())->selectAll(); //appel au modèle pour gerer la BD
        self::afficheVue('view.php',
            ["trajets" => $trajets,"pagetitle" => "Liste des trajets", "cheminVueBody" => "trajet/list.php"]);
    }

    public static function read(): void {
        $trajet = (new TrajetRepository())->select($_GET['id']);
        if ($trajet) {
            self::afficheVue('view.php',
                ["trajet" => $trajet, "pagetitle" => "Trajet", "cheminVueBody" => "trajet/detail.php"]);
        } else {
            self::afficheVue('view.php',
                ["pagetitle" => "Erreur", "cheminVueBody" => "voiture/error.php"]);
        }
    }

    public static function create(): void {
        self::afficheVue('view.php',
            ["pagetitle" => "Creation", "cheminVueBody" => "trajet/create.php"]);
    }


    public static function created(): void {
        $trajet = new Trajet(NULL,$_POST['depart'], $_POST['arrivee'], $_POST['date'], $_POST['places'], $_POST['prix'], $_POST['login']);
        (new TrajetRepository())->sauvegarder($trajet);
        (new MessageFlash())->ajouter("success","La trajet a été créé.");
        self::redirection("?controller=trajet&action=readAll");
    }

    public static function update(): void {
        $trajet = (new TrajetRepository())->select($_GET['id']);
        self::afficheVue('view.php',
            ["trajet" => $trajet, "pagetitle" => "Modification", "cheminVueBody" => "trajet/update.php"]);
    }

    public static function updated(): void {
        $trajet = new Trajet($_GET['id'],$_GET['depart'], $_GET['arrivee'], $_GET['date'], $_GET['places'], $_GET['prix'], $_GET['login']);
        (new TrajetRepository())->update($trajet);
        (new MessageFlash())->ajouter("success","Le trajet a été modifié.");
        self::redirection("?controller=trajet&action=readAll");
    }

    public static function delete(): void {
        (new TrajetRepository())->supprimer($_GET['id']);
        (new MessageFlash())->ajouter("success","Le trajet a été supprimé.");
        self::redirection("?controller=trajet&action=readAll");
    }
}