<?php

use transport\Billet;
use transport\BilletElectronique;
use transport\Controleur;
use transport\Ticket;
use transport\Voyageur;

function chargerClasses($classe) {
    include $classe . '.php';
}

spl_autoload_register('chargerClasses');


$controleur = new Controleur();
$controleur->nom = 'Aldaitz';
$controleur->prenom = 'Thomas';


$ticket = new Ticket();
$ticket->date = date('d/m/Y');

$billet = new Billet();
$billet->date = date('d/m/Y');

$scan = new BilletElectronique;
$scan->qrCode = 'code presque valide';

$train = [
    new Voyageur('Bidule', 'Julie', $ticket),
    new Voyageur('Dupont', 'Hugo', $billet),
    new Voyageur('Test', 'Jean', $scan),
    new Voyageur('Retest', 'René', $billet),
];

foreach($train as $voyageur) {
    $controleur->controler($voyageur->presenterJustificatif());
}
