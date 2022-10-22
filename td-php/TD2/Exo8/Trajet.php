<?php

class Trajet
{
    private int $id;
    private string $depart;
    private string $arrivee;
    private string $date;
    private int $nbPlaces;
    private int $prix;
    private string $conducteurLogin;

    public function __construct(int $id, string $depart, string $arrivee, string $date, int $nbPlaces, int $prix, string $conducteurLogin)
    {
        $this->id = $id;
        $this->depart = $depart;
        $this->arrivee = $arrivee;
        $this->date = $date;
        $this->nbPlaces = $nbPlaces;
        $this->prix = $prix;
        $this->conducteurLogin = $conducteurLogin;
    }

    public function afficher()
    {
        echo "
        $this->id 
        $this->depart
        $this->arrivee
        $this->date
        $this->nbPlaces
        $this->prix
        $this->conducteurLogin";
    }

    public static function construire(array $trajetFormatTableau) : Trajet {
        $trajet = new Trajet($trajetFormatTableau['id'],$trajetFormatTableau['depart'], $trajetFormatTableau['arrivee'], $trajetFormatTableau['date'], $trajetFormatTableau['nbPlaces'], $trajetFormatTableau['prix'], $trajetFormatTableau['conducteurLogin']);
        return $trajet;
    }

    public static function getTrajets(): array{
        $pdoStatement = Model::getPdo()->query('SELECT * FROM trajet');

        $trajetFormatTableau = $pdoStatement->fetch();
        $tableau[] = Trajet::construire($trajetFormatTableau);
        foreach($pdoStatement as $trajetFormatTableau){
            $tableau[] = Trajet::construire($trajetFormatTableau);;
        }
        return $tableau;
    }


}