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

        public function more($id){

            $qttManager = new QttManager();

            $qttManager->minus($id);
            $this->redirectTo($ctrl,$action,$id);
        }

        public function less($id){

            $qttManager = new QttManager();

            if($qttManager->findOneById($id)->getQtt() != 0){ 
                $qttManager->minus($id);
                $this->redirectTo($ctrl,$action,$id);
            }
            else{
                $this->redirectTo($ctrl,$action,$id);
            }
        }
    }