<?php

class User extends Database{
    
    public function getLogin($login, $password){
               
    //requete qui prend en parametre le mail et le mot de passe de la table membre
    $rqtUser = $this->cnx->prepare("SELECT * FROM membre WHERE mailMembre = ? AND mdpMembre = ?");
    $rqtUser->execute(array($login, $password));           
    $userInfo = $rqtUser->fetch(PDO::FETCH_ASSOC);
    return $userInfo; //retourne la requete
                 
    }
}



?>