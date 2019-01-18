<?php
namespace ADICHILE\DTEFACIL\SII\LIBRO\COMPRA;

class Liquidaciones{
    public $RutEmisor;
    public $ValComNeto;
    public $ValComExe;
    public $ValComIVA;
    
    function getRutEmisor() {
        return $this->RutEmisor;
    }

    function getValComNeto() {
        return $this->ValComNeto;
    }

    function getValComExe() {
        return $this->ValComExe;
    }

    function getValComIVA() {
        return $this->ValComIVA;
    }

    function setRutEmisor($RutEmisor) {
        $this->RutEmisor = $RutEmisor;
    }

    function setValComNeto($ValComNeto) {
        $this->ValComNeto = $ValComNeto;
    }

    function setValComExe($ValComExe) {
        $this->ValComExe = $ValComExe;
    }

    function setValComIVA($ValComIVA) {
        $this->ValComIVA = $ValComIVA;
    }


}
