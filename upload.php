<?php
include(./Admin/connexion.php);
 ?>
 <h1>UPLOAD</h1>
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
