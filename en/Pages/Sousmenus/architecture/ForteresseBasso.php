<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
  <link rel="stylesheet" href="Monuments.css">
  <title>[Florence] Architecture/Forteresse de Basso</title>
</head>
<body>

<?php include('../../../HeadAndFoot/headerStg3.inc.php'); ?>

  <div class="slider-container" id="gestionTailleSlider">
    <div class="swiper-container main-slider loading">
      <div class="swiper-wrapper">
        <?php
        $dir = '../../../Images/ForteresseBasso';
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
      <p>Forteresse de Basso</p>
    </div>

    <div class="texte">
      <p>La Forteresse de Basso fait partie du patrimoine militaire de Florence. Elle fut construite entre 1534 et 1537 et a été dessiné par les architectes Pier Francesco da Viterbo et Antonio da Sangallo le Jeune.
A l’époque, cette forteresse constituait un lieu de refuge pour les dirigeants florentins lors de révoltes populaires.
 De nos jours,la forteresse de Basso est à la fois un lieu historique et culturel. Afin de le faire vivre, plusieurs événements y ont lieu : concert, défiles de mode ou encore des congrès internationaux.
      </p>
    </div>

  </div>

  <script src="slider.js"></script>

  <?php include('../../../HeadAndFoot/footerStg3.php'); ?>

</body>
</html>
