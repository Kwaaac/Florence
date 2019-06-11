<?php
include("../connectionFiles/connectionLOG.inc.php");
?>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="../../style.css">
  <title>[Florence] Administrateur - Validation images</title>
</head>
<body id="admin">

  <div class="header">
    <ul class="logo">
      <a href="../../index.php"><img src="../../Images/Logo.png" alt="Logo"></a>
    </ul>
    <nav>
      <input class="menu-toggle" id="menu-toggle" type="checkbox">
      <label class="menu-toggle-button" for="menu-toggle">☰</label>
      <ul class="primary">

        <li class="BonPl">

          <a class=" menuItem">
            <input class="menu-toggle" id="menu-toggle1" type="checkbox"></input>
            <label class="menu-toggle-button" for="menu-toggle">☶</label>
            History
          </a>

          <ul class="sousmenu">
            <li><a href="../Sousmenus/frise.php">Timeline of the city's history</a></li>
            <li><a href="../Sousmenus/archi.php">Monuments</a></li>
          </ul>
        </li>

        <li class="InfoPr">

          <a class=" menuItem">
            <input class="menu-toggle" id="menu-toggle2" type="checkbox"></input>
            <label class="menu-toggle-button" for="menu-toggle">☶</label>
            Useful informations
          </a>

          <ul class="sousmenu">
            <li><a href="../Sousmenus/calendar.php">City News</a></li>
            <li><a href="../Sousmenus/Transports.php">Transports</a></li>
          </ul>

        </li>

        <li class="BonPl">

          <a class=" menuItem">
            <input class="menu-toggle" id="menu-toggle3" type="checkbox"></input>
            <label class="menu-toggle-button" for="menu-toggle">☶</label>
            Discoveries
          </a>

          <ul class="sousmenu">
            <li><a href="../Sousmenus/Petits Prix.php">Restaurants</a></li>
            <li><a href="../Sousmenus/Insolite.php">Curiosities</a></li>
            <li><a href="../Sousmenus/voyageurs.php">Travelers Quotes</a></li>
          </ul>
        </li>

        <li class="Sejour">

          <a class=" menuItem">
            <input class="menu-toggle" id="menu-toggle4" type="checkbox"></input>
            <label class="menu-toggle-button" for="menu-toggle">☶</label>
            Visit the city
          </a>

          <ul class="sousmenu">
            <li><a href="../Sousmenus/autour.php">Points of interest</a></li>
            <li><a href="../Sousmenus/circuits.php">Our tours</a></li>
          </ul>
        </li>

        <li>
          <a class=" menuItem">
            <input class="menu-toggle" id="menu-toggle4" type="checkbox"></input>
            <label class="menu-toggle-button" for="menu-toggle">☶</label>
            Authentication
          </a>

          <ul class="sousmenu">
            <li><a href="../Sousmenus/connection.php">Log in</a></li>
            <li><a href="../Sousmenus/inscription.php">Sign Up</a></li>
            <?php
            if (isset($_SESSION["type"]) && $_SESSION["type"]==1){
              echo "<li><a href='../Admin/mainAdmin.php'>Admin page </a> </li>";
            }
            ?>
          </ul>

        </li>

        <li class="lang" id="lang">
          <a href="../../../fr/index.php"><img class="lg" src="../../Images/langswitch.png" alt="en"></a>
        </li>

      </ul>
    </nav>

  </div>

  <div class="title">
    <span>Administrator page</span>
  </div>

  <?php

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

          echo "<tr> <td class=\"imagetab\"><img src=\"../../".$ligne[0]."\" alt=".$ligne[0]." height=\"42\" width=\"42\" ></td>  <td class=\"tab\">".$ligne[1]."</td>  <td class=\"tab\">
          <input type='button'  value='Ajouter'>
          <input type='button' value='Supprimer'>
          </td> </tr>";
        }
      }

      echo "</table>";
    }
    ?>


    <footer class="footer" id="footerIndex">
      <div class="Partenaires">
        <ul>The partners of this project
          <li><br><a class="ftr" href="https://fr.unesco.org/" >UNESCO</a></li>
          <li><a class="ftr" href="http://www.u-pem.fr/">The University of Paris-Est Marne-La-Vallée</a></li>
        </ul>
      </div>

      <div class="Propos">
        <ul>About us
          <li><br><a class="ftr" href="../Sousmenus/contact.php">Objective and creators of the site</a></li>
          <li><a class="ftr" href="../Sousmenus/politiqueContenu.php">Legal Information</a></li>
        </ul>

      </div>

      <div class="Social">
        <a href="https://www.instagram.com/mcnflorence/"><img src="../../Images/instagramIcon.png" alt="Instagram"></a>
        <a href="https://www.linkedin.com/company/mcn-florence/about/?viewAsMember=true"><img src="../../Images/linkedinIcon.png" alt="Linkedin"></a>
        <a href="https://www.facebook.com/mcnflorence/"><img src="../../Images/facebookIcon.png" alt="Facebook"></a>
      </div>

    </footer>

  </body>
  </html>
