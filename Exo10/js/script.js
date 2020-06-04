function changerCouleur(element) {
    var couleur = element.getAttribute("id");
    document.getElementById("contenuFinal").style.backgroundColor = couleur;
}

var textSaisie = '';

function changerContenu() {
    textSaisie += document.getElementsByName("content")[0].value + '<br/>';
    document.getElementById("contenuFinal").innerHTML = textSaisie;   
}