<?php

include '../modele/connexionDB.php';

Class visiteur_DAO
{

    public function getAllbyLogin($login){
        $connexion = new connexionDB();
        $connexion->connexionPDO();
        $query = $connexion->PrepareRequete('SELECT * FROM visiteur WHERE login = :login');
        $query->bindValue(':login', $login, PDO::PARAM_STR);
        $query->execute();
        $result = $query-> fetch(PDO::FETCH_ASSOC);
        if($result){
            return $result;
        }
        else{
            return false;
        }
    }

    public function getAllVisiteur() {
        $resultat = array();
        try {
            $connexion = new connexionDB();
            $connexion->connexionPDO();
            $query =  $connexion->PrepareRequete("Select * from visiteur");
            $query->execute();
            $ligne = $query->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = $ligne;
                $ligne = $query->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public function getInfoById($id){
        $result = array();
        try {
            $connexion = new connexionDB();
            $connexion->connexionPDO();
            $query =  $connexion->PrepareRequete("Select * from visiteur where id= :id");
            $query->bindValue(':id', $id, PDO::PARAM_STR);
            $query->execute();
            $ligne = $query->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $result[] = $ligne;
                $ligne = $query->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $result;
    }

    public static function getElementUserByLogin($login){
        $connexion = new connexionDB();
        $connexion->connexionPDO();
        $query = $connexion->PrepareRequete('SELECT * FROM `visiteur` where login= :login');
        $query->bindValue(':login', $login, PDO::PARAM_STR);
        $query->execute();
        $result = $query-> fetch(PDO::FETCH_ASSOC);
        if($result){
            return $result;
        }
        else{
            return false;
        }
    }

    public function UpdatePassword($id, $pwd)
    {
        $connexion = new connexionDB();
        $connexion->connexionPDO();
        $query = $connexion->PrepareRequete('UPDATE `visiteur` SET `mdp`= :pwd WHERE Id = :id');

        $query->bindValue(':pwd', $pwd, PDO::PARAM_STR);
        $query->bindValue(':id', $id, PDO::PARAM_STR);

        $query->execute();
    }
}
