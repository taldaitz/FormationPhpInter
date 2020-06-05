$(document).ready(function () {

    $('.btnArticle').click(function() {
        //$('#contenu').load('articles/' + this.id + '.txt');
        envoyerRequete('articles/' + this.id + '.txt');
    });


    $('#btnRectangle').click(function () {
        var longueur = $('#longueur').val();
        var largeur = $('#largeur').val();

        //$('#contenu').load('genererRectangle.php?lon=' + longueur + '&lar=' + largeur );
        envoyerRequete('genererRectangle.php?lon=' + longueur + '&lar=' + largeur );
    });

});

function envoyerRequete(urlContact) {
    $.ajax({
            url: urlContact,
            success : function(response) {
                $('#contenu').html(response);
            },
            error : function() {
                alert("Attention il y a eu une erreur");
            }
        }
    );
}
