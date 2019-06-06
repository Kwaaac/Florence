<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
  <link rel="stylesheet" href="Monuments.css">
  <title>[Florence] Architecture/Basilique San Miniato</title>
</head>
<body>

<?php include('../../../HeadAndFoot/headerStg3.inc.php'); ?>

  <div class="slider-container" id="gestionTailleSlider">
    <div class="swiper-container main-slider loading">
      <div class="swiper-wrapper">
        <?php
        $dir = '../../../Images/SanMiniato';
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
      <p>La Basilique San Miniato</p>
    </div>

    <div class="texte">
      <p>La basilique San Miniato al Monte a été édifiée en l’honneur du premier martyre de la ville, Saint Miniatus, enterré à cet endroit au IIIe siècle.
D’après les dires, Saint Miniatus était un roi ou prince Arménien qui servait l’armée romaine, et qui a effectué un pèlerinage jusqu’à Rome. Il été dénoncé comme étant chrétien, amené devant l’empereur Decius qui persécutait les chrétiens. Il a été décapité par ce dernier près de la Piazza della Signoria. La légende raconte que Saint Miniatus aurait ramassé sa propre tête, traversé le fleuve Arno pour la porter jusqu’au mont Mons Florentinus où il avait été hermite.
La façade de cette église est constituée de marbre blanc de Carrare et marbre vert de Prato . Elle comprend une mosaïque sur fond d’or, du XIIe siècle, où l’on peut apercevoir la Vierge, le Christ et Saint Miniatus côte à côte. Ce monument illustre parfaitement l’architecture romane toscane.
 A l’intérieur, l’autel conserve les ossements de Saint Miniato.
      </p>
    </div>

  </div>

  <script src="slider.js"></script>

  <?php include('../../../HeadAndFoot/footerStg3.php'); ?>

</body>
</html>
