<?php

namespace classes;

use classes\Combat;

abstract class Personnage {

    public $nom;
    public $pointDeVie;
    public $attaque;
    public $defense;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }


    public function attaquer(Personnage $cible) {

        $dommage = $this->calculDegats() - $cible->calculDefense();
        $cible->pointDeVie -= $dommage < 0 ? 0 : $dommage;

        Combat::AddLog($this . ' attaque ' . $cible . ' lui faisant ' . $dommage . ' de dégats.');
        Combat::AddLog('Il reste à ' . $cible . ' ' . $cible->pointDeVie . ' de PV.');
        Combat::AddLog('');

    }

    public function estMort() : bool {
        return $this->pointDeVie <= 0;
    }

    abstract function calculDegats() : float;
    abstract function calculDefense() : float;

    public function afficherDetails(): string
    {
        return "
            <ul>
            <li>Nom : $this->nom</li>
            <li>Point de vie : $this->pointDeVie</li>
            <li>Attaque : $this->attaque</li>
            <li>Défense : $this->defense</li>
            </ul>
        ";
    }

    public function __toString()
    {
        return $this->nom . ' (' . str_replace('classes\\', '', get_class($this)) . ')'; 
    }

}