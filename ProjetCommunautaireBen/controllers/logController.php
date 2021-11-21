<?php

class logController{
    public $modeleLog;

    public function __construct()
        {
          include_once("models/loginModels.php");
          $this->modeleLog = new loginModels();
          $cnx=$this->modeleLog->connect();
        }

    public function index(){      
        $all_perso = $this->modeleLog->login();
        require_once 'views/logReg/login.php';  
        
    }

}

?>