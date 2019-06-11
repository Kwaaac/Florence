<?php
session_start ();
 ?>
<div class="header">
  <ul class="logo">
    <a href="index.php"><img src="Images/Logo.png" alt="Logo"></a>
  </ul>
  <nav>
    <input class="menu-toggle" id="menu-toggle" type="checkbox">
    <label class="menu-toggle-button" for="menu-toggle">☰</label>
    <ul class="primary">

      <li class="BonPl">

        <a class=" menuItem">
          <input class="menu-toggle" id="menu-toggle1" type="checkbox"></input>
          <label class="menu-toggle-button" for="menu-toggle">☶</label>
          Histoire
        </a>

        <ul class="sousmenu">
          <li><a href="Pages/Sousmenus/frise.php">Frise Historique</a></li>
          <li><a href="Pages/Sousmenus/archi.php">Monuments</a></li>
        </ul>
      </li>

      <li class="InfoPr">

        <a class=" menuItem">
          <input class="menu-toggle" id="menu-toggle2" type="checkbox"></input>
          <label class="menu-toggle-button" for="menu-toggle">☶</label>
          Informations Utiles
        </a>

        <ul class="sousmenu">
          <li><a href="Pages/Sousmenus/calendar.php">Actualités de la ville</a></li>
          <li><a href="Pages/Sousmenus/Transports.php">Transports</a></li>
        </ul>

      </li>

      <li class="BonPl">

        <a class=" menuItem">
          <input class="menu-toggle" id="menu-toggle3" type="checkbox"></input>
          <label class="menu-toggle-button" for="menu-toggle">☶</label>
          Découvertes
        </a>

        <ul class="sousmenu">
          <li><a href="Pages/Sousmenus/Petits Prix.php">Se restaurer</a></li>
          <li><a href="Pages/Sousmenus/Insolite.php">Curiosités</a></li>
          <li><a href="Pages/Sousmenus/voyageurs.php">Citations de Voyageurs</a></li>
        </ul>
      </li>

      <li class="Sejour">

        <a class=" menuItem">
          <input class="menu-toggle" id="menu-toggle4" type="checkbox"></input>
          <label class="menu-toggle-button" for="menu-toggle">☶</label>
          Visiter la ville
        </a>

        <ul class="sousmenu">
          <li><a href="Pages/Sousmenus/autour.php">Points d'intérêts</a></li>
          <li><a href="Pages/Sousmenus/circuits.php">Nos circuits</a></li>
        </ul>
      </li>

      <li>
        <a class=" menuItem">
          <input class="menu-toggle" id="menu-toggle4" type="checkbox"></input>
          <label class="menu-toggle-button" for="menu-toggle">☶</label>
          Authentification
        </a>

        <ul class="sousmenu">
          <li><a href="Pages/Sousmenus/connection.php">Se connecter</a></li>
          <li><a href="Pages/Sousmenus/inscription.php">S'inscrire</a></li>
          <?php
          if (isset($_SESSION["type"]) && $_SESSION["type"]==1){
            echo "<li><a href='Pages/Admin/mainAdmin.php'>Page admin </a> </li>";
          }
           ?>
        </ul>

      </li>

      <li class="lang" id="lang">
        <a href="../en/index.php"><img class="lg" src="Images/langswitch.png" alt="en"></a>
      </li>

    </ul>
  </nav>

</div>
