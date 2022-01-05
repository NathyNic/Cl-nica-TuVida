<?php
include('./con_db.php');

if (isset($_POST['diaselect'])) {
    $diaabuscar = $_POST['diaselect'];
    $espe_match = $_POST['especselect'];

    $query_buscar = $conex->query("select citastodo.*, staffmed.nombres, staffmed.apellidos,
    consultorios.nro_consultorio, consultorios.pasillo_consultorio, consultorios.piso_consultorio,
    TIME_FORMAT('citastodo.hora_cita', '%h:%i %p') as horadecita
    inner join staffmed on citastodo.doctor_cita = staffmed.idmed
    inner join consultorios on citastodo.consultorio_cita = consultorios.id_consultorio
    where citastodo.dia_cita = '$diaabuscar' and citastodo.espec_cita = '$espe_match' and citadtodo.disponible = '1'")
        or die($conex->error);

    $count = mysqli_num_rows($query_buscar);

    $output = '';

    if ($count > 0) {
        $output .= '<div class="row justify-content-start" id="citasdispo" style="margin-top: 10px; align-items: center;">';
        foreach ($query_buscar as $bus) {
            $output .= '<div class="col-2">';
            $output .= '<input type="radio" id="btnSelCita1" name="btnSelCita" value ="' . $bus['citastodo.id_cita'] . '">';
            $output .= '<label for="btnSelCita1">';
            $output .= '<h4> <strong>' . $bus['horadecita'] . '</strong></h4>';
            $output .= '<h4> <strong>Dr. ' . $bus['staffmed.apellidos'] . ' , ' . $bus['staffmed.nombres'] . ' </strong></h4>';
            $output .= '<p><img src="https://img.icons8.com/pastel-glyph/64/000000/door--v3.png" />Consultorio
            ' . $bus['consultorios.nro_consultorio'] . '</p>';
            $output .= '<p><img src="https://img.icons8.com/ios/64/000000/corridor.png" />Pasillo ' . $bus['consultorios.pasillo_consultorio'] . '</p>';
            $output .= '<p><img src="../img/floor-flooring-house-icon-with-png-and-vector-format-for-free-769177.png" />Piso
            ' . $bus['consultorios.piso_consultorio'] . '</p>';
            $output .= '</label>';
            $output .= '</div>';
        }
        $output .= '</div>';

        echo $output;
    } else {
        echo "No hay citas disponibles para esta especialidad";
    }
}
