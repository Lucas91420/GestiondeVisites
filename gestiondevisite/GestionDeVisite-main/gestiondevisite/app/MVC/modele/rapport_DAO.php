<?php

include '../modele/connexionDB.php';

class rapport_DAO
{

/////////////////////////Fonction getAlL /////////////////////////////////////

    public function getAllRapport()
    {
        $resultat = array();
        try {
            $connexion = new connexionDB();
            $connexion->connexionPDO();
            $query = $connexion->PrepareRequete("Select * from rapport");
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

    /////////////////////////Fonction getInfosById /////////////////////////////////////

    public function getInfoById($id)
    {
        $result = array();
        try {
            $connexion = new connexionDB();
            $connexion->connexionPDO();
            $query = $connexion->PrepareRequete
            ('
Select rapport.id as rapportID, 
       dateRapport, 
       motif, 
       bilan, 
       idVisiteur, 
       idMedecin,
       medecin.id, 
       medecin.nom as medecinnom, 
       medecin.prenom as medecinprenom, 
       tel, 
       visiteur.id, 
       visiteur.nom as visiteurnom, 
       visiteur.prenom as visiteurprenom
from 
    rapport, 
     medecin,
     visiteur 
where 
    rapport.id= :id 
    and 
      idMedecin = medecin.id 
    and 
      idVisiteur = visiteur.id');

            $query->bindValue(':id', $id, PDO::PARAM_INT);
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

    /////////////////////////Fonction getById pour la vue ///////////////////////////////

    public function getByIdVisiteur($idVisiteur)
    {
        $result = array();
        try {
            $connexion = new connexionDB();
            $connexion->connexionPDO();
            $query = $connexion->PrepareRequete("Select * from rapport where idVisiteur= :idVisiteur");
            $query->bindValue(':idVisiteur', $idVisiteur, PDO::PARAM_STR);
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


/////////////////////////Fonction modifier rapport//////////////////////////////////

    public function updateRapport($bilan, $motif, $date, $id)
    {
        try {
            $connexion = new connexionDB();
            $connexion->connexionPDO();
            $query = $connexion->PrepareRequete("UPDATE rapport SET dateRapport = :dateRapport, motif = :motif, bilan = :bilan WHERE id = :id");
            $query->bindParam(':bilan', $bilan, PDO::PARAM_STR);
            $query->bindParam(':motif', $motif, PDO::PARAM_STR);
            $query->bindParam(':dateRapport', $date, PDO::PARAM_STR);
            $query->bindParam(':id', $id, PDO::PARAM_INT);

            $query->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }




    /////////////////////////Fonction ajouter dans le parent ///////////////////////////

    public function addRapport($date, $motif, $bilan, $idVisiteur, $idMedecin)
    {
        try {
            $connexion = new connexionDB();
            $connexion->connexionPDO();
            $query = $connexion->PrepareRequete("
    INSERT INTO 
        `rapport`(
                  `dateRapport`, 
                  `motif`, 
                  `bilan`, 
                  `idVisiteur`, 
                  `idMedecin`) 
                  VALUES (
                          :date,
                          :motif,
                          :bilan,
                          :idVisiteur,
                          :idMedecin)");

            $query->bindValue(':date', $date, PDO::PARAM_STR);
            $query->bindValue(':motif', $motif, PDO::PARAM_STR);
            $query->bindValue(':bilan', $bilan, PDO::PARAM_STR);
            $query->bindValue(':idVisiteur', $idVisiteur, PDO::PARAM_STR);
            $query->bindValue(':idMedecin', $idMedecin, PDO::PARAM_INT);

            $query->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    /////////////////////////Fonction ajouter dans l'enfant ////////////////////////////

    public function addOffrir($id, $idMedicament, $quantite)
    {
        print "EURE TITOY";
        try {
            $connexion = new connexionDB();
            $connexion->connexionPDO();
            $query = $connexion->PrepareRequete(
                "INSERT INTO 
                `offrir`(
                     `idRapport`,
                     `idMedicament`, 
                     `quantite`) 
                     VALUES (
                             :id,
                             :idMedicament,
                             :quantite)");

            $query->bindValue(':id', $id, PDO::PARAM_STR);
            $query->bindValue(':idMedicament', $idMedicament, PDO::PARAM_STR);
            $query->bindValue(':quantite', $quantite, PDO::PARAM_INT);

            $query->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    /////////////////////////Fonction avoir tout les visiteurs ///////////////////////////////

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
        }
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    ///////////////////////// Tous les médicaments /////////////////////////////////////

    public function getAllMedicaments() {
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
        }
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    /////////////////////////procédure supprimer rapport ///////////////////////////////

    public function deleteRapport($id){ //Chaque delete doit supprimer l'enfant en premier si besoin
        try {
            $connexion = new connexionDB();
            $connexion->connexionPDO();

            //Delete l'enfant dabord
            $query2 =  $connexion->PrepareRequete("DELETE FROM `offrir` WHERE idRapport = :id");
            $query2->bindValue(':id', $id, PDO::PARAM_INT);
            $query2->execute();

            //ensuite son parent
            $query =  $connexion->PrepareRequete("DELETE FROM `rapport` WHERE id = :id");
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    /////////////////////////Fonction getId d'un rapport précis //////////////////////////

    public function getIdRapportByAll($date, $motif, $bilan, $Visiteur, $Medecin){
        try {
            $connexion = new connexionDB();
            $connexion->connexionPDO();
            $query = $connexion->PrepareRequete("Select id from rapport WHERE dateRapport = :dateRapport and motif= :motif and bilan= :bilan and idVisiteur= :Visiteur and idMedecin= :Medecin");

            $query->bindValue(':dateRapport', $date, PDO::PARAM_STR);
            $query->bindValue(':motif', $motif, PDO::PARAM_STR);
            $query->bindValue(':bilan', $bilan, PDO::PARAM_STR);
            $query->bindValue(':Visiteur', $Visiteur, PDO::PARAM_STR);
            $query->bindValue(':Medecin', $Medecin, PDO::PARAM_STR);

            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $result;
    }


}