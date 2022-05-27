<?php

Class Database {
    // Définition des attributs
    protected $host;
    protected $port;
    protected $dbname;
    protected $user;
    protected $passwd;
    protected $cnx;

    // Constructeur initialisation des données
    public function __construct(){
        $this->host   = "localhost";
        $this->port   = 3306;
        $this->dbname = "projet_communautaire";
        $this->user   = "root";
        $this->passwd = "";
        $this->cnx = null;
    }

    public function connect(){
        //Connexion à la base de données
        try{
            $this->cnx = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->passwd);
            $this->cnx->exec("set names utf8");
        }
        
        catch(PDOException $exception){
            echo "Connexion à la base de données impossible : " . $exception->getMessage();
        }
        return $this->cnx;   
        }
}
?>


