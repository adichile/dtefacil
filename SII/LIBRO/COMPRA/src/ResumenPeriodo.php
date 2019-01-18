<?php

class ResumenPeriodo{
    public $TotalesPeriodo;// Corresponde al Rut del contribuyente emisor con guión y dígito verificador

    function getTotalesPeriodo() {
        return $this->TotalesPeriodo;
    }
    
    function setTotalesPeriodo($TotalesPeriodo) {
        $this->TotalesPeriodo[] = $TotalesPeriodo;
    }

}