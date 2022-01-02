$(document).ready(function(){
    //Agregar clase "active" a Todos
    $('.select-item[category="all"]').addClass('active');


    $('.select-item').click(function(){
        var letter = $(this).attr('category');
        //console.log(letter);

        //Agregar clase "active" a letra seleccionada
        $('.select-item').removeClass('active');
        $(this).addClass('active');

        //ocultar medicos
        $('.card').parent().parent().hide();
        $('.card').parent().hide();
        $('.card').hide();

        //mostrar medicos
        $('.card[category="'+letter+'"]').parent().parent().show();
        $('.card[category="'+letter+'"]').parent().show();
        $('.card[category="'+letter+'"]').show();
    });

    $('.select-item[category="all"]').click(function(){
        $('.card').parent().parent().show();
        $('.card').parent().show();
        $('.card').show();
    });

});