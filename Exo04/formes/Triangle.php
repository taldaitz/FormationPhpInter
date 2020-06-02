<?php

namespace formes;

class Triangle extends Forme {

    public function dessinerSpecifique($image, $couleur) {
        $points = [
            0, $this->hauteur,
            $this->longueur / 2, 0,
            $this->longueur, $this->hauteur
        ];

        imagefilledpolygon($image, $points, 3, $couleur);
    }


    public function getNomClasse()
    {
        return 'Triangle';
    }
    
}