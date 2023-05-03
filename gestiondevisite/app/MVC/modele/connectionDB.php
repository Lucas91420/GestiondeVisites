<?php

Class connectionDB
{
    private $login= "Lucas";
    private $mdp= "";
    private $bdd= "gestiondevisite";
    private $serveur= "localhost";
    private $connect;

    public function connexionPDO(){
        try {
            $this->connect = new PDO("mysql:host=".$this->serveur.";dbname=".$this->bdd, $this->login, $this->mdp);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "Erreur de connexion PDO ";
            die();
        }
        if(!$this->connect){
            die('Erreur : '.mysqli_connect_error());
        }
        //echo 'Connexion réussie'."\n";
    }

    public function PrepareRequete($requete){
        return $this->connect-> prepare($requete);
    }
}
