<?php

class Personnel extends Database{
    
    public function all(){
        $perso = 'personnel';
        $sql_etu = "SELECT * FROM membre where statut = '$perso';";
            $rqt_etu = $this->cnx->prepare($sql_etu);
            $rqt_etu->execute();
            $tab_etu = $rqt_etu->fetchAll(PDO::FETCH_OBJ);
            return $tab_etu;
    }
}



?>