<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="icon" href="img/escudo.png" />
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/diseño.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
        <div class="form card my-5 text-center">
            <form action="peticion.php">
                <div class="ciudad card-body form-group">
                    Ciudad
                    <input type="text" name="ciudad" id="" required>
                </div>
                <div class="nombre card-body form-group">
                    Nombre
                    <input type="text" name="nombre" id=""required>
                </div>
                <div class="demandado card-body form-group">
                    demandado
                    <input type="text" name="demandado" id=""required>
                </div>
                <div class="cedula card-body form-group">
                    Cedula
                    <input type="number" name="documento" id=""required>
                </div>
                <div class="hechos card-body form-group">
                    Hechos
                    <input type="text" name="hechos" id="" required>
                </div>
                <div class="pretenciones card-body form-group">
                    Pretenciones
                    <input type="text" name="pretenciones" id="" required>
                </div>
                <div class="lista card-body form-group">
                    Pruebas
                    <input type="text" name="pruebas" id="" required>
                </div>
                <div class="numero card-body form-group">
                    Número de telefono
                    <input type="number" name="numero" id="" required>
                </div>
                <input type="submit" value="Crear documento">



            </form>
        </div>
    </div>




  </body>
</html>
