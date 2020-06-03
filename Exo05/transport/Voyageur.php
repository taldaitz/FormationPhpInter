<?php

namespace transport;

class Voyageur {
    public $nom;
    public $prenom;
    public $age;
    private $justificatif;

    public function __construct(string $nom, string $prenom, IControlable $justificatif)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->justificatif = $justificatif;
    }

    public function presenterJustificatif() : IControlable {
        return $this->justificatif;
    }

}