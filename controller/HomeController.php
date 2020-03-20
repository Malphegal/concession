<?php
    namespace controller;

    use model\Managers\VehiculeManager;
    use model\Managers\MarqueManager;

    define("DEFAULT_TEMPLATE", "Templates". DS . "defaultTemplate.php");

    define("CSS_LINK", "<link rel=\"stylesheet\" type=\"text/css\" href=\"css" . DS);
    define("CSS_LINK_SHEET", "<link rel=\"stylesheet\" type=\"text/css\" href=\"css" . DS . "sheets" . DS);

    /**
     * Default controller.
     *
     * @method fillModele() AJAX : fill the modele cbo of the nav.
     * 
     * @method index() Invoke the index page.
     * 
     * @method vehiculeListe() Invoke the vehiculeListe page.
     * @method vehiculeID() Invoke the vehiculeID page.
     * 
     * @method marqueListe() Invoke the marqueListe page.
     * @method marqueID() Invoke the marqueID page.
     * 
     * @method vehiculesPerModele() Invoke the vehiculesPerModele page.
     */
    class HomeController{
        
        // ---- METHODS ----

        // -- AJAX
        
        /**
         * AJAX : fill the modele cbo of the nav.
         */
        public function fillModele()
        {
            $marque = $_GET["marque_cbo"];

            $man = new VehiculeManager();
            $vehicules = $man->findAll();

            $res = [];
            foreach ($vehicules as $v)
                if (!in_array($v->getModele(), $res) && $v->getMarque() == ucfirst($marque))
                    $res[] = $v->getModele();

            return implode(",", $res);
        }
        
        // -- FULL VIEW

        /**
         * Invoke the index page.
         */
        public function index()
        {
            return [
                "view" => DEFAULT_TEMPLATE,
                "data" => array("title" => "Concession Geges",
                    "content" => "indexContent.php",
                    "args" => null,
                    "css" => "")
            ];
        }
        
        /**
         * Invoke the vehiculeListe page.
         */
        public function vehiculeListe()
        {
            $man = new VehiculeManager();
            $vehicules = $man->findAll();

            return [
                "view" => DEFAULT_TEMPLATE,
                "data" => array("title" => "Nos véhicules",
                    "content" => "Vehicules". DS . "vehiculeListeContent.php",
                    "args" => $vehicules,
                    "css" => "")
            ];
        }
        
        /**
         * Invoke the vehiculeID page.
         *
         * @param int $id Index of the vehicule to show.
         */
        public function vehiculeID($id)
        {
            $man = new VehiculeManager();
            $vehicule = $man->findOneById($id);

            return [
                "view" => DEFAULT_TEMPLATE,
                "data" => array("title" => $vehicule,
                    "content" => "Vehicules". DS . "vehiculeIDContent.php",
                    "args" => $vehicule,
                    "css" => CSS_LINK_SHEET . "vehiculeSheet.css\" />")
            ];
        }

        /**
         * Invoke the marqueListe page.
         */
        public function marqueListe()
        {
            $man = new MarqueManager();
            $marques = $man->findAll();

            return [
                "view" => DEFAULT_TEMPLATE,
                "data" => array("title" => "Nos marques",
                    "content" => "Marques" . DS . "marqueListe.php",
                    "args" => $marques,
                    "css" => "")
            ];
        }

        /**
         * Invoke the marqueID page.
         *
         * @param int $id Index of the marque to show.
         */
        public function marqueID($id)
        {
            $man = new MarqueManager();
            $marque = $man->findOneById($id);

            return [
                "view" => DEFAULT_TEMPLATE,
                "data" => array("title" => $marque->getNom(),
                    "content" => "Marques" . DS . "marqueIDContent.php",
                    "args" => $marque,
                    "css" => "")
            ];
        }
        
        /**
         * Invoke the vehiculesPerModele page.
         *
         * @param string $modeleName The name of the modele.
         */
        public function vehiculesPerModele($modeleName)
        {
            $man = new VehiculeManager();
            $vehicules = $man->findAll();

            $res = [];
            foreach ($vehicules as $v)
                if ($v->getModele() == $modeleName)
                    $res[] = $v;

            return [
                "view" => DEFAULT_TEMPLATE,
                "data" => array("title" => $modeleName,
                    "content" => "Vehicules" . DS . "vehiculesPerModele.php",
                    "args" => $res,
                    "css" => CSS_LINK_SHEET . "vehiculeSheet.css\" />")
            ];
        }
    }