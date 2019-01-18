<?php

class IvaNoRec{
    public $CodIVANoRec;// Codigo de IVA no Recuperable
    public $MntIVANoRec;// Monto IVA no recuperable
    
    function getCodIVANoRec() {
        return $this->CodIVANoRec;
    }

    function getMntIVANoRec() {
        return $this->MntIVANoRec;
    }

    function setCodIVANoRec($CodIVANoRec) {
        $this->CodIVANoRec = $CodIVANoRec;
    }

    function setMntIVANoRec($MntIVANoRec) {
        $this->MntIVANoRec = $MntIVANoRec;
    }


}

