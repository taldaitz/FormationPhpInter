<?php

namespace classes;

class Utilisateur {
    public $nom;
    private $email;
    private $motDePasse;
    public $pageAcceuil;

    public function __construct($nom, $email, $motDePasse)
    {

        $this->nom = $nom;
        $this->__set('email', $email);
        $this->__set('motDePasse', $motDePasse);

        $page = new Page();
        $page->nom = 'Accueil';
        $page->url = '/home';

        $this->pageAcceuil = $page;
    }

    public function __set($attribut, $valeur) {

        if($attribut == 'email') {
            if($this->checkEmail($valeur))
                $this->email = $valeur;
        }
        
        if($attribut == 'motDePasse') {
            if($this->checkMotDePasse($valeur))
                $this->motDePasse = $valeur;
        }

    }

    public function __get($attribut) {
        
        if($attribut == 'email')
            return $this->email;

        if($attribut == 'motDePasse') {

            $mdp = '';
            for($i = 0; $i < strlen($this->motDePasse); $i++) {
                $mdp .= '*';
            }

            return $mdp;
        }
    }

    public function checkEmail($email) {
        return strpos($email, '@') === false ? false : true;

    }

    public function checkMotDePasse($pwd) {
        return strlen($pwd) < 6 ? false : true; 
    }

    public function __toString()
    {
        return 'Nom : ' . $this->nom . '<br/>' .
               "Email : $this->email <br/>" .
               'Mot De Passe : ' . $this->motDePasse . '<br/>' .
               'Page d\'acceuil : ' . $this->pageAcceuil . '<br/>' ;
    }
}