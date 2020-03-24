<?php
    namespace model\Managers;
    
    use app\Manager;
    
    /**
     * Manager of Marque.
     * 
     * @method findAll() Get all records of the database table Marque.
     */
    class MarqueManager extends Manager{

        // ---- FIELDS ----

        protected $className = "Marque";
        protected $tableName = "marque";

        // ---- CONSTRUCTORS ----

        public function __construct()
        {
            parent::connect();
        }
    }