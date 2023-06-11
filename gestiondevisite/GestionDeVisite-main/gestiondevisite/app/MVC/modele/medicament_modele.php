<?php


include "../modele/medicament_DAO.php";

class medicament_modele
{
    private $id;
    private $nomCommercial;
    private $composition;
    private $effets;
    private $contreIndications;

    public function __construct($medicament)
    {
        $this->id = $medicament["id"];
        $this->nomCommercial = $medicament["nomCommercial "];
        $this->composition = $medicament["composition"];
        $this->contreIndications = $medicament["contreIndications"];
        $this->effets = $medicament["effets"];
    }

    public function getIdMedicament()
    {
        return $this->id;
    }

    public function getNameMedicament()
    {
        return $this->nomCommercial;
    }

    public function getCompositionMedicament()
    {
        return $this->composition;
    }

    public function getContreIndications()
    {
        return $this->contreIndications;
    }

    public function getEffets()
    {
        return $this->effets;
    }

}

