<?php

include "../../MVC/modele/user_DAO.php";

class user_modele
{
    private $id;
    private $name;
    private $nickname;
    private $password;
    private $mail;

    public function __construct($email)
    {
        $TabElement = user_DAO::getElementUserByLogin($email);
        $this->id = $TabElement["id"];
        $this->name = $TabElement["nom"];
        $this->nickname = $TabElement["prenom"];
        $this->password = $TabElement["mdp"];
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

    public function getFullNameUser()
    {
        return "$this->name $this->nickname";
    }

    public function createUserSession()
    {
        $_SESSION['name'] = $this->name;
        $_SESSION['password'] = $this->password;
    }
}