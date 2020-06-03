<?php

use classes\Combat;
use classes\Guerrier;
use classes\Magicien;
use classes\Voleur;

function chargerClasses($classe) {
    include   $classe . '.php';
}

spl_autoload_register('chargerClasses');


$guerrier = new Guerrier('Conan');
$magicien = new Magicien('Merlin');
$voleur = new Voleur('Robin des bois');

//$combat = new Combat($guerrier, $magicien);
$combat = new Combat($magicien, $voleur);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baston !</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <h1>Combat !!</h1>

        <div class="RecapPerso" id="menuPersoA">
            <?php echo $combat->combattants[0]->afficherDetails();  ?>
        </div>

        <div class="RecapPerso" id="menuPersoB">
            <?php echo $combat->combattants[1]->afficherDetails();  ?>
        </div>

        <div id="logCombat">
            <?php 
            $combat->demarrerCombat();
            echo Combat::$logCombat;
            
            ?>

        </div>
    </main>
</body>

</html>