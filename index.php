<?php

    use controller\HomeController;

    define("DS", DIRECTORY_SEPARATOR);
    define("BASE_DIR", dirname(__FILE__) . DS);
    define("VIEW_DIR", BASE_DIR . "view" . DS);

	spl_autoload_register(function($className){
		$file = $className . '.php';
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