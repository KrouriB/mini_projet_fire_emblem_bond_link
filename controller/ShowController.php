<?php

    namespace Controller;

    use App\Session;
    use App\AbstractController;
    use App\ControllerInterface;
    // use Model\Managers\""Manager;
    use Model\Managers\AnneauManager;
    use Model\Managers\EmblemManager;
    use Model\Managers\HerosManager;
    use Model\Managers\QttManager;
    
    class ShowController extends AbstractController implements ControllerInterface{

        private array $emblem;
        private array $emplacement;
        private array $rarity;

        public function __construct(){
            $emblemManager = new EmblemManager();
            $herosManager = new HerosManager();
            $anneauManager = new AnneauManager();
            $this->emblem = array($emblemManager->findAll(["perso", "ASC"]));
            $this->emplacement = array($herosManager->emplacement());
            $this->rarity = array($anneauManager->findAll(["id_anneau", "DESC"]));
        }

        public function index(){}
        
        public function allRing(){

            $qttManager = new QttManager();

            return [
                "view" => VIEW_DIR."show/allRing.php",
                "data" => [
                    "qtt" => $qttManager->allTheRing(),
                    "emblemMenu" => $this->emblem,
                    "emplacementMenu" => $this->emplacement,
                    "rarityMenu" => $this->rarity
                    ]
            ];
        }

        public function ringByEmblem($id){

            $qttManager = new QttManager();
            $emblemManager = new EmblemManager();

            return [
                "view" => VIEW_DIR."show/ringByEmblem.php",
                "data" => [
                    "qtt" => $qttManager->allRingByEmblem($id),
                    "emblem" => $emblemManager->nameEmblem($id),
                    "emblemMenu" => $this->emblem,
                    "emplacementMenu" => $this->emplacement,
                    "rarityMenu" => $this->rarity
                    ]
            ];
        }

        public function ringByEmplacement($id){

            $qttManager = new QttManager();

            return [
                "view" => VIEW_DIR."show/ringByEmplacement.php",
                "data" => [
                    "qtt" => $qttManager->allRingByEmplacement($id),
                    "emblemMenu" => $this->emblem,
                    "emplacementMenu" => $this->emplacement,
                    "rarityMenu" => $this->rarity
                    ]
            ];
        }

        public function ringByRarity($id){

            $qttManager = new QttManager();

            return [
                "view" => VIEW_DIR."show/ringByRarity.php",
                "data" => [
                    "qtt" => $qttManager->allRiningByRarity($id),
                    "emblemMenu" => $this->emblem,
                    "emplacementMenu" => $this->emplacement,
                    "rarityMenu" => $this->rarity
                    ]
            ];
        }

        public function moreAll($id,$id2){

            $qttManager = new QttManager();

            $qttManager->more($id,$id2);
            $this->redirectTo("show","allRing");
        }

        public function lessAll($id,$id2){
        
            $qttManager = new QttManager();

            $qttManager->minus($id,$id2);
            $this->redirectTo("show","allRing");
        }

        public function moreEmblem($id,$id2,$id3){

            $qttManager = new QttManager();

            $qttManager->more($id,$id2);
            $this->redirectTo("show","ringByEmblem",$id3);
        }

        public function lessEmblem($id,$id2,$id3){
        
            $qttManager = new QttManager();

            $qttManager->minus($id,$id2);
            $this->redirectTo("show","ringByEmblem",$id3);
        }

        public function moreEmplacement($id,$id2,$id3){

            $qttManager = new QttManager();

            $qttManager->more($id,$id2);
            $this->redirectTo("show","ringByEmplacement",$id3);
        }

        public function lessEmplacement($id,$id2,$id3){
        
            $qttManager = new QttManager();

            $qttManager->minus($id,$id2);
            $this->redirectTo("show","ringByEmplacement",$id3);
        }

        public function moreRarity($id,$id2){

            $qttManager = new QttManager();

            $qttManager->more($id,$id2);
            $this->redirectTo("show","ringByRarity",$id2);
        }

        public function lessRarity($id,$id2){
        
            $qttManager = new QttManager();

            $qttManager->minus($id,$id2);
            $this->redirectTo("show","ringByRarity",$id2);
        }
    }