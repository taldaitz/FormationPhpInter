<?php

namespace formes;

class Rectangle {
    private $longueur;
    private $hauteur;
    private $cheminImage;

    public function __construct($longueur, $hauteur)
    {
        $this->longueur = $longueur;
        $this->hauteur = $hauteur;
    }


    public function __toString()
    {
        return 'Rectangle(' . $this->longueur . ', ' . $this->hauteur . ')';
    }

    public function dessiner() {
        $result = '';

        for($j = 0; $j < $this->hauteur; $j++) {

            for($i = 0; $i < $this->longueur; $i++) {
                $result .= '* '; // => $result = $result . '* ';
            }

            $result .= '<br/>';
        }

        return $result;
    }

    public function dessinerGD() {
        $im = imagecreatetruecolor($this->longueur + 4, $this->hauteur + 4);
        $white = imagecolorallocate($im, 255, 255, 255);

        imagefilledrectangle($im, 2, 2, $this->longueur, $this->hauteur, $white);

        $this->cheminImage = './img/rectangle_' . $this->longueur . '_' . $this->hauteur . '.png';

        imagepng($im, $this->cheminImage);
        imagedestroy($im);
    }

    public function getImageHTML() {
        return '<img src="' . $this->cheminImage . '"/>';
    }
}