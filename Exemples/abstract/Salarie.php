<?php

class Salarie extends Personne {
    public $montantSalaire;
    public $typeContrat;


    public function envoyerEmail()
    {
        return "Cher Collaborateur";
    }
}