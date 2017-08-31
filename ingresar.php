<?php
include_once("controllers/userController.php");
$id = signIn($_POST['user'],$_POST['password']);
if ($id > 0){
  header("Location: views/index.php?valid=true&id=". $id);
}else{
  header('Location: index.php?valid="false"');
}
?>
