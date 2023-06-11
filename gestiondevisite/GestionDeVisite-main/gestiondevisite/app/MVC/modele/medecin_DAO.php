<?php

include '../modele/connexionDB.php';

class medecin_DAO
{

/////////////////////////données d'un médecin /////////////////////////////////////

    public function getInfosMedecins($id){
        $result = array();
        try {
            $connexion = new connexionDB();
            $connexion->connexionPDO();
            $query =  $connexion->PrepareRequete("Select * from medecin where id= :id");
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

    ///////////////////////// Tous les médecins /////////////////////////////////////

    public function getAllMedecins() {
        $resultat = array();
        try {
            $connexion = new connexionDB();
            $connexion->connexionPDO();
            $query =  $connexion->PrepareRequete("Select * from medecin");
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

    ///////////////////////// Rapport d'un médecins /////////////////////////////////////

    public function getRapportMedecin($id)
    {
        $result = array();
        try
        {
            $connexion = new connexionDB();
            $connexion->connexionPDO();
            $query =  $connexion->PrepareRequete("Select * from rapport where idMedecin= :id");
            $query->bindValue(':id', $id, PDO::PARAM_STR);
            $query->execute();
            $ligne = $query->fetch(PDO::FETCH_ASSOC);
            while ($ligne)
            {
                $result[] = $ligne;
                $ligne = $query->fetch(PDO::FETCH_ASSOC);
            }
        }
        catch (PDOException $e)
        {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $result;
    }

///////////////////////// Modifier les données d'un médecin /////////////////////////////////////

    public function UpdateMedecinInfos($id, $nom, $prenom, $adresse, $telephone, $speComplementaire, $departement)
    {
        $connexion = new connexionDB();
        $connexion->connexionPDO();
        $query = $connexion->PrepareRequete('
UPDATE 
    `medecin` 
SET 
    `nom`= :nom,
    `prenom`= :prenom,
    `adresse`= :adresse,
    `tel`= :telephone,
    `specialitecomplementaire`= :speComplementaire,
    `departement`= :departement 
WHERE 
      id ='.$id);

        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
        $query->bindValue(':telephone', $telephone, PDO::PARAM_STR);
        $query->bindValue(':speComplementaire', $speComplementaire, PDO::PARAM_STR);
        $query->bindValue(':departement', $departement, PDO::PARAM_INT);
        $query->execute();
    }
}


