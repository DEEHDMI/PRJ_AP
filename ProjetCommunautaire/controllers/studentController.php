<?php

class studentController{
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

    public function etu(){
        $etu = $this->modeleStudent->find_student();
        require_once 'views/student/all_etu.php';  
    }

}

?>