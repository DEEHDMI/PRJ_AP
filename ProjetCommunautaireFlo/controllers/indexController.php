<?php

class indexController{
    
   

    public function __construct()
    {
      include_once("models/user.php");
      $this->loginModel = new user();
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