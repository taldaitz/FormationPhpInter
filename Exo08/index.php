<?php

$tab = ['toto', 'titi', 'tata'];

try {
    afficherElement($tab, 0);
    afficherElement($tab, 1);
    afficherElement($tab, 3);
    afficherElement($tab, 2);
}
catch(Exception $e) {

    echo $e->getCode() . ' - ' . $e->getMessage();

}

function afficherElement($tab, $i) {
    if(isset($tab[$i])) {
        echo  $tab[$i] . '<br/>'; 
    } else {
        throw new OutOfBoundsException("Attention, cases du tableau dépasées.");
    }
}