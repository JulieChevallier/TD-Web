<?php

class Utilisateur
{
    private string $login;
    private string $nom;
    private string $prenom;


    public function __construct(
        $login,
        $nom,
        $prenom
    )
    {
        $this->login = $login;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }


}