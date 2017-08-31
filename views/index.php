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
            <div class="panel-heading">Conexion a MySQL con PHP :: Contador de Tiempo.</div>
            <div class="panel-body">
              <?php
              if (isset($_GET["save"]) && ($_GET["save"] == false) ){
                ?>
                <div class="alert alert-success" role="alert">
                  Se produjo un error al intentar guardar la hora, reintente.
                </div>
                <?php
              }
               ?>
              <form action="../saveTime.php" method="post" name="form">
                  <p>
                      <div class="alert alert-success" role="alert" id="clock"></div>
                      <input type="hidden" name="time" id="time" class="form-control">
                      <input type="hidden" name="id" id="id" class="form-control" value="<?=$_GET["id"]; ?>">

                  </p>
                  <hr>

                  <input type="button" value="Detener contador de tiempo" class="btn btn-default" onclick="StopClock();" id="Stopbtn" disabled>
                  <input type="submit" value="Guardar contador de tiempo" class="btn btn-default" disabled id="Submitbtn">

              </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">

      var cronometro;

      function showClock() {
      var myDateTime = new Date();
      var hours = myDateTime.getHours();
      var minutes = myDateTime.getMinutes();
      var seconds = myDateTime.getSeconds();
      var subfix = ' am';
      if(hours > 12) {
        hours = hours - 12;
        subfix = ' pm';
      }
      if(hours < 10) { hours = '0' + hours; }
      if(minutes < 10) { minutes = '0' + minutes; }
      if(seconds < 10) { seconds = '0' + seconds; }
        document.getElementById("clock").innerHTML = hours+':'+minutes+':'+seconds;
      }

      cronometro = setInterval(showClock, 1000);
      document.getElementById("Stopbtn").disabled = false;

      function StopClock(){
        clearInterval(cronometro);
        document.getElementById("Stopbtn").disabled = true;
        document.getElementById("Submitbtn").disabled = false;
        document.getElementById("time").value = document.getElementById("clock").innerHTML;
      }
    </script>
</body>
</html>
