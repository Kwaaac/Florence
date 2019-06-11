<?php
include("../connectionFiles/connectionLOG.inc.php");
?>
<?php
if(isset($_POST["ajout"])){

  $name=$_POST["ajout"];

  //echo $name."<br>";
  $req="UPDATE `PHOTOS_MONUMENTS` SET `Valid` = '1' WHERE `PHOTOS_MONUMENTS`.`Name` ='".$name."';";
  //echo $req;
  try {
    $dbh->query($req);
    echo "Photo ajoute";
  } catch (\Exception $e) {
    echo $e;

  }
  header('Refresh: 2; URL=mainAdmin.php');
}

if (isset($_POST["suppression"])){
  $name=$_POST["suppression"];
  //echo $name;
  //echo "<br>";
  $req="DELETE FROM PHOTOS_MONUMENTS WHERE PHOTOS_MONUMENTS.Name ='".$name."';";
  //echo $req;
  try {
    $dbh->query($req);
    echo "Photo Supprimer";
  } catch (\Exception $e) {
    echo $e;

  }
  header('Refresh: 2; URL=mainAdmin.php');
}


?>
