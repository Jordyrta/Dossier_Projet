<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Admin</title>
</head>

<body>
    <?php
    require "./nav.php";
    ?>

    <fieldset class="article">
        <legend>Ajout article</legend>
        <form method="post" action="../controllers/ajout.php">
            <input type="hidden" name="form_insert" value="1">
            <label>Nom de l'article':
                <input type="text" name="nom_article">
            </label>
            <br />
            <label>Prix de l'article:
                <input type="text" name="prix_article">
            </label>
            <br />
            <label>Titre de la marque: <!-- Nike, TNF -->
                <input type="text" name="marque_titre_article">
            </label>
            <br />
            <label>Image de l'article: <!-- Image de la marque ( Nike, TNF) -->
                <input type="file" name="marque_image_article[]">
            </label>
            <br />
            <label>Taille de l'article: <!-- taille : XS, S, M, L, XL -->
                <label><input type="checkbox" name="marque_taille_article_xs">&nbsp;XS</label>
                <label><input type="checkbox" name="marque_taille_article_s">&nbsp;S</label>
                <label><input type="checkbox" name="marque_taille_article_m">&nbsp;M</label>
                <label><input type="checkbox" name="marque_taille_article_l">&nbsp;L</label>
                <label><input type="checkbox" name="marque_taille_article_xl">&nbsp;XL</label>
            </label>
            <br />
            <input type="submit" value="Enregistrer">
        </form>
    </fieldset>

    <a href="read.php">Lire article</a>


    <?php
    require "./footer.php";
    ?>
</body>

</html>