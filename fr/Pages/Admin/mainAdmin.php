<?php
include("../fr/Pages/connectionFiles/connectionLOG.inc.php");


 if ($_SESSION["type"] == 1) {
 ?>
 <table border="2">
   <tr>
     <td> PATH </td> <td> Date d'ajout </td> <td> Validation </td>
   </tr>
   <?php
   $req='SELECT concat("Images/",FileName,"/",Name) AS "path", Valid FROM `PHOTOS_MONUMENTS` ORDER BY Name DESC';
   $res=$dbh->query($req);

   while ($ligne = $res->fetch()){
     if ($ligne[2]==0){
       echo "<tr> <td>". $ligne[0]."</td>  <td>".$ligne[1]."</td>  <td>
          <input type='button'  value='Ajouter'>
          <input type='button' value='Supprimer'>
          </td> </tr>";
     }
   }

    ?>


 </table>







 <?php
 }
