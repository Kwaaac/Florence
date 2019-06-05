<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
  <link rel="stylesheet" href="Monuments.css">
  <title>[Florence] Architecture/Galleria dell'Accademia</title>
</head>
<body>

<?php include('../../../HeadAndFoot/headerStg3.inc.php'); ?>

  <div class="slider-container" id="gestionTailleSlider">
    <div class="swiper-container main-slider loading">
      <div class="swiper-wrapper">
        <?php
        $dir = '../../../Images/GalleriaAccademia';
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
      <p>Galleria dell'Accademia</p>
    </div>

    <div class="texte">
      <p>La galerie de l’Académie est un musée Florentin qui se trouve à l’intérieur de l’Académie du dessin de Florence. La galerie connait un grand succès car elle abrite les sculptures les plus connus de Michel-Ange mais elle expose aussi d’autres oeuvres: peintures religieuses, autres statues, instruments de musique..
L’Académie du dessin de Florence fut construite par Cosme 1er de Médicis, le Grand Duc de Toscane en 1563. Michel-Ange fut l’un des premiers professeurs à y enseigner. Le but de la galerie de l’Académie était de montrer aux étudiants des exemples d’oeuvres historiques faisant office d’objets d’études. Dorénavant, vous
pouvez contempler des oeuvres de la peinture et de la sculpture Toscane datant du XIIIe jusqu’au XVIe siècle.
      </p>
    </div>

  </div>

  <script src="slider.js"></script>

  <?php include('../../../HeadAndFoot/footerStg3.php'); ?>

</body>
</html>
