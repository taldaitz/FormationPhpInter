<?php

use formes\Carre;
use formes\Cercle;
use formes\Forme;
use formes\Rectangle;
use formes\Triangle;

function chargerClasses($classe) {
    include $classe . '.php';
}

spl_autoload_register('chargerClasses');


$rectangle = new Rectangle(500, 300);

$cercle = new Cercle(500);

$triangle = new Triangle(500, 300);

$carre = new Carre(500);

afficherForme($rectangle);
afficherForme($cercle);
afficherForme($triangle);
afficherForme($carre);

function afficherForme(Forme $forme) {
    echo $forme . '<br/><br/>';
    $forme->dessiner();
    echo $forme->getImageHTML() . '<br/><br/>';
}