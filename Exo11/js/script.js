function getXhr () {
    // XML Http Request
    var xhr = "";

    if(window.XMLHttpRequest){	// Firefox, Chrome, Safari, Opera
        xhr = new XMLHttpRequest();
        console.log("XMLHttpRequest");
    }else if(window.ActivXObject){	// IE
        try{
            xhr = new ActivXObject("Msxml2.XMLHTTP");
            console.log("Msxml2.XMLHTTP");
        }catch(e){
            xhr = new ActivXObject("Microsoft.XMLHTTP");
            console.log("Microsoft");
        }
    }else{
        xhr = false;
    }

    return xhr;
}

function getArticle(element) {
    var url = "articles/" + element.getAttribute("id") + ".txt";
    envoyerXhr(url);
}

function creerRectangle() {
    var longueur = document.getElementById("longueur").value;
    var largeur = document.getElementById("largeur").value;

    var url = "genererRectangle.php?lon="+ longueur + "&lar=" + largeur;
    envoyerXhr(url);
}

function envoyerXhr(url) {
    var xhr = getXhr();

    xhr.open("GET", url, true);
    xhr.send();


    xhr.onreadystatechange = function () {
        if(xhr.readyState == 4) {
            if(xhr.status == 200) {
                document.getElementById("contenu").innerHTML = xhr.response;
            } else {
                alert("Attention erreur ajax : " + xhr.status);
            }
        }
    }
}