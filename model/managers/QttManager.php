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
    }