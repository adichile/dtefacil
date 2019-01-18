<?php
namespace ADICHILE\DTEFACIL\SII\LIBRO\COMPRA;

class TotLiquidaciones{
    public $TotValComNeto;
    public $TotValComExe;
    public $TotValComIVA;
            
    function getTotValComNeto() {
        return $this->TotValComNeto;
    }

    function getTotValComExe() {
        return $this->TotValComExe;
    }

    function setTotValComNeto($TotValComNeto) {
        $this->TotValComNeto = $TotValComNeto;
    }

    function setTotValComExe($TotValComExe) {
        $this->TotValComExe = $TotValComExe;
    }       
            
}