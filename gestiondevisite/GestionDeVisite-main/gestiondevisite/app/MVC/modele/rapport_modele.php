<?php

include "../modele/rapport_DAO.php";

class rapport_modele
{
    private $id;
    private $date;
    private $motif;
    private $bilan;

    public function __construct($rapport)
    {
        $this->id = $rapport["id"];
        $this->date = $rapport["date"];
        $this->motif = $rapport["motif"];
        $this->bilan = $rapport["bilan"];
    }

    public function getIdRapport()
    {
        return $this->id;
    }

    public function getDateRapport()
    {
        return $this->date;
    }

    public function getMotif()
    {
        return $this->motif;
    }

    public function getBilan()
    {
        return $this->bilan;
    }
}

