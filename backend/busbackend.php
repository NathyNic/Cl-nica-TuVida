<?php
include('./busbackend.php');
if (isset($_POST['cita_especbusc'])) {
    $espeabuscar = $_POST['cita_especbusc'];

    $miquery = $conex->query("select citastodo.*, fechas.dia from citastodo
    inner join fechas on citastodo.dia_cita = fechas.idfecha
    where citastodo.espec_cita = '$espeabuscar'");

    $count = mysqli_num_rows($miquery);

    if ($count > 0) {

        $output .= '<div class="row justify-content-start" id="fechas" style="text-align: center;">';
        foreach ($query as $info) {
            $output .= '<div class="col-1" style="margin-right: 10px; width: fit-content;">';
            $output .= '<input type="radio" id="btnselect" name="btnselect" value="' . $info['citastodo.dia_cita'] . '" checked>';
            $output .= '<label for="btnselect">';
            $output .= '<h5 class="card-title">' . $info['nombres'] . ' ' . $info['apellidos'] . '</h5>';
            $output .= '<h6 class="card-subtitle mb-2 text-muted">' . $info['nombespec'] . '</h6>';
            $output .= '<p class="card-text">' . $info['dia'] . '</p>';
            $output .= '<p class="card-text">' . $info['nro_consultorio'] . '</p>';
            $output .= '<p class="card-text">' . $info['pasillo_consultorio'] . '</p>';
            $output .= '<p class="card-text">' . $info['piso_consultorio'] . '</p>';
            $output .= '<a href="#" class="btn btn-primary">Reservar</a>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';
        }
    } else {
        echo "No hay fechas disponibles para esta especialidad";
    }
}
