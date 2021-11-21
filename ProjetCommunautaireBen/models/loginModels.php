<?php

class loginModels extends Database{
    
    public function login(){

        if(isset($_POST['formConnect'])){
            //On recupere le login et le mot de passe
            $login = htmlspecialchars($_POST['loginuser']);
            $password = htmlspecialchars($_POST['mdpuser']);
               
            //condition pour se connecter en tant qu'utilisateurs
            if(!empty($login) && !empty($password)){
                $rqtUser = $this->cnx->prepare("SELECT * FROM membre WHERE mailMembre = ? AND mdpMembre = ?");
                $rqtUser->execute(array($login, $password));           
            }
                        
            if($rqtUser->rowCount() == 1){
                $userInfo = $rqtUser->fetch();
                    
                $_SESSION['idMembre'] = $userInfo['idMembre'];
                header("Location: index.php?id=".$_SESSION['idMembre']);
                }
    
            else{
                $erreur = "Login ou mot de passe incorrect !";               
            }
        }  
            
    }
}



?>