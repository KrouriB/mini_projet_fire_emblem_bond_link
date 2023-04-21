<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;

    class AnneauManager extends Manager{

        protected $className = "Model\Entities\Anneau";
        protected $tableName = "anneau";


        public function __construct(){
            parent::connect();
        }


    }