<?php
namespace ADICHILE\DTEFACIL\SII\BOLETAS\REPORTE_CONSUMO_FOLIOS;
class Rangos{
    public $Inicial;     
    public $Final;
 
    function getInicial() {
        return $this->Inicial;
    }

    function getFinal() {
        return $this->Final;
    }

    function setInicial($Inicial) {
        $this->Inicial = $Inicial;
    }

    function setFinal($Final) {
        $this->Final = $Final;
    }
    
}
