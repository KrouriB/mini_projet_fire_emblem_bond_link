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

    }