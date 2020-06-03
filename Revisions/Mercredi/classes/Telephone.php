<?php

class Telephone {

    public $couleur;
    public $numero;

    use traitComposer;


    public function appeler(string $numero) {
        echo 'Bonjour ' . $numero;
    }

    public function sonner() : string 
    {
        return 'DDDrrriiinngg';
    }

}