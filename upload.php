<?php
include('./Admin/connexion.php');
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="ressource/bootstrap-4.3.1.-dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <title>Florence | Upload</title>
   </head>
   <body>

   </body>
 </html>

<form method="post" enctype="multipart/form-data">
  <input type="hidden" name="MAX_FILE_SIZE" value="52428800‬" />
  <label for="icone">Icône du fichier (JPG, PNG | max. 50Mo) :</label><br />
  <input type="file" name="mon_fichier" id="mon_fichier" /><br />
  <label for="titre">Titre du fichier (max. 50 caractères) :</label><br />
  <input type="text" name="titre" value="Titre du fichier" id="titre" /><br />
  <label for="description">Description de votre fichier (max. 255 caractères) :</label><br />
  <textarea name="description" id="description"></textarea><br />
  <input type="submit" name="submit" value="Envoyer" />
  <input type="reset" onclick="javascript:if(confirm('Votre formulaire va être réinisialiser \nêtes vous êtes sûr ?'));" value="réinitialiser">
</form>
