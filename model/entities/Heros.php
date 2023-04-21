<?php
        namespace Model\Entities;

        use App\Entity;

        final class Heros extends Entity{

                private $id;
                private $emplacement;
                private $nom;
                private $emblem;

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
                 * Get the value of emplacement
                 */ 
                public function getEmplacement()
                {
                        return $this->emplacement;
                }

                /**
                 * Set the value of emplacement
                 *
                 * @return  self
                 */ 
                public function setEmplacement($emplacement)
                {
                        $this->emplacement = $emplacement;

                        return $this;
                }

                /**
                 * Get the value of nom
                 */ 
                public function getNom()
                {
                        return $this->nom;
                }

                /**
                 * Set the value of nom
                 *
                 * @return  self
                 */ 
                public function setNom($nom)
                {
                        $this->nom = $nom;

                        return $this;
                }

                /**
                 * Get the value of emblem
                 */ 
                public function getEmblem()
                {
                        return $this->emblem;
                }

                /**
                 * Set the value of emblem
                 *
                 * @return  self
                 */ 
                public function setEmblem($emblem)
                {
                        $this->emblem = $emblem;

                        return $this;
                }
        }
