<?php

class Student extends Database{
    
    public function all(){
        $etu = 'etudiant';
        $sql_etu = "SELECT * FROM membre where statut = '$etu';";
            $rqt_etu = $this->cnx->prepare($sql_etu);
            $rqt_etu->execute();
            $tab_etu = $rqt_etu->fetchAll(PDO::FETCH_OBJ);
            return $tab_etu;
    }
}



?>