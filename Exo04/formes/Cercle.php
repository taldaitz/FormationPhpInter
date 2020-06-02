<?php

namespace formes;

class Cercle extends Forme {


    public function __construct(int $diametre)
    {
        parent::__construct($diametre, $diametre);
    }

    public function dessinerSpecifique($image, $couleur)
    {
        imagefilledellipse($image, $this->longueur / 2, $this->hauteur / 2, 
            $this->longueur, $this->hauteur, $couleur);
    }

    public function getNomClasse()
    {
        return 'Cercle';
    }

}