<?php

class Diplome {
    public $intitule;
    public $date;
    public $niveau;
    public $stagiaire;
}

class Stagiaire {

    private $nom;
    private $prenom;
    private $diplome;

    public function getNom() : string {
        return $this->nom;
    }

    public function setNom(string $nom) : Stagiaire {
        $this->nom = $nom;
        return $this;
    }


    public function getPrenom() : string {
        return $this->prenom;
    }

    public function setPrenom(string $prenom) : Stagiaire {
        $this->prenom = $prenom;
        return $this;
    }


    public function getDiplome() : Diplome 
    {
        return $this->diplome;
    }

    public function setDiplome(Diplome $diplome) : Stagiaire { //TypeHint Diplome pour forcer à renseigner un diplome
        $this->diplome = $diplome;
        return $this;
    }

}

$diplome = new Diplome();
$diplome->intitule = 'BAC';
$diplome->date = '10/01/2000';
$diplome->niveau = 'Bac';

$stagiaire = new Stagiaire();

$stagiaire->setNom('Aldaitz');
$stagiaire->setPrenom('Thomas');
$stagiaire->setDiplome($diplome);


$student = new Stagiaire();

$student->setPrenom('Jean')
        ->setNom('Test')
        ->setDiplome($diplome);

