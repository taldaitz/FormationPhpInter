<?php

namespace transport;

class Controleur {
    public $nom;
    public $prenom;
    public $anciennete;


    public function controler(IControlable $justificatif) {
        if($justificatif->lancerControle()) {
            echo 'Ok, c\'est parfait<br/>';
        } else {
            echo 'Justificatif invalide !<br/>';
        }
    }
}