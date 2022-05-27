<?php  
    class profilMembre extends Database {
        
        /*private $idMembre;
        private $nomMembre;
        private $pnomMembre;
        private $mailMembre;
        private $datecrea;
        private $classe;
        private $statut;

        public function __construct($id, $nomMembre, $pnomMembre, $mailMembre, 
        $datecrea, $classe, $statut)
        {
            $this->idMembre = $idMembre;
            $this->nomMembre = $nomMembre;
            $this->pnomMembre = $pnomMembre;
            $this->mailMembre = $mailMembre;
            $this->datecrea = $datecrea;
            $this->classe = $classe;
            $this->statut = $statut;

            
        }*/

        public function getProfil($id){
            
            // Nous utilisons une requête SQL à la  base de données
            // pour accèder au profil demandé 
            $id = 'id';
            $sql="SELECT * FROM membre WHERE idMembre = ?;";
            $rqt= $this->cnx->prepare($sql);
            $rqt->execute(array($id));
            $profil = $rqt->fetch(PDO::FETCH_OBJ); 
            return $profil;

            
            
        }
    }
?>