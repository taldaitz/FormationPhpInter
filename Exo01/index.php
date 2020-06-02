<?php

require_once('Utilisateur.php');

$user = new Utilisateur();
$user->nom = 'Thomas';
$user->email = 'taldaitz@dawan.fr';
$user->motDePasse = 'toto1234';


var_dump($user);


echo 'Nom : ' . $user->nom . '<br/>';
echo 'Email : ' . $user->email . '<br/>';
echo 'Mot De Passe : ' . $user->motDePasse . '<br/><br/><br/>';


echo $user;

