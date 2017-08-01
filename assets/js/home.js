$(document).ready(function(){

    $('#home1').hide();
    $('#credits').hide();

    $('#pilot').click(function(){
        $('#home1').fadeIn();
        $('#credits').fadeIn();
        $('#bgImage').hide();
        $('#buttons').hide();
    });

});