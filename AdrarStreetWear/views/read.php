<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../formulaire.css">
    <title>read</title>
</head>

<body>
    <?php
    require "../views/nav.php";
    ?>
<?php
$sql = "SELECT * FROM article";
$result = $db->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "Article ID: " . $row["id_article"] . "<br>";
    echo "Nom de l'article: " . $row["nom_article"] . "<br>";
    echo "Prix de l'article: " . $row["prix_article"] . "<br>";
    echo "Titre de la marque: " . $row["marque_titre_article"] . "<br>";
    echo "Image de la marque: " . $row["marque_image_article"] . "<br>";
    echo "Tailles disponibles: " . $row["marque_taille_article"] . "<br><br>";
}
?>
    
</body>
<?php
require "../views/footer.php";
?>

</html>