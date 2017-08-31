<?php
$con = null;
//class db{
  // funcion para la conexion con la base de datos mediante los parametros normales de conexion.
  function OpenConnect(){

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "test";
    $con =  mysqli_connect($host, $user, $pass);
    if (!$con) {
      die('Problemas para realizar la conexion con la Base de datos, por favor verifique: ' . mysql_error());
    }
    if (!mysqli_select_db($con,$db)){
      die('Problemas para seleccionar la tabla de datos');
    }
    return $con;
  }

  // funcion para cerrar la conexion a la base de datos
  function CloseConnect(){
    if  (!is_null($con)){
        mysqli_close($con);
    }
  }
//}
 ?>
