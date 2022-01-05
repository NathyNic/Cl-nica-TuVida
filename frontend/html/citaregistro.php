<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../js/prueba.js"></script>
    <title>Reserva de Citas | Clínica TuVida</title>
</head>

<body>
    <div class="header">
        <nav>
            <?php
            include('../../backend/con_db.php');
            if (isset($_POST['ingresar'])) {
                $tipo_docu = $_POST['tipo_doc'];
                $ndoc = $_POST['nro_doc'];
            } else {
                header("Location: citaindex.php");
            }
            ?>
            <div class="nav-items" style="margin-top:18px;">
                <ul class="primero">
                    <li><img src="https://img.icons8.com/ios/50/000000/undo.png" style="width: 30px; height: 30px; margin-right: 5px;" /><a href="javascript:history.back()">Regresar</a></li>
                </ul>
            </div>
            <div class="logo">
                <img type="button" src="../img/Clínica TuVida (2).png" width="250px" onclick="window.location.href='index.html'">
            </div>
        </nav>
    </div>

    <div class="content" style="margin-bottom: 20px;">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col" id="titlesp">
                    <h1>Reserva de citas</h1>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-4" id="realbusq">
                    <h3>1. Completa tus datos personales</h3>

                </div>
            </div>
            <div>
                <input type="radio" class="radio-inline" name="clinic_staff" id="clinic_staff1" value="Yes"><label for="clinic_staff1">Yes</label>
                <br>
                <input type="radio" class="radio" name="clinic_staff" id="clinic_staff2" value="No"><label for="clinic_staff2">No</label>
            </div>
            <div class="row justify-content-start">
                <div class="col-4 d-flex justify-content-center text-center" style="flex-direction: column;">
                    <label for="pac_name" style="align-self: flex-start; margin-bottom: 5px;">Nombres:</label>
                    <input type="text" class="form-control" id="pac_name" name="pac_name" placeholder="Nombres" style="text-align: center;">
                </div>
                <div class="col-5 d-flex justify-content-center text-center" style="flex-direction: column;">
                    <label for="pac_lname" style="align-self: flex-start; margin-bottom: 5px;">Apellidos:</label>
                    <input type="text" class="form-control" id="pac_lname" name="pac_lname" placeholder="Apellidos" style="text-align: center;">
                </div>
                <div class="col-3 d-flex justify-content-center text-center" style="flex-direction: column;">
                    <label for="pac_dni" style="align-self: flex-start; margin-bottom: 5px;">Nro. de documento:</label>
                    <input type="text" class="form-control" id="pac_dni" name="pac_dni" value="<?php echo $ndoc ?>" style="text-align: center;">
                </div>
            </div>

            <div class="row justify-content-around" style="margin-top: 10px;">
                <div class="col-6 d-flex justify-content-center text-center" style="flex-direction: column;">
                    <label for="pac_address" style="align-self: flex-start; margin-bottom: 5px;">Dirección:</label>
                    <input type="text" class="form-control" id="pac_address" name="pac_address" placeholder="Calle/Av./Jr." style="text-align: center;">
                </div>
                <div class="col-3 d-flex justify-content-center text-center" style="flex-direction: column;">
                    <label for="pac_district" style="align-self: flex-start; margin-bottom: 5px;">Distrito:</label>
                    <input type="text" class="form-control" id="pac_district" name="pac_district" placeholder="Distrito">
                </div>
                <div class="col-3 d-flex justify-content-center text-center" style="flex-direction: column;">
                    <label for="pac_state" style="align-self: flex-start; margin-bottom: 5px;">Provincia:</label>
                    <input type="text" class="form-control" id="pac_state" name="pac_state" placeholder="Provincia" style="text-align: center;">
                </div>
            </div>

            <div class="row justify-content-start" style="margin-top: 10px;">
                <div class="col-2 d-flex justify-content-center text-center" style="flex-direction: column;">
                    <label for="pac_cellphone" style="align-self: flex-start; margin-bottom: 5px;">Teléfono
                        celular:</label>
                    <input type="text" class="form-control" id="pac_cellphone" name="pac_cellphone" placeholder="Nro. de celular" style="text-align: center;">
                </div>
            </div>


            <div class="row justify-content-between">
                <div class="col-4" id="realbusq">
                    <h3>2. Reserva una cita</h3>
                </div>
            </div>
            <div class="row justify-content-start" id="busq_especialidad" style="margin-top: 5px;">
                <div class="col-3 d-flex justify-content-start">
                    <select class="form-select" aria-label="Default select example" name="cita_especbusc" id="cita_especbusc" required>
                        <option value="">Seleccione</option>
                        <option value="1">Cardiología</option>
                        <option value="2">Pediatría</option>
                        <option value="3">Ginecología</option>
                        <option value="4">Traumatología</option>
                        <option value="5">Odontología</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-4" id="realbusq">
                    <h3>Horarios disponibles</h3>
                </div>
            </div>
            <div class="container">
                <div class="row" id="inicial">
                    <h5>Seleccione una especialidad para mostrar los horarios disponibles</h5>
                </div>
                <span id="result">
                    <div class="row justify-content-start" id="fechas" style="text-align: center;">
                        <div class="col-1" style="margin-right: 10px; width: fit-content;">
                            <input type="radio" id="btnselect1" name="btn_select">
                            <label for="btnselect1">
                                <h6>Mié</h6>
                                <h3>24</h3>
                                <h6>Dic</h6>
                            </label>
                        </div>
                        <!--
                            <div class="col-1" style="margin-right: 10px; width: fit-content;">
                                <input type="radio" id="btnselect2" name="btn_select">
                                <label for="btnselect2">
                                    <h6>Jue</h6>
                                    <h3>25</h3>
                                    <h6>Dic</h6>
                                </label>
                            </div>
                            -->
                    </div>
                </span>
                <div class="row" id="inicial2">
                    <h5>Seleccione fechas para mostrar citas disponibles</h5>
                </div>
                <span id="result2">
                    <div class="row justify-content-start" id="citasdispo" style="margin-top: 10px; align-items: center;">
                        <div class="col-2">
                            <input type="radio" id="btnSelCita1" name="btnSelCita">
                            <label for="btnSelCita1">
                                <h4> <strong>8:00 AM</strong></h4>
                                <h4> <strong>Dr. Tapia Leonardo, José</strong></h4>
                                <p><img src="https://img.icons8.com/pastel-glyph/64/000000/door--v3.png" />Consultorio
                                    206</p>
                                <p><img src="https://img.icons8.com/ios/64/000000/corridor.png" />Pasillo B</p>
                                <p><img src="../img/floor-flooring-house-icon-with-png-and-vector-format-for-free-769177.png" />Piso
                                    2</p>
                            </label>
                        </div>
                        <div class="col-2">
                            <input type="radio" id="btnSelCita2" name="btnSelCita">
                            <label for="btnSelCita2">
                                <h4> <strong>10:00 AM</strong></h4>
                                <h4> <strong>Dr. Tapia Leonardo, José</strong></h4>
                                <p><img src="https://img.icons8.com/pastel-glyph/64/000000/door--v3.png" />Consultorio
                                    206</p>
                                <p><img src="https://img.icons8.com/ios/64/000000/corridor.png" />Pasillo B</p>
                                <p><img src="../img/floor-flooring-house-icon-with-png-and-vector-format-for-free-769177.png" />Piso
                                    2</p>
                            </label>
                        </div>
                    </div>
                </span>
                <div class="row justify-content-end" style="margin-top: 10px;" id="botonesf">
                    <div class="col-1" style="margin-left: 10px; width:fit-content;">
                        <button class="btnbl" id="btncanc">Cancelar</button>
                    </div>
                    <div class="col-1" style="margin-left: 10px; width:fit-content;">
                        <button class="btnvd" id="btncont" disabled="disabled" onclick="window.location.href='./citaresumen.html'">Continuar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>