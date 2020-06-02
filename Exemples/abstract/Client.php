<?php

class Client extends Personne {
    public $numClient;

    public function envoyerEmail()
    {
        return "Cher Client";
    }
}