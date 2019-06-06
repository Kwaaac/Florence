<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
  <link rel="stylesheet" href="../architecture/Monuments.css">
  <title>[Florence] Insolite/Calcio Fiorentino</title>
</head>

<body>
  <?php include('../../../HeadAndFoot/headerStg3.inc.php'); ?>


  <div class="slider-container" id="gestionTailleSlider">
    <div class="swiper-container main-slider loading">
      <div class="swiper-wrapper">
        <?php
          $dir = '../../../Images/hotels/orcagna';
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
      <p>Calcio Fiorentino</p>
    </div>


    <div class="texte">
      <p>Le Calcio Fiorentino est un sport florentin proche du football, deux équipes s'affrontent sur un terrain avec deux cages, le but pour chaque équipe est de mettre la balle dans le terrain adverse. Ce qui différentie
        le Calcio Fiorentino du football sont les fautes : le Calcio autorise et encourage le contact physique. En effet, les joueurs s'affrontent violemment, parfois jusqu'a l'évanouissement !</p>
    </div>
  </div>

  <script src="../architecture/slider.js"></script>

  <?php include('../../../HeadAndFoot/footerStg3.php'); ?>

</body>

</html>
