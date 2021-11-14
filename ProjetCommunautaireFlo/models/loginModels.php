<?php

class loginModels extends Database{
    
    public function logModelEtu(){
        /*$sql_etu = 'SELECT * FROM etudiant;';
            $rqt_etu = $this->cnx->prepare($sql_etu);
            $rqt_etu->execute();
            $tab_etu = $rqt_etu->fetchAll(PDO::FETCH_OBJ);
            return $tab_etu;*/

            $rqtEtu = 'SELECT * FROM etudiant WHERE id = ?';
            $rqtEtu = $this->cnx->prepare($rqtEtu);
            
    }
}



?>