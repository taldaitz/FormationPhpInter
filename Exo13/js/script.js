$(document).ready(function () {


    $('#next').click(function() {

        $.get('avancerCombat.php', null, function(response) {

            $('#combatArea').append(response.replace('<br/>', '\n') + '\n\n');

        });

    });


    $('#restart').click(function() {

        $.get('avancerCombat.php?action=restart', null, function(response) {

            $('#combatArea').html('');

        });

    });

});