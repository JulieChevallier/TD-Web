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
        $trajets = (new TrajetRepository())->selectAll();
        self::afficheVue('view.php',
            ["trajets" => $trajets,"pagetitle" => "Crée", "cheminVueBody" => "trajet/create.php"]);
    }

    public static function update(): void {
        $trajet = (new TrajetRepository())->select($_GET['id']);
        self::afficheVue('view.php',
            ["trajet" => $trajet, "pagetitle" => "Modification", "cheminVueBody" => "trajet/update.php"]);
    }

    public static function updated(): void {
        $trajet = new Trajet($_GET['id'],$_GET['depart'], $_GET['arrivee'], $_GET['date'], $_GET['places'], $_GET['prix'], $_GET['login']);
        (new TrajetRepository())->update($trajet);
        $trajets = (new TrajetRepository())->selectAll();
        self::afficheVue('view.php',
            ["id" => $trajet->getId(),"trajets" => $trajets,"pagetitle" => "Updated", "cheminVueBody" => "trajet/update.php"]);
    }

    public static function delete(): void {
        $id = $_GET['id'];
        (new TrajetRepository())->supprimer($id);
        $trajets = (new TrajetRepository())->selectAll();
        self::afficheVue('view.php',
            ["trajets" => $trajets,"id" => $id, "pagetitle" => "Suppression", "cheminVueBody" => "trajet/delete.php"]);
    }
}