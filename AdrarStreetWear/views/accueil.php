<?php
    include("../models/connect.php");
    // var_dump($_SESSION);
    // die;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Accueil">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../style.css">
  <title>Acceuil</title>
</head>

<body>
  
  <?php
    require "./nav.php";
  ?>

  <ul class="links-container">
    <li class="link-item"><a href="#" class="link">Homme</a></li>
    <li class="link-item"><a href="#" class="link">Femme</a></li>
    <li class="link-item"><a href="#" class="link">Accessoire</a></li>
  </ul>

  <div class="fond-accueil">
    <video id="background-video" autoplay loop muted>
    <source src="../image/video-background.mp4" type="video/mp4">
    </video>
  </div>

  <p class="top-article">TOP ARTICLE</p>

  <div class="slider">

    <div class="Image">
      <img src="../image/TeeNike.webp" alt="">
    </div>

    <div class="Image">
      <img src="../image/TNF.webp" alt="">
    </div>

    <div class="Image">
      <img src="../image/Cargo.webp" alt="">
    </div>

    <div class="Image">
      <img src="../image/VesteCDG.webp" alt="">
    </div>

    <div class="Image">
      <img src="../image/Veste.webp" alt="">
    </div>

    <div class="Image">
      <img src="../image/Adidas.webp" alt="">
    </div>

    <div class="Image">
      <img src="../image/Nocta.webp" alt="">
    </div>

    <div class="Image">
      <img src="../image/Pantalon.webp" alt="">
    </div>

    <div class="Image">
      <img src="../image/Polo.webp" alt="">
    </div>

    <div class="Image">
      <img src="../image/Pull.webp" alt="">
    </div>

    <div class="fleche">
      <button class="btn btn-next">></button>
      <button class="btn btn-prev"><</button>
    </div>
    
  </div>

  <p class="top-cat">TOP CATEGORIE</p>

  <section class="cat">
    <div class="doudoune">
      <img class="cat-img img-portrait" src="../image/TNF.webp" alt="">
      <p class="cat-p">Doudounes</p>
    </div>

    <div class="sneaker">
      <img class="cat-img img-landscape" src="../image/Nocta.webp" alt="">
      <p class="cat-p">Sneakers</p>
    </div>

    <div class="pantalon">
      <img class="cat-img img-portrait" src="../image/Pantalon.webp" alt="">
      <p class="cat-p">Pantalon</p>
    </div>
  </section>

  <footer>
    <section class="footer-container">

      <div class="footer-haut">

        <ul class="livraison">
          <li>
            <img src="../image/livraison-de-colis.png" class="logo-livraison" alt="">
            <p>Satisfait ou remboursé <br> 14 jours pour changer d'avis</p>
          </li>
          <li>
            <img src="../image/livraison-rapide.png" class="logo-livraison" alt="">
            <p>Livraison en 48H <br> Domicile ou point relais</p>
          </li>
          <li>
            <img src="../image/fast-delivery.png" class="logo-livraison" alt="">
            <p>Livraison gratuite dès 99€</p>
          </li>
          <li>
            <img src="../image/paiement-securise.png" class="logo-livraison" alt="">
            <p>Paiement en ligne sécurisé</p>
          </li>
        </ul>
      </div>

      <div class="footer-content" aria-label="Categorie & marque">
        <div class="footer-gauche">
          <ul class="category">
            <p class="category-title">CATÉGORIES</p>
            <li><a href="#" class="footer-link">T-shirts</a></li>
            <li><a href="#" class="footer-link">Sweats</a></li>
            <li><a href="#" class="footer-link">Vestes</a></li>
            <li><a href="#" class="footer-link">Jeans</a></li>
            <li><a href="#" class="footer-link">Ensemble</a></li>
            <li><a href="#" class="footer-link">Baskets</a></li>
            <li><a href="#" class="footer-link">Casquettes</a></li>
            <li><a href="#" class="footer-link">Pulls</a></li>
            <li><a href="#" class="footer-link">Polos</a></li>
            <li><a href="#" class="footer-link">Accesoires</a></li>
          </ul>

          <ul class="category">
            <p class="category-title">TOP MARQUES</p>
            <li><a href="#" class="footer-link">Nike</a></li>
            <li><a href="#" class="footer-link">ASW</a></li>
            <li><a href="#" class="footer-link">Adidas</a></li>
            <li><a href="#" class="footer-link">NewEra</a></li>
            <li><a href="#" class="footer-link">Levi's</a></li>
            <li><a href="#" class="footer-link">Calvin Klein</a></li>
            <li><a href="#" class="footer-link">Jack & Jones</a></li>
            <li><a href="#" class="footer-link">The North Face</a></li>
            <li><a href="#" class="footer-link">Tommy Hilfiger</a></li>
            <li><a href="#" class="footer-link">Comme Des Graçon</a></li>
          </ul>
        </div>

        <div class="footer-droite">
          <img src="../image/jr_logo.webp" class="logo" alt="">
        </div>
      </div>
    </section>

    <div class="footer-credit">
      <div class="logo-payement">
        <img src="../image/visa.svg" class="logo-payement" alt="">
        <img src="../image/paypal.svg" class="logo-payement" alt="">
        <img src="../image/apple-pay.svg" class="logo-payement" alt="">
        <img src="../image/mastercard.svg" class="logo-payement" alt="">
      </div>

      <div class="credit">
        <p>© 2022 - AdrarStreetWear.com</p>
      </div>

      <div class="footer-haut-droit">
        <a href="https://twitter.com/Astrow_Boi" aria-label="Twitter"><img src="../image/twitter.svg" class="logo-reseaux" alt=""></a>
        <a href="#" aria-label="Snapchat"><img src="../image/snapchat.svg" class="logo-reseaux" alt=""></a>
        <a href="#" aria-label="Facebook"><img src="../image/facebook.svg" class="logo-reseaux" alt=""></a>
        <a href="https://www.instagram.com/jordy.rta/" aria-label="Instagram"><img src="../image/instagram.svg" class="logo-reseaux" alt=""></a>
      </div>

    </div>
  </footer>
  <script src="../carousel.js"></script>
</body>

</html>