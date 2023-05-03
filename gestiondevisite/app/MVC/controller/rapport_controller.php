<?php

include_once '../modele/rapport_DAO.php';

$rapportDAO = new rapport_DAO();

session_start();
$id = $_SESSION['id'];

/////////////////////////Fonction voir /////////////////////////////////////

if (isset($_REQUEST['functionSee'])) {    //function to see more about one user
    $dataRapport = $rapportDAO->getInfoById($_GET['functionSee']);

    require_once("../view/header_view.php");
    require_once("../view/rapportMAJ_view.php");

}

/////////////////////////Fonction modifier /////////////////////////////////////

else if (isset($_REQUEST['functionEdit'])) {    //function to edit more about one user
    $dataRapport = $rapportDAO->getInfoById($_GET['functionEdit']);

    require_once("../view/header_view.php");
    require_once("../view/rapportMAJ_EDIT_view.php");

}

/////////////////////////Fonction ajouter /////////////////////////////////////

else if(isset($_REQUEST["functionADD"])){
    $dataVisiteur = $rapportDAO-> getAllVisiteur();
    $dataMedecin = $rapportDAO-> getAllMedecins();
    $dataMedicament = $rapportDAO-> getAllMedicaments();

    require_once("../view/header_view.php");
    require_once("../view/rapportADD_view.php");
}

/////////////////////////Fonction confirmer ajouter /////////////////////////////

else if(isset($_REQUEST["confirm"])){

    if(isset($_REQUEST["date"]) &&
        isset($_REQUEST["motif"]) &&
        isset($_REQUEST["bilan"]) &&
        isset($_REQUEST["Visiteur"]) &&
        isset($_REQUEST["Medecin"]) &&
        isset($_REQUEST["Medicament"]) &&
        isset($_REQUEST["quantite"]))
    {
        $rapportDAO->addRapport(
            $_REQUEST["date"],
            $_REQUEST["motif"],
            $_REQUEST["bilan"],
            $_REQUEST["Visiteur"],
            $_REQUEST["Medecin"]);

        $idRapport = $rapportDAO->getIdRapportByAll(
            $_REQUEST["date"],
            $_REQUEST["motif"],
            $_REQUEST["bilan"],
            $_REQUEST["Visiteur"],
            $_REQUEST["Medecin"]);

        $rapportDAO->addOffrir($idRapport["id"], $_REQUEST["Medicament"], $_REQUEST["quantite"]);

        getView($rapportDAO, $id);
    }
    else
    {
        getView($rapportDAO, $id);
    }
}

/////////////////////////Fonction supprimer /////////////////////////////////////

else if(isset($_REQUEST["functionDelete"])){
    $rapportDAO->deleteRapport($_REQUEST["functionDelete"]);

    getView($rapportDAO, $id);
}

else
{
    getView($rapportDAO, $id);
}

/////////////////////////Fonction vue principale /////////////////////////////////////

function getView($rapportDAO, $id){
    $dataRapport = $rapportDAO->getByIdVisiteur($id);

    require_once('../view/header_view.php');
    require_once('../view/rapport_view.php');
}


