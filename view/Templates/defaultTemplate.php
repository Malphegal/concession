<?php
    $data = $render["data"];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$data["title"]?></title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <?=$data["css"]?> <!-- Le css additionnel -->
        <link rel="stylesheet" type="text/css" href="css/header.css" />
        <link rel="stylesheet" type="text/css" href="css/nav.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
    </head>
    <body>
        <?php
            controller\RedirectController::header();
        ?>
        <main>
            <div id="wrapper">
                <div id="left">
                    <?php
                        controller\RedirectController::nav();
                    ?>
                </div>
                <div id="content">
                    <?php
                        if ($data["content"])
                            controller\RedirectController::content($data["content"], $data["args"]);
                    ?>
                </div>
                <div id="right">
                    <?php
                        controller\RedirectController::right();
                    ?>
                </div>
            </div>
        </main>
        <?php
            controller\RedirectController::footer();
        ?>
        <script src="js/nav.js"></script>
    </body>
</html>