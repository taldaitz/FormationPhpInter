<?php

function chargerBibli($classe) {
    include $classe . '.php';
}

spl_autoload_register('chargerBibli');

use bibliotheque\Auteur;
use bibliotheque\Livre;


$book = new Livre('Programme Php', 6);

$book->lirePage();
$book->lirePage();
$book->lirePage();
$book->lirePage();
$book->lirePage();
$book->lirePage();
$book->lirePage();
$book->lirePage();
$book->lirePage();
$book->lirePage();
$book->lirePage();
$book->lirePage();
$book->lirePage();
$book->lirePage();

$book->setTitre('toto');

/*aggrégation Faible*/
//$book->auteur = new Auteur();
$book->auteur->nom = 'Program';
$book->auteur->prenom = 'Jean';

echo "Titre : $book->titre <br/>";
echo 'Auteur : ' . $book->auteur->nom . ' <br/>';




$book2 = new Livre('Programme Php 2', 4);

$book2->lirePage();
$book2->lirePage();
$book2->lirePage();
$book2->lirePage();


$auteur = new Auteur();
$auteur->nom = "Hugo";
$auteur->prenom = "Victor";

$book2->auteur = $auteur; 




var_dump($book);
var_dump($book2);


echo 'Livres lus : ' . Livre::$compteurLivresLus;



$bd = new BandeDessine("Tintin", 56);
$bd->lirePage();
