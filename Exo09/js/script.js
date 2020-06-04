
var compteur = 0;

function afficherMessage() {
    compteur++;

    if( compteur == 3) {
        alert('Bonjour tout le monde');
        compteur = 0;
    }  
}