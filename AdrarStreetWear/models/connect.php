<?php
// Cette fonction sert à démarrer une session PHP 
session_start();

try {
    $db = new PDO('mysql:host=localhost;dbname=jradrar', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    $db = NULL;
    echo ("Erreur: " . $e->getMessage());
}

?>
