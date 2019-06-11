<?php
session_start();
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
          History
        </a>

        <ul class="sousmenu">
          <li><a href="Pages/Sousmenus/frise.php">Timeline of the city's history</a></li>
          <li><a href="Pages/Sousmenus/archi.php">Monuments</a></li>
        </ul>
      </li>

      <li class="InfoPr">

        <a class=" menuItem">
          <input class="menu-toggle" id="menu-toggle2" type="checkbox"></input>
          <label class="menu-toggle-button" for="menu-toggle">☶</label>
          Useful informations
        </a>

        <ul class="sousmenu">
          <li><a href="Pages/Sousmenus/calendar.php">City News</a></li>
          <li><a href="Pages/Sousmenus/Transports.php">Transports</a></li>
        </ul>

      </li>

      <li class="BonPl">

        <a class=" menuItem">
          <input class="menu-toggle" id="menu-toggle3" type="checkbox"></input>
          <label class="menu-toggle-button" for="menu-toggle">☶</label>
          Discoveries
        </a>

        <ul class="sousmenu">
          <li><a href="Pages/Sousmenus/Petits Prix.php">Restaurants</a></li>
          <li><a href="Pages/Sousmenus/Insolite.php">Curiosities</a></li>
          <li><a href="Pages/Sousmenus/voyageurs.php">Travelers Quotes</a></li>
        </ul>
      </li>

      <li class="Sejour">

        <a class=" menuItem">
          <input class="menu-toggle" id="menu-toggle4" type="checkbox"></input>
          <label class="menu-toggle-button" for="menu-toggle">☶</label>
          Visit the city
        </a>

        <ul class="sousmenu">
          <li><a href="Pages/Sousmenus/autour.php">Points of interest</a></li>
          <li><a href="Pages/Sousmenus/circuits.php">Our tours</a></li>
        </ul>
      </li>

      <li>
        <a class=" menuItem">
          <input class="menu-toggle" id="menu-toggle4" type="checkbox"></input>
          <label class="menu-toggle-button" for="menu-toggle">☶</label>
          Authentication
        </a>

        <ul class="sousmenu">
          <li><a href="Pages/Sousmenus/connection.php">Log in</a></li>
          <li><a href="Pages/Sousmenus/inscription.php">Sign Up</a></li>
          <?php
          if (isset($_SESSION["type"]) && $_SESSION["type"]==1){
            echo "<li><a href='Pages/Admin/mainAdmin.php'>Admin page </a> </li>";
          }
           ?>
        </ul>

      </li>

      <li class="lang" id="lang">
        <a href="../fr/index.php"><img class="lg" src="Images/langswitch.png" alt="en"></a>
      </li>

    </ul>
  </nav>

</div>
