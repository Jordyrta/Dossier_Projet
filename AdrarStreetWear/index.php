<?php
    $DB_NAME = "jradrar";
    $DB_USER = "root";
    $DB_PASS = "";

    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=' . $DB_NAME, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
