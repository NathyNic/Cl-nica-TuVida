$(document).ready(function(){

    $('input[type=radio][name=btnselect]').click(function(){
        var check_prod_attr = $('input[type=radio][name=btnselect]').val();
        console.log(check_prod_attr);
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

    });
});