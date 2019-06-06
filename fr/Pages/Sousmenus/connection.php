<?php
include("../connectionFiles/connectionLOG.inc.php");
//on récupère les données du formulaire
$login=isset($_POST['login']) ? $_POST['login'] : null ;
$mdp=isset($_POST['mdp']) ? $_POST['mdp'] : null ;
//on vérifie la connection
if($login != null && $mdp != null){
  //on fait deux requêtes pour vérifier les deux BDD
  $req = $dbh -> query("SELECT * FROM USER WHERE login=\"".$login."\" AND password=SHA1(\"".$_POST["mdp"]."\");");
  $req2 = $dbh -> query("SELECT * FROM ADMIN WHERE login=\"".$login."\" AND password=SHA1(\"".$_POST["mdp"]."\");");
  if($req -> rowCount() !=0){//on vérifie si il y a un résultat, si oui, c'est que la connection est validée
    $_SESSION["login"] = $login;
    $_SESSION["mdp"] = $mdp;
    $_SESSION["type"] = 0;
    header("location: ../../index.php");
  }else if($req2 -> rowCount() !=0){
    $_SESSION["login"] = $login;
    $_SESSION["mdp"] = $mdp;
    $_SESSION["type"] = 1;
    header("location: ../Admin/mainAdmin.php");
  }else{
    $error=true;
  }
}
?>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="pages.css">
    <title>[Florence] Connection</title>
  </head>
  <body id="connection">
    <?php
    include('../../HeadAndFoot/headerStg2.php');
    ?>
    <div class="title">
      <span>Page de connection</span>
    </div>
    <?php
    if (isset($error)) {
      echo "L'identifiant ou le mot de passe que vous avez rentre est errone, veuillez reessayer.";
    }
    ?>
    <div class="formConnection">
      <form method="post">
        <input type="text" placeholder="Identifiant" name="login" required>
        <br>
        <input type="password" placeholder="Mot de passe" name="mdp" required>
        <br>
        <button type="submit" name="button" class="btn btn-primary" align="center">Envoyer</button>
        <a href="inscription.php">Pas de compte</a><br >
      </form>
    </div>
    <?php include('../../HeadAndFoot/footerStg2.php');?>
  </body>
</html>
