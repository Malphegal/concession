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
    // ---- Manager $_GET values

    if (isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "index";

    if (isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = null;
        
    // ---- Create the webpage to display
    
    // TODO: a refaire proprement, avec moins de complexité

    $actionExists = method_exists(get_class($ctrl), $action);
    if ($actionExists){
        $render = $ctrl->$action($id);
    }
    else{
        require(VIEW_DIR . "404.php");
        return;
    }

    // If $action == 'ajax_...', it's a AJAX request
    if (substr($action, 0, 4) == "ajax")
    {
        echo $render;
    }
    // Otherwise it's a full webpage request
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