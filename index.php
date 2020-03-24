<?php

    use controller\HomeController;

    define("TAB_TITLE", "Geges - ");

    define("DS", DIRECTORY_SEPARATOR);
    define("BASE_DIR", dirname(__FILE__) . DS);
    define("VIEW_DIR", BASE_DIR . "view" . DS);
    define("VIEW_SHEET_DIR", VIEW_DIR . "Content" . DS . "Sheets" . DS);

	spl_autoload_register(function($typeName){
		$file = $typeName . '.php';
		if (file_exists($file))
            include $file;
	});
	
    $ctrl = new HomeController();

    // ---- Choix de la page

    if (isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "index";

    if (isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = null;
        
    // ---- Affichage de la page
    
    $render = $ctrl->$action($id);

    // -- AJAX, pour la combobox des modèles par marque
    if ($action == "fillModele")
    {
        echo $render;
    }
    else
    {
        require("view\\" . $render['view']);
    }