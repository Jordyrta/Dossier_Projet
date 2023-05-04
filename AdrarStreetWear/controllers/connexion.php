<?php 
include("../models/connect.php");  // Inclure le fichier de connexion à la base de données

if (!empty($_POST["form_connexion"])) {  // Vérifier si le formulaire de connexion a été soumis

    // Préparer et exécuter une requête SQL pour récupérer l'utilisateur avec l'adresse e-mail soumise dans le formulaire
    $select = $db->prepare("SELECT * FROM utilisateur WHERE email_utilisateur=:email_utilisateur;");
    $select->bindParam(":email_utilisateur", $_POST["form_email"]);
    $select->execute();

    // Si un seul enregistrement d'utilisateur est trouvé dans la base de données
    if ($select->rowCount() === 1) {
        $user = $select->fetch(PDO::FETCH_ASSOC);  // Récupérer les données de l'utilisateur

        // Vérifier que le mot de passe soumis correspond au mot de passe haché stocké dans la base de données
        if (password_verify($_POST["form_password"], $user['mot_de_passe_utilisateur'])) {
            $_SESSION['user'] = $user;  // Stocker les données de l'utilisateur dans une variable de session
            header("Location: ../views/accueil.php");  // Rediriger vers la page d'accueil
        }
        else {
            $message = "Adresse e-mail ou mot de passe incorrect";  // Afficher un message d'erreur si le mot de passe est incorrect
        }
    }
    else {
        unset($_SESSION['user']);  // Supprimer toutes les données de session de l'utilisateur actuel
        $message = "Adresse e-mail ou mot de passe incorrect";  // Afficher un message d'erreur si aucun utilisateur n'a été trouvé
    }

    require("../views/form_connexion.php");  // Inclure le fichier du formulaire de connexion
}
?>