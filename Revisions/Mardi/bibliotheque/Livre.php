<?php

namespace bibliotheque;

class Livre {

    public $titre;
    public  $auteur;
    private $datePublication;

    private $nbPage;
    private $pageEnCours = 0;

    public static $compteurLivresLus = 0;

    public function __construct($titre, $nbPage)
    {
        $this->titre = $titre;
        $this->nbPage = $nbPage;

        /*Aggrégation Forte*/
        $this->auteur = new Auteur();
    }

    public function lirePage() {
        if($this->pageEnCours < $this->nbPage) {
            $this->pageEnCours++;

            if($this->pageEnCours == $this->nbPage)
               Livre::$compteurLivresLus++;
        }
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function setDatePublication($datePublication) {
        $this->datePublication = $datePublication;
    }

    public function getDatePublication() {
        return $this->datePublication;
    }

}