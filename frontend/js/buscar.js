$(document).ready(function(){

    $("#inicial2").hide();
    $("#botonesf").hide();

    $("#cita_especbusc").on('change', function(){
        $.ajax({
            url: '../../backend/busbackend.php',
            type: 'POST',
            data: {cita_especbusc: $(this).val()},
            success: function(result){
                $("#inicial").hide();
                $("#result").html(result);
                $("#inicial2").show();
            }
        });
    });


    $("input[name=clinic_staff]").on("change", function() {
        console.log(this.value);
      });

    $("input[name=btn_select]").click(function(){
        //var check_prod_attr = $("input[name=btnselect]").val();
        console.log(this.value); //alert($(this).val());    
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