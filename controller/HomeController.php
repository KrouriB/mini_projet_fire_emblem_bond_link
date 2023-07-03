<?php

    namespace Controller;

    use App\Session;
    use App\AbstractController;
    use App\ControllerInterface;
    use Model\Managers\AnneauManager;
    use Model\Managers\EmblemManager;
    use Model\Managers\HerosManager;
    
    class HomeController extends AbstractController implements ControllerInterface{

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

        public function index(){
            return [
                "view" => VIEW_DIR."home.php",
                "data" => [
                    "emblemMenu" => $this->emblem,
                    "emplacementMenu" => $this->emplacement,
                    "rarityMenu" => $this->rarity
                ]
            ];
        }
    }
