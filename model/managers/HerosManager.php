<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;

    class HerosManager extends Manager{

        protected $className = "Model\Entities\Heros";
        protected $tableName = "heros";


        public function __construct(){
            parent::connect();
        }
    }