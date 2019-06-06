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
  <?php include('../../../HeadAndFoot/headerStg3.php'); ?>

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
        // print_r($array);
        // print_r($valide);
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
      <p>Le Ponte Vecchio</p>
    </div>

    <div class="texte">
      <p>Le Ponte Vecchio, qui signifie litteralement "vieux pont", porte bien son nom, puisqu'il s'agit en effet du plus vieux pont de la ville. Mais pas que. Cette curiosite architecturale qui surplombe l'Arno, est egalement la plus vieille rue
        pietonne de Florence, ainsi que sa plus vieille galerie marchande. En effet, de nos jours le "Vieux Pont" accueille un grand nombre de joailliers et d'orfevres, mais ces derniers n'y ont fait leur apparition qu'a la fin du XVIeme siecle. Ils
        ont ete precede par des bouchers et poissonniers, relocalises a cause des odeurs. Ce pont ne date pourtant "que" de 1345, tandis que Florence existait deja durant l'Empire Romain.
        Les nombreuses crues de l'Arno ont fait des ravages dans la ville et l'on trouve donc des traces du Ponte Vecchio jusqu'en 966. Il a ainsi ete rebati plusieurs fois au travers des ages, nous permettant aujourd'hui d'admirer cette merveille
        architecturale, tenant en equilibre sur l'eau, toujours grouillante d'activite.</p>
    </div>

    <script src="slider.js"></script>

  <?php include('../../../HeadAndFoot/footerStg3.php'); ?>
</body>

</html>
