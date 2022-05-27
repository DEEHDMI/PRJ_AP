<?php

class loginMembre extends Database{

    //Fonction qui récupère le mail et mot de passe
    public function getLogin($login, $password){
        $rqtUser = "SELECT * FROM membre WHERE mailMembre = ? AND mdpMembre = ?";
        $rqtUser = $this->cnx->prepare($rqtUser);
        $rqtUser->execute(array($login, $password));  
        return $rqtUser->fetchAll(PDO::FETCH_ASSOC);;
    }
}

?> 