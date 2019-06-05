<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
  <link rel="stylesheet" href="../architecture/Monuments.css">
  <title>[Florence] Restaurant/Orcagna</title>
</head>

<body>
  <?php include('../../../HeadAndFoot/headerStg3.php'); ?>


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
      <p>Le Orcagna</p>
    </div>

    <div class="texte">
      <p>Cet hôtel possède un petit jardin où vous pourrez vous reposer tranquillement et inclus un petit-déjeuner buffet.
        Une connexion Wi-Fi est mise à votre disposition et ce, n’importe où dans l’hôtel.
        L’un de ses points forts est la localisation, en effet, le quartier Lungarno del Tempio est le choix parfait pour les amateurs des monuments anciens, et pour ceux qui sont friands dans l’exploration de la vieille ville et de ses monuments.
      </p>
    </div>


  </div>

  <script src="../architecture/slider.js"></script>

  <?php include('../../../HeadAndFoot/footerStg3.php'); ?>


</body>

</html>
