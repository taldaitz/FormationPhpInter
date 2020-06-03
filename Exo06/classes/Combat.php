<?php

namespace classes;

use classes\Personnage;

class Combat {

    /**
     * @var Personnage[]
     */
    public $combattants;

    public static $logCombat;

    public function __construct(Personnage $combattant1, Personnage $combattant2)
    {
        $this->combattants = [$combattant1, $combattant2];
    }

    public function demarrerCombat() {

        while(!$this->checkCombattantMort()) {
            $this->lancerAttaque($this->combattants[0], $this->combattants[1]);
            $this->combattants = array_reverse($this->combattants);
        }
        
    }

    public function checkCombattantMort() {
        foreach($this->combattants as $combattant ) {
            if($combattant->estMort()) {
                Combat::AddLog($combattant . ' est mort !!!');
                return true;
            }
        }

        return false;
    }

    public function lancerAttaque(Personnage $attaquant, Personnage $cible) {
        $attaquant->attaquer($cible);
    }

    public static function AddLog(string $log) {
        Combat::$logCombat .=  $log . '<br/>';
    }

}