<?php

class personnelController{
    public $modelePersonnel;

    
    public function __construct()
        {
          include_once("models/Personnel.php");
          $this->modelePersonnel = new Personnel();
          $cnx=$this->modelePersonnel->connect();
        }

    public function index(){      
        $all_perso = $this->modelePersonnel->all();
        require_once 'views/personnel/all_perso.php';  
        
    }

}

?>