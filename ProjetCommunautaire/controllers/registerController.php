<?php

class registerController{
    public $modeleReg;
    private $nom;
    private $prenom;
    private $mail;
    private $password;
    private $repwd;
    private $classe;
    private $statut;


    public function __construct(){
        require_once("models/registerMembre.php");
        $this->modeleReg = new registerMembre();
        $cnx=$this->modeleReg->connect();
    }

    public function register(){

        //Si l'utilisateur se soumet au formulaire...
        if(isset($_POST['registerSubmit'])){
            $nom = htmlspecialchars($_POST['lastusr']);
            $prenom = htmlspecialchars($_POST['firstusr']);
            $mail= htmlspecialchars($_POST['mail']);
            $password = htmlspecialchars($_POST['pwd']);
            $repwd = htmlspecialchars($_POST['repwd']);
            $classe = htmlspecialchars($_POST['classeMembre']);
            $statut = htmlspecialchars($_POST['statMembre']);

            $pass_hash = password_hash($password, PASSWORD_BCRYPT);

            //Vérifier si le mail existe...

            //Sinon Erreur le mail existe déjà

            
            //Si le mot de passe est le même alors...
            if($password==$repwd){
                $reg = $this->modeleReg->getRegister($nom, $prenom, $mail, $pass_hash, $classe, $statut);
                $RegSuccess = "Inscription Réussie !"; 
                header('location:?controller=index&method=login&msgRegSuccess='.$RegSuccess.'');
            }

            //Sinon Erreur retour à l'inscription
            else{
                $RegErreur = "Erreur les mots de passe ne conrrespondent pas !";
                header('location:?controller=index&method=register&msgRegErreur='.$RegErreur.'');
            }
        

        }
           

           
    }                     
    

}
   
?>