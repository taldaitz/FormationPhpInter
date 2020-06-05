function changerMessage() {
    var elements = document.getElementsByName("message");
    elements[0].innerHTML = "Bonjour Nicolas !";
}

function changerCouleur() {
    document.getElementsByName("message")[0].style.color = "red";

    var boutons = document.getElementsByTagName("button");
    
    for(var index in boutons) {
        boutons[index].style.backgroundColor = "blue";
    }
}