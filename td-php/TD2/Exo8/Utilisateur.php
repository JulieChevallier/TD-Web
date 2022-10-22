<?php

class Utilisateur
{
    private string $login;
    private string $nom;
    private string $prenom;

    public function __construct(string $login, string $nom, string $prenom)
    {
        $this->login = $login;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function afficher()
    {
        echo "
        $this->login
        $this->nom
        $this->prenom";
    }

    public static function construire(array $utilisateurFormatTableau) : Utilisateur {
        $utilisateur = new Utilisateur($utilisateurFormatTableau['login'],$utilisateurFormatTableau['nom'], $utilisateurFormatTableau['prenom']);
        return $utilisateur;
    }

    public static function getUtilisateurs(): array{
        $pdoStatement = Model::getPdo()->query('SELECT * FROM utilisateur');

        $utilisateurFormatTableau = $pdoStatement->fetch();
        $tableau[] = Utilisateur::construire($utilisateurFormatTableau);
        foreach($pdoStatement as $utilisateurFormatTableau){
            $tableau[] = Utilisateur::construire($utilisateurFormatTableau);;
        }
        return $tableau;
    }
}