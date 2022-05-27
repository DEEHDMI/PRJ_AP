<?php

class registerMembre extends Database{
    //Fonction qui récuprère mail, mot de passe
    public function getRegister($nom, $prenom, $mail, $password, $classe, $statut){
        $rqtNewUser="INSERT INTO membre (nomMembre, pnomMembre, mailMembre, mdpMembre, classe, statut) 
        VALUES (?,?,?,?,?,?)";
        $rqtNewUser = $this->cnx->prepare($rqtNewUser);
        $rqtNewUser->execute(array($nom, $prenom, $mail, $password, $classe, $statut)); 
        return $rqtNewUser->fetchAll(PDO::FETCH_ASSOC); 

    }

}

?>