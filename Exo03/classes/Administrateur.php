<?php

namespace classes;

use classes\Utilisateur;

class Administrateur extends Utilisateur {

    public function __construct($nom, $email, $motDePasse)
    {
        parent::__construct($nom, $email, $motDePasse);

        $page = new Page();
        $page->nom = 'Accueil Admin';
        $page->url = '/admin/home';

        $this->pageAcceuil = $page;
    }


    public function checkMotDePasse($pwd) {
        return strlen($pwd) < 10 ? false : true; 
    }

}