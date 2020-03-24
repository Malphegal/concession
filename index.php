<?php

    use controller\HomeController;

    // -- Defines --

    define("TAB_TITLE", "Geges - ");

    define("DS", DIRECTORY_SEPARATOR);
    define("BASE_DIR", dirname(__FILE__) . DS);
    define("VIEW_DIR", BASE_DIR . "view" . DS);
    define("VIEW_SHEET_DIR", VIEW_DIR . "Content" . DS . "Sheets" . DS);

    // -- Autoloader --

    require("app\autoloader.php");
    
    // -- Default controller
    
    $ctrl = new HomeController();

    // ---- Choix de la page, gestion du $_GET

    if (isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "index";

    if (isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = null;
        
    // ---- Création des données de la page à afficher
    
    $render = $ctrl->$action($id);

    // Si c'est 'fillModele', c'est de l'AJAX, pour la combobox des modèles par marque
    if ($action == "fillModele")
    {
        echo $render;
    }
    // Sinon c'est une page qu'on affiche
    else
    {
        ob_start();
        require(VIEW_DIR . $render['view']);
        $page = ob_get_contents();
        ob_end_clean();
        if (file_exists(VIEW_DIR . $render['view'])){
            $requestedPage = $_SERVER['REQUEST_URI'];
            $requestedPage = substr($requestedPage, 12);
            $interMark = strpos($requestedPage, "?");
            if ($interMark !== false)
                $requestedPage = substr($requestedPage, 0, $interMark);
            // If the requested page exists, display it
            if (file_exists($requestedPage) || $requestedPage == "")
                echo $page;
            // Otherwise display the default 404.php page
            else
                require(VIEW_DIR . "404.php");
        }
    }