<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="pages.css">
  <title>[Florence] Transports</title>
</head>

<body id="transport">
  <?php include('../../HeadAndFoot/headerStg2.php'); ?>

  <div class="title">
    <span>Transports</span>
  </div>

  <div class="boiteinfo1">
    <h1>BUS</h1>
    <input type="checkbox" class="read-more-state" id="post-1" onclick="myFunction('post-1', 'box-1')" />

    <p class="read-more-wrap" id="box-1"><span class="read-more-target"> <span class="subtitle">Tarifs</span><br>
        <span class="text">Vous pouvez achetez les tickets dans les kiosques et tabac.
          Le ticket standard coûte 1,20€ et à une durée de 90 minutes après sa validation.
          D’autre ticket sont disponible tel que le billet valable 24h (5€),
          le billet valable pendant 3 jours (12€).</span><br>

        <span class="subtitle">Information complémentaire</span><br>
        <span class="text">Attention, veuillez bien vérifier que vous avez composté votre ticket
          correctement et du bon côté. L’horodatage doit être bien lisible
          sous peine d’amende de 50€ (qui peut être majoré si vous ne payer pas au plus vite).

          Vous pouvez trouver les plans des bus grâce au lien ci-contre: <a href="http://www.altracitta.org/wp-content/uploads/2009/10/nuove-linee-ataf.pdf"> <img class="busIcon" src="../../Images/Bus.png" alt="Plan des bus"></a>
        </span></span></p>
    <label for="post-1" class="read-more-trigger"></label>

  </div>

  <div class="boiteinfo1">
    <h1>Taxis</h1>
    <input type="checkbox" class="read-more-state" id="post-2" onclick="myFunction('post-2', 'box-2')" />

    <p class="read-more-wrap" id="box-2"><span class="read-more-target"> <span class="subtitle">Prix</span><br>
        <span class="text">
          La prise en charge est tout d’abord de 3,30€ en semaine, 5,30€ les dimanche et jours de fête ou 6,60€
          de 22h à 6h. Puis le reste varie en fonction de votre destination.
        </span><br>

        <span class="subtitle">Où en trouver</span><br>

        <span class="text">Pour appeler un taxi, vous pouvez en appeler un depuis une place principal tel que ou alors appeler
          un des numéros suivant :
          <br>+39 0554390<br>+39 0554798<br>+39 0554499<br>+39 0554242
        </span><br>

        <span class="subtitle">Information complémentaire</span><br>
        <span class="text">
          Même si les taxis en maraude sont interdit, vérifiez que le taxi est de couleur blanche.
          On vous conseille de demander la mise en marche du compteur.
        </span> </span></p>
    <label for="post-2" class="read-more-trigger"></label>
  </div>

  <div class="boiteinfo1">
    <h1>Velo</h1>
    <input type="checkbox" class="read-more-state" id="post-3" onclick="myFunction('post-3', 'box-3')" />

    <p class="read-more-wrap" id="box-3"><span class="read-more-target"><span class="subtitle">Prix</span><br>
        <span class="text">
          En moyenne, louer un velo a Florence coûte 3€ de l’heure et pour un week-end entier,
          cela coûte environ 30€
        </span><br>

        <span class="subtitle">Boutiques</span><br>

        <span class="text">Via S. Zanobi, 38, 50129 Firenze FI, Italia </span>
      </span></p>
    <label for="post-3" class="read-more-trigger"></label>
  </div>

  <script src="transport.js"></script>

  <?php include('../../HeadAndFoot/footerStg2.php'); ?>
</body>

</html>
