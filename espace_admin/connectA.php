<?php require_once("/wamp64/www/profiles/components/menu_footer/menu_footer.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connetion des Etudiants</title>
    <link rel="stylesheet" href="connectA.css">
    <!-- -->
</head>
<body>

    <header>
        <?php menu(); ?>
    </header>

    <main>

        <form action="login_admin.php" method="post" class="connect">

            <h2>Connectez vous pour avoir acces a vos informations</h2>


            <input type="text" name="login" placeholder="Login">

            <input type="password" name="pass" placeholder="Mot de passe">

            <div class="link_forgot">
                <a href="forgot.php">Forgot your password ?</a>
            </div>

            <div class="group_submit">
                <input type="submit" value="Login">
                <button><a href="register.php">S'inscrire</a></button>
            </div>

        </form>

    </main>

    <footer>
        <?php footer(); ?>
    </footer>

    <script src="/profiles/components/menu/menu.js"></script>
</body>
</html>