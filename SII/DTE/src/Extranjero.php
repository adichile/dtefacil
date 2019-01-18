<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

class Extranjero{
    public $NumId;//Num. Identif. Receptor Extranjero
    public $Nacionalidad;//Nacionalidad Receptor Extranjero

    function getNumId() {
        return $this->NumId;
    }

    function getNacionalidad() {
        return $this->Nacionalidad;
    }

    function setNumId($NumId) {
        $this->NumId = $NumId;
    }

    function setNacionalidad($Nacionalidad) {
        $this->Nacionalidad = $Nacionalidad;
    }
}