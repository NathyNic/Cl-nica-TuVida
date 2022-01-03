<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Reserva de Citas | Clínica TuVida</title>
</head>

<body>
    <div class="header">
        <nav>
            <div class="nav-items" style="margin-top:18px;">
                <ul class="primero">
                    <li><img src="https://img.icons8.com/ios/50/000000/undo.png" style="width: 30px; height: 30px; margin-right: 5px;" /><a href="./citaindex.html">Regresar</a></li>
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
            <form action="#" method="post">
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
                        <label for="pac_dni" style="align-self: flex-start; margin-bottom: 5px;">DNI:</label>
                        <input type="text" class="form-control" id="pac_dni" name="pac_dni" placeholder="Nro. de documento" style="text-align: center;">
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
            </form>

            <div class="row justify-content-between">
                <div class="col-4" id="realbusq">
                    <h3>2. Reserva una cita</h3>
                </div>
            </div>
            <form action="" method="post">
                <div class="row justify-content-start" id="busq_especialidad" style="margin-top: 5px;">
                    <div class="col-3 d-flex justify-content-start">
                        <select class="form-select" aria-label="Default select example" required>
                            <option value="">Seleccione</option>
                            <option value="1">Cardiología</option>
                            <option value="2">Pediatría</option>
                            <option value="3">Ginecología</option>
                            <option value="4">Traumatología</option>
                            <option value="5">Odontología</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <input id="btnBuscar" type="submit" value="Buscar" placeholder="Buscar">
                    </div>
                </div>
            </form>
            <div class="row justify-content-between">
                <div class="col-4" id="realbusq">
                    <h3>Horarios disponibles</h3>
                </div>
            </div>
            <form action="" method="post">
                <div class="container">
                    <!--<div class="row" id="inicial">
                            <h5>Seleccione una especialidad para mostrar los horarios disponibles</h5>
                        </div>-->
                    <div class="row justify-content-start" style="text-align: center;">
                        <div class="col-1" style="margin-right: 20px;">
                            <div class="square">
                                <h6>Mié</h6>
                                <h3>24</h3>
                                <h6>Dic</h6>
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="square">
                                <h6>Mié</h6>
                                <h3>24</h3>
                                <h6>Dic</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start" style="margin-top: 10px; align-items: center;">
                        <div class="col-2">
                            <div class="square2">
                                <h4>8:00 AM</h4>
                                <h4>Dr. Tapia Leonardo, José </h4>
                                <p><img src="https://img.icons8.com/pastel-glyph/64/000000/door--v3.png" />Consultorio
                                    206</p>
                                <p><img src="https://img.icons8.com/ios/64/000000/corridor.png" />Pasillo B</p>
                                <p><img src="../img/floor-flooring-house-icon-with-png-and-vector-format-for-free-769177.png" />Piso
                                    2</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-1" style="margin-left: 10px;">
                            <button class="btnbl" id="btncanc">Cancelar</button>
                        </div>
                        <div class="col-1" style="margin-left: 10px;">
                            <button class="btnvd" id="btncont">Continuar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>


</body>

</html>