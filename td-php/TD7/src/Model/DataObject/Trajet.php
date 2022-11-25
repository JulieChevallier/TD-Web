<?php

namespace App\Covoiturage\Model\DataObject;

class Trajet extends AbstractDataObject {

    private $id;
    private string $depart;
    private string $arrivee;
    private string $date;
    private int $nbPlaces;
    private int $prix;
    private string $conducteurLogin;

    public function __construct(
        $id,
        string $depart,
        string $arrivee,
        string $date,
        int $nbPlaces,
        int $prix,
        string $conducteurLogin
    )
    {
        $this->id = $id;
        $this->depart = $depart;
        $this->arrivee = $arrivee;
        $this->date = $date;
        $this->nbPlaces = $nbPlaces;
        $this->prix = $prix;
        $this->conducteurLogin = $conducteurLogin;
    }

    public function formatTableau(): array {
        return array(
            "id" => $this->getId(),
            "depart" => $this->getPDepart(),
            "arrivee" => $this->getPArrivee(),
            "date" => $this->getDate(),
            "nbPlaces" => $this->getNbplaces(),
            "prix" => $this->getPrix(),
            "conducteurLogin" => $this->getConducteurLogin()
        );
    }


    public function getId() { return $this->id;}

    public function setId(int $id): void { $this->id = $id; }

    public function getPDepart(): string { return $this->depart; }

    public function setPDepart(string $depart): void { $this->depart = $depart; }

    public function getPArrivee(): string { return $this->arrivee; }

    public function setPArrivee(string $arrivee): void { $this->arrivee = $arrivee; }

    public function getDate(): string { return $this->date; }

    public function setDate(string $date): void { $this->date = $date; }

    public function getNbplaces(): int { return $this->nbPlaces; }

    public function setNbplaces(int $nbPlaces): void { $this->nbPlaces = $nbPlaces; }

    public function getPrix(): int { return $this->prix; }

    public function setPrix(int $prix): void { $this->prix = $prix; }

    public function getConducteurLogin(): string { return $this->conducteurLogin; }

    public function setConducteurLogin(string $conducteurLogin): void { $this->conducteurLogin = $conducteurLogin; }
}
