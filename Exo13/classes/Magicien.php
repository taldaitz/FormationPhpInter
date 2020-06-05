<?php

namespace classes;

class Magicien extends Personnage {

    public $pointMagie;

    public function __construct($nom)
    {
        parent::__construct($nom);

        $this->pointDeVie = 120;
        $this->pointMagie = 300;
        $this->attaque = 8;
        $this->defense = 6;
    }

    

    public function calculDegats() : float
    {
        if($this->pointMagie >= 3) {
            $this->pointMagie -= 3;
            return 50;
        }
        return $this->attaque * 0.6;
    }

    public function calculDefense(): float
    {
        return $this->defense * 0.7;
    }

    public function afficherDetails(): string
    {
        return "
            <ul>
            <li>Nom : $this->nom</li>
            <li>Point de vie : $this->pointDeVie</li>
            <li>Point de magie : $this->pointMagie</li>
            <li>Attaque : $this->attaque</li>
            <li>Défense : $this->defense</li>
            </ul>
        ";
    }

}