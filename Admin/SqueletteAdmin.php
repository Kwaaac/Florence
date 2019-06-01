<?php include ("connexion.php")
 ?>

 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <table border="2">
       <tr>
         <td> PATH </td> <td> Date d'ajout </td> <td> Validation </td>
       </tr>
       <?php
       $req='SELECT concat("Image/",DossierImage,"/",NomImage) AS "path", DateAjout, validation FROM `Image` ORDER BY DateAjout DESC';
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








   </body>
 </html>
