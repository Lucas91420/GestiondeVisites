<?php

include "../../MVC/modele/visiteur_DAO.php";

class visiteur_modele
{
    private $id;
    private $name;
    private $nickname;
    private $password;
    private $login;
    private $TabElement;

    public function __construct($login)
    {
        $this->TabElement = visiteur_DAO::getElementUserByLogin($login);
        if($this-> TabElement){
            $this->id = $this->TabElement["id"];
            $this->name = $this->TabElement["nom"];
            $this->login = $this->TabElement["login"];
            $this->nickname = $this->TabElement["prenom"];
            $this->password = $this->TabElement["mdp"];
        }
    }

    public function getIdUser()
    {
        return $this->id;
    }

    public function getPasswordUser()
    {
        return $this->password;
    }

    public function getNameUser()
    {
        return $this->name;
    }

    public function getLoginUser()
    {
        return $this->login;
    }

    public function getFullNameUser()
    {
        return "$this->name $this->nickname";
    }

    public function getTabElement(){
        return $this->TabElement;
    }

    public function loginDAO($login, $password)
    {
        $user_DAO = new visiteur_DAO();

        if($this->password == $password)
        {
            return $user_DAO->getAllbyLogin($login);
        }
        else{
            return false;
        }
    }

    public function createUserSession()
    {
        $_SESSION['id'] = $this->id;
        $_SESSION['name'] = $this->name;
        $_SESSION['password'] = $this->password;
    }
}