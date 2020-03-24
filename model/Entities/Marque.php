<?php
	namespace model\Entities;

    use app\Entity;

    define("IMG_MARQUES", "public" . DS . "img" . DS ."Marques" . DS);

    /**
     * Represent one row in the Marque database table.
     * 
     * @method getId() Get the value of id.
     * @method setId() Set the value of id.
     * 
     * @method getNom() Get the value of nom.
     * @method setNom() Set the value of nom.
     * 
     * @method getOrigine() Get the value of origine.
     * @method setOrigine() Set the value of origine.
     * 
     * @method getDesc() Get the value of desc.
     * @method setDesc() Set the value of desc.
     * 
     * @method getimage() Get the image of the marque.
     * @method setimage() Set the image of the marque.
     * 
     * @method __toString() ToString override : gets the name.
     */
    final class Marque extends Entity{

        // ---- FIELDS ----

        private $id;
        private $nom;
        private $origine;
        private $desc;
        private $image;

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
         * Get the value of nom.
         */ 
        public function getNom()
        {
            return $this->nom;
        }

        /**
         * Set the value of nom.
         *
         * @param string $nom The new nom value.
         */ 
        public function setNom($nom)
        {
            $this->nom = $nom;
        }
        
        /**
         * Get the value of origine.
         */ 
        public function getOrigine()
        {
            return $this->origine;
        }

        /**
         * Set the value of origine.
         *
         * @param string $origine The new origine value.
         */ 
        public function setOrigine($origine)
        {
            $this->origine = $origine;
        }
        
        /**
         * Get the value of desc.
         */ 
        public function getDesc()
        {
            return $this->desc;
        }

        /**
         * Set the value of desc.
         *
         * @param string $desc The new desc value.
         */ 
        public function setDesc($desc)
        {
            $this->desc = $desc;
        }

        /**
         * Get the image of the marque.
         */ 
        public function getImage()
        {
            return IMG_MARQUES . $this->image;
        }

        /**
         * Set the image of the marque.
         * 
         * @param string $image The new image value.
         */ 
        public function setImage($image)
        {
            $this->image = $image;
        }
        
        /**
         * ToString override : gets the name of the marque.
         *
         * @return string Object representation as a string.
         */
        public function __toString()
        {
            return $this->nom;
        }
    }
