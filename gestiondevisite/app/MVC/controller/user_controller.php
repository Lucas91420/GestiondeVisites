<?php

include '../modele/visiteur_modele.php';

$UserDAO = new visiteur_DAO();

if ( isset( $_POST['cnx'])) {
    if ($_POST['login'] != "" && $_POST['password']!= "" ){

        $loginUser= $_POST['login'];
        $password = $_POST['password'];

        $Utilisateur = new visiteur_modele($loginUser);
        $login = $Utilisateur->loginDAO($loginUser, $password); //verification si l'utilisateur existe

        if($login){
            session_start();
            $_SESSION["login"] = $loginUser;

            $Utilisateur->createUserSession();

            require_once('../view/header_view.php');
            require_once('../view/menu_view.php');
        }
        else{
            $message = "<ul class='alert alert-danger' ><h4>Désolé, votre saisie est invalide</h4></ul>";
            require_once('../view/login_view.php');
        }
    }
    else{
        print"<ul class='forgetpass'><h4>Erreur, un ou plusieurs champs sont manquants !</h4></ul>";
        require('../view/login_view.php');
    }
}

/////////////////////////About me /////////////////////////////////////
else if(isset($_REQUEST["AboutMe"]))
{
    session_start();
    $user_modele = new visiteur_modele($_SESSION["login"]);
    $user_modeleDATA = $user_modele->GetTabElement();
    require_once ("../view/header_view.php");
    require_once("../view/aboutMe_view.php");
}

/////////////////////////update password /////////////////////////////////////
else if(isset($_REQUEST["updatePWD"]))
{
    require_once ("../view/header_view.php");
    require_once("../view/newPassword_view.php");
}

/////////////////////////confirm new password ////////////////////////////////
elseif(isset($_REQUEST["confirmNewPWD"]))
{
    session_start();
    if(isset($_REQUEST["oldPWD"]) && isset($_REQUEST["newPWD"]) && isset($_REQUEST["newPWDrpt"]))
    {
        if($_REQUEST["oldPWD"] == $_SESSION["password"] && $_REQUEST["newPWD"] == $_REQUEST["newPWDrpt"])
        {
            $UserDAO->UpdatePassword($_SESSION["id"], $_REQUEST["newPWD"]);
            getView();
        }
        else
        {
            require_once ("../view/header_view.php");
            require_once("../view/newPassword_view.php");
        }
    }
    else
    {
        getView();
    }
}

/////////////////////////LOGOUT /////////////////////////////////////

elseif ( isset($_REQUEST['Logout'])) {
    session_start();
    unset($_SESSION['name']);
    unset($_SESSION['password']);
    unset($_SESSION["email"]);
    unset($_SESSION["Fullname"]);
    session_destroy();
    require_once('../../MVC/view/login_view.php');
}

else {
    getView();
}

/////////////////////////Fonction vue principale /////////////////////////////////////
function getView()
{
    require_once("../view/header_view.php");
    require_once("../view/menu_view.php");
}

















