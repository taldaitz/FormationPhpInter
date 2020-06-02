<?php
class Utilisateur {
    public $nom;
    private $email;
    private $motDePasse;

    public function __set($attribut, $valeur) {

        if($attribut == 'email') {
            if($this->checkEmail($valeur))
                $this->email = $valeur;
                //$this->$attribut = $valeur;
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

        /*if(strpos($email, '@') === false) {
            return false;
        } else {
            return true;
        }*/

    }

    public function checkMotDePasse($pwd) {
        return strlen($pwd) < 6 ? false : true; 
    }

    public function __toString()
    {
        return 'Nom : ' . $this->nom . '<br/>' .
               "Email : $this->email <br/>" .
               'Mot De Passe : ' . $this->motDePasse . '<br/>';
    }
}