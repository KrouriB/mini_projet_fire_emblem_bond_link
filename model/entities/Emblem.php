<?php
        namespace Model\Entities;

        use App\Entity;

        final class Emblem extends Entity{

                private $id;
                private $perso;

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
                 * Get the value of perso
                 */ 
                public function getPerso()
                {
                        return $this->perso;
                }

                /**
                 * Set the value of perso
                 *
                 * @return  self
                 */ 
                public function setPerso($perso)
                {
                        $this->perso = $perso;

                        return $this;
                }
        }
