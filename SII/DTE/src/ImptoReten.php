<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

class ImptoReten{
    public $TipoImp;
    public $TasaImp;
    public $MontoImp;
    
    function getTipoImp() {
        return $this->TipoImp;
    }

    function getTasaImp() {
        return $this->TasaImp;
    }

    function getMontoImp() {
        return $this->MontoImp;
    }

    function setTipoImp($TipoImp) {
        $this->TipoImp = $TipoImp;
    }

    function setTasaImp($TasaImp) {
        $this->TasaImp = $TasaImp;
    }

    function setMontoImp($MontoImp) {
        $this->MontoImp = $MontoImp;
    }

}