<?php

abstract class Personne {
    public $nom;
    public $prenom;
    public $adresse;
    public $tel;

    public function appeler() {
        return $this->tel;
    }

    public abstract function envoyerEmail();
}