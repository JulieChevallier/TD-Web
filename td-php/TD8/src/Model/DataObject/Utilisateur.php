<?php

namespace App\Covoiturage\Model\DataObject;

use App\Covoiturage\Lib\MotDePasse;

class Utilisateur extends AbstractDataObject{

    private string $login;
    private string $nom;
    private string $prenom;
    private string $mdpHache;
    private bool $estAdmin;
    private string $email;
    private string $emailAValider;
    private string $nonce;

    public function __construct(string $login, string $nom, string $prenom, string $mdpHache, bool $estAdmin, string $email, string $emailAValider, string $nonce
    ) {
        $this->login = $login;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mdpHache = $mdpHache;
        $this->estAdmin = $estAdmin;
        $this->email = $email;
        $this->emailAValider = $emailAValider;
        $this->nonce = $nonce;
    }

    public function formatTableau(): array {
        return array(
            "login" => $this->getLogin(),
            "nom" => $this->getNom(),
            "prenom" => $this->getPrenom(),
            "mdpHache" => $this->getMdpHache(),
            "estAdmin" => $this->isEstAdmin() ? 1 : 0,
            "email" => $this->getEmail(),
            "emailAValider" => $this->getEmailAValider(),
            "nonce" => $this->getNonce()
        );
    }

    public static function construireDepuisFormulaire (array $tableauFormulaire) : Utilisateur {
        return new Utilisateur($tableauFormulaire['login'],
            $tableauFormulaire['nom'],
            $tableauFormulaire['prenom'],
            MotDePasse::hacher($tableauFormulaire['mdp']),
            array_key_exists('estAdmin', $tableauFormulaire) && $tableauFormulaire['estAdmin'] == 'on',
            $tableauFormulaire['email'],
            $tableauFormulaire['emailAValider'],
            $tableauFormulaire['nonce']
        );
    }

    public function getMdpHache(): string{return $this->mdpHache;}

    public function setMdpHache(string $mdpHache): void{$this->mdpHache = $mdpHache;}

    public function isEstAdmin(): bool{return $this->estAdmin;}

    public function setEstAdmin(bool $estAdmin): void{$this->estAdmin = $estAdmin;}

    public function getEmail(): string{return $this->email;}

    public function setEmail(string $email): void{$this->email = $email;}

    public function getEmailAValider(): string{return $this->emailAValider;}

    public function setEmailAValider(string $emailAValider): void{$this->emailAValider = $emailAValider;}

    public function getNonce(): string{return $this->nonce;}

    public function setNonce(string $nonce): void{$this->nonce = $nonce;}

    public function getLogin(): string { return $this->login; }

    public function setLogin(string $login): void { $this->login = $login; }

    public function getNom(): string { return $this->nom; }

    public function setNom(string $nom): void { $this->nom = $nom; }

    public function getPrenom(): string  { return $this->prenom; }

    public function setPrenom(string $prenom): void { $this->prenom = $prenom; }
}
