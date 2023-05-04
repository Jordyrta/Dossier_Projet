<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../formulaire.css">
    <title>Inscription</title>
</head>

<body>
    <?php
    require "../views/nav.php";
    ?>

    <div class="grid">
        <h1>Inscription</h1>
        <form action="../controllers/inscription.php" method="post" enctype="multipart/form-data" class="inscription">
            <input type="hidden" name="form_inscription" value="1">
            <input type="text" name="form_nom" placeholder="Nom" class="text" required>
            <input type="text" name="form_prenom" placeholder="Prenom" class="text" required>
            <input type="text" name="form_email" placeholder="Mail" class="text" required>
            <input type="password" name="form_password" placeholder="Mot de passe" class="text" required>
            <!-- <input type="file" name="file[]" class="text"> -->
            <input type="submit" value="S'inscrire" class="bouton2">
        </form>
    </div>
    
</body>
<?php
require "../views/footer.php";
?>

</html>