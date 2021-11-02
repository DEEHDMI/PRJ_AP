<?php

class Student extends Database{

    public function all(){
        $sql_etu = 'SELECT * FROM etudiant;';
            $rqt_etu = $this->cnx->prepare($sql_etu);
            $rqt_etu->execute();
            $tab_etu = $rqt_etu->fetchAll(PDO::FETCH_OBJ);
            return $tab_etu;
    }
}
?>