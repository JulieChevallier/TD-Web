<?php

namespace App\Covoiturage\Model\DataObject;

class Voiture extends AbstractDataObject {

    private string $marque;
    private string $couleur;
    private string $immatriculation;
    private int $nbSieges;


    public function __construct(
        $marque,
        $couleur,
        $immatriculation,
        $nbSieges
    )
    {
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->immatriculation = $immatriculation;
        $this->nbSieges = $nbSieges;
    }

    public function formatTableau(): array {
        return array(
            "immatriculation" => $this->getImmatriculation(),
            "marque" => $this->getMarque(),
            "couleur" => $this->getCouleur(),
            "nbSieges" => $this->getNbSieges(),
        );
    }

    public function setImmatriculation(string $immatriculation) {
        $this->immatriculation = substr($immatriculation, 0, 8);
    }

    public function getCouleur(): string { return $this->couleur;}

    public function setCouleur(string $couleur) { $this->couleur = $couleur;}

    public function getImmatriculation(): string { return $this->immatriculation;}

    public function getNbSieges(): int { return $this->nbSieges;}

    public function setNbSieges(int $nbSieges) { $this->nbSieges = $nbSieges;}

    public function getMarque(): string { return $this->marque;}

    public function setMarque(string $marque) { $this->marque = $marque;}
}
?>
