<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
  <link rel="stylesheet" href="Monuments.css">
  <title>[Florence] Architecture/Bargello</title>
</head>
<body>

<?php include('../../../HeadAndFoot/headerStg3.inc.php'); ?>

  <div class="slider-container" id="gestionTailleSlider">
    <div class="swiper-container main-slider loading">
      <div class="swiper-wrapper">
        <?php
        $dir = '../../../Images/Bargello';
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
      <p>Le Palais Bargello</p>
    </div>

    <div class="texte">
      <p>Le Palais du Bargello fut édifié en 1255 afin de servir de résidence au Podestat, c’est-à-dire le premier magistrat de la ville chargé des pouvoirs exécutifs et judiciaires.
Les condamnés à mort étaient exécutés dans la cour du palais et tout au long du  XVIIIe siècle, le palais a servi de prison sous l’autorité du chef de la police, autrement appelé “Bargello”,  ce qui a donc donné le nom de l’édifice. Ses murs ont été témoins d’importants épisodes de l’histoire civique.
En 1865, après de grandes rénovations, le Bargello ouvre ses portes comme l’un des premiers musées nationaux d’Italie. Ce musée est dédié aux arts du Moyen- ge et de la Renaissance.
Depuis cette même année, quelques unes des plus importantes sculptures de la Renaissance ont été apportées au palais, dont des chefs-d'œuvre de Donatello, Luca della Robbia, Verrocchio, Michelangelo et Cellini, provenant pour la plupart des collections Médicis et Grand-Ducale.
Avec la récente réforme du Ministère, le Musée s'est vu accorder l'autonomie et est le leader d'autres musées florentins connexes (Musée des Chapelles Médicis, Musée du Palais Davanzati - Musée de l'ancienne Maison Florentine, Musée d'Orsanmichele, Musée de Casa Martelli).
      </p>
    </div>

  </div>

  <script src="slider.js"></script>

  <?php include('../../../HeadAndFoot/footerStg3.php'); ?>

</body>
</html>
