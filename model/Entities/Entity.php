<?php
	namespace model\Entities;
    
    /**
     * Abstract class of all classes that represent a table in the database.
     * 
     * @method hydrate() Set all fields of the object based on a SQL response.
     * @method getClass() Get the class name of the current object.
     */
    abstract class Entity{

        // ---- METHODS ----
        
        /**
         * Set all fields of the object based on a SQL response.
         *
         * @param array $data Raw SQL response row.
         */
        protected function hydrate($data)
        {
            // Pour chaque colonne de $data, on hydrate l'objet courant
            foreach($data as $field => $value)
            {
                $fieldArray = explode("_", $field);

                if (isset($fieldArray[1])){
                    // Si le deuxieme mot est id, on traite autrement
                    if ($fieldArray[1] == "id")
                    {
                        $manName = ucfirst($fieldArray[0]) . "Manager";
                        $classWithNamespace = "\model\Managers\\" . $manName;
                        $man = new $classWithNamespace();
                        $value = $man->findOneById($value);
                    }
                    // Si c'est un champ comptenant plusieurs mots, autre qu'id
                    else if ($fieldArray[0] != "id")
                        for ($i = 1; $i < count($fieldArray); $i++)
                            $fieldArray[0] .= ucfirst($fieldArray[$i]);
                }

                $method = "set" . ucfirst($fieldArray[0]);
                if(method_exists($this, $method))
                    $this->$method($value);
            }
        }
        
        /**
         * Get the class name of the current object.
         *
         * @return string The class name of the object.
         */
        public function getClass()
        {
            return get_class($this);
        }
    }