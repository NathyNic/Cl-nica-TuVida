$(document).ready(function(){
    $("#inicial2").hide();
    $("#botonesf").hide();
    $("#result").hide();
    $("#result2").hide();

    $("#cita_especbusc").on('change', function(){
        $("#inicial").hide();
        $("#result").show();
        $("#inicial2").show();
    });



    $("input[name=btn_select]").click(function(){
        //var check_prod_attr = $("input[name=btnselect]").val();
        $("#inicial2").hide();
        $("#result2").show();
        $("#botonesf").show(); //alert($(this).val());    
        /*
        var nameArr = check_prod_attr.split(',');
        var diaselect = nameArr[0];
        var especselect = nameArr[1];

        $.ajax({
            url: '../../backend/busbackend2.php',
            type: 'POST',
            data: {diaselect: diaselect, especselect: especselect},
            success: function(result){
                $("#inicial2").hide();
                $("#result2").html(result);
                $("#botonesf").show();
                }
        });
        */
    });


    $("input[name=btnSelCita]").click(function(){
        //var check_prod_attr = $("input[name=btnselect]").val();
        $("#btncont").prop('disabled',false); //alert($(this).val());    
        /*
        var nameArr = check_prod_attr.split(',');
        var diaselect = nameArr[0];
        var especselect = nameArr[1];

        $.ajax({
            url: '../../backend/busbackend2.php',
            type: 'POST',
            data: {diaselect: diaselect, especselect: especselect},
            success: function(result){
                $("#inicial2").hide();
                $("#result2").html(result);
                $("#botonesf").show();
                }
        });
        */
    });


});