<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;

    class QttManager extends Manager{

        protected $className = "Model\Entities\Qtt";
        protected $tableName = "Qtt";


        public function __construct(){
            parent::connect();
        }

        public function allTheRing(){
            $sql="
                SELECT h.nom , a.lettre , q.qtt
                FROM qtt q
                INNER JOIN heros h ON q.heros_id = h.id_heros
                INNER JOIN anneau a ON q.anneau_id = a.id_anneau";

            return $this->getMultipleResults(
                    DAO::select($sql),
                    $this->className
            );
        }

        public function allRiningByRarity($id){
            $sql="
                SELECT h.nom , q.qtt
                FROM qtt q
                INNER JOIN heros h ON q.heros_id = h.id_heros
                INNER JOIN anneau a ON q.anneau_id = a.id_anneau
                WHERE a.id_anneau = :id";

            return $this->getMultipleResults(
                    DAO::select($sql,['id'=>$id]),
                    $this->className
            );
        }

        public function allRingByEmplacement($id){
            $sql="
                SELECT h.nom , a.lettre , q.qtt
                FROM qtt q
                INNER JOIN heros h ON q.heros_id = h.id_heros
                INNER JOIN anneau a ON q.anneau_id = a.id_anneau
                WHERE h.emplacement = :id";

            return $this->getMultipleResults(
                    DAO::select($sql,['id'=>$id]),
                    $this->className
            );
        }

        public function allRingByEmblem($id){
            $sql="
                SELECT h.nom , a.lettre , q.qtt
                FROM qtt q
                INNER JOIN heros h ON q.heros_id = h.id_heros
                INNER JOIN anneau a ON q.anneau_id = a.id_anneau
                INNER JOIN emblem e ON h.emblem_id = e.id_emblem
                WHERE e.id_emblem = :id";

            return $this->getMultipleResults(
                    DAO::select($sql,['id'=>$id]),
                    $this->className
            );
        }
    }