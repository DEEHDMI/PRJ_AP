<?php

class profilController{

    public $modProfil;

    public function __construct()
        {
          include_once("models/profilMembre.php");
          $this->modProfil = new profilMembre();
          $cnx=$this->modProfil->connect();
        }

        public function Profil(){ 
            $myProfil = $this->modProfil->getProfil();
            require_once 'views/profil/profil.php';  
            var_dump($myProfil); exit;
        }      
}

?>