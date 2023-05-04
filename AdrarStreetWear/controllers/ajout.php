<?php
include("../models/connect.php");  // Inclure le fichier de connexion à la base de données

if (!empty($_POST['form_insert'])) {
    $tailles_autorisees = array("xs", "s", "m", "l", "xl");
    $tailles = array();
    foreach($tailles_autorisees as $valeur) {
        if(!empty($_POST['marque_taille_article_' . $valeur])) {
            $tailles[] = $valeur; 
        }
    }
    
    $sql = 'INSERT INTO article(nom_article, prix_article, marque_titre_article, marque_image_article, marque_taille_article)
            VALUES(:nom_article, :prix_article, :marque_titre_article, :marque_image_article, :marque_taille_article);';
    $req = $db->prepare($sql);
    $req->bindParam(":nom_article", $_POST['nom_article']);
    $req->bindParam(":prix_article", $_POST['prix_article']);
    $req->bindParam(":marque_titre_article", $_POST['marque_titre_article']);
    $img = "test.jpg";
    $req->bindParam(":marque_image_article", $img);
    $tailles = implode(';', $tailles); // "%xs%"
    $req->bindParam(":marque_taille_article", $tailles);
    $req->execute();
}

?>