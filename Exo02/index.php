<?php

use formes\Rectangle;

function chargerClasses($classe) {
    include $classe . '.php';
}

spl_autoload_register('chargerClasses');


$rectangle = new Rectangle(10, 4);
$rectangle2 = new Rectangle(35, 9);
$rectangle3 = new Rectangle(8, 14);


echo $rectangle . '<br/><br/>';
echo $rectangle->dessiner() . '<br/><br/>';

echo $rectangle2 . '<br/><br/>';
echo $rectangle2->dessiner() . '<br/><br/>';

echo $rectangle3 . '<br/><br/>';
echo $rectangle3->dessiner() . '<br/><br/>';

$tabRectangle = [
    new Rectangle(100, 50),
    new Rectangle(400, 100),
    new Rectangle(200, 800),
    new Rectangle(900, 100),
    new Rectangle(450, 560),
];

foreach($tabRectangle as $rectGD) {
    echo $rectGD . '<br/><br/>';
    $rectGD->dessinerGD();
    echo $rectGD->getImageHTML() . '<br/><br/>';
}