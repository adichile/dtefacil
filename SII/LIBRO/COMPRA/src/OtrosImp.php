<?php

class OtrosImp{
    public $CodImp;
    public $TasaImp;
    public $MntImp;
    
    function getCodImp() {
        return $this->CodImp;
    }

    function getTasaImp() {
        return $this->TasaImp;
    }

    function getMntImp() {
        return $this->MntImp;
    }

    function setCodImp($CodImp) {
        $this->CodImp = $CodImp;
    }

    function setTasaImp($TasaImp) {
        $this->TasaImp = $TasaImp;
    }

    function setMntImp($MntImp) {
        $this->MntImp = $MntImp;
    }

   
}
