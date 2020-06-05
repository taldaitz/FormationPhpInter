<?php

namespace classes;

class Guerrier extends Personnage {

    public function __construct($nom)
    {
        parent::__construct($nom);

        $this->pointDeVie = 210;
        $this->attaque = 18;
        $this->defense = 10;
    }

    public function calculDegats() : float
    {
        return $this->attaque * 1.4;
    }

    public function calculDefense(): float
    {
        return $this->defense;
    }

}