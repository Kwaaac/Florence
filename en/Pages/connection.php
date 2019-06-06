<?php
include("connectionFiles/connectionLOG.inc.php");

?>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <title>[Florence] Connection</title>
  </head>
  <body id="connection">
    <header>
      <div class="menu">
        <div class="lang">
          <a href="../en/Pages/connection.php"><img src="../../Images/langswitch.png" alt="en"></a>
        </div>
        <div class="logo">
          <a href="../../index.html"><img class="Logo" src="../../Images/Logo.png" alt="Logo"></a>
        </div>
        <div class="menuderoulant">
          <nav>
            <ul>

              <li class="Login"><a href="#">Culture</a>

                <ul class="sousmenu">
                  <li><a href="frise.html">Histoire de la ville</a></li>
                  <li><a href="archi.html">Architecture</a></li>
                </ul>
              </li>


              <li class="InfoPr"><a href="#">Infos Pratiques</a>

                <ul class="sousmenu">
                <li><a href="calendar.html">Actualités de la ville</a></li>
                  <li><a href="Transports.html">Transports</a></li>
                </ul>
              </li>

              <li class="BonPl"><a href="#">Astuces</a>

                <ul class="sousmenu">
                  <li><a href="Petits Prix.html">Nos bonnes adresses</a></li>
                  <li><a href="Insolite.html">Insolites</a></li>
                </ul>
              </li>
              <li class="Sejour"><a href="#">Visiter Florence</a>

                <ul class="sousmenu">
                  <li><a href="autour.html">Autour de vous</a></li>
                  <li><a href="circuits.html">Nos circuit</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <?php
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
        echo "Utilisateur : ".$login.".";
      }else if($req2 -> rowCount() !=0){
        $_SESSION["login"] = $login;
        $_SESSION["mdp"] = $mdp;
        $_SESSION["type"] = 1;
        header("location: Admin/mainAdmin.php");
      }else{
        echo "T'es pas co !";
      }
    } else {

    ?>
    <br>
    <br>
    <form class="form-inline my-2 my-lg-0" method="post">
      <input type="text" placeholder="Utilisateur" name="login" required>
      <input type="password" placeholder="Password" name="mdp" required>
      <button type="submit">Se connecter</button>
    </form>
    <?php
    }
    ?>

  </body>
</html>
