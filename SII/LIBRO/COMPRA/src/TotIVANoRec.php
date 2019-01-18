<?php

class TotIVANoRec{
    public $CodIVANoRec;// Codigo de IVA no Recuperable
    public $TotOpIVANoRec;// Total de operaciones iva no recuperable
    public $TotMntIVANoRec;// Monto IVA no recuperable
    
    
    function getCodIVANoRec() {
        return $this->CodIVANoRec;
    }

    function getTotOpIVANoRec() {
        return $this->TotOpIVANoRec;
    }

    function getTotMntIVANoRec() {
        return $this->TotMntIVANoRec;
    }

    function setCodIVANoRec($CodIVANoRec) {
        $this->CodIVANoRec = $CodIVANoRec;
    }

    function setTotOpIVANoRec($TotOpIVANoRec) {
        $this->TotOpIVANoRec = $TotOpIVANoRec;
    }

    function setTotMntIVANoRec($TotMntIVANoRec) {
        $this->TotMntIVANoRec = $TotMntIVANoRec;
    }


}