<?php

class ResumenPeriodo{
    public $TotalesPeriodo;// Corresponde al Rut del contribuyente emisor con gui�n y d�gito verificador

    function getTotalesPeriodo() {
        return $this->TotalesPeriodo;
    }
    
    function setTotalesPeriodo($TotalesPeriodo) {
        $this->TotalesPeriodo[] = $TotalesPeriodo;
    }

}