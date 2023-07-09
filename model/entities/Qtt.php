<?php
        namespace Model\Entities;

        use App\Entity;

        final class Qtt extends Entity{

                private $heros;
                private $anneau;
                private $qttNb;

                public function __construct($data){         
                        $this->hydrate($data);        
                }

                /**
                 * Get the value of heros
                 */ 
                public function getHeros()
                {
                        return $this->heros;
                }

                /**
                 * Set the value of heros
                 *
                 * @return  self
                 */ 
                public function setHeros($heros)
                {
                        $this->heros = $heros;

                        return $this;
                }

                /**
                 * Get the value of anneau
                 */ 
                public function getAnneau()
                {
                        return $this->anneau;
                }

                /**
                 * Set the value of anneau
                 *
                 * @return  self
                 */ 
                public function setAnneau($anneau)
                {
                        $this->anneau = $anneau;

                        return $this;
                }

                /**
                 * Get the value of qttNb
                 */ 
                public function getQttNb()
                {
                        return $this->qttNb;
                }

                /**
                 * Set the value of qttNb
                 *
                 * @return  self
                 */ 
                public function setQttNb($qttNb)
                {
                        $this->qttNb = $qttNb;

                        return $this;
                }
        }
