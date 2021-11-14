<?php

class indexController{
    
   

    public function __construct()
    {
      include_once("models/loginModels.php");
      $this->loginModel = new loginModels();
      $cnx=$this->loginModel->connect();
    }

    public function index()
        {
        require_once 'views/index/index.php';
        }

    public function login()
        {
            
        require_once 'views/login/login.php';

        }

}

?>