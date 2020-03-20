<?php
    namespace controller;
    
    use model\Managers\MarqueManager;

    define("REDIRECT_DIR", VIEW_DIR . "Redirects\\");
    define("CONTENT_DIR", VIEW_DIR . "Content\\");

    /**
     * Controller to add static part of web content, such as header, footer, ...
     * 
     * @method header() Invoke the header page.
     * @method nav() Invoke the nav page.
     * @method content() Invoke the content page.
     * @method right() Invoke the right page.
     * @method footer() Invoke the footer page.
     */
    abstract class RedirectController{

        // ---- METHODS ----
        
        /**
         * Invoke the header page.
         */
        public static function header()
        {
            $man = new MarqueManager();
            $marqueOptions = $man->findAll();
            require(REDIRECT_DIR . "header.php");
        }
        
        /**
         * Invoke the nav page.
         */
        public static function nav()
        {
            require(REDIRECT_DIR . "nav.php");
        }

        /**
         * Invoke the content page.
         */
        public static function content($path = "indexContent.php", $args = null)
        {
            require(CONTENT_DIR . $path);
        }

        /**
         * Invoke the right page.
         */
        public static function right()
        {
        }

        /**
         * Invoke the footer page.
         */
        public static function footer()
        {
        }
    }