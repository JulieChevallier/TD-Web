<?php

namespace App\Covoiturage\Controller;

use App\Covoiturage\Lib\MessageFlash;
use App\Covoiturage\Lib\PreferenceControleur;

abstract class AbstractController {

    protected static function afficheVue(string $cheminVue, array $parametres = []): void {
        extract($parametres); // Crée des variables à partir du tableau $parametres
        require __DIR__ . "/../view/$cheminVue"; // Charge la vue
    }

    public static function formulairePreference(): void {
        self::afficheVue('view.php',
            ["pagetitle" => "formulairePreference ", "cheminVueBody" => "formulairePreference.php"]);
    }

    public static function enregistrerPreference(): void {
        $valeur = $_POST['controleur_defaut'];
        self::redirection("?controller=$valeur&action=readAll");
        (new MessageFlash())->ajouter("success","Les préférences ont étés ajoutés");
    }

    public static function redirection($url): void {
        header("Location: $url");
        exit();
    }
}