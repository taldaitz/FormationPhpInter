<?php

session_start();


if(isset($_GET['action']) && $_GET['action'] == 'restart')
    session_destroy();

use classes\Combat;
use classes\Guerrier;
use classes\Magicien;


function chargerClasses($classe) {
    include   $classe . '.php';
}

spl_autoload_register('chargerClasses');


if(!isset($_SESSION['combat'])) {

    $guerrier = new Guerrier('Conan');
    $magicien = new Magicien('Merlin');
    $combat = new Combat($guerrier, $magicien);
} else {
    $combat = unserialize($_SESSION['combat']);
    Combat::EmptyLog();
}

$combat->avancerCombat();
echo Combat::$logCombat;

$_SESSION['combat'] = serialize($combat);