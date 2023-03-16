<?php

include_once'../modele/user_DAO.php';

$UserDAO = new user_DAO();



if(isset($_REQUEST['functionSee'])){    //function to see more about one user
    $dataUser = $UserDAO->getInfoById($_GET['functionSee']);

    $function = "See";

    require_once ("../view/header_view.php");
    require_once("../view/userMAJ_view.php");
}


elseif($_REQUEST["back"]){
    $dataUser = $UserDAO->getAllUser();

    require_once('../view/header_view.php');
    require_once('../view/user_view.php');
}

else{
    $dataUser = $UserDAO->getAllUser();

    require_once('../view/header_view.php');
    require_once('../view/user_view.php');
}