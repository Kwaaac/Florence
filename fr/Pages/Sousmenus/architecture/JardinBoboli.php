<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
  <link rel="stylesheet" href="Monuments.css">
  <title>[Florence] JardinBoboli</title>
</head>

<body>
  <div class="header">
    <ul class="logo">
      <a href="../../../index.php"><img src="../../../Images/Logo.png" alt="Logo"></a>
    </ul>
    <nav>
      <input class="menu-toggle" id="menu-toggle" type="checkbox">
      <label class="menu-toggle-button" for="menu-toggle">☰</label>
      <ul class="primary">

        <li class="BonPl">

          <a class=" menuItem">
            <input class="menu-toggle" id="menu-toggle1" type="checkbox"></input>
            <label class="menu-toggle-button" for="menu-toggle">☶</label>
            Bon Plans
          </a>

          <ul class="sousmenu">
            <li><a href="../frise.php">Histoire de la ville</a></li>
            <li><a href="../archi.php">Architecture</a></li>
          </ul>
        </li>

        <li class="InfoPr">

          <a class=" menuItem">
            <input class="menu-toggle" id="menu-toggle2" type="checkbox"></input>
            <label class="menu-toggle-button" for="menu-toggle">☶</label>
            Infos Pratiques
          </a>

          <ul class="sousmenu">
            <li><a href="../calendar.php">Actualités de la ville</a></li>
            <li><a href="../Transports.php">Transports</a></li>
          </ul>

        </li>

        <li class="BonPl">

          <a class=" menuItem">
            <input class="menu-toggle" id="menu-toggle3" type="checkbox"></input>
            <label class="menu-toggle-button" for="menu-toggle">☶</label>
            Astuces
          </a>

          <ul class="sousmenu">
            <li><a href="../Petits Prix.php">Nos bonnes adresses</a></li>
            <li><a href="../Insolite.php">Insolites</a></li>
          </ul>
        </li>

        <li class="Sejour">

          <a class=" menuItem">
            <input class="menu-toggle" id="menu-toggle4" type="checkbox"></input>
            <label class="menu-toggle-button" for="menu-toggle">☶</label>
            Visiter Florence
          </a>

          <ul class="sousmenu">
            <li><a href="../autour.php">Autour de vous</a></li>
            <li><a href="../circuits.php">Nos circuit</a></li>
          </ul>
        </li>

        <li>
          <a class=" menuItem">
            <input class="menu-toggle" id="menu-toggle4" type="checkbox"></input>
            <label class="menu-toggle-button" for="menu-toggle">☶</label>
            Authentification
          </a>

          <ul class="sousmenu">
            <li><a>Se connecter</a></li>
            <li><a>S'inscrire</a></li>
          </ul>

        </li>

        <li class="lang" id="lang">
          <a href=""><img class="lg" src="../../../Images/langswitch.png" alt="en"></a>
        </li>

      </ul>
    </nav>

  </div>

  <div class="slider-container" id="gestionTailleSlider">
    <div class="swiper-container main-slider loading">
      <div class="swiper-wrapper">
        <?php
        $dir = '../../../Images/JaBo';
        $fichierEtDossiers=scandir($dir);

        for ($i=0; $i<count($fichierEtDossiers); $i++)
        {
          if($fichierEtDossiers[$i]!="." && $fichierEtDossiers[$i]!=".."){
            $fichier = $fichierEtDossiers[$i];

            $name = " ";
            $commentaire = " ";

            ?>
        <div class="swiper-slide">
          <?php
              echo "<figure class=\"slide-bgimg\" style=\"background-image:url(".$dir."/".$fichier.")\">";
              echo "<img src=\"".$dir."/".$fichier."\" class=\"entity-img\" />";
              ?>
          </figure>
          <div class="content">
            <?php
              echo  "<p class=\"title\">".$name."</p>";
              echo  "<span class=\"caption\">".$commentaire."</span>";
              ?>
          </div>
        </div>
        <?php
        }}
        ?>
      </div>
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev swiper-button-white"></div>
      <div class="swiper-button-next swiper-button-white"></div>
    </div>

    <!-- Thumbnail navigation -->
    <div class="swiper-container nav-slider loading caca">
      <div class="swiper-wrapper" role="navigation">
        <?php
        for ($i=0; $i<count($fichierEtDossiers); $i++)
        {
          if($fichierEtDossiers[$i]!="." && $fichierEtDossiers[$i]!=".."){
            $fichier = $fichierEtDossiers[$i];
            if (strpos($lines[$i], '@')){
              list($name , $commentaire) = explode("@", $lines[$i]);
            }else {
              $name = " ";
            }
            ?>
        <div class="swiper-slide">
          <?php
              echo "<figure class=\"slide-bgimg\" style=\"background-image:url(".$dir."/".$fichier.")\">";
              echo    "<img src=\"".$dir."/".$fichier."\" class=\"entity-img\" />";
              ?>
          </figure>
          <div class="content">
            <?php
              echo  "<p class=\"title\">".$name."</p>";
              ?>
          </div>
        </div>
        <?php
        }}
        ?>
      </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js'></script>

  </div>

<div class="textBox" id="page">
  <div class="indication">
    <p>Le Jardin Boboli</p>
  </div>


  <div class="texte">
    <p>Le jardin de Boboli est situé derrière le Palais de Pitti. C'est le plus grand espace vert de Florence car il a une superficie de 45 000 mètres carrés. Ce jardin est constitué de grottes, de petits lacs, de centaine de statues de marbres et au
      centre, un obélisque égyptien transporté de la Villa Médicis de Rome.</p>
  </div>

  </div>

  <script src="slider.js"></script>

  <footer class="footer">
    <div class="Partenaires">
      <ul>Les partenaires de ce projet
        <li><br><a class="ftr" href="https://fr.unesco.org/">L'UNESCO</a></li>
        <li><a class="ftr" href="http://www.u-pem.fr/">L'Université Paris-Est Marne-La-Vallée</a></li>
      </ul>
    </div>

    <div class="Propos">
      <ul>A Propos
        <li><br><a class="ftr" href="contact.php">Objectif et créateurs du site</a></li>
        <li><a class="ftr" href="politiqueContenu.php">Mentions Légales</a></li>
      </ul>

    </div>
  </footer>

</body>

</html>
