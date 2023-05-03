<?php

include_once'../modele/medicament_DAO.php';

$medicamentDAO = new medicament_DAO();

if(isset($_REQUEST['functionSee'])){    //function to see more about one user
    $view = true;
    $dataMedicament = $medicamentDAO->getInfoById($_REQUEST['functionSee']);

    require_once ("../view/header_view.php");
    require_once("../view/medicamentMAJ_view.php");
}

else
{
    $dataMedicament = $medicamentDAO->getAllMedicament();

    require_once('../view/header_view.php');
    require_once('../view/medicament_view.php');
}



