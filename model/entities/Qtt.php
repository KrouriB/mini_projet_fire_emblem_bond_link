<?php
        namespace Model\Entities;

        use App\Entity;

        final class Qtt extends Entity{

                private $heros;
                private $anneau;
                private $qtt;

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
                 * Get the value of qtt
                 */ 
                public function getQtt()
                {
                        return $this->qtt;
                }

                /**
                 * Set the value of qtt
                 *
                 * @return  self
                 */ 
                public function setQtt($qtt)
                {
                        $this->qtt = $qtt;

                        return $this;
                }
        }
