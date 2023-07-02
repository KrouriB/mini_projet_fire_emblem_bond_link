<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;

    class EmblemManager extends Manager{

        protected $className = "Model\Entities\Emblem";
        protected $tableName = "emblem";


        public function __construct(){
            parent::connect();
        }

        public function nameEmblem($id){
            $sql="
            SELECT e.perso
            FROM emblem e
            WHERE e.id_emblem = :id";

            return $this->getOneOrNullResult(
                DAO::update($sql,['id'=>$id]),
                $this->className
            );
        }

    }