<?php

class Trajet
{
    private string $id;
    private string $depart;
    private string $arrivee;
    private string $date;
    private int $nbplaces;
    private int $prix;
    private string $conducteur_login;


    public function __construct(
        $id,
        $depart,
        $arrivee,
        $date,
        $nbplaces,
        $prix,
        $conducteur_login
    )
    {
        $this->id = $id;
        $this->depart = $depart;
        $this->arrivee = $arrivee;
        $this->date = $date;
        $this->nbplaces = $nbplaces;
        $this->prix = $prix;
        $this->conducteur_login = $conducteur_login;
    }


    public function afficher()
    {
        echo "
        $this->id 
        $this->depart 
        $this->arrivee
        $this->date
        $this->nbplaces
        $this->prix
        $this->conducteur_login";
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDepart(): string
    {
        return $this->depart;
    }

    /**
     * @param string $depart
     */
    public function setDepart(string $depart): void
    {
        $this->depart = $depart;
    }

    /**
     * @return string
     */
    public function getArrivee(): string
    {
        return $this->arrivee;
    }

    /**
     * @param string $arrivee
     */
    public function setArrivee(string $arrivee): void
    {
        $this->arrivee = $arrivee;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getNbplaces(): int
    {
        return $this->nbplaces;
    }

    /**
     * @param int $nbplaces
     */
    public function setNbplaces(int $nbplaces): void
    {
        $this->nbplaces = $nbplaces;
    }

    /**
     * @return int
     */
    public function getPrix(): int
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix(int $prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getConducteurLogin(): string
    {
        return $this->conducteur_login;
    }

    /**
     * @param string $conducteur_login
     */
    public function setConducteurLogin(string $conducteur_login): void
    {
        $this->conducteur_login = $conducteur_login;
    }


}