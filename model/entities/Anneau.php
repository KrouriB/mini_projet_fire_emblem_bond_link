<?php
        namespace Model\Entities;

        use App\Entity;

        final class Anneau extends Entity{

                private $id;
                private $lettre;

                public function __construct($data){         
                        $this->hydrate($data);        
                }

                /**
                 * Get the value of id
                 */ 
                public function getId()
                {
                        return $this->id;
                }

                /**
                 * Set the value of id
                 *
                 * @return  self
                 */ 
                public function setId($id)
                {
                        $this->id = $id;

                        return $this;
                }

                /**
                 * Get the value of lettre
                 */ 
                public function getLettre()
                {
                        return $this->lettre;
                }

                /**
                 * Set the value of lettre
                 *
                 * @return  self
                 */ 
                public function setLettre($lettre)
                {
                        $this->lettre = $lettre;

                        return $this;
                }
        }
