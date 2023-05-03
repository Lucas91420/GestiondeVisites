<?php


include "../modele/medecin_DAO.php";

class medecin_modele
{
    private $id;
    private $name;
    private $nickname;
    private $password;

    public function __construct($medecin)
    {
        $this->id = $medecin["id"];
        $this->name = $medecin["nom"];
        $this->nickname = $medecin["prenom"];
        $this->password = $medecin["mdp"];
    }

    public function getIdMedecin()
    {
        return $this->id;
    }

    public function getNameMedecin()
    {
        return $this->name;
    }

    public function getFullNameMedecin()
    {
        return "$this->name $this->nickname";
    }
}
