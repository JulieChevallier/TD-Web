<?php

namespace App\Covoiturage\Controller;

abstract class AbstractController{
    protected static function afficheVue(string $cheminVue, array $parametres = []): void {
        extract($parametres);
        require __DIR__ . "/../view/$cheminVue";
    }
}