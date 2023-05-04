<?php
$DB_NAME = "jradrar";
$DB_USER = "root";
$DB_PASS = "";
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=' . $DB_NAME, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// Préparation de la requête SQL nous stockons dans une variable $req la requête à exécuter
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['message'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $insert = " INSERT INTO contact(nom, prenom, email, message) VALUES ('$nom','$prenom','$email','$message');";
  $req = $bdd->prepare($insert);
  // Exécution de la requête SQL
  $req->execute();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../contact.css">
  <link rel="stylesheet" href="../style.css">
  <title>Contact</title>
</head>

<body>

  <?php
  require "./nav.php";
  ?>

  <section class="section-formulaire">
    <div class="contact">
      <h2 class="titre-contact">Contactez-nous</h2>

      <div class="telephone">
        <img class="svg" src="../image/telephone.svg" alt="">
        <p class="num">06 07 08 09 10</p>
      </div>

      <div class="email">
        <img class="svg" src="../image/email.svg" alt="">
        <p class="mail">email@Adrar.com</p>
      </div>
    </div>

    <form class="form" method="POST">
      <p class="text">Nom</p>
      <input type="text" name="nom" class="textform">
      <br>
      <p class="text">Prénom</p>
      <input type="text" name="prenom" class="textform">
      <br>
      <p class="text">Adresse e-mail<span class="star"></span></p>
      <input type="text" name="email" class="textform" required>
      <br>
      <p class="text">Message<span class="star"></span></p>
      <textarea type="text" name="message" class="message" required></textarea>
      <br>
      <input type="submit" value="Envoyer" class="btn_envoyer">

    </form>

    <img src="../image/teeshirt.gif" alt="">
  </section>

  <?php
  require "./footer.php";
  ?>
</body>

</html>