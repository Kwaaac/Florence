<?php include("connectionLOG.inc.php");
if(!isset($_SESSION["login"])){
  header('location: /connectionFiles/logout.php');
}

 ?>
