<?php
function chargerClasses($classe) {
    include $classe . '.php';
}

spl_autoload_register('chargerClasses');

use classes\Administrateur;
use classes\Page;
use classes\Utilisateur;

$user = new Utilisateur('Thomas', 'taldaitz@dawan.fr', 'toto1234');

$page = new Page();
$page->nom = 'Catalogue';
$page->url = '/products/list';

$user->pageAcceuil = $page;


echo $user . '<br/><br/>';

$admin = new Administrateur('Robert', 'admin@dawan.fr', 'toto123456');

echo $admin;



