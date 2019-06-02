<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <title>Florence</title>
</head>

<body>
    <header>
        <div class="menu">
            <div class="lang">
                <a href="../en/index.html"><img src="Images/langswitch.png" alt="en"></a>
            </div>
            <div class="logo">
                <a href="index.html"><img class="Logo" src="Images/Logo.png" alt="Logo"></a>
            </div>
            <div class="menuderoulant">
                <nav>
                    <ul>

                        <li class="Login"><a href="#">Culture</a>

                            <ul class="sousmenu">
                                <li><a href="Pages/Sousmenus/frise.html">Histoire de la ville</a></li>
                                <li><a href="Pages/Sousmenus/archi.html">Architecture</a></li>
                            </ul>
                        </li>

                        <li class="InfoPr"><a href="#">Infos Pratiques</a>

                            <ul class="sousmenu">
                                <li><a href="Pages/Sousmenus/calendar.html">Actualités de la ville</a></li>
                                <li><a href="Pages/Sousmenus/Transports.html">Transports</a></li>
                            </ul>
                        </li>

                        <li class="BonPl"><a href="#">Astuces</a>

                            <ul class="sousmenu">
                                <li><a href="Pages/Sousmenus/Petits Prix.html">Nos bonnes adresses</a></li>
                                <li><a href="Pages/Sousmenus/Insolite.html">Insolites</a></li>
                            </ul>
                        </li>

                        <li class="Sejour"><a href="#">Visiter Florence</a>

                            <ul class="sousmenu">
                                <li><a href="Pages/Sousmenus/autour.html">Autour de vous</a></li>
                                <li><a href="Pages/Sousmenus/circuits.html">Nos circuit</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="slider-container">
        <div class="swiper-container main-slider loading">
            <div class="swiper-wrapper">
              <?php
              $dir = './Images/mainSlider';
              $fichierEtDossiers=scandir($dir);
              $myFile = "./textes/mainSlider.txt";
              $lines = file($myFile);

                for ($i=0; $i<count($fichierEtDossiers); $i++)
                {
                        if($fichierEtDossiers[$i]!="." && $fichierEtDossiers[$i]!=".."){
                          $fichier = $fichierEtDossiers[$i];
                          if (strpos($lines[$i], '@')){
                            list($name , $commentaire) = explode("@", $lines[$i]);
                          }else {
                            $name = " ";
                            $commentaire = " ";
                          }
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
                 ?>
                <div class="swiper-slide">
                  <?php
                    echo "<figure class=\"slide-bgimg\" style=\"background-image:url(".$dir."/".$fichier.")\">";
                    echo    "<img src=\"".$dir."/".$fichier."\" class=\"entity-img\" />";
                    ?>
                    </figure>
                    <div class="content">
                        <p class="title">Shaun Matthews</p>
                    </div>
                </div>
                <?php
              }}
                 ?>
            </div>
        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js'></script>

        <script src="slider.js"></script>
    </div>
</body>

</html>
