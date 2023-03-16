<?php

include_once'../modele/medecin_modele.php';

$medecinDATA = new medecin_DAO();

/////////////////////////Fonction Voir /////////////////////////////////////

if(isset($_REQUEST['functionSee'])){
    $view = true;

    $medecinData = $medecinDATA->getInfosMedecins($_GET['functionSee']);
    $rapportMedecin = $medecinDATA->getRapportMedecin($_GET['functionSee']);

    require_once ("../view/header_view.php");
    require_once("../view/medecinMAJ_view.php");
}

/////////////////////////Fonction Modifier /////////////////////////////////////

elseif(isset($_REQUEST["functionModif"])){
    $view = false;

    $medecinData = $medecinDATA->getInfosMedecins($_GET['functionModif']);
    $rapportMedecin = $medecinDATA->getRapportMedecin($_GET['functionModif']);

    require_once ("../view/header_view.php");
    require_once("../view/medecinMAJ_view.php");
}

/////////////////////////Confirm info /////////////////////////////////////

elseif(isset($_REQUEST["confirmInfo"])){

    if(isset($_REQUEST["nom"]) ||
        isset($_REQUEST["prenom"]) ||
        isset($_REQUEST["adresse"]) ||
        isset($_REQUEST["telephone"]) ||
        isset($_REQUEST["speComplementaire"]) ||
        isset($_REQUEST["departement"]))
    {
        $medecinDATA->UpdateMedecinInfos(
            $_REQUEST["confirmInfo"],
            $_REQUEST["nom"],
            $_REQUEST["prenom"],
            $_REQUEST["adresse"],
            $_REQUEST["telephone"],
            $_REQUEST["speComplementaire"],
            $_REQUEST["departement"]);

        $medecinData = $medecinDATA->getAllMedecins();
        require_once('../view/header_view.php');
        require_once('../view/medecin_view.php');
    }
    else
    {
        $view = false;

        $medecinData = $medecinDATA->getInfosMedecins($_GET['confirmInfo']);
        $rapportMedecin = $medecinDATA->getRapportMedecin($_GET['confirmInfo']);

        require_once ("../view/header_view.php");
        require_once("../view/medecinMAJ_view.php");
    }
}

/////////////////////////Autres conditions /////////////////////////////////////

else{
    $medecinData = $medecinDATA->getAllMedecins();

    require_once('../view/header_view.php');
    require_once('../view/medecin_view.php');
}

