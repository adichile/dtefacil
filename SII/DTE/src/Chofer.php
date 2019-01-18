<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

class Chofer{
    public $RUTChofer;
    public $NombreChofer;

    function getRUTChofer() {
        return $this->RUTChofer;
    }

    function getNombreChofer() {
        return $this->NombreChofer;
    }

    function setRUTChofer($RUTChofer) {
        $this->RUTChofer = $RUTChofer;
    }

    function setNombreChofer($NombreChofer) {
        $this->NombreChofer = $NombreChofer;
    }
}
