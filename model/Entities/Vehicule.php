<?php
	namespace model\Entities;
    
    /**
     * Represent one row in the Vehicule database table.
     * 
     * @method getId() Get the value of id.
     * @method setId() Set the value of id.
     * 
     * @method getImmat() Get the value of immat.
     * @method setImmat() Set the value of immat, formatted like this : XX-000-XX.
     * 
     * @method getModele() Get the value of modele.
     * @method setModele() Set the value of modele.
     * 
     * @method getCouleurs() Get the value of couleurs.
     * @method setCouleurs() Set the value of couleurs.
     * 
     * @method getMarque() Get the value of marque.
     * @method setMarque() Set the value of marque.
     * 
     * @method getMotorisation() Get the value of motorisation.
     * @method setMotorisation() Set the value of motorisation.
     * 
     * @method getNbPortes() Get the value of nbPortes.
     * @method setNbPortes() Set the value of nbPortes.
     * 
     * @method getImg() Get the image of the vehicule.
     * 
     * @method __toString() ToString override : gets the marque and modele value.
     */
    final class Vehicule extends Entity{

        // ---- FIELDS ----

        private $id;
        private $immat;
        private $modele;
        private $couleurs;
        private $marque;
        private $nbPortes;

        // ---- CONSTRUCTORS ----

        public function __construct($data)
        {         
            $this->hydrate($data);
        }

        // ---- METHODS ----

        /**
         * Get the value of id.
         */ 
        public function getId()
        {
            return $this->id;
        }
        
        /**
         * Set the value of id.
         *
         * @param int $id The new id value.
         */
        protected function setId($id)
        {
            $this->id = $id;
        }

        /**
         * Get the value of immat.
         */ 
        public function getImmat()
        {
            return $this->immat;
        }

        /**
         * Set the value of immat. It will be formatted like this : XX-000-XX.
         *
         * @param string $immat The new immat value.
         */ 
        public function setImmat($immat)
        {
            $immat = substr_replace($immat,'-',2,0);
            $immat = substr_replace($immat,'-',6,0);
            $this->immat = $immat;
        }

        /**
         * Get the value of modele.
         */ 
        public function getModele()
        {
            return $this->modele;
        }

        /**
         * Set the value of modele.
         *
         * @param string $modele The new modele value.
         */ 
        public function setModele($modele)
        {
            $this->modele = $modele;
        }

        /**
         * Get the value of couleurs.
         *
         * @param int|null $index=null If 'null', all colors will be returned, otherwise returns the color at index '$index' in the color array.
         */ 
        public function getCouleurs($index = null)
        {
            if ($index !== null)
                return $this->couleurs[$index];
            else
                return $this->couleurs;
        }

        /**
         * Set the value of couleurs.
         *
         * @param string $couleurs The new couleurs value, as a JSON string.
         */ 
        public function setCouleurs($couleurs)
        {
            $this->couleurs = json_decode($couleurs);
        }

        /**
         * Get the value of marque.
         */ 
        public function getMarque()
        {
            return $this->marque;
        }
        
        /**
         * Set the value of marque.
         * 
         * @param string $marque The new marque value.
         */ 
        public function setMarque($marque)
        {
            $this->marque = $marque;
        }

        /**
         * Get the value of motorisation.
         */ 
        public function getMotorisation()
        {
            return $this->motorisation;
        }

        /**
         * Set the value of motorisation.
         * 
         * @param string $motorisation The new motorisation value.
         */ 
        public function setMotorisation($motorisation)
        {
            $this->motorisation = $motorisation;
        }

        /**
         * Get the value of nbPortes.
         */ 
        public function getNbPortes()
        {
            return $this->nbPortes;
        }

        /**
         * Set the value of nbPortes.
         * 
         * @param string $nbPortes The new nbPortes value.
         */ 
        public function setNbPortes($nbPortes)
        {
            $this->nbPortes = $nbPortes;
        }

         /**
         * Get the image of the vehicule
         */ 
        public function getImg()
        {
            return "img/Vehicules/" . $this->marque . "/" . $this->modele . ".png";
        }

        /**
         * ToString override : gets the marque and modele value.
         *
         * @return string Object representation as a string.
         */
        public function __toString()
        {
            return $this->marque . " - " . $this->modele;
        }
    }
