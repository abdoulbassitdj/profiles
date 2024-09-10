<?php require_once("/wamp64/www/profiles/components/menu_footer/menu_footer.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Profile Etudiants</title>
    <link rel="stylesheet" href="style.css">
    <!-- -->
</head>
<body>

    <header>
        <?php menu(); ?>
    </header>

    <main>
        <div class="hero">

            <div class="hero_text">
                <h1>Le meilleur des profiles de nos etudiants</h1>
                <p>Connectez vous pour voir votre profile ou gerer vos etudiants<p>
                <button class="btn">
                    <a href="http:#">Se connecter</a>
                </button>
            </div>

            <div class="hero_pic"></div>

        </div>
    </main>

    <footer>
        <?php footer(); ?>
    </footer>

    <script src="/profiles/components/menu/menu.js"></script>
</body>
</html>