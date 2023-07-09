<?php

    namespace App;

    abstract class AbstractController{

        public function index(){}

        public function redirectTo($ctrl = null, $action = null, $id = null, $id2 = null, $id3 = null){
        // fonction generallement native dans des framework pour faire des redirection 
            if($ctrl != "home"){
                $url = $ctrl ? "?ctrl=".$ctrl : "";
                $url .= $action ? "&action=".$action : "";
                $url .= $id ? "&id=".$id : "";
                $url .= $id2 ? "&id2=".$id2 : "";
                $url .= $id3 ? "&id3=".$id3 : "";
            }
            else $url = "index.php";
            header("Location: $url");
            die();
        }

        public function restrictTo($role){
        //  fonction pour restraindre l'acces seulement a certain utilisateur
            if(!Session::getUser() || !Session::getUser()->hasRole($role)){
                $this->redirectTo("security","login");
            }
        return;
        }
    }