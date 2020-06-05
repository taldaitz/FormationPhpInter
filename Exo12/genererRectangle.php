<?php

include 'formes\Rectangle.php';

use formes\Rectangle;


$longeur = $_GET["lon"] ?? 50 ;
$largeur = $_GET["lar"] ?? 20;

$rect = new Rectangle($longeur, $largeur);
echo $rect->dessiner();
