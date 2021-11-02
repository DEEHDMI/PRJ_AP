<?php

class studentController extends Student{
    public $modeleStudent;

    public function __construct()
        {
          include_once("models/Student.php");
          $this->modeleStudent = new Student();
          $cnx=$this->modeleStudent->connect();
        }

    public function index(){      
        $all_etu = $this->modeleStudent->all();
        require_once 'views/student/all_etu.php';  
        
    }


    //login Etudiants
    /*public function Etu(){      
        if(isset($_POST['formconnect'])){
             //On recupere le login et le mot de passe
             $login = htmlspecialchars($_POST['loginuser']);
             $password = htmlspecialchars($_POST['mdpuser']);

            //condition pour se connecter en tant etudiant
            if(!empty($login) && !empty($password)){
                $logEtu = $this->modeleStudent->logModelEtu();
                require_once '/login/login.php';
            }
        }          
    }*/


    public function Etu(){
        $logEtu = $this->modeleStudent->logModelEtu();
        if($logEtu == 'login'){
            require_once 'views/login/login.php';
        }

        else{
            require_once 'views/login/login.php';
        }
    }

    //login Personnels

    //login Admin





}

?>