<?php

include 'IPliable.php';
include 'Chaise.php';
include 'OrdinateurPortable.php';

$chair = new Chaise();
$chair->couleur = 'Bleu';

$ordi = new OrdinateurPortable();


ranger($chair);
ranger($ordi);



function ranger(IPliable $obj) {
    $obj->plier();
}