<?php

include '../modele/connexionDB.php';

Class medicament_DAO
{

    /////////////////////////Get tout les medicaments /////////////////////////////////////

    public function getAllMedicament() {
        $resultat = array();
        try {
            $connexion = new connexionDB();
            $connexion->connexionPDO();
            $query =  $connexion->PrepareRequete("Select * from medicament");
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

/////////////////////////données d'un médoc /////////////////////////////////////

public function getInfoById($id){
    $result = array();
    try {
        $connexion = new connexionDB();
        $connexion->connexionPDO();
        $query =  $connexion->PrepareRequete("Select * from medicament where id= :id");
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $ligne = $query->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $result[] = $ligne;
            $ligne = $query->fetch(PDO::FETCH_ASSOC);
        }
    }
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $result;
    }
}

