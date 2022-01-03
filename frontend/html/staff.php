<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Staff Médico - Clínica TuVida | Tu salud, nuestra prioridad</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../js/filtrar.js"></script>
</head>

<body>
    <div class="header">
        <nav>
            <div class="logo">
                <img type="button" src="../img/Clínica TuVida (2).png" width="250px" onclick="window.location.href='index.html'">
            </div>
            <div class="nav-items" style="margin-top:18px;">
                <ul class="primero">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">La clínica</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                    <!--<li><a href="#">La clínica</a></li>-->
                    <li><a href="#">Servicios</a></li>
                    <li><a href="./articulos.html">Artículos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
            <button id="citab">
                <a href="./citaindex.html">Citas en línea</a>
            </button>
        </nav>
    </div>

    <div class="content">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col" id="titlesp">
                    <h1>Directorio médico</h1>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-4" id="realbusq">
                    <h3>Realizar búsqueda</h3>
                </div>
            </div>
            <form action="./staffresults.php" method="post">
                <div class="row justify-content-center" id="busqueda" style="margin-top: 5px;">
                    <div class="col-3 d-flex justify-content-center">
                        <select class="form-select" aria-label="Default select example" name="espec_value">
                            <option value="0">Seleccione</option>
                            <option value="1">Cardiología</option>
                            <option value="2">Pediatría</option>
                            <option value="3">Ginecología</option>
                            <option value="4">Traumatología</option>
                            <option value="5">Odontología</option>
                        </select>
                    </div>
                    <div class="col-3 d-flex justify-content-center text-center">
                        <input type="search" class="form-control" id="dr_name" name="dr_name" placeholder="Nombre y/o apellido" style="text-align: center;">
                    </div>
                    <div class="col-3">
                        <input id="btnBuscar" type="submit" name="buscar" placeholder="Buscar">
                    </div>
                </div>
            </form>
        </div>

        <div class="container">
            <div class="row justify-content-center" id="barraselectletter" style="margin-top: 30px;">
                <div class="col">
                    <a href="#" class="select-item" category="all">Todos</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item" category="A">A</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="B">B</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item" category="C">C</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="D">D</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="E">E</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item" category="F">F</a>
                </div>
                <div class="col">
                    <a href="" class="select-item disabled" category="G">G</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="H">H</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="I">I</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="J">J</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="K">K</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="L">L</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="M">M</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="N">N</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="Ñ">Ñ</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="O">O</a>
                </div>
                <div class="col">
                    <a href="" class="select-item disabled" category="P">P</a>
                </div>
                <div class="col">
                    <a href="" class="select-item disabled" category="Q">Q</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item" category="R">R</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="S">S</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item" category="T">T</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="U">U</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="V">V</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="W">W</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="X">X</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item disabled" category="Y">Y</a>
                </div>
                <div class="col">
                    <a href="#" class="select-item" category="Z">Z</a>
                </div>
            </div>

            <?php
            include('../../backend/con_db.php');
            $query = $conex->query("select staffmed.*, left(staffmed.apellidos,1), especialidades.nombespec from staffmed
            inner join especialidades on staffmed.espec = especialidades.idespec") or die($conex->error);
            $count = mysqli_num_rows($query);
            $numofcols = 3;
            $rowcount = 0;
            if ($count > 0) {
            ?>
                <div class="row justify-content-start" style="margin-top: 50px;">
                    <?php
                    foreach ($query as $data) {
                    ?>
                        <div class="col-4 align-items-strech">
                            <div class="card" style="width: 18rem; margin: auto;" category="<?php echo $data['left(staffmed.apellidos,1)']; ?>">
                                <img src="../img/pexels-ivan-samkov-4989148.jpg" class="card-img-top" alt="..." style="width: auto; height: auto;">
                                <div class="card-body ">
                                    <h5 class="card-title"><?php echo $data['apellidos'] . ', ' . $data['nombres'];  ?></h5>
                                    <p class="card-text">CMP: <?php echo $data['nro_cmp']; ?></p>
                                    <a href="#" class="btn btn-primary btnvermas">Ver más &#8594;</a>
                                </div>
                            </div>
                        </div>
                <?php
                        $rowcount++;
                        if ($rowcount % $numofcols == 0 && $rowcount < $count) {
                            echo '</div><div class="row justify-content-start" style="margin-top: 50px;">';
                        }
                    }
                } else {
                    echo "No hay registros";
                }
                ?>
                </div>

                <div class="row justify-content-center" style="margin-top: 30px; width: 100%;">
                    <nav aria-label="Page navigation example" id="pagination" style="width: 100%;">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link">Anterior</a>
                            </li>
                            <li class="page-item" id="e"><a class="page-link" href="#">1</a></li>
                            <li class="page-item" id="e"><a class="page-link" href="#">2</a></li>
                            <li class="page-item" id="e"><a class="page-link" href="#">3</a></li>
                            <li class="page-item" id="e">
                                <a class="page-link" href="#">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                </div>
        </div>
    </div>

    <div class="footer" style="margin-top: 16px; margin-right: 0px;">
        <div class="row row-cols-3" id="infooter">
            <div class="col">
                <img type="button" src="../img/Clínica TuVida (2).png" width="250px" onclick="window.location.href='index.html'">
                <p>Clínica TuVida - Todos los derechos reservados</p>
            </div>
            <div class="col" id="mid">
                <a href="">Contáctenos</a>
                <a href="">Reclamaciones y Sugerencias</a>
            </div>
            <div class="col">
                <h2>Oficina central:</h2>
                <p>Av. Javier Prado Este 5842, La Molina, Lima, Perú</p>
            </div>
        </div>
    </div>


</body>

</html>