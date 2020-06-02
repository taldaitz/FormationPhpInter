<?php

class Fournisseur extends Personne {
    public $numFournisseur;

    public function envoyerEmail()
    {
        return "Mr le fournisseur";
    }
}