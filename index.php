<?php

include '../MVC/controller/mainController.php';

if (isset($_GET["action"])) {
    $action = $_GET["action"];
}
else {
    $action = "menu";
}

$direction = mainController($action);

if(!$action == "Login"){
    require_once '../MVC/view/header_view.php';
    require_once '../MVC/view/'.$direction;
}
else{
    require_once '../MVC/view/'.$direction;
}





