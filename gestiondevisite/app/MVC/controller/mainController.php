<?php

function mainController($action){
    if($action == "Login"){
        return "login_view.php";
    }
    elseif($action == "Register"){
        return "register_view.php";
    }
    elseif($action == "menu"){
        return "menu_view.php";
    }
}
