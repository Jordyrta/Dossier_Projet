<?php
    // On inclut notre connecteur à la base de données
    include("../models/connect.php");
     // On inclut la vue inscription à notre contrôleur
     include("../views/register.php");
   
    // On entre dans la boucle seulement lors de l’envoi du formulaire
    if(!empty($_POST["form_inscription"])) {
        // On recherche si l'adresse email existe déjà en BDD
        $select = $db->prepare("SELECT email_utilisateur  FROM utilisateur WHERE email_utilisateur=:email_utilisateur;");
        $select->bindParam(":email_utilisateur", $_POST["form_email"]);
        $select->execute();
        if(empty($select->fetch(PDO::FETCH_COLUMN))) {

            if (isset($_FILES['file'])) { // on va vérifier si la variable existe
                $extensions_ok = array('png', 'jpg', 'jpeg', 'webp'); // On définie les extensions qu'on veut
                $countfiles = count($_FILES['file']['name']);
            
                for ($i = 0; $i < $countfiles; $i++) {
                    // Cette ligne vient vérifier si la taille du fichier n'excède pas 3Mo // 1Mo = 1048576
                    if (filesize($_FILES['file']['tmp_name'][$i]) > 3145728) {
                        echo '<span style="color: red;">La taille du fichier dépasse les 3Mo</span>';
                    } elseif ((!in_array(substr(strrchr($_FILES['file']['name'][$i], '.'), 1), $extensions_ok))) {
                        echo '<span style="color: red;">Extension non autorisée</span>';
                    } else {
                        // Cette ligne vient récupérer le nom originel du fichier
                        $file_name = basename($_FILES['file']['name'][$i]);
                        // replace les caractères accentués
                        $accents = '/&([A-Za-z]{1,2})(grave|acute|circ|cedil|uml|lig);/';
                        $string_encoded = htmlentities($file_name, ENT_NOQUOTES, 'UTF-8');
                        $file_name = preg_replace($accents, '$1', $string_encoded);
                        move_uploaded_file($_FILES['file']['tmp_name'][$i], "../image/" . $file_name);
                    }
                }
            }
            // Si ce n'est pas le cas, on vient l'insérer
            $insert = $db->prepare("INSERT INTO utilisateur(nom_utilisateur, prenom_utilisateur, email_utilisateur, mot_de_passe_utilisateur, id_role)
                                    VALUES(:nom_utilisateur, :prenom_utilisateur, :email_utilisateur, :mot_de_passe_utilisateur, 2);"); // 2 = utilisateur / 1 = admin
            $insert->bindParam(":nom_utilisateur", $_POST['form_nom']);
            $insert->bindParam(":prenom_utilisateur", $_POST['form_prenom']);
            $insert->bindParam(":email_utilisateur", $_POST['form_email']);
            // Nous hachons notre mdp avec l'algo BCRYPT et un coût algorithmique (par défaut à 10)
            $user_password = password_hash($_POST['form_password'], PASSWORD_BCRYPT, array("cost" => 12));
            $insert->bindParam(":mot_de_passe_utilisateur", $user_password);
            // $insert->bindParam(":image_utilisateur", $file_name);
            
            // $insert->bindParam(":user_password", $_POST['form_password']);
            if($insert->execute()) {
                // Si aucune erreur ne se produit, on propose de se connecter
                die('<p style=”color: green;”>Inscription réussie.</p><a href="../views/form_connexion.php">Se connecter.</a>');
            }
            die('<p style=”color: red;”>Inscription échouée.</p><a href="../views/register.php">Réessayer.</a>');
        }
    }
?>
