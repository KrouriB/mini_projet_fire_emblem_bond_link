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
                SELECT *
                FROM qtt q
                INNER JOIN heros h ON q.heros_id = h.id_heros
                INNER JOIN anneau a ON q.anneau_id = a.id_anneau
                ORDER BY a.id_anneau DESC, h.id_heros ASC";

            return $this->getMultipleResults(
                    DAO::select($sql),
                    $this->className
            );
        }

        public function allRiningByRarity($id){
            $sql="
                SELECT *
                FROM qtt q
                INNER JOIN heros h ON q.heros_id = h.id_heros
                INNER JOIN anneau a ON q.anneau_id = a.id_anneau
                WHERE a.id_anneau = :id
                ORDER BY h.id_heros ASC";

            return $this->getMultipleResults(
                    DAO::select($sql,['id'=>$id]),
                    $this->className
            );
        }

        public function allRingByEmplacement($id){
            $sql="
                SELECT *
                FROM qtt q
                INNER JOIN heros h ON q.heros_id = h.id_heros
                INNER JOIN anneau a ON q.anneau_id = a.id_anneau
                WHERE h.emplacement = :id
                ORDER BY a.id_anneau DESC, h.id_heros ASC";

            return $this->getMultipleResults(
                    DAO::select($sql,['id'=>$id]),
                    $this->className
            );
        }

        public function allRingByEmblem($id){
            $sql="
                SELECT *
                FROM qtt q
                INNER JOIN heros h ON q.heros_id = h.id_heros
                INNER JOIN anneau a ON q.anneau_id = a.id_anneau
                INNER JOIN emblem e ON h.emblem_id = e.id_emblem
                WHERE e.id_emblem = :id
                ORDER BY a.id_anneau DESC, h.id_heros ASC";

            return $this->getMultipleResults(
                    DAO::select($sql,['id'=>$id]),
                    $this->className
            );
        }

        public function add($id){
            $sql ="
                UPDATE $this->tableName
                SET qtt = qtt + 1
                WHERE heros_id = :id";

            // var_dump($sql);die;

            return $this->getOneOrNullResult(
                DAO::update($sql,['id'=>$id]),
                $this->className
            );
            
        }

        public function minus($id){
            $sql ="
                UPDATE $this->tableName
                SET qtt = qtt - 1
                WHERE heros_id = :id";

            // var_dump($sql);die;

            return $this->getOneOrNullResult(
                DAO::update($sql,['id'=>$id]),
                $this->className
            );
            
        }
    }