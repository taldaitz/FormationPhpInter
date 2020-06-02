<?php

namespace formes;

use formes\Forme;

class Rectangle extends Forme {

    public function dessinerSpecifique($image, $couleur) {
        imagefilledrectangle($image, 2, 2, $this->longueur, $this->hauteur, $couleur);
    }

    public function getNomClasse()
    {
        return 'Rectangle';
    }
}