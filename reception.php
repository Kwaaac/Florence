<?php
$maxsize= floatval('52428800‬');
$maxwidth= 1920;
$maxheight= 1080;
$erreur= "";

if ($_FILES['mon_fichier']['error'] > 0) $erreur = "Erreur lors du transfert";
if ($_FILES['mon_fichier']['size'] > $maxsize) $erreur = "Le fichier est trop gros";
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
$extension_upload = strtolower(  substr(  strrchr($_FILES['mon_fichier']['name'], '.')  ,1)  );
if (!(in_array($extension_upload,$extensions_valides))) $erreur = "Cette extension n'est pas acceptée";
$image_sizes = getimagesize($_FILES['mon_fichier']['tmp_name']);
if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight) $erreur = "Image trop grande \n pour l'ajouter au site contacter les administrateur";
if($erreur != ""){
  echo "<h1 class=\"display-1 text-center\">erreur</h1><br />";
  echo "<h2 class=\"h2 text-center\">".$erreur."</h2><br />";
  header("Refresh:30; url=upload.php");
}else{
  $name=$_FILES['mon_fichier']['name'];
  $destination= './fr/Images/';
  $dir = './Images/mainSlider';
  $fichierEtDossiers=scandir($destination);
  for ($i=0; $i<count($fichierEtDossiers); $i++)
  {
          $w = 0
          while($fichierEtDossiers[$i]==$name){
            $name=$_FILES['mon_fichier']['name']."(".$w.")"
            $w++;
          }
}
  $resultat = move_uploaded_file($_FILES['mon_fichier']['tmp_name'],$destination.$name);
if ($resultat){
  echo "<h2 class=\"h2 text-center\">transfer reussi</h2><br />";
  header("Refresh:30; url=upload.php");
}
}
 ?>
