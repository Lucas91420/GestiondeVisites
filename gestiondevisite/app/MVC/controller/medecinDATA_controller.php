<?php

include_once'../modele/medecin_DAO.php';

$UserDAO = new medecin_DAO();

if(isset($_REQUEST['functionSee'])){    //function to see more about one user
    $dataUser = $UserDAO->getInfosMedecins($_GET['functionSee']);

    require_once ("../view/header_view.php");
    require_once("../view/medecinMAJ_view.php");
}

else if($_REQUEST["back"]){
    $dataUser = $UserDAO->getAllMedecins();

    require_once('../view/header_view.php');
    require_once('../view/medecin_view.php');
}

else{
    $dataUser = $UserDAO->getAllMedecins();

    require('../view/header_view.php');
    require('../view/medecin_view.php');
}


