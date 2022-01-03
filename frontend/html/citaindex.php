<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Reserva de Citas|Clínica TuVida</title>
</head>

<body>
    <div class="header">
        <nav>
            <div class="nav-items" style="margin-top:18px;">
                <ul class="primero">
                    <li><a href="./index.html"><img src="https://img.icons8.com/ios/50/000000/undo.png" style="width: 30px; height: 30px; margin-right: 5px;" />Regresar</a>
                    </li>
                </ul>
            </div>
            <div class="logo">
                <img type="button" src="../img/Clínica TuVida (2).png" width="250px" onclick="window.location.href='index.html'">
            </div>
        </nav>
    </div>

    <div class="header">
        <div class="container" style="height: 91vh; padding-top: 200px;">
            <div class="row row-cols-1">
                <div class="col" id="titlesp">
                    <h1>Reserva una cita rápidamente</h1>
                </div>
            </div>
            <form action="./citaregistro.php" method="post">
                <div class="row justify-content-center" id="tipo_doc" style="margin-top: 5px;">
                    <div class="col-3 d-flex justify-content-center">
                        <select class="form-select" aria-label="Default select example" name="tipo_doc" required>
                            <option value="">Seleccione</option>
                            <option value="1">DNI</option>
                            <option value="2">Carnet de Extranjería</option>
                        </select>
                    </div>
                    <div class="col-3 d-flex justify-content-center text-center">
                        <input type="text" class="form-control" id="nro_doc" name="nro_doc" placeholder="Nro. de documento" style="text-align: center;">
                    </div>
                    <div class="col-3">
                        <input id="btnIngresar" type="submit" value="Ingresar" name="ingresar" placeholder="Ingresar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>