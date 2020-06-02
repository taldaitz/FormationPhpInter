<?php

function chargerClasses($classe) {
    include $classe . '.php';
}

spl_autoload_register('chargerClasses');

use animal\Chat;
use outils\Chat as ChatRoom;

$chat = new Chat();
$chat->nom = 'Minou';
$chat->age = 8;


$room = new ChatRoom();
$room->nbParticipant = 5;


echo $chat->nom . '<br/>'; 
echo $chat->age . '<br/>'; 