<?php

namespace formes;

abstract class Forme {
    protected $longueur;
    protected $hauteur;
    protected $cheminImage;

    public function __construct(int $longueur, int $hauteur)
    {
        $this->longueur = $longueur;
        $this->hauteur = $hauteur;
    }

    public function dessiner() {
        $im = imagecreatetruecolor($this->longueur + 4, $this->hauteur + 4);
        $white = imagecolorallocate($im, 255, 255, 255);

        $this->dessinerSpecifique($im, $white);

        $this->cheminImage = './img/' . $this->getNomClasse() . '_' . $this->longueur . '_' . $this->hauteur . '.png';

        imagepng($im, $this->cheminImage);
        imagedestroy($im);
    }


    public abstract function dessinerSpecifique($image, $couleur);

    public abstract function getNomClasse();

    public function getImageHTML() : string 
    {
        return '<img src="' . $this->cheminImage . '"/>';
    }


    public function __toString() : string
    {
        return $this->getNomClasse() . '(' . $this->longueur . ', ' . $this->hauteur . ')';
    }
}