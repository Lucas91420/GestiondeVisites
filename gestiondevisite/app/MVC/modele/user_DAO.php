<?php

include'../../MVC/modele/connectionDB.php';

Class user_DAO
{

    public function loginDAO($login, $password){
        $connexion = new connectionDB();
        $connexion->connexionPDO();

        //print_r($this->getAllbyEmail($email));
        $checkUser = $this->getAllbyLogin($login);

        if($checkUser["password"] == $password)
        {
            return $this->getAllbyLogin($login);
        }
        else{
            return false;
        }
    }

    public function getAllbyLogin($login){
        $connexion = new connectionDB();
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

    public function getAllUser() {
        $resultat = array();
        try {
            $connexion = new connectionDB();
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
        $resultat = array();
        try {
            $connexion = new connectionDB();
            $connexion->connexionPDO();
            $query =  $connexion->PrepareRequete("Select * from visiteur where Id= :id");
            $query->bindValue(':id', $id, PDO::PARAM_STR);
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

    public static function getElementUserByLogin($login){
        $connexion = new connectionDB();
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
}
