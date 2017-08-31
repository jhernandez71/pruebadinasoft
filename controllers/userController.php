<?php
require_once ("connectController.php");
// Funcion que verifica si las credenciales de usuario existen en la tabla.
function signIn($user, $pass){
  $db = OpenConnect();
  $query = mysqli_query($db,"select id from tecnic where username ='" . $user . "' and password='" . $pass . "' ");
  $row = $query->fetch_array();
  if ($row["id"] == null){
    return 0;
  }else{
    return $row["id"];
  }
}

//funcion para almacenar valor en el campo time de la tabla a un usuario en especifico.
function saveTime($time,$id){
  $db = OpenConnect();
  $query = mysqli_query($db,"update tecnic set time='" . $time ."'  where id =" . $id );
  return $query;
}
?>
