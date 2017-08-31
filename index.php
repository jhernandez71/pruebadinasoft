<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prueba de Elias.</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Conexion a MySQL con PHP :: Formulario de Ingreso.</div>
            <div class="panel-body">
              <?php
              if (isset($_GET["valid"]) && ($_GET["valid"] == true) ){
                ?>
                <div class="alert alert-warning" role="alert">
                  Usuario y/o Contraseña no coinciden o no esta registrado
                </div>
                <?php
              }
              if (isset($_GET["save"]) && ($_GET["save"] == true) ){
                ?>
                <div class="alert alert-success" role="alert">
                  La hora fue registrada exitosamente
                </div>
                <?php
              }
               ?>
                <form action="ingresar.php" method="post" name="form">
                    <p>
                        <label for="user">Usuario:</label>
                        <input type="text" name="user" class="form-control" required>
                    </p>
                    <p>
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password" class="form-control" required>
                    </p>
                    <hr>
                    <input type="submit" value="Ingresar" class="btn btn-default">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
