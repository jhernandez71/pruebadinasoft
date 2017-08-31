<?php
include_once("controllers/userController.php");
if (saveTime($_POST['time'],$_POST['id'])){
  header('Location: index.php?save=true');
}else{
  header('Location: views/index.php?save=false');
}
?>
