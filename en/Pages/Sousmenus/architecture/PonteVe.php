<?php
include('../../connectionFiles/connectionLOG.inc.php');
?>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
  <link rel="stylesheet" href="Monuments.css">
  <title>[Florence] Architecture/Ponte Vecchio</title>
</head>

<body>
  <?php include('../../../HeadAndFoot/headerStg3.inc.php'); ?>

  <div class="slider-container" id="gestionTailleSlider">
    <div class="swiper-container main-slider loading">
      <div class="swiper-wrapper">
        <?php
        $dir = '../../../Images/PoVe';
        $strict_dir=array_pop(explode('/', $dir));;
        $fichierEtDossiers=scandir($dir);
        $req = "SELECT name FROM `PHOTOS_MONUMENTS` WHERE `valid` = 1 and `FileName` = '".$strict_dir."' ;";
        $res=$dbh->query($req);
        $array = $res->fetchAll();
        for($i=0; $i<count($array); $i++){
          $valide[]=$array[$i][0];
        }
        for ($i=0; $i<count($fichierEtDossiers); $i++)
        {
          if(in_array($fichierEtDossiers[$i],$valide)){
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
      }}}
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
      <p>The Ponte Vecchio</p>
    </div>

    <div class="texte">
      <p>The Ponte Vecchio, which literally means "old bridge", bears its name well, since it is the oldest bridge in the city. But not just that. This architectural curiosity overlooking the Arno is also Florence's oldest pedestrian street and its oldest shopping mall. Indeed, nowadays the "Old Bridge" welcomes a large number of jewellers and goldsmiths, but the latter only appeared there at the end of the 16th century. They were preceded by butchers and fishmongers, relocated because of the smells. However, this bridge "only" dates back to 1345, while Florence already existed during the Roman Empire. The many floods of the Arno River caused havoc in the city and traces of the Ponte Vecchio can therefore be found until 966. It has been rebuilt several times over the years, allowing us today to admire this architectural marvel, balanced on the water, still teeming with activity.</p>
    </div>

    <script src="slider.js"></script>
    
  <?php include('../../../HeadAndFoot/footerStg3.php'); ?>
</body>

</html>
