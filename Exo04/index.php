<?php

use formes\Rectangle;

function chargerClasses($classe) {
    include $classe . '.php';
}

spl_autoload_register('chargerClasses');


$rectangle = new Rectangle(10, 4);


echo $rectangle . '<br/><br/>';
echo $rectangle->dessiner() . '<br/><br/>';