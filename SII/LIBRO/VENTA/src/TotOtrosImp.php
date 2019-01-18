<?php
namespace ADICHILE\DTEFACIL\SII\LIBRO\COMPRA;

class TotOtrosImp{
    public $CodImp;
    public $TotMntImp;
    
    function getCodImp() {
        return $this->CodImp;
    }

    function getTotMntImp() {
        return $this->TotMntImp;
    }

    function setCodImp($CodImp) {
        $this->CodImp = $CodImp;
    }

    function setTotMntImp($TotMntImp) {
        $this->TotMntImp = $TotMntImp;
    }

    
}