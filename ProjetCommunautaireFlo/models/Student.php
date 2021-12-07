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

    public function find_student(){
        $nom_etu =  ($_GET['fname']);
        //$prenom_etu = ($_GET['fprenom']);
        //echo $prenom_etu;


            if ($nom_etu == '') {
                session_start();
                //requete sql pour afficher la liste des étudiants
                $sql_etu = 'SELECT * FROM membre WHERE statut = "etudiant";';
                $rqt_etu = $cnx->prepare($sql_etu);
                $rqt_etu->execute();
                $tab_etu = $rqt_etu->fetchAll(PDO::FETCH_OBJ);
                }
            else {
                session_start();
                $sql_nom = "SELECT * FROM membre WHERE  statut = 'etudiant'  and ( nomMembre  = '{$nom_etu}' or idMembre  = '{$nom_etu}'  or  pnomMembre = '{$nom_etu}'or classe = '{$nom_etu}')";
                //or idEtudiant = '{$nom_etu}'  or  pnomEtudiant = '{$nom_etu}'
                //and  pnomEtudiant = '{$prenom_etu}'
                $rqt_nom = $cnx->prepare($sql_nom);
                $rqt_nom->execute();
                $tab_etu = $rqt_nom ->fetchAll(PDO::FETCH_OBJ);
                }

}

}



?>