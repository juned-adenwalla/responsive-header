$(document).ready(function(){
    debugger;
    $('#sidediv').hide();

    $('#toggle').click(function(){
        $('#sidediv').show();
    });

    $('#cancel').click(function(){
        $('#sidediv').hide();
    });

    $('#popdiv').hide();

    $('#add').click(function(){
        debugger;
        $('#popdiv').toggle();
    });

});