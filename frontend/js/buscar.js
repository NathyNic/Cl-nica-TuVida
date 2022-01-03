$(document).ready(function(){
    $("#result").hide();

    $("#cita_especbusc").on('change', function(){
        $.ajax({
            url: '../../backend/busbackend.php',
            type: 'POST',
            data: {cita_especbusc: $(this).val()},
            success: function(result){
                $("#inicial").hide();
                $("#result").html(result);
            }
        });

    });


});