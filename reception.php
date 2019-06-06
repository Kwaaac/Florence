<?php
session_start();
include('./Admin/connexion.php');
$maxsize= floatval('52428800‬');
$maxwidth= 1920;
$maxheight= 1080;
$erreur= "";
$dossierA=$_SESSION['dossier-attacher'];
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php
if(isset($_FILES['mon_fichier'])){
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
  header("Refresh:5; url=upload.php");
}else{
  $name=$_FILES['mon_fichier']['name'];
  $destination= './fr/Images/';
  // $destinationEN= './en/Images/';
  $dir = './Images/mainSlider';
  $fichierEtDossiers=scandir($destination);
  for ($i=0; $i<count($fichierEtDossiers); $i++)
  {
          $w = 0;
          while($fichierEtDossiers[$i]==$name){
            $name=$_FILES['mon_fichier']['name']."(".$w.")";
            $w++;
          }
}
  $resultat = move_uploaded_file($_FILES['mon_fichier']['tmp_name'],$destination.$name);
  // $resultat2 = move_uploaded_file($_FILES['mon_fichier']['tmp_name'],$destinationEN.$name);
if ($resultat && $resultat2){
  $req= "INSERT INTO PHOTOS_MONUMENTS(\`Name\`, \`FileName\`, \`Valid\`) VALUES ($name,$dossierA,0);";
  echo "<h2 class=\"h2 text-center\">transfer reussi</h2><br />";
  header("Refresh:3; url=upload.php");
}
}
}else {
  echo "<h1 class=\"h2 text-center\">erreur fichier non valide pour des raisons inconnu</h1><br />";
  echo "<h1 class=\"h2 text-center\">utlisez un autre fichier</h1><br />";
  header("Refresh:5; url=upload.php");
}
 ?>
