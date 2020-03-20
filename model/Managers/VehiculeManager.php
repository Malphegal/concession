<?php
	namespace model\Managers;
    
    /**
     * Manager of Vehicule.
     * 
     * @method findAll() Get all records of the database table Vehicule.
     */
    class VehiculeManager extends Manager{

        // ---- FIELDS ----

        protected $className = "Vehicule";
        protected $tableName = "vehicule";

        // ---- CONSTRUCTORS ----

        public function __construct()
        {
            parent::connect();
        }
    }