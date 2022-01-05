<?php
include('./con_db.php');
if (isset($_POST['cita_especbusc'])) {
    $espeabuscar = $_POST['cita_especbusc'];

    $query1 = $conex->query("SET lc_time_names = 'es_MX'") or die($conex->error);

    $miquery = $conex->query("select  distinct citastodo.dia_cita as dia_cita, citastodo.espec_cita as espec_cita, fechas.dia, extract(day from fechas.dia), left(dayname(fechas.dia),3), 
    left(monthname(fechas.dia),3) from citastodo
    inner join fechas on citastodo.dia_cita = fechas.idfecha
    where citastodo.espec_cita = '$espeabuscar'") or die($conex->error);

    $count = mysqli_num_rows($miquery);

    $output = '';

    if ($count > 0) {
        $i = 0;
        $output .= '<div class="row justify-content-start" id="fechas" style="text-align: center;">';
        foreach ($miquery as $info) {
            $output .= '<div class="col-1" style="margin-right: 10px; width: fit-content;">';
            $output .= '<input type="radio" id="btnselect' . $i . '" name="btn_select" value="' . $info['dia_cita'] . '">';
            $output .= '<label for="btnselect' . $i . '">';
            $output .= '<h6>' . $info['left(dayname(fechas.dia),3)'] . '</h6>';
            $output .= '<h3>' . $info['extract(day from fechas.dia)'] . '</h3>';
            $output .= '<h6>' . $info['left(monthname(fechas.dia),3)'] . '</h6>';
            $output .= '</label>';
            $output .= '</div>';
            $i++;
        }
        $output .= '</div>';

        echo $output;
    } else {
        echo "No hay fechas disponibles para esta especialidad";
    }
}
