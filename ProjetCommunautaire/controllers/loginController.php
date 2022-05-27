<?php

class loginController{
  public $modeleLog;
  private $login;
  private $password;

  public function __construct()
    {
      require_once("models/loginMembre.php");
      $this->modeleLog = new loginMembre();
      $cnx=$this->modeleLog->connect();
    }

    public function login(){ 

      //On convertit les variables pour éviter les failles xss
      $login = htmlspecialchars($_POST['loginuser']);
      $password = htmlspecialchars($_POST['mdpuser']);

      //Pour le hachage de mot de passe
     
      //Si le mail et le mdp existe alors...
      if(!empty($login) && !empty($password)){

        $log = $this->modeleLog->getLogin($login, $password);
        
        //Récupère les Sessions et se connecte à l'espace utilisateur
        if(!empty($log)){
          $_SESSION['idMembre'] = $log[0]['idMembre'];
          $_SESSION['nomMembre'] = $log[0]['nomMembre'];
          $_SESSION['pnomMembre'] = $log[0]['pnomMembre'];
          $_SESSION['mailMembre'] = $log[0]['mailMembre'];
          $_SESSION['classe'] = $log[0]['classe'];
          $_SESSION['statut'] = $log[0]['statut'];


          header('location:?controller=index&method=index&id='.$_SESSION['idMembre']);
        }

        //Sinon erreur retour au login !
        else{ 
          $erreur = "Login ou mot de passe incorrect !"; 
          header('location:?controller=index&method=login&msg='.$erreur.''); 
        }  
      }         
    }    
        
    //Déconnexion de l'utilisateur
    public function logout(){
      unset($_SESSION['idMembre']);
      session_destroy();
      header('location:?controller=index&method=login');
    }
  
      
}

?>