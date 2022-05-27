<?php
session_start();

class userController{
    public $modeleLog;

    public function __construct()
        {
          include_once("models/user.php");
          $this->modeleLog = new user();
          $cnx=$this->modeleLog->connect();
        }

        public function login(){  
          $login = htmlspecialchars($_POST['loginuser']);
          $password = htmlspecialchars($_POST['mdpuser']); 
          $log = $this->modeleLog->getLogin($login, $password); 
     
          if(isset($_POST['formConnect'])){
            //On recupere le login et le mot de passe
            if(!empty($login) && !empty($password)){
              $_SESSION['idMembre'] = $log; 
              var_dump($_SESSION);
                exit;

              if($log > 0){ 
                
                
                header("Location: ./index.php?controller=user&method=login".$_SESSION['idMembre']);
                
              }
            }

            

            else{
              header("Location: ./index.php?msg=Login ou mot de passe incorrect !");
              /*$erreur = "Login ou mot de passe incorrect !";*/            
            }
          }
          
      }

      //Déconnexion
      /*function logout(){
		    Session::destroy();
		    header('location: index');
		    exit;
	    }*/
  
}

?>