$(document).ready(function () {

    $('#btnAgrandir').click(function () {
            alert(this.id);
            $('#bloc').css('width', '+=20px');
    });

    $.ajax(
        {
            url:"/toto.txt"
            ,
            success: function (result) {
                $('div').text('toto');
            },
            error: function () {
            }
        });

});