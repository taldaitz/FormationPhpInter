<?php

namespace classes;

use classes\Personnage;

class Voleur extends Personnage{

    public function __construct($nom)
    {
        parent::__construct($nom);

        $this->pointDeVie = 180;
        $this->attaque = 14;
        $this->defense = 14;
    }

    public function calculDegats() : float
    {
        return $this->attaque * 1.2;
    }

    public function calculDefense(): float
    {
        return $this->defense * 1.8;
    }

}