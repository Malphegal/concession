<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= TAB_TITLE ?>404</title>
        <link rel="stylesheet" type="text/css" href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1]; ?>/css/404.css" />
    </head>
    <body>
        <main>
            <div>
                <h2>404</h2>
                <p>OOPS ! Something goes wrong...</p>
                <hr />
                <p>Please, check the URL above.</p>
                <a href="index.php"><span>Accueil</span></a>
            </div>
        </main>
    </body>
</html>