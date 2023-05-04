<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../formulaire.css">
    <link rel="stylesheet" href="../style.css">
    <title>Connexion</title>
</head>

<body>
    <?php
        require "./nav.php";
    ?>
    
    <div class="grid">
        <h1>Bienvenue</h1>

        <h2>Connexion</h2>

        <form action="../controllers/connexion.php" method="post" class="connexion">
            <input type="hidden" name="form_connexion" value="1">
            <input placeholder="E-mail" class="text" type="email" name="form_email" required>
            <input placeholder="Mot de passe" class="text" type="password" name="form_password" required>
            <input class="bouton" type="submit" value="Se connecter" id="btnconnect">
        </form>
        <?php
        if (isset($message)) {
            echo $message;
        } ?>

        <p class="register">Pas encore inscrit ? <a href="../views/register.php">Inscrivez-vous</a></p>
    </div>
    

    <?php
    require "./footer.php";
    ?>
</body>

</html>